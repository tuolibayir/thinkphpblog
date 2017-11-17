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
				<div class="main">
					<div class="log">
						<h1>归档</h1>
						<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="lis"><a href="/blog_cms/index.php/Home/Article/post/id/<?php echo ($vo["a_id"]); ?>">
						<?php echo (date("Y-m-d H:i",$vo["time"])); ?>  <?php echo ($vo["a_title"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>


	<div class="sidebar">
                    <div class="sidebar-sub">
                        <div>最新文章</div>
                        <ul>
                            <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["a_title"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="sidebar-sub">
                        <div>分类目录</div>
                        <ul>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                        </ul>
                    </div>
                    <div class="sidebar-sub">
                        <div>标签</div>
                        <ul>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                        </ul>
                    </div>
                    <div class="sidebar-sub">
                        <div>文章归档</div>
                        <ul>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                        </ul>
                    </div>
                    <div class="sidebar-sub">
                        <div>友情链接</div>
                        <ul>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                            <li>列表</li>
                        </ul>
                    </div>
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