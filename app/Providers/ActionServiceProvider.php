<?php

namespace App\Providers;

use App\Actions\StoteRentalAction;
use App\Actions\StoteShopAction;
use App\Contracts\ActionContract;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        ActionContract::class => StoteShopAction::class,
        ActionContract::class => StoteRentalAction::class,
    ];
}
