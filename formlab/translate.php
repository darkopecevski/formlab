<?php
if (isset($_GET['lang'])) {
    switch ($_GET['lang']) {
        case 'mk':
            include_once 'translate/mk/translate.php';
            break;
        case 'en':
            include_once 'translate/en/translate.php';
            break;
        default:
            include_once 'translate/mk/translate.php';
            break;
    }
} else {
    include_once 'translate/mk/translate.php';
}