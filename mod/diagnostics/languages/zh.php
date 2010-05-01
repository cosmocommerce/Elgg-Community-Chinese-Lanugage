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
	
			'diagnostics' => '系统诊断',
			'diagnostics:unittester' => '单元测试',
	
			'diagnostics:description' => '下列诊断报告适用任何Elgg的问题.可以被作为提交bug报告的文件附件.',
			'diagnostics:unittester:description' => '以下注册插件的诊断测试将根据Elgg框架的调试部分来执行.',

			'diagnostics:unittester:description' => '单元测试检查Elgg Core 的错误和API问题.',
			'diagnostics:unittester:debug' => '要运行单元测试，站点必须运行于Debug调试模式.',
			'diagnostics:unittester:warning' => '警告: 这些测试可能会留下调试对象在您的数据库中。请不要在生产环境中使用本功能！',

	
			'diagnostics:test:executetest' => '执行测试',
			'diagnostics:test:executeall' => '执行所有',
			'diagnostics:unittester:notests' => '抱歉,目前没有单元测试模块安装.',
			'diagnostics:unittester:testnotfound' => '抱歉,由于没有找到测试实例,所以报告没有生成',
	
			'diagnostics:unittester:testresult:nottestclass' => '失败 - 结果不是一个测试类',
			'diagnostics:unittester:testresult:fail' => '错误',
			'diagnostics:unittester:testresult:success' => '成功',
	
			'diagnostics:unittest:example' => '单元测试范例,仅对调试模式有用.',
	
			'diagnostics:unittester:report' => '%s 的测试报告',
	
			'diagnostics:download' => 'Download .txt',
	
	
			'diagnostics:header' => '========================================================================
Elgg 诊断报告
生成于 %s 由 %s
========================================================================
			
',
			'diagnostics:report:basic' => '
Elgg 发行版本 %s, 号 %s

------------------------------------------------------------------------',
			'diagnostics:report:php' => '
PHP 信息:
%s
------------------------------------------------------------------------',
			'diagnostics:report:plugins' => '
安装的插件和详情:

%s
------------------------------------------------------------------------',
			'diagnostics:report:md5' => '
安装文件和自检:

%s
------------------------------------------------------------------------',
			'diagnostics:report:globals' => '
全局变量:

%s
------------------------------------------------------------------------',
	
	);
					
	add_translation("zh",$chinese);
?>