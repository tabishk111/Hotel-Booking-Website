<?php @session_start();
include "dbconnect.php";


    $id=$_GET['id'];
   $sql="DELETE FROM guest WHERE guest_id='" . $id."';";
$result=mysqli_query($conn,$sql);

   $sql="DELETE FROM room_booking WHERE guest_id='" . $id."';";
$result=mysqli_query($conn,$sql);
echo '<script>window.location.assign("guestdetail.php?del=done");</script>';

?>