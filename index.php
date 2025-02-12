<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Cities</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        h1 {
            color: #007BFF;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .highlight {
            color: #d9534f;
            font-weight: bold;
        }
    </style>
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
