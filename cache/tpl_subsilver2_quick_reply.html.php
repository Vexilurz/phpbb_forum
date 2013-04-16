<?php if (!defined('IN_PHPBB')) exit; ?><form action="<?php echo (isset($this->_rootref['S_POST_ACTION'])) ? $this->_rootref['S_POST_ACTION'] : ''; ?>" method="post" id="postform" name="postform"<?php echo (isset($this->_rootref['S_FORM_ENCTYPE'])) ? $this->_rootref['S_FORM_ENCTYPE'] : ''; ?>>

<table class="tablebg" width="100%" cellspacing="1">
<tr>
	<th colspan="2"><b><?php echo ((isset($this->_rootref['L_QUICK_REPLY'])) ? $this->_rootref['L_QUICK_REPLY'] : ((isset($user->lang['QUICK_REPLY'])) ? $user->lang['QUICK_REPLY'] : '{ QUICK_REPLY }')); ?></b></th>
</tr>

<?php if ($this->_rootref['ERROR']) {  ?>

	<tr>
		<td class="row2" colspan="2" align="center"><span class="genmed error"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></span></td>
	</tr>
<?php } if ($this->_rootref['S_SHOW_TOPIC_ICONS']) {  ?>

	<tr>
		<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_ICON'])) ? $this->_rootref['L_ICON'] : ((isset($user->lang['ICON'])) ? $user->lang['ICON'] : '{ ICON }')); ?>:</b></td>
		<td class="row2">
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td><input type="radio" class="radio" name="icon" value="0"<?php echo (isset($this->_rootref['S_NO_ICON_CHECKED'])) ? $this->_rootref['S_NO_ICON_CHECKED'] : ''; ?> /><span class="genmed"><?php echo ((isset($this->_rootref['L_NO_TOPIC_ICON'])) ? $this->_rootref['L_NO_TOPIC_ICON'] : ((isset($user->lang['NO_TOPIC_ICON'])) ? $user->lang['NO_TOPIC_ICON'] : '{ NO_TOPIC_ICON }')); ?></span> <?php $_topic_icon_count = (isset($this->_tpldata['topic_icon'])) ? sizeof($this->_tpldata['topic_icon']) : 0;if ($_topic_icon_count) {for ($_topic_icon_i = 0; $_topic_icon_i < $_topic_icon_count; ++$_topic_icon_i){$_topic_icon_val = &$this->_tpldata['topic_icon'][$_topic_icon_i]; ?><span style="white-space: nowrap;"><input type="radio" class="radio" name="icon" value="<?php echo $_topic_icon_val['ICON_ID']; ?>"<?php echo $_topic_icon_val['S_ICON_CHECKED']; ?> /><img src="<?php echo $_topic_icon_val['ICON_IMG']; ?>" width="<?php echo $_topic_icon_val['ICON_WIDTH']; ?>" height="<?php echo $_topic_icon_val['ICON_HEIGHT']; ?>" alt="" title="" hspace="2" vspace="2" /></span> <?php }} ?></td>
			</tr>
			</table>
		</td>
	</tr>
<?php } if ($this->_rootref['S_DISPLAY_USERNAME']) {  ?>

	<tr>
		<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_USERNAME'])) ? $this->_rootref['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ USERNAME }')); ?>:</b></td>
		<td class="row2"><input class="post" type="text" tabindex="1" name="username" size="25" value="<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>" /></td>
	</tr>
<?php } ?>


<tr>
	<td class="row1" width="22%"><b class="genmed"><?php echo ((isset($this->_rootref['L_SUBJECT'])) ? $this->_rootref['L_SUBJECT'] : ((isset($user->lang['SUBJECT'])) ? $user->lang['SUBJECT'] : '{ SUBJECT }')); ?>:</b></td>
	<td class="row2" width="78%"><input class="post" style="width:450px" type="text" name="subject" size="45" maxlength="<?php if ($this->_rootref['S_NEW_MESSAGE']) {  ?>60<?php } else { ?>64<?php } ?>" tabindex="2" value="<?php echo (isset($this->_rootref['SUBJECT'])) ? $this->_rootref['SUBJECT'] : ''; ?>" /></td>
