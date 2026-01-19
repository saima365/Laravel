<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
     public function account()
    {
       return $this->belongsTo(Account::class);

    }
    public function transaction_type()
{
    return $this->belongsTo(Transaction_type::class, 'transaction_type_id', 'id');
}

     public function customer()
    {

          return $this->hasOne(Customer::class, 'account_id', 'account_id');
    }
    // Transaction.php
        protected $casts = [
        'date' => 'datetime', // automatically converts to Carbon
];


}
