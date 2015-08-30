<?php /* Smarty version 2.6.0, created on 2015-08-27 19:16:47
         compiled from ./templates/tmpl1/index.tpl.html */ ?>
<html>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body marginwidth="0" marginheight="0" leftmargin="0" topmargin="0">

<script type="text/javascript" src="images/niftycube.js"></script>

<center>
<table width="780" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <td bgcolor="white"><table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="middle" width="220">
		<a href="index.php"><img src="images/companyname.gif" border="0" alt="<?php echo @constant('CONF_SHOP_NAME'); ?>
"></a>
	</td>
	<td valign="bottom" width="400">
				<table id="tabnav" border="0" cellspacing="0" cellpadding="0">
					<tr valign="top"> 
					  <td><div <?php if ($this->_tpl_vars['main_content_template'] == "home.tpl.html"): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php" class="menu"><?php echo @constant('LINK_TO_HOMEPAGE'); ?>
</a></div></td>
					  <td>&nbsp;</td>
					  <td><div <?php if ($this->_tpl_vars['main_content_template'] == "pricelist.tpl.html"): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php?show_price=yes" class="menu"><?php echo @constant('STRING_PRICELIST'); ?>
</a></div></td>
					  <td>&nbsp;</td>
					  <td><div <?php if (( $this->_tpl_vars['main_content_template'] == "aux_page.tpl.html" ) && ( $this->_tpl_vars['aux_page'] == 'aux1' )): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php?aux_page=aux1" class="menu"><nobr><?php echo @constant('ADMIN_ABOUT_PAGE'); ?>
</nobr></a></div></td>
					  <td>&nbsp;</td>
					  <td><div <?php if (( $this->_tpl_vars['main_content_template'] == "aux_page.tpl.html" ) && ( $this->_tpl_vars['aux_page'] == 'aux2' )): ?> class="topmenu_selected"<?php else: ?> class="topmenu_notselected"<?php endif; ?>><a href="index.php?aux_page=aux2" class="menu"><?php echo @constant('ADMIN_SHIPPING_PAGE'); ?>
</a></div></td>
					</tr>
				</table>
	</td>
    <td valign="middle" align="right" style="background: #ffffff url(images/gradientbg1.gif) repeat-y; background-position: right; height:70px; width:160px;">

				  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "language.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search_form.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <a href="index.php?search_with_change_category_ability=yes" class="lightsmall"></a>
	</td>
  </tr>
  <tr>
	<td bgcolor="white" height="6" align="right"><img src="images/gradient-dark-strip.gif"></td>
	<td bgcolor="#203560" colspan="2" height="6"></td>
  </tr>
  <tr> 
    <td width="220" valign="top" align="right">
	 <table cellspacing="0" cellpadding="0" border="0"><tr><td style="background: white url(images/gradientbg2.gif) repeat-y; background-position: right;width:220px;height:100%;">

		<p style="padding:10px;">
        
		<table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
		  <?php if (@constant('CONF_SHOW_ADD2CART') == 1): ?>
          <tr> 
            <td align="left" valign="top" bgcolor="#602035" class="topcorners">
				<div style="padding:5px;font-size:130%;">
					<a href="index.php?shopping_cart=yes" class="menu"><?php echo @constant('CART_TITLE'); ?>
</a>
				</div>
			</td>
		  </tr>
		  <tr>  
            <td style="background: #E5B4C3; background-position: right; padding: 10px;" class="bottomcorners"> 
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shopping_cart_info.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
          </tr>
		  <tr>
			<td>&nbsp;</td>
		  </tr>
		  <?php endif; ?>
          <tr> 
            <td align="left" valign="top" bgcolor="#352060" class="topcorners">
				<div style="padding:5px;font-size:130%;">
					<a href="index.php#catalog" class="menu"><?php echo @constant('ADMIN_CATALOG'); ?>
