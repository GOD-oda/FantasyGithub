<?php

namespace App\Repositories;


interface GithubRepositoryInterface
{
    public function redirect();

    public function getUser();
}
