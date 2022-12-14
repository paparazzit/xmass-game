<?php 

if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	switch ($lang){
		case 'en':
			$lang = $_GET['lang'];
			break;
		case 'fr':
				$lang = $_GET['lang'];
			break;
		case 'es':
				$lang = $_GET['lang'];
			break;
		default: $lang ='en';
	}
}else{
	$lang = 'en';
}
require "text/text_".$lang.".php";

?>

<!DOCTYPE html>
<html lang=<?php echo $lang?>>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0 user-scalable=no"
		/>
		<!-- <link rel="stylesheet" href="css/style.css" /> -->
		<link rel="stylesheet" href="css/style_final.css" />
		<link rel="icon" href="./assets/fav.png" type="image/gif" sizes="16x16" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
			integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes" />
		<intelxdk:crosswalk xwalk-command-line="--disable-pull-to-refresh-effect" />

		<title>Xmass game PROD2</title>
	</head>
	<body>
		<div class="introPage">
			<div class="cont">
				<p>
					<?php echo $intr_text['text']?>
				</p>
				<button class="btn fullScreenBtn hide">
					<span><?php echo $intr_text['btn']?></span>

					<div class="arrow-wrapper">
						<img src="assets/arrow-wh.png" alt="" />
					</div>
				</button>
				<button class="btn" id="startBtn">
					<span><?php echo $intr_text['btn']?></span>

					<div class="arrow-wrapper">
						<img src="assets/arrow-wh.png" alt="" />
					</div>
				</button>
			</div>

			<div class="bg top"></div>
			<div class="bg bottom"></div>
		</div>
		<div class="outroPage hide" id="outro">
			<div class="content">
				<h2>Lorem, ipsum dolor.</h2>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio est
					assumenda tempora? Similique eius optio, maiores magni, cum esse
					officia autem fugit expedita, nobis fuga quam! In tempore maiores
					quod.
				</p>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsam
					quas dolorum animi ipsa iure nisi qui similique! Dolorum ducimus
					aliquam tempora quas iste temporibus nulla debitis modi sequi animi
					laborum doloremque, rem eligendi eveniet neque est repellendus nemo
					libero rerum placeat velit minus! Commodi, hic culpa. Nobis dolor
					ipsum mollitia nemo. Expedita labore aliquam quae! Id quasi ab minus
					perspiciatis nemo! Reprehenderit expedita, repudiandae itaque odio
					ipsum maxime consectetur adipisci, praesentium accusamus repellat
					delectus suscipit pariatur accusantium provident dicta ex omnis! At
					facere unde temporibus ex beatae nesciunt, quos ullam enim ad,
					provident perferendis dolores! Excepturi quia enim cumque quod
					similique dolores, aperiam tempore rem incidunt quae eos doloribus ab
					repellat eius culpa repellendus autem illo inventore beatae molestias
					provident sapiente facere consectetur. Suscipit iure repudiandae
					consectetur laboriosam architecto voluptatibus nulla, numquam modi
					voluptatum eius, iusto dolorem dolorum aliquid ullam perferendis
					tempora odio ad necessitatibus animi! Quia ad inventore cumque
					consequatur repellat? Rem, dignissimos atque ab fugit, reprehenderit
					officiis magni adipisci cumque eius, cupiditate distinctio! Sint
					excepturi provident ad sunt, sapiente cupiditate adipisci ex velit
					impedit ab quibusdam amet iusto pariatur rem dolorum, necessitatibus
					dolor accusamus corrupti nemo animi. Quidem ullam praesentium animi
					pariatur unde enim quam nobis officiis recusandae? Excepturi repellat
					non, quasi perspiciatis incidunt soluta eum aliquid illum tempore et
					quidem atque ipsam aspernatur nostrum accusamus ut nulla ipsa fugiat
					quaerat totam temporibus, mollitia expedita! Doloremque, voluptatum
					quis impedit ullam ipsa laboriosam officiis quo vitae ex modi? Nulla
					saepe magni laborum eum tenetur corporis eos adipisci quis.
				</p>
				<div class="shareing">
					<a
						href="https://www.facebook.com/sharer/sharer.php?u=example.org"
						target="_blank"
						class="btn"
					>
						Share on FB</a
					>
					<div class="copySection">
						<input type="text" value="" id="url" />
						<button class="btn btn-copy" id="urlBtn" onclick="copyUrl()">
							Copy Url
						</button>
					</div>
				</div>
			</div>
		</div>
		<main onclick="void(0)">
			<div class="container">
				<div class="game-panel">
					<div class="fullScreenBtn">
						<i class="fa-solid fa-expand"></i>
					</div>
					<!-- SIDEBAR -->
					<div class="drop_menu">
						<img src="assets/inventory.png" alt="" />
					</div>
					<div class="sidebar"></div>
					<!-- MAIN PANEL -->
					<div class="main-panel">
						<div class="text-bubble">
							<div class="close"><span></span><span></span></div>
							<div class="text-bubble-text"></div>
						</div>
						<div class="main-img">
							<!-- HAT -->

							<div class="item_pos hat" data-item="hat">
								<!-- <img src="assets/hat.png" alt="" /> -->
							</div>
							<!-- blanket -->
							<div class="item_pos blanket" data-item="blanket"></div>
							<div class="item_pos mouth" data-item="mouth"></div>
							<!-- main-img -->
							<img src="assets/deblo.png" class="log-bare" alt="" />
							<div class="face">
								<img src="assets/face_1.png" alt="" />
							</div>
						</div>
					</div>
					<div class="bg-img">
						<img src="assets/fire-joypixels.gif" class="fire" alt="" />
						<img src="assets/stocic.png" class="table" alt="" />
						<img src="assets/background.png" alt="" />
					</div>
				</div>
				<div class="cursor"></div>
			</div>
			<!-- <div class="fullscreenReq">
				<div class="full_text">
					<p>Please allow Full screen for the best experience</p>
				</div>
				<button class="btn fullScreenBtn">Fullscreen</button>
			</div> -->
		</main>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.5/mobile-detect.min.js"></script>
		<script src="js/messages.js"></script>
		<script src="js/Game.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
