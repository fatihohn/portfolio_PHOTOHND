<?php
include 'photohnd_db_conn.php';
$q = intval($_GET['q']);
session_start();
$sql = "SELECT * FROM img WHERE id = $q";
// $sql = "SELECT id, username, title, up_cat, low_cat, img, img_dir FROM img WHERE id = $q";
$result = $conn->query($sql) or die($conn->error);
$rows = mysqli_fetch_assoc($result);

$sqlIdMax = "SELECT id FROM img ORDER BY id DESC LIMIT 1";
// $sqlIdMax = "SELECT MAX(id) FROM projects WHERE display='public'";
$resultIdMax = $conn->query($sqlIdMax) or die($conn->error);
$rowsIdMax = mysqli_fetch_assoc($resultIdMax);
$idMax = $rowsIdMax['id'];
$sqlIdMin = "SELECT id FROM img ORDER BY id ASC LIMIT 1";
// $sqlIdMin = "SELECT MIN(id) FROM projects WHERE display='public'";
$resultIdMin = $conn->query($sqlIdMin) or die($conn->error);
$rowsIdMin = mysqli_fetch_assoc($resultIdMin);
$idMin = $rowsIdMin['id'];

$sqlNext = "SELECT * FROM img WHERE id > $q ORDER BY id ASC LIMIT 1";
$sqlPrev = "SELECT * FROM img WHERE id < $q ORDER BY id DESC LIMIT 1";

if($q < $idMax && $q > $idMin) {
    $sqlNext = "SELECT * FROM img WHERE id > $q ORDER BY id ASC LIMIT 1";
    $sqlPrev = "SELECT * FROM img WHERE id < $q ORDER BY id DESC LIMIT 1";
} else if($q == $idMax) {
    $sqlNext = "SELECT * FROM img WHERE id = $idMin";
} else if($q == $idMin) {
    $sqlPrev = "SELECT * FROM img WHERE id = $idMax";
}


$resultNext = $conn->query($sqlNext) or die($conn->error);
$rowsNext = mysqli_fetch_assoc($resultNext);
$idNext = $rowsNext['id'];

$resultPrev = $conn->query($sqlPrev) or die($conn->error);
$rowsPrev = mysqli_fetch_assoc($resultPrev);
$idPrev = $rowsPrev['id'];
// $sqlNext = "SELECT * FROM img WHERE id > $q ORDER BY id ASC LIMIT 1";
// $resultNext = $conn->query($sqlNext) or die($conn->error);
// $rowsNext = mysqli_fetch_assoc($resultNext);
// $idNext = $rowsNext['id'];
// $sqlPrev = "SELECT * FROM img WHERE id < $q ORDER BY id DESC LIMIT 1";
// $resultPrev = $conn->query($sqlPrev) or die($conn->error);
// $rowsPrev = mysqli_fetch_assoc($resultPrev);
// $idPrev = $rowsPrev['id'];
?>
<button class="view_btn1" onclick="imgList(<?=$idPrev?>)">이전</button>
<button class="view_btn1" onclick="imgList(<?=$idNext?>)">다음</button>
<table class = "view_title">
            <tr>
                <th>이름</th>
                <td class = 'view_user'><?php echo $rows['title']?></td>
            </tr>
            <tr>
                <th>작성자</th>
                <td class = 'view_user'><?php echo $rows['username']?></td>
            </tr>
            <tr>
                <th>상위 카테고리</th>
                <td class = 'view_created'><?php echo $rows['up_cat']?></td>
            </tr>
            <tr>
                <th>하위 카테고리</th>
                <td class = 'view_title'><?php echo $rows['low_cat']?></td>
            </tr>
            <tr>
                <th>이미지</th>
                <td class = 'view_img'><img src = '<?php echo $rows['img_dir']?>' ></td>
            </tr>
            
            
</table>

<div class="view_btn">
                <button class="view_btn1" onclick="location.href='./admin_imgList.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./img_modify.php?id=<?=$q?>&username=<?=$_SESSION['username']?>'">수정</button>
                <button class="view_btn1" onclick="imgDel('<?=$q?>', '<?=$_SESSION['username']?>')">삭제</button>

                
        </div>

