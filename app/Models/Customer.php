<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'email',
        'address',
        'city',
        'state',
        'zip', // This is the postalCode in the database
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
        //a customer can have many invoices
    } 
}
