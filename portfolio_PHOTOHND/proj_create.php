<!DOCTYPE html>
<html>

<head>

    
<?php include 'photohnd_head.php'; ?>


</head>

<body>

    <header>
        <?php include 'admin_header.php'; ?>
        <link rel="stylesheet" href="jodit-3.3.8/build/jodit.min.css">
        <script src="jodit-3.3.8/build/jodit.min.js"></script>
        
    
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
            <h3>프로젝트 목록</h3>
        </center>

        <form class="createForm" action="proj_create_action.php" method="POST" enctype="multipart/form-data">
            <p>
                <label>작성자</label>
                <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>"><?= $_SESSION['username'] ?>
            </p>
            <p>
                <label>제목</label>
                <textarea type="text" name="title" placeholder="제목" cols="100" required></textarea>
            </p>
            <p>
                <label>부제</label>
                <textarea type="text" name="sub_title" placeholder="부제" cols="100"></textarea>
            </p>
            <p>
                <label for="years">실행년도</label>
                <div id = "yearselect"></div>
                

            </p>
            <label for="cat">카테고리:</label>
            <select id="cat" name="cat"required>
                <option value="">
                <option value="project">project
                <option value="exhibition">exhibition
                <option value="publication">publication
                <option value="background">배경이미지 변경
            </select>
            <p><label>프로젝트 썸네일 이미지</label>
                <input type="file" name="projects"></p>
                <p>

                
                <label >내용</label>
                <textarea id="editor" type="text" name="editor" placeholder="내용" rows="20"cols="60">
                    
                </textarea>


                <script>
                    const editor = Jodit.make('#editor', {
                        enableDragAndDropFileToEditor: true,
                        filebrowser: {
                            ajax: {
                                url: 'jodit-3.3.8/connector/index.php'
                            }
                        },

                        uploader: {
                            url: 'jodit-3.3.8/connector/index.php?action=fileUpload',
        
                        },

                      
                        theme: "dark"


                    });
                    editor.value = `<p></p>`;

                </script>
               
            </p>
            <p>
            <label for="display">디스플레이:</label>
            
            <select id="display" name="display"required>
                <option value="public">public
                    <option value="personal">personal
                        </select>
                    </p>
            <p><input type="submit"></p>
        </form>




    </section>

    <footer>
        <?php include 'admin_footer.php'; ?>
    </footer>

    <script src="yearCounter.js"></script>
    <script src="replaceImg.js"></script>
    <script>
                let editorObj = document.querySelector('.jodit_xpath');
                let editorSelf = document.querySelector('.jodit_wysiwyg');
                let observer = new MutationObserver(mutations => {
                    
                    if(editorSelf.querySelector('a')){
                        replaceImg();
                    } else {

                    }
                });

                observer.observe(editorObj, {
                    childList: true
                });


                </script>
    
    
</body>

</html>
