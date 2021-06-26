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
    public function handle(Request $request, Closure $next, $scopeRequired = null)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json('Žeton nije prisutan', Response::HTTP_UNAUTHORIZED);
        }

        $decodedToken = $this->validateAndDecode($token);

        if (!$decodedToken) {
            return response()->json('Pogrešan žeton', Response::HTTP_UNAUTHORIZED);
        }

        if ($scopeRequired && !$this->tokenHasPermissions($decodedToken, $scopeRequired)) {
            return response()->json('Nedovoljne ovlasti', Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }

    /**
     * Validates the token.
     *
     * @param $token
     * @return array|false
     */
    public function validateAndDecode($token)
    {
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
     * @param array $token
     * @param string $scopeRequired
     *
     * @return bool
     */
    protected function tokenHasPermissions(array $token, string $scopeRequired): bool
    {
        if (empty($token['permissions'])) {
            return false;
        }

        return in_array($scopeRequired, $token['permissions']);
    }
}
