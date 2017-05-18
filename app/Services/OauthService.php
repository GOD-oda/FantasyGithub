<?php

namespace App\Services;

use App\Repositories\GithubRepositoryInterface;
use App\Repositories\UserRepositoryInterface;

class OauthService extends Service
{
    protected $githubRepo;
    protected $userRepo;

    public function __construct(
        GithubRepositoryInterface $githubRepo,
        UserRepositoryInterface $userRepo
    ) {
        $this->githubRepo = $githubRepo;
        $this->userRepo = $userRepo;
    }

    public function redirectToGithub()
    {
        return $this->githubRepo->redirect();
    }

    public function callback()
    {
        $github_user = $this->githubRepo->getUser();

        $attributes = [
            'name' => $github_user->getName(),
            'provider_id' => $github_user->getId(),
        ];
        $columns =[
            'name' => $github_user->getName(),
            'email' => $github_user->getEmail(),
        ];
        $this->userRepo->save($attributes, $columns);

        return redirect('/home');
    }
}