<?php
$name=$_POST['name'];
$art=$_POST['art'];
?>
<!DOCTYPE html>
<html>
<head>
	
   <style>
   th {
    color:white;
    background:url(userbg.jpg);
    margin:20px;
    font-size:25px;
   }
   body{
    background-color:white;
    opacity:1;
   }
   td{
    color:green;
    margin:5px;
   }
   tr:hover{
       
      background-color:#f65314;}
   </style>
   

   </head>
   <body>

    <div class="container" style="margin-top:80px;">
      <div class="jumbotron" style="background:url(userbg.jpg);border-radius:20px">
       <h1 id="name" style="color:white"></h1>
       <p id="about"></p></div>
    </div>
   	<div  class="container" >
    <div id="sss"></div>
      <table  class="table" style="border-collapse:collapse;background:url(userbg.jpg);">
        <thead>
        <tr>
        <th>rank</th>
      <th>song</th>
    <th >artist</th>
  </tr></thead>
<tbody id="rest" ></tbody></table></div>

   	<script>
//alert("hii");
$(document).ready(function(){
         
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"album.getinfo",album:"<?php echo $art ?>",artist:"<?php echo $name ?>" ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
      //alert("hello");
    	$.each(responseText,function(i,fields){
        $("#name").text(fields.name);
          $("#about").css("color","white").html(fields.wiki.summary);
           for(var j=0;j<100;j++){
        var ele=document.createElement("tr");
        $(ele).appendTo("#rest").attr({"you":fields.tracks.track[j]["name"]+" "+fields.tracks.track[j].artist.name,"son":fields.tracks.track[j]["name"]}).addClass("youtube4");
        $("<td></td>").html(j+1).css({"color":"white","text-align":"left","margin-top":"10px"}).appendTo(ele);
          $("<td></td>").html("<b>"+fields.tracks.track[j]["name"]+"</b>").css({"color":"white","text-align":"left","margin-top":"10px","cursor":"pointer","padding-right":"0px"}).appendTo(ele);
           $("<td></td>").html("<b>"+fields.tracks.track[j].artist.name+"</b>").css({"color":"white","text-align":"left","margin-top":"10px","cursor":"pointer"}).appendTo(ele);


       }

        
    	                 
       });
       
    });
});
console.log("ff");
</script>

 <div class="modal fade" id="myyoutube" role="dialog">
    <div class="modal-dialog" style="width:670px">
    
      <!-- Modal content-->
     <div class="modal-content" style="background-color:black">
        <div class="modal-header">
         
         
        </div>
        <div class="modal-body">
          
          <p id="resuls" style="opacity:1;background-color:white"> </p><span>
         
        </div>
        <div class="modal-footer">
           <h4 class="modal-title" style="opacity:1;">MOST REVIEWED RELATED VIDEO ON YOUTUBE</h4>
          <button type="button" class="btn btn-default" data-dismiss="modal">PLAY IN BACKGROUND</button>
        </div>
      </div>
      
    </div>
  
 
</div>

        
<script>

function tplawesome(template, data) {
  // initiate the result to the basic template
  res = template;
  // for each data key, replace the content of the brackets with the data
  for(var i = 0; i < data.length; i++) {
    res = res.replace(/\{\{(.*?)\}\}/g, function(match, j) { // some magic regex
      return data[i][j];
    })
  }
  return res;
} // and that's it!

</script>
<script>
 $(function(){
  var i=0;
    $(document).on('click','.youtube4' ,function(e){


         let divi=`<div ><ul style="list-style:none;margin-top:10px;">
          <li style="cursor:pointer"><a id="like" ><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white">Like</button></a></li>
          <li style="cursor:pointer"><a id="playlist1"><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white;">Add to playlist</button></a></li>
          
          <li style="cursor:pointer"><a data-toggle="modal"  class="viiid" data-target="#myyoutube"><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white;">See video</button></a></li>
            </ul> </div>`;
       $("#sss").html(" "+divi);
         
       
          ee=$(this).attr("son");

          $.post("queue.php",{song:ee},function(result){     
            });
               
         
        $("#like").on("click",function(){
            $.post("like.php",{song:ee},function(result){
              $("#like").html("liked");
             
            //alert(ee);
        });  });
         $("#playlist1").on("click",function(){
            $.post("playlist.php",{song:ee},function(result){
              $("#playlist1").html("added");
             
            //alert(ee);
        });  });
       $("#addqueue").on("click",function(){
            $.post("queue.php",{song:ee},function(result){
              $("#addqueue").html("added");
             
            //alert(ee);
        });  });
              e.preventDefault();i++;
             // alert("hello");
               
              
                  perl=$(this);
              //prepare request
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(this).attr("you")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                     //$(perl).html(" ");
                     var results=response.result;
                     $.each(results.items,function(index,item){
                              // console.log(item);
                                $(perl).html(" ");
                               $.get("youtubeembedsupport.html",function(data){
                                 $(perl).append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
                               });
                                
                     });
                   
              });
    });
     $(document).on('click','.viiid' ,function(e){ 
               e.preventDefault();
              //prepare request
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(perl).attr("you")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                     //$("#results").html(" ");
                     var results=response.result;
                     $.each(results.items,function(index,item){
                              // console.log(item);
                              $("#resuls").html(" ");
                               $.get("item.html",function(data){
                                 $("#resuls").append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
                               });
                                
                     });
                   
              });
  
});
  
 
});
  
 


  function init()
  {
      gapi.client.setApiKey("AIzaSyAxbBrvtR3yi-nvgBoffImP4q83_sDbmsc");
      gapi.client.load("youtube","v3",function(){
               //api is ready now
      });
  }
  </script>
  
  <script src="https://apis.google.com/js/client.js?onload=init"></script>

   </body>
   </html>
