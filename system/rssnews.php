<? function feedNewsPlayground() {
    $source = 'https://www.playground.ru/rss/news.xml';
    $xml = simplexml_load_file($source);
    foreach ($xml->channel->item as $items) {
            
        echo <<<HTML
        <div class="news_wrap" style="
        display: flex;
        max-width: 31%;
        flex-direction: column;
        justify-content: space-between;
        padding: 10px;
        margin: 0 10px 10px;
        text-align: center;
        border-radius: 10px;
        background-color: #bbbbbb">
            <img src="{$items->enclosure['url']}" alt="{$items->title}" style="
            width: 100%;
            object-fit: cover">
            <h3 style="
            font-size: calc(0.5rem + 1vw);
            padding-bottom: 10px">{$items->title}</h3>
            <p>{$items->description}</p>
            <p style="margin-top: 20px; font-size: calc(10px + 0.4vw);"> Источник: <a href="{$xml->channel->link}">{$xml->channel->link}</a> </p>
            <a href="{$items->link}" class="btn btn-primary">Подробнее</a>
        </div>
    

HTML;
    }
}

?>