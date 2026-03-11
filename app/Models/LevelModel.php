<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'm_level';      // Penting: Laravel mencari tabel 'level_models' jika ini tidak ada
    protected $primaryKey = 'level_id'; // Penting: Laravel mencari kolom 'id' jika ini tidak ada
}