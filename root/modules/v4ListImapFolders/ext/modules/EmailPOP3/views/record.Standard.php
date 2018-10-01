<?php return; /* no output */ ?>

detail
    title: LBL_MODULE_TITLE
layout
	form_buttons
		imap_test
			vname: LBL_IMAP_TEST
			perform:
				SUGAR.popups.openForm(this.form, {action: 'ImapFolderTest', module: 'v4ListImapFolders', _has_data: 1}, {url: 'async.php'}); return false;
			mode: edit