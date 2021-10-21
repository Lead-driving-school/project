function check_empty_field()         
    {                                    
      if (document.getElementById("username").value == "" ||document.getElementById("password").value == "")
      {
        alert("Please fill in the password or login field.");                   
      }
      else
      {
        let httpreq = new XMLHttpRequest();

        httpreq.onreadystatechange = function(){
            console.log("onreadystatechange");
            if( httpreq.readyState === 4 && httpreq.status === 200){
                console.log("Done");
                const str = httpreq.responseText;
                console.log(httpreq.responseText);
                const myArr = str.split(",", 2);
                console.log(myArr[0]);
                console.log(myArr[1]);
                if(myArr[0]=='success'){
                  window.location.assign("http://localhost/project/"+myArr[1])
                }
                else{
                  document.getElementById("invalid-login").classList.replace("invalid-login","invalid-login-true");
                }
            }
        }
    
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        const data=[username,password];
    
        let url = "http://localhost/project/Staff/login/" + data;
    
        httpreq.open( "POST" , url  , true);
        //httpreq.setRequestHeader( "Content-type" , "application/x-www-form-urlencoded");
        httpreq.send();
        // return true;                     
      }
    }


    

 
