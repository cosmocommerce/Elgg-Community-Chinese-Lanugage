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

	  // Admin settings

		'bbar:admin:basicopts' 		=> '基本配置',
		'bbar:admin:refreshrate'	=> '刷新率 <br>(时间越长 = 服务器负载越小)',
		'bbar:admin:idlethreshold'	=> '用户空闲判定时间',
		'bbar:admin:offlinethreshold'	=> '用户离线判定时间',
		'bbar:admin:allowchat'		=> '允许聊天?',
		'bbar:admin:forceloginpage'	=> '如果登出时候强制用户到登录页面?',
		'bbar:admin:allowmenu'		=> '点击logo时候启用elgg菜单?',
		'bbar:admin:allowradio'		=> '启用单选按钮?',
		'bbar:admin:radiourl'		=> '广播流的URL地址<br>(必须是MP3格式,或者是icecast服务器)',
		'bbar:admin:logolocation'	=> '放置于底部左下方的Logo图片:<br>(留空使用默认图片.格式为jpg,gif 或者 png. 文件将被保存在 /mod/bottom_bar/graphics/icons/ 里)',

		'bbar:admin:dbopts'		=> '数据库设置',
		'bbar:admin:dboptsdesc'		=> '本插件可以使用自己的SQLite数据库(适合中小尺寸的网站)或者向上支持MySQL中ELGG对象.如果您不确定选择哪个方式,请保持选择SQLite',
		'bbar:admin:dboptstype'		=> '数据库类型',
		'bbar:admin:dbmysqlopts'	=> '<b>Mysql 设置</b> (如果您选择了上面的SQLite,请忽略)',
		'bbar:admin:dboptsuseelgg'	=> '使用 ELGG 设定/数据库',
		'bbar:admin:dbmysqlsettings'	=> '<b>Mysql自定义设置</b><br>(如果您是用SQLite或者选择了使用ELGG设定请忽略)',
		'bbar:admin:dbmysqluser'	=> '用户名<br>(必须有创建权限)',
		'bbar:admin:dbmysqlpass'	=> '密码',
		'bbar:admin:dbmysqldbase'	=> '数据库',
		'bbar:admin:dbmysqlprefix'	=> '表前缀',

		'bbar:admin:nosqlite'		=> 'SQLite 插件没有安装 - 使用 ELGG 对象',

		'bbar:admin:second'		=> '秒',
		'bbar:admin:seconds'		=> '秒',
		'bbar:admin:minute'		=> '分',
		'bbar:admin:minutes'		=> '分',

	  // User settings

		'bbar:user:enablechat'		=> '启用聊天?',
		'bbar:user:enablesounds'	=> '启用声音?',
		'bbar:user:enableicons'		=> '在好友列表里显示用户头像?',

	  // Bar language

		'bbar:bar:notifications'	=> '提醒',
		'bbar:bar:notify.all'		=> '所有',
		'bbar:bar:notify.mine'		=> '我',
		'bbar:bar:friends'		=> '好友',
		'bbar:bar:online'		=> '在线',
		'bbar:bar:offline'		=> '离线',
		'bbar:bar:istyping'		=> '正在输入',
		'bbar:bar:noneonline'		=> '没有好友在线'
          );

          add_translation("zh",$chinese);


?>
