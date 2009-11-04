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
		 * Settings and Status
		 */
		
			'invitations:default:expdays' => "邀请有效时间",
			'invitations:default:walledgarden' => "激活整站邀请模式",
			'invitations:default:label:enable' => "激活",
			'invitations:default:label:disable' => "关闭",
			'invitations:default:enableforgottenpassword' => "若整站邀请模式: enable access to forgotten password pages",
			'invitations:default:enableregistration' => "若整站邀请模式: enable default registration and link under login form",
			'invitations:default:email' => "Default sender email address (site system mail address)",
			
			'invitations:default:allowedusers' => "Who should be allowed to send invitations",
			'invitations:default:label:all' => "all",
			'invitations:default:label:none' => "none",
			'invitations:default:label:admin' => "admin",
			'invitations:default:desc:all' => "all users are allowed except those who are explicitly disallowed",
			'invitations:default:desc:none' => "none of the users are allowed except those who are explicitly allowed",
			'invitations:default:desc:admin' => "only admins are allowed",
			
			//admin actions: give permission to users, if restriction is set in plugin settings
		 	'invitations:usersetting:label:allow' => "Allow Invitations",
		 	'invitations:usersetting:label:disallow' => "Disallow Invitations",	 	
		 	'invitations:usersetting:allow:yes' => "User is now allowed to send invitations.",
			'invitations:usersetting:allow:no' => "We could not allow this user to send registrations.",
			'invitations:usersetting:disallow:yes' => "User is now disallowed to send invitations.",
			'invitations:usersetting:disallow:no' => "We could not disallow this user to send registrations.",
					
			'invitations:status' => "Status",
			'invitations:status:pending' => "pending",
			'invitations:status:expired' => "expired",
			'invitations:status:used' => "accepted",
			'invitations:status:usedby' => "accepted by",
			'invitations:status:usednotconfirmed' => "accepted, not yet confirmed",
		
		/**
		 * Widget
		 */
		 
		 	'invitations:widget:moreinfo' => "more",
		 	'invitations:widget:label:status' => "Status: ",
		 	'invitations:widget:label:invitee' => "Invitee: ",
		 	'invitations:widget:label:inviteemail' => "Invitee E-Mail: ",
		 	'invitations:widget:label:message' => "Message: ",
		 	'invitations:widget:label:sentas' => "Sent as: ",
		 	'invitations:widget:label:sentby' => "Sent by: ",
		 	'invitations:widget:label:registered' => "Registered as: ",
		 	'invitations:widget:label:delete' => "delete",
		 	'invitations:widget:delete:confirm' => "Are you sure you want to delete this invitation?",
		 	'invitations:widget:delete:deleted' => "The invitation was deleted.",
		 	'invitations:widget:delete:deleted:error' => "An error occurred. The invitation could not be deleted.",
		 	'invitations:widget:link:yourinvitations' => "Your Invitations",

		 	
		/**
		 * Object list and single view elements
		 */
		 
		 	'invitations:moreinfo' => "more",
		 	'invitations:label:status' => "Status: ",
		 	'invitations:label:invitee' => "Invitee: ",
		 	'invitations:label:inviteemail' => "Invitee E-Mail: ",
		 	'invitations:label:message' => "Message: ",
		 	'invitations:label:sentas' => "Sent as: ",
		 	'invitations:label:sentby' => "Sent by: ",
		 	'invitations:label:registered' => "Registered as: ",
		 	'invitations:label:delete' => "delete",
		 	

		 
		 /**
		 * Plugin button, menu title, page title
		 */
	
			'invitation' => "邀请",
			'invitations:invitation' => "邀请",
			'invitations:plugin:name' => "邀请",
			'invitations:page:title' => "Invite Friends to this network",			
			'invitations:button:send' => "Send invitation",
			'invitations:widget:description' => "This widget is designed for your dashboard and will show the invitations you sent out to invite friends to this community.",
			
			'invitations:submenu:yours' => "Your invitations",
			'invitations:submenu:new' => "New inviation",
			'invitations:submenu:admin' => "All invitations",
		 	'invitations:list:title:yours' => "Your invitations",
		 	'invitations:entity:notallowed' => "Your are not allowed to view further contents",
			
		
		/**
		 * E-Mail elements
		 */
			
			'invitations:email:subject' => "%s invited you to %s",
			
			'invitations:email:mailbody' => "hello %s,
			
%s has invited you to the %s network website.
if you wnt to participate the community, click the following link: 
%s

This mail was generated automatically. You can not answer to it.

",

			
			'invitations:email:mailbodyuser:message' => "Here is a message from the user that ivited you:

%s",
			
			
			
		/**
		 * Errors
		 */
		 
		 	'invitations:register:error:expired' => "Your invitation has expired. It was only valid for %s days.",
		 	'invitations:register:error:coderror' => "There occurred with the invitation code. Make sure you used the complete link that was sent with the invitation mail.",
		 	'invitations:register:error:used' => "This invitation was already used and therefore is no longer valid.",
			'invitations:error:notallowed' => "You are not allowed to send invitations.",
			
			
			
		/**
		 * Input Form elements
		 */
			
			'invitations:formintrotrext' => "Here you can invite Friends to this network. Just fill out the form with your friend's name and email address. You can add your own message to the standard message that will be send out.",
			'invitations:label:fromname' => "Your Name",
			'invitations:label:toname' => "Recipient Name",
			'invitations:label:mailto' => "Recipient Email Address",
			'invitations:label:subject' => "Subject",
			'invitations:label:message' => "Message (optional)",
		
		
		
		/**
		 * Plugin action feedback
		 */
			
			'invitations:send:successful' => "Your invitation was successfully sent. Thank you.",
			'invitations:send:unsuccessful' => "Your invitation could not be sent. Make sure all the fields are filled in correctly.",
			'invitations:email:invalid' => "Our system could not accept the email you've entered. Please try again with valid email address.",
			

		/**
		 * Registration Form content elements
		 */
		 
			'invitations:register:content:headline' => "Welcome",
			'invitations:register:content:body:invitedby' => "You've been invited by %s",
			'invitations:register:content:body:knownas' => "username in this community: %s",
			'invitations:register:content:body:confirmationmail' => "After you filled out this form an e-mail with a confirmation link will be sent out to you. Click this link to assure we have the correct e-mail address and to activate your account.",
	
         
			
		/**
		 * Not used yet
		 */
		 	
		 	
			
	
	);
					
	add_translation("zh",$chinese );

?>