function loadJobs(){
    let httprequest = new XMLHttpRequest();
    httprequest.onreadystatechange = function(){
        if (httprequest.readyState===4 && httprequest.status===200){
            console.log("Hi")
            console.log(httprequest.responseText)
            const obj=JSON.parse(httprequest.responseText)
            document.getElementById('empType').innerHTML='<option value="Manager">'+obj['Manager']+'</option>'
            +'<option value="Receptionist">'+obj['Receptionist']+'</option>'+'<option value="Instructor">'+obj['Instructor']+'</option>'
            +'<option value="Teacher">'+obj['Teacher']+'</option>'
            
        }
    }
    var url="http://localhost/project/Admin/loadJobs";
    httprequest.open("POST",url,true)
    httprequest.send()
}
loadJobs()


function changeLicense(){
  if(document.getElementById('empType').value=='Instructor'){
    document.getElementById('license-Number').style.visibility="visible"
  }
  else{
    document.getElementById('license-Number').style.visibility="hidden"
  }
}


function register()         
    { 
      
      var name=document.getElementById('Name').value;
      var empAddress=document.getElementById('empAddress').value;
      var NIC=document.getElementById('NIC').value;
      var Dob=document.getElementById('Dob').value;
      var telNo=document.getElementById('telNo').value;
      var Gender=document.getElementsByName('Gender').value
      var empType=document.getElementById('empType').value;
      var licenseNumber=document.getElementById('licenseNumber').value;
      var err=document.getElementById('err');

      

      if (name == "" ||empAddress== "" || NIC== "" ||Dob== "" || Gender=="" ||telNo== "" ||empType== "")
      {
        if(name == "") {
          document.getElementById('Name').placeholder="Name field can't be empty";
          document.getElementById('Name').style.border="2px solid red";
        } 
        if(empAddress== "") {
          document.getElementById('empAddress').placeholder="Address field can't be empty";
          document.getElementById('empAddress').style.border="2px solid red";
          
        }
        if(NIC== "") {
          document.getElementById('NIC').placeholder="NIC field can't be empty";
          document.getElementById('NIC').style.border="2px solid red";
          
        }
        if(Dob== "") {
          document.getElementById('Dob').placeholder="Date of birth field can't be empty";
          document.getElementById('Dob').style.border="2px solid red";
          
        }
        if(document.getElementById('male').checked) {
           var gender='m';
        }
        else if(document.getElementById('female').checked){
           var gender='f'
        }
        else{
          document.getElementById('gender-below').innerHTML="Gender field can't be empty";
        }
        if(telNo== "") {
          document.getElementById('telNo').placeholder="Contact number field can't be empty";
          document.getElementById('telNo').style.border="2px solid red";
          
        }                  
      }
      else
      {
        console.log(name+" "+empAddress+" "+NIC+" "+Dob+" "+Gender+" "+telNo+" "+empType+" "+licenseNumber)
        let httpreq = new XMLHttpRequest();
        httpreq.onreadystatechange = function(){
          console.log("onreadystatechange");
          if( httpreq.readyState === 4 && httpreq.status === 200){
              // console.log("Done");
              console.log(httpreq.responseText);
              if(httpreq.responseText=='successfull'){
                alert("Registration successfully")
                window.location.assign("http://localhost/project/Admin/staff");
              }
              else if(httpreq.responseText=='contact exist'){
                err.classList.replace("err","err-true"); 
                err.innerHTML='The contact number you entered is already exist';
                 
              }
              else if(httpreq.responseText=='nic exist'){
                err.classList.replace("err","err-true");
                err.innerHTML='The NIC you entered is already exist'; 
              }
              else if(httpreq.responseText=='nic contact exist'){
                err.classList.replace("err","err-true");
                err.innerHTML='The NIC and contact number you entered are already exist'; 
              }
              
          }
        }

        name=name.replace(/,+/g, '_');
        name=name.replace(/\s+/g, '-');
        name=name.replace(/\/+/g, '~');
        
        empAddress=empAddress.replace(/,+/g, '_');
        empAddress=empAddress.replace(/\s+/g, '-');
        empAddress=empAddress.replace(/\/+/g, '~');

        if(document.getElementById('male').checked) {
          Gender=document.getElementById('male').value;
        }
        else if(document.getElementById('female').checked){
          Gender=document.getElementById('female').value
        }

        console.log(Gender)
        let Employee=[name,empAddress,NIC,Dob,Gender,telNo,empType,licenseNumber];
        
        let url = "http://localhost/project/Admin/registerEmployee/"+Employee;
    
        httpreq.open( "POST" , url  , true);
        httpreq.send();
      }
      
    }

    
   

    

