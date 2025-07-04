<?php
$id = $_GET["id"];
if($id){
    include("../connect.php");
    $sql = "DELETE FROM posts WHERE id = '$id'";
    $result = mysqli_query($conn , $sql);
    if($result){
        session_start();
        $_SESSION["delete"] = "post deleted successfully";
        header("Location:index.php");
    }
    else{
        echo "something went wrong post not deleted";
    }

}
?>
