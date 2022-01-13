function loadInitPrices(){
    let httpreq = new XMLHttpRequest()
    httpreq.onreadystatechange = function(){
        if(httpreq.readyState == 4 && httpreq.status == 200){
            const initPrices = JSON.parse(httpreq.responseText)
            const initRow = document.getElementById("Initial-Prices");
            const ExtraRow = document.getElementById("Extra-Prices");
            for(i=0;i<initPrices[1].length;i++){
                
                console.log(initPrices[4][i]+" "+initPrices[0][i]+" "+initPrices[1][i]+" "+initPrices[2][i]+" "+initPrices[3][i])
                
                initRow.innerHTML += '<div class="row">'+
                '<div class="col-1"><b class="bold-name-2">Vehicle Type</b><b class="bold">: </b>'+initPrices[0][i]+'</div>'+
                '<div class="col-2"><b class="bold-name-2">Vehicle class</b><b class="bold">: </b>'+initPrices[1][i]+'</div>'+
                '<div class="col-3"><b class="bold-name-2">Price (LKR)</b><b class="bold">: </b>'+initPrices[2][i]+'</div>'+
                '<div class="col-4"><button id="Ii'+initPrices[4][i]+'" class="edit" onclick ="editInit('+initPrices[4][i]+')">Edit</button><button id="I'+initPrices[4][i]+'"  class="save-small-deactivate" onclick ="saveInit()">Save</button><button id="ci'+initPrices[4][i]+'" class="cancel-small-deactivate" onclick ="cancelInit('+initPrices[4][i]+')">Cancel</button></div>'+
                '</div>'

                ExtraRow.innerHTML += '<div class="row">'+
                '<div class="col-1"><b class="bold-name-2">Vehicle Type</b><b class="bold">: </b>'+initPrices[0][i]+'</div>'+
                '<div class="col-2"><b class="bold-name-2">Vehicle class</b><b class="bold">: </b>'+initPrices[1][i]+'</div>'+
                '<div class="col-3"><b class="bold-name-2">Price (LKR)</b><b class="bold">: </b>'+initPrices[3][i]+'</div>'+
                '<div class="col-4"><button id="Ee'+initPrices[4][i]+'" class="edit" onclick ="editExtra('+initPrices[4][i]+')">Edit</button><button id="E'+initPrices[4][i]+'"  class="save-small-deactivate" onclick ="saveExtra()">Save</button><button id="ce'+initPrices[4][i]+'" class="cancel-small-deactivate" onclick ="cancelExtra('+initPrices[4][i]+')">Cancel</button></div>'+
                '</div>'
            }
        }
    }


    let url ="http://localhost/project/Admin/loadInitPrices";
    httpreq.open("post", url, true);
    httpreq.send();
}
loadInitPrices()

function editInit(id){
    document.getElementById('I'+id).classList.replace("save-small-deactivate","save-small")
    document.getElementById('Ii'+id).classList.replace("edit","edit-deactivate")
    document.getElementById('ci'+id).classList.replace("cancel-small-deactivate","cancel-small")
}

function cancelInit(id){
    document.getElementById('I'+id).classList.replace("save-small","save-small-deactivate")
    document.getElementById('Ii'+id).classList.replace("edit-deactivate","edit")
    document.getElementById('ci'+id).classList.replace("cancel-small","cancel-small-deactivate")
}

function editExtra(id){
    document.getElementById('E'+id).classList.replace("save-small-deactivate","save-small")
    document.getElementById('Ee'+id).classList.replace("edit","edit-deactivate")
    document.getElementById('ce'+id).classList.replace("cancel-small-deactivate","cancel-small")
}

function cancelExtra(id){
    document.getElementById('E'+id).classList.replace("save-small","save-small-deactivate")
    document.getElementById('Ee'+id).classList.replace("edit-deactivate","edit")
    document.getElementById('ce'+id).classList.replace("cancel-small","cancel-small-deactivate")
}