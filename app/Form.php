<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['firstName', 'lastName', 'fare','company', 'accountNumber', 'fareDate', 'pickupTime', 'pickupCity','pickupState'];
}
