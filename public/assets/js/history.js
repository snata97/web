function CreateTableCurrentHistory(){
	var pages = Array('home', 'about', 'interests', 'studies', 'album',  'contact', 'test');
	for (var i = 0; i < pages.length; i++) {
		var iValue = localStorage[pages[i]] || 0;
		localStorage.setItem(pages[i], iValue);
	}
	body = document.body;
	div_cur_sess = document.createElement('div');
	div_cur_sess.className="history";
	div = document.createElement('div');
	body.appendChild(div_cur_sess);
	body.appendChild(div);
	div.id='local_storage';
	div.className = 'tables';	
	
	var table = document.createElement('table');
	div.appendChild(table);
	
	var p_cur_sess=document.createElement('p');
	var text_cur_sess=document.createTextNode('История текущего сеанса');
	div_cur_sess.appendChild(p_cur_sess);
	p_cur_sess.appendChild(text_cur_sess);
	
	var row1 = table.insertRow();
	row1.className="studies";
	row1.id='row1';	
	var row2 = table.insertRow();
	row2.id='row2';	
	
	// первая строка
	for(var i = 0; i < pages.length; i++){
		var cell = row1.insertCell();
		cell.innerHTML=pages[i];
	}
	//вторая строка
	for(var i = 0; i < pages.length; i++){
		var cell = row2.insertCell();
		cell.innerHTML=localStorage.getItem(pages[i]);
	}
}

function LocalStorage(id){
	local=window.localStorage;
	count=local.getItem(id);
	local.setItem(id, ++count);
}

function CreateTableAllTimeHistory(){
	var pages = Array('home', 'about', 'interests', 'studies', 'album',  'contact', 'test');
	body = document.body;
	div_all_time = document.createElement('div');
	div_all_time.className="history";
	div = document.createElement('div');
	body.appendChild(div_all_time);
	body.appendChild(div);
	div.id='cookies';
	div.className = 'tables';
	table = document.createElement('table');
	div.appendChild(table);
	
	p_all_time=document.createElement('p');
	text_all_time=document.createTextNode('История за все время');
	div_all_time.appendChild(p_all_time);
	p_all_time.appendChild(text_all_time);
	
	row1 = table.insertRow();
	row1.className="studies";
	row1.id='row1';	
	row2 = table.insertRow();
	row2.id='row2';	
	
	// первая строка
	for(i = 0; i < pages.length; i++){
		cell = row1.insertCell();
		cell.innerHTML=pages[i];
	}
	//вторая строка
	for(i = 0; i < pages.length; i++){
		cell = row2.insertCell();
		cell.innerHTML=getCookie(pages[i]);
	}
}

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name) {
    var newValue;
    var currentValue = parseInt(getCookie(name));
    if (isNaN(currentValue)) {
        currentValue=0;
    }
    newValue = currentValue + 1;
    //document.cookie = name + "=" +newValue + expires + "; path=/";
    document.cookie = name + "=" +newValue + "; path=/";
}

