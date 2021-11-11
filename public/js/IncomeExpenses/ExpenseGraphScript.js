let label2=['Monday','Tuesday','WednesDay','Thursday','Friday','Saturday','Sunday'];
let data1=[5000.00,8000.00,4000.00,10000.00,10000.00,3000.00,6500.00];
let colors2=['#0892d0','#0892d0'];

let mychart=document.getElementById("ExpenseChart").getContext('2d');
let chart2= new Chart(mychart, {
    type: 'bar',
    data:{
        labels: label2,
        datasets: [{
            data: data2,
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