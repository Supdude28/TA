<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswaModels extends Model
{
    use HasFactory;
protected $table = 'siswa';
protected $primary = 'nisn';
protected $incrementing = false;
protected $keyType = 'string';

}
