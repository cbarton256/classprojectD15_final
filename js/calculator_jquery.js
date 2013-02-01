// create functtion binding nested functions to page loading event
$(document).ready(function() {
	// bind click event listener function to element id
	    $('#calculate').click(function() {
	    // get input from user
	    var listPrice = $('#list_price').val();
	    var discountPercent = $('#discount_percent').val();
	    // calculate discount amount and discount price
	    var discount = listPrice * discountPercent * .01;
	    var discountPrice = listPrice - discount;
	    // set output in currency format sort
	    discount = '$' + discount.toFixed(2);
	    $('#discount_amount').val(discount);
	    
	    discount = '$' + discountPrice.toFixed(2);
	    $('#discount_price').val(discountPrice);
	});  //end bind to event listener
	
}); // end bind to page load