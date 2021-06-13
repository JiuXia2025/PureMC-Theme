<?php
/**
 * 这是 PureMC 官网的主题文件，微改了Typecho默认模板，这里自定义内容没时间做所以只能手动编辑了
 * 开源地址：https://github.com/JiuXia2025/PureMC-Theme
 * 
 * @package PureMC Theme 
 * @author JiuXia2025
 * @version 1.0
 * @link https://puremc.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<header class="Intro">
    <div class="Intro-brand">PureMC Network</div><div class="Intro-version"></div>
        <div class="animated fadeIn">
        <br/>
            <div id="h">﻿开设多个优质服务器，无论是您喜爱在战争中左右杀敌或是在山谷中隐居。您都可以在旗下服务器中找到属于自己的服务器</div><br>
            <div class="Intro-actions">
                <a href="https://jq.qq.com/?_wv=1027&k=JB4tzmgr" target="_blank" class="Button">官方Q群</a>
                <a href="http://dl.puremc.cn/" target="_blank" class="Button">下载中心</a>
            </div>
        </div>
    </header>
    <div class="animated fadeUp">
        <figure class="Home-screenshot">
        </figure>
        <div class="Actions">
            <div class="container">
                <div class="Actions-item">
                    <h3>稳定流畅</h3>
                    <p>服务器运行于电信、联通、移动多线服务器上，游戏体验更加稳定流畅</p>
                </div>
                <div class="Actions-item">
                    <h3>安全放心</h3>
                    <p>公正的管理团队，不会放过任何熊孩子，也不会让你无辜受罚</p>
                </div>
                <div class="Actions-item">
                  <h3>值得信赖</h3>
                  <p>不同于其他快餐小服，开服时间长、经常更新、更多模组，让您值得信赖</p>
                </div>
            </div>
        </div>
    </div>
<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
