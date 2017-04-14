 $(document).ready(function() {
	// Custom JS
	$('.popup').magnificPopup();
  //mmenu
	var $menu = $("#my-menu").mmenu({
		"extensions": [
        "pagedim-black",
        "theme-dark",
        "fx-listitems-slide"
     ],
     "offCanvas": {
        "position": "right"
     },
		"navbar":{
			title:'<img src="assets/app/img/logo.png"  alt="Прованс">'
		},
		"offCanvas": {
        "position": "right"
     }
	});
  var $icon = $(".hamburger");
  var API = $menu.data( "mmenu" );



  $icon.on( "click", function() {
     API.open();
  });

  API.bind( "opened", function() {
     setTimeout(function() {
        $icon.addClass( "is-active" );
     }, 100);
  });
  API.bind( "closed", function() {
     setTimeout(function() {
        $icon.removeClass( "is-active" );
     }, 100);
  });
  //   Hook into methods

  // owl carousel
  $(".main-slider").owlCarousel({
    loop:true,
    items:1,
  });
//
  var h = $("#my-header").outerHeight();
  hh=h+20;
  $("#my-content").css("padding-top", hh);


});
