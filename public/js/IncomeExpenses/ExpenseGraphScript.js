function loadType(){
    let methodSelector=document.getElementById("methodSelector")
    methodSelector.innerHTML='<option value="Weekly">Weekly</option>'+
                            '<option value="Monthly">Monthly</option>'+
                            '<option value="Annualy">Annualy</option>'

    let content=document.getElementById("dateSelector")
    content.innerHTML='<label for="date-container" class="date-container-label">Select Week:  </label>'+
    '<input type="week" class="date-container" name="dateContainer" id="dateContainer">'
}
loadType()
function inputSelector(){
    let type=document.getElementById("methodSelector").value
    let content=document.getElementById("dateSelector")
    if(type=="Weekly"){
        content.innerHTML='<label for="date-container" class="date-container-label">Select Week:  </label>'+
                        '<input type="week" class="date-container" name="dateContainer" id="dateContainer">'
    }else if(type=="Monthly"){
        content.innerHTML='<label for="date-container" class="date-container-label">Select Month:  </label>'+
                            '<input type="Month" class="date-container" name="dateContainer" id="dateContainer">'
    }else{
        content.innerHTML='<label for="date-container" class="date-container-label">Select Year:  </label>'+
                            '<select class="date-container" name="dateContainer" id="dateContainer"></select>'
        
        let currentYear=new Date().getFullYear()

        let dateContainer=document.getElementById("dateContainer")

        for(var i=2000;i<=currentYear;i++){
            dateContainer.innerHTML+='<option value="'+i+'">'+i+'</option>'
        }
    }
}
function expenseGraph(){
    let label2=['Monday','Tuesday','WednesDay','Thursday','Friday','Saturday','Sunday'];
    let data1=[5000.00,8000.00,4000.00,10000.00,10000.00,3000.00,6500.00];
    let colors2=['#0892d0','#0892d0'];

    let mychart=document.getElementById("expenseChart").getContext('2d');
    let chart2= new Chart(mychart, {
        type: 'bar',
        
        data:{
            labels: label2,
            datasets: [{
                label:"Amount of Expenses",
                data: data1,
                backgroundColor: colors2,
            }]
        },
        options:{
            title:{
                text:"hi,this is test",
                display: true
            },
            responsive:true
        }
        
    });
}
// expenseGraph()

function loadGraph(){
    let type=document.getElementById("methodSelector").value
    if(type=="Weekly"){
        let content=document.getElementById("dateContainer").value
        let httpreq=new XMLHttpRequest()
        httpreq.onreadystatechange=function(){
            if(httpreq.readyState===4 && httpreq.status===200){
                console.log(httpreq.responseText)
                const obj=JSON.parse(httpreq.responseText)
                // console.log(obj[0][0].total)
                let label2=['Monday','Tuesday','WednesDay','Thursday','Friday','Saturday','Sunday'];
                let data1=[obj[0],obj[1],obj[2],obj[3],obj[4],obj[5],obj[6]];
                let colors2=['#0892d0','#0892d0'];
                
                let mychart=document.getElementById("expenseChart").getContext('2d');
                let chart2= new Chart(mychart, {
                    type: 'bar',
                    
                    data:{
                        labels: label2,
                        datasets: [{
                            label:"Amount of Expenses",
                            data: data1,
                            backgroundColor: colors2,
                        }]
                    },
                    options:{
                        title:{
                            text:"hi,this is test",
                            display: true
                        },
                        responsive:true
                    }
                    
                });
                document.getElementById("go").addEventListener('click',function(){
                    chart2.destroy()
                });
            }
        }
        let url = "http://localhost/project/IncomeExpenses/loadGraphWeek/"+content;

        httpreq.open( "POST" , url  , true);

        httpreq.send();
    }
    if(type=="Monthly"){
        let content=document.getElementById("dateContainer").value
        let httpreq=new XMLHttpRequest()
        httpreq.onreadystatechange=function(){
            if(httpreq.readyState==4 && httpreq.status===200){
                // echo date('M d',strtotime('2013W15'));
            }
        }
        let url = "http://localhost/project/IncomeExpenses/loadGraphMonth/"+content;

        httpreq.open( "POST" , url  , true);

        httpreq.send();
    }
    if(type=="Annualy"){
        let content=document.getElementById("dateContainer").value
        let httpreq=new XMLHttpRequest()
        httpreq.onreadystatechange=function(){
            if(httpreq.readyState==4 && httpreq.status===200){

            }
        }
        let url = "http://localhost/project/IncomeExpenses/loadGraphAnnual/"+content;

        httpreq.open( "POST" , url  , true);

        httpreq.send();
    }
}
