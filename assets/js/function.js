// Index, service

$(document).ready(function () {
	$(".venobox").venobox({
		framewidth: "600px",
		frameheight: "400px",
		border: "none",
 				bgcolor: "#5dff5e", // default: '#fff'
 				titleattr: "data-title",
 				numeratio: true,
 				infinigall: true,
 			});
});

// About, service

$(".overay-nutre").magnificPopup({
	delegate: 'a',
	type: 'image',
	gallery: {
		enabled: true
	}
});

// Galery

$(".icon-tsdg").magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            }
        });