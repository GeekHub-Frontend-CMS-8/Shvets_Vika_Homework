<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="<?= bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link href="<?= bloginfo('template_directory'); ?>/css/nav.css" rel="stylesheet">
    <link href="<?= bloginfo('template_directory'); ?>/css/gallery.css" rel="stylesheet">
    <link href="<?= bloginfo('template_directory'); ?>/css/index.css" rel="stylesheet">
    <link href="<?= bloginfo('template_directory'); ?>/css/blog.css" rel="stylesheet">
    <link href="<?= bloginfo('template_directory'); ?>/css/post.css" rel="stylesheet">
    <link href="<?= bloginfo('template_directory'); ?>/css/portfolio.css" rel="stylesheet">
    <link href="<?= bloginfo('template_directory'); ?>/css/footer.css" rel="stylesheet">
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/script.js"></script>

    <title><?php
        $text = get_the_title();
        echo $text;
        ?></title>
</head>
<body>

<header class="header">
    <div class="container posit">
        <a class="logo " href="#"><img src="<?php echo S_IMG_DIR; ?>/logo.png" alt="logo"></a>
        <nav>
            <div class="button-nav">
                <button class="togl">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="menu" id="cont">
                    <ul class="navigation">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Portfolio
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Fashional</a>
                                <a class="dropdown-item" href="#">Editorial</a>
                                <a class="dropdown-item" href="#">Street</a>
                                <a class="dropdown-item" href="#">Black White</a>
                                <a class="dropdown-item" href="#">Personal</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="social top">
                <ul>
                    <li><a href="#" class="ihover"><i class="fab fa-facebook-f"></i> </a></li>
                    <li><a href="#" class="ihover"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="ihover"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="ihover"><i class="far fa-envelope"></i></a></li>
                    <li><a href="#" class="ihover"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#" class="ihover"><i class="fab fa-flickr"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>

</header>
