
let httpreq = new XMLHttpRequest();

httpreq.onreadystatechange = function(){
    console.log("onreadystatechange");
    
    if( httpreq.readyState === 4 && httpreq.status === 200){

        // console.log(httpreq.responseText);
        const employee = JSON.parse(httpreq.responseText);
        for(var i=0;i<employee.length;i++){
            employee[i].name = employee[i].name.replace(/-/g, " ");
            // console.log(employee[i].name);
        }
        
        

        const rows = document.getElementById("row-container");
        loadTable()

        function loadTable(){
            for(var i=0;i<employee.length;i++){
                rows.innerHTML += '<div class="row"><div class="col-1"><b class="bold-name">ID</b><b class="bold">: </b>EM-'+employee[i].employee_id+'</div><div class="col-2"><b class="bold-name">Name</b><b class="bold">: </b>'+employee[i].name+'</div><div class="col-3"><b class="bold-name">Job Title</b><b class="bold">: </b>'+employee[i].job_title+'</div><div class="col-4"><b class="bold-name">Contact</b><b class="bold">: </b>'+employee[i].contact_no+'</div><div class="col-5"><a href="http://localhost/project/Admin/viewMoreEmployee"><button class="view-more">View more</button></a></div></div>';
            }
        }

    }
}

let url = "http://localhost/project/Admin/getEmployeeDetails";

httpreq.open( "POST" , url  , true);
//httpreq.setRequestHeader( "Content-type" , "application/x-www-form-urlencoded");
httpreq.send();
