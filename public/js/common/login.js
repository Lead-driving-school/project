function check_empty_field()         
    {                                    
      if (document.forms["loginForm"]["username"].value == "" ||document.forms["loginForm"]["password"].value== "")
      {
        alert("Please fill in the password or login field.");
        return false;                    
      }
      else
      {
        return true;                     
      }
    }


    

