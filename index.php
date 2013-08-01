<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>DavidsClouds</title>

        <link href="css/graphics.css" rel="stylesheet" type="text/css" />
        <link href="css/main.css" rel="stylesheet" type="text/css" />
	    <link href="scripts/bubbletip/bubbletip.css" rel="stylesheet" type="text/css" />


        <script type="text/javascript" src="scripts/clouds_ajax.js" ></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/ui_draggable_cloudsay.js"></script>
    	<!--[if IE]>
    	<link href="scripts/bubbletip/bubbletip-IE.css" rel="stylesheet" type="text/css" />
    	<![endif]-->

        <link href="favicon.ico" rel="shortcut icon">
     <?php flush(); ?>


   <script type="text/javascript">
	$(document).ready(function() {

    $(".menu").draggable();
    bindbubble();

    $(".window").mouseover(function(){     $(".window").draggable();   });

   $(".menu b").hover(function(){$(this).animate({"opacity":"1"}, 200);}, function(){$(this).animate({"opacity":"0.7"}, 200);});

	$("#stopbtn").click(function(){

		$(".cloud").stop(true,true)
		                .draggable()
		                .css("cursor","move");		    });//ends stop
		
		$("#startbtn").click(function(){
		  
                    animClouds1(".a","100px","110px","-=4%","-=6%",1400,1000);
                    animClouds1(".b","130px","120px", "-=2%", "-=8%",  600,  700);
                    animClouds1(".c","80px","90px", "-=7%", "-=8%",  1000,  1000);
                    animClouds1(".d","40px","50px",  "-=5%", "-=5%",  3200,  3800);
                    animClouds1(".e","50px","60px", "-=5%", "-=5%",  1200,  1100);
                    animClouds1(".f","140px","130px", "-=4%", "-=6%",  2600,  2600) ;
              });
		 
		 $(".menu").click(function(){        $("#says").fadeOut(2200);	        });

         $('#topmenu li').click(function (){
                 $('body').css({"background":$(this).attr("id")});
                 $('#title').css({"color":$(this).attr("id")});
                 $('.menu b').css({"text-shadow":  "0px 0px 10px "+$(this).attr("id")});
        });
                  $('title').html('DavidsClouds');

		});// ends scripts


	</script> 
</head>
<body>

<div id="topmenu"><b>How's your sky?</b>
  <ul>
    <li id='aqua' class='btn'>b</li>
    <li id='orange' class='btn'>o</li>
    <li id='lightgreen' class='btn'>y</li>
    <li id='grey' class='btn'>g</li>
    <li id='darkorchid' class='btn'>d</li>
    <li id='violet' class='btn'>v</li>

  </ul>
</div>



<div id="talks">
<?php
    $tips[0]=" salut..";
    $tips[1]=" <img src='graphics/Metallica.png' width='107px' height='50px'/>!";
    $tips[2]=" <img src='graphics/firebug.png'/>";
    $tips[3]=" <img src='graphics/facebook-icon1.png' width='50px' height='50px'/>";
    $tips[4]=" <img src='graphics/Metallica.png' width='107px' height='50px'/>";
    $tips[5]=" <img src='graphics/jquery.gif'/>";
    $tips[6]=" <img src='graphics/windows-live-messenger-icon-150x129.png' width='58px' height='50px'/>";
    $tips[7]=" <img src='graphics/I-love-electro-music.gif'/>";
    $tips[8]=" <img src='graphics/D.png' width='50px' height='50px'/>";
    $tips[9]=" <img src='graphics/html-icon.png'/>";
    $tips[10]=" <img src='graphics/mos.png'/>";
    $tips[11]=" <img src='graphics/W3C-logo.gif' width='64px' height='50px'/>";
    $tips[12]=" <img src='graphics/naruto_logo1.gif' width='100px' height='50px'/>";
    $tips[13]=" <img src='graphics/bleach_logo.gif' width='150px' height='40px'/>";
    $tips[14]=" <img src='graphics/W3C-logo.gif' width='64px' height='50px'/>";
    $tips[15]=" ...Popom popom..";
    $tips[16]=" Hiya!";
    $tips[17]=" Lache moi";
    $tips[18]=" Forespeed ahead!";
    $tips[19]=" hi!";
    $tips[20]=" outta ma way dude..";
    $tips[21]=" Refresh again, ill change word.";
    $tips[22]=" Powered by JQuery";
    $tips[23]=" i am a cloud.";
    $tips[24]=" Youhooo!";
    $tips[25]=" wtf?!";
    $tips[26]=" Helloww";
    $tips[27]=" ROFL";
    $tips[28]=" Lache moi";
    $tips[29]=" Right to left he said... ";

echo "<p id='t01'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t02'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t03'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t04'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t05'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t06'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t07'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t08'>". $tips[ rand (0,29) ] ."</p>";
echo "<p id='t09'>". $tips[ rand (0,29) ] ."</p>";
?>
</div>


<img alt="c" src="graphics/cloud.png" class="cloud a" id="aa"/>
<img alt="c" src="graphics/cloud.png" class="cloud b" id="bb"/>
<img alt="c" src="graphics/cloud.png" class=" cloud c" id="cc"/>
<img alt="c" src="graphics/cloud.png" class="cloud d" id="dd"/>
<img alt="c" src="graphics/cloud.png" class="cloud e" id="ee"/>
<img alt="c" src="graphics/cloud.png" class="cloud f" id="ff"/>

<span class="cloud menu" id="menu1"><img alt="c" src="graphics/cloud.png" /> <b id="homebtn" onclick="readcontent('home.php');"><i>Home</i></b> </span>
<span class="cloud menu" id="menu2"><img alt="c" src="graphics/cloud.png" /> <b id="artbtn" onclick="readcontent('projects.php');"><i>Projects</i></b> </span>
<span class="cloud menu" id="menu3"><img alt="c" src="graphics/cloud.png" /> <b id="downloadsbtn" onclick="readcontent('downloads/box.php');"><i>Downloads</i></b> </span>
<span class="cloud menu" id="menu4"><img alt="c" src="graphics/cloud.png" /> <b id="contactbtn" onclick="readcontent('message.php');"><i>Message</i></b> </span>

 <div id="page">
            
            <div id="buttons">
                 <span class="btn" id="startbtn"> Start</span> |
                 <span class="btn" id="stopbtn" >  Stop</span>
            </div>



        <div id="downwhite"></div>
        <div id="boardwhite"><img src="graphics/loader.gif" alt="" id="loader" />

         <div id="says">

         </div> <!--ends says -->

        </div>
        <div id="masker"></div>


</div>  <!--ends page -->




 <div id="title"><span id="david">David</span><span id="sclouds">sclouds</span></div>

 <?php
  if ($_GET){
      if ($_GET['downloads']!=null){
          echo "<script>readcontent('downloads/box.php'); </script>";
      }
    }//Ends $_GET checking
  ?>
  <script>readcontent('home.php'); </script>
</body>
</html>