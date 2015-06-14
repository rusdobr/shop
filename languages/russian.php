<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2006 Articus consulting group. All rights reserved.         *
 *                                                                           *
 ****************************************************************************/
 
 
 
//language file

//		RUSSIAN		//

//default character set, that will be used
define('DEFAULT_CHARSET', 'windows-1251');
define('LINK_TO_HOMEPAGE', '�������');
define('PRODUCTS_BEST_CHOISE', '<h5>���������� ��������</h5>');
define('MORE_INFO_ON_PRODUCT', '���������...');
define('ENLARGE_PICTURE', '���������...');
define('ADD_TO_CART_STRING', '�������� � �������');
define('LIST_PRICE', '������ ����');
define('CURRENT_PRICE', '���� ����');
define('YOU_SAVE', '�� ���������');
define('IN_STOCK', '������� �� ������');
define('VOTING_FOR_ITEM_TITLE', '������� �����!');
define('MARK_EXCELLENT', '�������!');
define('MARK_GOOD', '������');
define('MARK_AVERAGE', '������');
define('MARK_POOR', '�����');
define('MARK_PUNY', '����� �����');
define('VOTE_BUTTON', '�������!');
define('VOTES_FOR_ITEM_STRING', '�������');

define('LOGOUT_LINK', '����� �� ������...');
define('ADMINISTRATE_LINK', '>> ����������������� <<');

define('ANSWER_YES', '��');
define('ANSWER_NO', '���');
define('SAVE_BUTTON', '���������');
define('DELETE_BUTTON', '�������');
define('CLOSE_BUTTON', '�������');
define('CANCEL_BUTTON', '������');
define('UPDATE_BUTTON', '��������');
define('ADD_BUTTON', '��������');
define('ADMIN_ENABLED', '���.');

