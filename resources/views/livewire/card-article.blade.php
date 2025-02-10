<div class="row justify-content-center align-items-center">
        @foreach ($articles as $article)
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
            <div class="card m-2" style="width: 18rem;">
                <img src="{{ asset('storage/' . $article->img) }}" class="card-img-top" alt="Immagine {{$article->title}}">
                <div class="card-body">
                    <h3 class="card-title d-block text-truncate">{{$article->title}}</h3>
                    <h6 class="card-text d-block text-truncate">{{$article->subtitle}}</h6>
                    <p class="card-text d-block text-truncate">{{$article->body}}</p>
                    <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Leggi</a>
                    <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
                    <button wire:click="destroy({{$article}})" class="btn btn-danger">Elimina</button>
                </div>
            </div>
        </div>
        @endforeach
</div>