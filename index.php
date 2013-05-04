<?php
require_once 'config.php';
require 'functions.php';
?>

<!DOCTYPE html>
<html dir="RTL">

<head>
    <title>M</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>

<body>

<header>
    <div class="logo">
        <img src="images/logo.png" alt="Logo">
    </div>

    <nav>
        <ul>
            <?php        
                $letters = array('ا', 'ب', 'ت', 'ث', 'ج', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ك', 'ل', 'م', 'ن', 'ه', 'و',	'ي');
                $count = 0;
                foreach ($letters as $letter) {
                    $count++;
                    echo '<a href="index.php?id=' . $letter . '"><div class="btn green">'. $letter .'</a></div>';
                }
            ?>
        </ul>
    </nav>

    <?php echo '<h1>'.$_GET['id'] . '</h1>'; ?>

</header>
    
         

    <section>
        <?php
        if (isset($_GET['id']) === true) {
            artists_letter($_GET['id']);
        }
        ?>
    </section>

<footer>
    جميع الحقوق محفوظة 2013
</footer>

</body>

</html>