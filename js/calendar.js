jQuery(function($){

    $('.month').hide();

    var now = new Date();
    var current = now.getMonth()+1;
    $('#month'+current).show();
    $('.months a#linkMonth'+current).addClass('active');

	$('.months a').click(function(){
		var month = $(this).attr('id').replace('linkMonth','');
		if (month != current) {
			$('#month'+current).slideUp();
			$('#month'+month).slideDown();
			$('.months a').removeClass('active');
			$('.months a#linkMonth'+month).addClass('active');
			current = month;
		};
	});
});