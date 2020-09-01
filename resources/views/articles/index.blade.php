@extends('layouts.main')


@section('content')
<div id="wrapper">
	<div id="page" class="container">
        
		<div id="content">
            @foreach ($articles as $article)
                <div class="title">
                <h2><a href="{{ route('article.show', $article->id)}}">{{ $article->title}}</a></h2>
                    <span class="byline">{{ $article->excerpt}}</span> </div>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <p>{{ $article->body}}</p>
                <button class="btn btn-success">Ok</button>
            @endforeach
			
		</div>
		
	</div>
</div>

@endsection