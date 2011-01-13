<?php 
/**
 * PHP versions 4 and 5
 *
 * Custom Layouts Component: A component that introduces a new convention for CakePHP layout files
 * Copyright 2007-2008, Creative Park Srl
 *                      Borgo Acquileia, 3/f
 *                      33057 Palmanova (UD) Italia
 *                      http://www.creativepark.it/
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 */

class CustomLayoutsComponent extends Object {

    function initialize(&$controller) {
        $action = Inflector::underscore($controller->action);
        $name = Inflector::underscore($controller->name);
        $file = LAYOUTS . $name . DS . $action . $controller->ext;
        if (file_exists($file)) {
            $controller->layout = $action;
            $controller->layoutPath = $name;
        } else {
            $file = LAYOUTS . $name . $controller->ext;
            if (file_exists($file)) {
                $controller->layout = $name;
                $controller->layoutPath = NULL;
            }
        }         
    }

}
?>