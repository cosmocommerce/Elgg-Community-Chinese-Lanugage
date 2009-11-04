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
 * @version: 0.4 SVN: Elgg 1.7.1 2010050201
 * @contact :
 * Author: CosmoMao airforce.e@gmail.com
 * T: +86-021-66346672
 * L: Shanghai,China
 * M:sales@cosmocommerce.com
 * GIT:http://github.com/cosmocommerce/Elgg-Community-Chinese-Lanugage/
 */
$chinese = array( 
	'item:site'  =>  "网站" , 

	'login'  =>  "登录" , 
	'loginok'  =>  "您已经登录了." , 
	'loginerror'  =>  "您登录失败了,这也许是因为你还没有激活您的帐户（激活链接已经发到您的邮箱），或您所提供的登录信息不正确。请确认您的信息正确的，然后再试一次。" , 

	'logout'  =>  "登出" , 
	'logoutok'  =>  "您已经登出了." , 
	'logouterror'  =>  "登出遇到问题,请稍候再试." , 

	'loggedinrequired' => "您必须登录才能查看该页面.",
	'exception:title'  =>  "欢迎来到Elgg.org.cn,艺歌中文社交网络" , 

	'adminrequired' => "您必须是管理员才能查看该页面.",
	'membershiprequired' => "您必须是该小组会员才能查看该页面.",
	'InstallationException:CantCreateSite'  =>  "无法根据安装配置创建默认Elgg站点:%s, Url: %s" , 

	'actionundefined'  =>  "请求的Action (%s) 没有在系统中定义过." , 
	'actionloggedout'  =>  "很抱歉，您不能在登出时执行该动作。" , 

	'SecurityException:Codeblock'  =>  "没有执行该代码的权限" , 
	'DatabaseException:WrongCredentials'  =>  "Elgg无法使用指定的配置信息连接到数据库" , 
	'DatabaseException:NoConnect'  =>  "Elgg不能选择数据库 '%s'，请检查该数据库是否建立好了并且有权限可以访问" , 
	'SecurityException:FunctionDenied'  =>  "访问需要权限的函数 '%s' 被拒绝了。" , 
	'DatabaseException:DBSetupIssues'  =>  "发生以下问题: " , 
	'DatabaseException:ScriptNotFound'  =>  "Elgg找不到位于 %s 的数据库脚本." , 

	'IOException:FailedToLoadGUID'  =>  "从GUID:%d 加载新的 %s 失败" , 
	'InvalidParameterException:NonElggObject'  =>  "传递一个非ElggObject到另一个ElggObject构造器!" , 
	'InvalidParameterException:UnrecognisedValue'  =>  "传递给构造函数一个不可识别的值。" , 

	'InvalidClassException:NotValidElggStar'  =>  "GUID:%d 不是一个有效的 %s" , 

	'PluginException:MisconfiguredPlugin'  =>  "%s 是一个配置错误的插件。" , 

	'InvalidParameterException:NonElggUser'  =>  "传递一个非ElggUser到ElggUser构造器!" , 

	'InvalidParameterException:NonElggSite'  =>  "传递一个非ElggSite到ElggSite构造器!" , 

	'InvalidParameterException:NonElggGroup'  =>  "传递一个非ElggGroup到ElggGroup构造器!" , 

	'IOException:UnableToSaveNew'  =>  "无法保存新 %s" , 

	'InvalidParameterException:GUIDNotForExport'  =>  "GUID 在输出的时候没有指定" , 
	'InvalidParameterException:NonArrayReturnValue'  =>  "实体序列化函数传递了一个非数组返回值参" , 

	'ConfigurationException:NoCachePath'  =>  "缓存路径没有设置!" , 
	'IOException:NotDirectory'  =>  "%s 不是一个目录。" , 

	'IOException:BaseEntitySaveFailed'  =>  "无法保存新对象的基本实体信息" , 
	'InvalidParameterException:UnexpectedODDClass'  =>  "import() 传递了一个非预期的 ODD 类" , 
	'InvalidParameterException:EntityTypeNotSet'  =>  "实体类型必须被设定" , 

	'ClassException:ClassnameNotClass'  =>  "%s 不是一个 %s." , 
	'ClassNotFoundException:MissingClass'  =>  "类 '%s' 没有被找到,插件丢失?" , 
	'InstallationException:TypeNotSupported'  =>  "类型 %s 不被支持. 这表明您的安装出错,一般情况是在升级不成功时发生这样的错误." , 

	'ImportException:ImportFailed'  =>  "无法导入元素 %d" , 
	'ImportException:ProblemSaving'  =>  "保存 %s 的过程遇到错误" , 
	'ImportException:NoGUID'  =>  "新的实体建立好了,但是没有 GUID, 这不应该发生." , 

	'ImportException:GUIDNotFound'  =>  "实体 '%d' 没有被找到" , 
	'ImportException:ProblemUpdatingMeta'  =>  "更新 '%s' 在实体 '%d' 的时候发生了一个错误  " , 

	'ExportException:NoSuchEntity'  =>  "没有实体 GUID:%d" , 

	'ImportException:NoODDElements'  =>  "在导入数据的时候没有找到 OpenDD 元素,导入失败." , 
	'ImportException:NotAllImported'  =>  "没有导入全部的数据" , 

	'InvalidParameterException:UnrecognisedFileMode'  =>  "不可识别的文件模式 '%s'" , 
	'InvalidParameterException:MissingOwner' => "文件 %s (文件 guid: %d)(所有者 guid: %d ) 没有所有者!",
	'IOException:CouldNotMake'  =>  "无法创建 %s" , 
	'IOException:MissingFileName'  =>  "在打开一个文件时候，您必须指定文件名" , 
	'ClassNotFoundException:NotFoundNotSavedWithFile'  =>  "文件存储信息无法找到或者类无法保存" , 
	'NotificationException:NoNotificationMethod'  =>  "没有指定通知方式" , 
	'NotificationException:NoHandlerFound'  =>  "没有找到 '%s' 的处理方法或者他不能被调用" , 
	'NotificationException:ErrorNotifyingGuid'  =>  "在通知 %d 的时候发生了一个错误" , 
	'NotificationException:NoEmailAddress'  =>  "无法获取 GUID:%d 的邮件地址" , 
	'NotificationException:MissingParameter'  =>  "丢失了必须的参数, '%s'" , 

	'DatabaseException:WhereSetNonQuery'  =>  "Where 设定里包括了非 WhereQueryComponent" , 
	'DatabaseException:SelectFieldsMissing'  =>  "Select 查询方式缺少参数" , 
	'DatabaseException:UnspecifiedQueryType'  =>  "不可识别或未指定的查询类型" , 
	'DatabaseException:NoTablesSpecified'  =>  "查询没有指定数据表" , 
	'DatabaseException:NoACL'  =>  "查询没有权限" , 

	'InvalidParameterException:NoEntityFound'  =>  "没有找到实体,该实体不存在或者您没有权限访问." , 

	'InvalidParameterException:GUIDNotFound'  =>  "GUID:%s 没有找到,也可能您没有权限访问." , 
	'InvalidParameterException:IdNotExistForGUID'  =>  "抱歉, '%s' 不存在 guid:%d" , 
	'InvalidParameterException:CanNotExportType'  =>  "抱歉,无法输出 '%s'" , 
	'InvalidParameterException:NoDataFound'  =>  "无法找到任何数据。" , 
	'InvalidParameterException:DoesNotBelong'  =>  "不属于实体" , 
	'InvalidParameterException:DoesNotBelongOrRefer'  =>  "不属于实体或者指向实体" , 
	'InvalidParameterException:MissingParameter'  =>  "缺少参数,您需要提供GUID" , 

	'APIException:ApiResultUnknown' => "API结果未知类型.",
	'ConfigurationException:NoSiteID' => "没有指定站点ID.",
	'SecurityException:APIAccessDenied'  =>  "对不起, API 访问被管理员关闭了。" , 
	'SecurityException:NoAuthMethods'  =>  "没有找到验证方式可以验证该API请求" , 
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "方式或者函数在 expose_method() 的调用中没有被设置",
	'InvalidParameterException:APIParametersArrayStructure' => "曝光方式 '%s' 的参数数组结构不正确",
	'InvalidParameterException:UnrecognisedHttpMethod' => "无法识别的 http 方式 %s 对于api方式 '%s'",
	
	'APIException:MissingParameterInMethod'  =>  "方法 %s 缺少参数 %s" , 
	'APIException:ParameterNotArray'  =>  "%s 不是数组" , 
	'APIException:UnrecognisedTypeCast'  =>  "广播 %s 的变量 '%s' (被方法 '%s' 调用) 是无法识别的类型" , 
	'APIException:InvalidParameter'  =>  "方法 '%s' 里有无效的参数 '%s' " , 
	'APIException:FunctionParseError'  =>  "%s(%s) 解析错误" , 
	'APIException:FunctionNoReturn'  =>  "%s(%s) 没有返回值" , 
	'APIException:APIAuthenticationFailed' => "API验证的调用方式错误",
	'APIException:UserAuthenticationFailed' => "用户验证的调用方式错误",	
	'SecurityException:AuthTokenExpired'  =>  "验证令牌丢失,无效或者过期" , 
	'CallException:InvalidCallMethod'  =>  "%s 被调用时候必须使用 '%s' " , 
	'APIException:MethodCallNotImplemented'  =>  "方法调用  '%s' 没有被实现" , 
	'APIException:FunctionDoesNotExist' => "方式 '%s' 的函数不可调用",	
	'APIException:AlgorithmNotSupported'  =>  "算法 '%s' 不支持或者被禁用了" , 
	'ConfigurationException:CacheDirNotSet'  =>  "缓存目录 'cache_path' 没有被设定" , 
	'APIException:NotGetOrPost'  =>  "返回方式必须是 GET 或者 POST" , 
	'APIException:MissingAPIKey'  =>  "丢失了 API 密钥" , 
	'APIException:BadAPIKey' => "错误的API密钥",
	'APIException:MissingHmac'  =>  "丢失了 X-Elgg-hmac 报头" , 
	'APIException:MissingHmacAlgo'  =>  "丢失了 X-Elgg-hmac-algo 报头" , 
	'APIException:MissingTime'  =>  "丢失了 X-Elgg-time 报头" , 
	'APIException:MissingNonce' => "丢失了 X-Elgg-nonce 报头",
	'APIException:TemporalDrift'  =>  "X-Elgg-time 报错" , 
	'APIException:NoQueryString'  =>  "查询字符里没有数据" , 
	'APIException:MissingPOSTHash'  =>  "丢失了 X-Elgg-posthash 报头" , 
	'APIException:MissingPOSTAlgo'  =>  "丢失了 X-Elgg-posthash_algo 报头" , 
	'APIException:MissingContentType'  =>  "传递数据时候丢失了内容类型" , 
	'SecurityException:InvalidPostHash'  =>  "POST 数据的 hash 无效 - 预期: %s 实际: %s." , 
	'SecurityException:DupePacket'  =>  "签名已经被通过" , 
	'SecurityException:InvalidAPIKey'  =>  "无效或者缺少 API Key." , 
	'NotImplementedException:CallMethodNotImplemented'  =>  "调用方法 '%s' 不被支持" , 

	'NotImplementedException:XMLRPCMethodNotImplemented'  =>  "XML-RPC 方法调用 '%s' 没有被实现" , 
	'InvalidParameterException:UnexpectedReturnFormat'  =>  "调用方法 '%s' 返回了非预期结果" , 
	'CallException:NotRPCCall'  =>  "不是一个有效的 XML-RPC 调用" , 

	'PluginException:NoPluginName'  =>  "没有找到插件的名字" , 

	'ConfigurationException:BadDatabaseVersion'  =>  "安装的数据库没有满足Elgg运行的基本要求.请查看您的文档" , 
	'ConfigurationException:BadPHPVersion'  =>  "需要 PHP 5.2 版本以上来运行 Elgg." , 
	'configurationwarning:phpversion'  =>  "Elgg需要 PHP 5.2 版本以上来运行, 您可以在5.1.6上安装,但是有些特性会无效,使用时自负责任" , 

	'InstallationException:DatarootNotWritable'  =>  "您的数据目录 %s 不可写" , 
	'InstallationException:DatarootUnderPath'  =>  "您的数据目录 %s 必须在安装目录以外的地方" , 
	'InstallationException:DatarootBlank'  =>  "您没有指定数据目录" , 

	'SecurityException:authenticationfailed'  =>  "用户验证失败" , 

	'CronException:unknownperiod'  =>  "%s 不是一个可识别的期间" , 

	'SecurityException:deletedisablecurrentsite'  =>  "您无法删除或者禁用目前正在查看的网站" , 

	'memcache:notinstalled'  =>  "PHP memcache 模块没有安装,您必须安装php5-memcache" , 
	'memcache:noservers'  =>  "没有定义memcache 服务器,请写入 $CONFIG->memcache_servers 变量" , 
	'memcache:versiontoolow'  =>  "Memcache 需要至少 %s 版本来运行,您当前的版本是 %s " , 
	'memcache:noaddserver'  =>  "多服务器支持禁用,您可以升级您的PECL memcache 库" , 

	'deprecatedfunction'  =>  "警告: 该代码使用了不再支持的函数 \'%s\' 并且不兼容当前的Elgg版本" , 

	'pageownerunavailable' => '警告: 该页面的所有者 %d 不可访问!',

	'system.api.list' => "列出系统所有可用的API调用",
	'auth.gettoken' => "本API调用支持用户登录,返回一个验证令牌,从而保证以后的用户名和密码的验证.",

	'name'  =>  "昵称" , 
	'email'  =>  "邮箱地址" , 
	'username'  =>  "用户名" , 
	'password'  =>  "密码" , 
	'passwordagain'  =>  "密码 (再次确认)" , 
	'admin_option'  =>  "任命为管理员?" , 

	'PRIVATE'  =>  "个人" , 
	'LOGGED_IN'  =>  "登陆的用户" , 
	'PUBLIC'  =>  "公开" , 
	'access:friends:label'  =>  "好友" , 
	'access'  =>  "访问" , 

	'dashboard'  =>  "控制面板" , 
	'dashboard:configure'  =>  "选项" , 
	'dashboard:nowidgets'  =>  "控制面板是您的门户。点击'选项'添加插件来查看关注的好友的最新活动或展示您的丰富生活。" , 
	'widgets:add'  =>  "添加插件到您的页面" , 
	'widgets:add:description'  =>  "选择所需的功能,从右边的<b>插件库</b>添加到下方的三个方框里的任何位置。

	要删除插件请将其拖动到<b>插件库</b>方框里。" , 
	'widgets:position:fixed'  =>  "(页面上的固定位置)" , 
	'widgets'  =>  "插件" , 
	'widget'  =>  "插件" , 
	'item:object:widget'  =>  "插件" , 
	'layout:customise'  =>  "自定义布局" , 
	'widgets:gallery'  =>  "插件库" , 
	'widgets:leftcolumn'  =>  "左栏" , 
	'widgets:fixed'  =>  "固定位置" , 
	'widgets:middlecolumn'  =>  "中栏" , 
	'widgets:rightcolumn'  =>  "右栏" , 
	'widgets:profilebox'  =>  "个人资料" , 
	'widgets:panel:save:success'  =>  "您的插件配置信息保存好了。" , 
	'widgets:panel:save:failure'  =>  "在保存您的插件配置信息的时候遇到了问题，请稍后再试。" , 
	'widgets:save:success'  =>  "插件配置信息保存好了。" , 
	'widgets:save:failure'  =>  "我们不能保存您的插件，请再试一次。" , 
	'widgets:handlernotfound'  =>  "插件出错了,请联系管理员" , 


	'group'  =>  "小组" , 
	'item:group'  =>  "小组" , 


	'user' => "用户",
	'item:user' => "用户",
	'friends'  =>  "好友" , 
	'friends:yours'  =>  "您的好友" , 
	'friends:owned'  =>  "%s 的好友" , 
	'friend:add'  =>  "添加好友" , 
	'friend:remove'  =>  "删除好友" , 

	'friends:add:successful'  =>  "你已经成功的添加了 %s 作为好友。" , 
	'friends:add:failure'  =>  "我们没法添加 %s 作为您的好友，请再试一次。" , 

	'friends:remove:successful'  =>  "您成功的将 %s 从您的好友中移除了。" , 
	'friends:remove:failure'  =>  "我们无法从您的好友中移除 %s 。请再试一次。" ,

	'friends:none'  =>  "这个用户还没有添加任何好友。" , 
	'friends:none:you'  =>  "您还未添加任何好友！搜索您的兴趣来找一些志同道合的朋友们吧。" , 

	'friends:none:found'  =>  "没找到好友。" , 
	'friends:of:none'  =>  "该用户还没有关注者" , 
	'friends:of:none:you'  =>  "您还没有关注者。请输入一些信息到个人档案里让别人可以找到你！" , 
	'friends:of:owned'  =>  "关注 %s 的人们" , 
	'friends:num_display'  =>  "好友显示数量" , 
	'friends:icon_size'  =>  "图标大小" , 
	'friends:tiny'  =>  "很小" , 
	'friends:small'  =>  "小" , 
	'friends:of'  =>  "关注" , 
	'friends:collections'  =>  "好友圈" , 
	'friends:collections:add'  =>  "添加好友圈" , 
	'friends:addfriends'  =>  "添加好友" , 
	'friends:collectionname'  =>  "圈子名称" , 
	'friends:collectionfriends'  =>  "圈内好友" , 
	'friends:collectionedit'  =>  "编辑" , 
	'friends:nocollections'  =>  "您还没有任何好友圈" , 
	'friends:collectiondeleted'  =>  "您的好友圈已经删除了" , 
	'friends:collectiondeletefailed'  =>  "我们无法删除好友圈。或您没有权限执行操作。" , 
	'friends:collectionadded'  =>  "您的圈子建立好了。" , 
	'friends:nocollectionname'  =>  "在创建前，您需要给圈子命名。" , 
	'friends:collections:members'  =>  "圈子成员" , 
	'friends:collections:edit'  =>  "编辑圈子" , 
	'friends:river:created'  =>  "%s 添加了好友。" , 
	'friends:river:updated'  =>  "%s 更新了好友。" , 
	'friends:river:delete'  =>  "%s 移除了好友。" , 
	'friends:river:add'  =>  " 添加了好友%s。" , 
	'friendspicker:chararray'  =>  "ABCDEFGHIJKLMNOPQRSTUVWXYZ" , 


	'feed:rss'  =>  "订阅 RSS" , 
	'feed:odd'  =>  "订阅 OpenDD" , 


	'link:view'  =>  "查看链接" , 

	'river'  =>  "活动板" , 
	'river:relationship:friend'  =>  "现在关注了" , 
	'river:noaccess'  =>  "您没有权限查看该内容" , 
	'river:posted:generic'  =>  "%s 被发布了" ,
	'riveritem:single:user' =>	'用户',
	'riveritem:plural:user'	=>	'用户',

	'plugins:settings:save:ok'  =>  "插件 %s 的配置保存好了。" , 
	'plugins:settings:save:fail'  =>  "插件 %s 的配置保存遇到了问题。" , 
	'plugins:usersettings:save:ok'  =>  "插件 %s 的用户设定保存好了。" , 
	'plugins:usersettings:save:fail'  =>  "插件 %s 的用户设定保存遇到了问题。" , 
	'admin:plugins:label:version'  =>  "版本" , 
	'item:object:plugin'  =>  "插件配置设定" , 

	'notifications:usersettings'  =>  "通知设定" , 
	'notifications:methods'  =>  "请指定允许哪种方式。" , 
	'notifications:usersettings:save:ok'  =>  "您的通知设定成功的保存好了。" , 
	'notifications:usersettings:save:fail'  =>  "在保存您的通知设定时遇到了问题" , 
	'user.notification.get'  =>  "返回指定用户的通知设定" , 
	'user.notification.set'  =>  "设置通知设定到指定用户" , 


	'search'  =>  "搜索" , 
	'searchtitle'  =>  "搜索: %s" , 
	'users:searchtitle'  =>  "搜索用户: %s" , 
	'groups:searchtitle' => "搜索小组: %s",
	'advancedsearchtitle'  =>  "%s 的搜索结果中匹配的有 %s" , 
	'notfound' => "没有找到结果",
	'next'  =>  "下一页" , 
	'previous'  =>  "上一页" , 

	'viewtype:change'  =>  "修改" , 
	'viewtype:list'  =>  "列表" , 
	'viewtype:gallery'  =>  "相册" , 

	'tag:search:startblurb'  =>  "标签匹配的有 '%s':" , 
	'user:search:startblurb'  =>  "用户匹配的有 '%s':" , 
	'user:search:finishblurb'  =>  "点击查看更多。" , 

	'group:search:startblurb' => "小组匹配的有 '%s':",
	'group:search:finishblurb' => "点击查看更多",
	'search:go' => '搜索',
	'userpicker:only_friends' => '仅好友',
		
	'account'  =>  "帐户" , 
	'settings'  =>  "设定" , 
	'tools'  =>  "插件" , 
	'tools:yours'  =>  "您的插件" , 

	'register'  =>  "注册" , 
	'registerok'  =>  "您已经成功注册了 %s。" , 
	'registerbad'  =>  "您的注册遇到了问题。用户名已存在，两次密码不匹配，或者用户名与密码过短。" , 
	'registerdisabled'  =>  "注册功能已经被管理员关闭了。" , 
	'firstadminlogininstructions'  =>  "您的网站已经安装成功,并且管理员帐号已经建立好.您可以现在配置站点和激活插件." , 
	'registration:notemail'  =>  "您的邮箱地址不合法。" , 
	'registration:userexists'  =>  "用户名存在" , 
	'registration:usernametooshort'  =>  "用户名至少4位英文字符" , 
	'registration:passwordtooshort'  =>  "密码至少6位英文字符" , 
	'registration:dupeemail'  =>  "该邮箱地址已经被注册过了" , 
	'registration:invalidchars'  =>  "抱歉您的用户名包含无效字符" , 
	'registration:emailnotvalid'  =>  "抱歉您的邮件地址输入是无效的" , 
	'registration:passwordnotvalid'  =>  "抱歉您的密码输入是无效的" , 
	'registration:usernamenotvalid'  =>  "抱歉您的用户名输入是无效的" , 

	'adduser'  =>  "添加用户" , 
	'adduser:ok'  =>  "您成功的添加了一名用户。" , 
	'adduser:bad'  =>  "无法创建新用户" , 

	'item:object:reported_content'  =>  "报告内容" , 

	'user:set:name'  =>  "帐户名字设定" , 
	'user:name:label'  =>  "您的名字" , 
	'user:name:success'  =>  "成功的修改了您在系统中的项目。" , 
	'user:name:fail'  =>  "无法修改您在系统中的项目。" , 
	'user:set:password'  =>  "帐户密码" , 
	'user:password:label'  =>  "新密码" , 
	'user:password2:label'  =>  "新密码(再次确认)" , 
	'user:password:success'  =>  "密码修改成功" , 
	'user:password:fail'  =>  "无法修改您在系统中的密码。" , 
	'user:password:fail:notsame'  =>  "两次密码不匹配！" , 
	'user:password:fail:tooshort'  =>  "密码太短！" , 
	'user:resetpassword:unknown_user'	=> "无效的用户.",
	'user:resetpassword:reset_password_confirm'	=> "重置密码将会发送新密码到您的邮箱中.",
	'user:set:language'  =>  "语言设定" , 
	'user:language:label'  =>  "您的语言" , 
	'user:language:success'  =>  "您的语言设定已经更新！" , 
	'user:language:fail'  =>  "您的语言设定还未保存。" , 
	'user:username:notfound'  =>  "用户名 %s 未找到。" , 
	'user:password:lost'  =>  "找回密码" , 
	'user:password:resetreq:success'  =>  "找回密码的邮件已经发送给您了" , 
	'user:password:resetreq:fail'  =>  "无法请求生成新的密码。" , 
	'user:password:text'  =>  "生成新密码请在下方输入您的用户名。我们将发送地址的一个唯一的验证网页向你点击通过电子邮件中的链接，电子邮件的正文中和一个新的密码将被发送给您。" , 
	'user:persistent'  =>  "记住" , 

	'admin:configuration:success'  =>  "您的设定保存成功。" , 
	'admin:configuration:fail'  =>  "您的设定无法保存。" , 
	'admin'  =>  "管理" , 
	'admin:description'  =>  "管理员面板允许您控制系统的所有方面，从用户管理到插件的配置。" , 
	'admin:user'  =>  "用户管理" , 
	'admin:user:description'  =>  "本面板用来控制用户在您网站上的设定。" , 
	'admin:user:adduser:label'  =>  "添加新用户..." , 
	'admin:user:opt:linktext'  =>  "配置用户..." , 
	'admin:user:opt:description'  =>  "配置用户和账户信息" , 
	'admin:site'  =>  "站点管理" , 
	'admin:site:description'  =>  "本面板允许您控制整站设定。" , 
	'admin:site:opt:linktext'  =>  "配置网站..." , 
	'admin:site:opt:description'  =>  "配置技术和非技术的设定。" , 
	'admin:site:access:warning'  =>  "修改访问设定,仅仅影响有权限设定的那些内容" , 
	'admin:plugins'  =>  "插件管理" , 
	'admin:plugins:description'  =>  "本面板允许你配置插件设定。" , 
	'admin:plugins:opt:linktext'  =>  "配置插件..." , 
	'admin:plugins:opt:description'  =>  "配置网站的插件设定" , 
	'admin:plugins:label:author'  =>  "作者" , 
	'admin:plugins:label:copyright'  =>  "版权" , 
	'admin:plugins:label:licence'  =>  "协议" , 
	'admin:plugins:label:website'  =>  "URL" , 
	'admin:plugins:label:moreinfo'  =>  "更多" , 
	'admin:plugins:label:version' => '版本',
	'admin:plugins:warning:elggversionunknown'  =>  "警告: 该插件没有指定兼容的Elgg版本" , 
	'admin:plugins:warning:elggtoolow'  =>  "警告: 该插件需要一个更高版本的Elgg" , 
	'admin:plugins:reorder:yes'  =>  "插件 %s 重新排序成功" , 
	'admin:plugins:reorder:no'  =>  "插件 %s 无法重新排序" , 
	'admin:plugins:disable:yes'  =>  "插件 %s 已经被禁用了." , 
	'admin:plugins:disable:no'  =>  "插件 %s 禁用失败。" , 
	'admin:plugins:enable:yes'  =>  "插件 %s 已经被启用了." , 
	'admin:plugins:enable:no'  =>  "插件 %s 启用失败。" , 

	'admin:statistics'  =>  "统计" , 
	'admin:statistics:description'  =>  "这个是您网站统计信息的总览。" , 
	'admin:statistics:opt:description'  =>  "查看关于您会员和网站内容的统计信息。" , 
	'admin:statistics:opt:linktext'  =>  "查看统计..." , 
	'admin:statistics:label:basic'  =>  "基本统计" , 
	'admin:statistics:label:numentities'  =>  "网站项目" , 
	'admin:statistics:label:numusers'  =>  "用户数" , 
	'admin:statistics:label:numonline'  =>  "在线人数" , 
	'admin:statistics:label:onlineusers'  =>  "当前在线" , 
	'admin:statistics:label:version'  =>  "Elgg 版本" , 
	'admin:statistics:label:version:release'  =>  "发布" , 
	'admin:statistics:label:version:version'  =>  "版本" , 
	'admin:user:label:search'  =>  "查找用户:" , 
	'admin:user:label:seachbutton'  =>  "搜索" , 
	'admin:user:ban:no'  =>  "屏蔽用户失败" , 
	'admin:user:ban:yes'  =>  "屏蔽用户成功" , 
	'admin:user:unban:no'  =>  "取消屏蔽用户失败" , 
	'admin:user:unban:yes'  =>  "取消屏蔽用户成功" , 
	'admin:user:delete:no'  =>  "删除用户失败" , 
	'admin:user:delete:yes'  =>  "用户删除成功" , 

	'admin:user:resetpassword:yes'  =>  "密码重设告知用户了。" , 
	'admin:user:resetpassword:no'  =>  "密码无法重设。" , 
	'admin:user:makeadmin:yes'  =>  "该用户现在是管理员了。" , 
	'admin:user:makeadmin:no'  =>  "我们无法设置该用户为管理员" , 
	'admin:user:removeadmin:yes'  =>  "用户不是管理员了" , 
	'admin:user:removeadmin:no'  =>  "该用户无法删除管理员的权限" , 

	'usersettings:description'  =>  "用户设定面板允许您控制个人信息。" , 
	'usersettings:statistics'  =>  "您的统计" , 
	'usersettings:statistics:opt:description'  =>  "查看用户和系统的统计信息。" , 
	'usersettings:statistics:opt:linktext'  =>  "账户统计" , 
	'usersettings:user'  =>  "您的设定" , 
	'usersettings:user:opt:description'  =>  "控制用户设定。" , 
	'usersettings:user:opt:linktext'  =>  "修改设定" , 

	'usersettings:plugins'  =>  "插件" , 
	'usersettings:plugins:opt:description'  =>  "您当前激活的插件配置" , 
	'usersettings:plugins:opt:linktext'  =>  "配置插件..." , 
	'usersettings:plugins:description'  =>  "本面板让您可以配置设定个人信息。" , 

	'usersettings:statistics:label:numentities'  =>  "您的条目" , 
	'usersettings:statistics:yourdetails'  =>  "详细信息" , 
	'usersettings:statistics:label:name'  =>  "全名" , 
	'usersettings:statistics:label:email'  =>  "邮箱" , 
	'usersettings:statistics:label:membersince'  =>  "注册自从" , 
	'usersettings:statistics:label:lastlogin'  =>  "上次登陆" , 

	'save'  =>  "保存" , 
	'publish'  =>  "发布" , 
	'cancel'  =>  "取消" , 
	'saving'  =>  "保存中" , 
	'update'  =>  "更新" , 
	'edit'  =>  "编辑" , 
	'delete'  =>  "删除" , 
	'accept'  =>  "接受" , 
	'load'  =>  "加载" , 
	'upload'  =>  "上传" , 
	'ban'  =>  "屏蔽" , 
	'unban'  =>  "取消屏蔽" , 
	'enable'  =>  "激活" , 
	'disable'  =>  "取消激活" , 
	'request'  =>  "请求" , 
	'complete'  =>  "完成" , 
	'open'  =>  "打开" , 
	'close'  =>  "关闭" , 
	'reply'  =>  "回复" , 
	'more'  =>  "更多" , 
	'comments'  =>  "评论" , 
	'import'  =>  "导入" , 
	'export'  =>  "导出" , 
	'untitled' => '无标题',
	'help' => '帮助',
	'send' => '发送',
	'post' => '发布',
	'submit' => '提交',
	'site' => '网站',

	'up'  =>  "提高" , 
	'down'  =>  "降低" , 
	'top'  =>  "置顶" , 
	'bottom'  =>  "置底" , 

	'invite'  =>  "邀请" , 

	'resetpassword'  =>  "重置密码" , 
	'makeadmin'  =>  "设为管理员" , 
	'removeadmin'  =>  "删除管理员" , 

	'option:yes'  =>  "是" , 
	'option:no'  =>  "否" , 

	'unknown'  =>  "未知" , 

	'active'  =>  "激活" , 
	'total'  =>  "总共" , 

	'learnmore'  =>  "点击查看更多." , 

	'content'  =>  "内容" , 
	'content:latest'  =>  "最近活动" , 
	'content:latest:blurb'  =>  "或者，点击这里查看网站最新内容。" , 

	'link:text'  =>  "查看链接" , 
	'enableall'  =>  "启用全部" , 
	'disableall'  =>  "禁用全部" , 

	'question:areyousure'  =>  "确认吗?" ,

	'title'  =>  "标题" , 
	'description'  =>  "描述" , 
	'tags'  =>  "标签" , 
	'spotlight'  =>  "关注" , 
	'all'  =>  "所有" , 

	'by'  =>  "由" , 

	'annotations'  =>  "注释" , 
	'relationships'  =>  "关系" , 
	'metadata'  =>  "元数据" , 

	'deleteconfirm'  =>  "您确认删除这个项目?" , 
	'fileexists'  =>  "一个文件已经上传好了。要替换该文件，选择下方:" , 

	'useradd:subject'  =>  "用户帐户建立好了" , 
	'useradd:body'  =>  "%s 您好,

	您在 %s 注册成功了.登录请访问:

	%s

	以下是登录信息:

	用户名: %s
	密码: %s

	一旦您登录,我们强烈建议您更改自己的密码." , 


	'systemmessages:dismiss'  =>  "点击关闭" , 

	'importsuccess'  =>  "导入数据成功" , 
	'importfail'  =>  "OpenDD 导入数据失败。" , 

	'friendlytime:justnow'  =>  "刚才" , 
	'friendlytime:minutes'  =>  "%s 分钟前" , 
	'friendlytime:minutes:singular'  =>  "一分钟前" , 

	'friendlytime:hours'  =>  "%s 小时前" , 
	'friendlytime:hours:singular'  =>  "一小时前" , 

	'friendlytime:days'  =>  "%s 天前" , 
	'friendlytime:days:singular'  =>  "昨天" , 
	'friendlytime:date_format' => 'j F Y @ g:ia',
	'date:month:01'  =>  "1月 %s" , 
	'date:month:02'  =>  "2月 %s" , 
	'date:month:03'  =>  "3月 %s" , 
	'date:month:04'  =>  "4月 %s" , 
	'date:month:05'  =>  "5月 %s" , 
	'date:month:06'  =>  "6月 %s" , 
	'date:month:07'  =>  "7月 %s" , 
	'date:month:08'  =>  "8月 %s" , 
	'date:month:09'  =>  "9月 %s" , 
	'date:month:10'  =>  "10月 %s" , 
	'date:month:11'  =>  "11月 %s" , 
	'date:month:12'  =>  "12月 %s" , 

	'installation:error:htaccess'  =>  "Elgg需要 .htaccess 在安装的根目录设定好,目前我们没有该文件的写入权限.

	您只要复制以下内容并且自己保存为.htaccess 文件即可.

	" , 
	'installation:error:settings'  =>  "Elgg 无法找到配置文件. 请按照以下方法(但是你需要提供数据库信息):

	1. 更改文件名 engine/settings.example.php 为 settings.php .

	2. 打开该文件,并输入相关的数据库信息

	或者您可以直接在下方输入数据库信息,我们试试帮您录入信息.
	" , 
	'installation:error:db:title' => "数据库配置错误",
	'installation:error:db:text' => "请检查数据库配置,Elgg无法连接您的数据库.",
	'installation:error:configuration'  =>  "一旦您修复了任何配置问题,请点击重载" , 
	'installation'  =>  "安装" , 
	'installation:success'  =>  "Elgg的数据库安装成功" , 
	'installation:configuration:success'  =>  "您的初始化配置文件已经保存好了,请输入初始用户,这将是您的第一个系统管理员." , 
	'installation:settings'  =>  "系统设定" , 
	'installation:settings:description'  =>  "现在Elgg数据库已经成功安装,您需要输入其他信息来继续,我们预填写的<b>以下信息</b>请确认" , 
	'installation:settings:dbwizard:prompt'  =>  "请在下方输入数据库设置并且点击保存" , 
	'installation:settings:dbwizard:label:user'  =>  "数据库用户" , 
	'installation:settings:dbwizard:label:pass'  =>  "数据库密码" , 
	'installation:settings:dbwizard:label:dbname'  =>  "Elgg数据库" , 
	'installation:settings:dbwizard:label:host'  =>  "数据库地址(通常为'localhost')" , 
	'installation:settings:dbwizard:label:prefix'  =>  "数据表前缀(通常为 'elgg')" , 
	'installation:settings:dbwizard:savefail'  =>  "我们无法保存新的 settings.php 文件.请保存以下信息到文件 engine/settings.php" , 

	'installation:sitename'  =>  "网站名称 (例如 \"Elgg.Org.cn中文社区\"):" , 
	'installation:sitedescription'  =>  "简要介绍 (可选)" , 
	'installation:wwwroot'  =>  "网站URL,最后包括反斜杠" , 
	'installation:path'  =>  "您网站根目录的完整路径,最后包括反斜杠" , 
	'installation:dataroot'  =>  "上传目录的完整路径,最后包括反斜杠" , 
	'installation:dataroot:warning'  =>  "请手动建立好目录. 它必须是一个和elgg安装目录不同的位置" , 
	'installation:sitepermissions'  =>  "默认访问权限:" , 
	'installation:language'  =>  "默认网站语言:" , 
	'installation:debug'  =>  "Debug 模式给于了额外的信息方便您调试错误.当然这会让系统变慢.因此仅在有错误的时候才建议开启:" , 
	'installation:debug:label'  =>  "开启Debug模式" , 
	'installation:debug:none' => '开启Debug模式',
	'installation:debug:error' => '只显示关键错误',
	'installation:debug:warning' => '显示错误和警告',
	'installation:debug:notice' => '记录所有错误,警告和提醒',	
	'installation:httpslogin'  =>  "开启将使用户登录等操作使用HTTPS.您需要确保您的服务器支持https" , 
	'installation:httpslogin:label'  =>  "开启HTTPS登录" , 
	'installation:view'  =>  "输入默认网站使用的视图(如果有疑问请默认留空)" , 
	'installation:siteemail'  =>  "站点邮箱地址(用来发送系统邮件)" , 
	'installation:disableapi'  =>  "RESTful API 是一个弹性和高拓展性的接口,确保了其他外部系统可以访问Elgg" , 
	'installation:disableapi:label'  =>  "开启 RESTful API" , 
	'installation:allow_user_default_access:description'  =>  "如果选中,每个用户将会被允许设置自己的内容权限." , 
	'installation:allow_user_default_access:label'  =>  "允许用户设定权限" , 
	'installation:simplecache:description'  =>  "通过统计包括CSS和JavaScript这类内容,利用基本缓存机制来提高性能.通常您会需要开启该功能" , 
	'installation:simplecache:label'  =>  "使用基本缓存机制" , 


	'installation:viewpathcache:description' => "通过缓存视图文件减少了插件加载的时间.",
	'installation:viewpathcache:label' => "使用缓存视图 (推荐)",	 

	'upgrading'  =>  "升级" , 
	'upgrade:db'  =>  "您的数据库已经升级好了" , 
	'upgrade:core'  =>  "您的系统已经升级好了" , 

	'welcome'  =>  "欢迎", 
	'welcome:user' => '欢迎 %s',
	'welcome_message'  =>  "欢迎安装 Elgg" , 

	'email:settings'  =>  "邮件设定" , 
	'email:address:label'  =>  "您的邮箱地址" , 

	'email:save:success'  =>  "新的邮箱地址保存好了，等待验证。" , 
	'email:save:fail'  =>  "您新的邮箱地址无法保存。" , 

	'friend:newfriend:subject'  =>  "%s 加您为好友！" , 
	'friend:newfriend:body'  =>  "%s 加您为好友！

	查看他的个人信息，点击:

	%s

	请不要回复本邮件" , 

	'email:resetpassword:subject'  =>  "密码重置！" , 
	'email:resetpassword:body'  =>  "您好 %s,
		
	您的密码已经重置为: %s" , 
	'email:resetreq:subject'  =>  "请求新密码" , 
	'email:resetreq:body'  =>  "您好 %s,
		
	有人 (IP地址为 %s) 请求新的密码设置。

	如果使您申请的点击下方链接，不然请忽略本邮件

	%s
	" , 

	'default_access:settings'  =>  "您的默认访问权限" , 
	'default_access:label'  =>  "默认访问权限" , 
	'user:default_access:success'  =>  "你的默认访问权限已经设定好了" , 
	'user:default_access:failure'  =>  "您的默认访问权限无法保存." , 

	'xmlrpc:noinputdata'  =>  "输入数据丢失" , 

	'comments:count'  =>  "%s 评论" , 

	'riveraction:annotation:generic_comment'  =>  "%s 对 %s 做出了评论" , 

	'generic_comments:add'  =>  "添加评论" , 
	'generic_comments:text'  =>  "评论" , 

	'generic_comment:posted'  =>  "您的评论已经发表了。" , 
	'generic_comment:deleted'  =>  "您的评论已经删除了。" , 
	'generic_comment:blank'  =>  "对不起，在发表评论前请输入内容。" , 
	'generic_comment:notfound'  =>  "对不起我们找不到指定评论。" , 
	'generic_comment:notdeleted'  =>  "对不起，我们删除不了该评论。" , 
	'generic_comment:failure'  =>  "在添加评论的时候我们遇到了一个异常，请再试一次。" , 
	'generic_comment:email:subject'  =>  "您的评论已经发布！" , 
	'generic_comment:email:body'  =>  "您收到一条评论在 \"%s\" 上，来自 %s。内容是:

		
	%s


	要回复或者查看项目，点击：

	%s

	要查看评论者 %s 的个人资料，点击：

	%s

	请不要回复本邮件。" , 

	'entity:default:strapline'  =>  " %s 由 %s 创建" , 
	'entity:default:missingsupport:popup'  =>  "本实体可能显示不正确。这是因为插件可能不兼容或者需要升级。" , 

	'entity:delete:success'  =>  "实体 %s 已经被删除了" , 
	'entity:delete:fail'  =>  "实体 %s 删除失败" , 

	'actiongatekeeper:missingfields'  =>  "表单缺少 __token 或者 __ts 域" , 
	'actiongatekeeper:tokeninvalid'  =>  "表单验证和服务器的不一致。" , 
	'actiongatekeeper:timeerror'  =>  "表单过期了，请重新登陆或者再次刷新页面。" , 
	'actiongatekeeper:pluginprevents'  =>  "插件屏蔽了这次表单的提交。" , 

	'word:blacklist'  =>  "and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever" , 

	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "阿拉伯语",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "捷克语",
	"cy" => "威尔士语",
	"da" => "丹麦语",
	"de" => "德语",
	"dz" => "Bhutani",
	"el" => "希腊语",

	"en" => "英语",
	"eo" => "Esperanto",
	"es" => "西班牙语",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "芬兰语",
	"fj" => "斐济语",
	"fo" => "Faeroese",
	"fr" => "法语",
	"fy" => "Frisian",
	"ga" => "爱尔兰语",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "印度尼西亚语",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "日语",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "韩语",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "拉丁语",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "拉脱维亚语",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "蒙古语",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "荷兰语",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "葡萄牙语",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "罗马尼亚语",
	"ru" => "俄语",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "斯洛伐克语",
	"sl" => "斯洛文尼亚语",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "阿尔巴尼亚语",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "瑞典语",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "泰语",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "乌兹别克语",
	"vi" => "越南语",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",

	"zh" => "中文",
	"zu" => "Zulu",
); 

add_translation('zh', $chinese); 

?>