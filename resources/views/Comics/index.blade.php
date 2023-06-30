@extends('layouts.base')

@section('contents')

<div class="container">
    <div class="row row-cols-3">
        @foreach ($comics as $comic)
        <div class="col my-5">
            <div class="card">
                <div class="d-flex justify-content-center" style="height: 346px;">
                    <img style="height: 100%; width: auto;" src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                </div>
                
                <div class="card-body">
                <h5 class="card-title">{{ $comic->series }}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $comic->price}}</li>
                <li class="list-group-item">{{ $comic->title}}</li>
                <li class="list-group-item">{{ $comic->type}}</li>
                </ul>
                <div class="card-body">
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link">show</a>
                <a href="/comics/create">create</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <div style="height: 100px; width: 300px border: none important!;">
        {{ $comics->links() }}
    </div>

    {{-- <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/comics?page=1#">1</a></li>
          <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/comics?page=2#">2</a></li>
          <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/comics?page=3#">3</a></li>
        </ul>
    </nav> --}}
    
</div>

@endsection