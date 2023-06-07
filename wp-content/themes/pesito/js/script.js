$("#use-app").click(function(){
    $(".phone-wrapper").addClass("phone-rotate");
    $("#overlay").removeClass("overlay-wrapper");
    }
);

if ($(window).width() < 960) {
    $("body").load("page-mobile-app.php"); 
}
else {
   $("body").load("front-page.php");
}

/* Store the elements with class "tilt" in elements */
let elements = Array.from(document.getElementsByClassName("res-data"));

/* For each 'item' in the "elements" array... */
elements.forEach((item) => {
  /* Assign each 'item' in the "elements" array to a variable called "el" */
  let el = item;

  /*
   * Add a listener for mousemove event
   * Which will trigger function 'handleMove'
   * On mousemove
   */
  el.addEventListener("mousemove", handleMove);

  /* Get the height and width of the element */
  const height = el.clientHeight;
  const width = el.clientWidth;

  /* Define function a */
  function handleMove(e) {
    /*
     * Get position of mouse cursor
     * With respect to the element
     * On mouseover
     */
    /* Store the x position */
    const xVal = e.layerX;
    /* Store the y position */
    const yVal = e.layerY;

    /*
     * Calculate rotation valuee along the Y-axis
     * Here the multiplier 20 is to
     * Control the rotation
     * You can change the value and see the results
     */
    const yRotation = 20 * ((xVal - width / 2) / width);

    /* Calculate the rotation along the X-axis */
    const xRotation = -20 * ((yVal - height / 2) / height);

    /* Generate string for CSS transform property */
    const string =
      "perspective(500px) scale(1.1) rotateX(" +
      xRotation +
      "deg) rotateY(" +
      yRotation +
      "deg)";

    /* Apply the calculated transformation */
    el.style.transform = string;
  }

  /* Add listener for mouseout event, remove the rotation */
  el.addEventListener("mouseout", function () {
    el.style.transform = "perspective(500px) scale(1) rotateX(0) rotateY(0)";
  });

  /* Add listener for mousedown event, to simulate click */
  el.addEventListener("mousedown", function () {
    el.style.transform = "perspective(500px) scale(0.9) rotateX(0) rotateY(0)";
  });

  /* Add listener for mouseup, simulate release of mouse click */
  el.addEventListener("mouseup", function () {
    el.style.transform = "perspective(500px) scale(1.1) rotateX(0) rotateY(0)";
  });
});

//carousel-mobile-app
$(window).on("load",function(){
  var swiper = new Swiper('#menu-swipe', {
    });
  });

//secondary-carousel-app
$(window).on("load",function(){
    var sec_swiper = new Swiper('#secondary-swipe', {
      });
    });
  
//secondary-carousel-app
$(window).on("load",function(){
    var small_swiper = new Swiper('#small-swipe', {
      });
    });
// $(document).ready(function() {
//     $("#ajax-form-data").validate({
//                 rules: {
//                     image_upload: "required",
//                     restaurant_name: "required",
//                     restaurant_cuisines:  "required",
//                     restaurant_avail: "required",
//                     restaurant_points: "required",
//                     restaurant_distance: "required",
//                     restaurant_price: "required",
//                 },
//                 messages: {
//                     image_upload: "Please upload the image!",
//                     restaurant_name: "Please enter restaurant name.",
//                     restaurant_cuisines:  "Please enter cuisines provided.",
//                     restaurant_avail: "Please enter restaurant availablity.",
//                     restaurant_points: "Please enter the restaurant ratings.",
//                     restaurant_distance: "Please enter the distance",
//                     restaurant_price: "Please enter the estimated price",
//                 }
//             });
    
//     $('#ajax-form-data').submit(function() {
//         if($('#ajax-form-data').valid()) {
//             var str = '';
//             str += $('#image-upload').val() + '<br />';
//             str += $('#restaurant-name').val() + '<br />';
//             str += $('#restaurant-cuisines').val() + '<br />';
//             str += $('#restaurant-avail').val() + '<br />';
//             str += $('#restaurant-points').val() + '<br />';
//             str += $('#restaurant-distance').val() + '<br />';
//             str += $('#restaurant-price').val() + '<br />';
//             $('#dish-con-ajax').append(str);
//         }
//         return false;
//     });
// });