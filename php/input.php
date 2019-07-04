<div class="gray padding">
	<div class="wrapper">
		<div class="form-block">
			<h2>Оставить комметарий</h2>
			<form action="php/handler.php" method="POST">
		        <label for="name">Ваше имя</label>
		        <input type="text" name="name" id="name" autocomplete="off" required>
		        <label for="text">Ваш комментарий</label>
		        <textarea type="text" name="text" id="text" autocomplete="off" required class="gray"></textarea>
		        <input type="hidden" name="date" id="date" value="<?php echo date("d.m.Y"); ?>">
		        <input type="hidden" name="time" id="time" value="<?php echo date("H:i"); ?>">
		        <button type="submit" class="gray">Отправить</button>
			</form>
		</div>
	</div>
</div>