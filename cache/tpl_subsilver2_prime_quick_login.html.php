<?php if (!defined('IN_PHPBB')) exit; if ($this->_rootref['S_PRIME_QUICK_LOGIN'] && ! $this->_rootref['AUTO_REFRESH'] && ! $this->_rootref['S_USER_LOGGED_IN'] && ! $this->_rootref['S_IS_BOT']) {  ?>

<form method="post" action="<?php echo (isset($this->_rootref['S_PRIME_QUICK_LOGIN'])) ? $this->_rootref['S_PRIME_QUICK_LOGIN'] : ''; ?>"><span class="genmed"><?php echo ((isset($this->_rootref['L_PRIME_QUICK_LOGIN_USERNAME'])) ? $this->_rootref['L_PRIME_QUICK_LOGIN_USERNAME'] : ((isset($user->lang['PRIME_QUICK_LOGIN_USERNAME'])) ? $user->lang['PRIME_QUICK_LOGIN_USERNAME'] : '{ PRIME_QUICK_LOGIN_USERNAME }')); ?>:</span>
	<input tabindex="100" class="post" type="text" name="username" size="10" />&nbsp; <span class="genmed"><?php echo ((isset($this->_rootref['L_PRIME_QUICK_LOGIN_PASSWORD'])) ? $this->_rootref['L_PRIME_QUICK_LOGIN_PASSWORD'] : ((isset($user->lang['PRIME_QUICK_LOGIN_PASSWORD'])) ? $user->lang['PRIME_QUICK_LOGIN_PASSWORD'] : '{ PRIME_QUICK_LOGIN_PASSWORD }')); ?>:</span>
	<input tabindex="101" class="post" type="password" name="password" size="10" />&nbsp;
	<?php if ($this->_rootref['S_PRIME_QUICK_LOGIN_AUTO']) {  ?><input tabindex="102" type="checkbox" class="radio" name="autologin" /><span class="gensmall"><?php echo ((isset($this->_rootref['L_PRIME_QUICK_LOGIN_REMEMBER'])) ? $this->_rootref['L_PRIME_QUICK_LOGIN_REMEMBER'] : ((isset($user->lang['PRIME_QUICK_LOGIN_REMEMBER'])) ? $user->lang['PRIME_QUICK_LOGIN_REMEMBER'] : '{ PRIME_QUICK_LOGIN_REMEMBER }')); ?></span>&nbsp;<?php if ($this->_rootref['S_PRIME_QUICK_LOGIN_HIDE']) {  ?>&nbsp;<?php } } if ($this->_rootref['S_PRIME_QUICK_LOGIN_HIDE']) {  ?><input tabindex="103" type="checkbox" class="radio" name="viewonline" /><span class="gensmall"><?php echo ((isset($this->_rootref['L_PRIME_QUICK_LOGIN_HIDE'])) ? $this->_rootref['L_PRIME_QUICK_LOGIN_HIDE'] : ((isset($user->lang['PRIME_QUICK_LOGIN_HIDE'])) ? $user->lang['PRIME_QUICK_LOGIN_HIDE'] : '{ PRIME_QUICK_LOGIN_HIDE }')); ?></span>&nbsp; <?php } ?>

	<input tabindex="104" type="submit" class="btnmain" name="login" value="<?php echo ((isset($this->_rootref['L_LOGIN'])) ? $this->_rootref['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ LOGIN }')); ?>" />
</form>
<?php } ?>