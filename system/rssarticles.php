<? function feedArticlesStopgame() {
    $source = 'https://rss.stopgame.ru/rss_frontpage.xml';
    $xml = simplexml_load_file($source);
    foreach ($xml->channel->item as $items) {
            
        echo <<<HTML
        <div class="news_wrap" style="
        display: flex;
        width: 80%;
        flex-direction: column;
        padding: 10px;
        margin: 0 10px 10px;
        text-align: center;
        border-radius: 10px;
        background-color: #bbbbbb">
            <h3 style="
            font-size: calc(0.6rem + 1.1vw);
            padding-bottom: 10px;
            padding-top: 20px">{$items->title}</h3>
            <img src="{$items->enclosure['url']}" alt="{$items->title}" style="
            width: 100%;
            align-self: center;
            object-fit: cover">
            <p style="margin-top: 20px; font-size: calc(10px + 0.4vw);"> Источник: <a href="{$xml->channel->link}">{$xml->channel->link}</a> </p>
            <p>{$items->description} <br><a href="{$items->link}" class="btn btn-primary">Читать далее.</a></p>
        </div>
    

HTML;
    }
}

?>