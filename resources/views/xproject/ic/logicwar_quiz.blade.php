<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    html, body {
        height: 100%;
        margin: 0 auto;
    }

    #swf-holder {
        height: 100%;
    }

    #swf-holder object {
        display: block;
        width: 100%;
        height: 100%;
    }
</style>
<div id="swf-holder">
    <object type="application/x-shockwave-flash" data="/swf/test.swf">
        <param name="movie" value="test.swf">
    </object>
</div>
</body>
</html>