define('STRING_BACK_TO_SHOPPING', '��������� � ��������');
define('STRING_SHOW', '����������');
define('STRING_NUMBER', '�����');
define('STRING_RELATED_ITEMS', '� ���� ������� �� �����������');
define('STRING_NUMBER_ONLY', '������ �����');
define('STRING_EMPTY_CATEGORY', '��� �������');
define('STRING_NO_ORDERS', '��� �������');
define('STRING_SEARCH', '�����');
define('STRING_LANGUAGE', '����');
define('STRING_PRICELIST', '�����-����');
define('STRING_GREETINGS', '<h1>��� ��������-�������</h1>
<p>���� ��������-������� �������� � �������������� ������������ ����������� <a href="http://www.shop-script.ru/php-shopping-cart-software-1.html">Shop-Script FREE</a> - ���������� �������� ��� �������� ��������-��������� � ���������.<br>
<p>��� �������������� ����� ������ �������� ���� <b>languages/russian.php</b><br>
� ����� ��������� ��������� (��������, ��������).');
define('STRING_FOUND', '������� ');
define('STRING_NO_MATCHES_FOUND', '������ �� �������');
define('STRING_PRODUCTS', '�����(��)');
define('STRING_ORDER_ID', '����� ������');
define('STRING_ORDER_PLACED', '<div align="center"><h1>������� �� ��� �����!</h1><h3>�� �������� � ���� ��� ������������� ������ � ��������� �����.</h3></div>');
define('STRING_PLACE_ORDER', '�������� �����!');
define('STRING_NEXT', '����');
define('STRING_PREVIOUS', '����');
define('STRING_SHOWALL', '�������� ���');
define('STRING_REQUIRED', '<font color=red>*</font> ����������� ��� ����������');
define('STRING_CONTACT_INFORMATION', '���������� ����������');

define('CART_CONTENT_EMPTY', '(��� �������)');
define('CART_CONTENT_NOT_EMPTY', '�����(��): ');
define('CART_TITLE', '�������');
define('CART_CLEAR', '��������');
define('CART_PROCEED_TO_CHECKOUT', '�������� �����');
define('CART_EMPTY', '���� ������� �����');

//table titles

define('TABLE_PRODUCT_NAME', '��������');
define('TABLE_PRODUCT_QUANTITY', '����������');
define('TABLE_PRODUCT_COST', '���������');
define('TABLE_TOTAL', '�����:');
define('TABLE_ORDER_TIME', '����� ������');
define('TABLE_ORDERED_PRODUCTS', '���������� ������');
define('TABLE_ORDER_TOTAL', '��������� ������');
define('TABLE_CUSTOMER', '����������');

//different admin strings

define('ADMIN_TITLE', '�����������������');

define('ADMIN_WELCOME', '<p><font class=big>����� ���������� � ����� �����������������!</font><p>����������� ���� ��� ������� � �������� ����������������� �����.');
define('ADMIN_NEW_ORDERS', '����� ������');
define('ADMIN_CATEGORIES_PRODUCTS', '��������� � ������');
define('ADMIN_CATALOG', '�������');
define('ADMIN_SETTINGS', '���������');
define('ADMIN_SETTINGS_GENERAL', '�����');
define('ADMIN_SETTINGS_APPEARENCE', '����������');
define('ADMIN_CUSTOMERS_AND_ORDERS', '������');
define('ADMIN_ABOUT_PAGE', '� ��������');
define('ADMIN_SHIPPING_PAGE', '�������� � ������');
define('ADMIN_AUX_INFO', '�������������� ����������');
define('ADMIN_BACK_TO_SHOP', '� ������������� ����� ...');
define('ADMIN_SORT_ORDER', '������� ����������');
define('ADMIN_LOGIN_PASSWORD', '������ � �����������������');
define('ADMIN_CHANGE_LOGINPASSWORD', '�������� ����� � ������ ��������������');
define('ADMIN_CURRENT_LOGIN', '�����');
define('ADMIN_OLD_PASS', '������ ������');
define('ADMIN_NEW_PASS', '����� ������');
define('ADMIN_NEW_PASS_CONFIRM', '����������� ����� ������');
define('ADMIN_UPDATE_SUCCESSFUL', '<font color=blue><b>���������� ������ �������!</b></font>');
define('ADMIN_NO_SPECIAL_OFFERS', '����-����������� �� �������');
define('ADMIN_ADD_SPECIAL_OFFERS', '�������� � ������ ����-�����������');
define('ADMIN_SPECIAL_OFFERS_DESC', '����-����������� ������������ �� ������� ������ ��������.<br>
������� �������� �������, ������� ����� �������� ��� ����-�����������<br>
�� ������ � ���������� <a href="admin.php?dpt=catalog&sub=products_categories">"��������� � ������"</a>, ������� �� ������ <img src="images/admin_special_offer.gif" border=0> � ������� �������.<br>
� ����-����������� ����� ������� ������ ������ � �����������.');
define('ADMIN_ROOT_WARNING', '<font color=red>��� ������, ����������� � �����, �� ����� �������������!</font>');
define('ADMIN_ABOUT_PRICES', '<font class=small>// ���� ��������� �� ������ ������ � ������� ��� ������ //</font>');
define('ADMIN_SHOP_NAME', '�������� ��������');
define('ADMIN_SHOP_URL', 'URL ��������');
define('ADMIN_SHOP_EMAIL', '���������� email ����� ������ ��������');
define('ADMIN_ORDERS_EMAIL', 'Email, �� ������� ����� ������������ ����������� � �������');
define('ADMIN_SHOW_ADD2CART', '�������� ����������� ���������� ������� � ������� � ���������� �������');
define('ADMIN_SHOW_BESTCHOICE', '���������� �������� ���������� ������ � ������ ����������');
define('ADMIN_MAX_PRODUCTS_COUNT_PER_PAGE', '������������ ���������� ������� �� ��������');
define('ADMIN_MAX_COLUMNS_PER_PAGE', '���������� �������� ��� ������ �������');
define('ADMIN_MAIN_COLORS', '�����, ������������ ��� ����������� ������:');
define('ADMIN_COLOR', '����');
define('ADMIN_SPECIAL_OFFERS', '����������� �����������');
define('ADMIN_CATEGORY_TITLE', '���������');
define('ADMIN_CATEGORY_NEW', '������� ����� ���������');
define('ADMIN_CATEGORY_PARENT', '������������ ���������:');
define('ADMIN_CATEGORY_MOVE_TO', '����������� �:');
define('ADMIN_CATEGORY_NAME', '�������� ���������:');
define('ADMIN_CATEGORY_LOGO', '�������:');
define('ADMIN_CATEGORY_ROOT', '������');
define('ADMIN_CATEGORY_DESC', '��������');
define('ADMIN_PRODUCT_TITLE', '������');
define('ADMIN_PRODUCT_NEW', '�������� ����� �����');
define('ADMIN_PRODUCT_CODE', '���������� ��� (�������)');
define('ADMIN_PRODUCT_NAME', '������������');
define('ADMIN_PRODUCT_RATING', '�������');
define('ADMIN_PRODUCT_PRICE', '����');
define('ADMIN_PRODUCT_LISTPRICE', '������ ����');
define('ADMIN_PRODUCT_INSTOCK', '�� ������');
define('ADMIN_PRODUCT_PICTURE', '����������');
define('ADMIN_PRODUCT_THUMBNAIL', '��������� ����������');
define('ADMIN_PRODUCT_BIGPICTURE', '������� ����������');
define('ADMIN_PRODUCT_DESC', '��������');
define('ADMIN_PRODUCT_BRIEF_DESC', '������� ��������');
define('ADMIN_PRODUCT_SOLD', '�������');
define('CUSTOMER_EMAIL', 'Email:');
define('CUSTOMER_FIRST_NAME', '���:');
define('CUSTOMER_LAST_NAME', '�������:');
define('CUSTOMER_ZIP', '�������� ������:');
define('CUSTOMER_STATE', '�������:');
define('CUSTOMER_COUNTRY', '������:');
define('CUSTOMER_CITY', '�����:');
define('CUSTOMER_ADDRESS', '�����:');
define('CUSTOMER_PHONE_NUMBER', '�������:');

define('ADMIN_PICTURE_NOT_UPLOADED', '(���������� �� ���������)');


//errors

define('ERROR_FAILED_TO_UPLOAD_FILE', '<b><font color=red>�� ������� �������� ���� �� ������. ���������,<br>��� �������� ����� �� �������� ������ �� ������� � ����� products_pictures/</font></b>');
define('ERROR_CANT_FIND_REQUIRED_PAGE', '��������, ������������� �������� �� ��� ������ �� �������');
define('ERROR_INPUT_EMAIL', '����������, ������� email');
define('ERROR_INPUT_NAME', '����������, ������� ���� ���');
define('ERROR_INPUT_COUNTRY', '����������, ������� ������');
define('ERROR_INPUT_CITY', '����������, ������� �������� ������');
define('ERROR_INPUT_ZIP', '����������, ������� �������� ������');
define('ERROR_INPUT_STATE', '����������, ������� �������');
define('ERROR_FILL_FORM', '����������, ��������� ��� ����');
define('ERROR_WRONG_PASSWORD', '�������� ������ ������');
define('ERROR_PASS_CONFIRMATION', '�������� ���������� ������');

//questions

define('QUESTION_DELETE_PICTURE', '������� ����������?');
define('QUESTION_DELETE_CONFIRMATION', '�������?');

//emails
define('EMAIL_ADMIN_ORDER_NOTIFICATION_SUBJECT', '����� �����!');
define('EMAIL_CUSTOMER_ORDER_NOTIFICATION_SUBJECT', '��� �����');
define('EMAIL_MESSAGE_PARAMETERS', 'Content-Type: text/plain; charset="'.DEFAULT_CHARSET.'"');
define('EMAIL_HELLO', '������������');
define('EMAIL_SINCERELY', '� ���������');
define('EMAIL_THANK_YOU_FOR_SHOPPING_AT', '������� �� ��� �����');
define('EMAIL_ORDER_WILL_BE_SHIPPED_TO', '��� ����� ����� ��������� �� ������');
define('EMAIL_OUR_MANAGER_WILL_CONTACT_YOU', '�� �������� � ���� ��� ������������� ������ � ��������� �����.');

//warnings

define('WARNING_DELETE_INSTALL_PHP', '���� <b>install.php</b> �� ������ �� ���������� �� ��������� Shop-Script. ��� ���������� ������� ��� �������.<br>');
define('WARNING_DELETE_FORGOTPW_PHP', '���� <b>forgot_password.php</b> �� ������ �� ���������� �� ��������� Shop-Script. ��� ���������� ������� ��� �������.<br>');
define('WARNING_WRONG_CHMOD', '�������� �������� ��� ����� cfg, �� �����������, � ����� ����� products_pictures � templates_c (���� ��� �� �� ���� ����� ����������).<br>���������� ���������� ���������� �������� �� ��� ��� ���������� (����)������ ������ � ���� ������ (��� �������, ��� �������� 775).');

//currencies

define('ADMIN_CURRENCY', '������');
define('ADMIN_CURRENCY_ID_LEFT', '����������� ������ ����� �� ����� (����)<br>(��������, "$")');
define('ADMIN_CURRENCY_ID_RIGHT', '����������� ������ ������ �� ����� (����)<br>(��������, "���.")');
define('ADMIN_CURRENCY_ISO3', '������������� ��� ������ ISO3<br>(��������, USD, EUR, RUR)');

?>