</tr>
<tr>
	<td class="row1" valign="top"><b class="genmed"><?php echo ((isset($this->_rootref['L_MESSAGE_BODY'])) ? $this->_rootref['L_MESSAGE_BODY'] : ((isset($user->lang['MESSAGE_BODY'])) ? $user->lang['MESSAGE_BODY'] : '{ MESSAGE_BODY }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_MESSAGE_BODY_EXPLAIN'])) ? $this->_rootref['L_MESSAGE_BODY_EXPLAIN'] : ((isset($user->lang['MESSAGE_BODY_EXPLAIN'])) ? $user->lang['MESSAGE_BODY_EXPLAIN'] : '{ MESSAGE_BODY_EXPLAIN }')); ?>&nbsp;</span><br /><br />
	<?php if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

		<table width="100%" cellspacing="5" cellpadding="0" border="0" align="center">
		<tr>
			<td class="gensmall" align="center"><b><?php echo ((isset($this->_rootref['L_SMILIES'])) ? $this->_rootref['L_SMILIES'] : ((isset($user->lang['SMILIES'])) ? $user->lang['SMILIES'] : '{ SMILIES }')); ?></b></td>
		</tr>
		<tr>
			<td align="center">
				<div id="javaScriptOnly" style="display:none">
            <?php $_smiley_pages_count = (isset($this->_tpldata['smiley_pages'])) ? sizeof($this->_tpldata['smiley_pages']) : 0;if ($_smiley_pages_count) {for ($_smiley_pages_i = 0; $_smiley_pages_i < $_smiley_pages_count; ++$_smiley_pages_i){$_smiley_pages_val = &$this->_tpldata['smiley_pages'][$_smiley_pages_i]; ?>

            	<div id="page<?php echo $_smiley_pages_val['PAGE']; ?>" style="<?php if ($_smiley_pages_val['FIRST_PAGE']) {  ?>display: block;<?php } else { ?>display: none;<?php } ?>">
                    <?php if (! $_smiley_pages_val['ONE_PAGE']) {  echo $_smiley_pages_val['TOTAL_PAGES']; ?><br /><?php } $_smiley_count = (isset($_smiley_pages_val['smiley'])) ? sizeof($_smiley_pages_val['smiley']) : 0;if ($_smiley_count) {for ($_smiley_i = 0; $_smiley_i < $_smiley_count; ++$_smiley_i){$_smiley_val = &$_smiley_pages_val['smiley'][$_smiley_i]; ?>

                    <a href="#" onclick="insert_text('<?php echo $_smiley_val['A_SMILEY_CODE']; ?>', true); return false;" style="line-height: 20px;"><img src="<?php echo $_smiley_val['SMILEY_IMG']; ?>" width="<?php echo $_smiley_val['SMILEY_WIDTH']; ?>" height="<?php echo $_smiley_val['SMILEY_HEIGHT']; ?>" alt="<?php echo $_smiley_val['SMILEY_CODE']; ?>" title="<?php echo $_smiley_val['SMILEY_DESC']; ?>" hspace="2" vspace="2" /></a>
                    <?php }} ?>

                	<br /><table><tr><td><?php if (! $_smiley_pages_val['FIRST_PAGE']) {  ?><a href="javascript: void(0);" onclick="document.getElementById('page<?php echo $_smiley_pages_val['PREV_PAGE']; ?>').style.display = 'block'; document.getElementById('page<?php echo $_smiley_pages_val['PAGE']; ?>').style.display = 'none';">&laquo;<?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a><?php } ?></td><td>
                    <?php if (! $_smiley_pages_val['LAST_PAGE']) {  ?><a href="javascript: void(0);" onclick="document.getElementById('page<?php echo $_smiley_pages_val['NEXT_PAGE']; ?>').style.display = 'block'; document.getElementById('page<?php echo $_smiley_pages_val['PAGE']; ?>').style.display = 'none';"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?>&raquo;</a><?php } ?></td></tr></table>
                </div>
            <?php }} ?>

