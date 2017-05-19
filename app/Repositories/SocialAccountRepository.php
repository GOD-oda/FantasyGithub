<?php

namespace App\Repositories;

use App\DataAccess\Eloquent\SocialAccount;

class SocialAccountRepository implements SocialAccountRepositoryInterface
{
    protected $social;

    public function __construct(SocialAccount $social)
    {
        $this->social = $social;
    }

    public function getUser(int $provider_id, string $provider_name)
    {
        return $this->social->where([
            'provider_id' => $provider_id,
            'provider_name' => $provider_name,
        ])->first();
    }
}
