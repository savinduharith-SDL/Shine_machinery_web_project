function loginValidate(){  
  var type=document.rentform.machine.selectedIndex;  
  var jobsite=document.rentform.address.value;
  var startdate=document.rentform.startdate.value;
  var enddate=document.rentform.enddate.value;

  if(type==0){
    alert ( "Please select machine type." );
    return false;
  }
  else if(jobsite==null || jobsite==""){  
    alert("Please enter your jobsite");  
    return false;  
  }
  else if(startdate==0){  
    alert("Please enter the rental start date");  
    return false;  
  }
  else if(enddate==0){  
    alert("Please enter the rental start date");  
    return false;  
  }   
}  