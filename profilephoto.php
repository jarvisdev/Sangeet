<?php
session_start();
require("funs.php");
$userid=$_SESSION['id'];
$con=con();
$qry="SELECT * FROM user WHERE user.uid='$userid'";
$result=$con->query($qry);
$arr=$result->fetch_array();
$name=$arr['uname'];
$email=$arr['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>music world</title>
  <meta charset="UTF-8">
  <meta name="author" content="jugta ram">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="shortcut icon" type="image/x-icon" href="onebit_40.ico" /> 
  <link href="https://fonts.googleapis.com/css?family=Aclonica|Aldrich|Allerta+Stencil|Artifika|Audiowide|Baloo+Bhaijaan|Bangers|Berkshire+Swash|Black+Ops+One|Boogaloo|Bubblegum+Sans|Bungee|Bungee+Inline|Bungee+Shade|Cantarell|Cherry+Swash|Chewy|Cinzel+Decorative|Encode+Sans+Expanded|Exo+2|Fredoka+One|Germania+One|Grand+Hotel|Kanit|Kelly+Slab|Lobster|Lobster+Two|Luckiest+Guy|Macondo|Metal+Mania|Nova+Flat|Orbitron|Philosopher|Quicksand|Rancho|Rye|Sacramento|Satisfy|Vast+Shadow|Viga" rel="stylesheet"> 
	<style>
	</style>
	</head>
	<body style="background: url(userbg.jpg);">
  <?php require 'navbar.php';?>

  <script>
  $("#searchtool").css("display","none");
  $(".navbar").css("position","relative");

let ff=`<li id="userpage"><a class="group" href="profilephoto.php" target="_top" ><span class="glyphicon glyphicon-user"></span>hello <?php echo " $name" ?></a>
    </li>

    <li id="logout"><a class="group" href="/sangeet/logout.php" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>`

$("#changeable").html(" "+ff);
 
</script>

  <div class="container-fluid" style="position: relative;box-sizing: content-box;"> 
    <img src="User.ico" style="float: left;height: 150px;margin-left:10%; ">
    
    <div class="userinfo" style="float: right;margin-right:50%;position: relative;">
        <h1 style="color: white;"><?php echo "$name" ?></h1>
        <br>
        
    </div>
  </div>

<!-- <nav class="nav nav-pills" style="position: relative;margin-top:10px;background:url(userbg.jpg);border-color: pink;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="profilephoto.php">hello <?php echo "$name" ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" id="play">Playlist</a></li>
        <li><a href="#" id="lik">Liked</a></li>
        <li><a href="#" id="foll">Following</a></li>
      </ul>
     
    </div>
  </div>
</nav>
 -->
 <ul class="nav nav-tabs" style="background:url(userbg.jpg);margin-top:10px;border-radius:20px">
        <li ><a href="#" id="play" target="newframe" style="color:orange"><b> Playlist</b></a></li>
        <li><a href="#" id="lik" style="color:orange"><b> Liked Songs</b></a></li>
        <li><a href="#"  id="foll" style="color:orange"><b> Followed Artist</b></a></li>
        <li><a href="#"  id="queue" style="color:orange"><b> Your Queue</b></a></li>
    </ul> 
<div id="reslik"></div>	
<div id="fer"></div>


<script>


$("#foll").on("click",function(){
   $("#reslik").html(" ");
     $.post("follow1.php",function(result){
                $("#reslik").html(result);
        
        $(".ast").on("click",function(){
                 $.post("artists.php",{name:$(this).attr("st")},function(result){
                  $("#reslik").html(" ");
                  $("#reslik").html(result);

  });
      });

        
$(".dell").on("click",function(){
    
        psf=$(this);
    $.post("unfollow.php",{following:$(this).attr("tttt")},function(result){
     
      $(psf).html("unfollowed");
      
    
  });
     });
 });
     });

function util(){
  $("#reslik").html(" ");
   
   $.post("playlist1.php",function(result){
              $("#reslik").html(result);


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
              //alert($(this).attr("tt"));
              //prepare request
              pd=$(this);
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(this).attr("tt")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                     var results=response.result;
                     $.each(results.items,function(index,item){
                        
                               $.get("youtubeembedsupport.html",function(data){
                                 $(pd).append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
                               });
                     });
                    
              });
         
   
 });
    $(".dell").on("click",function(){
        psf=$(this);
    $.post("deleteplaylist.php",{song:$(this).attr("tttt")},function(result){
      $(psf).html("deleted");
      
    });
  });
});

  });
       }

$("#play").on("click",util);
$(document).ready(util);

$("#lik").on("click",function(){
   $("#reslik").html(" ");
  
    $.post("like1.php",function(result){
               $("#reslik").html(result);
 
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
              pd=$(this);
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(this).attr("tt")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                     var results=response.result;
                     $.each(results.items,function(index,item){
                               $.get("youtubeembedsupport.html",function(data){
                                 $(pd).append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
                               });
                     });
                    
              });
    });

    $(".dell").on("click",function(){
        psf=$(this);
    $.post("unlike.php",{song:$(this).attr("tttt")},function(result){
      $(psf).html("unliked");
      
    });
  });
   
});
});

  });


$("#queue").on("click",function(){
   $("#reslik").html(" ");
  
    $.post("queue1.php",function(result){
               $("#reslik").html(result);
 
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
              pd=$(this);
              var request=gapi.client.youtube.search.list({
                     part:"snippet",
                     type:"video",
                     q: encodeURIComponent($(this).attr("tt")).replace(/%20/g,"+"),
                     maxResults:1,
                     
                     order:"viewCount",
                     publishedAfter:"1950-01-01T00:00:00Z",
              });
              //execuate request
              request.execute(function(response){
                     var results=response.result;
                     $.each(results.items,function(index,item){
                               $.get("youtubeembedsupport.html",function(data){
                                 $(pd).append(tplawesome(data,[{"title":item.snippet.title,"videoid":item.id.videoId}]));
                               });
                     });
                    
              });
    });

    $(".dell").on("click",function(){
        psf=$(this);
    $.post("delqueue.php",{song:$(this).attr("tttt")},function(result){
      $(psf).html("deleted from queue");
      
    });
  });
   
});
});

  });

 
  function init()
  {
      gapi.client.setApiKey("your_key");
      gapi.client.load("youtube","v3",function(){
               //api is ready now
      });
  }
 
  </script>
 
 <script src="https://apis.google.com/js/client.js?onload=init"></script>
</body>
</html>
