<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if(isset($title)) {
    echo $title;
    } else {
    echo 'Mrt Arrival Times';
    } ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- jQuery 2.2.3 -->
    <script src="/ci/application/views/templates/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/ci/application/views/templates/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/ci/application/views/templates/adminlte/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/ci/application/views/templates/adminlte/dist/css/skins/_all-skins.min.css">
    <!--link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arvo:400,700|Bitter:700"-->

    <!-- miloaisdino Custom CSS -->
    <link rel="stylesheet" href="/ci/application/views/templates/adminlte/dist/css/mrt.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-collapse layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                <?php echo $station; ?>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div id="container" class="overflow_visible mycontainer">
                <script>
                    function load() {
                        $( "#container" ).load( "<?php echo $_SERVER['REQUEST_URI'].'/reload'; ?>" );
                    }
                    document.onload = load();

                </script>
                <h5>Loading...</h5>
                <?php //echo $container; ?>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!--footer class="main-footer">
        <strong>Copyright miloaisdino.</strong>
        The developer does not guarantee the accuracy of the data provided herein, which may be affected by numerous
        factors beyond the developer's control, including but not limited to: Fault of signalling system,
        Delayed updating from SMRT/SBST servers, browser caching etc.>
    </footer-->

</div>
<!-- ./wrapper -->


<script src="/ci/application/views/templates/adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="/ci/application/views/templates/adminlte/plugins/fastclick/fastclick.js"></script>
<script src="/ci/application/views/templates/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--script src="../../dist/js/demo.js"></script-->
</body>
</html>
