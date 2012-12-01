<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="scripts/jquery-1.5.2.min.js"></script>
        <!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
        <script type="text/javascript" src="scripts/bgstretcher.js"></script>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
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
        ?>
        <ul class="menu">
            <li><?= $lang['MENU_FORMLAB'] ?></li>
            <li><?= $lang['MENU_MODULAREN_CONCEPT'] ?></li>
            <li><?= $lang['MENU_TEHNICKI_KARAKTERISTIKI'] ?></li>
            <li><?= $lang['MENU_OSTANATO'] ?></li>
            <li class="last"><?= $lang['MENU_KONTAKT'] ?></li>
        </ul>
        <script type="text/javascript">
            $(document).ready(function(){
                //  Initialize Backgound Stretcher  
                $('body').bgStretcher({
                    images: ['images/01.jpg', 
                        'images/02.jpg', 
                        'images/03.jpg', 
                        'images/04.jpg', 
                        'images/05.jpg', 
                        'images/06.jpg'], 
                    imageWidth: 1980, 
                    imageHeight: 1080,
                    nextSlideDelay: 5000
                });
            });
        </script>
    </body>
</html>
