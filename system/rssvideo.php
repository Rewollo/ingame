<?
function feedVideosStopgame() {
    $source = array('https://rss.stopgame.ru/rss_vpreview.xml', 'https://rss.stopgame.ru/rss_vreview.xml');
    for ($i = 1; $i < 3; $i++) {
        $xml = simplexml_load_file($source[$i-1]);
        echo <<<HTML
        <div class="videos_news unactive" id="videos_news_$i">
HTML;

foreach ($xml->channel->item as $items) {
            
    echo <<<HTML
    <div class="news_wrap" style="
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 10px;
        margin: 5px;
        margin-top: 0;
        text-align: center;
        background-color: #bbbbbb">
        <img src="{$items->enclosure['url']}" alt="{$items->title}" style="
        width: 100%;
        object-fit: cover;
        border-radius: 10px">
        <h3 style="
        font-size: calc(0.5rem + 1vw);
        padding: 10px">{$items->title}</h3>
        <p>{$items->description}</p>
        <p style="margin-top: 20px; font-size: calc(10px + 0.4vw);"> Источник: <a href="{$xml->channel->link}">{$xml->channel->link}</a> </p>
        <a href="{$items->link}" class="btn btn-primary">Подробнее</a>
    </div>
HTML;
}

echo <<<HTML
        </div>
HTML;

    }
}
?>