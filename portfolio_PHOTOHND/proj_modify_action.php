<?php
    include 'photohnd_db_conn.php';
    $q = intval($_POST['id']); 
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $years = $_POST['years'];
    $cat = $_POST['cat'];
    $img = $_POST['projImg'];
    $cont = $_POST['editor'];
    $content = mysql_real_escape_string($cont);

    $display = $_POST['display'];
    $uploadimg = include 'proj_modify_files.php';
    
    $query = 
    "UPDATE projects SET 
    title='$title', 
    sub_title='$sub_title', 
    years='$years', 
    cat='$cat', 
    img='{$uploadimg['img']}$filename', 
    img_dir='{$uploadimg['img']}$target_file', 
    content='$content',
    display='$display' 
    WHERE id=$q";
  
  if($_FILES['projects']['size']!==0) {
    $query0 = 
    "UPDATE projects SET 
    title='$title', 
    sub_title='$sub_title', 
    years='$years', 
    cat='$cat', 
    img='{$uploadimg['img']}$filename', 
    img_dir='{$uploadimg['img']}$target_file', 
    content='$content',
    display='$display' 
    WHERE id=$q";
    $query = $query0;
    echo "<br>query0";
} else{
    $query1 = 
    "UPDATE projects SET 
    cat='$cat', 
    title='$title', 
    sub_title='$sub_title', 
    years='$years', 
    content='$content',
    display='$display' 
    WHERE id=$q";
    $query = $query1;
    echo "<br>query1";
}  

$result = $conn->query($query);

    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./admin_projList.php");
        </script>
<?php    }
    else {
        echo "fail";
        echo("Error description: " . mysqli_error($conn));
    }
?>