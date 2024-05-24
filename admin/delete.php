<?php
@include '../models/database.php';

$id = $_GET['id'];
$del_query = "DELETE FROM foods WHERE food_id ='$id'";
$del_data = mysqli_query($conn, $del_query);

if($del_data)
{
    ?>
    <script type="text/javascript">
        alert("Data Deleted!");
        window.open("http://localhost/hungerphp/admin/admin.php", "_self");
    </script>
    <?php
}
else{
    ?>
    <script type="text/javascript">
        alert("Try again!");
        window.open("http://localhost/hungerphp/admin/admin.php", "_self");
    </script>
    <?php
}
?>
?>