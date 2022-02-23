<?php

if (isset($view) || isset($file)):

    if (isset($view)) { // view file

        require '../templates/header.php';
        
        require '../views/' . $view . '.view.php';

        require '../templates/footer.php';

    } elseif (file_exists($file)) { // normal file

        require $file;

    } else {

        $view = 'notFound';

        require '../templates/header.php';
        
        require '../views/' . $view . '.view.php';

        require '../templates/footer.php';

    }

else:
    
    throw new Exception('Define $file or $view variable to open it!');

endif;


/* this is the idea of render.php file.
 * this file take a variable called $view
 * that contains the name of view we want to render
 * then req templates files and the view inside of them
 */

// require 'templates/header.php';
        
// require 'views/' . $view . '.view.php';

// require 'templates/footer.php';