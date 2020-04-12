<?php
include "portfolio_PHOTOHND/photohnd_db_conn.php";
$sql = "SELECT * FROM projects WHERE cat='background' ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql) or die($conn->error);
$rows = mysqli_fetch_assoc($result);


$conn->close();
?>

<script>
document.querySelector(".proj_wrap").style.backgroundImage = "url('portfolio_PHOTOHND/<?php echo $rows['img_dir'] ?>')";
document.querySelector(".proj_wrap").style.backgroundSize = "cover";
document.querySelector(".proj_wrap").style.backgroundPosition = "bottom";


</script>
