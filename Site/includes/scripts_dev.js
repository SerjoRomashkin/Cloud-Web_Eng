/**
 * @author Serj Romashkin
 */

window.onload = function(){
	var init = new populatePage();
};

function populatePage() {
	
	var objs = 3;

	var i;
	for (i=0; i<objs; i++)
	{
		var section = new addsection(i,objs);
	};
	  
};


function addsection () {
  console.log ("add a Section");
  var article = document.getElementsByClassName("Prod_sec")[0];
  var section = document.createElement("div");
  var color = "#e8e8e8";
  	section.setAttribute("id", "section"+arguments[0]);
	section.style.display = "inline-block";
	section.style.float = "right";
	section.style.background = color;
	section.style.border= "1px solid black";
	section.style.position= "relative";
	section.style.top= "20px";
	section.style.left= "-100px";
	
	var img = document.createElement("img");
	img.setAttribute("src", "images/Witcher_3_cover_art.jpg");
    img.setAttribute("width", "300px");
    img.setAttribute("height", "500px");
    img.setAttribute("alt", "witcher_game");
    
    
    var link = document.createElement("a");
    link.href = "prod_page.html";
    link.appendChild(img);
    
    section.appendChild(link);
	article.appendChild(section);

	section.onclick = function() {};
	console.log ("Section added"+arguments[0]+"winSize is:"+window.innerWidth);
};



