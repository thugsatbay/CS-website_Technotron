var cnt=2,status=false,time=function(){},time1=function(){};
$(window).load(function() {
	$("#csiphoto").mouseenter(function()  {
			status=true;
	    	clearTimeout(time);
			clearTimeout(time1);
			time=setTimeout(function() {cycle();},3000);
			});
    $("#scrollimg").mouseleave(function()  {
	    clearTimeout(time1);
        status=false;
        });
		});
function cycle()  {
    if(!status)
    {return;}
        else{     
	var mage="club/"+cnt.toString()+".jpg";
	$("#csiphoto").fadeOut(600);
	setTimeout(function() {$("#csiphoto").attr("src",mage); },600);
	$("#csiphoto").fadeIn(1000);
	++cnt;
	if(cnt==5){cnt=1;}  //update to change no of pictures
	if(status){
    time1=setTimeout("cycle();",3000);}}
}
