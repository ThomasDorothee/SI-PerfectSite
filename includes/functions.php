<?php

function getHeader(): void
{
?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>li{
                list-style:none;
                margin:0 25px;
            }
            ul{
                display:flex;
                justify-content:space-arround;
            }
            nav{
                border-bottom:2px solid black;
            }
            .article{
                padding-bottom:4px;
                border-bottom:2px solid black;
            }</style>
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="index.php">accueil</a></li>
            <li><a href="admin.php">connexion</a></li>
        </ul>
    </nav>
<?php
}
function getFooter(){
    ?>
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
    <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <div class="article">
        <h1><?= $row["title"]?></h1>
        <p><?= reduireChaineCar($row["p"],40)?></p>
        <a href="article.php?id=<?= $row["id"]?>">En savoir plus</a>
    </div>
<?php
endwhile;
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
