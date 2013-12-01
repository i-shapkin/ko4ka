<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $__pageTitle; ?></title>
	<?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('footer');
        echo $this->Html->css('main');
        echo $this->Html->script('bootstrap/js/bootstrap.min');
	?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
    <body>
    <div id="head-line"></div>
    <div id="wrap">
        <!-- Begin page content -->
        <div class="container">
            <div class="page-header">
                <a id="logo" title="logo" href="/"></a>
            </div>
            <div id="menu" class="row-fluid">
                <a class="span2" href="/catalog">Каталог</a>
                <a class="span3" href="/sale">Акции и скидки</a>
                <a class="span3" href="/payments">Доставка и оплата</a>
                <a class="span2" href="/contacts">Контакты</a>
                <a class="span2" href="/wholesale">Опт</a>
            </div>
            <div class="row-fluid page-content">
                <div class="span3 catalog">
                    <h3>Каталог</h3>
                </div>
                <div class="span9">
                    <?= $this->fetch('content'); ?>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
    <div id="footer">
        <div class="container">
            <p class="muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
        </div>
    </div>
    <pre>
	    <?= $this->element('sql_dump'); ?>
	</pre>
    </body>
</html>
