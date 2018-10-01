<?php return; /* no output */ ?>

detail
    type: view
    title: LBL_MODULE_TITLE
layout
	form_buttons
		imap_test
			vname: LBL_IMAP_TEST
			perform:
				SUGAR.popups.openUrl('async.php?module=v4ListImapFolders&action=ImapFolderTest&record={RECORD}'); return false;