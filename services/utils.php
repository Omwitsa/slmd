<?php
    function alert_redirect($msg, $page){
        echo "<script>
        alert('$msg');
        window.location.href='$page';
        </script>";
    }
?>