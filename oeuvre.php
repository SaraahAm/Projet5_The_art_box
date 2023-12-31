<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include_once('header.php'); ?>
<main>
    <?php include_once('oeuvres.php');
        $id = $_GET['id'];
        $oeuvre=$oeuvres[$id]?>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $oeuvre['image']?>" alt="<?php echo $oeuvre['nom']?>">
            </div>
            <div id="contenu-oeuvre">
                <h1> <?php echo $oeuvre['nom'] ?></h1>
                <p class="description"><?php echo $oeuvre['auteur'] ?></p>
                <p class="description-complete"><?php echo $oeuvre['description']?></p>
            </div>
        </article>
</main>
<?php include_once('footer.php'); ?>
</body>
</html>
