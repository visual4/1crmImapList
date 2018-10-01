<?php return; /* no output */ ?>

detail
    type: editview
    title: LBL_MODULE_TITLE
layout
	form_buttons
		imap_test
			vname: LBL_IMAP_TEST
			perform:
				SUGAR.popups.openForm(v4ListImapFolders.form, {action: 'ImapFolderTest', _has_data: 1}, {url: 'async.php'}); return false;