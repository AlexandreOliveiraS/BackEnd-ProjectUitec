<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $foreignId = 'category';
    protected $fillable = [
        'ELetronicos',
        'Domesticos',
        'Pet',
        'Automoveis'
    ];





}
