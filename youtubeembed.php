
<!DOCTYPE html>
<html>
<head> 
</head>
<body>


<div class="container">
  <div class="row">
 <div class="modal fade" id="myyoutube" role="dialog">
    <div class="modal-dialog" style="width:670px">
    
      <!-- Modal content-->
     <div class="modal-content col-sm-12" style="background-color:black">
        <div class="modal-header">
         
        </div>
        <div class="modal-body">
          
          <p id="r" style="opacity:1;background-color:white"> </p><span>
         
        </div>
        <div class="modal-footer">
           <h4 class="modal-title" style="opacity:0.3;color:yellow">MOST REVIEWED RELATED VIDEO ON YOUTUBE</h4>
          <button type="button" class="btn btn-default" data-dismiss="modal">PLAY IN BACKGROUND</button>
        </div>
      </div>
      
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
  $(function(){
    $(".youtube").on("click",function(e){
              e.preventDefault();
              //prepare request
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(this).attr("you")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     //order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                       $(".youtube").html(" ");
                     var results=response.result;
                     $.each(results.items,function(index,item){
                              // console.log(item);
                               $.get("youtubeembedsupport.html",function(data){
                                 $(".youtube").append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
                               });
                     });
                    
              });
    });
   


  });
 $(function(){
    $("#lest").on("click",function(e){
              e.preventDefault();
              //prepare request
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(this).attr("you")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     //order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                      // $(".you").html(" ");
                     var results=response.result;
                     $.each(results.items,function(index,item){
                               $.get("item.html",function(data){
                                 $("#r").append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
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
  <script src="https://apis.google.com/js/client.js?onload=init"></script>+-
</body>
</html>