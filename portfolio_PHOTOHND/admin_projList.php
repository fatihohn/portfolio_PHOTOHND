<!DOCTYPE html>
<html>

<head>

<!-- <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" id="viewport" content="width=device-width">
    <title>PhotOHND</title>
    <meta name="description" content="PhotOHND">
    <meta name="keywords" content="PhotOHND, photoohnd photography, 온동훈, Donghun_ohn, Donghun Ohn, OHNDONGHUN, PHOTOGRAPHY">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="PhotOHND">
    <meta property="og:description" content="PhotOHND">
    <meta property="og:image" content="내 포트폴리오 로고">
    
    <meta property="og:url" content="http://PhotOHND.com/">
    
    
    <link rel="stylesheet" type="text/css" href="admin_style.css?after">
     -->

     <?php include 'photohnd_head.php'; ?>

     <!-- <script src="projDel.js"></script> -->
</head>

<body>
    <header>
        <?php include 'admin_header.php'; ?>
    </header>
    <article class="adArticle">
        <?php include 'admin_article.php'; ?>
    </article>
    <section>
        <div>
            <br>
            <div>
                <center>
                    <h2>프로젝트 목록</h2>
                </center>
            </div>

            <div id="adProjList">
                <div>
                    <button class="view_btn1" onclick="location.href='./proj_create.php'">글쓰기</button>
                    <input type="text" class="searchInput" onkeyup="searchInput()" placeholder="이름 검색..">
                </div>
                <div id="includeTable">
                <table  class="imgTable sortTable"><?php include 'proj_select.php'; ?></table>
                </div>
                <div id="tableBox"></div>
<br>
<br>
            </div>





        </div>

    </section>
    <footer>
        <?php include 'admin_footer.php'; ?>
    </footer>
    <script>
       function projDel(str, strName) {
    let delConfirm = confirm('삭제 후 복원이 불가능합니다. 삭제하시겠습니까?');
    if(delConfirm == true) {
        location.href='./proj_delete.php?id='+str+'&username='+strName+'';
        alert('삭제되었습니다')
    } else {
        alert('취소되었습니다');
    }
}
       </script>

    <script src="searchInput.js"></script>
    <script src="paginator.js"></script>
    
    


</body>

</html>