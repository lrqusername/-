

function TdelData(cate_id)
{
    confirm('您确定要删除吗?')?shop():stop();


    function shop() {
        $.get("/talking/"+cate_id+'/delete',function(data){
                if(data.statu==0){
                    
                    alert(data.msg);
                    $('#tr_'+cate_id).remove();
                    
                }
        // alert(1);


        })
    };
    function stop() {

    };
}

