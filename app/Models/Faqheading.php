<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqheading extends Model
{
    use HasFactory;

    protected $table = 'Faqheading';
    public $timestamps = true;
    protected $fillable = array('Heading');
}
