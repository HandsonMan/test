<?php
    $this -> Html -> css('index',array('inline' => false));
    $this -> Html -> css('booklet/jquery.booklet.1.1.0',array('inline' => false));
    $this -> Html -> css('booklet/style',array('inline' => false));
	// pr($users);
?>


<div id="png">
	 <?php echo $this -> Html -> image('../img/index/1.png') ?>
</div>
<div id="nav">
    <div>
        <?php echo $this -> Html -> link(__('藏品分类',true),array('controller' => 'fronts','action' => 'recovery'),array('class' => 'link')) ?>
    </div>
    <div>
        <a href="#index-login" class="link">登  录</a>
    </div>
    <div>
        <a href="index.php" class="link">关于我们</a>
    </div>
</div>
<div class="clear"></div>

<div id="booklet">
    <div id="addHieght"></div>
    <div class="book_wrapper">
        <a id="next_page_button"></a>
        <a id="prev_page_button"></a>
        <div id="loading" class="loading">Loading pages...</div>
        <div id="mybook" style="display:none;">
            <div class="b-load">
                <div>
                    <?php echo $this -> Html -> image('booklet/1.jpg') ?>

				</div>
                <div>
                    <?php echo $this -> Html -> image('booklet/2.jpg') ?>
                    
				</div>
                <div>
                	<h1>《向日葵》</h1>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;15朵形态各异的向日葵，或绚烂或枯委，或隐或现，以淡黄色为背景，以深黄色为向日葵的主色调，另有几朵含苞未放以淡黑色点缀花蕊，颜色上给人一种强烈的对比，画面总体上给人一种明亮而又强烈的生命力，让人感到生活充满希望，阳光是那样的明媚，天空是那样的广阔，整幅画就像是烧遍画布的熊熊火焰。梵高有着火一般炽热的感情和强烈的艺术气质，他个性鲜明，特别喜欢明亮的阳光，喜欢黄色的向日葵。许多评论家们认为，他画的向日葵和那些充满动感的用笔手法，是画家自己心灵感情的写照，是画家精神炽烈的意念真实流露，是表现与技巧的和谐统一。</p>
                </div>
                <div>
                    <?php echo $this -> Html -> image('booklet/4.jpg') ?>

                   
                </div>
                <div> 
                	<h1>《墨虾》</h1>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;这幅画表现了虾的形态，活泼、灵敏、机警，有生命力。为了熟悉虾的各种变化，白石老人在水缸里养了几只大虾，闲时常常仔细地观察虾的游动、跃进、觅食以及 体态的各种变化。因为他掌握了虾的特征，所以画起来得心应手。用笔的变化，使虾的腰部呈现各种异态，有躬腰向前的，有直腰游荡的，也有弯腰爬行的。虾的一对前爪，由细而粗，数节之间直到两螯，形似钳子，有开有合。虾的触须用数条淡墨线画出，看似容易，实则极难：画得活，则虾之生命自出；画僵了，也就失去了生命。虾须的线条似柔实刚，似断实连，直中有曲，乱中有序，纸上之虾似在水中嬉戏游动，触须也像似动非动。</p>
                </div>
                <div>
                    <?php echo $this -> Html -> image('booklet/6.jpg') ?>
                   
                </div>
                <div>
                	<h1>《掷铁饼者》</h1>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;掷铁饼的强烈动感与雕像的稳定感结合得非常好。雕像的重心落在右腿上，因此右腿成了使整个雕像身体自由屈伸和旋转的轴心，同时又保持了雕像的稳定性。掷铁饼者张开的双臂象一张拉满弦的弓，带动了身体的弯曲，呈现出不稳定状态，但高举的铁饼又把人体全部的运动统一了起来，使人们又体会到了暂时的平衡。整尊雕像充满了连贯的运动感和节奏感，突破了艺术上时间和空间的局限性，传递了运动的意念，把人体的和谐健美青春的力量表达得淋漓尽致。体现了古希腊的艺术家们不仅在艺术技巧上，同时也在艺术思想和表现力上有了一个质的飞跃。这尊雕像被认为是“空间中凝固的永恒”，直到今天仍然是代表体育运动的最佳标志。</p>
                </div>
                <div>
                    <?php echo $this -> Html -> image('booklet/8.jpg') ?>
                    
                </div>
                <div>
                	<h1>《蒙娜丽莎的微笑》</h1>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;意大利著名画家达芬奇创作于1504年左右，法国巴黎卢浮宫博物馆的镇馆之宝。它是直接画在白杨木上的此画面积不大，长77厘米，宽53厘米。《蒙娜丽莎的微笑》是一幅享有盛誉的肖像画杰作。它代表达芬奇的最高艺术成就，成功地塑造了资本主义上升时期一位城市有产阶级的妇女形象。 画中人物坐姿优雅，笑容微妙，背景山水幽深茫茫，淋漓尽致地发挥了画家那奇特的烟雾状“无界渐变着色法”般的笔法。画家力图使人物的丰特别着重掌握精确与含蓄的辩证关系，达到神韵之境，从而使蒙娜丽莎的微笑具有一种神秘莫测的千古奇韵，那如梦似的妩媚微笑，被不少美术史家称为“神秘的微笑”。</p>
                </div>
                <div>
                    <?php echo $this -> Html -> image('booklet/10.jpg') ?>
                   
                </div>
                <div>
                	<h1>《断臂的维纳斯》</h1>
                	<p>&nbsp;&nbsp;&nbsp;&nbsp;雕像给人的印象是庄重典雅，又体态大方，她名为神却又有人间烟火味。她的模样是典型的希腊妇女形象：鼻如悬胆，椭圆的脸，窄额和丰满的下巴。安祥的眼神和觉察不出肃穆的笑，给人矜持而高雅的感觉。左脚略向前弯，造成身体两侧优美的曲线。下身披着裙罗，衣纹的线条体现出一处含蓄的美。这幅作品是作者通过对罗马神话中唤醒春天的诸神的富于想象力的描绘，表现人与自然和谐相处的寓意画。它原是为装饰佛罗萨卡斯得罗庄园的餐厅而创作的，体现了意大利文艺复兴早期新兴资产阶级的生活趣味和审美理想。作品表现了精致明净的独特画风，从而奠定了它在世界美术史上的重要地位。</p>
                </div>
                <div>
                    <?php echo $this -> Html -> image('booklet/12.jpg') ?>
                </div>
                <div>
                    <h1>《元青花四爱图梅瓶》</h1>
                	<p>&nbsp;&nbsp;&nbsp;&nbsp;梅瓶通体绘青花纹饰，分三组，肩部饰凤穿牡丹纹。腹下部绘仰覆莲纹和忍冬纹一周。腹部主题纹饰为四个菱形开光，分别绘有中国古代四位高士闲情逸致、恬静自然的场景。即王羲之爱兰，周茂叔爱莲，林和靖爱梅鹤，陶渊明爱菊。该青花陪衬的景物结合主题，四组画面情景交融，造型秀美，线条流畅，色泽浓艳，可谓元代青花瓷中极其罕见的精品。在青花瓷器中，元代青花反映人物图案的器物存世较为稀少，有如此精美的四爱人物图案的元青花梅瓶更为罕见。这件元青花“四爱图”梅瓶，为了解元代青花瓷制造工艺及人物图案纹饰提供了十分重要的实物资料。</p>
                </div>
                <div>
                    <h2>谢谢观赏！</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="introduction">
    <form id="index-login">
        <label>用户名：</label>
        <input class="login-input" id="login-username" type="text" name="username" />
        <div class="clear"></div>
        <br />
        <label>密&nbsp;&nbsp;码：</label>
        <input class="login-input" type="password" name="password" />
        <div class="clear"></div>
        <div id="index-login-links">
            <a href="index.php" class="login-link" id="login-link1">注&nbsp;&nbsp; 册</a>
            <a href="index.php" class="login-link">忘记密码？</a>
        </div>
        <div id="index-login-submit">
            <input type="submit" id="login-submit" value="登&nbsp;&nbsp;录" />
        </div>
    </form>
</div>

<?php
    echo $this -> Html -> script('booklet/jquery.easing.1.3',array('inline' => false));
    echo $this -> Html -> script('booklet/jquery.booklet.1.1.0.min',array('inline' => false));
    echo $this -> Html -> script('index',array('inline' => false));
?>
