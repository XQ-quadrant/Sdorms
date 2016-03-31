/**
 * Created by xq on 16-3-30.
 */
$('.excu').bind('click',function(){

    var status = $(this).attr('name'); //方法名
    if(status=="delete_h"){
        alert('是否删除该文档');
    }
    //var ch = arguments[0] ? arguments[0] : {};
    var ch={};   //方法接受的参数

    if($(this).attr('value')){
        ch[0] = $(this).attr('value');
    }else {
        //ch={};
        var i=0;
        $('input:checkbox:checked').each(function(){
            ch[i]=$(this).val(); //attr('id');
            i++;
        });
    }

    //var jch = JSON.stringify(ch);

    //alert(jch);
    $.ajax({
        type:"POST",
        url:excuUrl,//"__URL__/excu",
        data:{'status':status,'val':ch},//{'0':ch},
        success: function(data) {
            alert(JSON.stringify(data));
            location.reload();
            //alert($.parseJSON(data));
        }
    });
});