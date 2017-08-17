@extends('layouts.admin')

@section('content')
    @if($errors->has('image'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>Добавте рисунок</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Article</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Создать новый
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 ">
                            <form role="form" method="post" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Название</label>
                                    <input class="form-control" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label>Категория</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Главный рисунок</label>
                                    <input type="file" name="image" required>
                                </div>
                                <div class="form-group">
                                    <label>Описание</label>
                                    @include('layouts.main')
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Создать</button>
                                <a href="{{ route('admin.article') }}" type="reset" class="btn btn-default"><i class="fa fa-times"></i> Отмена</a>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
