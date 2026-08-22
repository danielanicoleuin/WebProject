<!DOCTYPE html>
<html>
     <link rel="stylesheet" href="style.css">
     <head><title>View Users</title></head>

     <body>
        <div class="table">
         <h2>REGISTERED USERS</h2>
         <table border="1" cellpadding="5">
                 <tr>    
                        
                        <th>FIRSTNAME</th>
                        <th>MIDDLENAME</th>
                        <th>LASTNAME</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>BLOCK</th>
                        <th>ACTION</th>
                 </tr>
         <?php
          include "db.php";
           $result = mysqli_query($conn, "SELECT * FROM new1");
            while ($row = mysqli_fetch_assoc($result)){
          ?>           
           <tr> 
                <td><?= $row['firstname']; ?></td>
                <td><?= $row['middlename']; ?></td>
                <td><?= $row['lastname']; ?></td>
                <td><?= $row['course']; ?></td>
                <td><?= $row['year']; ?></td>
                <td><?= $row['block']; ?></td>
               
                
                <td>  
                     <a href="edit.php?id=<?=$row['id'];?>"> Edit </a>
                     <a href="delete.php?id=<?=$row['id'];?>"
                     onclick="return confirm('Delete this Record?');">Delete</a>
                </td>

                
           </tr>
          <?php } ?>
         </table>
         <br>
         <div class="links">
          <center><a href="index.php">Add New</a></center>
         </div>
      </body>
</html>