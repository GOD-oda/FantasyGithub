<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * Get the first user model matching the attributes or create it and create a one-to-many relationship.
     * @param  \Illuminate\Database\Eloquent\Model $social_account
     * @param  string $provider_name
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function save($social_account, string $provider_name);
}
