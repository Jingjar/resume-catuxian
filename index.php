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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9bb4944e3f.js" crossorigin="anonymous"></script>
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <script src="plugin/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1">
        <a class="navbar-brand" href="#">Navbar</a>
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
    <div class="container text-center mt-10 bg-white p-0  ">
        <header class="my-5 pb-2 border-bottom bg-dark text-white">
            <h1 class="pt-3">I am a web developer</h1>
            <img src="media/img/<?= $Img->find(['sh' => 1])['img']; ?>" class="rounded mx-auto d-block rounded-circle mb-2 d-block" style="width:150px;height:150px">

            <a href="https://github.com/catuxian" target="_blank">
                <i class="fab fa-github-square fa-2x mr-2"></i>
            </a>

            <a href="https://codepen.io/your-work" target="_blank">
                <i class="fab fa-codepen fa-2x"></i>
            </a>
            <p>Taipei/Taiwan</p>
        </header>
        <!-- 關於我 -->
        <div class="m-5 pt-5" id="about">
            <h2><b>關於我</b></h2>
            <p>
                <?= $About->find(['sh' => 1])['about']; ?>
            </p>
        </div>
        <!-- 學經歷 -->
        <div class="m-5 pt-2" id="exp">
            <h2><b>學經歷</b></h2>
            <div class="list text-left">
                <div class="pl-2">
                    <h4>工作經歷</h4>
                    <?php
                    $exps = $Exp_t->count();
                    for ($i = 1; $i <= $exps; $i++) {
                        $start_work = substr($Exp_t->find($i)['start'], 0, -3);
                        $end_work = substr($Exp_t->find($i)['end'], 0, -3);

                        $title = $Exp_t->find($i)['title'];
                        echo "<h5>{$title}，{$start_work} - {$end_work}";

                        $items = $Exp_i->count(['title_id' => $title]);
                        $item = $Exp_i->all(['title_id' => $title]);

                        for ($j = 0; $j < $items; $j++) {
                            echo "<li>{$item[$j]['li']}</li>";
                        }
                    }
                    ?>
                </div>
                <div class="pl-2">
                    <h4>學歷</h4>
                    <?php
                    $exps_e = $Exp_e->count();
                    for ($i = 1; $i <= $exps_e; $i++) {
                        $start_edu = substr($Exp_e->find($i)['start'], 0, -3);
                        $end_edu = substr($Exp_e->find($i)['end'], 0, -3);

                        $title = $Exp_e->find($i)['edu'];
                        echo "<h5>{$title}，{$start_edu} - {$end_edu}</h5>";
                    }
                    ?>

                </div>
            </div>
        </div>
        <!-- 技能 -->
        <div class="m-5 pt-5" id="skills">
            <h2><b>技能</b></h2>
            <div class="row justify-content-around">
                <?php
                $skills=$Skills->all();
                foreach ($skills as $skill) {
                ?>
                    <div class="card col-md-5 m-2 skill">
                        <img src="media/skills/<?=$skill['img']?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title border-bottom"><?=$skill['title'];?></h5>
                            <p class="card-text"><?=$skill['text'];?></p>
                        </div>
                    </div>
                <?php
                }
                ?>



            </div>
            <!-- 作品集 -->
            <div class="m-5 pt-5" id="works">
                <h2><b>作品集</b></h2>
                <div class="row d-flex justify-content-around">
                    <?php
                        $works=$Works->all();
                        foreach($works as $work){
                    ?>
                    <div class="myWork">
                        <img src="media/works/<?=$work['img'];?>">
                        <div>
                            <h4><?=$work['title'];?></h4>
                            <p><?=$work['text'];?></p>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- 聯絡我 -->
        <footer id="contact" class="text-center">
            <?php
                $conect=$Contact->find(1);
            ?>
            <h5><b>聯絡我</b></h5>
            E-mail：<a href="mailto:<?=$conect['email'];?>"><?=$conect['email'];?></a>
            <br>
            連絡電話：<?=$conect['phone'];?><br>
            <small class="text-muted mb-1">Copyright © 2021 <a href="login.html">YE,YU-XIAN</a> all rights
                reserved.</small>
        </footer>
</body>

</html>