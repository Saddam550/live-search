<script src="js/jquery.min.js"></script>

<ul>
<?php



$host = "localhost";
$user = "student_commend_chash";
$password = "student_commend_chas";
$database = "madrasah";

$con =  mysqli_connect($host, $user, $password, $database);

if (isset($_POST["input"])) {
    $name = $_POST["input"];




if ($name=="") {
    exit();
    $select = "SELECT * FROM live_search WHERE name LIKE'%$name%'";
    
} else {
    $select = "SELECT * FROM live_search WHERE name LIKE'%$name%'";

    $query = mysqli_query($con, $select);


    if ($query) {
        while ($show = mysqli_fetch_assoc($query)) {

            echo "<li id='click'>";
            echo $show["name"] ;
            echo "</li>";
        }
    } else {
        echo "<script>
        alert('not')
        </script>";
    };
}


}
?>

 
</ul>