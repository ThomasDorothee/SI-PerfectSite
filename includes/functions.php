<?php
function hetHeaderAdmin(): void
{
    ?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="description de la page" />
        <title>Une Année de voyages</title>
        <link rel="stylesheet" href="./src/styles/styles.css">
        <link rel="stylesheet" href="./src/styles/flexboxgrid.css">
        <link rel="shortcut icon" href="./src/img/logo.png">
    </head>

    <body>

    <header id="header" class="header">
        <div class="header-container">
            <div class="header-nav row center-xs center-sm center-md center-lg">
                <nav class="col-xs-11 col-sm-10 col-md-8 col-lg-6">
                    <ul class="header-list">
                        <li class="header-elements"><a href="index.php" class="header-links">Accueil</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Magazine</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Top 100</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Articles</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Contact</a></li>
                        <li class="header-elements"><a href="admin.php" class="header-links">Admin</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>
    <?php
}
function getHeader(): void
{
    ?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="description de la page" />
        <title>Une Année de voyages</title>
        <link rel="stylesheet" href="./src/styles/styles.css">
        <link rel="stylesheet" href="./src/styles/flexboxgrid.css">
        <link rel="shortcut icon" href="./src/img/logo.png">
    </head>

<body>

    <header id="header" class="header">
        <img src="./src/img/1.png" class="header-bg bg">
        <img src="./src/img/2.png" class="header-bg bg">
        <img src="./src/img/3.png" class="header-bg bg">
        <img src="./src/img/4.png" class="header-bg bg">
        <img src="./src/img/5.png" class="header-bg bg">

        <div class="header-container">
            <div class="header-nav row center-xs center-sm center-md center-lg">
                <nav class="col-xs-11 col-sm-10 col-md-8 col-lg-6">
                    <ul class="header-list">
                        <li class="header-elements"><a href="index.php" class="header-links">Accueil</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Magazine</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Top 100</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Articles</a></li>
                        <li class="header-elements"><a href="#" class="header-links">Contact</a></li>
                        <li class="header-elements"><a href="admin.php" class="header-links">Admin</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-texts row center-xs center-sm start-md start-lg">
                <div class="col-xs-11 col-sm-10 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                    <div class="header-box">
                        <h1 class="header-title" title="Une année de voyage">Une année de voyage</h1>
                        <p class="header-text">Un mook collector, des fiches, pratiques, une application
                            , un site...
                        </p>
                        <p class="header-text">Des voyages testés, des idées pour partir toute
                            l'année!
                        </p>
                        <a class="header-more" href="#">Découvrir Cuba</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
}
function getFooter(){
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="./src/script.js"></script>
</body>

</html>
    <?php
}
function readIndex(PDO $pdo)
{
    $req = "SELECT
    `id`,
    `category`,
    `p`,
    `author`,
    `thedate`,
    `title`
    FROM
    `articles`;";

    $stmt = $pdo->prepare($req);
    $stmt->execute();
    errorNofound();
    ?>

    <!-- Magazine -->
    <section class="magazine">
        <div class="container">
            <div class="row">
                <div class="breaker"></div>
                <div class="magazine-title col-xs-12 col-md-10 col-lg-9">
                    Découvrez notre <br><span>MOOK</span>
                    <div class="magazine-titleBar"></div>
                </div>
                <div class="magazine-container col-xs-10">
                    <div class="magazine-cover col-md-5">
                        <img class="magazine-img" src="./src/img/magazine.png" alt="">
                    </div>
                    <div class="magazine-text col-xs-10 col-md-5">
                        300 pages de reportages sous forme de "carnets de voyages".<br><br> Des destinations testées et approuvées par nos journalistes <span>(pas de mauvaises surprises à l'arrivée !)</span><br>
                        <br><br>
                        <a href="#">Voir un aperçu</a>
                    </div>
                </div>
                <div class="breaker"></div>
            </div>
        </div>
    </section>
    <!-- Magazine -->

    <!-- Top100 -->
    <section class="top">
        <div class="container">
            <div class="row">
                <div class="top-title col-xs-12 col-md-10 col-lg-10">
                    Retrouvez notre sélection <br><span>d'hôtels, de restaurants et <br>de spa</span>
                    <div class="top-titleBar"></div>
                </div>
                <div class="top-container col-xs-12">
                    <div class="top-items">
                        <img src="./src/img/resto.jpg" alt="">
                        <p>TOP 100<br>RESTAURANT</p>
                        <a href="">Découvrir</a>
                    </div>
                    <div class="top-cut"></div>
                    <div class="top-items">
                        <img src="./src/img/hotel.png" alt="">
                        <p>TOP 100<br>HÔTELS</p>
                        <a href="">Découvrir</a>
                    </div>
                    <div class="top-cut"></div>
                    <div class="top-items">
                        <img src="./src/img/spa.jpeg" alt="">
                        <p>TOP 100<br>SPA</p>
                        <a href="">Découvrir</a>
                    </div>
                </div>
                <div class="breaker"></div>
            </div>
        </div>
    </section>
    <!-- Top100 -->

    <!-- Articles -->
    <div class="article">
        <h2 class="article-title">Derniers Articles</h2>
        <div class="article-container">
            <div class="row center-xs center-sm center-md center-lg">
                <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                    <div class="article-flex">
                        <div class="article-flex-filtre">
                            <button class="article-flex-filtre-btnfiltre">Filtre</button>
                            <button class="article-flex-filtre-btnfermer">Fermer</button>
                            <img class="article-flex-filtre-btnfiltre-icon" src="./src/img/slider.png" alt="">
                            <div class="article-flex-filtre-inputs">
                                <label for="search" class="article-flex-filtre-inputs-search">Recherche</label>
                                <input class="article-flex-filtre-inputs-search-input" type="text" name="search" placeholder="phallus">
                                <label for="choisir" class="article-flex-filtre-inputs-choise">Choisir</label>
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="restaurant"/> <label class="article-flex-filtre-inputs-choise-label" for="Restaurant">Restaurant</label><br />
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="hotel"/> <label class="article-flex-filtre-inputs-choise-label" for="Hotel">Hôtel</label><br />
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="spathalasso"/> <label class="article-flex-filtre-inputs-choise-label" for="spaThalassi">Spa / Thalasso</label><br />
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="bonplan"/> <label class="article-flex-filtre-inputs-choise-label" for="BonPlan">Bon plan</label>
                            </div>
                        </div>
                        <!-- ARTICLE 1 -->
                        <div class="article-flex-aside">
                            <div class="article-flex-aside-content content" data-category="restaurant" data-api="api-one">
                                <img class="article-flex-aside-content-img" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
                                <p class="article-flex-aside-content-title">Location</p>
                                <p class="article-flex-aside-content-location">HOTEL MACHIN</p>
                                <p class="article-flex-aside-content-text">Lorem ipsum dolor sit amet, consectetur dsdsdd...</p>
                                <a class="article-flex-aside-content-more" href="#">En Savoir +</a>
                            </div>
                            <!-- ARTICLE 2 -->
                            <div class="article-flex-aside-content content" data-category="hotel">
                                <img class="article-flex-aside-content-img" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
                                <p class="article-flex-aside-content-title">Location</p>
                                <p class="article-flex-aside-content-location">HOTEL MACHIN</p>
                                <p class="article-flex-aside-content-text">Lorem ipsum dolor sit amet, consectetur dsdsdd...</p>
                                <a class="article-flex-aside-content-more" href="#">En Savoir +</a>
                            </div>
                            <!-- ARTICLE 3 -->
                            <div class="article-flex-aside-content content" data-category="spathalasso" data-id="search">
                                <img class="article-flex-aside-content-img" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
                                <p class="article-flex-aside-content-title">Location</p>
                                <p class="article-flex-aside-content-location">HOTEL MACHIN</p>
                                <p class="article-flex-aside-content-text">Lorem ipsum dolor sit amet, consectetur dsdsdd...</p>
                                <a class="article-flex-aside-content-more" href="#">En Savoir +</a>
                            </div>
                            <!-- ARTICLE 4 -->
                            <div class="article-flex-aside-content content" data-category="restaurant" data-id="search">
                                <img class="article-flex-aside-content-img" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
                                <p class="article-flex-aside-content-title">Location</p>
                                <p class="article-flex-aside-content-location">HOTEL MACHIN</p>
                                <p class="article-flex-aside-content-text">Lorem ipsum dolor sit amet, consectetur dsdsdd...</p>
                                <a class="article-flex-aside-content-more" href="#">En Savoir +</a>
                            </div>

                            <div class="article-flex-aside-content content" data-category="restaurant" data-id="search">
                                <img class="article-flex-aside-content-img" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
                                <p class="article-flex-aside-content-title">Location</p>
                                <p class="article-flex-aside-content-location">HOTEL MACHIN</p>
                                <p class="article-flex-aside-content-text">Lorem ipsum dolor sit amet, consectetur dsdsdd...</p>
                                <a class="article-flex-aside-content-more" href="#">En Savoir +</a>
                            </div>

                            <div class="article-flex-aside-content content" data-category="restaurant" data-id="search">
                                <img class="article-flex-aside-content-img" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
                                <p class="article-flex-aside-content-title">Location</p>
                                <p class="article-flex-aside-content-location">HOTEL MACHIN</p>
                                <p class="article-flex-aside-content-text">Lorem ipsum dolor sit amet, consectetur dsdsdd...</p>
                                <a class="article-flex-aside-content-more" href="#">En Savoir +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}


function getArticle(PDO $pdo)
{
    if (!isset($_GET['id'])) {
        header('Location: index.php?error=undefined');
        exit;
    }
    $requete = "SELECT 
  `id`, 
  `title`, 
  `p`,
  `author`,
  `thedate`
FROM 
  `articles`
WHERE
  `id` = :id
;";
    $stmt = $pdo->prepare($requete);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!isset($row['id'])){
        header('Location: index.php?error=404');
        exit;
    }
    ?>

    <h1>NOM DE L'ARTICLE: <?= $row['title'] ?></h1>
    <h2>CONTENU: <?= $row['p'] ?></h2>
    <h3>PAR: <?= $row['author'] ?></h3>
    <h3>DATE: <?= $row['thedate'] ?></h3>

    <?php
}

