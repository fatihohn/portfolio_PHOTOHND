<div>
    <div class="adLogIn" >
        <?php
        include 'photohnd_db_conn.php';
        $query = "select * from user_data order by id desc";
        $result = $conn->query($query);
        $total = mysqli_num_rows($result);
        
        session_start();
        
        if (isset($_SESSION['username'])) {
            ?> <div onclick="location.href='./admin_logout.php'">
            <?php
            echo $_SESSION['username']; ?>님 안녕하세요
            <h4>LogOut</h4></div>
            <!-- <button onclick="location.href='./admin_logout.php'">로그아웃</button> -->
            
            <?php
        } else {
            ?> <div onclick="location.href='./admin_login.php'"><h4>LogIn</h4></div>
    <!-- ?> <button onclick="location.href='./admin_login.php'">로그인</button> -->
    
    <?php   }
    ?>  
</div>
</div>
<div class="adLogo">  
    <center><a href="admin_index.php"><img src="admin_logo.png" alt="admin logo" id="adminLogo"></a></center>
</div>

<div class="homeLogoDiv">
    <!-- <center> -->
        <a href="http://photohnd.synology.me" target="blank">
        <img src="home_logo.png" alt="home logo" id="homelogo">
        <br><h4>Home</h4>
    </a>
    <!-- </center> -->
</div>

<div class="adMenuBtn adminMenu">
    <h4>MENU</h4>
</div>