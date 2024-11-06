
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ado Website</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php if (isset($styles)) : ?>
        <?php foreach ($styles as $style) : ?>
            <link rel="stylesheet" href="assets/css/<?= $style ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body>
    <nav id="navbar">
        <a href="" class="logo-link">
            <img src="/assets/img/branding/ado_logo_text.png" alt="" class="logo">
        </a>
        <ul class="nav-links">
            <li class="nav-link"><a href="discography.php">Discography</a>
                <button onclick="showMore(this)" class="show-more-btn">
                    <img src="assets/img/icons/arrow_forward.svg" alt="" class="show-more-icon">
                </button>
                <div class="dropdown-submenu">
                    <ul>
                        <li><a href="discography.php?id=kyougen">Kyougen</a></li>
                        <li><a href="discography.php?id=utanouta">Uta no Uta</a></li>
                        <li><a href="discography.php?id=utattemita">Utattemita</a></li>
                        <li><a href="discography.php?id=zanmu">Zanmu</a></li>
                        <li><a href="discography.php?id=singles">Singles</a></li>
                        <li><a href="discography.php?id=covers">Covers</a></li>
                        <li><a href="discography.php?id=live">Live</a></li>
                        <li><a href="discography.php?id=rest">Rest</a></li>
                        <li><a href="discography.php">All</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-link"><a href="merch.php">Merch</a>
                <button onclick="showMore(this)" class="show-more-btn">
                    <img src="assets/img/icons/arrow_forward.svg" alt="" class="show-more-icon">
                </button>
                <div class="dropdown-submenu merch">
                    <ul>
                        <?php
                        foreach ($merchInfo as $info) :
                        ?>
                            <li><a href="merch.php"><?= $info['title'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>
            <li class="nav-link"><a href="trending.php">Trending</a>
                <button onclick="showMore(this)" class="show-more-btn">
                    <img src="assets/img/icons/arrow_forward.svg" alt="" class="show-more-icon">
                </button>
                <div class="dropdown-submenu">
                    <ul>
                        <li><a href="news.php">News</a></li>
                        <li><a href="blogs.php">Blogs</a></li>
                        <li><a href="halloffame.php">Hall Of Fame</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="nav-links">
            <li>
                <button onclick="contactTheDev()">
                    Contact the dev!
                </button>
            </li>
            <li>FAQ</li>
        </ul>
    </nav>