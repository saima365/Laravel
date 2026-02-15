<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'date_of_birth',
        'status',
        'img',
        'account_id'
    ];

   
    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}

