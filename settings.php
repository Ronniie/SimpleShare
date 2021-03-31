<?php

if($settings_validator !== "True"){
    Header("Location: /");
    die();
}

/* ----------------------- *\

        CONFIGURATION
    PLEASE READ README.txt 
     FOR MORE INFORMATION 
     ABOUT THESE SETTINSG

/* ----------------------- */

return array(
    'directory' => 'NONE', // set to NONE if you are using SimpleShare like i.chaottiic.com/file
    'file_directory' => 'files/', // Set blank if you do not have a files directory.
    'color' => '#5dc560',
    'template_directory' => 'templates/default',
    'url' => 'http://localhost',
    'name' => 'SimpleShare',
    'logo' => 'https://bot.to/wp-content/uploads/2020/10/chaottiic_5f7f3a535f9d0.png',
    'no_image' => 'https://globalimpactnetwork.org/wp-content/themes/globalimpact/images/no-image-found-360x250.png',
    'files' => 'strict', // Set to 'strict' if you want 404, set to 'soft' for any available file.
);


?>