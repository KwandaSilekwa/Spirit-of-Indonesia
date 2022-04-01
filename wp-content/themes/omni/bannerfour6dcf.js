jQuery(document).ready ( function(){

console.log('Banner');

    jQuery(document).on('click', '.the-input .the-button', function(){

		jQuery( ".omni-banner" ).hide( "slow" );

		  //set cookie
		  var d = new Date();
		  var exdays = 168*60*60*1000;
		  d.setTime(d.getTime() + (exdays));
		  var expires = "expires="+ d.toUTCString();
		  document.cookie = "theBanner=Seen;" + expires + ";path=/ ";

  	});

    var getCookieName = document.cookie
      .split(';')
      .map(cookie => cookie.split('='))
      .reduce(( accumulator, [key, value]) =>
        ({ ...accumulator, [key.trim()]: decodeURIComponent(value) }),
      {});


    function ifCookieIs(){
		var cookieIs = getCookieName.theBanner;
		
        if (cookieIs != 'Seen'){
            jQuery('.omni-banner').css('display', 'block');
        }
    }ifCookieIs();



});
