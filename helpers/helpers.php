<?php
//gestion des errors de form avec l insertion html et les classe bootstrap
function display_errors($errors){
    $display = '<ul class="bg-danger">';
    foreach($errors as $error){
        $display .= '<li class="danger">'.$error.'</li>';
    }
    $display .= '</ul>';
    return $display;
}