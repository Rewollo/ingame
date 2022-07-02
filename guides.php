<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];
include "$path/system/rssguides.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	 <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">
	<script src="js/master.js" charset="utf-8" async></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>Руководства и прохождения от авторов stopgame.ru - на сайте InGame</title>
    <meta name="description" content="Секреты, пасхальные яйца, тонкости прохождения видеоигр и другая ценная информация, предоставленная stopgame.ru -
     в рубрике Гайды от InGame">
</head>
<body>
    <h1> InGame - Гайды </h1>
    <?include "$path/private/header.php"?>
    <?  feedGuidesPlayground() ?>
    <div class="arrow_top" hidden></div>
    <?include "$path/private/footer.php"?>
    <script src="js/arrow.js" charset="utf-8"></script>
</body>
</html>