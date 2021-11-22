let count=0
butttonArr=[]
selectedInstructorsArr=[]
document.getElementById("counter").innerHTML=count

// preselect=document.getElementById("selectedArr").value
// preselectArr=preselect.split(",")
// for(var i=0;i<preselectArr.length;i++){
//     var idVar="Add_"+preselectArr[i]
//     document.getElementById(idVar).innerHTML="Remove"
//     document.getElementById(idVar).classList.replace("Add","Add-selected");
//     count=preselectArr.length
// }

function getInstructors(){
    let httpreq = new XMLHttpRequest();
    const rows=document.getElementById("tablerows")
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status === 200){
            console.log(httpreq.responseText);
            const obj=JSON.parse(httpreq.responseText)
            for(var i=0;i<obj.length;i++){
                obj[i].name = obj[i].name.replace(/-/g, " ");
            }

            for(var i=0;i<obj.length;i++){
                butttonArr.push(obj[i].employee_id)
                rows.innerHTML+='<div class="row">'+
                '<div class="cell">'+
                    '<div class="information">'+
                        '<div class="one">Emp_'+obj[i].employee_id+'</div>'+
                        '<div class="two">'+obj[i].name+'</div>'+
                        '<div class="three">'+obj[i].job_title+'</div>'+
                    '</div>'+
                    '<div class="addButton">'+
                        '<button class="Add" id="Add_'+obj[i].employee_id+'" onclick=selectSpecificInstructor('+obj[i].employee_id+','+obj.length+')>Add</button>'+
                    '</div>'+
                '</div>'+
            '</div>'
            }
            
        }
    }
    let url="http://localhost/project/Manager/addInstructorsForSessions";
    httpreq.open( "POST" , url  , true);
    httpreq.send();
}

function selectSpecificInstructor(id,length){
    var idVal="Add_"+id
    if(document.getElementById(idVal).innerHTML=="Add"){
        document.getElementById(idVal).classList.replace("Add","Add-selected");
        document.getElementById(idVal).innerHTML="Remove"
        count++
    }else{
        document.getElementById(idVal).classList.replace("Add-selected","Add");
        document.getElementById(idVal).innerHTML="Add"
        count--
    }
    document.getElementById("counter").innerHTML=count;
}

function assignInstructors(){
    for(var j=0;j<butttonArr.length;j++){
        var idVal="Add_"+butttonArr[j]
        if(document.getElementById(idVal).innerHTML=="Remove"){
            selectedInstructorsArr.push(butttonArr[j])
        }
    }
    let httpreq = new XMLHttpRequest();
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status===200){
            if(httpreq.responseText=="saved"){
                window.location.href="http://localhost/project/Manager/addSession"
            }
        }
    }
    let url="http://localhost/project/Manager/selectedInstructorsForSessions/"+selectedInstructorsArr
    httpreq.open("POST",url,true)
    httpreq.send()

}
getInstructors()

console.log(butttonArr)