<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stundents extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'idstudents';

    public $incrementing = false;
    public $timestamps = true;
}
