<?php

namespace App\Http\Middleware;

use Closure;
use Auth0\SDK\Exception\InvalidTokenException;
use Auth0\SDK\Helpers\JWKFetcher;
use Auth0\SDK\Helpers\Tokens\AsymmetricVerifier;
use Auth0\SDK\Helpers\Tokens\TokenVerifier;
use Illuminate\Http\Request;


class Authenticate
{
    /**
     * Run the request filter.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json('No token provided', 401);
        }

        $decoded = $this->validateToken($token);

        if ($decoded == null) {
            return response()->json('Invalid token', 401);
        }

        return $next($request);
    }

    /**
     * Validates the token.
     *
     * @param $token
     * @return array|false
     */
    public function validateToken($token)
    {
        try {
            $jwksUri = env('AUTH0_DOMAIN') . '.well-known/jwks.json';
            $jwksFetcher = new JWKFetcher(null, [ 'base_uri' => $jwksUri ]);
            $signatureVerifier = new AsymmetricVerifier($jwksFetcher);
            $tokenVerifier = new TokenVerifier(env('AUTH0_DOMAIN'), env('AUTH0_AUD'), $signatureVerifier);
            return $tokenVerifier->verify($token);
        } catch (InvalidTokenException $e) {
            return false;
        }
    }
}
