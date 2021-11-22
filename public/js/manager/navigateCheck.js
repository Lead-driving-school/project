function callInstructorsPage(){
    let type=document.getElementById("type").value
    if(type=="Theory" || type=="Practical") {
        window.location.href="http://localhost/project/Manager/addInstructorS/"+type
    }else{
        document.getElementById("msg").innerHTML="Pleace Select a Type"
        document.getElementById("msg").style.color="Red"
    }  
}