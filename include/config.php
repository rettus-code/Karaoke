<?php

$con = mysqli_connect('localhost','root','','potluck');


if(!$con){
    die("Connection Error: ".mysqli_connect_error($con));
    ?>
    <script>
    console.log("no connection");
    </script>
    <?php
}
?>