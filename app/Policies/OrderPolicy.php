<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

//授权策略类
class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Order $order
     * @return bool
     * 安全起见我们只允许订单的创建者可以看到对应的订单信息
     */
    public function own(User $user, Order $order)
    {
        return $order->user_id == $user->id;
    }
}
