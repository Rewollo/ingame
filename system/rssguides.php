<?

function feedGuidesPlayground() {
    $source = array('https://rss.stopgame.ru/rss_tactics.xml', 'https://rss.stopgame.ru/rss_sols.xml');
    for ($i = 1; $i < 3; $i++) {
        $xml = simplexml_load_file($source[$i-1]);
            foreach ($xml->channel->item as $items) {
            
                echo <<<HTML
                <div class="news_wrap" style="
                    display: flex;
                    align-items: stretch;
                    padding: 30px;
                    margin: 0 auto;
                    margin-top: 0;
                    width: 75vw;
                    background-color: #e4e4e4">
                    
                    <img src="{$items->enclosure['url']}" alt="{$items->title}" style="
                    width: 40%;
                    border-radius: 10px 0 0 10px;
                    object-fit: cover">
                    <div class="info_wrap"style="
                    display: flex;
                    flex-direction: column;
                    padding: 10px;
                    margin-top: 0;
                    text-align: center;
                    background-color: #bbbbbb;
                    border-radius: 0 10px 10px 0">
                        <h3 style="
                        font-size: calc(0.5rem + 1vw);
                        padding: 10px">{$items->title}</h3>
                        <p>{$items->description} <br><a href="{$items->link}" class="btn btn-primary"> Читать далее. </a></p>
                        <p style="margin-top: 20px; font-size: calc(10px + 0.4vw);"> Источник: <a href="{$xml->channel->link}">{$xml->channel->link}</a> </p>
                    </div>
                </div>
HTML;
            }

    }
}

?>