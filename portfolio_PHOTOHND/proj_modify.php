<?php    
           include 'photohnd_db_conn.php';   
                
                // $id = $_POST['username'];
                $q = intval($_GET['id']);
                $query = "SELECT * FROM projects WHERE id= $q";
                $result = $conn->query($query);
                $rows = mysqli_fetch_assoc($result);
                $username = $rows['username'];
                $title = $rows['title'];
                $sub_title = $rows['sub_title'];
                $years = $rows['years'];
                $cat = $rows['cat'];
                $img = $rows['img'];
                $img_dir = $rows['img_dir'];
                $content = $rows['content'];
                $display = $rows['display'];

                session_start();
 
 
                $URL = "./admin_projList.php";
 
                if(!isset($_SESSION['username'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['username']==$username) {
        ?>

<!DOCTYPE html>
<html>

<head>

    
<link rel="stylesheet" href="jodit-3.3.8/build/jodit.min.css">
<script src="jodit-3.3.8/build/jodit.min.js"></script>
<?php include 'photohnd_head.php'; ?>

</head>

<body>

        <header>
        <?php include 'admin_header.php'; ?>
       
    </header>
        <form method = "POST" action = "proj_modify_action.php" enctype="multipart/form-data">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글 수정</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="username" value="<?=$_SESSION['username']?>"><?=$_SESSION['username']?></td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = "title" size=60 value="<?=$title?>"required></td>
                        </tr>
                        <tr>
                        <td>부제</td>
                        <td><input type = text name = "sub_title" size=60 value="<?=$sub_title?>"></td>
                        </tr>
                        <tr>
                        <td>실행년도</td>
                        <td>
                        <!-- <label for="years">실행년도</label> -->
                        <select id="yearselector" name ="years"class="<?=$years?>">
                <div id = "yearselect"></div>
                </select>
                </td>
                        </tr>

                        <tr>
                        <td>카테고리</td>
                        <td>
                        <!-- <label for="cat">카테고리:</label> -->
                        <select id="cat" name="cat" required>
                        <option value="<?=$cat?>"><?=$cat?>
                        <option value="project">project
                        <option value="exhibition">exhibition
                        <option value="publication">publication
                        <option value="background">배경이미지 변경
                        </select></td>
                        </tr>
 
                        <tr>
                        <td>프로젝트 썸네일이미지</td>
                        <td><input type="file" name ="projects"><?=$img?></td>
                        </tr>
                        

                        <tr>
                        <!-- <td>내용</td> -->
                        <td>내용</td>
                        <td>
                        <textarea id="editor"  type="text" name="editor" placeholder="내용" rows="20"cols="60">
                        
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
                    
                    editor.value = `<?=$content?>`;

                </script>
                        </td>
                        </tr>
                        
                        <tr>
                        <td>디스플레이</td>
                        <td>
                        <!-- <label for="display">디스플레이:</label> -->
                        <select id="display" name="display"required>
                        <option value="<?=$display?>"><?=$display?>
                        <option value="public">public
                        <option value="personal">personal
                        </select></td>
                        </tr>
                </table>
                        
                        <center>
                        <input type="hidden" name="id" value="<?=$q?>">
                        <input type = "submit">
                        <button name="cancel"><a href = "javascript:history.back()">취소</a>


                        </button>
                        </center>
                </td>
                </tr>
        </table>
        <footer>
        <?php include 'admin_footer.php'; ?>
    </footer>

    <!-- <script src="catSelector.js"></script> -->
    <script src="yearCounter_modify.js"></script>
    <script src="replaceImg.js"></script>
    <script src="replaceQ.js"></script>
    <script>
                let editorObj = document.querySelector('.jodit_xpath');
                let editorSelf = document.querySelector('.jodit_wysiwyg');
                let observer = new MutationObserver(mutations => {
                    
                        // console.log(mutations);
                    
                    if(editorSelf.querySelector('a')){
                        replaceImg();

                        // console.log("aaa")
                //     } else if(editorSelf.innerText.includes("'") || editorSelf.innerText.includes('"')) {
                //         setTimeout(() => {
                //                 replaceQ();  
                //         }, 1000);      
                //         // console.log(mutations);
                    } else {
                        // console.log(mutations);
                    }
                });

                observer.observe(editorObj, {
                    childList: true
                });

                // setTimeout(() => {
                //     // replaceImg();
                //     editorSelf.replace("a href", "img src");
                //     editorSelf.replace("/a", "");

                // }, 500);
                
                // setInterval(() => {
                //     replaceImg();
                // }, 500);

                </script>
    
</body>

</html>
        



        <?php   } else {
                ?>

                <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
                        
                <?php
                }
                
                ?>


                <!-- <script>
const editor = SUNEDITOR.create((document.getElementById('contEditor') || 'contEditor'),{
// const editor = SUNEDITOR.create((document.getElementById('contEditor') || 'contEditor'),{

// plugins: plugins,
buttonList: [
['undo', 'redo'],
['font', 'fontSize', 'formatBlock'],
['paragraphStyle', 'blockquote'],
['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
['fontColor', 'hiliteColor', 'textStyle'],
['removeFormat'],
'/', // Line break
['outdent', 'indent'],
['align', 'horizontalRule', 'list', 'lineHeight'],
['table', 'link', 'image', 'video', /** 'math' */], // You must add the 'katex' library at options to use the 'math' plugin.
['fullScreen', 'showBlocks', 'codeView'],
['preview', 'print'],
['save', 'template']
],
height: 400,
width: 900,
imageResizing   : "50%",
imageWidth : "60vw",
imageUploadUrl  : "/uploads/projects/content/",
lang: SUNEDITOR_LANG['ko']
});
// SUNEDITOR.setContents('set contents');







            </script> -->