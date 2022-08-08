$(document).ready(function(){
    $('.category-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 2,
        prevArrow: '<button type="button" class="article-slider__arrow article-slider__arrowLeft"><img src="img/svg/arrow-l.svg" alt="arrow-l" class="arrow-l" /></button>',
        nextArrow: '<button type="button" class="article-slider__arrow article-slider__arrowRight"><img src="img/svg/arrow-r.svg" alt="arrow-r" class="arrow-r" /></button>'
    });

/*Home Video */
function findVideos() {
    let videos = document.querySelectorAll('.video');

    for (let i = 0; i < videos.length; i++) {
        setupVideo(videos[i]);
    }
}

function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let button = video.querySelector('.video__button');
    let id = parseMediaURL(media);

    video.addEventListener('click', () => {
        let iframe = createIframe(id);

        link.remove();
        button.remove();
        video.appendChild(iframe);
    });

    link.removeAttribute('href');
    video.classList.add('video--enabled');
}

function parseMediaURL(media) {
    let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
    let url = media.src;
    let match = url.match(regexp);

    return match[1];
}

function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
}

function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
}

findVideos();


/*Card count item*/ 
jQuery(function(){
    var j = jQuery; //Just a variable for using jQuery without conflicts
  var addInput = '#qty'; //This is the id of the input you are changing
  var n = 1; //n is equal to 1
  
  //Set default value to n (n = 1)
  j(addInput).val(n);

  //On click add 1 to n
  j('.plus').on('click', function(){
    j(addInput).val(++n);
  })

  j('.min').on('click', function(){
    //If n is bigger or equal to 1 subtract 1 from n
    if (n >= 1) {
      j(addInput).val(--n);
    } else {
      //Otherwise do nothing
    }
  });
 });   



  });