window.onload=tick;
function tick()   {
	var dy,mn,yr,edy,emn,eyr;
	var today;
	var event;
	today=new Date(2012,3,12,0,0,0,0);
	event=new Date();	//year,month,date,hr,mn,sc,ms
	dy = today.getDate();
	mn = today.getMonth();
	edy = event.getDate();
	emn = event.getMonth();
        var hr=event.getHours()
        var min=event.getMinutes();
        var sec=event.getSeconds();
	var table=document.getElementById("clock");
	var row1=table.rows[0];
	var row2=table.rows[1];
	row1.cells[0].innerHTML=(edy-dy);
	row1.cells[2].innerHTML=hr;
	row1.cells[4].innerHTML=min;
	row1.cells[6].innerHTML=sec;
setTimeout("tick();",1000);
}