<x-layout title="Lista de Games:">
    <a href="{{route('games.create')}}" class="btn btn-light mb-2 mt-5">Adicionar um novo jogo</a>
    
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{$mensagemSucesso}}
    </div>
    @endisset

    <div class="row">
        @foreach ($games as $game)
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 100%">
                
                <img src="{{asset('storage/' . $game->capa)}} " alt="Capa do Game" class="img-thumbnail" 7
                style="height: 380px">
                <div class="card-body">
                    <a href="{{route('games.show', $game->id)}}" class="text-reset">  
                        {{ $game->nome }} 
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </x-layout>