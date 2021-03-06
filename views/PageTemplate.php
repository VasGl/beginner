<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="lib/style.css">

    <title>
        <?= $title ?>
    </title>
</head>
<body>

<header>
    <h1>
        <a href="index.php">BEGINNER. ПРАКТИКА</a>
    </h1>
</header>

<nav>
    <div class="nav">

        <ul>
            <li><a href="lesson1.php" class="<?= $active1 ?>">Урок 1</a></li>
            <li><a href="lesson2.php" class="<?= $active2 ?>">Урок 2</a></li>
            <li><a href="lesson3.php" class="<?= $active3 ?>">Урок 3</a></li>
        </ul>
    </div>

</nav>

<main>
    <?php
    require_once "views/$main";
    ?>
</main>


<footer>
    <h5>footer</h5>
</footer>

</body>
</html>