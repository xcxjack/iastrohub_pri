<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="../style-rs-mob.css"/>
    <title>Image Viewer</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jqueryui.js"></script>
    <script type="text/javascript" src="jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="../jquery.iviewer.js"></script>
</head>


<body>
<script id="source" language="javascript" type="text/javascript">


    var xmlhttp;
    var st;

    function GetXmlHttpObject() {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            return new XMLHttpRequest();
        }

        if (window.ActiveXObject) {
            // code for IE6, IE5
            return new ActiveXObject("Microsoft.XMLHTTP");
        }
        return null;
    }


    function refresh() {

        document.location.reload(true);

    }


    function load(filename) {

        $("#viewer1").iviewer('loadImage', '../images/' + filename + '?' + (new Date()).getTime());

        xmlhttp = GetXmlHttpObject();
        var url = "loadimage.php?file=" + filename;
        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

    }


    function handleResponse() {
        if (xmlhttp.readyState == 4) {
            st = xmlhttp.responseText;
        }
    }


    jQuery(function ($) {

        var viewer;

        viewer = $("#viewer1").iviewer({
            src: "../image.jpg?" + (new Date()).getTime(),

            initCallback: function (ev) {
                this.container.context.iviewer = this;
            }
        });
    });


</script>

<link rel="stylesheet" href="../jquery.iviewer.css"/>
<style>
    html, body {
        height: 100%;
        padding: 0;
        margin: 0;
    }
</style>


<div class="toolbar">
    <input type="button" value="刷新" onClick="javascript: refresh();" class="half_button">

    <select name="image" id="image">

        <?php

        $dir = '../images/';

        $handle = @opendir($dir);
        $images = array();
        while (false !== ($file = readdir($handle))) {
            if (eregi('\.(jpg|bmp)$', $file)) {
                $images[] = $file;
            }
        }
        closedir($handle);
        rsort($images);

        foreach ($images as $option) {
            ?>

            <option value="<?= htmlentities($option) ?>">
                <?= htmlentities($option) ?>
            </option>
        <?php } ?>

    </select>

    <input type="button" value="加载所选图" onClick="javascript: load(document.getElementById('image').value);"
           class="half_button">

    <span id="status"></span>


</div>

<div class="wrapper">
    <div id="viewer1" class="viewer"></div>
</div>

</body>


</html>
