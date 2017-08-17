@extends('layouts.master')

@section('content')
        <div class="thumbnail">
            <img src="/image/{{ $article->image }}" class="img img-responsive">
            <div class="caption">{!! $article->content  !!}

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
                </div>
            </div>
        </div>
        <div class="single">
        <div class="leave-comment" id="comment">
            <h4>Leave your comment</h4>
            <p>Suspendisse tempor tellus sed nisl semper, quis condimentum turpis pharetra.</p>
            <form>
                <input id="name" type="text" placeholder="Name" required=" ">
                <input type="text" placeholder="Email" required=" ">
                <input type="text" placeholder="Your Website" required=" ">
                <textarea placeholder="Message" required=" "></textarea>
                <input type="submit" value="Submit">
                <div class="clearfix"> </div>
            </form>
        </div>
        </div>
@endsection