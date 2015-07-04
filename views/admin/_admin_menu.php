<?php if (in_array('PailsAuthentication', class_uses($this)) && $this->is_logged_in()): ?>
<style>
.pails-admin-menu
{
	position: fixed;
	top: 0;
	width: 100%;
	height: 32px;
	overflow: hidden;
	background-color: black;
	color: white;
	line-height: 32px;
	z-index: 1000;
}
.pails-admin-menu ul
{
	margin: 0;
	padding-left: 0;
}
.pails-admin-menu li
{
	display: inline-block;
	vertical-align: top;
	margin: 0 6px;
}
.pails-admin-menu > ul ul
{
	display: none;
}
body
{
	margin-top: 32px;
}
</style>
<div class="pails-admin-menu">
	<?php $this->render_partial('menu/_menu_inline', Menu::construct(ADMIN_MENU_SLUG)); ?>
</div>
<?php endif; ?>