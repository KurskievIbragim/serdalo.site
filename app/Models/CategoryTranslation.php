<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CategoryTranslation extends Model
{
    use HasFactory;

    protected $table = 'category_translations';
    
    public $timestamps = false;
}
