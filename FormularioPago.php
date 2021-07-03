<? include("ipg-util.php"); ?>
<html>
<head>
<title>IPG Connect Prueba</title>
</head>
<body>
<p><h1>Formulario de Venta</h1>
<form method="post" action="https://test.ipg- online.com/connect/gateway/processing">
<input type="hidden" name="txntype" value="sale"/>
<input type="hidden" name="timezone" value="America/Panama"/>
<input type="hidden" name="txndatetime" value="<?php echo getDateTime() ?>"/>
<input type="hidden" name="hash_algorithm" value="SHA256"/>
<input type="hidden" name="hash" value="<?php echo createHash("1.50","840") ?>"/>
<input type="hidden" name="storename" value="10123456789"/><input type="hidden" name="mode" value="payonly"/>
<input type="hidden" name="paymentMethod" value="M"/>
<input type="text"   name="chargetotal" value="1.50"/>
<input type="hidden" name="currency" value="840"/> 
<input type="submit" value="Pagar">
</form>
</body>
</html>
