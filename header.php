<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?php echo $desc; ?>">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title><?php echo $title; ?></title>
</head>
<body>

<header id="testata">
    <div class="container">
        <div class="flex-content">
            <div id="logo">
                <a href="index.php">Funzioni PHP</a>
            </div>
            <div class="box-menu">
                <nav id="menu-principale">
                    <ul>
                        <li <?php echo $menu=='home'?'class="attivo"':''; ?>>
                            <a href="index.php">Array</a>
                        </li>
                        <li <?php echo $menu=='stringhe'?'class="attivo"':''; ?>>
                            <a href="stringhe.php">Stringhe</a>
                        </li>
                        <li <?php echo $menu=='funzioni'?'class="attivo"':''; ?>>
                            <a href="funzioni.php">Funzioni</a>
                        </li>
                        <li <?php echo $menu=='lotteria'?'class="attivo"':''; ?>>
                            <a href="lotteria.php">Lotteria</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>