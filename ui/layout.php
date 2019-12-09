<?php
/**
 * Created by PhpStorm.
 * User: rudinAS
 * Date: 03.06.2016
 * Time: 9:14
 * Modified 2018-11-05 update libs
 */

?>


<html>
<head>
    <title></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/riot+compiler.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <?php if(isset($header)) { View::instance()->raw($header); } ?>
</head>
<body>
<?php if(isset($content) && is_readable($content)) {include($content);} ?>
</body>
</html>
