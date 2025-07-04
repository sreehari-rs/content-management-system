<?php
    include("templates/header.php");
?>
<?php
    $id = $_GET["id"];
    if($id){
        include("../connect.php");
        $sqledit  = "SELECT * FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn , $sqledit); 
    }
    else{
        echo "no post found";
    }
?>
 <div class="create-form w-100 mx-auto p-4" style="max-width:700px">
            <form action="process.php" method = "POST">

                <?php
                while ($data = mysqli_fetch_array($result)){
                ?>
                <div class = "form-field mb-4">
                    <input type  ="text"  class = "form-control" name ="title" id ="" placeholder = "title" value = "<?php echo $data["title"]; ?>">
                </div>
                <div class = "form-field mb-4">
                    <textarea name ="summary"  class = "form-control" id ="" cols ="30" rows = "10" placeholder ="Enter summary:" ><?php echo $data["summary"]; ?></textarea>
                </div>
                <div class ="form-field mb-4">
                    <textarea name = "content" class = "form-control" id ="" cols ="30" rows ="10" placeholder ="enter post" ><?php echo $data["summary"]; ?></textarea>
                </div>
                <input type ="hidden" name = "date" value = "<?php echo date("y/m/d"); ?>">
                <input type = "hidden" name = "id" value = "<?php echo $id ;?> ">
                <div class ="form-field mb-4">
                    <input type ="submit"  class = "btn btn-primary" value ="submit" name = "update">
                </div>
                <?php
                }
                ?>
            </form>
        </div>

    </div>
