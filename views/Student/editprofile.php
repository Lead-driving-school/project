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
                            <input type="password">
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
                            <input type="password">
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
                            <input type="password">
                        </div>
                    </div>
                    <div class="pwd-row-submit">
                        <button class="back">Back</button>
                        <button class="cancel">Cancel</button>
                        <button class="submit">Submit</button>
                    </div>
                </div>
            </div>      
        </div>
    </div>
    
    <script>
        
        function popupPwd(){
            console.log("hello");
            document.getElementById("container-pwd").classList.replace("container-pwd","container-pwd-active");
}
    </script>
</body>
</html>