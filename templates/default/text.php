<?php
if($settings_validator !== "True"){
    Header("Location: /");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $settings['name']; ?> | <?php echo $id; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">

    <meta name="twitter:card" value="summary">
    <meta name="twitter:site_name" value="<?php echo $settings['name']; ?>">
    <meta name="twitter:title" content="<?php echo $id; ?>">
    <meta name="twitter:image" content="<?php echo $settings['logo']; ?>">
    <meta name="twitter:description" content="<?php echo file_get_contents($file, FALSE, NULL, 0, 140); ?>">

    <meta property="og:site_name" value="<?php echo $settings['name']; ?>">
    <meta property="og:title" content="<?php echo $id; ?>" />
    <meta property="og:url" content="<?php echo $settings['url']; ?>" />
    <meta property="og:description" content="<?php echo file_get_contents($file, FALSE, NULL, 0, 140); ?>">
    <meta property="og:image" content="<?php echo $settings['logo']; ?>" />


    <meta name="theme-color" content="<?php echo $settings['color']; ?>">
    <meta name="msapplication-TileColor" content="<?php echo $settings['color']; ?>">

    <style>
        :root { 
            --theme-color: <?php echo $settings['color']; ?>;
        }
    </style>
    <link rel="stylesheet" href="../css/styles.css">
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
            <div id="img" >

                <textarea rows="30" cols="90" style="font-family:monospace;" disabled><?php echo file_get_contents($file); ?></textarea>


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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>