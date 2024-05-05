const $container = $('#add-like');
$container.on('click', function(e){
    e.preventDefault();
    $link = $(e.currentTarget)
    $.ajax({
        url:'/like/'+$link.data('count'),
        method:'POST'
    }).then(function(response){
        $('#total-likes').text(response.totalLikesCount +' LIKES')
    });
});