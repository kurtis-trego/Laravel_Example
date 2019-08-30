<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['firstName', 'lastName', 'company', 'accountNumber', 'datetypedate'];
}
