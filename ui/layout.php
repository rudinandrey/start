<?php
/**
 * Created by PhpStorm.
 * User: rudinAS
 * Date: 03.06.2016
 * Time: 9:14
 */

?>


<html>
<head>
    <title></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/ractive.min.js"></script>
    <script src="/js/riot+compiler.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <?php if(isset($header)) { View::instance()->raw($header); } ?>
</head>
<body>
<?php if(isset($content) && is_readable($content)) {include($content);} ?>
</body>
</html>
