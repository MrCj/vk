<?php
include( "config.php" );

$url = "https://oauth.vk.com/authorize?"
    ."client_id=". $CONFIG["appID"]
    ."&scope=". $CONFIG["appPermission"]
    ."&redirect_uri=http://mrcj.github.io/vk/page.php"
    ."&display=page"
    ."&v=". $CONFIG["apiVer"]
    ."&response_type=token";
?>
<!DOCTYPE HTML>
<html>
<head>
   <title>Test</title>
</head>
<body>
    Потрібно підписатися на групу в ВК та зробити один репост!
    <br />
    <a href="#" onclick="">Стати учаником</a>
</body>
</html>
