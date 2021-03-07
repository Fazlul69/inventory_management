$(document).ready(function(){
    $(".search-input").on('keyup',function(){
        var _q=$(this).val();
        if(_q.length>=3){
            $.ajax({
                url:"{{url('purchaseAdd.search')",
                data:{
                    q:-q
                },
                dataType:'json',
                beforesend:function(){
                    $(".search-result").html('<li class="list-group-item">Loading - - </li>');
                },
                success:function(req){
                    console.log(req);
                }
            });
        }
    });
});