</div>
<div id="noJavaScript" style="display:block">
            <?php $_smiley_pages_count = (isset($this->_tpldata['smiley_pages'])) ? sizeof($this->_tpldata['smiley_pages']) : 0;if ($_smiley_pages_count) {for ($_smiley_pages_i = 0; $_smiley_pages_i < $_smiley_pages_count; ++$_smiley_pages_i){$_smiley_pages_val = &$this->_tpldata['smiley_pages'][$_smiley_pages_i]; $_smiley_count = (isset($_smiley_pages_val['smiley'])) ? sizeof($_smiley_pages_val['smiley']) : 0;if ($_smiley_count) {for ($_smiley_i = 0; $_smiley_i < $_smiley_count; ++$_smiley_i){$_smiley_val = &$_smiley_pages_val['smiley'][$_smiley_i]; ?>

					<a href="#" onclick="insert_text('<?php echo $_smiley_val['A_SMILEY_CODE']; ?>', true); return false;" style="line-height: 20px;"><img src="<?php echo $_smiley_val['SMILEY_IMG']; ?>" width="<?php echo $_smiley_val['SMILEY_WIDTH']; ?>" height="<?php echo $_smiley_val['SMILEY_HEIGHT']; ?>" alt="<?php echo $_smiley_val['SMILEY_CODE']; ?>" title="<?php echo $_smiley_val['SMILEY_DESC']; ?>" hspace="2" vspace="2" /></a>
				<?php }} }} ?>

</div>
<script type="text/javascript">
    document.getElementById('javaScriptOnly').style.display = 'block';
    document.getElementById('noJavaScript').style.display = 'none';
</script>
			</td>
		</tr>

		<?php if ($this->_rootref['S_SHOW_SMILEY_LINK']) {  ?>

			<tr>
				<td align="center"><a class="nav" href="<?php echo (isset($this->_rootref['U_MORE_SMILIES'])) ? $this->_rootref['U_MORE_SMILIES'] : ''; ?>" onclick="popup(this.href, 300, 350, '_phpbbsmilies'); return false;"><?php echo ((isset($this->_rootref['L_MORE_SMILIES'])) ? $this->_rootref['L_MORE_SMILIES'] : ((isset($user->lang['MORE_SMILIES'])) ? $user->lang['MORE_SMILIES'] : '{ MORE_SMILIES }')); ?></a></td>
			</tr>
		<?php } ?>


		</table>
	<?php } ?>

	</td>
	<td class="row2" valign="top">
		<script type="text/javascript">
		// <![CDATA[
			var form_name = 'postform';
			var text_name = 'message';
		// ]]>
		</script>		

		<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<?php $this->_tpl_include('posting_buttons.html'); ?>

		<tr>
			<td valign="top" style="width: 100%;"><textarea name="message" rows="15" cols="76" tabindex="3" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" style="width: 98%;"><?php echo (isset($this->_rootref['MESSAGE'])) ? $this->_rootref['MESSAGE'] : ''; ?></textarea></td>
			<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

			<td width="80" align="center" valign="top">
				<script type="text/javascript">
				// <![CDATA[
					colorPalette('v', 7, 6)
				// ]]>
				</script>
			</td>
			<?php } ?>

	 	</tr>
		</table>
	</td>
</tr>

