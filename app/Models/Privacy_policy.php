<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy_policy extends Model
{
    use HasFactory;

    protected $table = 'privacy_policies';
    public $timestamps = true;
    protected $fillable = array('Description');
}
