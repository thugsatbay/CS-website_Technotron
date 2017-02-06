$(document).ready(function() {
	//$("body").css("width",screen.width);
	$("body").css("height",900);
    $("#home").mouseenter(function()  {
        $("#home").fadeTo("normal",.70);
        $("#home").css("border-left-color","#ffffff");
        $("#home").css("border-right-color","#ffffff"); });
    $("#home").mouseleave(function()  {
        $("#home").fadeTo("normal",1);
        $("#home").css("border-left-color","#007f7f");
        $("#home").css("border-right-color","#00bfbf"); });
    $("#csi").mouseenter(function()  {
        $("#csi").fadeTo("normal",.70);
        $("#csi").css("border-left-color","#ffffff");
        $("#csi").css("border-right-color","#ffffff"); });
    $("#csi").mouseleave(function()  {
        $("#csi").fadeTo("normal",1);
        $("#csi").css("border-left-color","#00bfbf");
        $("#csi").css("border-right-color","#00bfbf"); });
    $("#apt").mouseenter(function()  {
        $("#apt").fadeTo("normal",.70);
        $("#apt").css("border-left-color","#ffffff");
        $("#apt").css("border-right-color","#ffffff"); });
    $("#apt").mouseleave(function()  {
        $("#apt").fadeTo("normal",1);
        $("#apt").css("border-left-color","#00bfbf");
        $("#apt").css("border-right-color","#00bfbf"); });
    $("#us").mouseenter(function()  {
        $("#us").fadeTo("normal",.70);
        $("#us").css("border-left-color","#ffffff");
        $("#us").css("border-right-color","#ffffff"); });
    $("#us").mouseleave(function()  {
        $("#us").fadeTo("normal",1);
        $("#us").css("border-left-color","#00bfbf");
        $("#us").css("border-right-color","#007f7f"); });
		});