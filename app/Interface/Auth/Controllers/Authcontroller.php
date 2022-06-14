<?php declare(strict_types=1);

namespace App\Interface\Auth\Controllers;

use App\Infrastructure\Controllers\Controller;
use App\Application\Auth\Interface\AuthInterface;
use App\Domain\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Authcontroller extends Controller
{
    private $authInterface;

    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    /**
     * Sends a reset password email to the given email
     *
     * @param ResetPasswordEmail $request
     *
     * @return NoContentResponse
     */
    public function login()
    {
        return $this->authInterface->login;
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return NoContentResponse
     */
    public function logout()
    {
        return $this->authInterface->logout;
    }


    /**
     * Returns the authenticated user
     *
     * @return LoggedInUserResource
     */
    public function me()
    {
        return $this->authInterface->me;
    }


    /**
     * Change users passwords
     *
     * @param ChangePasswordRequest $request
     *
     * @return OkResponse
     */
    public function refresh()
    {
        return $this->authInterface->refresh;
    }
}
