/**
 * @author Serj Romashkin
 */

window.onload = function(){
	var init = new populatePage();
};

function populatePage() {
	
	var imgs = 3;
	var i;

	for (i=0; i<imgs; i++)
	{
		var pic = new addPic(i,imgs);
	};
};

function addPic () {
  console.log ("add a Pic");
  var aside = document.getElementsByClassName("content");
  for (var i = 0, len = aside.length; i < len; i++) {
    var pic = document.createElement("div");
  	var color = "#e8e8e8";
  	pic.setAttribute("id", "pic"+arguments[0]);
	pic.style.height = "100%";
	pic.style.width	="200px";
	pic.style.display = "inline-block";
	pic.style.float = "left";
	pic.style.background = color;
	pic.style.border= "1px solid black";
	pic.style.position= "relative";
	pic.style.margin= "5px";
	var img = document.createElement("img");
	img.setAttribute("src", "images/deal.jpg");
    img.setAttribute("width", "200px");
    img.setAttribute("height", "100%");
    img.setAttribute("alt", "Sale");
	
	
	pic.appendChild(img);
	aside[i].appendChild(pic);	

}
  
	console.log ("Pic added"+arguments[0]);
};



