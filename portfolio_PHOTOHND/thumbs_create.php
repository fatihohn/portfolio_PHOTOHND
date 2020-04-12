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
        <?php
        //session_start();
        $URL = "./admin_index.php";
        if (!isset($_SESSION['username'])) {
        ?>

            <script>
                alert("로그인이 필요합니다");
                location.replace("<?php echo $URL ?>");
            </script>
        <?php
        }
        ?>


        <br>
        <center>
            <h3>썸네일 목록</h3>
        </center>

        <form class="createForm" action="thumbs_create_action.php" method="POST" enctype="multipart/form-data">
            <p>
                <label>작성자</label>
                <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>"><?= $_SESSION['username'] ?>
            </p>
            <p>
                <label>이름</label>
                <textarea type="text" name="title" placeholder="이름" cols="100"></textarea>
            </p>
            <p><label>썸네일 이미지</label>
                <input type="file" name="thumbs"></p>
            <!-- <p><label>상위 카테고리</label>
                <textarea name="up_cat" placeholder="상위 카테고리" rows="10" cols="100"></textarea></p>
            <p><label>하위 카테고리</label>
                <textarea name="low_cat" placeholder="하위 카테고리" rows="10" cols="100"></textarea></p>  -->
            <label for="up_cat">상위 카테고리:</label>
            <select id="up_cat" name="up_cat" >
                <option value="portraits">portraits
                <option value="stillObjects">stillObjects
                <option value="performance">performance
                <option value="natureLandscape">natureLandscape
                <option value="events">events
                <option value="artistic">artistic
            </select>

            <p id="low_cat_show"></p>


            <p><input type="submit"></p>
        </form>




    </section>

    <footer>
        <?php include 'admin_footer.php'; ?>
    </footer>

    <script src="catSelector.js"></script>


</body>

</html>