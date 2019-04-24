function generateEditDiv(entry_id){
    $('div[id='+entry_id+']').find('.body_blog').append('<div id="blog_edit_div'+entry_id+'" class="blog_edit_div"></div>');
    $('div[id=blog_edit_div'+entry_id+']').append('<FORM id="formFrame" name="formFrame" method="get" target="formFrame">'
        +'<p><label>Тема</label><input id="title'+entry_id+'" type="text" name="title"></p>'
        +'<p><label>Текст</label><textarea id="text'+entry_id+'" rows="5" cols="50"" ></textarea>'
        +'</p>'+'</FORM><input type="submit" name="send" onclick="send('+entry_id+',document.forms[1])" value="Сохранить изменения">');
    $('button[id='+entry_id+']').prop('disabled',true);
}

function send(id,myform){
    var inp_title = $('#title'+id).val();
    var inp_text = $('#text'+id).val();
    if(inp_title.length!=0 || inp_text.length!=0) {
        iframe = document.createElement('iframe');
        iframe.name = myform.target = Date.parse(new Date);
        iframe.id = 'frame';
        iframe.style.display = 'none';
/*        iframe.onload = iframe.readystatechange = function () {

        };*/
        document.body.appendChild(iframe);
        if (inp_title.length != 0 && inp_text.length != 0) {
            $xml_string = "<blog>" + "<title>" + encodeURIComponent(inp_title) + "</title>" + "<body>" + encodeURIComponent(inp_text) + "</body>" + "<id>" + encodeURIComponent(id) + "</id>" + "</blog>";
            $( '#'+id+' .title_blog h2' ).text(encodeURIComponent(inp_title));
            $( '#'+id+' .blog .blog_body p' ).text(encodeURIComponent(inp_text));
        } else if (inp_title.length != 0) {
            $xml_string = "<blog>" + "<title>" + encodeURIComponent(inp_title) + "</title>" + "<id>" + id + "</id>" + "</blog>";
            $( '#'+id+' .title_blog h2' ).text(encodeURIComponent(inp_title));
        } else if (inp_text.length != 0) {
            $xml_string = "<blog>" + "<body>" + inp_text + "</body>" + "<id>" + id + "</id>" + "</blog>";
            $( '#'+id+' .blog .blog_body p' ).text(encodeURIComponent(inp_text));
        }
        $('#frame').attr('src', "frame?data="+$xml_string);
    }
}