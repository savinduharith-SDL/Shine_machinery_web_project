function paymentValidate() {  

    var fullname=document.paymentform.fullname.value;  
    var email=document.paymentform.email.value;
    var address=document.paymentform.address.value;
    var rent=document.paymentform.amt.value;
    var cardname=document.paymentform.cardname.value;
    var cardnumber=document.paymentform.cardnumber.value;
    var expdate=document.paymentform.expdate.value;
    var cvv=document.paymentform.cvv.value;

    var letters = /^[A-Za-z]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var alphanumeric = /^[0-9a-zA-Z]+$/;
    var visacardnoformat = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
    var mastercardnoformat = /^(?:5[1-5][0-9]{14})$/;
    var cvvformat = /^[0-9]{3,4}$/;

    if (fullname == null || fullname == "") {
      alert('Please enter your full name');
      document.paymentform.fullname.focus();
      return false
    }
    else if(!fullname.match(letters)){
      alert('Full name must have alphabet characters only');
      document.paymentform.fullname.focus();
      return false;
    }

    else if (email == null || email == "") {
      alert('Please enter your email');
      document.paymentform.email.focus();
      return false;
    }
    else if(!email.match(mailformat)){
      alert("Invalid email address!");
      document.paymentform.email.focus();
      return false;
    }
 
    else if (address == null || address == "") {
      alert('Please enter your address');
      document.paymentform.address.focus();
      return false;
    }
    else if(!address.match(letters)){
      alert('Address must have numbers and letters only');
      document.paymentform.address.focus();
      return false;
    }

    if (cardname == null || cardname == "") {
      alert('Please enter the name on your card');
      document.paymentform.cardname.focus();
      return false;
    }
    else if(!cardname.match(letters)) {
      alert('Name on card must have alphabet characters only');
      document.paymentform.cardname.focus();
      return false;
    }

    else if (cardnumber == null || cardnumber == "") {
      alert('Please enter your card number');
      document.paymentform.cardnumber.focus();
      return false;
    }
    else if(!cardnumber.match(visacardnoformat) && !cardnumber.match(mastercardnoformat)){
      alert("Invalid Visa or Master card card number!");
      document.paymentform.cardnumber.focus();
      return false;
    }

    else if (expdate == null || expdate == "") {
      alert('Please enter expiry date');
      document.paymentform.expdate.focus();
      return false;
    }

    else if(cvv == null || cvv == "") {
      alert("Please enter the cvv")
      document.paymentform.cvv.focus();
      return false;
    }
    else if(!cvv.match(cvvformat)) {
      alert("Invalid cvv number")
      document.paymentform.cvv.focus();
      return false;
    }
  }