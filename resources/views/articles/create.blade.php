@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div class="card">
            <h1 class="card-header">
                {{ isset($article) ? 'Edit Article' : 'Add Article'}}
            </h1>
            <div class="card-body">
                @if ($errors->any())
                    <ul class="list-group">
                        <li class="list-group-item text-danger">
                            @foreach ($errors->all() as $errors)
                            {{$errors}}
                        @endforeach
                        </li>
                    </ul>
                @endif
            <form action="{{ route('article.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title" class="label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$article->title}}">    
                    </div>
                    <div class="form-group">
                        <label for="Excerpt" class="label">Excerpt</label>
                    <input type="text" class="form-control" name="excerpt" value="{{$article->excerpt}}">    
                    </div>
                    <div class="form-group">
                        <label for="body" class="label">Body</label>
                    <textarea name="body" id="" cols="5" rows="5" class="form-control" >{{$article->body}}</textarea>   
                    </div>
                    <button class="btn btn-success">
                        {{isset($article) ? 'Update' :'Submit'}}
                    </button>
                    
                </form>
            </div>
            
        </div>

    </div>
</div>
    
@endsection
