


function viewComplaint(){
    const row=document.getElementById("msgBox")
    let httprequest= new XMLHttpRequest();
    console.log("AAAAA")
    httprequest.onreadystatechange = function(){
        if (httprequest.readyState===4 && httprequest.status===200){
            console.log("Hi")
            console.log(httprequest.responseText)
            // for(var i=0; i<4; i++){
            //     row.innerHTML='<div class="msg-box-row">'+
            //     '<div class="msg-title"><h2>Good Training</h2></div>'+
            //     '<div class="msg-date"><h4>2021 sep 19</h4><h5>10.27am</h5></div>'+

            //     '<h3>Complain</h3>'+
            //     '<p>Topic sentences are similar to mini thesis statements. Like a thesis statement, a topic sentence has a specific main point. Whereas the thesis is the main point of the essay, the topic sentence is the main point of the paragraph. Like the thesis statement, a topic sentence has a unifying function.</p>'+
            //     '<h3>Suggetion</h3>'+
            //     '<p>Topic sentences are similar to mini thesis statements. Like a thesis statement, a topic sentence has a specific main point. Whereas the thesis is the main point of the essay, the topic sentence is the main point of the paragraph. Like the thesis statement, a topic sentence has a unifying function.</p>'+

            //     '<div class="msg-btn"><button class="mark-as-read">Mark as read</button></div>'+

            // '</div>'

            // }
        }
    }
    var url="http://localhost/project/Admin/complaintLogic";
    httprequest.open("POST",url,true)
    httprequest.send()

}

