<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title></title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('main');
        echo $this->Html->css('bootstrap\css\bootstrap.min');
        echo $this->Html->script('bootstrap\js\bootstrap.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
    <body>
        <h1>Привет! Я Bootstrap...</h1>
    </body>
</html>
