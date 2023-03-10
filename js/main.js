(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
    
    const seats = document.querySelectorAll(".seat");
const popup = document.querySelector(".popup");
const confirmButton = document.querySelector("#confirm-button");
const cancelButton = document.querySelector("#cancel-button");
let selectedSeat = null;
let confirmed = false;

seats.forEach((seat) => {
  seat.addEventListener("click", () => {
    if (seat.classList.contains("booked")) {
      return;
    }

    if (selectedSeat !== null && selectedSeat === seat) {
      popup.style.display = "flex";
    } else {
      seat.classList.remove("available");
      seat.classList.add("selected");
   
      selectedSeat = seat;
    }
  });

  seat.addEventListener("lclick", () => {
    if (seat.classList.contains("booked")) {
      return;
    }

    seat.classList.remove("selected");
    seat.classList.add("available");
    seat.innerText = "";
    selectedSeat = null;
  });
});

confirmButton.addEventListener("click", () => {
  selectedSeat.classList.remove("selected");
  selectedSeat.classList.add("booked");
 /* selectedSeat.innerText = "???? ?????t";*/
  selectedSeat = null;
  popup.style.display = "none";
});

cancelButton.addEventListener("click", () => {
  if (!confirmed && selectedSeat) {
    selectedSeat.style.backgroundColor = ""; // reset color
    selectedSeat.classList.remove("selected");
    selectedSeat.classList.remove("booked");
    selectedSeat.classList.add("available");
    selectedSeat = null;
  }
  popup.style.display = "none";
  confirmed = false;
  selectedSeat.innerText = ""; // remove the text
});


const form = document.getElementById('contact-form');
  form.addEventListener('submit', (event) => {
    event.preventDefault(); // Ng??n ch???n form g???i ??i m???c ?????nh

    // Ki???m tra xem t???t c??? c??c tr?????ng ???? nh???p ?????y ?????
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    if (name === '' || email === '' || subject === '' || message === '') {
      alert('Vui l??ng nh???p ?????y ????? th??ng tin!');
    } else {
      // N???u t???t c??? c??c tr?????ng ???? nh???p ?????y ?????, g???i form
      // Th???c hi???n x??? l?? g???i form ??? ????y (v?? d???: s??? d???ng Ajax ????? g???i form)
      // Sau khi g???i th??nh c??ng, hi???n th??? th??ng b??o ???? g???i
      alert('???? g???i th??nh c??ng!');
      form.reset(); // Reset form sau khi ???? g???i th??nh c??ng
    }
  });


})(jQuery);

