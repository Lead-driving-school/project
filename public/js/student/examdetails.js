function getExamDetails(){

    const row=document.getElementById("theory-details").innerHTML;
    let httpreq=new XMLHttpRequest();

    httpreq.onreadystatechange=function(){
        if (httpreq.status===200 && httpreq.readyState===4){
            
        }
    }

    var url="http://localhost/project/Student/getExamDetails";
    httpreq.open("POST",url,true)
    httpreq.send()


}

getExamDetails();