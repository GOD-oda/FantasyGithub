<?php

namespace App\Repositories;

use Laravel\Socialite\Contracts\Factory as Socialite;
use App\DataAccess\Eloquent\User;

class GithubRepository implements GithubRepositoryInterface
{
    protected $githubProvider;

    public function __construct(Socialite $socialite)
    {
        $this->githubProvider = $socialite->driver('github');
    }

    /**
     * Redirect to github provider.
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect()
    {
        return $this->githubProvider->redirect();
    }


    public function getUser()
    {
        return $this->githubProvider->user();
    }

    public function getId()
    {
        return $this->getUser()->getId();
    }

    public function getEmail()
    {
        return $this->getUser()->getEmail();
    }

    public function getName()
    {
        return $this->getUser()->getName();
    }
}