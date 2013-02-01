function calculate() {
   //get input from user
   var listPrice = document.getElementById('listPrice').valueAsNumber;  // using document object method
   var customerType = document.getElementById('type').value;
   //calculate discount percent
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
   
   //calculate discount amount and discount price
   
   //calculate discount amount and discount price
   var discount = listPrice * discountPercent * .01;
   var discountPrice = listPrice - discount;
   
   //set output in currency format (sort of)
   document.getElementById('discountPercent').valueAsNumber=discountPercent;
   discount = discount.toFixed(2);  //convert number value to string value keeping 2 dec places
   discount = '$'+discount;  // concatenate $ to string variable (no easy way to add commas)
   document.getElementById('discount').value = discount;
   
   discountPrice = '$'+discountPrice.toFixed(2);
   document.getElementById('discountPrice').value = discountPrice;
} //end calculate
