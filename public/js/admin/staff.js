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
        // console.log(employee[0].employee_id)
        function loadTable(){
            for(var i=0;i<employee.length;i++){
                rows.innerHTML += '<div class="row"  ><div class="col-1" "  value="'+employee[i].employee_id+'">EM-'+employee[i].employee_id+'</div><div class="col-2">'+employee[i].name+'</div><div class="col-3">'+employee[i].job_title+'</div><div class="col-4">'+employee[i].contact_no+'</div><div class="col-5"><button class="view-more" id="'+employee[i].employee_id+'" onclick="viewMore('+employee[i].employee_id+')">View more</button></div></div>';
                console.log(document.getElementById(employee[i].employee_id).id)
            }
        }

    }
}

let url = "http://localhost/project/Admin/getEmployeeDetails";

httpreq.open( "POST" , url  , true);
//httpreq.setRequestHeader( "Content-type" , "application/x-www-form-urlencoded");
httpreq.send();

function viewMore(id){

        
        let httpreq = new XMLHttpRequest();
        httpreq.onreadystatechange = function(){
            console.log("onreadystatechange");
            if( httpreq.readyState === 4 && httpreq.status === 200){
                console.log(httpreq.responseText);
                const employee = JSON.parse(httpreq.responseText);
                console.log(employee);
    
                var empname=employee[0].name.replace(/_+/g, ',');
                console.log(empname)
                empname = empname.replace(/-+/g, ' ');
                console.log(empname)
                empname=empname.replace(/~+/g, '/');
                console.log(empname)
                
                var empAddress=employee[0].address.replace(/_+/g, ',');
                empAddress=empAddress.replace(/-+/g, ' ');
                empAddress=empAddress.replace(/~+/g, '/');
                    

                document.getElementById("emId").innerText='EM-'+employee[0].employee_id
                document.getElementById("Name").innerText=empname
                document.getElementById("Job-title").innerText=employee[0].job_title
                document.getElementById("NIC").innerText=employee[0].nic
                document.getElementById("Contact").innerText=employee[0].contact_no
                document.getElementById("Address").innerText=empAddress
                document.getElementById("dob").innerText=employee[0].dob
                document.getElementById("Gender").innerText=employee[0].gender
                document.getElementById("Hiring-Date").innerText=employee[0].hired_date
                if(employee[0].job_title=='Instructor'){
                    document.getElementById("Licence-row").innerHTML='<div class="mid-box-column-1"><h4>Licence-No</h4><h4>:</h4></div><div class="mid-box-column-2" id="Licence-No">'+employee[1].instructor_license_id+'</div>'
                }
                
                
                
            }
        }
        let url = "http://localhost/project/Admin/getEmployeeDetailsMore/"+id;

        
    
        httpreq.open( "POST" , url  , true);
        httpreq.send();

    document.getElementById("mid-box-container-1").classList.replace("mid-box-container-1","mid-box-container-1-active")
}

function closeMore(){
    document.getElementById("mid-box-container-1").classList.replace("mid-box-container-1-active","mid-box-container-1")
 }

        