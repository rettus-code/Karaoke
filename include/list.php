<?php
    include('config.php');

    $sql = "SELECT * FROM potluck";

    $result = mysqli_query($con,$sql);
    ?>
<div class="list">
    <br>
    <h5>Who is bringing what</h5>
    <?php
    while($row =mysqli_fetch_array($result)){
        $n = $row['name'];
        $i = $row['item'];
        $g = $row['guests'];
    echo "<h6>$n is bring $i and $g guests</h6><br><br>";
}
?>