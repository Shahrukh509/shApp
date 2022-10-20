<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'homepage';
    public $timestamps = true;
    protected $fillable = array('s1_Title', 's1_Description', 's1_Image', 's2_Title', 's2_Heading1', 's2_Description1', 's2_Heading2', 's2_Description2', 's2_Heading3', 's2_Description3', 's2_Heading4', 's2_Description4', 's2_Image', 's3_Title', 's3_Description', 's3_Image', 's4_Title', 's5_Title', 's5_Heading1', 's5_Description1', 's5_Image1', 's5_Heading2', 's5_Description2', 's5_Image2', 's5_Heading3', 's5_Description3', 's5_Image3', 's6_Title', 's6_Paragraph', 's6_Image1', 's6_Description1', 's6_Image2', 's6_Description2', 's6_Image3', 's6_Description3', 's6_Image4', 's6_Description4', 's6_Image5', 's6_Description5', 's6_Image6', 's6_Description6', 's7_Heading', 's7_Description', 's7_Image');
}
