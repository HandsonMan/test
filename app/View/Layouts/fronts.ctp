<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('header');
        echo $this->fetch('css');

	?>
</head>
<body>
	<?php if($this -> request -> params['action'] == 'recovery'){ ?>
	<div id="float">
		 <?php echo $this -> Html -> link(__('返回首页',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
		 <?php echo $this -> Html -> link(__('登录',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
		 <?php echo $this -> Html -> link(__('注册',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
		 <?php echo $this -> Html -> link(__('关于我们',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
	</div>
	<?php }?>
	<?php if($this -> request -> params['action'] == 'products'){ ?>
	<div id="float-taoci">
		 <?php echo $this -> Html -> link(__('返回首页',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
		 <?php echo $this -> Html -> link(__('藏品分类',true),array('controller' => 'fronts','action' => 'recovery'),array('class' => 'float-link')) ?>
		 <?php echo $this -> Html -> link(__('登录',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
		 <?php echo $this -> Html -> link(__('注册',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
		 <?php echo $this -> Html -> link(__('关于我们',true),array('controller' => 'fronts','action' => 'index'),array('class' => 'float-link')) ?>
		 <div id="float-search">
		 	<p id="float-p">搜索</p>
		 	<div id="float-img">
		 		<form id="float-block">
		 			<input class="float-block" type="text" name="username" />
					<input class="float-ok" type="submit" value="" />
				</form>
			</div>
		</div>
	 </div>
</div>
	</div>
	<?php }?>
		<div id="homepage-bg">
		</div>
		<div id="homepage-bgw">
		</div>
		<div id="container">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		</div>

<?php
    echo $this -> Html -> script('booklet/jquery-1.4.4.min.js');
    echo $this->fetch('script');
?>
</body>

</html>
