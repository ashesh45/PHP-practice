<table border="1">
  <tr>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Email</th>
     <th>Date</th>
     </tr>
     <?php
     include('config.php');

     $sql = "SELECT * FROM myguests ORDER BY id";

     $result = mysqli_query($conn, $sql);

     if($result) {
         while ($row = mysqli_fetch_assoc($result)) {
             ?>
             <tr>
             <th> <?php echo $row["firstname"];?>
             </th>
             <th> <?php echo $row["Lastname"];?>
             </th>
             <th> <?php echo $row["email"];?>
             </th>
             <th> <?php echo $row["reg-_date"];?>
             </th>
             
             </tr>
             <?php
         }
     }
     ?>
     </table>