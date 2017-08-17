@extends('layouts.admin')

@section('content')

    <!-- jQuery -->
    <script src="/files/vendor/jquery/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Articles</h1>
            <a href="{{ route('admin.article.create') }}" class="btn btn-default"><i class="fa fa-plus"></i> Создать новый</a>
            <hr>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        @if(!$articles->isEmpty())
            @foreach($articles as $article)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="thumbnail">
                        <img src="/image/{{ $article->image }}" class="img img-responsive">
                        <div class="caption">
                           <b> {{ $article->user->name }}</b><br>
                            {!! str_limit($article->title)  !!}
                        </div>
                        <div class="footer">
                            <a href="{{ route('admin.article.edit',$article->id) }}" class="btn btn-primary"><i class="fa fa-check"></i> Изменить</a>
                            <button  title="Удалить" type="button" class="btn btn-danger"
                                     data-toggle="modal" data-target="#{{ $article->id }}">
                                <i class="fa fa-trash"></i> Удалить</button>
                            <div class="modal fade" id="{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" align="center">
                                    <div class="modal-content" style="width: 400px;" >
                                        <div class="modal-body">
                                            <div class="row">
                                                <h3>Уверен что хочеш удалить?</h3>
                                            </div>
                                            <div class="row">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                                <a href="{{ route('admin.article.delete',$article->id) }}"  type="button" class="btn btn-primary">Да</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            Пока пусто
        @endif
    </div>

@endsection