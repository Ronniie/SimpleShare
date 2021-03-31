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
    <title><?php echo $settings['name']; ?></title>
    <meta name="theme-color" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    
    <meta name="twitter:card" value="summary">
    <meta name="twitter:site_name" value="<?php echo $settings['name']; ?>">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:image" content="<?php echo $settings['logo']; ?>">
    <meta name="twitter:description" content=" ">

    <meta property="og:site_name" value="<?php echo $settings['name']; ?> | Home">
    <meta property="og:title" content="Home" />
    <meta property="og:url" content="<?php echo $settings['url']; ?>" />
    <meta property="og:description" content=" ">
    <meta property="og:image" content="<?php echo $settings['logo']; ?>" />


    <meta name="theme-color" content="<?php echo $settings['color']; ?>">
    <meta name="msapplication-TileColor" content="<?php echo $settings['color']; ?>">

    <style>
        :root { 
            --theme-color: <?php echo $settings['color']; ?>;
        }
    </style>
    <link rel="stylesheet" href="css/styles.css">

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
                <li><a class="active" href="<?php echo $settings['url']; ?>">Home</a></li>
            </ul>
        </div>
    </div>
</div>

        <div style="height: 100px"></div>
        <div id="home">
            <div class="container">
                <div class="col-md-8">
                    <div id="img">
                        <img type="button" data-toggle="modal" data-target="#exampleModalCenter" src="<?php echo $settings['no_image']; ?>">
                    </div>
                </div>
                <div class="col-md-4" id="info">
                    <div class="card">
                        <div class="header">Image Information</div>
                        <div class="body">
                            <div class="img-info">
                                <div class="item"><span>File Name:</span> N/A</div>
                                <div class="item"><span>Uploaded:</span> N/A</div>
                                <div class="item"><span>File Size:</span> N/A</div>
                                <div class="item"><span>File Type:</span> N/A</div>
                            </div>
                            <a href="<?php echo $settings['no_image']; ?>" class="view">Open Original</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Home</h5>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo $settings['no_image']; ?>">
                    </div>
                </div>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>