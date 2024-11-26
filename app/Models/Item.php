<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';
    protected $primaryKey = 'ID_Item';
    public $timestamps = false;

    protected $fillable = [
        'ID_Game',
        'Nama_Item',
        'Harga_Produk',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class, 'ID_Game', 'ID_Game');
    }
}
