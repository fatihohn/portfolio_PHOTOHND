<script src="projList.js"></script>
<!-- <script src="projDel.js"></script> -->
<script src="sortTable.js"></script>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ecomuse";
// $conn = mysqli_connect(
//     $servername, $username, $password, $dbname
// );
include 'photohnd_db_conn.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM projects ORDER BY id DESC";
$result = $conn->query($sql) or die($conn->error);


echo "<tr>
<th onclick='sortTable(0)'>번호</th>
<th onclick='sortTable(1)'>제목</th>
<th onclick='sortTable(2)'>부제</th>
<th onclick='sortTable(3)'>실행년도</th>
<th onclick='sortTable(4)'>카테고리</th>  
<th onclick='sortTable(5)'>프로젝트 썸네일 이미지</th>     
<th onclick='sortTable(6)'>작성자</th>     
<th onclick='sortTable(7)'>작성일시</th>     
<th onclick='sortTable(8)'>디스플레이</th>     
</tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo
        "<tr id='{$row["id"]}' onclick = 'projList(this.id)'>
        <td class='{$row["id"]}'>{$row['id']}</td>    
        <td class='{$row["id"]}'>{$row['title']}</td>
        <td class='{$row["id"]}'>{$row['sub_title']}</td>
        <td class='{$row["id"]}'>{$row['years']}</td>
        <td class='{$row["id"]}'>{$row['cat']}</td>
        <td class='{$row["id"]}'><div class='listImg' style='background-image:url(";
        echo    '"';
        echo    $row['img_dir'];
        echo    '");"';
        echo    "'></div></td>
        <td class='{$row["id"]}'>{$row['username']}</td>
        <td class='{$row["id"]}'>{$row['created']}</td>
        <td class='{$row["id"]}'>{$row['display']}</td>
        </tr>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!-- <td class='{$row["id"]}'><img src='{$row['img_dir']}' width='90px' heigit='60px'></td> -->
