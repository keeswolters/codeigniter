<?php

echo '<h2>'.$news_item['title'].'</h2>';
echo '<p>';
echo $news_item['text'];
echo '</p>';

echo  '<div id="code"> data object: '.json_encode($news_item).'</div>';

echo '<p><a href="/codeigniter/news"> Back</a></p>';
