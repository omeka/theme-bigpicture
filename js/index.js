function pathPrepare($el) {
  var lineLength = $el[0].getTotalLength();
  $el.css("stroke-dasharray", lineLength);
  $el.css("stroke-dashoffset", lineLength);
}

var $ascentLegs = [{
    path: $("path#leg-1"),
    trigger: $("section#trigger1")
  },
  {
    path: $("path#leg-2"),
    trigger: $("section#trigger2")
  }
];

var $descentLegs = [{
    path: $("path#leg-3"),
    trigger: $("section#trigger3")
  },
  {
    path: $("path#leg-4"),
    trigger: $("section#trigger4")
  }
];

var controller = new ScrollMagic.Controller();

// fadeAscent
var fadeAscent = new ScrollMagic.Scene({
    triggerElement: "#trigger-on-the-moon",
    duration: 200
  })
  .on("enter", function (event) {
    if (event.scrollDirection === "FORWARD") {
      $.each($ascentLegs, function (index, segment) {
        segment.path.fadeTo("slow", 0.3);
      });
    }
  })
  .on("leave", function (event) {
    if (event.scrollDirection === "REVERSE") {
      $.each($ascentLegs, function (index, segment) {
        segment.path.fadeTo("slow", 1);
      });
    }
  })
  // .addIndicators()
  .addTo(controller);
// end fadeAccent

var onEarth = new ScrollMagic.Scene({
    triggerElement: "#trigger-on-earth",
    duration: $("#trigger-on-earth").innerHeight()
  })
  .on("enter", function (event) {
    $(".flight-path").addClass("on-earth");
    $(".moon").addClass("on-earth");
    $(".earth").addClass("on-earth");
    $(".earth").addClass("show");
    $(".moon").addClass("show");
    $(".flight-path").removeClass("on-earth");
    if (event.scrollDirection === "REVERSE") {
      $(".ship").removeClass("show-ship");
      $(".flight-path").removeClass("show");
    }
  })
  .on("leave", function (event) {
    $(".flight-path").addClass("show");
    $(".moon").removeClass("on-earth");
    $(".earth").removeClass("on-earth");
    $(".ship").addClass("show-ship");
    if (event.scrollDirection === "REVERSE") {
      $(".earth").removeClass("show");
      $(".moon").removeClass("show");
      $(".flight-path").removeClass("show");
      $(".ship").removeClass("show-ship");
    }
  })
  .addTo(controller);

var landOnMoon = new ScrollMagic.Scene({
    triggerElement: "#trigger-on-the-moon",
    duration: $("#trigger-on-the-moon").innerHeight()
  })
  .on("enter", function (event) {
    $(".flight-path").addClass("on-moon");
    $(".moon").addClass("on-moon");
    $(".earth").addClass("on-moon");
    $(".ship").removeClass("show-ship");
    if (event.scrollDirection === "REVERSE") {
      $(".lm").removeClass("show-ship");
    }
  })
  .on("leave", function (event) {
    $(".flight-path").removeClass("on-moon");
    $(".moon").removeClass("on-moon");
    $(".earth").removeClass("on-moon");
    $(".lm").addClass("show-ship");
    if (event.scrollDirection === "REVERSE") {
      $(".ship").addClass("show-ship");
      $(".lm").removeClass("show-ship");
    }
  })
  .addTo(controller);

var showSurface = new ScrollMagic.Scene({
    triggerElement: "#trigger-show-surface",
    duration: $("#trigger-show-surface").innerHeight()
  })
  .on("enter", function (event) {
    $(".surface").addClass("surface-show");
  })
  .on("leave", function (event) {
    $(".surface").removeClass("surface-show");
  })
  .addTo(controller);

var showSurface2 = new ScrollMagic.Scene({
    triggerElement: "#trigger-show-surface2",
    duration: $("#trigger-show-surface2").innerHeight()
  })
  .on("enter", function (event) {
    $(".surface2").addClass("surface-show");
  })
  .on("leave", function (event) {
    $(".surface2").removeClass("surface-show");
  })
  .addTo(controller);

var showSurface3 = new ScrollMagic.Scene({
    triggerElement: "#trigger-show-surface3",
    duration: $("#trigger-show-surface3").innerHeight()
  })
  .on("enter", function (event) {
    $(".surface3").addClass("surface-show");
  })
  .on("leave", function (event) {
    $(".surface3").removeClass("surface-show");
  })
  .addTo(controller);

function createTween(segment) {
  var lineLength = segment.path[0].getTotalLength();
  segment.path.css("stroke-dasharray", lineLength);
  segment.path.css("opacity", 1);
  segment.path.css("stroke-dashoffset", lineLength);
  return new TimelineMax().add(
    TweenMax.to(segment.path, 1, {
      strokeDashoffset: 1,
      ease: Linear.easeNone
    })
  );
}

function createLeg(segment, tween) {
  return (
    new ScrollMagic.Scene({
      triggerElement: `#${segment.trigger[0].id}`,
      duration: segment.trigger.innerHeight(),
      tweenChanges: false // seems to match speed with scroll speed
    })
    .setTween(tween)
    // .addIndicators() // add indicators (requires plugin)
    .addTo(controller)
    .on('progress', function(event) {
      // var scrollPercentage = (event.progress);

      let content = document.getElementById('flight-path');
      // Get path length
      let path = segment.path[0];
      let pathLen = path.getTotalLength();
      const rect = document.getElementById('field').getBoundingClientRect()
      const pathRect = path.getBBox();
      // console.log("🚀 ~ file: index.js ~ line 151 ~ .on ~ pathRect", pathRect)
      // Get the position of a point at <scrollPercentage> along the path.
      const pt = path.getPointAtLength(event.progress * pathLen);
      console.log("🚀 ~ file: index.js ~ line 154 ~ .on ~ pt", pt)
      // dot.setAttribute("transform", "translate("+ pt.x + "," + pt.y + ")");
      const ships = [document.getElementById('ship'), document.getElementById('lm')];
      const offsetY = pt.y * 2 - 200;
      $.each(ships, function(index, ship) {
        // ship.style.transform = `translate(${pt.x}px, ${pt.y}px)`;
        // ship.style.left = `${pt.x}px`
        // ship.style.top = `${pt.y}px`
        // ship.setAttribute("transform", "translate("+ pt.x + "," + pt.y + ")");
        ship.setAttribute("transform", `translate(${pt.x - 50},${pt.y})`);
      })
    })
  );
}

$.each($ascentLegs, function (index, segment) {
  var tween = createTween(segment);
  createLeg(segment, tween);
});

$.each($descentLegs, function (index, segment) {
  var tween = createTween(segment);
  createLeg(segment, tween);
});

AOS.init({
  once: false // whether animation should happen only once - while scrolling down
});

// UI Kit - UI Sticky Control
var sticky = UIkit.sticky("#navbar", {
  clsactive: "",
  clsinactive: ".uk-invisible"
});
