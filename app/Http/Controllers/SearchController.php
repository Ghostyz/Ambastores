<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function cariGame(Request $request)
    {
        
        $query = $request->input('query'); // Ambil nilai input search
        //$game = Produk::where('Nama_Game', 'like', '%' . $query . '%')
         //   ->get();

        //return view('filter', compact('game', 'query')); // Kirim $query ke view

        
        if ($query === 'genshin'){
            return redirect()->route('IGI.form');
        }
        
    }
}
