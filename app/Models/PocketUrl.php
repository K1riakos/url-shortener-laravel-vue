<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PocketUrl extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'pocketurl';

    protected $fillable = [
        'slug',
        'url',
        'pocketurl'
    ];
}