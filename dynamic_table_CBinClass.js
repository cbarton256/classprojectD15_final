// declare counter variable
var counter = 0;
// add contact function adds new table rows
function addContact() {
	// get input from the user
	var inputName = document.getElementById('name').value;
	var inputEmail = document.getElementById('email').value;
	var inputPhone = document.getElementById('phone').value;
	// create new HTML row elements
	var contactRow = document.createElement("tr");
	
	var idRow = document.createElement("td");
	var nameRow = document.createElement("td");
	var emailRow = document.createElement("td");
	var phoneRow = document.createElement("td");
	var removeButtonRow = document.createElement("td");
	// set row value
	idRow.innerHTML = counter+1;
	
	// set input values
	nameRow.innerHTML = inputName;
	emailRow.innerHTML = inputEmail;
	phoneRow.innerHTML = inputPhone;
	
	// set remove button
	removeButtonRow.innerHTML = '<button onclick = "removeContact(this.parentNode.parentNode.rowIndex);"> Delete</button>';
	
	// add table cells to the table row
	contactRow.appendChild(idRow);
	contactRow.appendChild(nameRow);
	contactRow.appendChild(emailRow);
	contactRow.appendChild(phoneRow);
	contactRow.appendChild(removeButtonRow);
	
	// add table row to the table
	document.getElementById('contacts').appendChild(contactRow);
	
	// increment counter	
	counter++;
}// end add Contact funciton
// delete contact function removes existing table rows
function removeContact(i) {
	document.getElementById('contacts').deleteRow(i);
} // end delete Contact function