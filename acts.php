<?php
$current = 'acts';
require 'inc/header.php';
?>
		<div class="container container_hide">

			<article class="first">
				<div class="link_container"><a class="trailer_infos" href="insertCoin.php">Trailer & infos</a></div>
				<div class="description"><p>Insert coin<span class="spectacle_name">Teeterboard act</span><br />
				<small>Insert Coin is inspired by a mythical object: the pinball.<br />
				Speed, adrenalin and derision... because above all, it's a game!</small></p></div>
			</article>

			<article class="second">
				<div class="link_container"><a class="trailer_infos" href="extremites.php">Trailer & infos</a></div>
				<div class="description"><p>Extrêmités<span class="spectacle_name">Balancing act</span><br />
				<small>Extremities, it's a performance of balance on plank and gas bottle. To make it short:<br />
				Bim, Bam, Boom are maintaining balance.<br />
				Bim fall. Who is left?<br />
				No one! Because if Bim fall, all fall away!</small></p></div>
			</article>

			<article class="third">
				<div class="link_container"><a href="wildFire.php">Pictures & infos</a></div>
				<div class="description"><p>Wild fire<span class="spectacle_name">Fire performance</span><br />
				<small>In the total darkness : torches, devil stick and pois, everything ignites, sparkles and spins around the stage.</small></p></div>
			</article>

			<article class="four">
				<div class="link_container"><a href="robotLightShow.php">Pictures & infos</a></div>
				<div class="description"><p>Robot light show<span class="spectacle_name">Light &amp; tech show</span><br />
				<small>Lights, laser beams, led stripes, metallic outfits, technology and special effects are put at the service of the fantastic to explore the humanoid robots of tomorrow.</small></p></div>
			</article>
		</div>
	</div>

	<footer></footer>

	<script>
		$(document).ready(function(){
		    $("div.rideau_gauche").toggleClass('rideau_gauche_extends');
		    $("div.rideau_droit").toggleClass('rideau_droit_extends');
			$("div.container").removeClass('container_hide');

	    	$(".rideau_gauche,.rideau_droit").on("click", function(){
			    $(".rideau_gauche").toggleClass('rideau_gauche_extends');
			    $(".rideau_droit").toggleClass('rideau_droit_extends');
			});

			$('div.description').hover(
				function() {
					$(this).toggleClass('show-description');
				}, function() {
					$(this).toggleClass('show-description');
				}
			);
			
			$('div.link_container a').click(function(event) {
			    event.preventDefault();
			    var href = this.href;
			    $("div.rideau_gauche").toggleClass('rideau_gauche_extends');
			    $("div.rideau_droit").toggleClass('rideau_droit_extends').delay(700).queue(function() {
			    	window.location.href = href;
	    		});
			});
		});
	</script>
	</body>
</html>