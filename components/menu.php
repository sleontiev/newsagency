<?php
    function drawMenu($arr, $rotate=false){
        if($rotate)
            $style = ' style="display: inline"';
        echo '<ul>';
            foreach($arr as $item){
                echo "<li$style>";
                    echo "<a href='{$item['href']}'>{$item['link']}</a>";
                echo "</li>";
            }
        echo '</ul>';
    }
?>

