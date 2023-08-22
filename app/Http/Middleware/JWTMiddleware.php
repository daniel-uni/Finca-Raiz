<?php

namespace App\Http\Middleware;

use App\Helpers\ResponseHttp;
use Closure;
use Exception;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JWTMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            if ($user) {
                $reponse = $next($request);
            } else {
                $reponse = ResponseHttp::responseError("Usuario no encontrado", 404);
            }
        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException) {
                $reponse = ResponseHttp::responseError("Token Invalido", 401);
            } elseif ($e instanceof TokenExpiredException) {
                $reponse = ResponseHttp::responseError("Token Expirado", 403);
            } else {
                $reponse = ResponseHttp::responseError("Autorización de token no encontrada", 404);
            }
        }
        return $reponse;
    }
}
