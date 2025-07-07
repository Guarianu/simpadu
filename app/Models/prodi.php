<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    protected $primaryKey = 'id'; // <-- tambahkan ini

    public $timestamps = false; // jika tabel tidak ada create_at/updated_at

    protected $fillable = [
        'nama', 'kaprodi', 'jurusan'
    ];

    public function mahasiswa(): HasMany
    {
        return $this->hasMary(related: Mahasiswa::class, foreignkey: 'id', localkey: 'id_prodi');
    }
}