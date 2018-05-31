<!--meta http-equiv="refresh" content="6" -->
<!--script type="text/javascript">
    setTimeout(function () {
        location.reload();
    }, 5 * 1000);
</script-->
<script>
    $reload = function () {
        $( "html" ).load( "<?php echo $_SERVER['REQUEST_URI'].''; ?>" );
        setTimeout($reload, 3 * 1000); //repeat
    }
    setTimeout($reload, 3 * 1000);
</script>