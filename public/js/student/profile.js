function profileData(){
    const row=document.getElementById("details");
    let httprequest=new XMLHttpRequest();
    httprequest.onreadystatechange=function(){
        if(httprequest.readyState==4 && httprequest.status==200){
           // console.log(row)
           console.log(httprequest.responseText)
            const obj=JSON.parse(httprequest.responseText)
           console.log(obj[0].full_name)

          //  for(var i=0; i<obj.length;i++){
               row.innerHTML=
           '<div class="row-1"><div class="col-1">Name</div><div class="col-2">:</div><div class="col-3">'+obj[0].full_name+'</div></div>'+
            '<div class="row-1"> <div class="col-1">NIC</div> <div class="col-2">:</div><div class="col-3">'+obj[0].NIC+'</div></div>'+
            '<div class="row-1"><div class="col-1">Title</div><div class="col-2">:</div><div class="col-3">Student</div></div>'+
            '<div class="row-1"><div class="col-1">Address</div><div class="col-2">:</div><div class="col-3">'+obj[0].address+'</div></div>'+
           ' <div class="row-1"><div class="col-1">Tel-No</div><div class="col-2">:</div><div class="col-3">'+obj[0].contact+'</div>'

        
        }
    }

    var url="http://localhost/project/Student/profileLogic";
    httprequest.open("POST",url,true)
    httprequest.send()

}

profileData()