const webLoadMore =document.querySelector('.load-web');
let webDefaultLimit=10; //20 in real
let webNextLoad=10; //20

    $(webLoadMore).on('click',function(){
        webDefaultLimit+=webNextLoad;
        var webSearch_term = webDefaultLimit;

        $.ajax({
            url:"ajaxphp/loadMoreWeb.php",
            type:"POST",
            data:{search:webSearch_term},
            success:function(data){
                $('.mv-specific').html(data);
            }
        })
    });

    