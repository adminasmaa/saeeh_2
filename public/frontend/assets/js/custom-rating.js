$(".my-rating").starRating({
    starSize: 25,
    rtl: true,
    type: "int",
    strokeColor: "#CACACA",
    useGradient: false,
    hoverColor: "#FF8600",
    activeColor: "#FF8600",
    emptyColor: "#CACACA",
    useFullStars: true,
    ratedColors: ["#FF8600", "#FF8600", "#FF8600", "#FF8600", "#FF8600"],
    callback: function (currentRating, $el) {
      // make a server call here
    },
    onHover: function (currentIndex, currentRating, $el) {
      $(".live-rating").text(currentIndex);
    },
    onLeave: function (currentIndex, currentRating, $el) {
      $(".live-rating").text(currentRating);
    },
  });
    