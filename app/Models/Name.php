<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Name extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'names';
    protected $fillable = ['first_name', 'last_name'];

}
