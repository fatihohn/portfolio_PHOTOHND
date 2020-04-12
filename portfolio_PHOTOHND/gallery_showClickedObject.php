<?php
include 'photohnd_db_conn.php';

?>

<?php

$cat = $_GET['q'];
$r = $_GET['r'];
echo 
"
<div class='img_window'>

<div class='navBtn btnPrev' onclick='plusSlides(-1)'><p>❮</p></div>
";

session_start();


$sql = "SELECT id, title, up_cat, low_cat, img, img_dir FROM img WHERE low_cat = '$cat' ORDER BY title ASC LIMIT 1,100000";
$result = $conn->query($sql) or die($conn->error);




$imgNumber = mysqli_num_rows($result)-mysqli_num_rows($result);



$sql1 = "SELECT id, title, up_cat, low_cat, img, img_dir FROM img WHERE low_cat = '$cat' ORDER BY title ASC LIMIT 1";

$result1 = $conn->query($sql1) or die($conn->error);



if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
   
        echo "<div class='galleryImg {$row1["title"]}' style='background-image:url(";
        echo '"portfolio_PHOTOHND/';
        echo $row1['img_dir'];
        echo '");';
        echo "'></div>";
   
        
        
        
    }
}

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {

        echo "<div class='galleryImg {$row["title"]}' style='display:none;background-image:url(";
        echo '"portfolio_PHOTOHND/';
        echo $row['img_dir'];
        echo '");';
        echo "'></div>";
          
                
    }
} else {
    echo "0 results";
}


$conn->close();

echo "


<div class='navBtn btnNext' onclick='plusSlides(1)'><p>❯</p></div>
<div class='btnExit' onclick='galleryExit()' onmouseover='showBtnExit()' onmouseout='hideBtnExit()'><p class='btnExitX'>×</p></div>
</div>
";



?>


