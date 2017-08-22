@extends('layouts.home')

@section('content')

    @foreach($articles as $article)
        <div class="thumbnail" style="background-color: rgba(169, 169, 169, 0.08);padding: 40px">
            <a href="{{ url('/single',$article->id) }}">
                <img src="/image/{{ $article->image }}" class="img img-responsive">
            </a>
            <div class="caption">
                {!!  $article->content  !!}
            </div>
        </div>
    @endforeach

@endsection