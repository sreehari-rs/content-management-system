<?php
    if(isset($_POST["create"])){
        include("../connect.php");
        $title =mysqli_real_escape_string($conn,$_POST["title"]);
        $summary =mysqli_real_escape_string($conn,$_POST["summary"]);
        $content = mysqli_real_escape_string($conn,$_POST["content"]);
        $date = $_POST["date"];

        $sql = "INSERT INTO posts (title , summary , content,date) VALUES ('$title','$summary','$content','$date')";
        $result = mysqli_query($conn , $sql);
        if($result){
            session_start();
            $_SESSION["create"] ="Post added succcessfully";
            header("Location:index.php");

        }
        else{
            echo "data not added successfully ";
        }
    


    }

   
?>
<?php
    if(isset($_POST["update"])){
        include("../connect.php");
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
        $content = mysqli_real_escape_string($conn, $_POST["content"]);
        $date = mysqli_real_escape_string($conn, $_POST["date"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
        $sql = "UPDATE posts SET title = '$title',summary = '$summary', content = '$content', date = '$date' WHERE id = $id";
        if(mysqli_query($conn, $sql)){
            session_start();
            $_SESSION["update"] = "Post udpated successfully";
            header("Location:index.php");
        }else{
            die("Data is not updated!");
        }

    }
?>
