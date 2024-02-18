// const webLoadMore =document.querySelector('.current-web');

    $('.current-web').on('click',function(){
    
        $.ajax({
            url:"ajaxphp/currentWeb.php",
            type:"POST",
            data:{search:""},
            success:function(data){
                $('.mv-specific').html(data);
            }
        })
    });


    