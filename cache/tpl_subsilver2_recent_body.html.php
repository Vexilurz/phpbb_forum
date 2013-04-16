<?php if (!defined('IN_PHPBB')) exit; $_topicrow_count = (isset($this->_tpldata['topicrow'])) ? sizeof($this->_tpldata['topicrow']) : 0;if ($_topicrow_count) {for ($_topicrow_i = 0; $_topicrow_i < $_topicrow_count; ++$_topicrow_i){$_topicrow_val = &$this->_tpldata['topicrow'][$_topicrow_i]; ?>

document.writeln('<?php echo $_topicrow_val['TOPIC_REPLIES']; ?><a href="<?php echo $_topicrow_val['U_TOPIC']; ?>"><?php echo $_topicrow_val['TOPIC_TITLE']; ?></a><br />\n');
	<?php $_first_post_text_count = (isset($_topicrow_val['first_post_text'])) ? sizeof($_topicrow_val['first_post_text']) : 0;if ($_first_post_text_count) {for ($_first_post_text_i = 0; $_first_post_text_i < $_first_post_text_count; ++$_first_post_text_i){$_first_post_text_val = &$_topicrow_val['first_post_text'][$_first_post_text_i]; ?>

	document.writeln('<?php echo $_first_post_text_val['TOPIC_FIRST_POST_TEXT']; ?><br />\n');
		<?php $_attachment_count = (isset($_first_post_text_val['attachment'])) ? sizeof($_first_post_text_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_first_post_text_val['attachment'][$_attachment_i]; ?>

		document.writeln('<?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?><br />\n');
		<?php }} ?>

	document.writeln('<br />\n');
	<?php }} }} ?>