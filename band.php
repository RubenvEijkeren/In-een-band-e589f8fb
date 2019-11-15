<<?php
$arr = array("Citizen of Glass"=>"4.5", "Night"=>"9", "New Eyes"=>"5", "Strange Trails"=>"10");
$bedrag = 0;
echo "Het albumoverzicht:\n";
foreach ($arr as $key => $value) {
	echo $key . " kost €" . $value . "\n";
	$bedrag = $bedrag + $value;
}
$average = $bedrag / count($arr);

echo "Het totaalbedrag van alle albums is €" . $bedrag . "\n";
echo "De gemiddelde prijs van alle albums is €" . $average . "\n";

?>