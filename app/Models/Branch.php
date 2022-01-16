<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Branch extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = [
        'id',
        'store_id'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function refunds()
    {
        return $this->hasMany(Refund::class);
    }

    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class);
    }

    public function purchaseReturns()
    {
        return $this->hasMany(PurchaseReturn::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function inventory()
    {
        return $this->hasMany(BranchInventory::class);
    }
}
