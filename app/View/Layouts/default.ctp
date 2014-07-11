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
				  
				  <?php echo $this->Html->link($pageName, array('controller' => 'patients', 'action' => 'index'),array("class" => "navbar-brand") );?>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li> 

							<?php 
							$active = (isset($actual_page) && $actual_page == "patients:index")? "active" : "";
							$actual_page;
							echo $this->Html->link(__("My Patients"), array('controller' => 'patients', 'action' => 'index'),array("class" => $active));?>
						</li>
						<li> 

							<?php 
							$active = (isset($actual_page) && $actual_page == "users:index")? "active" : "";
							$actual_page;
							echo $this->Html->link(__("My Users"), array('controller' => 'users', 'action' => 'index'),array("class" => $active));?>
						</li>
					</ul>
				  	<ul class="nav navbar-nav navbar-right">
				  		<li>
				  			<?php echo $this->Form->create('Patient',array('action' => 'search', "class" => "navbar-form navbar-right")); ?>
							<div class="form-group">
							        <?php echo $this->Form->input(	'search',array(
								        							"class"=>"form-control",
								        							"placeholder"=>__("Search Patient"),
								        							"label" => false));?>
							</div>
							<?php

							echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-default', 'div' => false));
							?>
				  		</li>
						<li>
							<?php echo $this->Html->link("logout", array('controller' => 'users', 'action' => 'logout'));?>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
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
