<?php
session_start();
$name=$_POST['name'];
$art=$_POST['art'];
?>
<!DOCTYPE html>
<html>
<head>
   <style>
   .new {
    
     display:block;
    width:450px;
    word-wrap:break-space;
  
     
    }
   
  
   </style>

   </head>
   <body style="background: url(bg3.jpg) repeat;">
 <?php require 'youtubeembed.php' ?>
   <div class="container text-nowrap" style="margin-top:50px;background:url(userbg.jpg);opacity:0.9;border-radius:50px">
		<div class="row" >
			<div class="col-md-offset-1 col-md-2">
				<img class="img-responsive img-rounded" style=" margin-top:100px" src="musicicon.png">
			</div></div>
    
      <div class="container">
        <div class="row">
			<div id="artistabout"  class="col-md-12 col-xs-12 new" style="padding-right:900px"></div>
		</div></div></div>
		<ul>
		<li id="lest" class="youtube" name="nam" style="background:url(userbg.jpg);text-align:center;color:white;height:30px;margin-right:100px;margin-left:90px;margin-top:10px;"></li>
		</ul>
    <div id="pop"></div>
		<script>
    
    $(document).ready(function(){
	      $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"track.getinfo",artist:"<?php echo $art ?>" ,track:"<?php echo $name ?>",api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
             
            $("<p></p>").html(responseText.track.name+"</br><pre><b>Listeners</b></pre>   "+responseText.track.listeners+"</br><pre><b>Composed By</b></pre>"+responseText.track.artist.name).css({"color":"white","float":"left","margin-top":"50px","margin-right":"900px","font-size":"50px"}).addClass("").appendTo("#artistabout");
            $("#lest").css("cursor","pointer").attr({"you":responseText.track.name+" "+responseText.track.artist.name,"tou":responseText.track.name}).html("<b>"+responseText.track.name+"</b>");
       
       
    });
        $("#lest").on("click",function(){
         
        
          let divi=`<div ><ul style="list-style:none;margin-top:10px;">
          <li style="cursor:pointer"><a id="like" ><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white">Like</button></a></li>
          <li style="cursor:pointer"><a id="addpl"><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white;">Add to playlist</button></a></li>
          
          <li style="cursor:pointer"><a data-toggle="modal"  class="vid" data-target="#myyoutube"><button class="btn btn-default" style="background:url(userbg.jpg);margin-top:4px;width:100%;color:white;">See video</button></a></li>
            </ul> </div>`;
       $("#pop").html(" "+divi);
         
       
          ee=$(this).attr("tou");
         
        $("#like").on("click",function(){
            $.post("like.php",{song:ee},function(result){
              $("#like").html("liked");
             
            });
        }); 
         $("#addpl").on("click",function(){
            $.post("playlist.php",{song:ee},function(result){
              $("#addpl").html("added");
             
            });
        });  

         
         });

        $("#lest").on("click",function(){
            $.post("queue.php",{song:ee},function(result){
              
             
            //alert(ee);
        });  });

});
console.log("ff");
</script>

</body>
   </html>