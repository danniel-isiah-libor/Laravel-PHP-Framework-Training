<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile App</title>
</head>

<body>
    <h1>This is User Profile Page</h1>

    <?php
    echo 'Name: ' . optional($user)->name;
    echo '<br>';
    echo 'Age: ' . optional($user)->age;
    echo '<br>';
    echo 'Email: ' . optional($user)->email;
    ?>
</body>

</html>
