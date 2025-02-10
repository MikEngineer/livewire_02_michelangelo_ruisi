<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/' . $article->img) }}" class="card-img-top" alt="Immagine {{$article->title}}">
                <div class="card-body">
                    <h1 class="card-title d-block">{{$article->title}}</h1>
                    <h4 class="card-text d-block">{{$article->subtitle}}</h4>
                    <p class="card-text d-block">{{$article->body}}</p>
                    <a href="{{route('article.index')}}" class="btn btn-danger">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
</div>