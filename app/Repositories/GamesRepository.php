<?php 

namespace App\Repositories;

use App\Http\Requests\GamesFormRequest;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class GamesRepository
{
    public function add(GamesFormRequest $request): Game
    {
       return DB::transaction (function() use ($request){
            $game = Game::create([
                'nome' => $request->nome,
                'estilo' => $request->estilo,
                'desenvolvedora' => $request->desenvolvedora,
                'ano' => $request->ano,
                'capa' => $request->coverPath,
            ]);
        
            return $game;
    });
    }
    
}