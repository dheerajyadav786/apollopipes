//  $(function() {

//   $('[data-toggle="modal"]').hover(function() {
//     var modalId = $(this).data('target');
//     $(modalId).modal('show');
//   });

// });


// $(document).ready(function(){ 
//     $('.tab-a').click(function(){  
//       $(".tab").removeClass('tab-active');
//       $(".tab[data-id='"+$(this).attr('data-id')+"']").addClass("tab-active");
//       $(".tab-a").removeClass('active-a');
//       $(this).parent().find(".tab-a").addClass('active-a');
//      });
// });
  $(document).ready(function(){
        $('.clickme a').click(function(){
            $('.clickme a').removeClass('activelink');
            $(this).addClass('activelink');
            var tagid = $(this).data('tag');
            $('.list').removeClass('active').addClass('hide');
            $('#'+tagid).addClass('active').removeClass('hide');
        });
    });




//////////accordian////////////////////////

    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });

/////////End Acordian/////////////////////

$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});





////////// Model Image

let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });


///////// End Model Image









 $(document).ready(function(){
    $('.customer-logos').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
    nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 1
      }
    }]
    });
  });





 ////////////news media slider start/////////////

$(document).ready(function(){
  $('.your-class').slick();
});

$('.modal').on('shown.bs.modal', function (e) {
  $('.your-class').slick('setPosition');
  $('.wrap-modal-slider').addClass('open');
})




 ////////////news media slider End/////////////
