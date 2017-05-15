<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\OauthService;

class LoginController extends Controller
{
    protected $oauth;

    public function __construct(OauthService $oauth)
    {
        $this->oauth = $oauth;
    }

    public function login()
    {
        return $this->oauth->redirectToGithub();
    }

    public function callback()
    {
        return $this->oauth->callback();
    }
}
