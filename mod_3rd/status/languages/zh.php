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
 * @version: 0.3
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
	
			'status' => "状态",
			'status:user' => "%s 的状态",
			'status:current'=> "当前状态",
			'status:posttitle' => "%s 的状态: %s",
			'status:everyone' => "整站状态",
			'status:strapline' => "%s",
			'status:addstatus' => "设置您的状态",
		    'status:messages' => "状态信息",
			'status:text' => "状态：",
			'status:set' => "设置 ",
			'status:clear' => "清楚状态",
			'status:delete' => "删除状态",
			'status:nostatus' => "没有状态被设置",
			'status:viewhistory' => "查看历史",
	
			'item:object:status' => '状态信息',
	
	
        /**
	     * Status river
	     **/
	        
	        //generic terms to use
	        'status:river:created' => "%s 更新了",
	        
	        //these get inserted into the river links to take the user to the entity
	        'status:river:create' => "他们的状态",
	        
	        
	
		/**
		 * Status messages
		 */
	
			'status:posted' => "您的新状态已经被发布了。",
			'status:deleted' => "您的新状态已经被删除了。",
	
		/**
		 * Error messages
		 */
	
			'status:blank' => "对不起请输入内容后再发布状态。",
			'status:notfound' => "对不起，我们没法找到特定的状态信息。",
			'status:notdeleted' => "对不起我们无法删除这个状态信息。",
			'status:notsaved' => "在保存的时候出错了，请再试一次或者报告给管理员。",
			'status:problem' => "出错了，您无法编辑当前状态",
	
	);
					
	add_translation("zh",$chinese);

?>