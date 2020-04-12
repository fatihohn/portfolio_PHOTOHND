<?php
include 'photohnd_db_conn.php';
$q = intval($_GET['q']);
session_start();
$sql = "SELECT id, username, title, sub_title, cat, years, img, img_dir, content, display, created FROM projects WHERE id = $q";
$result = $conn->query($sql) or die($conn->error);
$rows = mysqli_fetch_assoc($result);

$sqlIdMax = "SELECT id FROM projects ORDER BY id DESC LIMIT 1";
// $sqlIdMax = "SELECT MAX(id) FROM projects WHERE display='public'";
$resultIdMax = $conn->query($sqlIdMax) or die($conn->error);
$rowsIdMax = mysqli_fetch_assoc($resultIdMax);
$idMax = $rowsIdMax['id'];
$sqlIdMin = "SELECT id FROM projects ORDER BY id ASC LIMIT 1";
// $sqlIdMin = "SELECT MIN(id) FROM projects WHERE display='public'";
$resultIdMin = $conn->query($sqlIdMin) or die($conn->error);
$rowsIdMin = mysqli_fetch_assoc($resultIdMin);
$idMin = $rowsIdMin['id'];

$sqlNext = "SELECT * FROM projects WHERE id > $q ORDER BY id ASC LIMIT 1";
$sqlPrev = "SELECT * FROM projects WHERE id < $q ORDER BY id DESC LIMIT 1";

if($q < $idMax && $q > $idMin) {
    $sqlNext = "SELECT * FROM projects WHERE id > $q ORDER BY id ASC LIMIT 1";
    $sqlPrev = "SELECT * FROM projects WHERE id < $q ORDER BY id DESC LIMIT 1";
} else if($q == $idMax) {
    $sqlNext = "SELECT * FROM projects WHERE id = $idMin";
} else if($q == $idMin) {
    $sqlPrev = "SELECT * FROM projects WHERE id = $idMax";
}


$resultNext = $conn->query($sqlNext) or die($conn->error);
$rowsNext = mysqli_fetch_assoc($resultNext);
$idNext = $rowsNext['id'];

$resultPrev = $conn->query($sqlPrev) or die($conn->error);
$rowsPrev = mysqli_fetch_assoc($resultPrev);
$idPrev = $rowsPrev['id'];
// $sqlNext = "SELECT * FROM projects WHERE id > $q ORDER BY id ASC LIMIT 1";
// $resultNext = $conn->query($sqlNext) or die($conn->error);
// $rowsNext = mysqli_fetch_assoc($resultNext);
// $idNext = $rowsNext['id'];
// $sqlPrev = "SELECT * FROM projects WHERE id < $q ORDER BY id DESC LIMIT 1";
// $resultPrev = $conn->query($sqlPrev) or die($conn->error);
// $rowsPrev = mysqli_fetch_assoc($resultPrev);
// $idPrev = $rowsPrev['id'];
?>

<script>
let delBtn = document.querySelector(".delBtn");

function projDel() {
    let delConfirm = confirm('삭제 후 복원이 불가능합니다. 삭제하시겠습니까?');
    if(delConfirm == true) {
        location.href='./proj_delete.php?id=<?=$q?>&username=<?=$_SESSION['username']?>';
    } else {
        alert('취소되었습니다');
    }
}
</script>

<button class="view_btn1" onclick="projList(<?=$idPrev?>)">이전</button>
<button class="view_btn1" onclick="projList(<?=$idNext?>)">다음</button>
<table class = "view_title">
    <tr>
        <th>작성자</th>
        <td class = 'view_username'><?php echo $rows['username']?></td>
    </tr>
    <tr>
        <th>디스플레이</th>
        <td class = 'view_display'><?php echo $rows['display']?></td>
    </tr>
    <tr>
        <th>작성일시</th>
        <td class = 'view_created'><?php echo $rows['created']?></td>
    </tr>
            <tr>
                <th>제목</th>
                <td class = 'view_title'><?php echo $rows['title']?></td>
            </tr>
            <tr>
                <th>부제</th>
                <td class = 'view_subTitle'><?php echo $rows['sub_title']?></td>
            </tr>
            <tr>
                <th>실행년도</th>
                <td class = 'view_years'><?php echo $rows['years']?></td>
            </tr>
            <tr>
                <th>카테고리</th>
                <td class = 'view_cat'><?php echo $rows['cat']?></td>
            </tr>
            <tr>
                <th>프로젝트 썸네일 이미지</th>
                <td class = 'view_img'><img src = '<?php echo $rows['img_dir']?>' ></td>
            </tr>
            <tr>
                <th>내용</th>
                <td class = 'view_content'><?php echo $rows['content']?></td>
            </tr>
            
            
</table>
                 
<div class="view_btn">
                <button class="view_btn1" onclick="location.href='./admin_projList.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./proj_modify.php?id=<?=$q?>&username=<?=$_SESSION['username']?>'">수정</button>
                <button class="view_btn1 delBtn" onclick="projDel('<?=$q?>', '<?=$_SESSION['username']?>')">삭제</button>
                <button class="view_btn1" onclick="projList(<?=$idPrev?>)">이전</button>
<button class="view_btn1" onclick="projList(<?=$idNext?>)">다음</button>
                
        </div>

