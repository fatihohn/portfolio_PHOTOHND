<!DOCTYPE html>
<html>

<head>

    <?php include 'photohnd_head.php'; ?>

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
                    <h2>이미지 목록</h2>
                </center>
            </div>

            <div id="adImgList">
                <div>
                    <button class="view_btn1" onclick="location.href='./img_create.php'">글쓰기</button>
                    <input type="text" class="searchInput" onkeyup="searchInput()" placeholder="이름 검색..">
                </div>
                <div id="includeTable">
                <table class="imgTable sortTable"><?php include 'img_select.php'; ?></table>
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
       function imgDel(str, strName) {
    let delConfirm = confirm('삭제 후 복원이 불가능합니다. 삭제하시겠습니까?');
    if(delConfirm == true) {
        location.href='./img_delete.php?id='+str+'&username='+strName+'';
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