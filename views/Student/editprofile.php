<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo URL?>public/css/student/editprofile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead driving school</title>
</head>
<body>
    <div class="container-1">
        <div class="container-2">
            <div class="container-title">
                <div class="title">
                    <h1>Edit Profile</h1>
                </div>
            </div>
            <div class="container-profile">

                <div class="row">
                    <div class="cell-1">
                        <h4>Profile </h4>
                        <h4>:</h4> </div>
                    <div class="cell-2">
                            <img src="<?php echo URL?>public/images/profpic.png" alt="pp">
                    </div>
                    <div class="cell-3">
                        <button class="Edit">Edit</button>
                    </div>
                </div>

                <div class="row">
                    <div class="cell-1">
                        <h4>Mobile</h4>
                        <h4>:</h4>  
                    </div>
                    <div class="cell-2">
                        077 2325764
                    </div>
                    <div class="cell-3">
                        <button class="Edit">Edit</button>
                    </div>
                </div>
                <div class="row-button">
                        <button class="change-pwd" onclick="popupPwd()">Change Password</button>
                </div>   
            </div> 
            <div class="container-pwd" id="container-pwd">
                <div class="table-pwd">
                    <div class="pwd-row">
                        <div class="col-1">
                            <h4>Curruent Password</h4>
                        </div>
                        <div class="col-2">
                            <h4>:</h4>  
                        </div>
                        <div class="col-3">
                            <input type="password" id="curruentPwd">
                        </div>
                    </div>
                    <div class="pwd-row">
                        <div class="col-1">
                            <h4>New Password</h4>
                        </div>
                        <div class="col-2">
                            <h4>:</h4>  
                        </div>
                        <div class="col-3">
                            <input type="password" id="newPwd">
                        </div>
                    </div>
                    <div class="pwd-row">
                        <div class="col-1">
                            <h4>Confirm Password</h4>
                        </div>
                        <div class="col-2">
                            <h4>:</h4>  
                        </div>
                        <div class="col-3">
                            <input type="password" id="rePwd">
                        </div>
                    </div>
                    <div class="pwd-row-submit">
                        <button class="back" onclick="backPopup()">Back</button>
                        <button class="cancel" onclick="cancel()">Cancel</button>
                        <button class="submit" onclick="submitPwd()">Submit</button>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    
    <script>
        
        function popupPwd(){
            document.getElementById("container-pwd").classList.replace("container-pwd","container-pwd-active");
            document.getElementById("curruentPwd").value="";
            document.getElementById("newPwd").value="";
            document.getElementById("rePwd").value="";
        }
        function backPopup(){
            document.getElementById("container-pwd").classList.replace("container-pwd-active","container-pwd");
        }   

        function cancel(){
            document.getElementById("curruentPwd").value="";
            document.getElementById("newPwd").value="";
            document.getElementById("rePwd").value="";
        }

        function submitPwd(){
           
            var crntpwd= document.getElementById("curruentPwd").value;
            var newPwd=document.getElementById("newPwd").value;
            var rePwd=document.getElementById("rePwd").value;


            if(crntpwd.length==0){
                document.getElementById("curruentPwd").placeholder="Password field can not be empty"; 
                document.getElementById("curruentPwd").style.border="2px solid red";
            }
            if(newPwd.length==0){
                document.getElementById("newPwd").placeholder="Password field can not be empty"; 
                document.getElementById("newPwd").style.border="2px solid red";
            }
             if(rePwd.length==0){
                document.getElementById("rePwd").placeholder="Password field can not be empty"; 
                document.getElementById("rePwd").style.border="2px solid red";     

            }
            else{
            
                let httpreq=new XMLHttpRequest();

                httpreq.onreadystatechange=function(){
                    if(httpreq.readyState === 4 && httpreq.status === 200){
                        console.log(httpreq.responseText);
                        if(httpreq.responseText=="success"){
                            if(newPwd==rePwd){
                                updatePwd(newPwd);
                            }
                            else{
                                document.getElementById('newPwd').value="";
                                document.getElementById('rePwd').value="";  
                                document.getElementById("rePwd").placeholder="Password does not match"; 
                                document.getElementById("rePwd").style.border="2px solid red";
                            }

                        }
                        else{
                            document.getElementById('curruentPwd').value="";
                            document.getElementById('curruentPwd').placeholder="Incorrect password";
                            document.getElementById('curruentPwd').style.border="2px solid red";
                        }
                    }
                }

                let url="http://localhost/project/Student/validate/"+ crntpwd;
                httpreq.open("POST",url,true);
                httpreq.send();

            }
 
        }

        function updatePwd(newPwd){
            let httpreq=new XMLHttpRequest();

            httpreq.onreadystatechange=function(){
                if(httpreq.readyState===4 && httpreq.status===200){
                    console.log(httpreq.responseText);
                    if(httpreq.responseText=="updated"){
                        alert("You have update your password");
                        document.getElementById("curruentPwd").value="";
                        document.getElementById("newPwd").value="";
                        document.getElementById("rePwd").value="";
                        document.getElementById("container-pwd").classList.replace("container-pwd-active","container-pwd");
                    }
                }
            }

            let url = "http://localhost/project/Student/updatePasswordLogic/" + newPwd;
            httpreq.open("POST",url,true);
            httpreq.send();

        }
    </script>
</body>
</html>