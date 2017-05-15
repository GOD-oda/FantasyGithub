<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * Get the first record matching the attributes or create if.
     * @param  array  $attributes
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function save(array $attributes, array $columns);
}