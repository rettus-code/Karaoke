<?php

include('config.php');

$name = $_POST['name'];
$item = $_POST['item'];
$guests = $_POST['guests'];

$data = "INSERT INTO potluck(name, item, guests) values('$name', '$item', '$guests')";

if(mysqli_query($con, $data)){
    ?>
        <script>
            confirm('<?php echo $name ?>, your submission has been saved, Thank you!');
            window.location = "../index.php";
        </script>
    <?php
}
else {

    ?>
        <script>
            alert('Database error, Try Again!');
            window.location = "../index.php";
        </script>

    <?php
}

?>