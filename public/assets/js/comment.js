$(document).ready(function(){
        

    $(".comment-container").delegate(".reply","click",function(){

        var well = $(this).parent().parent();
        var cid = $(this).attr("cid");
        var name = $(this).attr('name_a');
        var token = $(this).attr('token');
        var form = '<form method="post" action="/replies"><input type="hidden" name="_token" value="'+token+'"><input type="hidden" name="comment_id" value="'+ cid +'"><input type="hidden" name="from" value="'+name+'"><div class="form-group"><textarea name="replies" placeholder="Enter your reply" > </textarea> </div> <div class="form-group"> <input class="btn btn-primary" type="submit"> </div></form>';

        well.find(".reply-form").append(form);



    });

    $(".comment-container").delegate(".reply-to-reply","click",function(){
        var well = $(this).parent().parent();
        var cid = $(this).attr("rid");
        var rname = $(this).attr('rname');
        var token = $(this).attr('token')
        var form = '<form method="post" action="/replies"><input type="hidden" name="_token" value="'+token+'"><input type="hidden" name="comment_id" value="'+ cid +'"><input type="hidden" name="from" value="'+rname+'"><div class="form-group"><textarea name="replies" placeholder="Enter your reply" > </textarea> </div> <div class="form-group"> <input class="btn btn-primary" type="submit"> </div></form>';

        well.find(".reply-to-reply-form").append(form);

    });

}); 