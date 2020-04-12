<!DOCTYPE html>
<html>

<head>
<meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" id="viewport" content="width=device-width">
    <title>PhotOHND Photography</title>
    <meta name="description" content="PhotOHND">
    <meta name="keywords" content="PHOTOGRAPHY, PhotOHND, photohnd photography, 온동훈, Donghun_ohn, Donghun Ohn, OHNDONGHUN, 포톤디, 온동훈사진, 사진가온동훈, 포톤디 포토그래피, 온동훈 포트폴리오">
    <meta property="og:type" content="website">
    <meta property="og:title" content="PhotOHND">
    <meta property="og:description" content="PhotOHND">
    <meta property="og:image" content="내 포트폴리오 로고">
    <meta property="og:url" content="http://photohnd.synology.me">
    <link rel="stylesheet" type="text/css" href="portfolio_PHOTOHND/main.css?after">
</head>

<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
    
    <div id="wrap" class="backdrop">
        <header>
            <a href="index.php">
                <h1>@PHOTOHND photography</h1>
            </a>
        </header>

        <nav>
            <?php include 'portfolio_PHOTOHND/navibar.php'; ?>

        </nav>

        <section class="backdrop">
            <div class='proj_wrap'>
                <?php include "portfolio_PHOTOHND/projects_bgImg.php"?>
                <div class="proj_inner">
                <h2 class="proj_title">Projects</h2>
                <div class="proj_content" style="display: none;">
                    <?php include "portfolio_PHOTOHND/projects.php" ?>
                    </div>
                </div>
            </div>
            
            
            <p></p>
            <div class="about_wrap">
                <h2 class="about_title">About</h2>
                <div class="about_content" style="display: none;">
                    <?php include "portfolio_PHOTOHND/about.php" ?>
                </div>
            </div>
           

            

        </section>
        <footer class="backdrop">

            <?php include 'portfolio_PHOTOHND/contact.php'; ?>

        </footer>
        <div class="foot footCopy">Copyright 2020 © photohnd photography.</div>
    <div class="background">
    </div>
    <script src="portfolio_PHOTOHND/imgClick.js"></script>
    <script src="portfolio_PHOTOHND/imgClick2.js"></script>
    <script src="portfolio_PHOTOHND/aboutClick.js"></script>
    <script src="portfolio_PHOTOHND/projClick.js"></script>
    <script src="portfolio_PHOTOHND/projects_contentsList.js"></script>
    <script src="portfolio_PHOTOHND/projects_escape.js"></script>
    <script src="portfolio_PHOTOHND/sortTable.js"></script>
    <script src='portfolio_PHOTOHND/galleryExit.js'></script>
    <script src='portfolio_PHOTOHND/gallerySlide.js'></script>
    <script src='portfolio_PHOTOHND/showBtnExit.js'></script>
    <script src='portfolio_PHOTOHND/projects_titleHov.js'></script>
    

    
</body>

</html>