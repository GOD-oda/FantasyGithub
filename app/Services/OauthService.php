<?php

namespace App\Services;

use App\Repositories\GithubRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\SocialAccountRepositoryInterface;

class OauthService extends Service
{
    protected $githubRepo;
    protected $userRepo;
    protected $socialRepo;

    public function __construct(
        GithubRepositoryInterface $githubRepo,
        UserRepositoryInterface $userRepo,
        SocialAccountRepositoryInterface $socialRepo
    ) {
        $this->githubRepo = $githubRepo;
        $this->userRepo = $userRepo;
        $this->socialRepo = $socialRepo;
    }

    public function redirectToGithub()
    {
        return $this->githubRepo->redirect();
    }

    public function githubCallback()
    {
        $github_user = $this->githubRepo->getUser();
        $social_account = $this->socialRepo->getUser($github_user->getId(), 'github');
        if ($social_account) {
            return $social_account->user;
        }

        return $this->userRepo->save($github_user, 'github');
    }
}