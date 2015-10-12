<?php
$current = 'index';
require 'inc/header.php';
?>
		<div class="speech_presenter">
			<div class="speech">
				<p>Welcome to the <h1 class="small_shadow">Wild Circus</h1>
				new show<br /><br />
				Click on the curtains<br  />
				to continue<br /></p>
			</div>
			<div class="speech">
				<p><h1 class="small_shadow">Wild Circus</h1>
				is a company, coming straight from the imagination of the webmaster.<br /><br />
				The new show is composed of four acts, witch two of them are real act from two different compagny 
				who are olso friends of the webmaster. The two other are not real acts, imagined once again by the webmaster.<br /><br />
				From now on you can click on the curtains in each pages to animate them.<br />
				Click me to see our new acts.</p>
			</div>
			<div class="presenter">
				<span class="arrow_border"></span>
				<span class="arrow"></span>
				<img src="pictures/presenter.png">
			</div>
		</div>

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

    	$("div.speech").eq(1).hide();
    	$("div.speech").eq(0).hide();
		$("span.arrow").hide();
		$("span.arrow_border").hide();

    	$("div.speech_presenter").addClass('speech_presenter_show')
		$("div.speech").eq(0).delay(1500).show(200);
		$("span.arrow").delay(1500).show(300);
		$("span.arrow_border").delay(1500).show(300);

    	var click = 0;
    	$("div.rideau_gauche,div.rideau_droit").on("click", function(){
		    $("div.rideau_gauche").toggleClass('rideau_gauche_extends');
		    $("div.rideau_droit").toggleClass('rideau_droit_extends');
			if (click == 0) {
    			click = 1;
		    	$("div.speech").eq(0).hide();
			    $("div.speech p").eq(1).css('visibility','hidden');
		    	$("div.speech").eq(1).show();
			    $("div.speech_presenter").css('width','70%').delay(400).queue(function() {
			    	$("div.speech p").eq(1).css('visibility','visible');
			    });
			}
		});

		$("div.speech_presenter").on('click',function() {
    		$("div.speech").eq(1).fadeOut(200);
    		$("span.arrow").fadeOut(100);
    		$("span.arrow_border").fadeOut(100);
    		$("div.speech_presenter").delay(600).removeClass('speech_presenter_show');
    		$("div.container").delay(1500).removeClass('container_hide');
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
		    $("div.rideau_droit").toggleClass('rideau_droit_extends').delay(500).queue(function() {
		    	window.location.href = href;
    		});
		});
	});
</script>
</body>
</html>