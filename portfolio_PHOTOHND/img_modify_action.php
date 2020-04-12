<?php
    include 'photohnd_db_conn.php';
    $q = intval($_POST['id']); 
    $title = $_POST['title'];
    $img = $_POST['img'];
    $up_cat = $_POST['up_cat'];
    $low_cat = $_POST['low_cat'];
    $uploadimg = include 'img_modify_files.php';
    
    $query = 
    "UPDATE img SET 
    title='$title', 
    img='{$uploadimg['img']}$filename', 
    img_dir='{$uploadimg['img']}$target_file', 
    up_cat='$up_cat', 
    low_cat='$low_cat' 
    WHERE id=$q";
  
  if($_FILES['img']['size']!==0) {
    $query0 = 
    "UPDATE img SET 
    title='$title', 
    img='{$uploadimg['img']}$filename', 
    img_dir='{$uploadimg['img']}$target_file', 
    up_cat='$up_cat', 
    low_cat='$low_cat' 
    WHERE id=$q";
    $query = $query0;
    echo "query0";
} else{
    $query1 = 
    "UPDATE img SET 
    title='$title', 
    up_cat='$up_cat', 
    low_cat='$low_cat' 
    WHERE id=$q";
    $query = $query1;
    echo "query1";
}


$result = $conn->query($query);

    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./admin_imgList.php");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>