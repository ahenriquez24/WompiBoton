<? include("ipg-util.php"); ?>
<html>
<head><title>IPG Connect Sample for PHP</title></head>
<body>
<p><h1>Formulario de Venta</h1>
<form method="post" action="https://test.ipg-online.com/connect/gateway/processing">
<input type="hidden" name="txntype" value="sale">
<input type="hidden" name="timezone" value="America/Panama"/> <input type="hidden" name="txndatetime" value="<?php echo getDateTime() ?>"/>
<input type="hidden" name="hash_algorithm" value="HMACSHA256"/>
<input type="hidden" name="hashExtended" value="<?php echo createExtendedHash ( "13.00","840" ) ?>"/>
<input type="hidden" name="storename" value="8112000002241"/>
<input type="hidden" name="mode" value="payonly"/>
<input type="hidden" name="paymentMethod" value="M"/>
<input type="text" name="chargetotal" value="13.00"/>
<input type="hidden" name="currency" value="840"/>
<input type="submit" value="Submit">
</form>
</body>
</html>