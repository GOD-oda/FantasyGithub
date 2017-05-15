<?php

namespace App\Repositories;

use App\DataAccess\Eloquent\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function save(array $attributes, array $columns)
    {
        return $this->user->firstOrCreate($attributes, $columns);
    }
}