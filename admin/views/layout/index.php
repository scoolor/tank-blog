<?php
findNameByPattern("app", "css","/static/css/");exit;
?>
<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <title>admin</title>
    <link href=<?php echo findNameByPattern("app", "css","./static/css/")?> rel=stylesheet>
</head>
<body>
<?php
    echo $content;
?>
    <div id="app"></div>
</body>
</html>
<script type=text/javascript src=<?php echo findNameByPattern("manifest", "js","./static/js/")?>></script>
<script type=text/javascript src=<?php echo findNameByPattern("vendor", "js","./static/js/")?>></script>
<script type=text/javascript src=<?php echo findNameByPattern("app", "js","./static/js/")?>></script>
