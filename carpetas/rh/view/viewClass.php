<?php

/**
 * Description of viewClass
 *
 * @author Carlos Barrera
 */
class viewClass {

    /**
     * Method to render the final result (the View)
     * @param string $view Name the template using
     * @param array $args Variables to pass to the view
     */
    static public function renderHTML($view, $args = NULL) {
        if (is_array($args)) {
            extract($args);
        }
        include_once 'templates/' . $view;
    }

}
