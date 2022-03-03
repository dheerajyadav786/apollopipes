(function (window, document, $, AOS) {
  $(function () {
    AOS.init();
    // When the user scrolls the page, execute myFunction
    window.onscroll = function () {
      toggleSticky();
    };

    // Get the navbar
    var navbar = document.getElementById("navbar-container");
    var content = document.getElementById("main-content");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function toggleSticky() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        content.classList.add("nsticky");
      } else {
        navbar.classList.remove("sticky");
        content.classList.remove("nsticky");
      }
    }

    $("[data-link-highlight]").on("mouseover", function (e) {
      var c = getCenter(this);
      $("#eye-cursor").offset({ left: c.x - 25 });
    });

    function getCenter(el) {
      var cX = $(el).offset().left + $(el).width() / 2;
      var cY = $(el).offset().top + $(el).height() / 2;
      return { x: cX, y: cY };
    }

    window.allowDrop = function (ev) {
      ev.preventDefault();
    };

    window.drag = function (ev) {
      var crt = ev.target.cloneNode(true);
      ev.target.style.opacity = 0;
      crt.style.position = "absolute";
      document.body.appendChild(crt);
      ev.dataTransfer.setDragImage(crt, 0, 0);
      //   ev.dataTransfer.setData("text", ev.target.id);
    };

    window.dragCancel = function (ev) {
      ev.target.style.opacity = 1;
    };

    window.drop = function (ev) {
      ev.preventDefault();
      var href = ev.target.getAttribute('data-href');
      // var data = ev.dataTransfer.getData("text");
      $("#blackout").show();
      window.location.href = href;
    };
  });
})(window, document, jQuery, AOS, undefined);
