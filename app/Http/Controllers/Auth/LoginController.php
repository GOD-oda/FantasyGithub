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
        try {
            $this->oauth->githubCallback();
        } catch (\Exception $e) {
            return redirect('/');
        }

        return redirect('/home');
    }
}
