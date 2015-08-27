<?php /* Smarty version 2.6.0, created on 2015-08-27 19:17:22
         compiled from default.tpl.html */ ?>
<div style="margin: 10px">

<p><?php echo @constant('ADMIN_WELCOME'); ?>

</p>

<?php if ($this->_tpl_vars['totals']): ?>

<table border="0" style="border: 1px solid #CCC; background-color: #EEE" cellpadding="10">

 <tr>

	<td valign="top">

		<table cellpadding="3">
		<tr>
		 <td><img src="images/backend/custord_new_orders_32.gif"></td>
		 <td class="big"><b><u>Заказы</u></b></td>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>

			<table style="margin-left: 5px;" cellpadding="0">
			<tr><td>Сегодня:</td><td><?php if ($this->_tpl_vars['totals']['orders_today'] > 0): ?><b><?php endif;  echo $this->_tpl_vars['totals']['orders_today']; ?>
 заказ(ов) (<?php echo $this->_tpl_vars['totals']['revenue_today']; ?>
)<?php if ($this->_tpl_vars['totals']['orders_today'] > 0): ?></b><?php endif; ?></td></tr>
			<tr><td>Вчера:</td><td><?php echo $this->_tpl_vars['totals']['orders_yesterday']; ?>
 заказ(ов) (<?php echo $this->_tpl_vars['totals']['revenue_yesterday']; ?>
)</td></tr>
			<tr><td>В этом месяце:</td><td><?php echo $this->_tpl_vars['totals']['orders_thismonth']; ?>
 заказ(ов) (<?php echo $this->_tpl_vars['totals']['revenue_thismonth']; ?>
)</td></tr>
			<tr><td>Всего:</td><td><?php echo $this->_tpl_vars['totals']['orders']; ?>
 заказ(ов) (<?php echo $this->_tpl_vars['totals']['revenue']; ?>
)</td></tr>
			</table>

		 </td>
		</tr>
		</table>

	</td>

	<td valign="top">

		<table cellpadding="3">
		<tr>
		 <td><img src="images/backend/catalog_products_categories_32.gif"></td>
		 <td class="big"><b><u>Продукты</u></b></td>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>

			Общее количество продуктов: <b><?php echo $this->_tpl_vars['totals']['products']; ?>
</b><br />
			Из них продаются<br />(доступны в пользовательской части): <b><?php echo $this->_tpl_vars['totals']['products_enabled']; ?>
</b><br />
			Категорий продуктов: <b><?php echo $this->_tpl_vars['totals']['categories']; ?>
</b><br /><br />

		 </td>
		</tr>
		</table>

	</td>

 </tr>

</table>


<?php endif; ?>

</div>