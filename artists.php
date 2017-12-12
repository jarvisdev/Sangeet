<?php 
session_start();
$name=$_POST['name'];
?>
<!DOCTYPE html>
<html>
<head>
	
  <link href="https://fonts.googleapis.com/css?family=Aclonica|Aldrich|Allerta+Stencil|Artifika|Audiowide|Baloo+Bhaijaan|Bangers|Berkshire+Swash|Black+Ops+One|Boogaloo|Bubblegum+Sans|Bungee|Bungee+Inline|Bungee+Shade|Cantarell|Cherry+Swash|Chewy|Cinzel+Decorative|Encode+Sans+Expanded|Exo+2|Fredoka+One|Germania+One|Grand+Hotel|Kanit|Kelly+Slab|Lobster|Lobster+Two|Luckiest+Guy|Macondo|Metal+Mania|Nova+Flat|Orbitron|Philosopher|Quicksand|Rancho|Rye|Sacramento|Satisfy|Vast+Shadow|Viga" rel="stylesheet"> 
   <style>
   
   ol li:hover{
   	background-color:pink;
   }

   
   </style>
<style type="text/css">
#idd{
  display:none;
}
 .new {
    
     display:block;
    width:150px;
    word-wrap:break-all;
  
     
    }
    .new2 {
    
     display:block;
    
    height:100%;
  word-wrap:text-nowrap;
     
    }
</style>
<script>
function back(){
  $("#back").attr("href","home.php");
  
}
</script>

</head>
<body>
  
 <div id="artz">
	<div class="container ">
   
		<div class="row" class="container-fluid" id="artistabout" class="new" style="margin-top:0px;background:url(userbg.jpg);border-radius:50px;padding:50px" data-spy="affix"> <div id="follow"></div></div>

   <ul class="nav nav-tabs" style="background:url(userbg.jpg);margin-top:10px;border-radius:20px">
        <li><a href="#" id="a2" style="color:#f2552c"><b>Top Songs</b></a></li>

				<li ><a href="#" id="a1" target="newframe" style="color:#f2552c"><b> Top Albums</b></a></li>
				
				<li><a href="#"  id="a3" style="color:#f2552c"><b>About</b></a></li>

    </ul>	
	<div id="rest" class="container" >
    <div id="ss"></div></div>
	<div  class="container-fluid" >
		<div class="row" id="real">
		</div></div>	
    <div    class="container-fluid" >
      <div  id="idd"  class="new2 jumbotron" style="color:white;background:url(userbg.jpg);">
      
    </div></div> 
  </div>
	<script>
$(document).ready(function(){
	          let ddd=`<a class="btn btn-default" id="follow2" style="color:white;background:url(userbg.jpg);width:100%;">follow</a>`;
                  $("#follow").html(ddd);
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"artist.getinfo",artist:"<?php echo $name ?>" ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
            $("<img>").attr("src",responseText.artist.image[3]["#text"]).css({"width":"200px","height":"200px","margin-right":"0px","margin-top":"40px","float":"left"}).addClass(" img-responsive col-md-8").appendTo("#artistabout");
            $("<p></p>").attr("fol",responseText.artist.name).html(responseText.artist.name+"</br><pre><b>Listeners</b></pre>   "+responseText.artist.stats.listeners).css({"color":"white","float":"left","margin-top":"50px","font-size":"50px","font-family":"Quicksand,cursive","font-style":"bold"}).addClass("col-md-2 col-sm-2 set").appendTo("#artistabout");
            
           
          
       $("#follow2").on("click",function(){
          $.post("follow.php",{artist:$(".set").attr("fol")},function(result){
                 $("#follow").html('<a class="btn btn-default" id="follow2" style="color:white;background:url(userbg.jpg);width:100%;">following</a>');
          });
                 
       });
       
    });
});
console.log("ff");
</script>

<!-- this is for artist info-->
<script>
$(document).ready(function(){
     $("#a3").on("click",function(){
      $("#rest").css("display","none");
      $("#real").css("display","none");
        $("#another").css("display","none");
      $("#just").css("display","none");
       $("#fourth").css("display","none");
      
      

        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"artist.getinfo",artist:"<?php echo $name ?>" ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
       $("#idd").css("display","block");
            $("<h1></h1>").css({"color":"white","font-family":"Quicksand,cursive","font-style":"bold"}).html(responseText.artist.name).appendTo("#idd");
            $("<p></p>").addClass("col-xs-12 col-lg-12 col-md-12 col-sm-12 new2 ").css({"background":"url(userbg.jpg)","color":"white","font-family":"Quicksand,cursive","font-style":"bold"}).html(responseText.artist.bio.summary).appendTo("#idd");
           
          
               
             });
      
          
    
                         

    });
});

