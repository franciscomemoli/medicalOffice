<?php
/**
 *
 *
 * @link          http://franciscomemoli.github.io
 * @package       app.View.Layouts
 * @since         v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$pageName = __("medicalOffice","medical Office") ;
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $pageName ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('vendor/bootstrap-3.2.0-dist/css/bootstrap.min');
		echo $this->Html->css('vendor/bootstrap-3.2.0-dist/css/bootstrap-theme.min');
		echo $this->Html->css('generic');

		echo $this->Html->script('vendor/jquery-2.1.1/jquery-2.1.1.min');
		echo $this->Html->script('vendor/bootstrap-3.2.0-dist/bootstrap.min');
		echo $this->Html->script('login');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
			<nav class="navbar navbar-inverse" role="navigation">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  
				  <h3> 
				  		<?php echo $pageName?>
				  </h3>
				</div>
			  </div><!-- /.container-fluid -->
			</nav>
		<div id="content" class="container-fluid">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
