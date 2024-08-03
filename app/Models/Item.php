<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{   
    /**
     *  This line allows you to use Laravel's factory features to generate test data for the model.
     */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * protected $fillable: The $fillable property defines which attributes should be mass assignable. 
     * This is important for security reasons, as it prevents mass assignment vulnerabilities. 
     * In this case, we are allowing the name and description fields to be mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
