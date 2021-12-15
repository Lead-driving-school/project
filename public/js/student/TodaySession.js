function viewTodaySession(){

    const row = document.getElementById("data");
    let httprequest=new XMLHttpRequest();
    httprequest.onreadystatechange=function(){
        if (httprequest.readyState===4 && httprequest.status===200){
            console.log(httprequest.responseText)
           const obj=JSON.parse(httprequest.responseText)
           console.log(obj)
           for(var i=0; i<obj.length;i++){
            row.innerHTML+=
            '<div class="row"><div class="col">'+obj[i].session_id +'</div>'+
            '<div class="col">'+obj[i].session_title+'</div>'+
            '<div class="col">'+obj[i].session_date+'</div>'+
            '<div class="col">'+obj[i].session_time+'</div>'+
            '<div class="col"> <button class="going">Going</button></div><div class="col"> <button class="notgoing">Not Going</button></div></div>'

        }

        }


    }
    
    var url="http://localhost/project/Student/markGoingNotGoingLogic";
    httprequest.open("POST",url,true)
    httprequest.send()
}
viewTodaySession()
