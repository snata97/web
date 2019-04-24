function ajaxPost(url,params){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status==200){
            response=request.response ;
            response=JSON.parse(response);
            parent=$('div[id='+response['id']+']').find('.comments');
            parent.append('<div class="comments_output"><p>'+response['data']+'</p><p>'+response['autor']+'</p><div>'+response['comment']+'</div></div>');
        }
    };
    request.open('POST',url);
    request.setRequestHeader('Content-Type','application/json');
    var myJsonString=JSON.stringify(params);
    request.send(myJsonString);
}

function generateCommentDiv(entry_id){
    $('div[id='+entry_id+']').find('.body_blog').append('<div id="comment_div'+entry_id+'" class="comment_div"></div>');
    $('div[id=comment_div'+entry_id+']').append('<p>Комментарий: </p>'+'<textarea id="blog_comment_text'+entry_id+'" rows=5 cols=50" />'+
        '<input type="submit" id="submit" onclick="getParams('+entry_id+')" value="Отправить">');
    $('button[id='+entry_id+']').prop('disabled',true);
}

function getParams(id){
    var name_comment = 'blog_comment_text'+id;
    var inp_comment = $('#'+name_comment);
    var params_json={"comment":inp_comment.val(),"id_blog":id};
    ajaxPost("commentsSave",params_json);
}