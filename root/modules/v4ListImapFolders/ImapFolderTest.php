<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Emails/EmailImport.php');

if (!empty($_REQUEST['_has_data'])) {


    $mbox = null;
    $list = null;
    static $nocert_hosts = array();
    $ssl = $_REQUEST['use_ssl'] ? '/ssl/novalidate-cert' : '/novalidate-cert/notls';

    $servername = '{' . $_REQUEST['host'] . ':' . $_REQUEST['port'] . $ssl . '}'; // geschweifte Klammern erforderlich!
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $erg = '';


    $mbox = imap_open($servername, $username, $password, OP_HALFOPEN) or die("can't connect: " . imap_last_error());

    $list = imap_list($mbox, "$servername", "*");
    if (is_array($list)) {
        foreach ($list as $val) {
            $erg .= str_replace($servername, '', mb_convert_encoding($val, "UTF-8", "UTF7-IMAP")) . "\n";
        }
    } else {
        pr2("imap_list failed: " . imap_last_error() . "\n");
    }

    pr2($erg);

    imap_close($mbox);
}