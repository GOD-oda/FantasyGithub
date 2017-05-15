<?php

namespace App\Repositories;

interface GithubRepositoryInterface
{
    /**
     * Redirect to github provider.
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();
}