</a>
				</div>
			</td>
          </tr>
          <tr> 
                  <td align="left" valign="top" style="background: #C3B4E5; background-position: right; padding: 10px;" class="bottomcorners"> 
                          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "category_tree.tpl.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </td>
          </tr>

	<!--

		НАЧАЛО БЛОКА С ИНФОРМАЦИЕЙ О SHOP-SCRIPT PRO & PREMIUM

		ВЫ МОЖЕТЕ УБРАТЬ СЛЕДУЮЩИЙ ТЕКСТ СО СТРАНИЦ ВАШЕГО ИНТЕРНЕТ-МАГАЗИНА

	-->
	

          <tr> 
            <td align="right" valign="top"><div align="right"> 
                <table width="200" border="0" align="left" cellpadding="0" cellspacing="0">





				  <tr> 
                    <td align="center" valign="top">
					
						<br>


						<h3>Хотите больше возможностей?</h3>
						<p>Посмотрите коммерческие версии Shop-Script:<br /><br />
						<a href="http://www.shop-script.ru" target="_blank">www.shop-script.ru</a>
						<br><br>

						<h3>От 4950 рублей</h3>

						<p>



					</td>
                  </tr>



                </table>
              </div>
			</td>
          </tr>

	 <!--

		КОНЕЦ БЛОКА С ИНФОРМАЦИЕЙ О SHOP-SCRIPT PRO & PREMIUM

	 -->

        </table>
		</p>

		</td></tr>
		<tr><td align="right"><img src="images/gradientbg3.gif" border="0" width="200" height="121"></td></tr>
		</table>
      </td>
      <td width="100%" align="left" valign="top" style="padding:10px;" colspan="2">

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['main_content_template']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       
	  </td>
  </tr>
  <tr>
	<td>&nbsp;</td>
	<td colspan="2" align="center">

				<hr width="300" align="center" size="1" style="margin-top:0px;">

				<p class="small" align="center" style="margin-top:-5px;"><i>Copyright &copy; <a href="<?php echo @constant('CONF_FULL_SHOP_URL'); ?>
"> <u><?php echo @constant('CONF_SHOP_NAME'); ?>
</u></a>. All rights reserved.</i></p>

		  <!--
			ОБРАЩАЕМ ВНИМАНИЕ, ЧТО СОГЛАСНО УСЛОВИЯМ ЛИЦЕНЗИОННОГО СОГЛАШЕНИЯ, ВЫ ДОЛЖНЫ СОХРАНИТЬ ССЫЛКУ НА САЙТ WWW.SHOP-SCRIPT.RU СО ВСЕХ СТРАНИЦ ВАШЕГО ИНТЕРНЕТ-МАГАЗИНА, РАБОТАЮЩЕГО НА ОСНОВЕ SHOP-SCRIPT FREE

			ВЫ МОЖЕТЕ ОСТАВИТЬ СЛЕДУЮЩУЮ ССЫЛКУ:
		  -->

		  <!--
			НАЧАЛО БЛОКА С ССЫЛКОЙ НА САЙТ SHOP-SCRIPT
		  -->				  
					<p class="footer" align="center">Powered by Shop-Script FREE <a href="http://www.shop-script.ru" style="color: gray;">создание интернет-магазина</a></p>

		  <!--
			КОНЕЦ БЛОКА С ССЫЛКОЙ НА САЙТ SHOP-SCRIPT 
		  -->
	  </td>
  </tr>
  </table></td>
 </tr>
</table>

<!--
	следующий javascript-код выполняет закругление (http://www.html.it/articoli/niftycube/index.html) областей отображения меню, корзины и списка категорий.
	если вы хотите убрать закругление, просто удалите следующий код.
-->
<script type="text/javascript">
<?php echo '
	if ( ! (navigator.userAgent.indexOf(\'Opera\') != -1) )
	{
		Nifty("div.topmenu_notselected,div.topmenu_selected","top transparent");

		Nifty("td.topcorners","tl transparent");
		var tt_layers= getElementsBySelector("td.topcorners");
		for(var k=0, len=tt_layers.length; k<len; k++)
		{
			tt_layers[k].parentNode.style.backgroundColor = "#e0e7ff";
		}
		Nifty("td.topcorners","tr transparent");
		
		Nifty("td.bottomcorners","bl transparent");
		var tt_layers= getElementsBySelector("td.bottomcorners");
		for(var k=0, len=tt_layers.length; k<len; k++)
		{
			tt_layers[k].parentNode.style.backgroundColor = "#e0e7ff";
		}
		Nifty("td.bottomcorners","br transparent");
	}
'; ?>

</script>
<!--
	конец кода nifty
-->

</body>
</html>