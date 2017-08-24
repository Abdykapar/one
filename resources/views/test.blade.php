@extends('layouts.master')

@section('content')
    @foreach($articles as $article)
        <div class="thumbnail" style="padding: 20px;">
            <img src="/image/{{ $article->image }}" class="img img-responsive">
            <div class="caption">{!! str_limit($article->content,300)  !!}
                <a href="/single/{{ $article->id }}"><u>Читать далее</u></a>
            </div>
            <div class="footer" style="padding-bottom: 20px">

                <div class="row" style="margin: 10px;padding: 0;">
                    <div class="col-md-3 col-sm-3">
                        <i class="fa fa-calendar"></i> {{ $article->created_at->toDateString() }}
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <i class="fa fa-user"></i> {{ $article->user->name }}
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <i class="fa fa-user"></i> {{ $article->category->name }}
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="/single/{{ $article->id }}#name">
                            <i class="fa fa-comment"></i> Leave a comment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection