<? 

function sliderNewsPlayground() {
    $source = 'https://www.playground.ru/rss/news.xml';
    $xml = simplexml_load_file($source);
    $k=0;

    echo "<div class='slider'>";

    for ($j = 0; $j < 4; $j++) {
            
        echo "<div class='item'>";

for ($i = $k; $i < $k+5; $i++) {

    echo <<<HTML
    <a href="{$xml->channel->item[$i]->link}" class="slider_news_{$i} slider_news" style="background-image: url({$xml->channel->item[$i]->enclosure['url']});
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    text-decoration: none;
    color: white;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 20px">
        <h3 style="z-index:3">{$xml->channel->item[$i]->title}</h3>
    </a>
        
HTML;

}
echo <<<HTML
</div>
<a class="previous button" onclick="stopTimer(); previousSlide()">&#10094;</a>
<a class="next button" onclick="stopTimer(); nextSlide()">&#10095;</a>
HTML;
$k += 5;
	        }
            echo "</div>";
}

function feedNewsCubiq() {
    $source = array('https://cubiq.ru/tag/shutery/feed/', 'https://cubiq.ru/tag/rpg/feed/', 'https://cubiq.ru/tag/strategii/feed/',
    'https://cubiq.ru/tag/mmo/feed/', 'https://cubiq.ru/tag/rts/feed/', 'https://cubiq.ru/tag/indi/feed/');
    $categoriesId = array('shutery', 'rpg', 'strategii', 'mmo', 'rts', 'indi');

    for ($j = 1; $j <= 6; $j++) {
        $xml = simplexml_load_file($source[$j-1]);
        $catId = $categoriesId[$j-1];

        echo <<<HTML
        <div class="cubiq_news unactive" id="$catId">
HTML;

foreach ($xml->channel->item as $items) {
            
    echo <<<HTML
    <div class="cubiq_news_wrap" style="
    padding: 20px;
    text-align: center;
    background-color: #bbbbbb;">
        <h3 style="
        font-size: calc(0.4rem + 1rem);
        padding-bottom: 10px">{$items->title}</h3>
        <img src="{$items->enclosure['url']}" alt="{$items->title}" style="
        width: 100%;
        object-fit: cover">
        <p>{$items->description} <a href="{$items->link}">Подробнее</a></p>
        <p style="margin-top: 20px; font-size: calc(10px + 0.4vw);"> Источник: <a href="{$xml->channel->link}">{$xml->channel->link}</a> </p>
    </div>
HTML;
}

echo <<<HTML
        </div>
HTML;
    }
}

function feedReviewsStopgame() {
    $source = 'https://rss.stopgame.ru/rss_review.xml';
    $xml = simplexml_load_file($source);
    foreach ($xml->channel->item as $items) {
            
        echo <<<HTML
        <div class="news-wrap" style="
        display: flex;
        flex-direction: column;
        padding: 20px;
        margin: 0 auto 10px;
        text-align: center;
        background-color: #bbbbbb">
            <h3 style="
            font-size: calc(0.4rem + 1rem);
            padding-bottom: 10px">{$items->title}</h3>
            <img src="{$items->enclosure['url']}" alt="{$items->title}" style="
            width: 100%;
            object-fit: cover">
            <p>{$items->description} <a href="{$items->link}">Подробнее</a></p>
            <p style="margin-top: 20px"> Источник: <a href="{$xml->channel->link}">{$xml->channel->link}</a> </p>
        </div>
    

HTML;
    }

}

?>