console.log("ff");
</script>
<!-- this for albums-->
<script>
$(document).ready(function(){
	$("#a1").on("click",function(){
     $("#rest").css("display","none");
      $("#idd").css("display","none");
      $("#real").css("display","block");
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"artist.gettopalbums",artist:"<?php echo $name ?>" ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
    	$.each(responseText,function(i,fields){
    		
    		for(var j=0;j<fields["@attr"].total;j++){  
    		var pp=document.createElement("span");
    		$(pp).css({"position":"relative","width":"200px","height":"250px","float":"left","border-radius":"20px","background":"url(bg1.jpg)","margin":"20px"}).addClass("text-nowrap").appendTo("#real");  		
            $("<span></span>").html("<b>"+fields.album[j]["name"]+"</b>").css({"color":"white","width":"200px","font-size":"15px","text-align":"center","overflow":"hidden","margin-top":"200px","padding-right":"100px","margin-left":"0px","left":"0px","position":"absolute"}).addClass("text-nowrap").appendTo(pp);
            $("<img>").attr({"src":fields.album[j]["image"][3]["#text"],"alt":fields.album[j].name,"title":fields.album[j].name,"tyu":fields.album[j].name,"uu":fields.album[j].artist.name}).css({"margin":"5px","height":"200px","width":"200px","cursor":"pointer"}).addClass(" img-responsive col-sm-2 albumsearch2").appendTo(pp);
            }
               
             });
      
       });
       
    });
});
console.log("ff");
</script>

<div id="response1"></div>
<!-- this for tracks -->
<script>
$(document).ready(function(){

  function util(){
     $("#real").css("display","none");
      $("#idd").css("display","none");
       $("#rest").css("display","block");
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"artist.gettoptracks",artist:"<?php echo $name ?>" ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
      $.each(responseText,function(i,fields){
        var lis=document.createElement("ol");
      
        $(lis).css({"overflow":"hidden","margin-top":"10px"}).appendTo("#rest");
        for(var j=0;j<fields["@attr"].total;j++){
        var ele=document.createElement("li");
        $(ele).html("<b>"+fields.track[j]["name"]+"</b><hr>").css({"background":"url(userbg.jpg)","cursor":"pointer","color":"white","text-align":"center","margin-top":"10px"}).attr({"song":fields.track[j]["name"],"artd":fields.track[j]["artist"]["name"],"you":fields.track[j]["name"]+" "+fields.track[j]["artist"]["name"]}).addClass("songyoutube youtube2 ").appendTo("ol");



            }

               
             });
      
          
       });
       
    }
	$("#a2").on("click",util);
  $(document).ready(util);
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
          
          <p id="results" style="opacity:1;background-color:white"> </p><span>
         
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

    $(document).on('click','.youtube2' ,function(e){
            $.post("queue.php",{song:$(this).attr("song")},function(result){     
            }); 
            
        
          let divi=`<div ><ul style="list-style:none;margin-top:10px;">
      <li style="cursor:pointer"><a id="like" ><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white">Like</button></a></li>
      <li style="cursor:pointer"><a id="playlist"><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white;">Add to playlist</button></a></li>
      
      <li style="cursor:pointer"><a data-toggle="modal"  class="vid" data-target="#myyoutube"><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white;">See video</button></a></li>
    </ul> </div>`;
       $("#ss").html(" "+divi);
         
       
          ee=$(this).attr("song");
         
        $("#like").on("click",function(){
            $.post("like.php",{song:ee},function(result){
              $("#like").html("liked");
             
            //alert(ee);
        });  });
        $("#playlist").on("click",function(){
            $.post("playlist.php",{song:ee},function(result){
              $("#playlist").html("added to the playlist");
             
        });  });

       
        
              e.preventDefault();
             // alert("hello");
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
                    $(pack).html(" ");
                     var results=response.result;
                     $.each(results.items,function(index,item){
                              // console.log(item);
                               $.get("youtubeembedsupport.html",function(data){
                                 $(pack).append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
                               });
                              
                     });
                    
              });
    });
  });

 
   $(function(){

    $(document).on('click','.vid' ,function(e){
       e.preventDefault();
              //prepare request
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(pack).attr("you")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                    $("#results").html(" ");
                     var results=response.result;
                     $.each(results.items,function(index,item){
                              // console.log(item);
                               $.get("item.html",function(data){
                                 $("#results").append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
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