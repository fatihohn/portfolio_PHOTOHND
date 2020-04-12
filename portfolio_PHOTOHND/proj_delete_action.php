<?php
   include 'photohnd_db_conn.php';   
                
   // $id = $_POST['username'];
   $q = intval($_GET['id']);
   $query0 = "SELECT id, username FROM projects WHERE id= $q";
   // $query0 = "SELECT id, username, created, title, img0, img0_dir, addressinfo, contact, img1, img1_dir, autoparking, img2, img2_dir, publictrans, extmaplink FROM visit WHERE id= $q";
   $query1 = "DELETE FROM projects WHERE id= $q";
   $result0 = $conn->query($query0);
   $rows = mysqli_fetch_assoc($result0);
   $username = $rows['username'];

   session_start();
                                        
$result = $conn->query($query1);

?>

