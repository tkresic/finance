<?php

namespace App\Http\Middleware;

use Closure;
use Auth0\SDK\Exception\InvalidTokenException;
use Auth0\SDK\Helpers\JWKFetcher;
use Auth0\SDK\Helpers\Tokens\AsymmetricVerifier;
use Auth0\SDK\Helpers\Tokens\TokenVerifier;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Authenticate {
    /**
     * Run the request filter.
     *
     * @param Request $request
     * @param Closure $next
     * @param null $scopeRequired
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $scopeRequired = null) {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json('No token provided', Response::HTTP_UNAUTHORIZED);
        }

        $decodedToken = $this->validateAndDecode($token);

        if (!$decodedToken) {
            return response()->json('Invalid token', Response::HTTP_UNAUTHORIZED);
        }

        if ($scopeRequired && !$this->tokenHasScope($decodedToken, $scopeRequired)) {
            return response()->json('Insufficient scope', Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }

    /**
     * Validates the token.
     *
     * @param $token
     * @return array|false
     */
    public function validateAndDecode($token) {
        try {
            $jwksUri = env('AUTH0_DOMAIN') . '.well-known/jwks.json';
            $jwksFetcher = new JWKFetcher(null, ['base_uri' => $jwksUri]);
            $signatureVerifier = new AsymmetricVerifier($jwksFetcher);
            $tokenVerifier = new TokenVerifier(env('AUTH0_DOMAIN'), env('AUTH0_AUD'), $signatureVerifier);
            return $tokenVerifier->verify($token);
        } catch (InvalidTokenException $e) {
            return false;
        }
    }


    /**
     * Check if a token has a specific scope.
     *
     * @param array $token - JWT access token to check.
     * @param string $scopeRequired - Scope to check for.
     *
     * @return bool
     */
    protected function tokenHasScope(array $token, string $scopeRequired): bool
    {
        if (empty($token['permissions'])) {
            return false;
        }

        return in_array($scopeRequired, $token['permissions']);
    }
}
