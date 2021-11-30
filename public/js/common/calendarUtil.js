
function getFullDate(date,month,year) {
        console.log(date+" "+month+" "+" "+year);
        var date=year+"-"+(month+1)+"-"+date
        return date
}


let httpreq1=new XMLHttpRequest()
httpreq1.onreadystatechange=function(){
        if(httpreq1.readyState===4 && httpreq1.status===200){
        
                const examArray=JSON.parse(httpreq1.responseText)
                viewExam(examArray)
        }
}
let url1="http://localhost/project/Manager/getAvailableExams"
httpreq1.open("POST",url1,true)
httpreq1.send()



let httpreq2=new XMLHttpRequest()
httpreq2.onreadystatechange=function(){
        if(httpreq2.readyState===4 && httpreq2.status===200){
                
                const sessionArray=JSON.parse(httpreq2.responseText)
                viewSession(sessionArray)
        }
}
let url2="http://localhost/project/Manager/getAvailableSessions"
httpreq2.open("POST",url2,true)
httpreq2.send()


function viewSession(obj){
       let row=document.getElementById("tablerows")
       for(var i=0;i<obj.length;i++){
               row.innerHTML+='<div class="row">'+
               '<div class="cell">'+
                 '<div class="information">'+
                   '<div class="one">SE_'+obj[i].Session_id+'</div>'+
                   '<div class="two">'+obj[i].session_title+'</div>'+
                   '<div class="three">'+obj[i].type+'</div>'+
                   '<div class="four">'+obj[i].session_time+'</div>'+
                 '</div>'+
                 '<div class="viewButton">'+
                  '<button id="View" class="View">View</button>'+
                 '</div>'+
               '</div>'+
             '</div>'
       } 
}
function viewExam(obj){
       
}
