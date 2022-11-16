function rentValidate(){  
  var type=document.rentform.machine.selectedIndex;  
  var jobsite=document.rentform.address.value;
  var startdate=document.rentform.startdate.value;
  var enddate=document.rentform.enddate.value;

  if(type==0){
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

  window.location.href="payment.html";   
}  