@extends('layouts.admin')

@section('content')

    <!-- jQuery -->
    <script src="/files/vendor/jquery/jquery.min.js"></script>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Комментария</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Все комментарии
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    @if (!$comments->isEmpty())
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Автор</th>
                                <th>Почта</th>
                                <th>Комментарий</th>
                                <th>Article</th>
                                <th style="max-width:50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->email }}</td>
                                    <td>{{ $comment->content }}</td>
                                    <td>
                                        {{ $comment->article->title }}
                                        <li><i>{{ $comment->article->category->name }}</i></li>
                                    </td>
                                    <td>
                                        <button
                                                title="Удалить" type="button" class="btn btn-danger btn-circle"
                                                data-toggle="modal" data-target="#{{ $comment->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                    <div class="modal fade" id="{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" align="center">
                                            <div class="modal-content" style="width: 400px;" >
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <h3>Уверен что хочеш удалить?</h3>
                                                    </div>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                                        <a href="{{ route('admin.comment.delete',$comment->id) }}"  type="button" class="btn btn-primary">Да</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        Пока нет комментарий
                    @endif
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection