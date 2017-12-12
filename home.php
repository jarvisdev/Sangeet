<?php
session_start();
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
  body{

    background-color:white;
  }
  .art
  {
    color:#dd4132;
    background-color:white;
    padding-top:0px;
    padding-bottom: 15px;
    opacity: 0.6;
  }
  .carousel-controls
  {
   position:relative;
   margin:0;
  }
  .carousel
  img{
    height:200px;
    width:160px;

  }
  a{
  	font-size:25px;
  	color:white;
    font-style: bold;
  }
  .carousel .item>img {
    position: absolute;
    top: 0;
    left: 0;
    max-width: 100%;
    height: 100%;
}
  </style>
</head>
<body style="background: url(bg3.jpg);">
     <?php require 'navbar.php'; ?>

  <!-- for top artists-->
  <div id="just">
  <div class="container">
<div class="col-md-12" style="margin-top:100px">
  <h4 style="font-size:40px;background:url(userbg.jpg);color:#fff;font-family:Audiowide,cursive;" class="badge">Top Artist</h4>
<div class="carousel slide" id="myCarouse2">
  <div class="carousel-inner">
    <div class="item active">
      <div class="row">
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p0" class="img-responsive artist"><div  id="cc0"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p1"  class="img-responsive artist"><div id="cc1"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p2"  class="img-responsive artist"><div id="cc2"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="p3" class="img-responsive artist"><div id="cc3"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="p4" class="img-responsive artist"><div id="cc4"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="p5" class="img-responsive artist"><div id="cc5"class="carousel-caption"></div></a></div>
      </div>
    </div>
    <div class="item">
      <div class="row">
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p6" class="img-responsive artist"><div id="cc6"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p7" class="img-responsive artist"><div id="cc7"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p8" class="img-responsive artist"><div id="cc8"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p9" class="img-responsive artist"><div id="cc9"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p10" class="img-responsive artist"><div id="cc10"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p11" class="img-responsive artist"><div id="cc11"class="carousel-caption"></div></a></div>
    
      </div>
    </div>
    <div class="item">
      <div class="row">
      <div class="col-md-2 col-sm-2 "><a href="#" ><img id="p12" class="img-responsive artist"><div id="cc12"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#" ><img  id="p13" class="img-responsive artist"><div id="cc13"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="p14" class="img-responsive artist"><div id="cc14"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="p15" class="img-responsive artist"><div id="cc15"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="p16" class="img-responsive artist"></a><div id="cc16"class="carousel-caption"></div><!-- <div id="artnamec" style="width:160px;"></div> --></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="p17" class="img-responsive artist"><div  id="cc17"class="carousel-caption"></div></a></div>
    </div>
  </div>
  </div>
  <div class="carousel-controls"> 
  <a class="left carousel-control" href="#myCarouse2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left" style="background-color:black"></i></a>
  <a class="right carousel-control" href="#myCarouse2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"style="background-color:black"></i></a>
</div>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"chart.gettopartists",api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
            $.each(responseText, function(i, field){

        for(var k=0;k<18;){
          for(var j=0;j<6;j++)
          {
            $("#cc"+k).html("<h5>"+field.artist[k].name+"</h5>").addClass("art ");
            // $("#artnamec").html("<h5>"+field.artist[k].name+"</h5>").addClass("art ");
            $("#p"+k).attr("src",field.artist[k].image[3]["#text"]);
               $("#p"+k).attr("alt",field.artist[k].name);
            $("#p"+k).attr("title",field.artist[k].name);
            k++;
          }
        }
        });
    });
       
});

</script>
<!-- for top songs-->
<div id="another">
  <div class="container">
<div class="col-md-12" style="margin-top:20px">
  <h4 style="font-size:40px;background:url(userbg.jpg);color:#fff;font-family:Audiowide,cursive;" class="badge">Top Songs</h4>
