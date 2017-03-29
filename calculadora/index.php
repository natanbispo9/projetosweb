<!DOCTYPE html>
<html>
<head>
	<title>Calculadora em PHP</title>
</head>
<body>
	<form method="post" action="calcular.php">
		<label>
			Primeiro Numero:
			<input type="text" name="num1">

		</label>
		<label>
			Segundo Numero:
			<input type="text" name="num2">
		</label>
		<br>
		Operacao:<br>

		<label>
			<input type="radio" name="operacao" value="somar">
			Somar:
		</label>

		<label>
			<input type="radio" name="operacao" value="subitrair">
			Subritrair:
		</label>

		<label>
			<input type="radio" name="operacao" value="mutiplicar">
			Mutiplicar:
		</label>

		<label>
			<input type="radio" name="operacao" value="dividir">
			Dividir	:
		</label>

		<input type="submit" name="Calcular">
	</form>

</body>
</html>