    const loadMore =document.querySelectorAll('.load-mv'); //load-mv
    let defaultLimit=10; //20 in real
    let nextLoad=10; //20
    loadMore.forEach((load)=>{
        $(load).on('click',function(){
            defaultLimit+=nextLoad;
            var search_term = defaultLimit;

            $.ajax({
                url:"ajaxphp/loadMoreMv.php",
                type:"POST",
                data:{search:search_term},
                success:function(data){
                    $('.mv-specific').html(data);
                }
            })
        });


    })
        