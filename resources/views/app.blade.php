<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @section('styles_laravel')

    <?php 
    $url="http://".$_SERVER['HTTP_HOST']."/crud/public/";
    ?>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.js"></script>
    <link href='<?php echo $url;?>css/bootstrap.css' rel='stylesheet' type='text/css'>
     <link href='<?php echo $url;?>css/datatable-bootstrap.css' rel='stylesheet' type='text/css'>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    @show
    @yield('my_styles')
</head>
<body>
    
    <div class="container" style="max-width: 800px">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Scripts -->   
    <script src="<?php echo $url;?>js/jquery.js"></script>
    <script src="<?php echo $url;?>js/jquery.dataTables.js"></script>
    <script src="<?php echo $url;?>js/bootstrap.min.js"></script>
    <script src="<?php echo $url;?>js/datatable-bootstrap.js"></script>
    <script>
        $(document).ready(function(){
            $('#MyTable').dataTable();
        });
    </script>

    @yield('my_scripts')
</body>
</html>