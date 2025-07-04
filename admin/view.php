<?php
    include("templates/header.php");
?>
<div class = "post w-100 bg-light  p-5">
    <?php
    $id =$_GET["id"];
    if($id){
        include("../connect.php");
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        while($data = mysqli_fetch_array($result)){
        ?>
        <h1><?php echo $data["title"]; ?></h1>
        <p><?php echo $data["content"]; ?></p>
        <p><?php echo $data["summary"]; ?></p>
        <?php
        }
    

    }
    else{
        echo "post not found";
    }
    ?>
</div>

