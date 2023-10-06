<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'NIP',
        'bagian',
        'tujuan',
        'jenjang_pendidikan',
        'surat',
        'approved',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
