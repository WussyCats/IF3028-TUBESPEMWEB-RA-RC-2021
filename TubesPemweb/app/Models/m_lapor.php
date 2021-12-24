<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class m_lapor extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'lapor';
    protected $fillable = [
        'isi',
        'tipe',
        'tgl',
        'lampiran'
    ];

    protected $hidden;
}
