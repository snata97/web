function ChangeColor1(){
document.getElementById('1').addEventListener('mouseover',Change1(),true);
}
function ChangeColor2(){
document.getElementById('2').addEventListener('mouseover',Change2(),true);
}
function ChangeColor3(){
document.getElementById('3').addEventListener('mouseover',Change3(),true);
}
function ChangeColor4(){
document.getElementById('4').addEventListener('mouseover',Change4(),true);
}
function ChangeColor5(){
document.getElementById('5').addEventListener('mouseover',Change5(),true);
}
function ChangeColor6(){
document.getElementById('6').addEventListener('mouseover',Change6(),true);
}
function ChangeColor7(){
document.getElementById('7').addEventListener('mouseover',Change7(),true);
}

function CreateSubMenu(){
	var interests=document.getElementById('li_3');
	var ul=document.createElement('ul');
	ul.id="sub";
	ul.setAttribute("class","submenu");
	ul.setAttribute('onmouseover','ChangeColor3(),SubMenu(id)');
	ul.setAttribute('onmouseout','ReChange(),SubMenuOut()');
	var li_1=document.createElement('li');
	var li_2=li_1.cloneNode();
	var li_3=li_1.cloneNode();
	var li_4=li_1.cloneNode();
	var li_5=li_1.cloneNode();
	var a_1=document.createElement('a');
	var a_2=a_1.cloneNode();
	var a_3=a_1.cloneNode();
	var a_4=a_1.cloneNode();
	var a_5=a_1.cloneNode();
	a_1.href="/interests/index#p1";
	a_2.href="/interests/index#p2";
	a_3.href="/interests/index#p3";
	a_4.href="/interests/index#p4";
	a_5.href="/interests/index#p5";
	var p_1=document.createTextNode('Хобби');
	var p_2=document.createTextNode('Сериалы');
	var p_3=document.createTextNode('Музыка');
	var p_4=document.createTextNode('Игры');
	var p_5=document.createTextNode('Спорт');
	ul.appendChild(li_1);
	ul.appendChild(li_2);
	ul.appendChild(li_3);
	ul.appendChild(li_4);
	ul.appendChild(li_5);
	li_1.appendChild(a_1);
	li_2.appendChild(a_2);
	li_3.appendChild(a_3);
	li_4.appendChild(a_4);
	li_5.appendChild(a_5);
	a_1.appendChild(p_1);
	a_2.appendChild(p_2);
	a_3.appendChild(p_3);
	a_4.appendChild(p_4);
	a_5.appendChild(p_5);
	interests.appendChild(ul);
}


function SubMenu(id){
	document.getElementById(id).addEventListener('mouseover',mouseOverSubmenu(),true)
}
function SubMenuOut(){
	document.getElementById('sub').addEventListener('mouseout',mouseOutSubmenu(),true)
}

function Change1(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #FF7a7a)';}
function Change2(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #8705BF)';}
function Change3(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #30FF00)';}
function Change4(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #FFFB00)';}
function Change5(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #FF69C1)';}
function Change6(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #FF1700)';}
function Change7(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #8C797C)';}
function ReChange(){document.body.style.background='linear-gradient(80deg, #FFFFFF, #007a7a)';}

function mouseOverSubmenu(){
	var s=document.getElementsByClassName('submenu');
	s[0].style.visibility='visible';
}
function mouseOutSubmenu(){
	var s=document.getElementsByClassName('submenu');
	s[0].style.visibility='hidden';
}