<div class="carousel slide" id="myCarousel">
  <div class="carousel-inner" >
    <div class="item active">
      <div class="row">
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l0" class=" song img-responsive"><div id="ccp0"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l1"  class=" song img-responsive"><div id="ccp1"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l2"  class="img-responsive song"><div id="ccp2"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="l3" class="img-responsive song"><div id="ccp3"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="l4" class="img-responsive song"><div id="ccp4"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="l5" class="img-responsive song"><div id="ccp5"class="carousel-caption"></div></a></div>
      </div>
    </div>
    <div class="item">
      <div class="row">
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l6" class="img-responsive song"><div id="ccp6"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l7" class="img-responsive song"><div id="ccp7"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l8" class="img-responsive song"><div id="ccp8"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l9" class="img-responsive song"><div id="ccp9"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l10" class="img-responsive song"><div id="ccp10"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l11" class="img-responsive song"><div id="ccp11"class="carousel-caption"></div></a></div>
    
      </div>
    </div>
    <div class="item">
      <div class="row">
      <div class="col-md-2 col-sm-2 "><a href="#" ><img id="l12" class="img-responsive song"><div id="ccp12"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#" ><img  id="l13" class="img-responsive song"><div id="ccp13"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img id="l14" class="img-responsive song"><div id="ccp14"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="l15" class="img-responsive song"><div id="ccp15"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="l16" class="img-responsive song"><div id="ccp16"class="carousel-caption"></div></a></div>
      <div class="col-md-2 col-sm-2"><a href="#"><img  id="l17" class="img-responsive song"><div id="ccp17"class="carousel-caption"></div></a></div>
    </div>
  </div>
  </div>
  <div class="carousel-controls"> 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left" style="background-color:black"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"style="background-color:black"></i></a>
</div>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"chart.gettoptracks",api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
            $.each(responseText, function(i, field){

        for(var k=0;k<18;){
          for(var j=0;j<6;j++)
          {$("#ccp"+k).html("<h5>"+field.track[k].name+"</h5>").addClass("art");
            $("#l"+k).attr("src",field.track[k].image[3]["#text"]);
            $("#l"+k).attr("use",field.track[k].artist.name);
               $("#l"+k).attr("alt",field.track[k].name);
            $("#l"+k).attr("title",field.track[k].name);
            k++;
          }
        }
        });
    });
});
</script>

<!-- for top charts-->
<div id="fourth">
<div class="container">
<div class="row" style="margin-top:20px">
  <h4 style="font-size:40px;margin-left:30px;background: url(userbg.jpg);color:white;font-family:Audiowide,cursive;" class="badge">Top Tags</h4>
  <div id="now">
    <span id="ohh" ></span>
</div>
  </div>
</div>
</div>
<script>
$(document).ready(function(){
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"chart.gettoptags",api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
            $.each(responseText, function(i, field){
                     $("#ohh").css({"margin-top":"10px","margin-bottom":"10px","position":"relative"}).addClass("col-lg-12 col-sm-3 col-xs-2 col-md-6").appendTo("#now");
        for(var k=0;k<50;){
              
          $("<a></a>").attr({"anl":field.tag[k].name,"href":"#"}).css({"background":"url(userbg.jpg)","color":"white","margin":"10px","cursor":"pointer","float":"left","border-radius":"10px","padding-right":"0px","margin-right":"0px","font-family":"Quicksand,sans-serif"}).addClass("col-lg-2 col-xs-12 col-sm-3 super").html("<h4>"+field.tag[k].name+"</h4>").appendTo("#ohh");
            k++;

          
        }
        });
    });
});
</script>

<!--this for search api -->
<!-- this IS Artist SEARCH-->  
  <div  class="container" >
      <h2 class="badge" id="head" style="margin-top:60px;visibility:hidden">ARTISTS</h2>
    <div class="row" id="rest1"> 
    </div></div> 
     <div  class="container" >
      <h2 class="badge" id="head2" style="margin-top:1px;visibility:hidden">SONGS</h2>
    <div class="row" id="rest2"> 
    </div></div> 
     <div id="response" ></div>
    <div  class="container" >
      <h2 class="badge" id="head3" style="margin-top:1px;visibility:hidden">ALBUMS</h2>
    <div class="row" id="rest3"> 
    </div></div> 
   
<script>
$(document).ready(function(){
 var i=0;

  $("#search").on("input",function(){
i++; $("#rest1").css("display","block");
    $("#head").css("visibility","visible");
    $("#head3").css("visibility","visible");
     $("#head2").css("visibility","visible");
        $("#rest2").css("display","block");  
          $("#rest3").css("display","block");  
          
           
   if(i>1) {$("#rest1").html(" "); }
      
      
     $("#another").css("display","none");
                         $("#just").css("display","none");
                          $("#fourth").css("display","none");
                      
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"artist.search",artist:$(this).val() ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
                      
     $.each(responseText,function(i,fields){

             if(fields["opensearch:totalResults"]==0)
             $("#rest1").html("<b>NO MATCH</b >");
            else{
      for(var j=0;j<5&&j<fields["opensearch:totalResults"];j++){  
       var pp=document.createElement("span");
       $(pp).css({"position":"relative","width":"200px","height":"250px","float":"left"}).addClass("text-nowrap ").appendTo("#rest1");      
           $("<a></a>").attr("uu",fields.artistmatches.artist[j]["name"]).html("<b>"+fields.artistmatches.artist[j]["name"]+"</b>").css({"color":"black","cursor":"pointer","text-decoration":"none","width":"200px","font-size":"15px","text-align":"left","overflow":"hidden","margin-top":"200px","margin-left":"10px","left":"0px","position":"absolute"}).addClass("text-nowrap artistsearch").appendTo(pp);
             var sp=document.createElement("img");
          $(sp).attr({"src":fields.artistmatches["artist"][j]["image"][2]["#text"],"uu":fields.artistmatches.artist[j]["name"]}).css({"margin":"5px","cursor":"pointer","height":"200px","width":"200px","border-radius":"30px"}).addClass(" img-responsive col-sm-2 col-xs-12 col-md-4 artistsearch ").appendTo(pp);
          }
          }    
             });
      
   });
    });
 
      
});
</script>
<script>
 $(document).on('click', '.artistsearch' ,function( ){
             
        $.post("artists.php",{ name:$(this).attr("uu") },function(data){
         if($("#search").val().length>0){ $("#head").css("visibility","hidden");
              $("#head3").css("visibility","hidden");
              $("#head2").css("visibility","hidden");}
                $("#rest2").css("display","none");
               $("#rest1").css("display","none");
               $("#rest3").css("display","none");
                         $("#another").css("display","none");
                          $("#just").css("display","none");
                            $("#fourth").css("display","none");
                             $("#response").css("display","block");
                        $("#response").html("<p>"+data+"</p>");
        });
    
 $("#search").on("input",function(){

                       $("#response").css("display","none");
                      
                    });
   } );
 </script>
 <!-- this IS song SEARCH-->
<script>
$(document).ready(function(){
 var i=0;

  $("#search").on("input",function(){
i++;
    $("#head2").css("visibility","visible");
    $("#head").css("visibility","visible");
    $("#head3").css("visibility","visible");
          $("#rest2").css("display","block");
         $("#rest1").css("display","block"); 
          $("#rest3").css("display","block");   
   if(i>1){ $("#rest2").html(" "); }
      
      
     $("#another").css("display","none");
                         $("#just").css("display","none");
                          $("#fourth").css("display","none");
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"track.search",track:$(this).val() ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
                   
                      
     $.each(responseText,function(i,fields){

             if(fields["opensearch:totalResults"]==0)
             $("#rest2").html("<b>NO MATCH</b >");
            else{
      for(var j=0;j<5&&j<fields["opensearch:totalResults"];j++){  
       var pp2=document.createElement("span");
       $(pp2).css({"position":"relative","width":"200px","height":"250px","float":"left"}).addClass("text-nowrap ").appendTo("#rest2");      
           $("<a></a>").attr({"uu":fields.trackmatches.track[j]["name"],"yo":fields.trackmatches.track[j]["artist"]}).html("<b>"+fields.trackmatches.track[j]["name"]+"</b>").css({"color":"black","cursor":"pointer","text-decoration":"none","width":"200px","font-size":"15px","overflow":"hidden","margin-top":"200px","padding-right":"100px","margin-left":"10px","left":"0px","position":"absolute"}).addClass("text-nowrap songsearch").appendTo(pp2);
             var sp2=document.createElement("img");
          $(sp2).attr({"src":fields.trackmatches["track"][j]["image"][2]["#text"],"uu":fields.trackmatches.track[j]["artist"],"yo":fields.trackmatches.track[j]["name"]}).css({"margin":"5px","cursor":"pointer","height":"200px","width":"200px","border-radius":"30px"}).addClass(" img-responsive col-sm-2 songsearch ").appendTo(pp2);
           }
          }
          
             });
          
   });
    });
 
      
});
</script>
<script>
 $(document).on('click', '.songsearch' ,function( ){
              
        $.post("song.php",{ name:$(this).attr("uu") ,art:$(this).attr("yo") },function(data){
         if($("#search").val().length>0){$("#head").css("visibility","hidden");
              $("#head3").css("visibility","hidden");
              $("#head2").css("visibility","hidden");}

                     $("#rest1").css("display","none");
                      $("#rest2").css("display","none");
                       $("#rest3").css("display","none");
                         $("#another").css("display","none");
                          $("#just").css("display","none");
                            $("#fourth").css("display","none");
                             $("#response").css("display","block");
                        $("#response").html("<p>"+data+"</p>");
        });
    
 $("#search").on("input",function(){
                       $("#response").css("display","none");
                    });
   } );
 </script>
 <!-- this IS album SEARCH-->
