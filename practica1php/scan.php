<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($handle = opendir('files')) {

    echo '<div>';
    echo '<div style="margin:0 auto">';
    echo '<ul>';
    echo'<h3>Ficheros en servidor</h3>';

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<li>$entry</li>";
        }
    }

    closedir($handle);
    echo '</ul>';
    echo '</div>';
    echo '</div>';
}

