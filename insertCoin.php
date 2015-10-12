<?php
$current = 'act';
require 'inc/header.php';
?>
		<div class="container">
			<h1 class="container_shadow">INSERT COIN</h1>
			<h3 class="container_shadow">Teeterboard act</h3>
			<div class="act_nav"><ul><li class="credits_button">Credits</li><li class="gallery_button">Gallery</li></ul></div><br>
            <center><div class="js-lazyYT" data-youtube-id="wOxppb_ZOYk" data-ratio="16:9" data-parameters="rel=0"></div></center>
			<div class="gallery">
				<div id="slider">
				    <a href="#image1">1</a>
				    <a href="#image2">2</a>
				    <a href="#image3">3</a>
				    <a href="#image4">4</a>
				    <a href="#image5">5</a>
				</div>
				<div id="images">
				    <img id="image1" src="gallery/insert_coin/insert_coin_image1.jpg" />
				    <img id="image2" src="gallery/insert_coin/insert_coin_image2.jpg" />
				    <img id="image3" src="gallery/insert_coin/insert_coin_image3.jpg" />
				    <img id="image4" src="gallery/insert_coin/insert_coin_image4.jpg" />
				    <img id="image5" src="gallery/insert_coin/insert_coin_image5.jpg" />
				</div>
			</div>
			<p class="act_info">
				Insert Coin is inspired by a mythical object: the pinball.<br />
				We often give to pinball players a bad student, marginalized or rebel pictures. 
				Perhaps they are like this teeterboard performers who are rebelling against the sacrosanct laws of... gravity!<br />
				Speed, adrenalin and derision... because above all, it's a game!<br />
				Theme, objective, obstacle. Missions with a cartoonish sense of humor, sometimes black, sometimes absurd.<br />
				A rock’n’roll création with vertiginous energy, and the insolent desire to play whith risks and limits of all kinds.
			</p>
			<div class="hide_show_act_infos">Toggle <img src="pictures/desc.png" alt=""> infos</div>
		</div>
		<div class='credits'>
		  <div class='act'>Insert Coin</div>
		  <div class='performance'>acrobat</div>
		  <div class='performer'>Socrates Minier Matsakis</div>
		  <div class='performance'>acrobat</div>
		  <div class='performer'>Sylvain Briani Colin</div>
		  <div class='performance'>acrobat</div>
		  <div class='performer'>Thibaud de Prémorel</div>
		  <div class='performance'>acrobat</div>
		  <div class='performer'>Julien Favreuille</div>
		  <div class='performance'>acrobat</div>
		  <div class='performer'>Chloé Derrouaz</div>
		  <div class='performance'>acrobat</div>
		  <div class='performer'>Karim Randé</div>
		  <div class='performance'>director</div>
		  <div class='performer'>Dominique Bettenfeld</div>
		  <div class='performance'>musician (guitar and samples)</div>
		  <div class='performer'>Jérémy Manche</div>
		  <div class='performance'>singer</div>
		  <div class='performer'>Violette Legrand </div>
		</div>
	</div>

	<footer></footer>
	<script>
		function whichAnimationEvent(){
		  var t, el = document.createElement("fakeelement");

		  var animations = {
		    "animation"      : "animationend",
		    "OAnimation"     : "oAnimationEnd",
		    "MozAnimation"   : "animationend",
		    "WebkitAnimation": "webkitAnimationEnd"
		  }

		  for (t in animations){
		    if (el.style[t] !== undefined){
		      return animations[t];
		    }
		  }
		}


		$(document).ready(function(){

	      $("div.rideau_gauche").toggleClass('rideau_gauche_extends');
	      $("div.rideau_droit").toggleClass('rideau_droit_extends');
	      $("div.rideau_gauche,div.rideau_droit").on("click", function(){
			$("div.rideau_gauche").toggleClass('rideau_gauche_extends');
			$("div.rideau_droit").toggleClass('rideau_droit_extends');
		  });


		  $("div.container p.act_info").hide();
		  $("div.hide_show_act_infos").click(function(){
			if ($(this).find('img').attr("src") == "pictures/asc.png")
			{
			  $(this).find('img').attr("src","pictures/desc.png");
			  $("div.container p.act_info").slideUp();
			}
			else
			{
			  $(this).find('img').attr("src","pictures/asc.png");
			  $("div.container p.act_info").slideDown();
			}  
		  });

		  $('div.credits').hide();
	      $("li.credits_button").on("click", function(){
	      	$('div.container').hide();
	      	$('div.credits').show();
			var animationEvent = whichAnimationEvent();
			$('div.credits').one(animationEvent, function(event) {
		      $('div.credits').hide();
		      $('div.container').slideDown();
			});
		  });


		  $("div.gallery").hide();
	      $("li.gallery_button").on("click", function(){
	      	$('div.js-lazyYT').hide();
	      	$('div.gallery').show();
	      	$(this).text("Trailer");
	        $(this).on("click", function(){
	      		$(this).text("Gallery");
		      	$('div.gallery').hide();
		      	$('div.js-lazyYT').show();
	        });
		  });

		});
	</script>
	<script>LazyYT.init(".js-lazyYT");</script>
	</body>
</html>