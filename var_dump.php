<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var_dump, Multi-line comment</title>
</head>
<body>
    
    <?php 
        $name = 'Trisha Olorvida';
        $age = 20;
        $address = 'NgKing Residence, ADD Street, Sampaloc, Apalit, Pampanga';
        $hobbies = 'Reading, Writing, Watching TikTok';
        $pet_peeve = 'Spoiled brats';

        /* The reason why I hate spoiled brats is because they think that they're all
        so special even tho in reality, they are not. They tend to be selfish and doesn't care
        about the feelings of others as long as it benefits them. */
    ?>

    <h1><?php
        var_dump($name);
        var_dump($age);
        var_dump($address);
        var_dump($hobbies);
        var_dump($pet_peeve);
    ?></h1>

</body>
</html>