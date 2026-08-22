<?php
 include "db.php";
 $id = $_GET['id'];
 $result = mysqli_query($conn, "SELECT * FROM user_tb WHERE id=$id");
$user = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $fcousre = $_POST['course'];
        $year = $_POST['year'];
        $block = $_POST['block'];
        

    $sql = "UPDATE new1
            SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', course = '$course', year = '$year', block = '$block'
            WHERE id =$id";    
            mysqli_query($conn, $sql);
            header("Location: view.php");

}

?>
     <link rel ="stylesheet" href = "style.css">
     <head><title>Edit user</title></head>

     <form method ="POST">
         <div class="name-row">
            <div>
              <label>Firstname</label>
              <input type ="text" name = "firstname" value ="<?=$user['firstname'];?>" >
            </div>
        
            <div>
               <label>Middlename</label>
               <input type ="text" name = "middlename" value ="<?=$user['middlename'];?>" >
            </div>   
               
            <div>
                <label>Lastname</label>
                <input type ="text" name = "lastname" value ="<?=$user['lastname'];?>" >
            </div>
        </div>
        
        <div class="course-row">
            <div>
               <label>Course</label>
               <input type ="text" name = "course" value ="<?=$user['course'];?>" >
            </div>

            <div>
               <label>Year</label>
               <input type ="text" name = "year" value ="<?=$user['year'];?>" >
            </div>

            <div>
               <label>Block</label>
               <input type ="text" name = "block" value ="<?=$user['block'];?>" >
            </div>   
        </div>
        
        <button type ="submit" name = "update"> Update</button>
</div>
</form>
