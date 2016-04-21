<?php
	$this -> Html -> css('recovery',array('inline' => false));
	
	// $products = array(
		// 0 => array(
			// 'link' => 'taoci.php',
			// 'name' => '陶瓷',
			// 'sentence' => array(
				// 0 => '修内器犹在',
				// 1 => '阅年六百余',
				// 2 => '虽输铜晕绿',
				// 3 => '漫拟玉无暇',
			// ),
			// 'pic' => 'recovery/2.jpg'
		// ),
		// 1 => array(
			// 'link' => 'taoci.php',
			// 'name' => '西画雕塑',
			// 'sentence' => array(
				// 0 => '栩栩如生',
				// 1 => '却无生命',
				// 2 => '精妙绝伦',
				// 3 => '却无声无息',
			// ),
			// 'pic' => 'recovery/3.jpg'
		// ),
		// 2 => array(
			// 'link' => 'taoci.php',
			// 'name' => '邮品钱币',
			// 'sentence' => array(
				// 0 => '集邮长知识',
				// 1 => '嗜爱颇高尚',
				// 2 => '切莫去居奇',
				// 3 => '赚钱代欣赏',
			// ),
			// 'pic' => 'recovery/4.jpg'
		// ),
		// 3 => array(
			// 'link' => 'taoci.php',
			// 'name' => '玉石器',
			// 'sentence' => array(
				// 0 => '临江之畔',
				// 1 => '璞石无光',
				// 2 => '千年磨砺',
				// 3 => '温润有方',
			// ),
			// 'pic' => 'recovery/5.jpg'
		// ),
		// 4 => array(
			// 'link' => 'taoci.php',
			// 'name' => '中国书画',
			// 'sentence' => array(
				// 0 => '飘若浮云',
				// 1 => '矫若惊龙',
				// 2 => '铁书银钩',
				// 3 => '冠绝古今',
			// ),
			// 'pic' => 'recovery/6.jpg'
		// ),
		// 5 => array(
			// 'link' => 'taoci.php',
			// 'name' => '珠宝翡翠',
			// 'sentence' => array(
				// 0 => '渌沼春光后',
				// 1 => '青青草色浓',
				// 2 => '绮罗惊翡翠',
				// 3 => '暗粉妒芙蓉',
			// ),
			// 'pic' => 'recovery/7.jpg'
		// ),
		// 6 => array(
			// 'link' => 'taoci.php',
			// 'name' => '竹木牙角',
			// 'sentence' => array(
				// 0 => '美轮美奂',
				// 1 => '鬼斧神工',
				// 2 => '精雕细琢',
				// 3 => '精巧绝伦',
			// ),
			// 'pic' => 'recovery/8.jpg'
		// ),		
	// )
	
?>


<div id="recovery-bg">
    <p id="recovery-bg-title">藏  品  分  类<p>
    <div id="recovery-bg-p">
        <p>艺术是一种享受，一切享受中最迷人的享受。</p>
    </div>
</div>
<div id="recovery-grey">
	<p id="recovery-grey-p">搜索</p>
	<div id="recovery-grey-search">
		<form id="recovery-grey-block">
			<input class="recovery-grey-block" type="text" name="username" />
			<input class="recovery-grey-ok" type="submit" value="" />
		</form>
	</div>
</div>

<div id="recovery-link">
	
	<?php 
		foreach ($categories as $k => $category) { 
		// pr($product);
	?>
	<div class="recovery-products">
		<div class="transparent-bg"></div>
			<?php
				$div = '<div class="recovery-infomation">'.
				'<h1>'.$category['Category']['name'].'</h1>'.
				"<h2>".$category['Category']['sentence1']."</h2>".
				"<h2>".$category['Category']['sentence2']."</h2>".
				"<h2>".$category['Category']['sentence3']."</h2>".
				"<h2>".$category['Category']['sentence4']."</h2>".
				'</div>';
				
			 ?>
			 
			<?php echo $this -> Html -> link(
				$this -> Html -> image('recovery/'.($category['Category']['id']+1).'.jpg',array('class' => 'imgs')).$div,
				array(
					'controller' => 'fronts',
					'action' => 'products',
					$category['Category']['id']
				),
				array(
					'escape' => false
				)
				); ?>
			
			
			
			<!-- <a href="<?php echo $product['link'] ?>" >
		
			
			<img class="imgs" src="<?php echo $product['pic'] ?>">
			
			<div class="recovery-infomation">
				<h1><?php echo $product['name'] ?></h1>
				<?php foreach($product['sentence'] as $key => $value){ ?>
				<h2><?php echo $value ?></h2>
				<?php } ?>
			</div>
			</a> -->
		
		<!-- <span>
				<span></span>
				<span><?php echo $product['sentence'][0] ?></span>	
				<br />
				<?php echo $product['sentence'][1] ?>
				<br />
				<?php echo $product['sentence'][2] ?>
				<br />
				<?php echo $product['sentence'][3] ?>
				
			</span> -->
	</div>
	<?php } ?>
</div>

<div id="recovery-blue">
	<img src="../img/recovery/10.jpg">
</div>

<?php 
	$this -> Html -> script('recovery',array('inline' => false));
?>