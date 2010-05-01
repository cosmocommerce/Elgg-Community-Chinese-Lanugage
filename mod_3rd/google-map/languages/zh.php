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
	
           'gmap' => 'Google 地图',
           'gmap:desc' => '本插件允许你放置Google 地图到您的Elgg站点',
           'gmap:nokey' => "您已经安装好了Google地图插件,但是您依旧需要提供GMap API key在 <a href='%spg/admin/plugins'>管理员后台</a>.",

           'gmap:location' => '输入地址',
           'gmap:zoom' => '输入缩放级别',
           'gmap:notfound' => '地址 \'%s\' 没找到',
           
           'gmap:submit' => '提交',
           'gmap:modify' => '输入 Google Maps API Key<br /><small>您可以获取 Key 在 <a target="_blank" href="http://code.google.com/apis/maps/signup.html">这里</a>.</small>',
           'gmap:modify:success' => '更新 Google Maps API 设定成功.',
           'gmap:modify:failed' => '更新 Google Maps API 设定失败.',
           'gmap:failed:keyrequired' => '您必须提供API key.',
           'gmap:nomap' => '地图参数必须提供.',
           'gmap:noopts' => '没有提供方位选项',
           'gmap:noloc' => '地址是必须的',
           'gmap:failed:geocode' => '地理编码错误',
           
           'gmap:river:created' => "%s 添加了地图插件.",
           'gmap:river:updated' => "%s 更新了地图插件.",
           'gmap:river:delete' => "%s 删除了地图插件.",

           'item:object:' . GMAP_SUBTYPE => 'Google 地图',

           'gmap:last'
	);
					
	add_translation("zh",$chinese);

?>