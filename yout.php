
        
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

    $(document).on('click','.youtube2' ,function(e){
              e.preventDefault();
              $(this).dropdown();
             
             pack=$(this);
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
                    
                     var results=response.result;
                     $.each(results.items,function(index,item){
                              // console.log(item);
                              $(pack).html(" ");
                               $.get("youtubeembedsupport.html",function(data){
                                 $(pack).append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
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