<?php
	$this -> Html -> css('products',array('inline' => false));
?>

<div id="title">
	<div class="title-img"></div>
</div>

<div id="hover">
	<div id="word">
		<?php
		foreach($products as $product){
			echo '<h1>'.$product['Product']['name'].'</h1>';
		}?>
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('上一页'), array('escape' => false), null, array('escape' => false, 'class' => 'prev disabled'));
				echo "&nbsp;&nbsp;";
				echo $this->Paginator->numbers(array('separator ' => ''));
				echo "&nbsp;&nbsp;";
				echo $this->Paginator->next(__('下一页') . ' >', array('escape' => false), null, array('escape' => false, 'class' => 'next disabled'));
				echo "&nbsp;&nbsp;";
				echo $this->Paginator->counter(array(
					'format' => __('第{:page}页 共{:pages}页')
				));
			?>
			</div>
	</div>
	<div id="block">
		<div id="bg">
			<div id="bg-bottom">
				<p>更多信息</p>
			</div>
			<div id="bg-img"></div>
		</div>
	</div>
</div>


<?php 
	$this -> Html -> script('products',array('inline' => false));
?>