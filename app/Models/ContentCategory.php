<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'content_category_id';

    protected $fillable = [
        'content_category_name',
    ];
}
