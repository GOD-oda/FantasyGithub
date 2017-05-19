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

    public function save($social_account, string $provider_name)
    {
        $attributes = ['email' => $social_account->email];
        $values = ['name' => $social_account->name];
        $user = $this->user->firstOrCreate($attributes, $values);
        $user->accounts()->create([
            'provider_id' => $social_account->getId(),
            'provider_name' => $provider_name,
        ]);

        return $user;
    }
}
