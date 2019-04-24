window.onload=function(){
    var inp_login = $('input[id=login]');
    inp_login.blur(function(){
        var params='login='+inp_login.val();
        ajaxPost("checkLogin",params);
    });
};

function ajaxPost(url,params){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status==200){
            if(request.responseText=='0'){
                $('#result').html('Логин свободен');
            }
            else{
                $('#result').html('Логин занят');
            }
        }
    };
    request.open('POST',url);
    request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    request.send(params);
}