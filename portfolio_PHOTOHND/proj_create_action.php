<?php
include 'photohnd_db_conn.php';

$uploadimg = include 'proj_create_files.php';       
$cont = $_POST['editor'];
$content = mysql_real_escape_string($cont);
$sql = "

        INSERT INTO projects
            (username, title, sub_title, years, cat, img, img_dir, content, display, created)
        VALUES(
            '{$_POST['username']}',
            '{$_POST['title']}',
            '{$_POST['sub_title']}',
            '{$_POST['years']}',
            '{$_POST['cat']}',
            '{$uploadimg['img']}$filename',
            '{$uploadimg['img']}$target_file',
            '{$content}',
            '{$_POST['display']}',
            NOW()
        )";

        $result = mysqli_query($conn, $sql);
// if(isset($_POST['username'])) {
// $result;};

if($result === false){
    echo '저장실패. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    
}
else {
    echo("<script>location.href='admin_projList.php';</script>");
}

/*
https://youtu.be/1NiJcZrPHvA
*/
