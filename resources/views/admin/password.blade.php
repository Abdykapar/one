@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
        <div class="panel-header">
            Изменить пароль
        </div>
        <div class="panel-body">
            <form action="{{ route('admin.change') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="password">Старый пароль: </label>
                    <input type="password" name="latest_password" id="password">
                </div>
                <div class="form-group">
                    <label for="password">Новый пароль: </label>
                    <input type="password" name="new_password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection