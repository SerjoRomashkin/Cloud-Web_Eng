/**
 * @author Serj Romashkin
 */

function addBox () {
  if(addBox.count == undefined){addBox.count = 4;}
  else{ addBox.count ++;}
  var count = addBox.count;
  var ID = "box30" + count;
  console.log ("add a box");
  var main = document.getElementsByTagName("main")[0];
  var box = document.createElement("section");
  var Shade = randomShade();
  	box.setAttribute("id", ID);
	console.log ("counter is " + count);
	box.style.width = "250px";
	box.style.height = "250px";
	box.style.display = "inline-block";
	box.style.float = "left";
	box.style.background = "#000000";
	box.style.opacity = Shade;
	main.appendChild(box);
	box.onmouseover = function() {mouseOver(ID)};
	box.onmouseout = function() {mouseOut(ID)};
	
}

function mouseOver() {
	console.log ("hover over " + arguments[0]);
    document.getElementById(arguments[0]).style.background = "#FFFFFF";
    document.getElementById(arguments[0]).style.opacity = 1;
}

function mouseOut() {
	console.log ("Got Off " + arguments[0]);
    document.getElementById(arguments[0]).style.background = "#000000";
    document.getElementById(arguments[0]).style.opacity = randomShade();
}

function randomShade(){
	return (Math.random().toFixed(1));
};//Horay!!! Shade Extravaganza!