<script>
$(document).ready(function(){
 var i=0;

  $("#search").on("input",function(){
  
i++;
      $("#head2").css("visibility","visible");
    $("#head3").css("visibility","visible");
    $("#head").css("visibility","visible");
          $("#rest2").css("display","block");
         $("#rest1").css("display","block"); 
         $("#rest3").css("display","block");   
   if(i>1){ $("#rest3").html(" "); }
      
      
     $("#another").css("display","none");
                         $("#just").css("display","none");
                          $("#fourth").css("display","none");
        $.getJSON("http://ws.audioscrobbler.com/2.0/",{method:"album.search",album:$(this).val() ,api_key:"60be7384c192e38ebcc5902590d78c86",format:"json"},
    function(responseText){
                   
                      
     $.each(responseText,function(i,fields){

             if(fields["opensearch:totalResults"]==0)
             $("#rest3").html("<b>NO MATCH</b >");
            else{
      for(var j=0;j<5&&j<fields["opensearch:totalResults"];j++){  
       var pp2=document.createElement("span");
       $(pp2).css({"position":"relative","width":"200px","height":"250px","float":"left"}).addClass("text-nowrap ").appendTo("#rest3");      
           $("<a></a>").attr({"uu":fields.albummatches.album[j]["name"],"title":fields.albummatches.album[j]["artist"]}).html("<b>"+fields.albummatches.album[j]["name"]+"</b>").css({"color":"black","cursor":"pointer","text-decoration":"none","z-index":"45","width":"200px","font-size":"15px","overflow":"hidden","margin-top":"200px","padding-right":"100px","margin-left":"10px","left":"0px","position":"absolute"}).addClass("text-nowrap albumsearch").appendTo(pp2);
             var sp2=document.createElement("img");
          $(sp2).attr({"src":fields.albummatches["album"][j]["image"][2]["#text"],"tyu":fields.albummatches.album[j]["name"],"uu":fields.albummatches.album[j]["artist"]}).css({"margin":"5px","cursor":"pointer","height":"200px","width":"200px","border-radius":"30px"}).addClass(" img-responsive col-sm-2  albumsearch2 ").appendTo(pp2);
            }
          }    
             });
          
   });
    });
 
      
});
</script>
<script>
 $(document).on('click', '.albumsearch2' ,function( ){
        $.post("album2.php",{ name:$(this).attr("uu") ,art:$(this).attr("tyu") },function(data){
        
          if($("#search").val().length>0){$("#head2").css("visibility","hidden");
               $("#head").css("visibility","hidden");
               $("#head3").css("visibility","hidden");}
                     $("#rest1").css("display","none");
                      $("#rest3").css("display","none");
                      $("#rest2").css("display","none");
                         $("#another").css("display","none");
                          $("#just").css("display","none");
                            $("#fourth").css("display","none");
                             $("#response").css("display","block");
                        $("#response").html("<p>"+data+"</p>");
 
                    
                  
        });
    
 $("#search").on("input",function(){
                       $("#response").css("display","none");
                    });

   } );
 </script>
  
<script>
   $(".artist").click( function( ){
    
        $.post("artists.php",{ name:$(this).attr("alt") },function(data){
                      
                         $("#another").css("display","none");
                          $("#just").css("display","none");
                            $("#fourth").css("display","none");
                        $("#response").html("<p>"+data+"</p>");
                      });
        $("#search").on("input",function(){
                       $("#response").css("display","none");

                    });
      });
    
</script>
<script>
 $(".song").click(function( ){
        $.post("song.php",{ name:$(this).attr("alt") ,art:$(this).attr("use")},function(data){
                       
                         $("#another").css("display","none");
                          $("#just").css("display","none");
                            $("#fourth").css("display","none");
                        $("#response").html("<p>"+data+"</p>");

                    
                    
        });
         $("#search").on("input",function(){
                       $("#response").css("display","none");

                    });
       } );
 </script>
 <script>
 $(document).on('click','.super',function( ){
     
        $.post("album1.php",{ name:$(this).attr("anl") },function(data){
                         $("#another").css("display","none");
                          $("#just").css("display","none");
                            $("#fourth").css("display","none");
                        $("#response").css("color","black").html("<p>"+data+"</p>");s
        });
         $("#search").on("input",function(){
                       $("#response").css("display","none");

                    });
       } );
 </script>
</body>
</html>