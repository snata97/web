month=new Array("января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря");
function showdate(){
	var dateObj=new Date();
	var mon;
	for(var i=0;i<12;i++){
		if(i==dateObj.getMonth())
			mon=month[i];
	}
	if(dateObj.getMinutes()<10){
		document.getElementById("time").textContent=dateObj.getDate()+
		" "+ mon+" "+dateObj.getFullYear()+"  "+dateObj.getHours()+":"+"0"+dateObj.getMinutes();
	}
	else document.getElementById("time").textContent=dateObj.getDate()+
	" "+ mon+" "+dateObj.getFullYear()+"  "+dateObj.getHours()+":"+dateObj.getMinutes();
	setTimeout("showdate()",1000);
} 