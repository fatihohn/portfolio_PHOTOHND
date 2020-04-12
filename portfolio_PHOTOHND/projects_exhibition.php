
<?php

include 'photohnd_db_conn.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?><?php
$sqlPublication = "SELECT * FROM projects WHERE cat ='exhibition' AND display = 'public' ORDER BY years DESC";
$result = $conn->query($sqlPublication) or die($conn->error);


// echo "<tr>
// <th onclick='sortTable(0)'>제목</th>
// <th onclick='sortTable(1)'>부제</th>
// <th onclick='sortTable(2)'>카테고리</th>  
// <th onclick='sortTable(3)'>프로젝트 썸네일 이미지</th>  
// </tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo
        "<div id='{$row["id"]}' onclick = 'projects_contentsList(this.id); projInnerMani();'>
         
        
        <p class='img' style='background-image:url(";
        echo    '"portfolio_PHOTOHND/';
        echo    $row['img_dir'];
        echo    '");';
        echo    "'></p>
        <h3 class='projTitle'>";
        echo "&lt;";
        echo "{$row['title']}";
        echo "&gt;";
        echo " {$row['sub_title']}</h3>
        <p class='proj_p'>{$row['years']}</p>
        <br><br>
        </div>";
        
    }
} else {
    echo "<br><p class='proj_pwork'>working on it!</p>";
}
$conn->close();
?>