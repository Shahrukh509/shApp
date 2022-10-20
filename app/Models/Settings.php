<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('Image', 'Contact', 'Address', 'Phone', 'Timings', 'Email', 'Email2', 'Footer');
}
