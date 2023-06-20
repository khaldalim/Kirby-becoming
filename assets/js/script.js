function newpage() {
  window.location = newLocation;
}

$("#burger-menu-icon").click(function () {
  $("footer").toggleClass("burger"),
    $(".burger").toggleClass("open")
    $("header").toggleClass("open")
  $("#burger-menu").fadeToggle();
}),


  $(window).on("load resize", function () {
    console.log($(".cont").height());
    console.log($(".content").height());
    $(".cont").height() > ($(".content").height() )? $(".content").addClass("scrollable") : $(".content").removeClass("scrollable");
  }),
  $(".content").scroll(function () {
    $(".scroll-arrow").fadeOut(100);
  }),
  $("a:not(.no-fade, .extern)").click(function (e) {
    e.preventDefault(), (newLocation = this.href), $("body").fadeOut(150, newpage);
  }),
  $(".back-button").click(function (e) {
    e.preventDefault(), (newLocation = $(this).attr("data-href")), $("body").fadeOut(150, newpage);
  });
