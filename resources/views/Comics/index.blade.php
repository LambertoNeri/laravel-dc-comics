@extends('layouts.base')

@section('contents')


@if (session('delete_success'))
        <div class='alert alert-danger'>
            {{session('delete_success')}}
        </div>
    @endif

    <a class="btn btn-primary" href="{{ route('comics.create') }}">New</a>

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
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link btn btn-primary">show</a>
                    <a  
                        class="btn btn-warning"
                        href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                        edit
                    </a>
                    <form 
                        action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" 
                        method="post"
                        class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <div style="height: 100px; width: 300px border: none important!;">
        {{ $comics->links() }}
    </div>
</div>

@endsection