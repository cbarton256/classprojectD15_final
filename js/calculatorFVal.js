function calculate() {
   //get input from user
   var investment = document.getElementById('investment').valueAsNumber;
   var interestRate = document.getElementById('interestRate').valueAsNumber;
   var years = document.getElementById('years').valueAsNumber;
   
   // calculate future value
   var futureValue = investment;
   var counter;
   for (counter = 1; counter <= years; counter++) {
       futureValue = (futureValue + (futureValue * interestRate *.01));
   }
   
   // prepare output
   futureValue = futureValue.toFixed(2);
   document.getElementById('futureValue').value = futureValue;
}