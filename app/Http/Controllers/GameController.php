<?php

namespace App\Http\Controllers;

use App\Http\Requests\GamesFormRequest;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Repositories\GamesRepository;
use \App\Jobs\DeleteGamesCover;

class GameController extends Controller
{

    public function index(Request $request)
    {
         $games = Game::all();
         $mensagemSucecsso = session('mensagem.sucesso');
        
        return view('games.index', compact('games'))->with('mensagemSucesso', $mensagemSucecsso);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(GamesFormRequest $request, GamesRepository $repository)
    {
        
        $coverPath = $request->file('capa')
        ->store('games_cover', 'public');
        $request->coverPath = $coverPath;
        
        $games = $repository->add($request);
        

        return to_route('games.index')
        ->with('mensagem.sucesso', "O jogo '{$games->nome}' foi adicionado com sucesso");
    }


    public function show(Game $game, Request $request)
    {
        $game->fill($request->all());

        return view('games.show')->with('game', $game);
    }


    public function edit(Game $game)
    {
        return view('games.edit')->with('game', $game);
    }

    public function update(Game $game, GamesFormRequest $request)
    {
        $dados = [
            'nome' => $request->nome, 
            'estilo' => $request->estilo,
            'desenvolvedora' => $request->desenvolvedora,
            'ano' => $request->ano
        ];

        if(!empty($request->coverPath)){
            DeleteGamesCover::dispatch($game->capa);
            $coverPath = $request->file('capa')->store('games_cover', 'public');
            $request->coverPath = $coverPath;
            
            $dados['capa'] = $request->coverPath;
        }

        $game->fill($dados);
        $game->save();

        return to_route('games.index')
        ->with('mensagem.sucesso', "O jogo '{$game->nome}' foi atualizado com sucesso");
    
    }

    public function destroy(Game $game)
    {
        $game->delete();
        DeleteGamesCover::dispatch($game->capa);

        return to_route('games.index')
        ->with('mensagem.sucesso',
         "O jogo '{$game->nome}' foi removido com sucesso");
    }
}
