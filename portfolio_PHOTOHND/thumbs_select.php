<script src="thumbsList.js"></script>
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

$sql = "SELECT id, title, up_cat, low_cat, img, img_dir FROM thumbs ORDER BY id DESC";
$result = $conn->query($sql) or die($conn->error);


echo "<tr>
<th onclick='sortTable(0)'>번호</th>
<th onclick='sortTable(1)'>이름</th>
<th onclick='sortTable(2)'>썸네일 이미지</th>  
<th onclick='sortTable(3)'>상위 카테고리</th>     
<th onclick='sortTable(4)'>하위 카테고리</th>     
</tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
                        
        // echo "<li id='{$row["id"]}' onclick = 'showClickedObject(this.id)'>"/*."<a href='VisitContentClick()'>"*/.
        
        // "<h3>{$row['title']}</h3>".
        // "<img src='{$row['img0_dir']}' width='210px' heigit='70px'>".
        // "  ".
        // $row["username"].
        // "  ".
        // $row["created"].
        // "</a>".
        // "</li>";

echo
        "<tr id='{$row["id"]}' onclick = 'thumbsList(this.id)'>
        <td class='{$row["id"]}'>{$row['id']}</td>    
        <td class='{$row["id"]}'>{$row['title']}</td>
            <td class='{$row["id"]}'><img src='{$row['img_dir']}' width='90px' heigit='60px'></td>
            <td class='{$row["id"]}'>{$row['up_cat']}</td>
            <td class='{$row["id"]}'>{$row['low_cat']}</td>
        </tr>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>
