<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'game';
    protected $primaryKey = 'ID_Game';
    public $timestamps = false;

    protected $fillable = [
        'Nama_Game',
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'ID_Game', 'ID_Game');
    }

    public function transactions()
    {
        return $this->hasMany(Transaksi::class, 'ID_Game', 'ID_Game');
    }
}
