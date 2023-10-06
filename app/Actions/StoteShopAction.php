<?php

namespace App\Actions;

use App\Contracts\ActionContract;
use App\Models\Shop;

class StoteShopAction implements ActionContract
{
    public function handle(array $request): bool
    {
        $model = new Shop();
        $status = $model->fill($request)->save();
        return $status;
    }
}
