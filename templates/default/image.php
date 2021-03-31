<?php
if($settings_validator !== "True"){
    Header("Location: /");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $settings['name']; ?> | <?php echo $id; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <style>
/*

STYLE MADE BY Severingcastle8#8743 (Thank you)

*/

@import url('https://fonts.googleapis.com/css?family=Questrial|Didact+Gothic|Assistant');
@import url('https://fonts.googleapis.com/css?family=Roboto');

/*GENERAL CSS*/


body, html {background-color: #171717; margin: 0; height: 100%; width: 100%; font-family: 'Montserrat', 'Halvetica', 'Arial', sans-serif; overflow-x: hidden !important}
.centered {text-align: center; font-size: 0;}
.centered > div {float: none; display: inline-block; text-align: left; font-size: 13px;}
.container-fluid {margin-left: 395px; margin-right: 395px;}
a, a:hover, a:focus, a:active, a.active {outline: none; text-decoration: none;}
a {color: <?php echo $settings['color']; ?>;}
a:hover, a:focus, a:active, a.active {color: <?php echo $settings['color']; ?>;}


/* NAVBAR CSS */

.navbar-default {height: 80px; background-color: #222222; border: 0;}
.navbar-default .navbar-brand {font-size: 50px; font-weight: bold; text-align: center; padding-top: 30px; padding-bottom: 26px; color: <?php echo $settings['color']; ?>;}
.navbar-default .navbar-brand:hover, .navbar-brand:focus {color: <?php echo $settings['color']; ?>;}
.navbar-default .navbar-brand img {margin-top: -5px; width: 155px;}
.navbar-default .navbar-nav li {margin-top: 17px;}
.navbar-default .navbar-nav li a {font-size: 18px; color: #fff; transition: .3s ease-in-out; -webkit-transition: .3s ease-in-out;}
.navbar-default .navbar-nav li a:hover {color: <?php echo $settings['color']; ?>;}
.navbar-default .navbar-nav li .active {color: <?php echo $settings['color']; ?>;}

/* MAIN CSS */

#img {width: 100%;}
#img img {transition: 1s; display: block; margin-left: auto; margin-right: auto;}
#img img:hover {-webkit-transform:scale(1.06); transform: scale(1.06); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 10px 30px 0 rgba(0, 0, 0, 0.19);}

#info {color: white;}
#info .card {transition: 1s;}
#info .card:hover {-webkit-transform:scale(1.06); transform: scale(1.06); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7), 0 10px 30px 0 rgba(0, 0, 0, 0.19);}
#info .card > .header {color: white; font-size: 25px; background-color: <?php echo $settings['color']; ?>; width: 100%; padding: 15px; text-align: center; font-weight: 600;}
#info .card > .body {color: white; font-size: 20px; background-color: #222222; width: 100%; padding: 15px;}
#info .card > .body > .img-info > .item {color: white; }
#info .card > .body > .img-info > .item > span {border-left: 3px solid <?php echo $settings['color']; ?>; padding-left: 7.5px; color: <?php echo $settings['color']; ?>; font-weight: 400;}
#info .card > .body > .view {background-color: transparent; border: 1px solid <?php echo $settings['color']; ?>; padding: 5px; display: block; text-align: center; width: 50%; color: white; margin-left: auto; margin-right: auto; transition: 1s; margin-top: 30px;}
#info .card > .body > .view:hover {background-color: <?php echo $settings['color']; ?>; width: 75%;}

/* MODAL CSS */

.modal-xl {width: 90%;}
.modal-header {color: white; font-size: 25px; background-color: #222222; text-align: center; border: 0; border-bottom: 4px solid #333;}
.modal-header > .modal-title {font-size: 25px;}
.modal-body {color: white; background-color: #1a1a1a; border: 0; border-bottom: 4px solid #333;}
.modal-body > img {width: 50%; height: 50%; display: block; margin-left: auto; margin-right: auto;}

/* FOOTER CSS */

#footer {margin-top: 10px;}
#footer .body {background-color: #222222; border-top: 4px solid #333333;}

/* SCROLL BAR */

::-webkit-scrollbar {width: 6px;}
::-webkit-scrollbar-track {-webkit-border-radius: 10px; border-radius: 10px;}
::-webkit-scrollbar-thumb {-webkit-border-radius: 10px; border-radius: 0px; background: <?php echo $settings['color']; ?>;}
::-webkit-scrollbar-thumb:window-inactive {background: <?php echo $settings['color']; ?>;}

/* HIGHTLIGHT COLOR */

::selection {background: <?php echo $settings['color']; ?>; color: white;}
::-moz-selection {background: <?php echo $settings['color']; ?>; color: white;}

@media only screen and (max-width: 767px), only screen and (max-device-width: 767px) {
    .navbar-collapse {margin-top: 15px; background-color: #222; border: 0;}
    .navbar-header button {margin-top: 25px; border: none; color: #fff !important;}
    .navbar-header button .icon-bar {background-color: #fff !important;}
}
    </style>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $id; ?>">
    <meta name="twitter:image" content="<?php echo $settings['url']; ?>/files/<?php echo $id; ?>.<?php echo $extensions; ?>">

    <meta property="og:type" content="article">
    <meta property="og:site_name" value="<?php echo $settings['name']; ?>">
    <meta property="og:title" content="<?php echo $id; ?>" />
    <meta property="og:url" content="<?php echo $settings['url']; ?>" />
    <meta property="og:image" content="<?php echo $settings['url']; ?>/files/<?php echo $id; ?>.<?php echo $extensions; ?>" />
    <meta property="og:image:url" content="<?php echo $settings['url']; ?>/files/<?php echo $id; ?>.<?php echo $extensions; ?>" />



    <meta name="theme-color" content="<?php echo $settings['color']; ?>">
    <meta name="msapplication-TileColor" content="<?php echo $settings['color']; ?>">
</head>
<body>
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $settings['url']; ?>">Home</a></li>
                <li><a class="active" href="<?php echo $settings['url']; ?>/files/<?php echo $id; ?>.<?php echo $extensions; ?>">Open Original</a></li>
            </ul>
        </div>
    </div>
</div>



<div style="height: 100px"></div>
<div id="home">
    <div class="container">
        <div class="col-md-8">
            <div id="img">
                <img type="button" style='width:100%' data-toggle="modal" data-target="#exampleModalCenter" src="<?php echo $settings['url']; ?>/files/<?php echo $id; ?>.<?php echo $extensions; ?>">
            </div>
        </div>
        <div class="col-md-4" id="info">
            <div class="card">
                <div class="header"><?php echo $id; ?></div>
                <div class="body">
                    <div class="img-info">
                        <div class="item"><span>File Name:</span> <?php echo $id; ?></div>
                        <div class="item"><span>Uploaded:</span> <?php echo $file_time; ?></div>
                        <div class="item"><span>File Size:</span> <?php echo $file_size; ?></div>
                        <div class="item"><span>File Type:</span> <?php echo $extensions; ?></div>
                    </div>
                    <a href="<?php echo $settings['url']; ?>/files/<?php echo $id; ?>.<?php echo $extensions; ?>" class="view">Open Original</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $id; ?></h5>
            </div>
            <div class="modal-body">
                    <img src="<?php echo $settings['url']; ?>/files/<?php echo $id; ?>.<?php echo $extensions; ?>">
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>