require('./bootstrap');

require('alpinejs');

//if one cideo is playing other will be  pause
window.addEventListener("load", function (event) {
    document.querySelectorAll("#inlineVideo").forEach((el) => {
      el.onplay = function (e) {
        // pause all the videos except the current.
        document.querySelectorAll("#inlineVideo").forEach((el1) => {
          if (el === el1) el1.play();
          else el1.pause();
        });
      };
    });
  });
  
  //Current year
  const date = new Date();
  const year = date.getFullYear();
  document.getElementById("year").innerHTML = year;
  
  //Initialize aos
  AOS.init({
    duration: 400,
    easing: "ease-in-quad",
  });

//load-more

    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            window.livewire.emit('load-more');
        }
    };
