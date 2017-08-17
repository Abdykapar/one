@extends('layouts.admin')

@section('content')

    <!-- jQuery -->
    <script src="/files/vendor/jquery/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $comments->count() }}</div>
                            <div>Все комментарии</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.comment') }}">
                    <div class="panel-footer">
                            <span class="pull-left">Показать</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $articles->count() }}</div>
                            <div>Все статии</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.article') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Показать</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-credit-card fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $categories->count() }}</div>
                            <div>Все категории</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('admin.category') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Показать</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        {{--<div class="col-lg-3 col-md-6">--}}
            {{--<div class="panel panel-red">--}}
                {{--<div class="panel-heading">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-3">--}}
                            {{--<i class="fa fa-support fa-5x"></i>--}}
                        {{--</div>--}}
                        {{--<div class="col-xs-9 text-right">--}}
                            {{--<div class="huge">13</div>--}}
                            {{--<div>Support Tickets!</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<a href="#">--}}
                    {{--<div class="panel-footer">--}}
                        {{--<span class="pull-left">View Details</span>--}}
                        {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

@endsection