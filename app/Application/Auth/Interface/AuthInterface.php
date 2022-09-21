<?php

declare(strict_types = 1);

namespace App\Application\Auth\Interface;

use App\Application\Auth\Requests\LoginRequest;
use App\Application\Auth\Requests\RegisterRequest;

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
