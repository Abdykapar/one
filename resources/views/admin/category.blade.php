@extends('layouts.admin')

@section('content')

    <!-- jQuery -->
    <script src="/files/vendor/jquery/jquery.min.js"></script>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Категория</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                        Все категории
                        <a href="{{ route('admin.category.create') }}" style="float: right;"><i class="fa fa-plus"></i> Создать категория</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    @if (!$categories->isEmpty())
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Создатель</th>
                            <th style="max-width:50px"></th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->user->name }}</td>
                                <td>
                                    <a href="{{ route('admin.category.edit',$category->id) }}" title="Изменить" type="button" class="btn btn-success btn-circle"><i class="fa fa-pencil"></i>
                                    </a>
                                    <button
                                       title="Удалить" type="button" class="btn btn-danger btn-circle"
                                       data-toggle="modal" data-target="#{{ $category->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                    <div class="modal fade" id="{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" align="center">
                                            <div class="modal-content" style="width: 400px;" >
                                                <div class="modal-body">
                                                    <div class="row">
                                                       <h3>Уверен что хочеш удалить?</h3>
                                                    </div>
                                                    <div class="row">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                                                        <a href="{{ route('admin.category.delete',$category->id) }}"  type="button" class="btn btn-primary">Да</a>
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
                        Пока нет категории
                    @endif
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection