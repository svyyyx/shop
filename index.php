<!DOCTYPE html>
<html>
<head>
	<title>𝙈𝙖𝙞𝙣</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		 @font-face {
	    font-family: Custom; /* Имя шрифта */
	    src: url(img/15381.otf); /* Путь к файлу со шрифтом */
	   }
	
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
		A {
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
		.mainMoth {
			display: flex;
		}
		.main {
			width: 1000px;
			background-color: ;
			display: flex;
			flex-flow:wrap;
		}
		.mainProduct {
			width: 300px;
			/*border-radius: 40px;
			border: 2px solid white;
			box-shadow: 0 0 10px rgba(255,255,255,1);*/
			background-color: ;
			margin-left: 25px;
			margin-top: 50px;
		}
		.mainProductButton {
			width: 156px;
			height: 50px;
			padding-top: 5px;
			/*background-color: orange;*/
			text-align: center;
			background: none;
			border: none;
			border-radius: 40px;
			border: 3px solid white;
			transition: 0.5s;
			-webkit-filter: drop-shadow(0 0 1px rgba(255, 255, 255,1));
    		filter: drop-shadow(0 0 10px rgba(255, 255, 255,1));
		}
		.mainProductButton:hover{
			
			box-shadow: 0 0 15px rgba(255,255,255,1);
			color: none;
		}
		.descript {
			font-size: 80%;
		}

		
		
	</style>
</head>
<body style="background-image: url(img/1.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%" class="text-center">
<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","shop");
 	$text_query = "SELECT * FROM products";
	$query = mysqli_query($connect, $text_query);
	$result1 = $query->fetch_assoc(); 
	$result2 = $query->fetch_assoc(); 	
	$result3 = $query->fetch_assoc();
	$result4 = $query->fetch_assoc();
	$result5 = $query->fetch_assoc();
	$result6 = $query->fetch_assoc(); 
	$result7 = $query->fetch_assoc(); 
	$result8 = $query->fetch_assoc(); 
	$result9 = $query->fetch_assoc(); 
	$result10 = $query->fetch_assoc(); 

?>
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
			
				<button href="admin.php" class="bannerBoxsAdmin mt-3 py-1" style="margin-left: 500px;">
					<a href="admin.php">Админ. панель</a>
				</button>
			
			
				<button class="bannerBoxs mt-3  py-1" style="border:none;">
					<a href="aboutus.php">О нас</a>
				</button>
			
		</div>
	</div>
</section>
<div style="border-bottom: 1px solid white;border-top: 1px solid white;box-shadow: 0 0 10px rgba(255,255,255,1)">
	<h1 class="py-5">Каталог</h1>
</div>

<section class="">
	<div class="mainMoth" style="border-bottom: 1px solid white;border-top: 1px solid white;box-shadow: 0 0 10px rgba(255,255,255,1)">
		<div class="main mx-auto py-5">
			
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result1[img]."'></img>
				<p>".$result1[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result1[description]."</p>
				<p>".$result1[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result2[img]."'></img>
				<p>".$result2[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result2[description]."</p>
				<p>".$result2[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result3[img]."'></img>
				<p>".$result3[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result3[description]."</p>
				<p>".$result3[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result4[img]."'></img>
				<p>".$result4[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result4[description]."</p>
				<p>".$result4[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result5[img]."'></img>
				<p>".$result5[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result5[description]."</p>
				<p>".$result5[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result6[img]."'></img>
				<p>".$result6[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result6[description]."</p>
				<p>".$result6[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result7[img]."'></img>
				<p>".$result7[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result7[description]."</p>
				<p>".$result7[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			<?php echo "
				<div class='mainProduct py-3'>
				<img class='w-100' src='".$result8[img]."'></img>
				<p>".$result8[title]."</p>
				<p style='margin-top;10px' class='descript'>".$result8[description]."</p>
				<p>".$result8[price]." руб.</p>
				<button class='mainProductButton'>
					<p>В корзину</p>
				</button>
				</div>";
			?>
			

			

			
		</div>
	</div>
</section> 
</body>
</html>