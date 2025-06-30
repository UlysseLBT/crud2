<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CpVille extends Model
{
    use HasFactory;

    protected $table = 'cp_ville';

    protected $fillable = [
        'code_postal',
        'ville',
    ];
}
