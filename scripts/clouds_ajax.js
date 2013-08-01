function animClouds1( cloudclass,  w1,  w2, l1, l2,  timer1,  timer2){
                                        timer1 +=1000;
                                         timer2 +=1000;

                for (var z= 0;z<=10;++z){     //use of 2 for loops, cause: animate is rendered AFTER script rendering.
                   for (var x= 0;x<=10;++x){
                            $(cloudclass).animate({"width":w1 , "left":l1},timer1)
                                       .animate({"width":w2, "left":l2},timer2);
                             }//ends for
                             $(cloudclass).animate({"left":"100%"},1);
                }//2nd for

}//end of animClouds1


function bindbubble(){
    var x = {positionAt: "mouse",delayShow:"500", delayHide:"100"};
    var y = {positionAt: "mouse",delayShow:"1000", delayHide:"100"};

	$("#aa").bubbletip( "#t01", x );
	$("#bb").bubbletip( "#t02", x );
	$("#cc").bubbletip( "#t03", x );
	$("#dd").bubbletip( "#t04", x );
	$("#ee").bubbletip( "#t05", x );

	$("#menu1").bubbletip( "#t06", y );
	$("#menu2").bubbletip( "#t07", y );
	$("#menu3").bubbletip( "#t08", y );
	$("#menu4").bubbletip( "#t09", y );
	
	}



function readcontent(content) {

$("#loader").css("display", "block");
$("#says").fadeOut(100, function a(){

$.get(content, function(d){  
           
            $("#loader").css("display", "none");
            $('#says').html(d);
     
$("#says").fadeIn(200); 
        
        }); //get ends  
    });  //fadeout ends

}//ends readcontent

