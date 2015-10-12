<?php
$current = 'act';
require 'inc/header.php';
?>
		<div class="container">
			<h1 class="container_shadow">Extrêmités</h1>
			<h3 class="container_shadow">Balancing act</h3>
			<div class="act_nav"><ul><li class="credits_button">Credits</li><li class="gallery_button">Gallery</li></ul></div><br>
            <div class="js-lazyYT" data-youtube-id="C43_O-lVxVg" data-ratio="16:9" data-parameters="rel=0"></div>
            <div class="gallery">
				<div id="slider">
				    <a href="#image1">1</a>
				    <a href="#image2">2</a>
				    <a href="#image3">3</a>
				    <a href="#image4">4</a>
				    <a href="#image5">5</a>
				</div>
				<div id="images">
				    <img id="image1" src="gallery/extremites/extremites_image1.jpg" />
				    <img id="image2" src="gallery/extremites/extremites_image2.jpg" />
				    <img id="image3" src="gallery/extremites/extremites_image3.jpg" />
				    <img id="image4" src="gallery/extremites/extremites_image4.jpg" />
				    <img id="image5" src="gallery/extremites/extremites_image5.jpg" />
				</div>
			</div>
			<p class="act_info">
			Precariously balanced on a ash plank, placed itself on two stacked gas bottle.<br />
			The issue is quite clear: try to create human equilibrium on objects governed by the law of gravity and that, 
			the artists are forced to somehow tame it for the survival of their heads.<br />
			Of this physical challenge was born the idea to tell a humanistic story where individuals depend obligatorily on other 
			people and where only solidarity and listening to others, promise the survival of the group.
			</p>
			<div class="hide_show_act_infos">Toggle <img src="pictures/desc.png" alt=""> infos</div>
		</div>

		<div class='credits'>
		  <div class='act'>Extrémités</div>
		  <div class='performance'>Acrobat</div>
		  <div class='performer'>Yann Ecauvre</div>
		  <div class='performance'>Acrobat</div>
		  <div class='performer'>Rémi Lecocq</div>
		  <div class='performance'>Acrobat</div>
		  <div class='performer'>Sylvain Briani-Colin</div>
		  <div class='performance'>Scenography</div>
		  <div class='performer'>Julien Michenaud</div>
		  <div class='performance'>Scenography</div>
		  <div class='performer'>Sébastien Hérouart</div>
		  <div class='performance'>Scenography</div>
		  <div class='performer'>Michel Ferandon</div>
		  <div class='performance'>Light Creation</div>
		  <div class='performer'>Sébastien Hérouart</div>
		  <div class='performance'>production</div>
		  <div class='performer'>Sébastien Hérouart</div>
		  <div class='performance'>production</div>
		  <div class='performer'>Jack Verdier</div>
		  <div class='performance'>production</div>
		  <div class='performer'>Julien Michenaud</div>
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