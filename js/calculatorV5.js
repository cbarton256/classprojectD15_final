//create helper function
var $ = function (id) {
	return document.getElementById(id);
}
function calculate() {
   //get input from user
   var listPrice = $('listPrice').valueAsNumber;  // using document object method
   var customerType = $('type').value;

   // call calculate discount percent function
   var discountPercent = discPercCalc(listPrice,customerType);
   
   //call calculate discount amount function
   var discount = discAmountCalc(listPrice,discountPercent);
   
   //call calculate discount price function
   var discountPrice = discPriceCalc(listPrice,discount);

   //set output in currency format (sort of)
   $('discountPercent').valueAsNumber=discountPercent;
   discount = discount.toFixed(2);  //convert number value to string value keeping 2 dec places
   discount = '$'+discount;  // concatenate $ to string variable (no easy way to add commas)
   $('discount').value = discount;
   
   discountPrice = '$'+discountPrice.toFixed(2);
   $('discountPrice').value = discountPrice;
} //end calculate
//calculate discount percent function
function discPercCalc(listPrice,customerType){
	   if (customerType=="R"){
			   if (listPrice<100)
				   discountPercent=0;
			   else if (listPrice >=100 && listPrice <250)
				   discountPercent=10;
			   else if (listPrice >=250)
				   discountPercent=25;
	   } else if (customerType == "C"){
			   if (listPrice <250)
				   discountPercent=20;
			   else
				   discountPercent=30;
	   }
	   discountPercent=parseFloat(discountPercent);
	   return discountPercent;
}
//calculate discount amount function
function discAmountCalc(listPrice,discountPercent){
	var discAmount=listPrice * discountPercent * .01;
	return discAmount;
}
//calculate discount price function
function discPriceCalc(listPrice,discount){
	var discPrice=listPrice - discount;
	return discPrice;
}
//date function
function getToday(){
	// Create new date
	var currentDate = new Date();
	// Get current month, day, year values
	var month = currentDate.getMonth() + 1;
	var day = currentDate.getDate();
	var year = currentDate.getFullYear();
	// Set date formats
	month = (month < 10) ? "0" + month : month;
	day = (day < 10) ? "0" + day : day;
	// Return date output
	var dateString = "Today is " + month + "/" + day + "/" + year;
	document.writeln(dateString);
}// end date function