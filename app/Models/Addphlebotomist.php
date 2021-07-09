<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addphlebotomist extends Model
{
    use HasFactory;

    protected $table = 'addphlebotomists';

    public $timestamps = 'true';
    protected $primaryKey = 'id';

    protected $fillable = ['emp_id', 'full_name', 'mobile'];
}