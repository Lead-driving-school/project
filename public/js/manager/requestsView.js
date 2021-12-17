function viewRequests(){
    let httpreq=new XMLHttpRequest()
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status===200){
            console.log(httpreq.responseText)
            const obj=JSON.parse(httpreq.responseText)
            let rows=document.getElementById("tableRows")
            rows.innerHTML=""
            let buttonContainer=document.getElementById("buttonContainer")
            buttonContainer.innerHTML=""
            let detailList=document.getElementById("detailsList")
            detailList.innerHTML='<div class="initial-message-box">'+
            '<div class="search-icon">Search Icon</div>'+
                '<div class="message-content">'+
                    '<div class="row1">Click `View`</div>'+
                    '<div class="row2">to see further details</div>'+
                '</div>'+
            '</div>'
            for(var i=0;i<obj.length;i++){
                obj[i].init_name = obj[i].init_name.replace(/-/g, " ");
                rows.innerHTML+='<div class="row">'+
                    '<div class="cell">'+
                    '<div class="information">'+
                        '<h2>'+obj[i].init_name+' has sent a request.'+'</h2>'+
                    '</div>'+
                    '<div class="viewButton">'+
                        '<button class="View" id="View" '+obj[i].session_id+'_'+obj[i].student_id+' onclick="viewDetailsSessions('+obj[i].session_id+','+obj[i].student_id+')">View</button>'+
                    '</div>'+
                '</div>'+
            '</div>'
            }
            
        }
    }
    let url="http://localhost/project/Manager/viewSessionRequests/"
    httpreq.open("POST",url,true)
    httpreq.send()
}
viewRequests()

function viewExams(){
    let httpreq=new XMLHttpRequest()
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status===200){
            console.log(httpreq.responseText)
            const obj=JSON.parse(httpreq.responseText)
            let rows=document.getElementById("tableRows")
            rows.innerHTML=""
            let buttonContainer=document.getElementById("buttonContainer")
            buttonContainer.innerHTML=""
            let detailList=document.getElementById("detailsList")
            detailList.innerHTML='<div class="initial-message-box">'+
            '<div class="search-icon">Search Icon</div>'+
                '<div class="message-content">'+
                    '<div class="row1">Click `View`</div>'+
                    '<div class="row2">to see further details</div>'+
                '</div>'+
            '</div>'
            for(var i=0;i<obj.length;i++){
                obj[i].init_name = obj[i].init_name.replace(/-/g, " ");
                rows.innerHTML+='<div class="row">'+
                    '<div class="cell">'+
                    '<div class="information">'+
                        '<h2>'+obj[i].init_name+' has sent a request.'+'</h2>'+
                    '</div>'+
                    '<div class="viewButton">'+
                        '<button class="View" id="View_'+obj[i].exam_id+'_'+obj[i].student_id+'" onclick="viewDetailsExams('+obj[i].exam_id+','+obj[i].student_id+')">View</button>'+
                    '</div>'+
                '</div>'+
            '</div>'
            }
        }
    }
    let url="http://localhost/project/Manager/viewExamRequests/"
    httpreq.open("POST",url,true)
    httpreq.send()
}

