<?php
$cities = [
    "Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", 
    "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"
];

echo implode(", ", $cities) . "<br><br>";

sort($cities);
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";

$cities = array_merge($cities, ["Los Angeles", "Calcutta", "Osaka", "Beijing"]);

sort($cities);
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";
?>
