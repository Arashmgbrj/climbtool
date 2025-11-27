<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBlog extends Model
{
    use HasFactory;
    
    protected $fillable = [  
        'title', 'intro', 'titr1', 'par1', 'titr2', 'par2',   
        'titr3', 'par3', 'titr4', 'par4', 'titr5', 'par5',  
        'titr6', 'par6', 'titr7', 'par7', 'titr8', 'par8',  
        'titr9', 'par9', 'titr10', 'par10', 'img1', 'img2',  
        'img3', 'img5', 'img6', 'img7', 'img8', 'img9', 'img10',  
        'alt1', 'alt2', 'alt3', 'alt4', 'alt5', 'alt6',   
        'alt7', 'alt8', 'alt9', 'alt10', 'cat1', 'cat2',   
        'cat3', 'cat4', 'auth', 'labels',  
    ]; 
}
