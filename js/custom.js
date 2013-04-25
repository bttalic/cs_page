var url = window.location;
// Will only work if string in href matches with location
 $('li').find('.active').removeClass('active');
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
	 $('li').removeClass('active');
    return this.href == url;
}).parent().addClass('active');

$('img').hover(function(){
    var topZ = 0;
    $('img').each(function(){
        var thisZ = parseInt($(this).css('z-index'), 10);
        if (thisZ > topZ){
            topZ = thisZ;
        }
    });
$(this).css('z-index', topZ+1);
});
