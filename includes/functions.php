<?php
function getHeaderAdmin(): void
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
    <!-- header -->
    <header id="header">
        <div class="header-container">
            <div class="header-nav row center-xs center-sm center-md center-lg">
                <nav class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                    <div class="header-logo">
                        <a href="index.php"><img src="./src/img/logo.png" alt="logo accueil"></a>
                    </div>
                    <div class="header-burger">
                        <img src="./src/img/menu.png" alt="menu">
                    </div>
                    <div class="header-menuPhone">
                        <div class="header-menuBack">RETOUR</div>
                        <ul class="header-menuList">
                            <li class="header-menuElements"><a href="#magazine" class="header-menuLinks">Magazine</a></li>
                            <li class="header-menuElements"><a href="#top" class="header-menuLinks">Top 100</a></li>
                            <li class="header-menuElements"><a href="#article" class="header-menuLinks">Articles</a></li>
                            <li class="header-menuElements"><a href="#" class="header-menuLinks">À propos</a></li>
                            <li class="header-menuElements"><a href="#contact" class="header-menuLinks">Contact</a></li>
                            <li class="header-menuElements"><a href="admin.php" class="header-menuLinks">Admin</a></li>
                        </ul>
                    </div>
                    <ul class="header-list">
                        <li class="header-elements"><a href="#magazine" class="header-links">Magazine</a></li>
                        <li class="header-elements"><a href="#top" class="header-links">Top 100</a></li>
                        <li class="header-elements"><a href="#article" class="header-links">Articles</a></li>
                        <li class="header-elements"><a href="#" class="header-links">À propos</a></li>
                        <li class="header-elements"><a href="#contact" class="header-links">Contact</a></li>
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

    <div class="goUp">
        <a href="#header"><img src="./src/img/goUp.png" alt=""></a>
    </div>


    <!-- header -->
    <header id="header" class="header">
        <img src="./src/img/1.png" class="header-bg bg">
        <img src="./src/img/2.png" class="header-bg bg">
        <img src="./src/img/3.png" class="header-bg bg">
        <img src="./src/img/4.png" class="header-bg bg">
        <img src="./src/img/5.png" class="header-bg bg">

        <div class="header-container">
            <div class="header-nav row center-xs center-sm center-md center-lg">
                <nav class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                    <div class="header-logo">
                        <a href="index.php"><img src="./src/img/logo.png" alt="logo accueil"></a>
                    </div>
                    <div class="header-burger">
                        <img src="./src/img/menu.png" alt="menu">
                    </div>
                    <div class="header-menuPhone">
                        <div class="header-menuBack">RETOUR</div>
                        <ul class="header-menuList">
                            <li class="header-menuElements"><a href="#magazine" class="header-menuLinks">Magazine</a></li>
                            <li class="header-menuElements"><a href="#top" class="header-menuLinks">Top 100</a></li>
                            <li class="header-menuElements"><a href="#article" class="header-menuLinks">Articles</a></li>
                            <li class="header-menuElements"><a href="#" class="header-menuLinks">À propos</a></li>
                            <li class="header-menuElements"><a href="#contact" class="header-menuLinks">Contact</a></li>
                            <li class="header-menuElements"><a href="admin.php" class="header-menuLinks">Admin</a></li>
                        </ul>
                    </div>
                    <ul class="header-list">
                        <li class="header-elements"><a href="#magazine" class="header-links">Magazine</a></li>
                        <li class="header-elements"><a href="#top" class="header-links">Top 100</a></li>
                        <li class="header-elements"><a href="#article" class="header-links">Articles</a></li>
                        <li class="header-elements"><a href="#" class="header-links">À propos</a></li>
                        <li class="header-elements"><a href="#contact" class="header-links">Contact</a></li>
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
                        <a class="header-more" href="#">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
}
function getFooter(){
    ?>
    <footer class="footer">
      <div class="footer-break"></div>
      <ul class="footer-list">
        <li>Home</li>
        <li>Magazine</li>
        <li>Équipe</li>
        <li>Contact</li>
      </ul>
        <p class="footer-copy">UneAnnéeDeVoyages©2018</p>
    </footer>
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
    `img`,
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
    <section id="magazine" class="magazine">
      <div class="container">
        <div class="row">
          <div class="magazine-title col-xs-12 col-md-10 col-lg-9">
            Découvrez notre <br><span>MOOK</span>
            <div class="magazine-titleBar"></div>
          </div>
          <div class="magazine-cover col-lg-6">
            <img class="magazine-img" src="./src/img/magazine.png" alt="">
          </div>
          <div class="magazine-magazine">MAGAZINE</div>
          <div class="magazine-text col-lg-6">
            <p class="magazine-descri">
              300 pages de reportages sous forme de "carnets de voyages ».
              <br><br><br> Des destinations testées et approuvées par nos journalistes (pas de mauvaise surprise à l'arrivée !) </p>
            <br><br><br>
            <a class="magazine-linkLG" href="#">Voir un aperçu</a>
          </div>
          <div class="magazine-link col-xs-12">
            <a href="#">Voir un aperçu</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Magazine -->

    <!-- Top100 -->
    <section id="top" class="top">
      <div class="container">
        <div class="row">
          <div class="top-title col-xs-12 col-md-10 col-lg-10">
            Retrouvez notre sélection d'hôtels, de<br>restaurants et de spa
          </div>
          <div class="top-text col-xs-12 col-md-10 col-lg-10">
            N’attendez plus, découvrez nos tops !
          </div>
          <div class="top-container col-xs-12">
            <div class="top-items">
              <img src="./src/img/resto.jpg" alt="">
              <a href="">
                <p href="">Découvrir notre top restaurant</p>
              </a>
            </div>
            <div class="top-items">
              <img src="./src/img/hotel.png" alt="">
              <a href="">
                <p href="">Découvrir notre top hôtel</p>
              </a>
            </div>
            <div class="top-items">
              <img src="./src/img/spa.jpeg" alt="">
              <a href="">
                <p href="">Découvrir notre top spa</p>
              </a>
            </div>
          </div>
          <div class="breaker"></div>
        </div>
      </div>
    </section>
    <!-- Top100 -->

    <!-- Articles -->
    <div id="article" class="article">
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
                                <input class="article-flex-filtre-inputs-search-input" type="text" name="search" placeholder="Recherche">
                                <label for="choisir" class="article-flex-filtre-inputs-choise">Choisir</label>
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="restaurant"/> <label class="article-flex-filtre-inputs-choise-label" for="Restaurant">Restaurant</label><br />
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="hotel"/> <label class="article-flex-filtre-inputs-choise-label" for="Hotel">Hôtel</label><br />
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="spathalasso"/> <label class="article-flex-filtre-inputs-choise-label" for="spaThalassi">Spa / Thalasso</label><br />
                                <input class="article-flex-filtre-inputs-choise-checkbox" type="checkbox" name="category" value="bonplan"/> <label class="article-flex-filtre-inputs-choise-label" for="BonPlan">Bon plan</label>
                            </div>
                        </div>
                        <!-- ARTICLE 1 -->
                         <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

                        <div class="article-flex-aside">
                            <div class="article-flex-aside-content content" data-category="<?=$row['category']?>" data-api="api-one">
                                <img class="article-flex-aside-content-img" src="<?=$row['img']?>">
                                <p class="article-flex-aside-content-title"><?='#'.$row['category']?></p>
                                <p class="article-flex-aside-content-location"><?=$row['title']?></p>
                                <p class="article-flex-aside-content-text"><?= reduireChaineCar($row['p'],40)?></p>
                                <a class="article-flex-aside-content-more" href="#">En Savoir +</a>
                            </div>
                        </div>
                        <?php
                        endwhile
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partenaires -->
    <section id="partners" class="partners">
      <div class="partners-containt col-xs-10 col-md-10 col-lg-10 ">
        <div class="partners-title">
          <p>Découvrez<br><span>nos partenaires</span></p>
        </div>
      </div>
      <div class="partners-containtLeft col-xs-10 col-md-10 col-lg-7">
        <div class="partners-textTitle">
          <p>News Air</p>
        </div>
        <div class="partners-text">
          <p>
            Le voyage commence à peine le pied posé dans l'avion. La meilleure façon de découvrir une destination consiste à voyager avec la Compagnie aérienne nationale. Chacune avec son style, sa culture, son identité s'applique à nous transmettre "l'esprit du
            pays", dans les meilleures conditions de sécurité, de confort et d'accueil.
          </p>
        </div>
      </div>
      <div class="partners-cardContainer col-xs-10 col-md-9 col-lg-4 ">
        <img class="partners-card" src="./src/img/card.png" alt="">
        <img class="partners-cadre" src="./src/img/cadre.png" alt="">
      </div>
      <div class="partners-icons col-xs-10 col-lg-6">
        <img class="partners-aero" src="./src/img/aero.png" alt="">
        <img class="partners-fiji" src="./src/img/fiji.png" alt="">
        <img class="partners-nikon" src="./src/img/nikon.png" alt="">
      </div>
    </section>
    <!-- Partenaires -->
    <!-- Twitter -->
    <section id="twitter" class="twitter">
      <div class="twitter-title">
        <p>Actu Twitter</p>
      </div>
      <div class="twitter-cadre">
        <img src="./src/img/twitter.png" alt="">
      </div>
    </section>
    <!-- Twitter -->
    <!-- Contact -->
    <section id="contact" class="contact">
      <div class="contact-title col-xs-10 col-md-10 col-lg-10">
        <p>NOUS CONTACTER</p>
      </div>
      <div class="contact-left col-xs-11 col-lg-6">
       <p><span>Adresse : </span>32 RUE DES PEUPLIERS, 92100 Boulogne</p>
       <p><span>Téléphone : </span>+33(0) 413 10 513</p>
       <p><span>E-mail</span>redaction@uneanneedevoyages.com</p>
       <p><span>Ouvert du Lundi au Vendredi de 10h à 18h</span></p>
       <p><span>Redactrice en chef : </span><br>Judith Lossmann<br>+33(0) 6 88 31 61 37<br>judith.lossmann@uneanneedevoyages.com</p>
       <p><span>Pigiste et secrétaire de rédaction : </span> Caroline M'zali<br>+33(0) 7 71 12 87 48<br>caroline.mzali@uneanneedevoyages.com</p>
      </div>
      <div class="contact-right col-xs-11 col-lg-6">
        <img src="./src/img/formulaire.png" alt="">
      </div>
    </section>
    <!-- Contact -->

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
  `thedate`,
  `img`
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
    <a href="#" class="admin-add">ajouter un article</a>
    <div class="admin">
    <a href="add.php" class="admin-add">ajouter un article</a>
        <div class="admin-section">
            <div class="admin-section-items">Articles</div>
            <div class="admin-section-items">Commande</div>
        </div>
         <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="admin-section">
            <div class="admin-section-articles">
                <p class="admin-section-articles-id">ID N°<?=$row["id"]?></p>
                <p class="admin-section-articles-title"> <?= '<b>'.$row["title"].'</b>' ?></p>
            </div>
            <div class="admin-section-commandes">
                <div class="admin-section-commandes-btn" ><a class="admin-section-commandes-btn-read" href="read.php?id=<?=$row['id'] ?>">lire</a></div>
                <div class="admin-section-commandes-btn" ><a class="admin-section-commandes-btn-edit" href="edit.php?id=<?= $row['id'] ?>">éditer</a></div>
                <div class="admin-section-commandes-btn" ><a class="admin-section-commandes-btn-delete"onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet article?'));"
                href="dodelete.php?id=<?=$row['id']?>">supprimer</a></div>
            </div>
        </div>
            <?php endwhile; ?>
    <?php
}


function add() : void
{
    errorNofound();
    ?>
    <div class="add">
        <form class="add-form" class="form" action="doadd.php" method="post">
            <label class="add-form-label" for="title">Titre de l'article: </label> <input class="add-form-input" type="text" name="title"><br>
            <label class="add-form-label ctrochiant" for="text">Article: </label> <textarea class="add-form-text" type="text" name="p" ></textarea><br>
            <label class="add-form-label" for="author">Auteur: </label> <input class="add-form-input" type="text" name="author"><br>
            <label class="add-form-label" for="img">Url de l'image: </label> <input class="add-form-input" type="text" name="img" placeholder="http//:"><br>
            <label class="add-form-label" for="thedate">Date: </label><input type="date" name="thedate"></br>
            <label for="category" class="add-form-label">Catégorie: </label>
            <input type="radio" id="spanclass1"
                   name="category" value="restaurant">
            <label for="category">Restaurant</label>

            <input type="radio" id="spanclass2"
                   name="category" value="hotel">
            <label for="category" class="input label label-primary">Hôtel</label>

            <input type="radio" id="spanclass3"
                   name="category" value="spathalasso">
            <label for="category" class="input label label-warning">Spa / Thalasso</label>

            <input type="radio" id="spanclass1"
                   name="category" value="bonplan" >
            <label for="category" class="input label label-danger">Bon plan</label>
            <div class="add-form-btns"><input class="add-form-btns-add" type="submit" name="adding" value="Ajouter"><a href="admin.php" class="add-form-btns-back">Retour</a></div>
        </form>
    </div>
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
    <div class="add">
        <form class="add-form" action="doedit.php" method="post">
            <input class="input" type="hidden" name='id' value="<?=$_GET['id']?>">
            <label class="add-form-label" for="title">Titre de l'article: </label> <input class="add-form-input" name='title' type="text" value="<?=$row['title']?>"><br>
            <label class="add-form-label ctrochiant" for="text">Article: </label> <textarea class="add-form-text" name='p' ><?=$row['p']?></textarea><br>
            <label class="add-form-label" for="author">Auteur: </label> <input class="add-form-input" type="text" name='author' value="<?=$row['author']?>"><br>
            <label class="add-form-label" for="img">Url de l'image: </label> <input class="add-form-input" type="text" name='img' placeholder="http//:" value="<?=$row['img']?>"><br>
            <label class="add-form-label" for="thedate">Date: </label><input type="date" name='thedate' value="<?=$row['thedate']?>"></br>
            <label for="category" class="add-form-label">Catégorie: </label>
            <input type="radio" id="spanclass1"
                   name="category" value="restaurant" <?php if($row['category'] === 'restaurant'){ echo 'checked';}?>>
            <label for="category">Restaurant</label>

            <input type="radio" id="spanclass2"
                   name="category" value="hotel" <?php if($row['category'] === 'hotel'){ echo 'checked';}?>>
            <label for="category" class="input label label-primary">Hôtel</label>

            <input type="radio" id="spanclass3"
                   name="category" value="spathalasso" <?php if($row['category'] === 'spathalasso'){ echo 'checked';}?>>
            <label for="category" class="input label label-warning">Spa / Thalasso</label>

            <input type="radio" id="spanclass1"
                   name="category" value="bonplan" <?php if($row['category'] === 'bonplan'){ echo 'checked';}?>>
            <label for="category" class="input label label-danger">Bon plan</label>
            <div class="add-form-btns"><input class="add-form-btns-add" type="submit" name="adding" value="Modifier"><a href="admin.php" class="add-form-btns-back">Retour</a></div>
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
    `title`,
    `img`
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
    <style>
        .articledit{
            position:absolute;
            display:flex;
            width:30%;
            height:30%;
            left:50%;
            top::50%;
            flex-direction:column;

            justify-content:center;
            background:white;
            z-index:1;
            transform:translate(-50%,50%);
        }
        .articledit h1{
            font-weight:700;
            display:inline-block;
            text-align:left;
            margin:0 auto;
            width:50%;
        }
        .articledit p{
            display:inline-block;
            text-align:left;
            margin:0 auto;
            width:50%;
        }
        .xdmdr{
            position:absolute;
            top:0;
            left:0;
            right:0;
            bottom:0;
            width:100%;
            height:100%;
            z-index:0;
        }
        .thommaassjpp{
            width:30%;
            margin:0 auto;
            display:flex;
            justify-content:space-between;
        }
    </style>
    <img class="xdmdr" src="<?=$row["img"]?>" alt="">
    <div class="articledit">
        <h1><?= $row["title"]?></h1>
        <p><?=$row["p"]?></p>
        <div class="thommaassjpp"><a href="edit.php?id=<?=$row['id']?>">edit</a>

        <a class="delete" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet article?'));"
           href="dodelete.php?id=<?=$row['id']?>">Supprimer</a></div>
    </div>
    <?php
}

    function getFooterAdmin()
    {
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="./src/script.js"></script>
        </body>

        </html>
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
