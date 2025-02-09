<div>
    @foreach ($articles as $article)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="Immagine {{$article->title}}">
            <div class="card-body">
                <h3 class="card-title d-block text-truncate">{{$article->title}}</h3>
                <h6 class="card-text d-block text-truncate">{{$article->subtitle}}</h6>
                <p class="card-text d-block text-truncate">{{$article->body}}</p>
                <a href="#" class="btn btn-primary">Leggi</a>
                <a href="#" class="btn btn-primary">Modifica</a>
                <a href="#" class="btn btn-primary">Elimina</a>
            </div>
        </div>
    @endforeach
</div>