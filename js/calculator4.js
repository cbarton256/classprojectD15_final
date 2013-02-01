//create helper function
var $ = function (id) {
	return document.getElementById(id);
}
function calculate() {
}
   //get input from user
   var listPrice = $('listPrice').valueAsNumber;  // using document object method
   var customerType = $('type').value;

   
   // call calculate discount percent function
   var discountPercent=descPercCalc(listPrice,custormerType);
   
   //call calculate discount amount function
   var discount=discAmountCalc(listPrice,discountPercent);
   
   //call calculate discount price function
   var discountPrice=discPercCalc(listPrice,customerType);
   
   
   
   //calculate discount amount and discount price
   var discount = listPrice * discountPercent * .01;
   var discountPrice = listPrice - discount;
   
   //set output in currency format (sort of)
   $('discount_percent').valueAsNumber=discountPercent;
   discount = discount.toFixed(2);  //convert number value to string value keeping 2 dec places
   discount = '$'+discount;  // concatenate $ to string variable (no easy way to add commas)
   $('discount').value = discount;
   
   discountPrice = '$'+discountPrice.toFixed(2);
   $('discountPrice').value = discountPrice;
} //end calculate
//calculate discount percent function
function discAmountCalc(listPrice,discountPercent){
	var discAmount=listPrice*discountPercent * .01;
	return discAmount;
}
//calculate discount amount function
function discPriceCalc(listPrice,discount){
	var discPrice=listPrice-discount;
	return discPrice;
}
//calculate discount price function
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
