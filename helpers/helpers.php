<?php
//gestion des errors de form avec l insertion html et les classe bootstrap
function display_errors($errors){
    $display = '<ul class="bg-danger">';
    foreach($errors as $error){
        $display .= '<li class="text-danger">'.$error.'</li>';
    }
    $display .= '</ul>';
    return $display;
}


function valide_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
