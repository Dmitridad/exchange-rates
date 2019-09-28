<!DOCTYPE html>
<html>
<head>
	<title>ProfiTask</title>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/ajaxRequest.js"></script>

	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<p class="header_text">
		Конвертер валют
	</p>
	<form action="exchange_rates.php" method="POST">
		<div class="block">
			<p>Выберите валюты</p>

				<?php
					$html = null;
					$fileArr = file_get_contents('currency.txt');
					$fileArr = trim($fileArr, '[]');
					$fileArr = str_replace('"', '', $fileArr);
					$fileArr = explode(',', $fileArr);

					foreach($fileArr as $key => $value){
						$html .= "<option value='$value'>$value</option>";
					}

					echo "<input type=\"text\" name=\"quantityInput\" value=\"1\">";
					echo "<select name=\"select_1\">$html</select>";
					echo "<input class = \"textInput\" type=\"text\" name=\"justInput\" placeholder=\"Перевести в\" readonly=\"true\">";
					echo "<select name=\"select_2\">$html</select>";
				?>
				
		</div>
		<div class="block2">
			<button type="submit" name="button">Конвертировать</button>
			<input class="disenable" type="text" name="result" id="resultInput" placeholder="Нажмите 'Конвертировать'" readonly="true">
		</div>
	</form>
</body>
</html>