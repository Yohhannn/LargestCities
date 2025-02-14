<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Cities</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Largest Cities</h2>
        <ul>
            <?php
                $cities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
                sort($cities);
                foreach ($cities as $city) {
                    echo "<li>$city</li>";
                }
            ?>
        </ul>

        <h2>Expanded Cities</h2>
        <ul>
            <?php
                $newCities = ["Los Angeles", "Calcutta", "Osaka", "Beijing"];
                array_push($cities, ...$newCities);
                sort($cities);
                foreach ($cities as $city) {
                    $class = in_array($city, $newCities) ? 'highlight' : '';
                    echo "<li class='$class'>$city</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
