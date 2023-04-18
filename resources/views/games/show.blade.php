<x-layout title="Informações sobre o jogo '{!!$game->nome!!}'">
        <br>
            <div class="d-flex justify-content-center">
                 <img src="{{asset('storage/' . $game->capa)}} " alt="Capa do Game" style="height: 500px" class="img-fluid" >
            </div>
        <ul class="list-group">
            
                <li class="list-group-item mt-5 ">
                    <u>Estilo</u>: {{$game->estilo}}
                </li>
                <li class="list-group-item">
                    <u>Desenvolvedora</u>: {{$game->desenvolvedora}}
                </li>
                <li class="list-group-item mb-2">
                    <u>Ano de lançamento</u>: {{$game->ano}}
                </li>
        </ul>
        <span class="d-flex">
            <a href="{{route('games.edit', $game->id)}}" class="btn btn-light btn-sm">Editar</a>
            <form action="{{route('games.destroy', $game->id)}}" method="post" class="ms-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
         </span>
            <br>
</x-layout>