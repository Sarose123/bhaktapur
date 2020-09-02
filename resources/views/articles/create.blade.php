@extends('layouts.main')
@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <div class="card">
            <h1 class="card-header">
                {{ isset($article) ? 'Edit Article' : 'Add Article'}}
            </h1>
            <div class="card-body">
                {{-- @if ($errors->any())
                    <ul class="list-group">
                        <li class="list-group-item text-danger">
                            @foreach ($errors->all() as $errors)
                            {{$errors}}
                        @endforeach
                        </li>
                    </ul>
                @endif --}}
            <form action="{{ isset($article) ? route('article.update', $article->id) : route('article.store') }}" method="POST">
                
                @if(isset($article))
                    @method('PUT')
                @endif
                @csrf
                    <div class="form-group">
                        <label for="title" class="label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ isset($article) ? "$article->title" : ''}}">
                        
                        @error('title')
                        <div class="alert alert-danger">{{ $errors->first('title')}}</div>
                        @enderror
                      
                    </div>
                    <div class="form-group">
                        <label for="Excerpt" class="label">Excerpt</label>
                    <input type="text" class="form-control" name="excerpt" value="{{ isset($article) ? "$article->excerpt" : ''}}">    
                    </div>
                    @error('excerpt')
                        <div class="alert alert-danger">{{ $errors->first('excerpt')}}</div>
                    @enderror
                    <div class="form-group">
                        <label for="body" class="label">Body</label>
                    <textarea name="body" id="" cols="5" rows="5" class="form-control" >{{ isset($article) ? "$article->body" : '' }}</textarea>   
                    </div>
                    @error('body')
                        <div class="alert alert-danger">{{ $errors->first('body')}}</div>
                    @enderror
                    <button class="btn btn-success" type="submit">
                        {{isset($article) ? 'Update' :'Submit'}}
                    </button>
                    
                </form>
            </div>
            
        </div>

    </div>
</div>
    
@endsection
