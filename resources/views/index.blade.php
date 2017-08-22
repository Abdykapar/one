@extends('layouts.master')

@section('content')
        <div class="thumbnail">
            <img src="/image/{{ $article->image }}" class="img img-responsive">
            <div class="caption">{!! $article->content  !!}</div>
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
                </div>
            </div>
        </div>
        @if ($article->comments != null)

            @foreach($article->comments as $comment)
                <div class="thumbnail">
                <div class="caption">
                    {{ $comment->content }}
                </div>
                    <div class="footer" style="margin: 10px">
                        <b>{{ $comment->name }}</b> <i style="float: right">{{ $comment->created_at }}</i>
                    </div>
                </div>
            @endforeach

        @endif
        <div class="single">
        <div class="leave-comment" id="comment">
            <h4>Добавить комментарий</h4>
            <br>
            <form method="post" action="{{ route('comment',$article->id) }}">
                {{ csrf_field() }}
                <input id="name" type="text" name="name" placeholder="Name" required=" ">
                <input type="text" placeholder="Email" name="email" required=" ">
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <textarea placeholder="Message" name="content" required=" "></textarea>
                <input type="submit" value="Submit">
                <div class="clearfix"> </div>
            </form>
        </div>
        </div>
@endsection