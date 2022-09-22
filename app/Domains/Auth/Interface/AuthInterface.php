<?php

declare(strict_types = 1);

namespace App\Domains\Auth\Interface;

use App\Domains\Auth\Requests\LoginRequest;
use App\Domains\Auth\Requests\RegisterRequest;

interface AuthInterface
{
    /**
     * User login function
     *
     * @param LoginRequest $request
     *
     * @return void
     */
    public function loginUser(LoginRequest $request);

    /**
     * User register function
     *
     * @param RegisterRequest $request
     *
     * @return void
     */
    public function registerUser(RegisterRequest $request);

    /**
     * User logout function
     *
     * @return void
     */
    public function logoutUser();

    /**
     * Loggedin user function
     *
     * @return void
     */
    public function loggedinUser();
}
