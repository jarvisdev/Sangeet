<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aclonica|Aldrich|Allerta+Stencil|Artifika|Audiowide|Baloo+Bhaijaan|Bangers|Berkshire+Swash|Black+Ops+One|Boogaloo|Bubblegum+Sans|Bungee|Bungee+Inline|Bungee+Shade|Cantarell|Cherry+Swash|Chewy|Cinzel+Decorative|Encode+Sans+Expanded|Exo+2|Fredoka+One|Germania+One|Grand+Hotel|Kanit|Kelly+Slab|Lobster|Lobster+Two|Luckiest+Guy|Macondo|Metal+Mania|Nova+Flat|Orbitron|Philosopher|Quicksand|Rancho|Rye|Sacramento|Satisfy|Vast+Shadow|Viga" rel="stylesheet"> 
  <style>
  .group{
  	font-size:19px;
  	color:white;
  }
  #mynav ul li a{
  	font-family: Bungee Inline,cursive;
  	
  }
  </style>
  </head>
  <body>
	<nav class="navbar navbar-fixed-top" style="background:url(userbg.jpg);z-index:1;outline: solid 2px white;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button id="button" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav" style="background-color: white">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<!-- <span class="glyphicon glyphicon-th-list"></span> -->
                </button>
				<a href="profile.php" class="navbar-brand" id="brandlogo" style="font-family:Bungee Inline,cursive,Audiowide,cursive;font-size:30px;color:white" title="sangeet.com"><span class="glyphicon glyphicon-headphones"></span> Sangeet</a>
			</div>
			<div class="collapse navbar-collapse" id="mynav">
			<ul class="nav navbar-nav">
				<li><a class="group" href="profile.php" >HOME</a></li>
				<li><a  class="group" href="radio.php">RADIO</a></li>
				<li><a class="group" href="youtubeapi.php"  title="YOUTUBE V3 DATA API">YOUTUBE</a></li>
			</ul>
		    <ul id="changeable" class="nav navbar-nav navbar-right">
					<li id="userpage"><a class="group" href="#" target="_top" ><span class="glyphicon glyphicon-user"></span>user</a>
					</li>

					<li id="logout"><a class="group" href="#mymodal" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
		   <form class="navbar-form navbar-left" id="searchtool" style="width:parent;">
				<div class="input-group input-group-sm">
                     <input id="search" type="text" class="form-control" placeholder="SEARCH&hellip;&#x266B;&#x266B;&#x266B;">
                     <div class="input-group-btn">
                      <button type="button" class="btn btn-default">
                      <i class="glyphicon glyphicon-search"></i>
                     </button>
                     </div>
				   </div>
			</form>
			
		</div>
		 </div>
	</nav>
	<!--<script>
 $(document).ready(function(){
 	  $("input").on("change",function(){alert(okk);});
	     // $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"track.getinfo",artist:"<?php echo $art ?>" ,track:"<?php echo $name ?>",api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    //function(responseText){
             
           // $("<p></p>").html(responseText.track.name+"</br><pre><b>Listeners</b></pre>   "+responseText.track.listeners+"</br><pre><b>Composed By</b></pre>"+responseText.track.artist.name).css({"color":"white","float":"left","margin-top":"50px","margin-left":"0px","font-size":"50px"}).addClass("col-md-2").appendTo("#artistabout");
           // $("#lest").html("<hr><b>"+responseText.track.name+"<hr></b>");
       
       
   });
//console.log("ff");
</script>-->
</body>
</html>