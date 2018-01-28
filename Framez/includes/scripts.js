/**
 * @author Serj Romashkin
 */

function buildBoxes() {
	//dev: 72 / 2 = 36
	var boxes = 36;
	var i;
	for (i=0; i<boxes; i++)
	{
		var box = new addBox(i,boxes);
	}  
}

function addBox () {
  console.log ("add a box");
  var main = document.getElementsByTagName("main")[0];
  var box = document.createElement("section");
  var color = randomColor();
  	box.setAttribute("id", "box30"+arguments[0]);
	box.style.width = 333.333+"px";
	box.style.height = "348px";
	box.style.display = "inline-block";
	box.style.float = "left";
	box.style.background = color;
	main.appendChild(box);
	
	box.onclick = function() {
    	if(box.hasChildNodes()){
    	this.removeChild(this.childNodes[0]);
    	}//if already favorite - remove star
     
    	else{
    		var fav = document.createElement("img");
  			fav.src = "images/fav.png";
  			fav.style.display = "block";
  			fav.style.margin = "0 auto";
  			fav.style.padding = "32%";
  			box.appendChild(fav);
  			}//if not favorite - add star
    }// if pressed on box
  
  if(arguments[0]==arguments[1]-1){
  	var lastBox = document.getElementById("box30"+arguments[0]);
  	lastBox.style.background = "#2e1572";
  	lastBox.idName = "addBox";
  	var plus = document.createElement("img");
  	plus.src = "images/white_plus.png";
  	plus.style.display = "block";
  	plus.style.margin = "0 auto";
  	plus.style.padding = "32%";
  	lastBox.appendChild(plus);
  	
  	lastBox.onclick = function(){
  		addBox(0,2);
  	}//if pressed add another box after
  	
  	console.log ("last box created");
  	}//last box has add function
}

function randomColor(){
	return ("#" + Math.random().toString(16).slice(2, 8));
};//Horay!!! Color Extravaganza!

window.onload = function(){
var init = new buildBoxes();
}