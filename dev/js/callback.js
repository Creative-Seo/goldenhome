function send_e(t,n,tel,email,col,ta){
	$.post('/email.php', {n:n, t:t, tel:tel, email:email, col:col, ta:ta, key:'uZuyP93oNVpiNx4w4Ee6BxbFvGNFgWah'}
		).done(function(data) {
			if (!(data)){alert('Ошибка отправки данных.');}
				else {$('#modal-ok').fadeIn().delay(3000).fadeOut();}
		}).fail(function() {
			alert('Ошибка подключения.');
		});
}
var name,tel,email,col,message,text,
	c_name,c_tel,c_email,c_col,c_message,
	f_name,f_tel,f_email,f_text,f_message;
$(document).ready(function() {
	$("[name=tel]").inputmask("+7 (999) 999-9999");
	$("[name=email]").inputmask("*{1,20}@*{1,20}[.*{1,4}]");
//modal
	c_name = $('#callback [name=name]');
	c_tel = $('#callback [name=tel]');
	c_email = $('#callback [name=email]');
	c_col = $('#callback [name=col]');
	c_message = $('#callback [name=message]');
	$("[data-toggle=callback]").click(function(){
		name=true;tel=true;email=true;col=true;message=true;
		if ($(this).attr('data-options').indexOf('name') == -1) {c_name.parent().parent().hide();name=false;}
		if ($(this).attr('data-options').indexOf('tel') == -1) {c_tel.parent().parent().hide();tel=false;}
		if ($(this).attr('data-options').indexOf('email') == -1) {c_email.parent().parent().hide();email=false;}
		if ($(this).attr('data-options').indexOf('col') == -1) {c_col.parent().parent().hide();col=false;}
		if ($(this).attr('data-options').indexOf('message') == -1) {c_message.parent().parent().hide();message=false;}
		if ($(this).attr('data-text')) {text=$(this).attr('data-text');} else {text='Заказ обратного звонка';}
		$("#callback h2").text(text);
		$("#callback").modal('show');
	});
	$("#callback").on("hidden.bs.modal", function(){
		$(this).find(".form-group").show();
		$(this).find("input, textarea").val('').css('border-color','#ccc');
	});
	c_name.keypress(function(){if ($(this).val() != ''){$(this).css('border-color','#ccc');}});
	c_tel.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	c_email.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	$('#callback-btn').click(function(){
		var error = '';
		if ((c_name.val() == '')&&(name)){
			c_name.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваше имя"!\n';}
		if ((!(c_tel.inputmask("isComplete")))&&(tel)){
			c_tel.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш телефон"!\n';}
		if ((!(c_email.inputmask("isComplete")))&&(email)){
			c_email.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш E-mail"!\n';}
		if (error == ''){
			if (c_name.val()) {name=c_name.val();} else {name='';}
			if (c_tel.val()) {tel=c_tel.val();} else {tel='';}
			if (c_email.val()) {email=c_email.val();} else {email='';}
			if (c_col.val()) {col=c_col.val();} else {col='';}
			if (c_message.val()) {message=c_message.val();} else {message='';}
			send_e(text,name,tel,email,col,message);
			$("#callback").modal('hide');
		} else {alert('Обнаружены ошибки:\n'+error);}
	});
//forma
	f_name = $('#form [name=name]');
	f_tel = $('#form [name=tel]');
	f_email = $('#form [name=email]');
	f_message = $('#form [name=message]');
	f_name.keypress(function(){if ($(this).val() != ''){$(this).css('border-color','#ccc');}});
	f_tel.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	f_email.keypress(function(){if ($(this).inputmask("isComplete")){$(this).css('border-color','#ccc');}});
	if (f_message){f_message.keypress(function(){if ($(this).val() != ''){$(this).css('border-color','#ccc');}});}
	$('#form-btn').click(function(){
		var error = '';
		if ((f_name.val() == '')){
			f_name.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваше имя"!\n';}
		if (!(f_tel.inputmask("isComplete"))){
			f_tel.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш телефон"!\n';}
		if (f_email){if (!(f_email.inputmask("isComplete"))){
			f_email.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваш E-mail"!\n';}}
		if (f_message){if ((f_message.val() == '')){
			f_message.css('border-color','#f89');error+= 'Вы не заполнили поле "Ваше сообщение"!\n';}}
		if (error == ''){
			$('#form input, #form textarea').css('border-color','#ccc');
			if (f_name.val()) {name=f_name.val();} else {name='';}
			if (f_tel.val()) {tel=f_tel.val();} else {tel='';}
			if (f_email.val()) {email=f_email.val();} else {email='';}
			if (f_message.val()) {message=f_message.val();} else {message='';}
			text = 'Сообщение с сайта';
			send_e(text,name,tel,email,'',message);
			$("#form input, #form textarea").val('');
		} else {alert('Обнаружены ошибки:\n'+error);}
	});
});
