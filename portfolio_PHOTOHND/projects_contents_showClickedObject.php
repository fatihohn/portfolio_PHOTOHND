<?php
include 'photohnd_db_conn.php';
$q = intval($_GET['q']);
session_start();
$sql = "SELECT * FROM projects WHERE id = $q AND display='public'";
$result = $conn->query($sql) or die($conn->error);
$rows = mysqli_fetch_assoc($result);

$sqlIdMax = "SELECT id FROM projects WHERE display='public' ORDER BY id DESC LIMIT 1";
// $sqlIdMax = "SELECT MAX(id) FROM projects WHERE display='public'";
$resultIdMax = $conn->query($sqlIdMax) or die($conn->error);
$rowsIdMax = mysqli_fetch_assoc($resultIdMax);
$idMax = $rowsIdMax['id'];
$sqlIdMin = "SELECT id FROM projects WHERE display='public' ORDER BY id ASC LIMIT 1";
// $sqlIdMin = "SELECT MIN(id) FROM projects WHERE display='public'";
$resultIdMin = $conn->query($sqlIdMin) or die($conn->error);
$rowsIdMin = mysqli_fetch_assoc($resultIdMin);
$idMin = $rowsIdMin['id'];

$sqlNext = "SELECT * FROM projects WHERE id > $q AND display='public' ORDER BY id ASC LIMIT 1";
$sqlPrev = "SELECT * FROM projects WHERE id < $q AND display='public' ORDER BY id DESC LIMIT 1";

if($q < $idMax && $q > $idMin) {
    $sqlNext = "SELECT * FROM projects WHERE id > $q AND display='public' ORDER BY id ASC LIMIT 1";
    $sqlPrev = "SELECT * FROM projects WHERE id < $q AND display='public' ORDER BY id DESC LIMIT 1";
} else if($q == $idMax) {
    $sqlNext = "SELECT * FROM projects WHERE id = $idMin AND display='public' ";
} else if($q == $idMin) {
    $sqlPrev = "SELECT * FROM projects WHERE id = $idMax AND display='public' ";
}




$resultNext = $conn->query($sqlNext) or die($conn->error);
$rowsNext = mysqli_fetch_assoc($resultNext);
$idNext = $rowsNext['id'];

$resultPrev = $conn->query($sqlPrev) or die($conn->error);
$rowsPrev = mysqli_fetch_assoc($resultPrev);
$idPrev = $rowsPrev['id'];
?>



<div class='proj_window'>

<div class="proj_btn proj_navBtn proj_btnPrev" onclick="projects_contentsList(<?=$idPrev?>); projInnerMani();"><p>❮</p></div>

<div class = "proj_view">
    <table>
    <tr>
        <td class = 'proj_view_cat'><?php echo $rows['years']?> <?php echo $rows['cat']?></td>
    </tr>
    <tr> 
        <td class = 'proj_view_title'><strong><?php echo $rows['title']?></strong>   <div class="proj_view_subTitle"><?php echo $rows['sub_title']?></div> </td>
    </tr>
    <tr>
        <td class = 'proj_view_img'><p class='img' onclick="projects_escape(); projInnerManiEsc()" style='background-image:url("portfolio_PHOTOHND/<?php echo $rows['img_dir']?>");'></p></td>
    </tr>
    <tr>
        <td class = 'proj_view_content'><?php echo $rows['content']?></td>
    </tr>
    
    
</table>
</div>

<div class="proj_btn proj_btnExit" onclick="projects_escape(); projInnerManiEsc()"onmouseover='showBtnExit()' onmouseout='hideBtnExit()'><p class='btnExitX' >×</p></div>


<div class="proj_btn proj_navBtn proj_btnNext" onclick="projects_contentsList(<?=$idNext?>); projInnerMani();"><p>❯</p></div>
</div>  




