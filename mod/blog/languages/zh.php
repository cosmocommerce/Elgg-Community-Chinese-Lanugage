<?php

/**
 * Chinese Elgg Community 
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to opensource@cosmocommerce.com so we can send you a copy immediately.
 *
 * @category	CosmoCommerce
 * @package 	CosmoCommerce_Elgg_Language
 * @copyright	Copyright (c) 2009 Elgg.Org.cn(http://www.elgg.org.cn)	CosmoCommerce,LLC. (http://www.cosmocommerce.com)
 * @version: 0.4
 * @contact :
 * Author: CosmoMao airforce.e@gmail.com
 * T: +86-021-66346672
 * L: Shanghai,China
 * M:sales@cosmocommerce.com
 * GIT:http://github.com/cosmocommerce/Elgg-Community-Chinese-Lanugage/
 */
	$chinese = array(
	
		/**
		 * Menu items and titles
		 */
	
			'blog' => "博客",
			'blogs' => "博客",
			'blog:user' => "%s 的博客",
			'blog:user:friends' => "%s 好友的博客",
			'blog:your' => "您的博客",
			'blog:posttitle' => "%s 的博客 %s",
			'blog:friends' => "好友的博客",
			'blog:yourfriends' => "您好友更新的博客",
			'blog:everyone' => "整站博客",
			'blog:newpost' => "发布新博客",
			'blog:via' => "通过博客",
			'blog:read' => "阅读",
	
			'blog:addpost' => "发表日志",
			'blog:editpost' => "编辑日志",
	
			'blog:text' => "内容",
	
			'blog:strapline' => "%s",
			
			'item:object:blog' => '博客日志',

			'blog:never' => '从不',
			'blog:preview' => '预览',
	
			'blog:draft:save' => '保存草稿',
			'blog:draft:saved' => '上次保存',
			'blog:comments:allow' => '允许评论',
	
			'blog:preview:description' => '这篇日志未保存仅供预览.',
			'blog:preview:description:link' => '点击这里继续编辑或保存日志',
			'blog:enableblog' => '开启小组博客',
	
			'blog:group' => '小组博客',

		'blog:widget:description' => '本插件显示最新的博客日志.',
		'blog:moreblogs' => '更多文章',
		'blog:numbertodisplay' => '显示博客文章数量',
		
			
         /**
	     * Blog river
	     **/
	        
	        //generic terms to use
	        'blog:river:created' => "%s 写了",
	        'blog:river:updated' => "%s 更新了",
	        'blog:river:posted' => "%s 发布了",
	        
	        //these get inserted into the river links to take the user to the entity
	        'blog:river:create' => "新日志",
	        'blog:river:update' => "日志",
	        'blog:river:annotate:create' => "一篇对日志的评论.",
			
	
		/**
		 * Status messages
		 */
	
			'blog:posted' => "您的日志已经成功的发布了。",
			'blog:deleted' => "您的日志已经成功的删除了。",
	
		/**
		 * Error messages
		 */
	
			'blog:error' => '发生错误,请再试一次.',
			'blog:save:failure' => "您的日志无法删除，请再试一次。",
			'blog:blank' => "对不起，发不前您需要同时输入标题和内容。",
			'blog:notfound' => "对不起，我们没有找到指定的日志。",
			'blog:notdeleted' => "抱歉，我们无法删除这个日志。",

	
	);
					
	add_translation("zh",$chinese);

?>