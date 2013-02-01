function calculate() {
   //get input from user
   var listPrice = document.getElementById('listPrice').valueAsNumber;  // using document object method
   var customerType = document.getElementById('type').value;

   
   // call calculate discount percent function
   var discountPercent = discPercCalc(listPrice,customerType);
   
   //call calculate discount amount function
   var discount = discAmountCalc(listPrice,discountPercent);
   
   //call calculate discount price function
   var discountPrice = discPriceCalc(listPrice,discount);
   
   //set output in currency format (sort of)
   document.getElementById('discountPercent').valueAsNumber=discountPercent;
   discount = discount.toFixed(2);  //convert number value to string value keeping 2 dec places
   discount = '$'+discount;  // concatenate $ to string variable (no easy way to add commas)
   document.getElementById('discount').value = discount;
   
   discountPrice = '$'+discountPrice.toFixed(2);
   document.getElementById('discountPrice').value = discountPrice;
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