<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membuat Website dengan PHP</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<header>
    <h1 class="title">Belajar CSS</h1>
    <h3 class="desc">Membuat Website dengan PHP dari Awal</h3>

    <nav id="navigation">
        <ul>
            <li><a href="home.php?page=home">Home</a></li>
            <li><a href="about.php?page=about">About</a></li>
            <li><a href="contact.php?page=contact">Contact</a></li>
        </ul>
    </nav>
</header>

<div id="contents">
    <?php
    if (isset($_GET['page'])) {

        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                include 'home.php';
                break;

            case 'about':
                include 'about.php';
                break;

            case 'contact':
                include 'contact.php';
                break;
        }

    } else {

        include 'home.php';

    }
    ?>
</div>

<footer>
    &copy; Maulana 2024
</footer>

</body>
</html>