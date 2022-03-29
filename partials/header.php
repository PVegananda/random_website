<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- LINK SIDEBAR JS AND CSS -->
    <link rel="stylesheet" href="css/sidebars.css" type="text/css">

    <!-- LINK DYNAMIC CSS AND JS -->
    <script src="js/sidebars.js" type="text/javascript"></script>

    <?php
    // FOR JAVASCRIPT FILES
    $js = '';
    $handle = '';
    $file = '';
    // open the "js" directory
    if ($handle = opendir('js')) {
        // list directory contents
        while (false !== ($file = readdir($handle))) {
            // only grab file names
            if (is_file('js/' . $file)) {
                // insert HTML code for loading Javascript files
                $js .= '<script src="js/' . $file . '" type="text/javascript"></script>' . "\n";
            }
        }
        closedir($handle);
        echo $js;
    }
 
    // FOR CSS FILES
    $css = '';
    $handle = '';
    $file = '';
    // open the "css" directory
    if ($handle = opendir('css')) {
        // list directory contents
        while (false !== ($file = readdir($handle))) {
            // only grab file names
            if (is_file('css/' . $file)) {
                // insert HTML code for loading Javascript files
                $css .= '<link rel="stylesheet" href="css/' . $file .
                    '" type="text/css" media="all" />' . "\n";
            }
        }
        closedir($handle);
        echo $css;
    }
    ?>
    <!-- LINK DYNAMIC CSS AND JS -->

    
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</head>

<body>

<!-- HEADER -->
<?php include('partials/sidebars.php'); ?>
<!-- HEADER -->

   
<!-- SIDEBAR END -->
