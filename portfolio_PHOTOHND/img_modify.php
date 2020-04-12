<?php    
           include 'photohnd_db_conn.php';   
                
                // $id = $_POST['username'];
                $q = intval($_GET['id']);
                $query = "SELECT id, username, title, img, img_dir, up_cat, low_cat FROM img WHERE id= $q";
                $result = $conn->query($query);
                $rows = mysqli_fetch_assoc($result);
                $username = $rows['username'];
                $title = $rows['title'];
                $img = $rows['img'];
                $up_cat = $rows['up_cat'];
                $low_cat = $rows['low_cat'];

                session_start();
 
 
                $URL = "./admin_imgList.php";
 
                if(!isset($_SESSION['username'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['username']==$username) {
        ?>
        <form method = "POST" action = "img_modify_action.php" enctype="multipart/form-data">
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
                        <td><input type = text name = "title" size=60 value="<?=$title?>"></td>
                        </tr>
 
                        <tr>
                        <td>이미지</td>
                        <td><input type="file" name = "img" value="<?=$img?>"><?=$img?></td>
                        </tr>
                        
                        <tr>
                        <td>상위 카테고리</td>
                        <td>
                        <!-- <label for="up_cat">상위 카테고리:</label> -->
            <select id="up_cat" name="up_cat" class="<?=$up_cat?>">
            <option value="<?=$up_cat?>"><?=$up_cat?>
                <option value="portraits">portraits
                <option value="stillObjects">stillObjects
                <option value="performance">performance
                <option value="natureLandscape">natureLandscape
                <option value="events">events
                <option value="artistic">artistic
            </select></td>
                        </tr>

                        <tr>
                        <td>하위 카테고리</td>
                        <td><p id="low_cat_show">
                        <!-- <label for="low_cat">하위 카테고리:</label> -->
      <!-- <select id="low_cat" name="low_cat">
          <div id="low_cat_select"></div>
      </select> -->
      <select class="low_cat_<?=$low_cat?>" name="low_cat">
          <option value="<?=$low_cat?>"><?=$low_cat?></option>
      </select>
      <!-- <select class="low_cat_portraits" name="low_cat">
          <option value="portraits">Portraits</option>
      </select> -->
                        </p></td>
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
        <script src="catSelector.js"></script>
        <?php   } else {
                ?>

                <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
                        
                <?php
                }
                
        ?>

