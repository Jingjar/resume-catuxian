<?php
include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>履歷表</title>
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
    <link rel="stylesheet" href="plugin/style.css">
    <link rel="stylesheet" href="plugin/slick.css">
    <link rel="stylesheet" href="plugin/slick-theme.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9bb4944e3f.js" crossorigin="anonymous"></script>
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <script src="plugin/bootstrap.bundle.min.js"></script>
    <script src="plugin/custom.js"></script>
    <script src="plugin/slick.min.js"></script>
</head>

<body class="text-center">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#about"><i class="fas fa-user"></i> 關於我</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#exp"><i class="fas fa-book"></i> 學經歷</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills"><i class="fas fa-wrench"></i> 技能</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#works"><i class="fas fa-images"></i> 作品集</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact"><i class="fas fa-phone"></i> 聯絡我</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center mt-0 mx-auto bg-white p-0 w-lg-50 w-md-75 w-sm-100">
        <header class="mt-5 pt-5 border-bottom bg-dark text-white" id="myHeader">
            <h1 class="pt-3">I am a web developer</h1>
            <img src="img/<?= $Img->find(['sh' => 1])['img']; ?>" class="rounded mx-auto d-block rounded-circle mb-2 d-block" style="width:150px;height:150px">

            <a href="https://github.com/catuxian" target="_blank">
                <i class="fab fa-github-square fa-2x mr-2"></i>
            </a>

            <a href="https://codepen.io/your-work" target="_blank">
                <i class="fab fa-codepen fa-2x"></i>
            </a>
            <h2 class="py-2">葉昱顯</h2>
            <p>YE,YU-XIAN</p>
        </header>
        <!-- 關於我 -->
        <div class="border-bottom px-5" id="about">
            <h2><u>關於我</u></h2>
            <p class="text-left w-50 mx-auto pb-3">
                <?= $About->find(['sh' => 1])['about']; ?>
            </p>
        </div>
        <!-- 學經歷 -->
        <div class="border-bottom mb-2 py-5" id="exp">

            <div class="list w-50 mx-auto">
                <h2 class="bg-white py-2 mb-0">學經歷</h2>
                <h4 class="py-2 mb-0">學歷</h4>
                <div class="mb-2">
                    <?php

                    $exps_e = $Exp_e->q("select * from `resume_exp_edu` order by end_e desc");
                    foreach ($exps_e as $exp_e) {
                        $start_edu = substr($exp_e['start_e'], 0, -3);
                        $end_edu = substr($exp_e['end_e'], 0, -3);
                        echo "<h5 class='py-2 mb-0'>{$exp_e['edu']}，{$start_edu} - {$end_edu}</h5>";
                        echo "<img src='img/{$exp_e['img']}' class='rounded-circle edu mb-5 bg-white' style='width:150px;height:150px'>";
                    }

                    ?>
                </div>
                <h4 class="py-2 mb-0">工作經歷</h4>
                <div>
                    <?php
                    $exps = $Exp_t->q("select * from `resume_exp_title` order by end desc");
                    foreach ($exps as $exp) {
                        $start_work = substr($exp['start'], 0, -3);
                        $end_work = substr($exp['end'], 0, -3);
                        $title = $exp['title'];
                        echo "<h5 class='py-2 mb-0'>{$title}<br>{$start_work} - {$end_work}</h5>";
                        echo "<div class='list-item mb-5 py-2 text-left pl-3'>";
                        $items = $Exp_i->all(['title_id' => $title]);
                        foreach ($items as $item) {
                            echo "<li>{$item['li']}</li>";
                        }
                        echo "</div>";
                    }
                    ?>
                </div>

            </div>
            <div></div>
        </div>
        <!-- 技能 -->
        <div class="w-75 mx-auto mb-2 py-5" id="skills">
            <h2><b>技能</b></h2>
            <div class="row justify-content-around pt-3">
                <!-- 前端技能 -->
                <?php
                $skills = $Skill->all(['sh' => 1]);
                foreach ($skills as $skill) {
                ?>
                    <div class="card col-md-5 mb-2 skill">
                        <img src="img/<?= $skill['img'] ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title border-bottom"><?= $skill['title']; ?></h5>
                            <p class="card-text"><?= $skill['text']; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- 作品集 -->
        <div class=" mb-2 py-5" id="works">
            <h2><b>作品集</b></h2>
            <div class="row d-flex justify-content-around" id="myWorks">
                <?php
                $works = $Works->all();
                foreach ($works as $work) {
                ?>
                    <div class="myWork">
                        <img src="img/<?= $work['img']; ?>" class="mx-auto">
                        <div>
                            <h1><?= $work['title']; ?></h1>
                            <p><?= $work['text']; ?></p>
                            <a href="<?= $work['href']; ?>" target="_blank" style="color:white"><i class="fas fa-link fa-2x"></i></a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <footer id="contact" class="text-center py-5 bg-dark text-white container">
            <h5 class="mb-5">聯絡我</h5>
            <form action="add_visitors" class="row text-left px-5">
                <div class="form-group col-sm-12 col-md-6">
                    <label for="yourName">訪客姓名</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="yourName" placeholder="您的姓名" name="Name" required>
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <label for="yourPhone">連絡電話</label>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" id="yourPhone" placeholder="您的連絡電話" name="Phone" required>
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <label for="yourEmail">電子信箱</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="yourEmail" placeholder="您的電子信箱" name="Email" required>
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <label for="yourSubject">訊息主旨</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="yourSubject" placeholder="訊息主旨" name="Subject" required>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="yourMessage">您的訊息</label>
                    <textarea class="form-control" id="yourMessage" rows="3" placeholder="請輸入您的訊息"></textarea>
                </div>
                <small class="text-muted col-12 text-center border-bottom pb-3">請填寫正確聯絡方式，以便回復您的訊息</small>
                <button type="submit" class="btn btn-primary mx-auto my-3">確認送出</button>
            </form>
        </footer>
    </div>
    <!-- 聯絡我 -->


    <small class="text-muted mb-1">Copyright © 2021 <a href="login.html" style="color:#6c757d;">YE,YU-XIAN</a> all rights
        reserved.</small>
</body>

</html>