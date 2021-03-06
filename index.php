<?php
session_start();


// $_SESSION['count'] = $_SESSION['count'] + 1;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<title>クリエイティヴ・グラフィックス大学</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" media="screen">
	<link rel="stylesheet" href="lightbox.css">
	<link rel="stylesheet" href="loading.css">
</head>

<body>

	<header>
		<div id="logo"><img src="common/image/logo2.svg" alt="クリエイティヴ・グラフィックス大学(CGU)"></div>
		<section id="uvname">クリエイティブ・グラフィックス大学(CGU)</section>
		<?php echo "      " . "あなたは" . $_SESSION['count'] . "回目の訪問者です！" ?><br>
		<div id="headerRight">
			<div id="kensaku"><input type="text" size="10"></div>
			<input type="button" value="検索" id="kensakubtn">
			<div id="languages">LANGUAGES</div>
			<select name="languages" id="languages">
				<option value="japanese">日本語</option>
				<option value="chinese">中国語</option>
				<option value="english">English</option>
				<option value="germany">Germany</option>
				<option value="italian">Italian</option>
			</select>
			<div id="fontSize">文字の大きさ</div>
			<input type="button" value="小" onclick="changeSize('10px')">
			<input type="button" value="中" onclick="changeSize('16px')">
			<input type="button" value="大" onclick="changeSize('22px')">
		</div>
		<nav id="gnavi" class="gnavi">
			<ul>
				<li><a href="#" class="navBtn">大学情報</a></li>
				<li><a href="#" class="navBtn">学部情報</a></li>
				<li><a href="#" class="navBtn">入試案内</a></li>
				<li><a href="#" class="navBtn">イベント</a></li>
				<li><a href="#" class="navBtn">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
	<main>

		<ul id="mainPhoto">
			<li>&nbsp;</li>
			<li>&nbsp;</li>
			<li>&nbsp;</li>
		</ul>
		<div id="gakuchou"><img src="web/image/egon3.jpg" alt="学長" id="gakuchouPhoto"><br>
			<p id="gakuchouname"><a href="https://ja.wikipedia.org/wiki/%E3%82%A8%E3%82%B4%E3%83%B3%E3%83%BB%E3%82%B7%E3%83%BC%E3%83%AC">学長：エゴン・シーレ</a></p><br>
			<p id="aisatsu">学長挨拶</p>
			<p id="aisatsuhonbun">苦悩を突き抜けて、歓喜に至れ。</p>
		</div>
		<br>
		<table class="sideSwitch">
			<tr>
				<th>
					<span id="switch_jq" class="changeTitle">点滅</span>
				</th><br>
				<td>
					<input type="button" value="on" id="on" class="change">
				</td>
				<td>
					<input type="button" value="off" id="off" class="change">
				</td>
			</tr>
			<tr>
				<th>
					<span id="switch_jq" class="changeTitle">点滅２</span>
				</th><br>
				<td>
					<input type="button" value="on" id="on2" class="change">
				</td>
				<td>
					<input type="button" value="off" id="off2" class="change">
				</td>
			</tr>
			<tr>
				<th>
					<span id="switch_jq" class="changeTitle">change</span>
				</th><br>
				<td>
					<input type="button" value="1" id="change1" class="change" onclick="imgChange1()">
				</td>
				<td>
					<input type="button" value="2" id="change2" class="change" onclick="imgChange2()">
				</td>
				<td>
					<input type="button" value="3" id="change3" class="change" onclick="imgChange3()">
				</td>
			</tr>
		</table>




		<table id="contentsMenu">
			<thead>
				<tr>
					<th class="mgr"><a href="#">3DCG</a></th>
					<th class="mgr"><a href="#">プログラミング</a></th>
					<th class="mgr"><a href="#">イラスト・デザイン</a></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mgrText">ゲーム、映像のプロとして一流に</td>
					<td class="mgrText">時代の最先端をゆくIT人材へ</td>
					<td class="mgrText">独創的なクリエイターとして活躍</td>
				</tr>
			</tbody>
		</table>
		<div id="middleSection">
			<section>

				<div id="ballLeft">
					<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="00300300">
						<circle cx="50" cy="50" r="30" fill="rgba(208, 255, 67, 1)"></circle>
					</svg>
				</div>
				<div id="ballRight">
					<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="00300300">
						<circle cx="50" cy="50" r="30" fill="rgba(113,66,255,1)"></circle>
					</svg>
				</div>
				<h2 id="tsuyomi" class="tsuyomi-svg">
					本校の強み
					<svg>
						<rect x="0" y="0" rx="0" fill="none" width=800 height="50"></rect>
					</svg>
				</h2>
				<table id="senden">
					<tr class="senden">
						<td>①技術だけでなく、幅広い視野を持った独創的なクリエイターを輩出</td>
						<td><img src="web/image/artist.jpg" alt="卒業生のイメージ" class="sendenimg"></td>
					</tr>
					<tr class="senden">
						<td><img src="web/image/teacher4.jpg" alt="講師イメージ" class="sendenimg"></td>
						<td>②多彩な教師陣。月１回ゲスト講師による特別講演も</td>
					</tr>
					<tr class="senden">
						<td>③コロナ禍にも負けない！オンライン対応の授業を導入</td>
						<td><img src="web/image/onlinelesson.jpg" alt="オンライン授業イメージ" class="sendenimg"></td>
					</tr>
					<tr class="senden">
						<td><img src="web/image/book.jpg" alt="図書館イメージ" class="sendenimg"></td>
						<td>④豊富な品揃えの購買部、旬の本を取りそろえる図書館</td>
					</tr>
					<tr class="senden">
						<td>⑤GO言語、Houdini、レトロ調イラストなどを専門的に学べるのはCGUだけ！</td>
						<td><img src="web/image/programming3.jpg" alt="プログラミング画面" class="sendenimg"></td>
					</tr>
				</table>
			</section>
			<aside>
				<ul id="rightContents">
					<li><a href="#" id="shiryou">資料請求<span class="shift"></span></a></li>
					<div class="mask"></div>
					<li><a href="#" id="shisetsu">施設情報<small>図書館・購買部など</small><span class="shift"></span></a></li>
					<div class="mask"></div>
				</ul>
			</aside>

			<div id="information">
				<h2 id="oshirase">お知らせ</h2>
				<table>
					<tr>
						<th>20XX.04.12</th>
						<td><a href="#">3DCGコースの山岡教授が日本アカデミー大賞を受賞しました。</a></td>
					</tr>
					<tr>
						<th>20XX.06.23</th>
						<td><a href="#">竹中ゼミの学生が伊能忠敬プログラミングコンテストに入賞しました！</a></td>
					</tr>
					<tr>
						<th>20XX.09.11</th>
						<td><a href="#">イラスト専科卒業の内原　恭子さんが「世界で注目されるアーティスト300選」に選ばれました。</a></td>
					</tr>
					<tr>
						<th>20XX.12.22</th>
						<td><a href="#">新型コロナウイルス感染症のため、一時的に入校の制限をかけています。</a></td>
					</tr>
					<tr>
						<th>20XY.02.05</th>
						<td><a href="#">今をときめく次世代型アーティスト、ペンネ・小沢さんの特別講演決定！！</a></td>
					</tr>
				</table>
			</div>

			<div id="gallery">
				<h2>生徒の作品</h2>
				<p>
					<a href="web/image/illustration4.jpg" rel="lightbox"><img src="web/image/illustration4_s.jpg" alt="『視線のその先』" width="100" height="100"></a>
					<a href="web/image/CG3.jpg" rel="lightbox"><img src="web/image/CG3_s.jpg" alt="『ワールド・オヴ・ノーザン　設定画』" width="100" height="100"></a>
					<a href="web/image/design2.jpg" rel="lightbox"><img src="web/image/design2_s.jpg" alt="『電脳世界』" width="100" height="100"></a>
					<a href="web/image/CG5.jpg" rel="lightbox"><img src="web/image/CG5_s.jpg" alt="『戦場と文明』" width="100" height="100"></a>
					<a href="web/image/illustration7.jpg" rel="lightbox"><img src="web/image/illustration7_s.jpg" alt="『ノアの箱舟』" width="100" height="100"></a>
					<a href="web/image/graphicalart2.jpg" rel="lightbox"><img src="web/image/graphicalart2_s.jpg" alt="『愛は世界を救う』" width="100" height="100"></a>
					<a href="web/image/design.jpg" rel="lightbox"><img src="web/image/design_s.jpg" alt="『未知の世界』" width="100" height="100"></a>
					<a href="web/image/CG2.jpg" rel="lightbox"><img src="web/image/CG2_s.jpg" alt="『ハロッド・ハウゼンの仕事部屋』" width="100" height="100"></a>
					<a href="web/image/CG1.jpg" rel="lightbox"><img src="web/image/CG1_s.jpg" alt="『くじら戦艦』" width="100" height="100"></a>
					<a href="web/image/illustration6.jpg" rel="lightbox"><img src="web/image/illustration6_s.jpg" alt="『未知の旅』" width="100" height="100"></a>
				</p>
				<br><br><br><br><br><br>
			</div>
		</div>

	</main>

	<footer>
		<din id="footerInner">
			<p id="copyright">&copy; 20XX CREATIVE GRAPHICS UNIVERSITY</p>
			<p id="footerLogo"><img src="common/image/logo2.svg" alt="CGUロゴ"></p>
		</din>
	</footer>


	<!-- ロード中の部分 -->
	<div id="loadingWrap">
		<div id="cover" class="cover">
			<div id="loading" class="ui-circle-loading">
				<ul class="animate">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div id="load">
				<div>G</div>
				<div>N</div>
				<div>I</div>
				<div>D</div>
				<div>A</div>
				<div>O</div>
				<div>L</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="lightbox.js"></script>
	<script>
		function changeSize(size) {
			document.getElementsByTagName("body")[0].style.fontSize = size
		};
		$(function() {
			$("#on").on("click", function() {
				$("#gakuchouPhoto").fadeOut().fadeIn().fadeOut().fadeIn().fadeOut().fadeIn().fadeOut().fadeIn();
			});
			$("#off").on("click", function() {
				$("#gakuchouPhoto").stop().stop().stop().stop().stop().stop();
			});
			$("#on2").on("click", function() {
				$("#gakuchouPhoto").slideUp().slideDown().slideUp().slideDown().slideUp().slideDown().slideUp().slideDown();
			});
			$("#off2").on("click", function() {
				$("#gakuchouPhoto").stop().stop().stop().stop().stop().stop();
			});

			function imgChange1() {
				document.getElementById("gakuchouPhoto").setAttribute("src", "web/image/egon3.jpg");
			};

			function imgChange2() {
				document.getElementById("gakuchouPhoto").setAttribute("src", "web/image/egon1.jpg");
			};

			function imgChange3() {
				document.getElementById("gakuchouPhoto").setAttribute("src", "web/image/egon2.jpg");
			};
			// $("#change1").on("click",function(){
			// 	var onImg = $("#gakuchouPhoto").attr("src");
			// 	onImg = onImg.replace("egon3","egon1");
			// 	$("#gakuchouPhoto").attr("src", onImg).attr("src", onImg2);
			// });
			// $("#change2").on("click",function(){
			// 	onImg2 = onImg.replace("egon1","egon2");

			//});

			// ローディングアニメーション
			$('.cover').addClass('.showLoadingLogo');
			console.log('loading...');

			setTimeout(function() {
				//透明に
				$('#loadingWrap').addClass('.hideLoadingWrap');
				$('#topText').addClass('.showTopText');
				//覆っている要素の表示をなしに
				setTimeout(function() {
					$('#loadingWrap').css('visibility', 'hidden');
				}, 1000);
			}, 1500);
		});
	</script>
</body>


</html>
