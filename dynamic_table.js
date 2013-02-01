// Declare counter variable
var counter = 0;

// Add contact function adds new table rows
function addContact() {

//Get input from the user
var inputName = document.getElementById('name').value;
var inputEmail = document.getElementById('email').value;
var inputPhone = document.getElementById('phone').value;

//Create new HTML table row
var contactRow = document.createElement("tr");

//Create new HTML table cells
var idRow = document.createElement("td");
var nameRow = document.createElement("td");
var emailRow = document.createElement("td");
var phoneRow = document.createElement("td");
var removeButtonRow = document.createElement("td");

//Set counter value and increment
idRow.innerHTML = counter+1;

//Set values coming from user
nameRow.innerHTML = inputName;
emailRow.innerHTML = inputEmail;
phoneRow.innerHTML = inputPhone;

//Set remove button
removeButtonRow.innerHTML ='<button onclick="removeContact(this.parentNode.parentNode.rowIndex);">Delete</button>';

//Add new table cells to new table row
contactRow.appendChild(idRow);
contactRow.appendChild(nameRow);
contactRow.appendChild(emailRow);
contactRow.appendChild(phoneRow);
contactRow.appendChild(removeButtonRow);

//Add new table row to existing table
document.getElementById('contacts').appendChild(contactRow);

//increment counter
counter++;

} // end add contact function

// Delete contact function removes existing table rows
function removeContact(i) {
document.getElementById('contacts').deleteRow(i);

} // end delete Contact function
