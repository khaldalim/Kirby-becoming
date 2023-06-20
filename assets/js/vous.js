const items = $(".item"),
  image = $(".img-hover"),
  imageContainer = $(".hover-container");


items.hover(function () {

  let t = $(this).data("image");
  (this.style.zIndex = 99)

  imageContainer.addClass('active')

  image.attr("src", t)

})


items.mousemove(function (t) {
  imageContainer.css("top", t.clientY / 4 + "px"), imageContainer.css("right", t.clientX / 10 + "px");
}),
  items.mouseleave(function () {
    (this.style.zIndex = 1)
    image.attr("src", "")
    imageContainer.removeClass('active')
  }),
  $(".selector a").click(function () {
    $(this).toggleClass("active"),
      "entrepreneurship" === $(this).attr("data-filter")
        ? $(".cat[data-cat='entrepreneurship'] ").each(function () {
          $(this).toggleClass("active");
        })
        : "tech" === $(this).attr("data-filter")
          ? $(".cat[data-cat='tech'] ").each(function () {
            $(this).toggleClass("active");
          })
          : "communication" === $(this).attr("data-filter") &&
          $(".cat[data-cat='communication'] ").each(function () {
            $(this).toggleClass("active");
          });
  });
