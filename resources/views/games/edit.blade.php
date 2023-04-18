<x-layout title="Editar o jogo '{!! $game->nome !!}'">
        <form action="{{route('games.update', $game->id)}}" method="post" enctype="multipart/form-data">
            @csrf
        
            @method('PUT')
            
            <div class="row mb-3 mt-5">
                <div class="col-6">
                    <label for="nome" class="form-label text-white">Nome:</label>
                    <input type="text"
                    id="nome"
                    name="nome"
                    class="form-control" 
                    value="{{old('nome') . $game->nome}}">
                    autofocus>
                </div>
                <div class="col-2">
                    <label for="estilo" class="form-label text-white">Estilo:</label>
                    <input type="text"
                    id="estilo"
                    name="estilo"
                    class="form-control" 
                    value="{{old('estilo') . $game->estilo}}">
                </div>
                <div class="col-2">
                    <label for="desenvolvedora" class="form-label text-white">Desenvolvedora:</label>
                    <input type="text"
                    id="desenvolvedora"
                    name="desenvolvedora"
                    class="form-control" 
                    value="{{old('desenvolvedora') . $game->desenvolvedora}}">
                </div>
                <div class="col-2">
                    <label for="ano" class="form-label text-white">Ano lançamento:</label>
                    <input type="text"
                    id="ano"
                    name="ano"
                    class="form-control" 
                    value="{{old('ano') . $game->ano}}">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="capa" class="form-label text-white">Capa do Game:</label>
                        <input type="file" id="capa" name="capa" class="form-control" 
                        accept="image/gif, image/jpeg, image/png">
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <button type="submit" class="btn btn-light">Atualizar</button>
                    </div>
        </form>
</x-layout>