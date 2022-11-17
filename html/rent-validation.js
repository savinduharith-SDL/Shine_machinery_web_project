function rentValidate() {  

  var type = document.rentform.machine.selectedIndex;  
  var jobsite = document.rentform.address.value;
  var rentaldays = document.rentform.rental.value;

  var letters = (/^[0-9a-zA-Z]+$/);

  if(type == 0) {
    alert("Please select machine type.");
    document.rentform.machine.focus();
    return false;
  }

  else if(jobsite == null || jobsite == "") {  
    alert("Please enter your jobsite.");  
    document.rentform.address.focus();
    return false
  }
  else if(!jobsite.match(letters)) {
    alert('Address must contain numbers and letters only');
    document.rentform.address.focus();
    return false;
  }
  else if(rentaldays < 1 || rentaldays > 90) {
    alert('Please enter number of rentals days between 1-90');
    document.rentform.rental.focus();
    return false;
  }

}