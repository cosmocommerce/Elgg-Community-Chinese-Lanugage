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

	'profile'  =>  "资料" , 
	'profile:edit:default'  =>  "替换资料内容" , 
	'profile:preview' => '预览',
	
	'user'  =>  "用户" , 
	'item:user'  =>  "用户" , 
	'riveritem:single:user'  =>  "一个用户" , 
	'riveritem:plural:user'  =>  "某些用户" , 

	'profile:yours'  =>  "您的资料" , 
	'profile:user'  =>  "%s 的资料" , 

	'profile:edit'  =>  "编辑资料" , 
	'profile:profilepictureinstructions'  =>  "资料图片显示在您的个人资料页上。<br /> 您可以随时修改更换。 (支持格式: GIF, JPG 或者 PNG)" , 
	'profile:icon'  =>  "资料图片" , 
	'profile:createicon'  =>  "建立您的头像" , 
	'profile:currentavatar'  =>  "当前头像" , 
	'profile:createicon:header'  =>  "资料图片" , 
	'profile:profilepicturecroppingtool'  =>  "资料图片裁减工具" , 
	'profile:createicon:instructions'  =>  "点击下面并拖动一个方块来匹配剪裁您希望的图片效果。预览您的剪裁图片将出现在右边的方块中。当你满意预览时候，点击'创建您的头像。剪裁图像将被用于整个网站作为您的头像。" , 
	
	'profile:editdetails'  =>  "编辑详情" , 
	'profile:editicon'  =>  "编辑资料图标" , 
	
	'profile:aboutme'  =>  "关于我" , 
	'profile:description'  =>  "关于我" , 
	'profile:briefdescription'  =>  "简介" , 
	'profile:location'  =>  "地址" , 
	'profile:skills'  =>  "技能" , 
	'profile:interests'  =>  "兴趣" , 
	'profile:contactemail'  =>  "联系电子邮件" , 
	'profile:phone'  =>  "电话" , 
	'profile:mobile'  =>  "手机" , 
	'profile:website'  =>  "网站" , 
	
	'profile:banned'  =>  "该用户已经被紧封" , 
	'profile:deleteduser' => '删除用户',

	'profile:river:update'  =>  "%s 更新了他的个人资料" , 
	'profile:river:iconupdate'  =>  "%s 更新了他的头像" , 
	
	'profile:label'  =>  "个人资料标签" , 
	'profile:type'  =>  "个人资料类型" , 
	
	'profile:editdefault:fail'  =>  "默认的个人资料无法被保存" , 
	'profile:editdefault:success'  =>  "条目已经成功的添加到了默认的个人资料里" , 
	
	'profile:editdefault:delete:fail'  =>  "移除默认的个人资料条目失败" , 
	'profile:editdefault:delete:success'  =>  "默认的个人资料条目删除了" , 
	
	'profile:defaultprofile:reset'  =>  "默认的个人资料重置" , 
	
	'profile:resetdefault'  =>  "重置默认的个人资料" , 
	'profile:explainchangefields' => '您可以替换现下方里面的个人资料信息.首先您需要提供新的个人资料标签. 例如,\'最爱团体\' 然后你选择类型,例如,tags,url,text等.随时你可以返回来修改设置.',
		
	'profile:saved'  =>  "您的个人资料已经保存成功." , 
	'profile:icon:uploaded'  =>  "您的头像已经成功的上传好了。" , 
	
	'profile:noaccess'  =>  "您无权编辑个人资料。" , 
	'profile:notfound'  =>  "对不起；我们没有找到指定的个人资料。" , 
	'profile:icon:notfound' => "抱歉，上传您的个人资料图片遇到错误.",
	'profile:icon:noaccess' => '您无法修改这个资料图标',
	'profile:field_too_long' => '无法保存您的资料信息，因为 "%s" 栏内容超过长度限制.',
	);
	
	add_translation("zh",$chinese);

?>
