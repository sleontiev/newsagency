<?php
    function newsItem($news_item_text, $href, $link, $news_time, $news_comments_count){
            echo '<div class="news-item">';
                echo '<div class="news-item-text">';
                    echo $news_item_text;
                echo '</div>';
                echo '<div class="news-item-props">';
                    echo "<a href='$href'>$link</a>";
                    echo "<div class='news-time'>$news_time</div>";
                    echo "<div class='news-comments-count'>$news_comments_count</div>";
                echo '</div>';
            echo '</div>';
    }
?>