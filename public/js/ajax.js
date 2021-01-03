jQuery(".save-comment").on('click',function(){
    var _comment=$(".comment").val();
    var _post=$(this).data('post');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        url:"save-comment",
        type:"post",
        dataType:'json',
        data:{
            comment:_comment,
            post:_post,
            _token: $('meta[name="csrf-token"]').attr('content'),
        },
        beforeSend:function(){
            vm.text('Submitting...').addClass('disabled');
        },
        success:function(res){
            var _html='<blockquote class="blockquote animate__animated animate__bounce">\
            <small class="mb-0">'+_comment+'</small>\
            </blockquote><hr/>';
            if(res.bool==true){
                $(".comments").prepend(_html);
                $(".comment").val('');
                $(".comment-count").text($('blockquote').length);
                $(".no-comments").hide();
            }
            vm.text('Submit').removeClass('disabled');
        }
    });
});

