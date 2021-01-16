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
        <header class="my-5 pb-2 border-bottom bg-dark text-white" id="myHeader">
            <h1 class="pt-3">I am a web developer</h1>
            <img src="img/<?= $Img->find(['sh' => 1])['img']; ?>" class="rounded mx-auto d-block rounded-circle mb-2 d-block" style="width:150px;height:150px">

            <a href="https://github.com/catuxian" target="_blank">
                <i class="fab fa-github-square fa-2x mr-2"></i>
            </a>

            <a href="https://codepen.io/your-work" target="_blank">
                <i class="fab fa-codepen fa-2x"></i>
            </a>
            <p>YE,YU-XIAN</p>
        </header>
        <!-- 關於我 -->
        <div class="border-bottom py-5" id="about">
            <h2>關於我</h2>
            <p>
                <?= $About->find(['sh' => 1])['about']; ?>
            </p>
        </div>
        <!-- 學經歷 -->
        <div class="border-bottom mb-2 py-5" id="exp">

            <div class="list w-50 mx-auto">
                <h2 class="bg-white py-2 mb-0">學經歷</h2>
                <div>
                    <h4 class="py-2 mb-0">工作經歷</h4>
                    <?php
                    $exps = $Exp_t->all(['sh' => 1]);
                    foreach ($exps as $exp) {
                        $start_work = substr($exp['start'], 0, -3);
                        $end_work = substr($exp['end'], 0, -3);
                        $title = $exp['title'];
                        echo "<h5 class='py-2 mb-0'>{$title}，{$start_work} - {$end_work}</h5>";
                        echo "<div class='list-item mb-5 py-2'>";
                        $items = $Exp_i->all(['title_id' => $title]);
                        foreach ($items as $item) {
                            echo "<p>{$item['li']}</p>";
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
                <h4 class="py-2 mb-0">學歷</h4>
                <div class="mb-2">
                    <?php

                    $exps_e = $Exp_e->all(['sh' => 1]);
                    foreach ($exps_e as $exp_e) {
                        $start_edu = substr($exp_e['start_e'], 0, -3);
                        $end_edu = substr($exp_e['end_e'], 0, -3);
                        echo "<h5 class='py-2 mb-0'>{$exp_e['edu']}，{$start_edu} - {$end_edu}</h5>";
                        echo "<img src='https://picsum.photos/150/150/?random=1' class='rounded-circle edu mb-5 bg-white'>";
                    }

                    ?>
                </div>
            </div>
            <div></div>
        </div>
        <!-- 技能 -->
        <div class="w-75 mx-auto mb-2 py-5" id="skills">
            <h2><b>技能</b></h2>
            <ul class="nav nav-tabs justify-content-around" id="skillTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#frontend" role="tab" aria-selected="true">前端</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#backend" role="tab" aria-selected="false">後端</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#graphic" role="tab" aria-selected="false">美編</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#others" role="tab" aria-selected="false">其他</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="frontend" role="tabpanel">
                    <div class="row justify-content-around pt-3">
                        <!-- 前端技能 -->
                        <?php
                        $skills = $Skill_f->all(['sh' => 1]);
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
                <div class="tab-pane fade" id="backend" role="tabpanel">
                    <div class="row justify-content-around pt-3">
                        <!-- 後端技能 -->
                        <?php
                        $skills = $Skill_b->all(['sh' => 1]);
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
                <div class="tab-pane fade" id="graphic" role="tabpanel">
                    <div class="row justify-content-around pt-3">
                        <!-- 美編技能 -->
                        <?php
                        $skills = $Skill_g->all(['sh' => 1]);
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
                <div class="tab-pane fade" id="others" role="tabpanel">
                    <div class="row justify-content-around pt-3">
                        <!-- 其他技能 -->
                        <?php
                        $skills = $Skill_o->all(['sh' => 1]);
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
            </div>

            <!-- 作品集 -->
            <div class=" mb-2 py-5" id="works">
                <h2><b>作品集</b></h2>
                <div id="carouselExampleControls" class="carousel slide my-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $works = $Works->all();
                        foreach ($works as $key => $work) {
                            // echo $key;
                            if ($key == 0) {
                        ?>
                                <div class="myWork carousel-item active">
                                    <img src="img/<?= $work['img']; ?>" class="mx-auto">
                                    <div>
                                        <h4><?= $work['title']; ?></h4>
                                        <p><?= $work['text']; ?></p>
                                        <a href="<?= $work['href']; ?>" target="_blank" style="color:white"><i class="fas fa-link fa-2x"></i></a>
                                    </div>
                                </div>

                            <?php
                            } else {
                            ?>
                                <div class="myWork carousel-item">
                                    <img src="img/<?= $work['img']; ?>" class="mx-auto">
                                    <div>
                                        <h4><?= $work['title']; ?></h4>
                                        <p><?= $work['text']; ?></p>
                                        <a href="<?= $work['href']; ?>" target="_blank" style="color:white"><i class="fas fa-link fa-2x"></i></a>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- 聯絡我 -->
        <footer id="contact" class="text-center py-5 bg-dark text-white">
            <h5>聯絡我</h5>
            <form>
                <div class="form-group row text-center">
                    <label for="inputPassword" class="col-sm-12 col-md-1 col-form-label">Password</label>
                    <div class="col-sm-10 col-md-4 mx-auto">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <label for="inputPassword" class="col-sm-12 col-md-1 col-form-label">Password</label>
                    <div class="col-sm-10 col-md-4 mx-auto">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </form>
        </footer>
    </div>

    <small class="text-muted mb-1">Copyright © 2021 <a href="login.html">YE,YU-XIAN</a> all rights
        reserved.</small>
    <a href="#myHeader" id="top" class="btn ">
        <i class="fas fa-angle-double-up fa-2x"></i>
    </a>
</body>

</html>