<tr  style="display: <?php echo (isset($this->_rootref['EXTRA_OPTIONS_DISPLAY'])) ? $this->_rootref['EXTRA_OPTIONS_DISPLAY'] : ''; ?>;">
	<td class="row1" valign="top"><b class="genmed"><?php echo ((isset($this->_rootref['L_OPTIONS'])) ? $this->_rootref['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ OPTIONS }')); ?>:</b><br />
		<table cellspacing="2" cellpadding="0" border="0">
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['BBCODE_STATUS'])) ? $this->_rootref['BBCODE_STATUS'] : ''; ?></td>
		</tr>
		<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['IMG_STATUS'])) ? $this->_rootref['IMG_STATUS'] : ''; ?></td>
		</tr>
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['FLASH_STATUS'])) ? $this->_rootref['FLASH_STATUS'] : ''; ?></td>
		</tr>
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['URL_STATUS'])) ? $this->_rootref['URL_STATUS'] : ''; ?></td>
		</tr>
		<tr>
			<td class="gensmall"><?php echo (isset($this->_rootref['SMILIES_STATUS'])) ? $this->_rootref['SMILIES_STATUS'] : ''; ?></td>
		</tr>
		<?php } ?>

		</table>
	</td>
	<td class="row2">
		<table cellpadding="1">
		<?php if ($this->_rootref['S_BBCODE_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="disable_bbcode"<?php echo (isset($this->_rootref['S_BBCODE_CHECKED'])) ? $this->_rootref['S_BBCODE_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_DISABLE_BBCODE'])) ? $this->_rootref['L_DISABLE_BBCODE'] : ((isset($user->lang['DISABLE_BBCODE'])) ? $user->lang['DISABLE_BBCODE'] : '{ DISABLE_BBCODE }')); ?></td>
			</tr>
		<?php } if ($this->_rootref['S_SMILIES_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="disable_smilies"<?php echo (isset($this->_rootref['S_SMILIES_CHECKED'])) ? $this->_rootref['S_SMILIES_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_DISABLE_SMILIES'])) ? $this->_rootref['L_DISABLE_SMILIES'] : ((isset($user->lang['DISABLE_SMILIES'])) ? $user->lang['DISABLE_SMILIES'] : '{ DISABLE_SMILIES }')); ?></td>
			</tr>
		<?php } if ($this->_rootref['S_LINKS_ALLOWED']) {  ?>

		<tr>
			<td><input type="checkbox" class="radio" name="disable_magic_url"<?php echo (isset($this->_rootref['S_MAGIC_URL_CHECKED'])) ? $this->_rootref['S_MAGIC_URL_CHECKED'] : ''; ?> /></td>
			<td class="gen"><?php echo ((isset($this->_rootref['L_DISABLE_MAGIC_URL'])) ? $this->_rootref['L_DISABLE_MAGIC_URL'] : ((isset($user->lang['DISABLE_MAGIC_URL'])) ? $user->lang['DISABLE_MAGIC_URL'] : '{ DISABLE_MAGIC_URL }')); ?></td>
		</tr>
		<?php } if ($this->_rootref['S_SIG_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="attach_sig"<?php echo (isset($this->_rootref['S_SIGNATURE_CHECKED'])) ? $this->_rootref['S_SIGNATURE_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_ATTACH_SIG'])) ? $this->_rootref['L_ATTACH_SIG'] : ((isset($user->lang['ATTACH_SIG'])) ? $user->lang['ATTACH_SIG'] : '{ ATTACH_SIG }')); ?></td>
			</tr>
		<?php } if ($this->_rootref['S_NOTIFY_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="notify"<?php echo (isset($this->_rootref['S_NOTIFY_CHECKED'])) ? $this->_rootref['S_NOTIFY_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_NOTIFY_REPLY'])) ? $this->_rootref['L_NOTIFY_REPLY'] : ((isset($user->lang['NOTIFY_REPLY'])) ? $user->lang['NOTIFY_REPLY'] : '{ NOTIFY_REPLY }')); ?></td>
			</tr>
		<?php } if ($this->_rootref['S_LOCK_TOPIC_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="lock_topic"<?php echo (isset($this->_rootref['S_LOCK_TOPIC_CHECKED'])) ? $this->_rootref['S_LOCK_TOPIC_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_LOCK_TOPIC'])) ? $this->_rootref['L_LOCK_TOPIC'] : ((isset($user->lang['LOCK_TOPIC'])) ? $user->lang['LOCK_TOPIC'] : '{ LOCK_TOPIC }')); ?></td>
			</tr>
		<?php } if ($this->_rootref['S_LOCK_POST_ALLOWED']) {  ?>

			<tr>
				<td><input type="checkbox" class="radio" name="lock_post"<?php echo (isset($this->_rootref['S_LOCK_POST_CHECKED'])) ? $this->_rootref['S_LOCK_POST_CHECKED'] : ''; ?> /></td>
				<td class="gen"><?php echo ((isset($this->_rootref['L_LOCK_POST'])) ? $this->_rootref['L_LOCK_POST'] : ((isset($user->lang['LOCK_POST'])) ? $user->lang['LOCK_POST'] : '{ LOCK_POST }')); ?> [<?php echo ((isset($this->_rootref['L_LOCK_POST_EXPLAIN'])) ? $this->_rootref['L_LOCK_POST_EXPLAIN'] : ((isset($user->lang['LOCK_POST_EXPLAIN'])) ? $user->lang['LOCK_POST_EXPLAIN'] : '{ LOCK_POST_EXPLAIN }')); ?>]</td>
			</tr>
		<?php } ?>

		</table>
	</td>
</tr>

<?php if ($this->_rootref['S_CONFIRM_CODE']) {  ?>

	<tr>
		<th colspan="2" valign="middle"><?php echo ((isset($this->_rootref['L_POST_CONFIRMATION'])) ? $this->_rootref['L_POST_CONFIRMATION'] : ((isset($user->lang['POST_CONFIRMATION'])) ? $user->lang['POST_CONFIRMATION'] : '{ POST_CONFIRMATION }')); ?></th>
	</tr>
	<tr>
		<td class="row3" colspan="2"><span class="gensmall"><?php echo ((isset($this->_rootref['L_POST_CONFIRM_EXPLAIN'])) ? $this->_rootref['L_POST_CONFIRM_EXPLAIN'] : ((isset($user->lang['POST_CONFIRM_EXPLAIN'])) ? $user->lang['POST_CONFIRM_EXPLAIN'] : '{ POST_CONFIRM_EXPLAIN }')); ?></span></td>
	</tr>
	<tr>
		<td class="row1" colspan="2" align="center">
			<input type="hidden" name="confirm_id" value="<?php echo (isset($this->_rootref['CONFIRM_ID'])) ? $this->_rootref['CONFIRM_ID'] : ''; ?>" />
			<?php echo (isset($this->_rootref['CONFIRM_IMAGE'])) ? $this->_rootref['CONFIRM_IMAGE'] : ''; ?>

		</td>
	</tr>
	<tr>
		<td class="row1"><b class="genmed"><?php echo ((isset($this->_rootref['L_CONFIRM_CODE'])) ? $this->_rootref['L_CONFIRM_CODE'] : ((isset($user->lang['CONFIRM_CODE'])) ? $user->lang['CONFIRM_CODE'] : '{ CONFIRM_CODE }')); ?>: </b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_CONFIRM_CODE_EXPLAIN'])) ? $this->_rootref['L_CONFIRM_CODE_EXPLAIN'] : ((isset($user->lang['CONFIRM_CODE_EXPLAIN'])) ? $user->lang['CONFIRM_CODE_EXPLAIN'] : '{ CONFIRM_CODE_EXPLAIN }')); ?></span></td>
		<td class="row2"><input class="post" type="text" name="confirm_code" size="8" maxlength="8" /></td>
	</tr>
<?php } if ($this->_rootref['S_SHOW_ATTACH_BOX']) {  $this->_tpl_include('posting_attach_body.html'); } ?>


<tr>
	<td class="cat" colspan="2" align="center"><?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

		<input class="btnlite" type="submit" tabindex="10" name="preview" value="<?php echo ((isset($this->_rootref['L_PREVIEW'])) ? $this->_rootref['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ PREVIEW }')); ?>" />
		&nbsp; <input class="btnmain" type="submit" accesskey="s" tabindex="11" name="post" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
	</td>
</tr>
</table>

<br clear="all" />
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</form>