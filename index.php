<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];
include "$path/system/rssmain.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	 <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	 <script src="js/master.js" charset="utf-8" async></script>
	 <link rel="stylesheet" href="css/master.css">
	 <link rel="stylesheet" href="css/slider.css">
	 <link rel="stylesheet" href="css/responsive.css">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	 <title>InGame - Новостной агрегатор о видеоиграх и не только</title>
	 <meta name="description" content="InGame - это информационное пространство с самыми свежими и актуальными новостями от крупнейших российских игровых порталов, собранными 
	 в одном месте для вашего удобства">
</head>
<body>
	<h1> InGame - новостной агрегатор о видеоиграх и не только </h1>
	<?include "$path/private/header.php"?>
	<main>
		<section id="playground_section">
			<h3 id="playground_title" style="font-weight: 500">Свежачок от Playground</h3>
			<div id="playground_news">
				<? sliderNewsPlayground() ?>
			</div>
		</section>
			<div id="cubiq_categories">
				<h3 class="cubiq_title" style="font-weight: 500"> Рубрики от Cubiq'а </h3>
				<div id="cubiq_categories_wrap">
					<div id="cubiq_categories_list">
						<ul>
							<li class="cubiq_list" id="cubiq_list_1" onclick="openCategories(event, 'shutery')"> Шутеры </li>
							<li class="cubiq_list" id="cubiq_list_2" onclick="openCategories(event, 'rpg')"> RPG </li>
							<li class="cubiq_list" id="cubiq_list_3" onclick="openCategories(event, 'strategii')"> Стратегии </li>
							<li class="cubiq_list" id="cubiq_list_4" onclick="openCategories(event, 'mmo')"> MMO </li>
							<li class="cubiq_list" id="cubiq_list_5" onclick="openCategories(event, 'rts')"> RTS </li>
							<li class="cubiq_list" id="cubiq_list_6" onclick="openCategories(event, 'indi')"> Инди-игры </li>
						</ul>
					</div>
					<div id="cubiq_categories_news">
						<? feedNewsCubiq() ?>
					</div>
				</div>
			</div>
			<div id="stopgame_reviews">
				<h3 class="stopgame_title" style="border-left: #bbbbbb 1px solid; font-weight: 500">Обзоры Stopgame</h3>
				<div class="reviews_wrap">
					<? feedReviewsStopgame() ?>
				</div>
			</div>
	</main>
	<?include "$path/private/footer.php"?>
	<script src="js/index.js" charset="utf-8"></script>
</body>
</html>