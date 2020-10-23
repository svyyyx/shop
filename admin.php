<!DOCTYPE html>
<html>
<head>
	<title>𝘼𝙙𝙢𝙞𝙣 𝙋𝙖𝙣𝙚𝙡</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		 @font-face {
	    font-family: Custom; /* Имя шрифта */
	    src: url(img/15381.otf); /* Путь к файлу со шрифтом */
	   }
		.bannerMoth {
			height: 104px;
			display: flex;
			/*border-bottom: 2px solid pink;*/
			
		}
		.banner{
			width: 1000px;
			height: 104;
			background-color: ;
			display: flex;
		}
		.bannerBoxs {
			width: 156px;
			height: 66px;
			/*background-color: orange;*/
			text-align: center;
			padding-top: 13px;
			background: none;
			border: none;
			
		}
		.bannerBoxsAdmin {
			width: 156px;
			height: 66px;
			/*background-color: orange;*/
			text-align: center;
			padding-top: 13px;
			background: none;
			border: none;
			border-radius: 40px;
			border: 3px solid white;
			transition: 0.5s;
		}
		.bannerBoxsAdmin:hover{
			
			box-shadow: 0 0 15px rgba(255,255,255,1)
		}
		.logo {
			width: 104;
			height: 104;
			background-color: ;
			cursor: wait;
		}
		P {
			font-family: Custom;
			font-size: 120%;
			color: white;
		}
		H1 {
			font-family: Custom;
			font-size: 300%;
			color: white;
			-webkit-filter: drop-shadow(0 0 3px rgba(255, 255, 255,1));
    		filter: drop-shadow(0 0 6px rgba(255, 255, 255,1));
		}
	</style>
</head>
<body style="background-image: url(img/1.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%" class="text-center">
	<section>
	<div class="bannerMoth" style="border-bottom: 1px solid white;box-shadow: 0 0 10px rgba(255,255,255,1)">
		<div class="banner mx-auto" style="background: ;">
			<a href="index.php">
				<div class="logo" style="width: 104px;">
					<img src="img/logo.gif" style="width: 100%">
				</div>
			</a>
			<div style="height: 64px;width: 2px;border-radius: 50px;background-color: white;box-shadow: 0 0 3px rgba(255,255,255,1);margin-top: 20px;"></div>
			<p style="margin-left: 10px;margin-top: 32px;font-size: 135%;-webkit-filter: drop-shadow(0 0 3px rgba(255, 255, 255,1));
    		filter: drop-shadow(0 0 6px rgba(255, 255, 255,1));">g.Store</p>
			<a href="admin.php">
				<button href="admin.php" class="bannerBoxsAdmin mt-3" style="margin-left: 500px;">
					<p>Админ. панель</p>
				</button>
			</a>
			<a href="aboutus.php">
				<button class="bannerBoxs mt-3" style="border:none;">
					<p>О нас</p>
				</button>
			</a>
		</div>
	</div>
</section>

<div style="border-bottom: 1px solid white;border-top: 1px solid white;box-shadow: 0 0 10px rgba(255,255,255,1)">
	<h1 class="py-5">Админская панель</h1>
</div>

<section style="border-top: 1px solid white;border-bottom: 2px solid white;box-shadow: 0 0 10px rgba(255,255,255,1)" class="py-5">
	<div style="width: 600px;" class="mx-auto">
		<form action="insert.php" method="GET">
		  <div class="form-group">
		    <input type="text" class="form-control" name="title" id="title" placeholder="Видеокарта">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" name="description" id="description" placeholder="Memory: 6gb">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" name="img" id="img" placeholder="Картина img/1.jpg">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" name="price" id="price" placeholder="Цена">
		  </div>
		  <button class="bannerBoxsAdmin"><p>Отправить!</p></button>
		</form>
	</div>
</section>
</body>
</html>