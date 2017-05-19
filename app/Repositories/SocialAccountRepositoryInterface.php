<?php

namespace App\Repositories;

interface SocialAccountRepositoryInterface
{
    /**
     * Get a social account.
     * @param  int    $provider_id
     * @param  string $provider_name
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getUser(int $provider_id, string $provider_name);
}