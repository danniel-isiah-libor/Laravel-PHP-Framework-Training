<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Half Pyramid</title>
    <style>
        .pyramid {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div class="pyramid">
        @php
            $rows = 5;
            for ($i = 1; $i <= $rows; $i++) {
                echo str_repeat('&nbsp;', $rows - $i);
                echo str_repeat('* ', $i);
                echo '<br>';
            }
        @endphp
    </div>
</body>

</html>
