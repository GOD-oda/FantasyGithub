<?php

namespace App\Repositories;

use Laravel\Socialite\Contracts\Factory as  Socialite;

class GithubRepository implements GithubRepositoryInterface
{
    protected $socialite;

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite->driver('github');
    }

    public function redirect()
    {
        return $this->socialite->redirect();
    }

    public function getUser()
    {
        return $this->socialite->user();
    }
}
