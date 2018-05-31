<head>
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />




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
<link rel="stylesheet" href="/ci/application/views/templates/adminlte/dist/css/miloaisdino.css">
</head>



<body class="hold-transition skin-blue sidebar-collapse layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            <div id="container" class="overflow_visible mycontainer">
                <?php

                ?>
                <table class="table table-striped" id="arrival">
                  <thead>
                   <tr>
                       <th><?php echo implode('</th><th>', array_keys(current($table))); ?></th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($table as $row): ; ?>
                     <tr>
                            <td><?php echo implode('</td><td>', $row); ?></td>
                     </tr>
                  <?php endforeach; ?>
                 </tbody>
                </table>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>