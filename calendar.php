<?php
function displaySelect($name, array $valueList, $selectedValue=null){
	$selected = '';
	echo "\t",'<select name="', $name ,'" size="1">',"\n";
	echo "\t",'<option value="">----- ALL -----</option>',"\n";
	foreach($valueList as $value){
		if (!empty($selectedValue)){
			if($value === $selectedValue)
			{
			  $selected = ' selected="selected"';
			}
		}
		echo "\t",'<option value="', $value ,'"', $selected ,'>', $value ,'</option>',"\n";
		$selected='';
	}
	echo '</select>',"\n";
}

$current = 'dates';
require 'inc/header.php';
require 'inc/dbConnect.php';
require 'inc/date.php';

$date = new Date();
$year = date("Y");
$events = $date->getEvents($year);
$dates = $date->getAll($year);

$country = '';
$city = '';
if (!empty($_POST['country'])){
	$country = $_POST['country'];
	$events = $date->getEvents($year, $country);
	if (!empty($_POST['city'])) {
		$city = $_POST['city'];
		$events = $date->getEvents($year, $country, $city);
	}
}

?>
		<div class="screen">
			<div class="form_place">
				<form action="" method="post">
					<label for="country">Country: </label>
					<?php displaySelect('country', $date->getEventsCountrys($year), $country); ?>
					<?php if (!empty($country)): ?>
						<label for="city">City: </label>
						<?php displaySelect('city', $date->getEventsCitys($year, $country), $city); ?>
					<?php endif ?>
					<input type="submit" value="Search">
				</form>
			</div>


			<div class="periods">
				<div class="year"><?= $year; ?></div>
				<div class="months">
					<ul>
						<?php foreach ($date->months as $id => $m): ?>
							<li><a href="#" id="linkMonth<?= $id+1; ?>"><?= utf8_encode(substr(utf8_decode($m),0,3)); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="clear"></div>
				<?php $dates = current($dates); ?>
				<?php foreach ($dates as $m => $days): ?>
					<div class="month" id="month<?= $m; ?>">
					<table>
						<thead>
							<tr>
								<?php foreach ($date->days as $d): ?>
									<th><?= substr($d,0,3); ?></th>
								<?php endforeach ?>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php $end = end($days); foreach ($days as $d => $w): ?>
								<?php $time = strtotime("$year-$m-$d");?>
								<?php if ($d == 1 and $w != 1): ?>
									<td colspan="<?= $w-1; ?>" class="padding"></td>
								<?php endif ?>
								<td>
									<div class="relative">
										<div class="day"><?= $d; ?></div>
									</div>
									<div class="daytitle">
										<?php switch ($d) {
											case 1:
												$ordinalNb = 'st';
												break;
											case 2:
												$ordinalNb = 'nd';
												break;
											case 3:
												$ordinalNb = 'rd';
												break;
											default:
												$ordinalNb = 'th';
												break;
										} ?>
										<?= $date->days[$w-1]; ?>,<br/><?= $date->months[$m-1]; ?> <?= $d; ?><?= $ordinalNb; ?>
									</div>
									<ul class="events">
										<?php if (isset($events[$time])): foreach ($events[$time] as $event): ?>
											<li><?php  foreach ($event as $infos) : ?><?= $infos; ?><br/><?php endforeach; ?></li>
										<?php endforeach; else : ?>
											<div>No date this day.</div>
										<?php endif; ?>
									</ul>
								</td>
								<?php if ($w == 7): ?>
								</tr><tr>
								<?php endif ?>
							<?php endforeach ?>
							<?php if ($end != 7): ?>
								<td colspan="<?= 7-$end; ?>" class="padding"></td>
							<?php endif ?>
							</tr>
						</tbody>
					</table>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	<footer></footer>
	<script>
		$(document).ready(function(){
	    	$(".rideau_gauche").toggleClass('rideau_gauche_extends');
	    	$(".rideau_droit").toggleClass('rideau_droit_extends');
	    	$(".rideau_gauche,.rideau_droit").on("click", function(){
			    $(".rideau_gauche").toggleClass('rideau_gauche_extends');
			    $(".rideau_droit").toggleClass('rideau_droit_extends');
			});
		});
	</script>
</body>
</html>
