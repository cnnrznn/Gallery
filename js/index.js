/*
This method performs an ajax upload to the server.
*/
$( "#photo-form-submit" ).click(function() {
    // prepare data
    var files = document.getElementById("photo-form-input").files;
    var data = new FormData();
    for(var i=0; i < files.length; i++) {
	var file = files[i];
	if(!file.type.match("image.*")) {
	    continue;
	}
	data.append("photos[]", file, file.name);
    }
    
    // send data and manipulate response
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
	if(xhr.status == 200) {
	    //TODO refresh page, optionally indicate success
	    if (window.location.href.indexOf("?") > -1 && window.location.href.indexOf("a=") < 0)
		window.location.href = window.location.href + "&a=success";
	    else if (window.location.href.indexOf("?") < 0 && window.location.href.indexOf("a=") < 0)
		window.location.href = window.location.href + "?a=success";
	    else
		location.reload();
	}
    };
    xhr.open("POST", "pu.php", true);
    xhr.send(data);
});

/*
This method toggles the page content.
*/
$( "#page-content-button" ).click(function() {
    var target;
    if( $("#page-content-button").text() === "Gallery" ) {
	target = "gallery.php";
	$("#page-content-button").text("Slideshow");
    }
    else {
	target = "carousel.php";
	$("#page-content-button").text("Gallery");
    }

    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
	if(xhr.status == 200) {
	    $("#page_content").html(xhr.response);
	    if($("#page-content-button").text() === "Gallery")
		$(".carousel").carousel({interval:7000});
	}
    }
    xhr.open("GET", target, true);
    xhr.send();
});

/*
This method clears the alert area.
*/
$( "#alert-close-button" ).click(function() {
    $("#page_alert").html("");
});
