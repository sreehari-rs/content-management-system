<?php
include("templates/header.php")
?>
 
<div class = "posts-list w-100 p-5">
    <?php
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
    ?>
    <table class ="table table-bordered">
        <theads>
            <th>Publication Date</th>
            <th>title</th>
            <th>article</th>
            <th>action</th>
        </thead>    
   
        <tbody>
            <?php
            include("../connect.php");
            $sql = "SELECT * FROM posts";
            $result = mysqli_query($conn ,$sql);
            while($data =mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $data["date"] ;?></td>
            <td><?php echo $data["title"];?></td>
            <td><?php echo $data["summary"];?></td>
            <td class ="d-flex gap-2">
                <a class = "btn btn-info me-2" href ="view.php?id=<?php echo $data["id"]?>">view</a>
                <a class = "btn btn-warning me-2" href ="edit.php?id=<?php echo $data["id"]?>">edit</a>
                <a class = "btn btn-danger" href ="delete.php?id=<?php echo $data["id"]?>">delete</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
     </table>
</div>