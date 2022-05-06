<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = ['title' , 'category' , 'fname', 'lname', 'email', 'address1','address2', 'city', 'mobile', 'phone', 'company_name', 'photo', 'credit_limit', 'credit_period'];

    public $timestamps = false;

}

