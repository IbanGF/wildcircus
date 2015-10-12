<?php 
class Date{

	var $days 	= array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
	var $months = array('January','February','March','April','May','June','July','August','September','October','November','December');

	function getAll($year){
		$return = array();
		$date = new DateTime($year.'-01-01');
		while ($date->format('Y') <= $year) {
			$y = $date->format('Y');
			$m = $date->format('n');
			$d = $date->format('j');
			$w = str_replace('0','7', $date->format('w'));
			$return[$y][$m][$d] = $w;
			$date->add(new DateInterval('P1D'));
		}
		return $return;
	}

	function getEvents($year, $country="", $city="") {
		global $DB;
		$sql = 'SELECT id,country,city,place,date FROM dates WHERE YEAR(date)='.$year;
		if (!empty($country)) {
			$sql .=' AND country="'.$country.'"';
			if (!empty($city)) {
				$sql .=' AND city="'.$city.'"';
			}
		}
		$req = $DB->query($sql);
		$return = array();
		while ($donnees = $req->fetch()) {
			$return[strtotime($donnees->date)][$donnees->id] = [$donnees->country,$donnees->city,$donnees->place];
		}
		return $return;
	}

	function getEventsCountrys($year){
		global $DB;
		$req = $DB->query('SELECT distinct country FROM dates WHERE YEAR(date)='.$year);
		$return = array();
		while ($donnees = $req->fetch()) {
			$return[] = $donnees->country;
		}
		return $return;
	}

	function getEventsCitys($year, $country){
		global $DB;
		$req = $DB->query('SELECT distinct city FROM dates WHERE YEAR(date)="'.$year.'" AND country="'.$country.'"');
		$return = array();
		while ($donnees = $req->fetch()) {
			$return[] = $donnees->city;
		}
		return $return;
	}
}
?>