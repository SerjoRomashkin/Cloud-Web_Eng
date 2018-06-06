/**
 * @author Serj Romashkin
 */

window.onload = function(){
	var init = new populatePage();
};

function populatePage() {
	
	var objs = 0;
	var imgs = 3;
	var i;
	for (i=0; i<objs; i++)
	{
		var section = new addsection(i,objs);
	};
	  
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
	pic.style.height = "95%";
	pic.style.width	="21%";
	pic.style.display = "inline-block";
	pic.style.float = "left";
	pic.style.background = color;
	pic.style.border= "1px solid black";
	pic.style.position= "relative";
	pic.style.margin= "5px";
	aside[i].appendChild(pic);
}
  
	
if (arguments[0]==0){
	pic.style.width = "95%";
	pic.style.height = "40%";
}
if(arguments[0]>0 && arguments[0]<3){
	pic.style.width = "95%";
	pic.style.height = "20%";
}
	
	pic.onclick = function() {};
	
	console.log ("Pic added"+arguments[0]);
};

function addsection () {
  console.log ("add a Section");
  var article = document.getElementsByTagName("article")[0];
  var section = document.createElement("section");
  var color = "#e8e8e8";
  	section.setAttribute("id", "section"+arguments[0]);
	section.style.display = "inline-block";
	section.style.float = "right";
	section.style.background = color;
	section.style.border= "1px solid black";
	section.style.position= "relative";
	section.style.margin= "1%";
	article.appendChild(section);
if (arguments[0]==0){
	section.style.width = "20%";
	section.style.height = "50%";
}
if(arguments[0]>0 && arguments[0]<3){
	section.style.width = "20%";
	section.style.height = "35%";
}
if(arguments[0]>3 && arguments[0]<8){
	section.style.width = "20%";
	section.style.height = "20%";
}
	section.onclick = function() {};
	console.log ("Section added"+arguments[0]+"winSize is:"+window.innerWidth);
};



