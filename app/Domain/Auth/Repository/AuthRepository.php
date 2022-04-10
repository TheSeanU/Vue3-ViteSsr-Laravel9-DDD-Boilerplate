<?php declare(strict_types = 1);

namespace App\Domain\Auth\Repository;

use App\Domain\User\Models\User;
use App\Domain\Auth\Interface\AuthInterface;
use App\Domain\Auth\Requests\LoginRequest;
use App\Domain\User\Resources\LoggedInUserResource;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Guard;
// use PHPOpenSourceSaver\JWTAuth\JWTGuard;

class AuthRepository implements AuthInterface
{
    /**
     * AuthRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }


    /**
     * Get a JWT via given credentials.
     *
     * @return JsonResponse
     */
    public function login(LoginRequest $request): array
    { 
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            throw ['probeer het opnieuw, of klik hieronder op "wachtwoord vergeten"'];
        }

        cache()->pull('auth' . Auth::id());

        $user = User::find(Auth::id());
        if (!$user) {
            throw [
                'Gebruiker met id %d is wel ingelogd maar kan niet gevonden worden in de database', 
                Auth::id()
            ];
        }

        // $user->remember = request('rememberMe');
        // $user->save();

        $token = Auth::login($user);

        $responseData = [
            'token' => $token,
            'tokenTTL' => config('jwt.ttl'),
            'user' => new LoggedInUserResource($user),
        ];

        return $responseData;
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(): LoggedInUserResource
    {
        return new LoggedInUserResource(Auth::user());

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(Auth::refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60,
            'user' => new LoggedInUserResource(Auth::user()),
        ]);
    }
}