function viewSessions(){
    let httpreq=new XMLHttpRequest()
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status===200){
            console.log(httpreq.responseText)
            const obj=JSON.parse(httpreq.responseText)
            let rows=document.getElementById("tableRows")
            rows.innerHTML=""
            let buttonContainer=document.getElementById("buttonContainer")
            buttonContainer.innerHTML=""
            let detailList=document.getElementById("detailsList")
            detailList.innerHTML='<div class="initial-message-box">'+
            '<div class="search-icon">Search Icon</div>'+
                '<div class="message-content">'+
                    '<div class="row1">Click `View`</div>'+
                    '<div class="row2">to see further details</div>'+
                '</div>'+
            '</div>'
            for(var i=0;i<obj.length;i++){
                obj[i].init_name = obj[i].init_name.replace(/-/g, " ");
                rows.innerHTML+='<div class="row">'+
                    '<div class="cell">'+
                    '<div class="information">'+
                        '<h2>'+obj[i].init_name+' has sent a request.'+'</h2>'+
                    '</div>'+
                    '<div class="viewButton">'+
                        '<button Class="View" id="View_'+obj[i].session_id+'_'+obj[i].student_id+'" onclick="viewDetailsSessions('+obj[i].session_id+','+obj[i].student_id+')">View</button>'+
                    '</div>'+
                '</div>'+
            '</div>'
            }
            
        }
    }
    let url="http://localhost/project/Manager/viewSessionRequests/"
    httpreq.open("POST",url,true)
    httpreq.send()
}
function viewDetailsSessions(sessionId,studentId){
    let httpreq=new XMLHttpRequest()
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status===200){
            console.log(httpreq.responseText)
            const obj=JSON.parse(httpreq.responseText)
            
            obj[0].init_name=obj[0].init_name.replace(/-/g, " ");
            obj[0].session_title=obj[0].session_title.replace(/-/g, " ");
            let str=String(obj[0].date_time)
            const myArr= str.split(" ")

            let detailList=document.getElementById("detailsList")
            detailList.innerHTML='<div class="record"><div class="label">Session Title</div><div class="data-part">'+obj[0].session_title+'</div></div>'+
            '<div class="record"><div class="label">Sender</div><div class="data-part">'+obj[0].init_name+'</div></div>'+
            '<div class="record"><div class="label">Sending Date</div><div class="data-part">'+myArr[0]+'</div></div>'+
            '<div class="record"><div class="label">Sending Time</div><div class="data-part">'+myArr[1]+'</div></div>'+
            '<div class="record"><div class="label">Session Date</div><div class="data-part">'+obj[0].session_date+'</div></div>'+
            '<div class="record"><div class="label">Session Time</div><div class="data-part">'+obj[0].session_time+'</div></div>'+
            '<div class="record"><div class="label">Session type</div><div class="data-part">'+obj[0].type+'</div></div>'+
            '<div class="record"><div class="label">Current Allocation</div><div class="data-part">'+obj[0].total_assigns+'/20</div></div>'
    
            let buttonContainer=document.getElementById("buttonContainer")
            buttonContainer.innerHTML='<button name="Accept" id="Accept">Accept</button>'+
                                       '<button name="Reject" id="Reject">Reject</button>'
        }
    }
    let url="http://localhost/project/Manager/viewSessionRequestsFurther/"+studentId+"/"+sessionId
    httpreq.open("POST",url,true)
    httpreq.send()

}

function viewDetailsExams(examId,studentId){
    let httpreq=new XMLHttpRequest()
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status===200){
            console.log(httpreq.responseText)
            const obj=JSON.parse(httpreq.responseText)

            
                let str=String(obj[0].date_time)
                const myArr= str.split(" ")

                obj[0].init_name=obj[0].init_name.replace(/-/g, " ");
            let detailList=document.getElementById("detailsList")
            detailList.innerHTML='<div class="record"><div class="label">Sender</div><div class="data-part">'+obj[0].init_name+'</div></div>'+
            '<div class="record"><div class="label">Sending Date</div><div class="data-part">'+myArr[0]+'</div></div>'+
            '<div class="record"><div class="label">Sending Time</div><div class="data-part">'+myArr[1]+'</div></div>'+
            '<div class="record"><div class="label">Exam Date</div><div class="data-part">'+obj[0].exam_date+'</div></div>'+
            '<div class="record"><div class="label">Exam Time</div><div class="data-part">'+obj[0].exam_time+'</div></div>'+
            '<div class="record"><div class="label">Exam type</div><div class="data-part">'+obj[0].exam_type+'</div></div>'+
            '<div class="record"><div class="label">Current Allocation</div><div class="data-part">'+obj[0].total_assigns+'/4</div></div>'
    
            let buttonContainer=document.getElementById("buttonContainer")
            buttonContainer.innerHTML='<button name="Accept" id="Accept">Accept</button>'+
                                       '<button name="Reject" id="Reject">Reject</button>'
        }
    }
    let url="http://localhost/project/Manager/viewExamRequestsFurther/"+studentId+"/"+examId
    httpreq.open("POST",url,true)
    httpreq.send()
}