function Check_FIO(input_date){
	var fio = document.getElementById('fio');
	var input = input_date.value;
	if(input.length!=0){
		MyReg_FIO=/^[A-zА-я]{1,}[\ ][A-zА-я]{1,}[\ ][A-zА-я]{1,}$/i;
		if(!(MyReg_FIO.test(input))) {
			OutErrorCaption(fio,"Введите ФИО в правильном формате (три слова, с одним пробелом между словами)","capt_fio");
			return false;
		}
	}
	else if(input.length==0){
		OutErrorCaption(fio,"Поле не должно быть пустым","capt_fio");
		return false;
	}
	RemoveCaption(fio,"capt_fio");
	$("#fio").css("border", "2px solid green");
	return true;
}

function Check_Date(input_date){
	var date = document.getElementById('date');
	var input = input_date.value;
	if(input.length==0){
		OutErrorCaption(date,"Поле не должно быть пустым","capt_date");
		return false;
	}
	RemoveCaption(date,"capt_date");
	$("#date").css("border", "2px solid green");
	return true;
}

function Check_Phone(input_date){
	var phone = document.getElementById('phone');
	var input = input_date.value;
	if(input.length!=0){
		MyReg_PHONE=/^[+][37][0-9]{8,10}$/;
		if(!(MyReg_PHONE.test(input))) {
			OutErrorCaption(phone,"Введите номер телефон в правильном формате (+7 или +3 и остальные 8-10 цифр номера телефона)","capt_phone");
			return false;
		}
	}
	else if(input.length==0){
		OutErrorCaption(phone,"Поле не должно быть пустым","capt_phone");
		return false;
	}
	RemoveCaption(phone,"capt_phone");
	$("#phone").css("border", "2px solid green");
	return true;
}

function Check_Email(input_date){
	var mail = document.getElementById('email');
	var input = input_date.value;
	if(input.length!=0){
		MyReg_Mail=/^[A-z0-9]{1,}[@][A-z]{1,}[.][A-z]{1,}$/;
		if(!(MyReg_Mail.test(input))) {
			OutErrorCaption(mail,"Введите email в правильном формате","capt_mail");
			return false;
		}
	}
	else if(input.length==0){
		OutErrorCaption(mail,"Поле не должно быть пустым","capt_mail");
		return false;
	}
	RemoveCaption(mail,"capt_mail");
	$("#email").css("border", "2px solid green");
	return true;
}

function Check_Text(input_date){
	var comment = document.getElementById('comment');
	var input = input_date.value;
	if(input.length==0){
		OutErrorCaption(comment,"Поле не должно быть пустым","capt_comment");
		return false;
	}
	RemoveCaption(comment,"capt_comment");
	$("#comment").css("border", "2px solid green");
	return true;
}

function OutErrorCaption(obj,text,id_capt){
	if(document.getElementById(id_capt)!=null){
		caption = document.getElementById(id_capt);
		caption.textContent=text;
	}
	else{
		var caption = document.createElement('span');
		var caption_text = document.createTextNode(text);
		caption.appendChild(caption_text);
		caption.id=id_capt;
		obj.parentNode.appendChild(caption);
	}
	$(obj).css("border", "2px solid red");
}

function RemoveCaption(obj,id_capt){
	if(document.getElementById(id_capt)!=null){
		caption = document.getElementById(id_capt);
		obj.parentNode.removeChild(caption);
	}
}

function Check()
{
    var fio = document.getElementById('fio');
    var date = document.getElementById('date');
    var phone = document.getElementById('phone');
    var email = document.getElementById('email');
	var comment = document.getElementById('comment');
	var sub = document.getElementById('submit');
    fio.style.border == "2px solid green"
	&& date.style.border == "2px solid green"
	&& phone.style.border == "2px solid green" 
	&& email.style.border == "2px solid green"
	&& comment.style.border == "2px solid green"
	&& (Check_Gender_Age()==true)
	? sub.disabled = false : sub.disabled = true;
}

function Check_Gender_Age(){
	var genderM=document.forms.mailex.gender[0].checked;
	var genderF=document.forms.mailex.gender[1].checked;
	var bool_age;
	if(document.forms.mailex.age[0].selected==true)
		bool_age=false;
	if((genderM==false && genderF==false || bool_age==false)){
		return false;
	}
	return true;
}


function validate_test(){
	var fio=document.forms.mailex.fio.value;
	var question2=document.forms.mailex.question2.value;
	var question3_1=document.forms.mailex.question3[0].checked;
	var question3_2=document.forms.mailex.question3[1].checked;
	var bool_quest1;
	if(document.forms.mailex.question1[0].selected==true)
		bool_quest1=false;
	if(fio.length==0 || question2.length==0 || (question3_1==false && question3_2==false)|| bool_quest1==false){
		alert("ERROR: Поля не заполнены");
		if (fio.length==0) document.forms.mailex.fio.focus();
		else if (bool_quest1==false) alert ( "Пожалуйста, выберите ответ во втором задании" );
		else if (question2.length==0) document.forms.mailex.question2.focus();
		else alert ( "Пожалуйста, выберите ответ в третьем задании: продуценты или консументы" );
		return false;
	}
	if(question2.length!=0){
		MyReg_question2=/^([A-zА-я\s]{1,}[0-9\s]{1,}){1,}$/i;
		if(!(MyReg_question2.test(question2))) {
		alert("Хотя бы одно слово в ответе должно являться записью целого числа, слова разделены одним или более пробелами");
		document.forms.mailex.question2.focus();
		document.forms.mailex.question2.select();
		}
		return false;
	}
	return true;
}

function Clear(){
	var fio = document.getElementById('fio');
    var date = document.getElementById('date');
    var phone = document.getElementById('phone');
    var email = document.getElementById('email');
	var comment = document.getElementById('comment');
    RemoveCaption(fio,"capt_fio");
	RemoveCaption(date,"capt_date");
	RemoveCaption(phone,"capt_phone");
	RemoveCaption(email,"capt_mail");
	RemoveCaption(comment,"capt_comment");
	$("input,textarea").css("border", "1px solid grey");
}

