<!-- a. Develop a PHP program (with HTML/CSS) to keep track of the number of visitors visiting the web page and to display this count of visitors, with relevant headings. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Visitor Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        
        .container {
            max-width: 600px;
            margin: auto;
            text-align: center;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px;
        }
        
        h1 {
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Our Website</h1>
        <div class="counter">
            <?php
            $counterFile = 'visitor_count.txt';

            if (file_exists($counterFile)) {
                $count = (int)file_get_contents($counterFile);
            } else {
                $count = 0;
            }

            $count++;

            file_put_contents($counterFile, $count);

            echo "<h2>Visitor Count</h2>";
            echo "<p>You are visitor number: $count</p>";
            ?>
        </div>
    </div>
</body>

</html>
