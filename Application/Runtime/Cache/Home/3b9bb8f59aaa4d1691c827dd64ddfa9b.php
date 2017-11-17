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
						<h1>Hello World!你好，世界！</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>Javascript笔记</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>AJAX运用实例</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>关于PHP的一些规范</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>影评：《降临》观后感</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>我的一些方法</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>我的一些方法</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>我的一些方法</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>我的一些方法</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>我的一些方法</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
					</div>
					<div class="log">
						<h1>我的一些方法</h1>
						<span class="log-time">发表于2017年2月19日 21:31</span>
						<p>
							The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site. Heading 1 Heading 2 Heading 3 Heading 4 Heading 5 Heading 6 [top] Paragraph
							人的一生会遇到许多的人和事，但要想人人成为知己，事事顺心如意，我看也非易事。然，佛经中的两个字却让我茅塞顿开，那就是‘随缘’，按佛经中讲，人与人从相逢到相识也是一种缘分，不管是什么人，只要有缘，哪怕是隔着千山万水，冥冥中也会在一个特定的环境下相逢，正所谓，有缘千里来相会，当然，除了男女之间的姻缘外，朋友之间的相逢与相识，也是一种缘分，所以，朋友之间一定要珍惜这种　 							
						</p>
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