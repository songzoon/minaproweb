
var Canvas = document.getElementById('canvas');

function LoadImage(url){
	fabric.Image.fromURL(imageURL, function(img) {
		Canvas.setActiveObject(img);
		Canvas.centerObject(img)
		Canvas.add(img);
	});
}


function SaveImage(){
	$.ajax({
		type: 'POST',
		url: 'saveCanvas.php',
		data: {
			base64Image:Canvas.toDataURL('png')},
		success: function(json) {
			  
		}
	});
}

