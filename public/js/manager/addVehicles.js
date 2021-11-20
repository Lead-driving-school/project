let count=0
document.getElementById("counter").innerHTML=count

function getVehicles(){
    let httpreq = new XMLHttpRequest();
    const rows=document.getElementById("tableRows")
    httpreq.onreadystatechange=function(){
        if(httpreq.readyState===4 && httpreq.status === 200){
            console.log(httpreq.responseText);
            const obj=JSON.parse(httpreq.responseText)
            for(var i=0;i<obj.length;i++){
                obj[i].vehicle_no = obj[i].vehicle_no.replace(/-/g, " ");
                obj[i].vehicle_type = obj[i].vehicle_type.replace(/-/g, " ");
            }

            for(var i=0;i<obj.length;i++){
                rows.innerHTML+='<div class="row">'+
                '<div class="cell">'+
                    '<div class="information">'+
                        '<div class="one">V_'+obj[i].vehicle_id+'</div>'+
                        '<div class="two">'+obj[i].vehicle_no+'</div>'+
                        '<div class="three">'+obj[i].vehicle_class+'</div>'+
                        '<div class="four">'+obj[i].vehicle_type+'</div>'+
                    '</div>'+
                    '<div class="addButton">'+
                        '<button class="Add" id="Add_'+i+'" onclick=selectSpecificVehicle('+i+','+obj.length+')>Add</button>'+
                    '</div>'+
                '</div>'+
            '</div>'
            }
            
        }
    }
    let url="http://localhost/project/Manager/addVehiclesForSessions";
    httpreq.open( "POST" , url  , true);
    httpreq.send();

}
function selectSpecificVehicle(id,length){

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
getVehicles()