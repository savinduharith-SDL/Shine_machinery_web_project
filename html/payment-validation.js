  function paymentValidate(){  
    var fullname=document.paymentform.fullname.value;  
    var email=document.paymentform.email.value;
    var address=document.paymentform.address.value;
    var rent=document.paymentform.amt.value;
    var cardname=document.paymentform.cardname.value;
    var cardnumber=document.paymentform.cardnumber.value;
    var expdate=document.paymentform.expdate.value;
    var cvv=document.paymentform.cvv.value;


    if(validateFullName(fullname)){
      if(validateEmail(email)){
        if(validateAddress(address)){
          if(validateCardName(cardname)){ 
            if(cardnumber(cardnumber)){
              if(validateCVV(cvv)){          
              } 
            }
          }  
        }
      }
    }
    //return false;
  }

  function validateFullName(fullname){ 
    var letters = /^[A-Za-z]+$/;

    if (fullname == null || fullname == "") {
      alert('Please enter your full name');
      return false
    }
    else if(fullname.match(letters)){
      return true;
    }
    else{
      alert('Full name must have alphabet characters only');
      document.paymentform.fullname.focus();
      return false;
    }
  }

  function validateEmail(email){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (email == null || email == "") {
      alert('Please enter your email');
      return false;
    }
    else if(email.match(mailformat)){
      return true;
    }
    else{
      alert("You have entered an invalid email address!");
      email.focus();
      return false;
    }
  }

  function validateAddress(address){ 
    var letters = /^[0-9a-zA-Z]+$/;

    if (address == null || address == "") {
      alert('Please enter your address');
      return false;
    }
    if(address.match(letters)){
      return true;
    }
    else{
      alert('User address must have alphanumeric characters only');
      address.focus();
      return false;
    }
  }

  function validateCardName(cardname){ 
    if (cardname == null || cardname == "") {
      alert('Please enter the name on card');
      return false;
    }
    if(cardname.match(letters)){
      return true;
    }
    else{
      alert('Name on card must have alphabet characters only');
      cardname.focus();
      return false;
    }
  }

  function cardnumber(cardnumber){
    var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;

    if (cardnumber == null || cardnumber == "") {
      alert('Please enter your card number');
      return false;
    }
    if(cardnumber.match(cardno)){
      return true;
    }
    else{
      alert("Not a valid Visa credit card number!");
      return false;
    }
  }

  function validateCVV(cvv) {
    // Regex to check valid
    // CVV_Number 
    var regex = new RegExp(/^[0-9]{3,4}$/);
 
    // if CVV_Number
    // is empty return false
    if (cvv == null || cvv == "") {
      alert("Please enter the cvv.")
      return false;
    }
 
    // Return true if the CVV_Number
    // matched the ReGex
    if (regex.test(cvv) == false) {
      alert("Invalid cvv number")
      return false;
    }
  }

  /*if(type==0){
    alert("Please select machine type.");
    document.rentform.machine.focus();
    return false;
  }
  else if(jobsite==null || jobsite==""){  
    alert("Please enter your jobsite.");  
    document.rentform.address.focus();
    return false;  
  }
  else if(startdate==0){  
    alert("Please choose the rental start date.");  
    document.rentform.startdate.focus();
    return false;  
  }
  else if(enddate==0){  
    alert("Please choose the rental end date.");  
    document.rentform.enddate.focus();
    return false;  
  }
  else if(enddate<startdate){
    alert("Please choose a correct end date.");
    document.rentform.enddate.focus();
    return false; 
  }

  window.location.href="payment.html";   */