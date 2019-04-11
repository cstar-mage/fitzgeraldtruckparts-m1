INSERT INTO `cms_block` (`title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`) VALUES
('Searching our Inventory', 'searching-inventory',
    '<div class=\"container\">\r\n<div class=\"search-section\">\r\n<div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 dark-bg\">I\'m looking for..</div>\r\n<div class=\"col-lg-8 col-md-8 col-sm-7 col-xs-12 gray-bg\"><input class=\"form-control\" type=\"text\" /></div>\r\n<div class=\"col-lg-2 col-md-2 col-sm-3 col-xs-12 gray-bg\"><button class=\"btn btn-primary\" type=\"button\" data-toggle=\"button\"> Start Shopping <span class=\"glyphicon glyphicon-triangle-right\"></span></button></div>\r\n</div>\r\n</div>\r\n', '2017-05-29 04:28:09', '2017-05-31 08:16:58', 1),
('Track section', 'track-section',
    '<div class=\"container truck-section\">\r\n<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12 padding-left\"><img alt=\"\" class=\"img-responsive\" src=\"{{skin url=\'images/big-truck.jpg\'}}\" />\r\n<div class=\"truck-desc\">\r\n<div class=\"tittle green\">FITZGERALD TRUCK PARTS</div>\r\n<p>Is part of the Fitzgerald Glider Kits Family</p>\r\n<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"button\"> learn more <span class=\"glyphicon glyphicon-triangle-right\"></span></button></div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-none \"><img alt=\"\" class=\"img-responsive min-height\" src=\"{{skin url=\'images/rebuild-kit.jpg\'}}\" />\r\n<div class=\"truck-desc\">\r\n<div class=\"tittle\">ENGINE REBUILD KITS</div>\r\n<p>Full kits available from Detroit, Cummins and Caterpillar.</p>\r\n<button class=\"btn btn-primary\" type=\"button\" data-toggle=\"button\"> Shop now <span class=\"glyphicon glyphicon-triangle-right\"></span></button></div>\r\n<br />\r\n<div class=\" col-xs-12 padding-none mobile\"><img alt=\"\" class=\"img-responsive  min-height\" src=\"{{skin url=\'images/account-bg.jpg\'}}\" />\r\n<div class=\"truck-desc\">\r\n<div class=\"tittle\">Create your account</div>\r\n<p>Unlock additional savings &amp; incentives!</p>\r\n<form action=\"{{store url=\'customer/account/create\'}}\" class=\"form-inline\" id=\"create-account-form\" method=\"post\">\r\n<div class=\"form-group\"><input class=\"form-control  input-text required-entry\" id=\"firstname\" name=\"firstname\" type=\"text\" /></div>\r\n<button class=\"btn btn-primary active\" onclick=\"createAccount(createAccountForm)\" type=\"submit\" data-toggle=\"button\"> get started <span class=\"glyphicon glyphicon-triangle-right\"></span></button></form></div>\r\n</div>\r\n<script type=\"text/javascript\">// <![CDATA[\r\nvar createAccountForm= new VarienForm(\'create-account-form\');\r\nfunction createAccount(createAccountForm) {\r\n    if (createAccountForm.validator.validate()) {\r\n        createAccountForm.submit();\r\n    }\r\n}\r\n// ]]></script>\r\n</div>\r\n</div>', '2017-05-29 04:39:28', '2017-05-31 07:23:02', 1),
( 'Shot', 'shot',
    '<div class=\"container shot\">\r\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left\"><img alt=\"\" class=\"img-responsive min-height\" src=\"{{skin url=\'images/free-shipping.jpg\'}}\" />\r\n<div class=\"truck-desc\">\r\n<div class=\"tittle\">free shipping</div>\r\n<p>available on all orders over $500</p>\r\n<a href=\"#\">learn more</a></div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-left\"><img alt=\"\" class=\"img-responsive \" src=\"{{skin url=\'images/dynaflex-products.jpg\'}}\" />\r\n<div class=\"truck-desc\">\r\n<div class=\"tittle\">dynaflex products</div>\r\n<p>Make your truck your own.</p>\r\n<a href=\"#\">shop now</a></div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-right padding-left\"><img alt=\"\" class=\"img-responsive\" src=\"{{skin url=\'images/cummins-engines.jpg\'}}\" />\r\n<div class=\"truck-desc\">\r\n<div class=\"tittle\">cummins engines</div>\r\n<p>Heavy dut diesel engines for class 7 &amp; 8 trucks.</p>\r\n<a href=\"#\">shop now</a></div>\r\n</div>\r\n</div>', '2017-05-29 04:42:49', '2017-05-31 07:55:25', 1),
('Popular categories', 'popular-categories',
    '<p>{{block type=\"popularcategories/popularcategory\" template=\"brosolutions/popular_categories/popularproduct.phtml\"}}</p>', '2017-05-29 04:57:50', '2017-05-29 10:33:19', 1),
('Аnimated Parent', 'animated-parent',
    '<div class=\"animatedParent\">\r\n        <div class=\"advance-search animated bounceInLeft slow go\">\r\n          <div class=\"container\">\r\n            <h1>Still searching for your truck parts?</h1>\r\n            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"> shop all categories <span class=\"glyphicon glyphicon-triangle-right\" aria-hidden=\"true\"></span></button>\r\n          </div>\r\n        </div>\r\n      </div>', '2017-05-29 05:11:33', '2017-05-29 05:11:33', 1),
