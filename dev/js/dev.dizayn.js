$('#opener .p1').hover(function(){
	$(this).css('right', '30%');
	$('#opener .p2').css('left', '70%');
},function(){
	$(this).css('right', '50%');
	$('#opener .p2').css('left', '50%');
});
$('#opener .p2').hover(function(){
	$(this).css('left', '30%');
	$('#opener .p1').css('right', '70%');
},function(){
	$(this).css('left', '50%');
	$('#opener .p1').css('right', '50%');
});
$('#opener .p1 a').hover(function(){
	$('#opener .p2').css('opacity', '0.3');
},function(){
	$('#opener .p2').css('opacity', '1');
});
$('#opener .p2 a').hover(function(){
	$('#opener .p1').css('opacity', '0.3');
},function(){
	$('#opener .p1').css('opacity', '1');
});