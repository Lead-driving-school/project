function register()         
    { 
      
      var name=document.getElementById('Name').value;
      var empAddress=document.getElementById('empAddress').value;
      var NIC=document.getElementById('NIC').value;
      var Dob=document.getElementById('Dob').value;
      var gender=document.getElementById('gender').value;
      var telNo=document.getElementById('telNo').value;
      var empType=document.getElementById('empType').value;
      var licenseNumber=document.getElementById('licenseNumber').value;

      // console.log(name+" "+empAddress+" "+NIC+" "+Dob+" "+gender+" "+telNo+" "+empType+" "+licenseNumber)

      if (Name == "" ||empAddress== "" || NIC== "" ||Dob== "" ||gender== "" ||telNo== "" ||empType== "")
      {
        if(Name == "") {
          document.getElementById('Name').placeholder="Name field can't be empty";
          document.getElementById('Name').style.border="2px solid red";
        } 
        if(empAddress== "") {
          document.getElementById('empAddress').placeholder="Expense field can't be empty";
          document.getElementById('empAddress').style.border="2px solid red";
          
        }
        if(NIC== "") {
          document.getElementById('NIC').placeholder="Expense field can't be empty";
          document.getElementById('NIC').style.border="2px solid red";
          
        }
        if(Dob== "") {
          document.getElementById('Dob').placeholder="Expense field can't be empty";
          document.getElementById('Dob').style.border="2px solid red";
          
        }
        if(gender== "") {
          document.getElementById('gender').placeholder="Expense field can't be empty";
          document.getElementById('gender').style.border="2px solid red";
          
        }
        if(telNo== "") {
          document.getElementById('telNo').placeholder="Expense field can't be empty";
          document.getElementById('telNo').style.border="2px solid red";
          
        }
        if(empType== "") {
          document.getElementById('empType').placeholder="Expense field can't be empty";
          document.getElementById('empType').style.border="2px solid red"; 
        }                  
      }
      else
      {
        let httpreq = new XMLHttpRequest();
        httpreq.onreadystatechange = function(){
          console.log("onreadystatechange");
          if( httpreq.readyState === 4 && httpreq.status === 200){
              // console.log("Done");
              // console.log(httpreq.responseText);
              if(httpreq.responseText=='New Record created successfully'){
                window.location.assign("http://localhost/project/Admin/staff");
              }
              
          }
        }

        let newName=name.replace(/\s+/g, '-');
        let newAddress=empAddress.replace(/\s+/g, '-');
        console.log(newName);
        let Employee=[newName,newAddress,NIC,Dob,gender,telNo,empType,licenseNumber];
        
        let url = "http://localhost/project/Admin/registerEmployee/"+Employee;
    
        httpreq.open( "POST" , url  , true);
        httpreq.send();
      }
      
    }
   

    