('Email subs', 'email-subs',
    '<div class=\"email-subs\">\r\n<div class=\"container\">\r\n<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12\">\r\n<h2>SIGN UP FOR SPECIAL EMAIL OFFERS &amp; SAVINGS</h2>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\"><form action=\"{{store url=\'newsletter/subscriber/new\'}}\" class=\"form-inline\" id=\"newsletter-validate-detail\" method=\"post\">\r\n<div class=\"form-group\"><input class=\"form-control input-text required-entry validate-email\" id=\"email\" name=\"email\" type=\"text\" /></div>\r\n<button class=\"btn btn-primary\" onclick=\"subscribeFormSend(newsletterSubscriberFormDetail)\" type=\"submit\" data-toggle=\"button\"> submit <span class=\"glyphicon glyphicon-triangle-right\"></span></button></form></div>\r\n<script type=\"text/javascript\">// <![CDATA[\r\nvar newsletterSubscriberFormDetail = new VarienForm(\'newsletter-validate-detail\');\r\nfunction subscribeFormSend(newsletterSubscriberFormDetail) {\r\n    if (newsletterSubscriberFormDetail.validator.validate()) {\r\n        newsletterSubscriberFormDetail.submit();\r\n    }\r\n}\r\n// ]]></script>\r\n</div>\r\n</div>', '2017-05-29 05:15:50', '2017-05-29 09:23:54', 1),
('Footer info', 'footer-info',
'<div class=\"container\">\r\n<div class=\"col-lg-4 col-sm-4 col-md-4 col-xs-12\"><img alt=\"\" class=\"img-responsive\" src=\"{{skin url=\'images/footer-logo.png\'}}\" /> <a class=\"social-icon\" href=\"#\"><em class=\"fa fa-facebook-f\"></em></a> <a class=\"social-icon\" href=\"#\"><em class=\"fa fa-instagram\"></em></a></div>\r\n<div class=\"col-lg-8 col-sm-8 col-md-8 col-xs-12 address\">\r\n<div class=\"col-lg-8 col-sm-8 col-md-8 col-xs-12\"><span>1225 Livingston Hwy</span><span>|</span> <span>Byrdstown, TN 38549<span> </span></span></div>\r\n<div class=\"col-lg-4 col-sm-4 col-md-4 col-xs-12\">\r\n<p class=\"phone\">888-873-0448</p>\r\n<p class=\"timing\">Monday- Friday, 7am - 4:30pm</p>\r\n</div>\r\n</div>\r\n</div>', '2017-05-29 06:33:35', '2017-05-31 08:07:24', 1),
('Footer links', 'footer-links-block',
    '<div class=\"container\">\r\n<div class=\"col-lg-5 col-sm-5 col-md-5 col-xs-12\">\r\n<h5>BROWSE FITZGERALD TRUCK PARTS</h5>\r\n<ul class=\"column\">\r\n<li><a href=\"{{store url=\'\'}}\">Parts</a></li>\r\n<li><a href=\"{{store url=\'\'}}\">Accessories</a></li>\r\n<li><a href=\"{{store url=\'about-magento-demo-store\'}}\">About Us</a></li>\r\n<li><a href=\"{{store url=\'customer-service\'}}\">FAQs</a></li>\r\n<li><a href=\"{{store url=\'customer-service\'}}\">Shipping Info</a></li>\r\n<li><a href=\"{{store url=\'contacts\'}}\">Contact</a></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-lg-1 col-sm-1 col-md-1 col-xs-12 divider\"><img alt=\"\" src=\"{{skin url=\'images/footer-divider.png\'}}\" /></div>\r\n<div class=\"col-lg-6 col-sm-6 col-md-6 col-xs-12\">\r\n<div class=\"col-lg-6 col-sm-6 col-md-6 col-xs-12 padding-none\">\r\n<h5>account information</h5>\r\n<ul>\r\n<li><a href=\"{{store url=\'customer/account/create\'}}\">Create an Account</a></li>\r\n<li><a href=\"{{store url=\'customer/account/login\'}}\">Log Into My Account</a></li>\r\n<li><a href=\"{{store url=\'checkout/cart\'}}\">View Shopping Cart</a></li>\r\n<li><a href=\"{{store url=\'customer-service\'}}\">Shipping Information</a></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-lg-6 col-sm-6 col-md-6 col-xs-12 padding-none\">\r\n<h5>ABOUT FITZGERALD TRUCK PARTS</h5>\r\n<ul>\r\n<li><a href=\"{{store url=\'about-magento-demo-store\'}}\">About us</a></li>\r\n<li><a href=\"{{store url=\'contacts\'}}\">Contact</a></li>\r\n<li><a href=\"#\">FAQs</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '2017-05-29 07:27:01', '2017-05-31 08:08:14', 1);

INSERT INTO `cms_block_store` (`block_id`, `store_Id`)
SELECT `block_id`, 1 FROM `cms_block` ORDER BY `block_id` DESC LIMIT 8;