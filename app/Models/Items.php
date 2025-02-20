<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Items extends Model // Change class name from Students to Item
{
    use Notifiable;

    protected $fillable = [
        'name',        // Item name
        'quantity',    // Quantity of the item
        'description', // Optional: Add a description attribute if needed
    ];
}