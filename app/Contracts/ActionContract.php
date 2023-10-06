<?php

namespace App\Contracts;

interface ActionContract
{
    /**
     * @param array $request
     * @return bool
     */
    public function handle(array $request): bool;
}
