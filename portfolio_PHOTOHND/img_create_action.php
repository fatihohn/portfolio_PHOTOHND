<?php
include 'photohnd_db_conn.php';

$uploadimg = include 'img_create_files.php';       

$sql = "

        INSERT INTO img
            (username, title, img, img_dir, up_cat, low_cat)
        VALUES(
            '{$_POST['username']}',
            '{$_POST['title']}',
            '{$uploadimg['img']}$filename',
            '{$uploadimg['img']}$target_file',
            '{$_POST['up_cat']}',
            '{$_POST['low_cat']}'
        )";

        $result = mysqli_query($conn, $sql);
// if(isset($_POST['username'])) {
// $result;};

if($result === false){
    echo '저장실패. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    
}
else {
    echo("<script>location.href='admin_imgList.php';</script>");
}

/*
https://youtu.be/1NiJcZrPHvA
*/
