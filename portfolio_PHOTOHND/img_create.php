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
            <h3>이미지 목록</h3>
        </center>

        <form class="createForm" action="img_create_action.php" method="POST" enctype="multipart/form-data">
            <p>
                <label>작성자</label>
                <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>"><?= $_SESSION['username'] ?>
            </p>
            <p>
                <label>이름</label>
                <textarea type="text" name="title" placeholder="이름" cols="100" required></textarea>
            </p>
            <p><label>이미지</label>
                <input type="file" name="img" required></p>
            <!-- <p><label>상위 카테고리</label>
                <textarea name="up_cat" placeholder="상위 카테고리" rows="10" cols="100"></textarea></p>
            <p><label>하위 카테고리</label>
                <textarea name="low_cat" placeholder="하위 카테고리" rows="10" cols="100"></textarea></p>  -->
            <p><label for="up_cat">상위 카테고리:</label>
            <select id="up_cat" name="up_cat" >
                <option value="portraits">portraits
                <option value="stillObjects">stillObjects
                <option value="performance">performance
                <option value="natureLandscape">natureLandscape
                <option value="events">events
                <option value="artistic">artistic
            </select>
    </p>
<p id="low_cat_show">
<label for="low_cat">하위 카테고리:</label>
      <select class="low_cat_portraits" name="low_cat">
          <option value="portraits">Portraits</option>
      </select>
</p>


            <!-- <label for="low_cat">하위 카테고리:</label>
            <select class="low_cat_portraits" name="low_cat">
                <option value="portraits">Portraits</option>
            </select>

            <label for="low_cat">하위 카테고리:</label>
            <select class="low_cat_stillObjects" name="low_cat">
                <option value="food">food</option>
                <option value="interiorProduct">interiorProduct</option>
            </select>

            <label for="low_cat">하위 카테고리:</label>
            <select class="low_cat_performance" name="low_cat">
                <option value="dance">dance</option>
                <option value="music">music</option>
            </select>

            <label for="low_cat">하위 카테고리:</label>
            <select class="low_cat_natureLandscape" name="low_cat">
                <option value="life">life</option>
                <option value="macro">macro</option>
                <option value="landscape">landscape</option>
            </select>

            <label for="low_cat">하위 카테고리:</label>
            <select class="low_cat_events" name="low_cat">
                <option value="events">events</option>
            </select>

            <label for="low_cat">하위 카테고리:</label>
            <select class="low_cat_artistic" name="low_cat">
                <option value="abstract">abstract</option>
                <option value="documentary">documentary</option>
            </select> -->
            


            <p><input type="submit"></p>
        </form>




    </section>

    <footer>
        <?php include 'admin_footer.php'; ?>
    </footer>

<script src="catSelector.js"></script>

</body>

</html>