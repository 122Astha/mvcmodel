<?php
require('./database.php');
function get_all_courses(){
    global $conn;
    $query = "SELECT * FROM courses ";
    $result = mysqli_query($conn, $query);
    $courses=$result->fetch_all();
    return $courses;
    
    
}
?>