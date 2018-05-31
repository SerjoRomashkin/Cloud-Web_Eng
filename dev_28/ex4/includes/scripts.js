/**
 * @author Serj Romashkin
 */




function validate() {
  if(validate.count == undefined){validate.count = 1;}
  else{ validate.count ++;}

 var email_array = ["test@email.co.il", "test@email.com", "test@email.uk" ,"test@email.au"];
 // check if email address is one of 4
 var value = document.getElementById('EMAIL').value;
 
 for (var i = 0, l=email_array.length; i < l; i++) {
 if (value == email_array[i]) 
 {
 	return true;
 }
 }

 if(validate.count == 1) 
 {
 var node = document.createElement("H4");
 var textnode = document.createTextNode("Email can be: text@email.co.il or .com or .uk or .au only");
 node.appendChild(textnode);
 document.getElementById("Errmess").appendChild(node);
 }
 return false; // keep form from submitting
}







