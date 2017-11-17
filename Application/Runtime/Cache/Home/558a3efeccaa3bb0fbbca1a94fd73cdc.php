<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<title>博客</title>

		<meta charset="utf-8">
    <title><?php echo ($settingrs["s_name"]); ?></title>
        <link rel="stylesheet" type="text/css" href="/blog_cms/Public/Home/css/style.css">    
    </head>
    <body>  
        <div class="warp">  
            <div class="header">
                <div class="header-center">
                   
                    <div class="logo">
                        
                        <a class="logo-name" name="s_name" href="#"><?php echo ($settingrs["s_name"]); ?></a>
                        <div class="logo-text"><?php echo ($settingrs["s_description"]); ?></div>
                       
                    </div>
                    <div class="nav">
                        <ul class="nav-ul">
                            <?php if(is_array($navers)): $i = 0; $__LIST__ = $navers;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/blog_cms/index.php/Home/<?php if($vo['cate_id'] == 4): ?>index<?php elseif($vo['cate_id'] == 5): ?>article<?php elseif($vo['cate_id'] == 6): ?>photo<?php elseif($vo['cate_id'] == 7): ?>about<?php endif; ?>/index"><?php echo ($vo["cate_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>              
            </div>          
    	

			<div class="content">
					<h1 class="photo-title">相册首页</h1>
				
					<div class="photo">
						<a href="/blog_cms/index.php/Home/Photo/photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
						</a>
					</div>

					<div class="photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
					</div>

					<div class="photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
					</div>

					<div class="photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
					</div>

					<div class="photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
					</div>

					<div class="photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
					</div>

					<div class="photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
					</div>

					<div class="photo">
						<img src="/blog_cms/Public/Home/img/12646017862813.jpg">
					</div>
					
				
			</div>

	
	            <div class="footer">
                <div>友情链接</div>
                <div></div>
                <div>版权</div>
            </div>
        </div>
    </script>
    </body>
</html>