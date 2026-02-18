<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }



       public function branch()
    {
        return $this->belongsTo(Branche::class);
    }




}
