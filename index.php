<?php
$weather_conditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            text-align: center;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #444;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Weather Report</h1>
        <p>
            <?php
            echo "We've seen all kinds of weather this month. At the beginning of the month, we had {$weather_conditions[5]} and {$weather_conditions[6]}. ";
            echo "Then came {$weather_conditions[1]} with a few {$weather_conditions[2]} and some {$weather_conditions[0]}. ";
            echo "At least we didn't get any {$weather_conditions[3]} or {$weather_conditions[4]}.";
            ?>
        </p>
    </div>
</body>
</html>
