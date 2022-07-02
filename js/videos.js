function videosChecked() {
    let videos1 = document.querySelector('#videos_news_1');
    let videos2 = document.querySelector('#videos_news_2');

    let videosList1 = document.querySelector('#videos_list_1');
    let videosList2 = document.querySelector('#videos_list_2');

    videos1.classList.remove('unactive');
    videosList1.classList.add('active');


    videosList1.onclick = function() {
        if (videos1.classList.contains('unactive')) {
            videos1.classList.remove('unactive');
        }
        if(videos2.classList.contains('unactive') == false) {
            videos2.classList.add('unactive');
        }
        if(videosList1.classList.contains('active') == false) {
            videosList1.classList.add('active');
        }
        if(videosList2.classList.contains('active')) {
            videosList2.classList.remove('active');
        }
    };

    videosList2.onclick = function() {
        if (videos2.classList.contains('unactive')) {
            videos2.classList.remove('unactive');
        }
        if(videos1.classList.contains('unactive') == false) {
            videos1.classList.add('unactive');
        }
        if(videosList2.classList.contains('active') == false) {
            videosList2.classList.add('active');
        }
        if(videosList1.classList.contains('active')) {
            videosList1.classList.remove('active');
        }
    };
}

document.addEventListener("DOMContentLoaded", videosChecked);
