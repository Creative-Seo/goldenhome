<div id="modal-zakaz" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog"><div class="modal-content">
		<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Заказать <?php echo $breadcrumb;?></h2>
		</div>
		<div class="modal-body">
			<form class="feedback-form">
			<table>
				<col style="width:242px;">
				<col style="width:387px;">
				<col style="width:260px;">
				<tr>
					<td><label for="name">Ваше имя*:</label></td>
					<td><input class="form-control" id="name-z" placeholder="Имя" type="email" /></td>
				</tr>
				<tr>
					<td><label for="tel">Ваш телефон*:</label></td>
					<td><input class="form-control" id="tel-z" placeholder="Номер телефона" type="tel" /></td>
				</tr>
				<tr>
					<td><label for="message">Количество блоков*:</label></td>
					<td><input class="form-control" id="kol" placeholder="В м3 или в штуках" type="tel" /></td>
				</tr>
				<tr>
					<td><label for="message">Комментарий:</label></td>
					<td><textarea id="message" class="form-control" type="text" placeholder="Сообщение" style="width:300px"></textarea></td>
				</tr>
			</table>
			</form>
		</div>
		<div class="modal-footer">
			<a class="clmd" data-dismiss="modal" id="send_btnb" style=" margin-top:10px;"><div class="footer">Отправить</div></a>
		</div>
	</div></div>
</div>