function init() {
	tinyMCEPopup.resizeToInnerSize();
}

function is_youtube( cadena ) {
	var answer=false;
	var filter=/^http:\/\/www.youtube.com(.+)$/;
	if (filter.test(cadena)) {
		answer=true;
	}
	return answer;
}

function is_vimeo( cadena ) {
	var answer=false;
	var filter=/^http:\/\/(|www.)vimeo.com(.+)$/;
	if (filter.test(cadena)) {
		answer=true;
	}
	return answer;
}

function is_googlevideo( cadena ) {
	var answer=false;
	var filter=/^http:\/\/video.google.com(.+)$/;
	if (filter.test(cadena)) {
		answer=true;
	}
	return answer;
}

function insertYoutuberLink() {
	
	var tagtext;
	var add_text = false;
	var error = true;

	var youtuber = document.getElementById('youtuber_panel');

	// who is active ?
	if(youtuber.className.indexOf('current') != -1) {
		var link = document.getElementById('youtuberlink').value;
		var type = 'error';
		
		if(is_vimeo(link)) {
			type = 'vimeo';
			error = false;
		}
		
		if(is_youtube(link)) {
			type = 'youtube';
			error = false;
		}
		
		if(is_googlevideo(link)) {
			type = 'googlevideo';
			error = false;
		}

		if(error) {
			link = "Not a YouTube, Vimeo or Google Video URL: " + link;
		}

		tagtext = "[" + type + "]" + link + "[/" + type + "]";
		add_text = true;
	}

	
	if(add_text) {
		window.tinyMCEPopup.execCommand('mceInsertContent', false, tagtext);
	}
	window.tinyMCEPopup.close();
}
