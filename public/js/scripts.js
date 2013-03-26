	
jQuery().ready(function(){
	jQuery('#content').fadeIn(1500);
});
/*
	 * 
	 $(document).on('click', 'a.ajaxlink', function(e){
		//alert('test');
		e.preventDefault();
		console.log(jQuery(this).attr('href'));
		jQuery('#content').fadeOut();
		jQuery.get(jQuery(this).attr('href'), {'format' : 'html'}, function(data){
			jQuery('#content').html(data).fadeIn('slow');
		});
		
		//jQuery('#content').hide().load(jQuery(this).attr('href'), {'format' : 'html'} ).fadeIn('2000');
		//jQuery('#content').append(loaded_content.fadeIn());
		return false;
	});

	$('#getalbum_btn').click(function(){
		$.post('album/get/format/json', $('#getalbum_frm').serialize(), function(data) {
			 var items = [];
			 $.each(data.album, function(key, val) {
			 	items.push('<li id="' + key + '">'+ key + ': ' + val + '</li>');
			 });
			 $('<ul/>', {
			 'class': 'my-new-list',
			 html: items.join('')
			 }).appendTo('body');
			} );
	});
	
	*/