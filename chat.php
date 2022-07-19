<?php
        include('db.php')
        $query = "select * from chat ORDER BY ID DESC";
        $run = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($run)){
        $name = $row['name'];
        $msg = $row['msg'];
        $date = $row['date'];
}
?>

<?php }?>