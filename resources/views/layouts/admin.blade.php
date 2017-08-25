<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aikyn admin</title>
    <link rel="shortcut icon" href="/logo/logo_title.png" />
    <!-- Bootstrap Core CSS -->
    <link href="/files/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/files/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.4/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.4/css/froala_style.min.css' rel='stylesheet' type='text/css' />
    <!-- DataTables Responsive CSS -->
    <link href="/files/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="/files/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Social Buttons CSS -->
    <link href="../vendor/bootstrap-social/bootstrap-social.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/files/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/files/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/files/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Aikyn admin</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ route('admin.password') }}"><i class="fa fa-user fa-fw"></i> Change password</a></li>
                    <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.category') }}"><i class="fa fa-list fa-fw"></i> Категория</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.article') }}"><i class="fa fa-tags fa-fw"></i> Articles</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.comment') }}"><i class="fa fa-comments fa-fw"></i> Комментария</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        @yield('content')
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Bootstrap Core JavaScript -->
<script src="/files/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Include Editor style. -->

<!-- Metis Menu Plugin JavaScript -->
<script src="/files/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/files/vendor/raphael/raphael.min.js"></script>
<script src="/files/vendor/morrisjs/morris.min.js"></script>
<script src="/files/data/morris-data.js"></script>
<!-- DataTables JavaScript -->
<script src="/files/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/files/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="/files/vendor/datatables-responsive/dataTables.responsive.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/files/dist/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>

</html>