function errorNofound()
{
    if (isset($_GET['error'])) {
        ?>
        <div style="color: red"><?= "ERREUR ".$_GET['error'] ?></div>

        <?php
    }
}

function displayCrud(PDO $pdo) : void
{
    $req = "SELECT 
              `id`,
              `title`,
              `p`,  
              `category`, 
              `author`,
              `thedate` 
            FROM 
              `articles`
            ;";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    ?>
    <style>
        .creat {
            width: 200px !important;
            height: 20px !important;
            font-size: 32px;
            margin-left: 5%;
        }

        .beta-wow {
            width: 90%;
            margin: 0 auto;
        }

        th {
            width: 40%;
            font-size: 24px;
        }

        th {
            border-right: 2px solid gray;
            background: rgb(0, 0, 0, 0.1);
            background: rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        tr:first-child {
            border-bottom: 2px solid gray;
        }

        tr:not(:first-child) {
            border-bottom: 2px solid gray;
            height: 50px !important;
        }

        td {
            height: 20px !important;
            border-right: 2px solid gray;
            text-align: center;
        }

        th, td {
            border-left: 2px solid gray;
        }

        .imgcrud {
            width: auto;
            height: 50px;
        }

        .read, .delete, .modified {
            padding: 10px 25px;
            border-radius: 2px;
            font-size: 16px;
            color: white;
            border: none;
            font-weight: bolder;
        }

        .read {
            background: #25db1e;
        }

        .read:hover {
            background: green;
        }

        .delete {
            background: #ff3e1c;
        }

        .delete:hover {
            background: red;
        }

        .modified {
            background: #f99820;
        }

        .modified:hover {
            background: orangered;
        }

        .read:hover, .delete:hover, .modified:hover, .read:focus, .delete:focus, .modified:focus {
            text-decoration: none;
            color: white;
            transition: all .2s ease;
        }
    </style>
    <div class="container-full theme-showcase" role="main">
        <div class="jumbotron">
            <h1>CRUD</h1>
            <?php  errorNofound(); ?>
        </div>
        <a class="creat" href="<?= "add.php" ?>">Créer un article</a>
        <table class="beta-wow">
            <tr>
                <th colspan="2">Articles</th>
                <th colspan="3">Commandes</th>
            </tr>

            <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

                <tr>
                    <td><?= '<b>'.$row["title"].'</b>' ?></td>
                    <td><?=reduireChaineCar($row['p'],15)?></td>
                    <td style="border-right:none;"><a class="read" href="read.php?id=<?=$row['id'] ?>">Lire</a></td>
                    <td><a class="modified" href="edit.php?id=<?= $row['id'] ?>">Modifier</a></td>
                    <td><a class="delete" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet article?'));"
                           href="dodelete.php?id=<?=$row['id']?>">Supprimer</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <?php
}


function add() : void
{
    errorNofound();
    ?>
    <style>
        .add{
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            width:100%;
        }

        label{
            width:175px;
            text-align:right;
        }
        .addbtn{
            background: dodgerblue;
            padding: 10px 25px;
            border: none;
            color:white;
            width:80%;
            min-width:120px;
        }
        .addbtn:hover{
            text-decoration:underline;
        }
        .input{
            width:320px;
        }
        .retour{
            background:red;
            padding:10px 25px;
            color:white;
            border:none;
            width:20%;
            min-width:50px;
        }
        .retour:hover{
            color:white;
        }

        .modifetback
        {
            display: flex;
            width:100%;
        }
    </style>
    <div class="add">
        <form class="form" action="doadd.php" method="post">
            <label for="h1">Titre de l'article: </label> <input class="input" type="text" name="title"><br>
            <label for="text">Article: </label> <textarea class="input" type="text" name="p" ></textarea><br>
            <label for="title">Auteur: </label> <input class="input" type="text" name="author"><br>
            <label for="img">Url de l'image: </label> <input class="input" type="text" name="img" placeholder="http//:"><br>
            <label for="thedate">Date: </label><input type="date" name="thedate"></br>
            <div>
                <label for="category">Catégorie: </label>
                <input type="radio" id="spanclass1"
                       name="category" value="label-success">
                <label for="category" class="input label label-success">success</label>

                <input type="radio" id="spanclass2"
                       name="category" value="label-primary">
                <label for="category" class="input label label-primary">primary</label>

                <input type="radio" id="spanclass3"
                       name="category" value="label-warning">
                <label for="category" class="input label label-warning">warning</label>

                <input type="radio" id="spanclass1"
                       name="category" value="label-danger" >
                <label for="category" class="input label label-danger">danger</label>
            </div>
            <div class="modifetback"><input class="addbtn" type="submit" name="adding" value="Ajouter"><a href="../includes/admin.php" class="retour">Retour</a></div>
        </form>
    </div>
    <?php
}

function update(PDO $pdo) : void
{
    errorNofound();
    $id = $_GET['id'];
    if (!isset($_GET['id'])) {
        header('Location: index.php?error=noidprovidededit');
        exit;
    }
    $req = "SELECT 
    `id`,
    `title`,
    `p`,  
    `category`, 
    `author`,
    `thedate`,
    `img`
    FROM 
    `articles`
    WHERE
    `id` = :id
    ;";
    $stmt = $pdo->prepare($req);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <style>
        .add{
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            width:100%;
        }

        label{
            width:175px;
            text-align:right;
        }
        .addbtn{
            background: dodgerblue;
            padding: 10px 25px;
            border: none;
            color:white;
            width:80%;
            min-width:120px;
        }
        .addbtn:hover{
            text-decoration:underline;
        }
        .input{
            width:320px;
        }
        .retour{
            background:red;
            padding:10px 25px;
            color:white;
            border:none;
            width:20%;
            min-width:50px;
        }
        .retour:hover{
            color:white;
        }

        .modifetback
        {
            display: flex;
            width:100%;
        }
    </style>
    <div class="add">
        <form class="form" action="doedit.php" method="post">
            <input class="input" type="hidden" name="id" value="<?=$_GET['id']?>">
            <label for="h1">Titre de l'article: </label> <input class="input" type="text" name="title" value="<?=$row['title']?>"><br>
            <label for="text">Article: </label> <textarea class="input" type="text" name="p" ><?=$row['p']?></textarea><br>
            <label for="title">Auteur: </label> <input class="input" type="text" name="author" value="<?=$row['author']?>"><br>
            <label for="img">Url de l'image: </label> <input class="input" type="text" name="img" placeholder="http//:" value="<?=$row['img']?>"><br>

            <label for="thedate">Date: </label><input type="date" name="thedate" value="<?=$row['thedate']?>"></br>
            <div>
                <label for="categorylist">Catégorie: </label>
                <input type="radio" id="spanclass1"
                       name="category" value="label-success"  <?php if($row['category'] === 'label-success'){ echo 'checked';}?>>
                <label for="un" class="input label label-success">success</label>

                <input type="radio" id="spanclass2"
                       name="category" value="label-primary" <?php if($row['category'] === 'label-primary'){ echo 'checked';}?>>
                <label for="deux" class="input label label-primary">primary</label>

                <input type="radio" id="spanclass3"
                       name="category" value="label-warning" <?php if($row['category'] === 'label-warning'){ echo 'checked';}?>>
                <label for="trois" class="input label label-warning">warning</label>

                <input type="radio" id="spanclass1"
                       name="category" value="label-danger" <?php if($row['category'] === 'label-danger'){ echo 'checked';}?>>
                <label for="quatre" class="input label label-danger">danger</label>
            </div>
            <div class="modifetback"><input class="addbtn" type="submit" name="adding" value="Ajouter"><a href="admin.php" class="retour">Retour</a></div>
        </form>
    </div>
    <?php
}


function readAdmin(PDO $pdo)
{

    $req = "SELECT
    `id`,
    `category`,
    `p`,
    `author`,
    `thedate`,
    `title`
    FROM
    `articles`
    WHERE
    `id` = :id
    ;";
    $stmt = $pdo->prepare($req);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="article">
        <h1><?= $row["title"]?></h1>
        <p><?=$row["p"]?></p>
        <a href="edit.php?id=<?=$row['id']?>">edit</a>
        <a class="delete" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet article?'));"
           href="dodelete.php?id=<?=$row['id']?>">Supprimer</a>
    </div>
    <?php
}



function reduireChaineCar($chaine, $nb_car, $delim='...') {
    $length = $nb_car;
    if($nb_car<strlen($chaine)){
        while (($chaine{$length} != " ") && ($length > 0)) {
            $length--;
        }
        if ($length == 0) return substr($chaine, 0, $nb_car) . $delim;
        else return substr($chaine, 0, $length) . $delim;
    }else return $chaine;
}
