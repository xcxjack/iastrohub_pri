<html>
<head>

    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=800px; user-scalable=yes"/>
    <link rel="stylesheet" type="text/css" href="style-rs-mob.css"/>
    <title>Admin</title>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>

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

    function startskychart() {

        var r = confirm("Do you want to START Skychart?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "startskychart.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Skychart started.";

        }

    }

    function startskychartvnc() {

        var r = confirm("Do you want to START Skychart for setup via VNC?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "startskychartvnc.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Skychart is available for setup via VNC";

        }

    }

    function stopskychart() {

        var r = confirm("Do you want to STOP Skychart?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "stopskychart.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Skychart stopped.";

        }

    }

    function resetoffset() {
        xmlhttp = GetXmlHttpObject();

        var url = "resetoffset.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Offsets were reset.";

    }

    function upload_getStatus() {

        xmlhttp3 = GetXmlHttpObject();

        var url3 = "upload_getStatus.php";

        xmlhttp3.onreadystatechange = handleResponse3;
        xmlhttp3.open("GET", url3, true);
        xmlhttp3.send(null);

    }

    function file_getStatus() {

        xmlhttp3 = GetXmlHttpObject();

        var url3 = "file_getStatus.php";

        xmlhttp3.onreadystatechange = handleResponse3;
        xmlhttp3.open("GET", url3, true);
        xmlhttp3.send(null);

    }

    function deleteimages() {

        var r = confirm("Do you want to DELETE all images?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "deleteimages.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "All images were deleted.";

        }

    }

    function downloadimages() {

        var r = confirm("Wait until LED on USB flash drive stops blinking! And check File Status.")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "downloadimages.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Wait until LED on USB flash drive stops blinking! And check File Status.";

        }

    }

    function uploadpatch() {

        var r=confirm("Do you want to upload the patch? Wait until LED on USB flash drive stops blinking! And check File Status.")
        if (r==true)
        {

            xmlhttp = GetXmlHttpObject();

            var url = "uploadpatch.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET",url,true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Wait until LED on USB flash drive stops blinking! And check File Status.";

        }

    }

    function clearguidinglog() {

        var r = confirm("Do you want to DELETE guiding and alert logs?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "clearguidinglog.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Guiding and alert logs were deleted.";

        }

    }

    function clearfocuslog() {

        var r = confirm("Do you want to DELETE focus log?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "clearfocuslog.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Focus log was deleted.";

        }

    }

    function setdslr1() {
        xmlhttp = GetXmlHttpObject();

        var url = "setdslr1.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Camera protocol for Canon 40D (or similar) was selected.";

    }

    function setdslr2() {
        xmlhttp = GetXmlHttpObject();

        var url = "setdslr2.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Camera protocol for Canon 550D/1100D (or similar) was selected.";

    }

    function setdslr3() {
        xmlhttp = GetXmlHttpObject();

        var url = "setdslr3.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Camera protocol for Canon 1000D (or similar) was selected.";

    }

    function setdslr5() {
        xmlhttp = GetXmlHttpObject();

        var url = "setdslr5.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Pentax camera protocol was selected.";

    }

    function setdslr6() {
        xmlhttp = GetXmlHttpObject();

        var url = "setdslr6.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "FTDI-based shutter cable (Port=ttyUSB0) was selected to control the camera shutter.";

    }

    function setdslr7() {
        xmlhttp = GetXmlHttpObject();

        var url = "setdslr7.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "FTDI-based shutter cable (Port=ttyUSB1) was selected to control the camera shutter.";

    }


    function ftdi_load() {
        xmlhttp = GetXmlHttpObject();

        var url = "ftdi_load.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "FTDI driver was loaded.";

    }


    function ftdi_unload() {
        xmlhttp = GetXmlHttpObject();

        var url = "ftdi_unload.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "FTDI driver was unloaded.";

    }


    function startPK() {

        var r = confirm("Do you want to START/RESTART Pagekite?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "startPK.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Pagekite was started.";

        }

    }


    function startddserver() {
        xmlhttp = GetXmlHttpObject();

        var url = "startddserver.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "DslrDashboard Server was started.";

    }

    function stopddserver() {
        xmlhttp = GetXmlHttpObject();

        var url = "stopddserver.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "DslrDashboard Server was stopped.";

    }

    function focus_swap() {

        var r = confirm("Do you want to swap focuser directions?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "focus_swap.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Focuser directions were swapped.";

        }

    }

    function startapp() {

        var r = confirm("Do you want to START apps?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "startapp.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Apps started.";

        }

    }

    function stopapp() {

        var r = confirm("Do you want to STOP apps?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "stopapp.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Apps stopped.";

        }

    }


    function vnc() {
        xmlhttp = GetXmlHttpObject();

        var url = "vnc.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "VNC server was started.";

    }

    function mount() {

        var r = confirm("Do you want to MOUNT a USB flash drive?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "mount.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "USB flash drive was mounted.";

        }

    }

    function unmount() {

        var r = confirm("Do you want to UNMOUNT a USB flash drive?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "unmount.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "USB flash drive was unmounted.";

        }

    }

    function shutdown() {

        var r = confirm("Do you want to SHUTDOWN iAstroHub?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "halt.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Shutting down... Unplug iAstroHub after the green LED is off.";

        }

    }

    function reboot() {

        var r = confirm("Do you want to REBOOT iAstroHub?")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "reboot.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Rebooting...";

        }

    }


    function tts() {
        xmlhttp23 = GetXmlHttpObject();

        var url23 = "tts.php";

        xmlhttp23.onreadystatechange = handleResponse23;
        xmlhttp23.open("GET", url23, true);
        xmlhttp23.send(null);
    }


    function dithering() {
        xmlhttp = GetXmlHttpObject();

        var url = "dithering.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);
    }


    function hattrick() {
        xmlhttp2 = GetXmlHttpObject();

        var url2 = "hattrick.php";

        xmlhttp2.onreadystatechange = handleResponse2;
        xmlhttp2.open("GET", url2, true);
        xmlhttp2.send(null);
    }


    function focuserlink() {
        xmlhttp22 = GetXmlHttpObject();

        var url22 = "focuserlink.php";

        xmlhttp22.onreadystatechange = handleResponse22;
        xmlhttp22.open("GET", url22, true);
        xmlhttp22.send(null);
    }


    function download() {
        xmlhttp4 = GetXmlHttpObject();

        var url4 = "download.php";

        xmlhttp4.onreadystatechange = handleResponse4;
        xmlhttp4.open("GET", url4, true);
        xmlhttp4.send(null);
    }


    function mlu() {
        xmlhttp5 = GetXmlHttpObject();

        var url5 = "mlu.php";

        xmlhttp5.onreadystatechange = handleResponse5;
        xmlhttp5.open("GET", url5, true);
        xmlhttp5.send(null);
    }


    function ccd_getStatus() {

        xmlhttp3 = GetXmlHttpObject();

        var url3 = "ccd_getStatus.php";

        xmlhttp3.onreadystatechange = handleResponse3;
        xmlhttp3.open("GET", url3, true);
        xmlhttp3.send(null);

    }

    function ccd_list() {

        xmlhttp3 = GetXmlHttpObject();

        var url3 = "ccd_list.php";

        xmlhttp3.onreadystatechange = handleResponse3;
        xmlhttp3.open("GET", url3, true);
        xmlhttp3.send(null);

    }

    function camset(camid) {

        xmlhttp = GetXmlHttpObject();

        var url = "camset.php?camid=" + camid;

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Camera connected";

    }


    function ccd_getStatus_QSI() {

        xmlhttp3 = GetXmlHttpObject();

        var url3 = "ccd_getStatus_QSI.php";

        xmlhttp3.onreadystatechange = handleResponse3;
        xmlhttp3.open("GET", url3, true);
        xmlhttp3.send(null);

    }


    function camset_QSI() {

        //	var r=confirm("Wait for 30s until the camera status shows... COMMAND configure_ccd_camera")
        var r = confirm("Wait until the camera status shows >>>> Opened CCD camera")
        if (r == true) {

            xmlhttp = GetXmlHttpObject();

            var url = "camset_QSI.php";

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Press 'Status' to view the camera status.";

        }

    }


    function default_dslr() {
        xmlhttp = GetXmlHttpObject();

        var url = "default_dslr.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "The default page is set for Canon/Nikon DSLR control.";
    }

    function default_pentax() {
        xmlhttp = GetXmlHttpObject();

        var url = "default_pentax.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "The default page is set for Pentax DSLR control.";
    }

    function default_INDI() {
        xmlhttp = GetXmlHttpObject();

        var url = "default_INDI.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "The default page is set for INDI-compatible instrument.";
    }

    function default_XCX() {
        xmlhttp = GetXmlHttpObject();

        var url = "default_xcx.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "The default page is set for xcx.";
    }

    function default_ccd() {
        xmlhttp = GetXmlHttpObject();

        var url = "default_ccd.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "The default page is set for SBIG, ATIK, or QHY camera.";
    }

    function default_qsi() {
        xmlhttp = GetXmlHttpObject();

        var url = "default_qsi.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "The default page is set for QSI or SX camera.";
    }


    function setFOV(FOV) {
        xmlhttp = GetXmlHttpObject();

        var url = "setFOV.php?FOV=" + FOV;

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Minimum FOV was set.";
    }


    function getCCDGain() {
        xmlhttp6 = GetXmlHttpObject();

        var url6 = "getCCDGain.php";

        xmlhttp6.onreadystatechange = handleResponse6;
        xmlhttp6.open("GET", url6, true);
        xmlhttp6.send(null);
    }


    function setCCDGain(gain) {

        if (is_int(gain) && gain >= 0 && gain <= 100) {

            xmlhttp = GetXmlHttpObject();

            var url = "setCCDGain.php?gain=" + gain;

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "CCD gain was set.";

        } else {

            alert("Gain must be an interger [0-100].");

        }

    }


    function getCCDOffset() {
        xmlhttp7 = GetXmlHttpObject();

        var url7 = "getCCDOffset.php";

        xmlhttp7.onreadystatechange = handleResponse7;
        xmlhttp7.open("GET", url7, true);
        xmlhttp7.send(null);
    }


    function setCCDOffset(offset) {

        if (is_int(offset) && offset >= 0 && offset <= 255) {

            xmlhttp = GetXmlHttpObject();

            var url = "setCCDOffset.php?offset=" + offset;

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "CCD offset was set.";

        } else {

            alert("Offset must be an interger [0-255].");

        }

    }


    function getDelay() {
        xmlhttp8 = GetXmlHttpObject();

        var url8 = "getDelay.php";

        xmlhttp8.onreadystatechange = handleResponse8;
        xmlhttp8.open("GET", url8, true);
        xmlhttp8.send(null);
    }


    function setDelay(delay) {

        if (is_int(delay) && delay >= 5 && delay <= 60) {

            xmlhttp = GetXmlHttpObject();

            var url = "setDelay.php?delay=" + delay;

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Delay was set.";

        } else {

            alert("Delay must be an interger [5-60].");

        }

    }


    function setIP_TSX(IP) {

        xmlhttp = GetXmlHttpObject();

        var url = "setIP_TSX.php?IP=" + IP;

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "IP address was set.";

    }


    function setNetwork(net_name, net_pwd) {

        if (net_pwd.length >= 8) {

            xmlhttp = GetXmlHttpObject();

            var url = "setNetwork.php?net_name=" + net_name + "&net_pwd=" + net_pwd;

            xmlhttp.onreadystatechange = handleResponse;
            xmlhttp.open("GET", url, true);
            xmlhttp.send(null);

            document.getElementById('returned_msg').innerHTML = "Network name and password were changed. Shutting down...";

        } else {

            alert("Use 8 non-special characters (or more) for the password.");

        }

    }

    function setPushover(ap, user) {

        xmlhttp = GetXmlHttpObject();

        var url = "setPushover.php?ap=" + ap + "&user=" + user;

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Pushover keys were set.";

    }

    function notify_imaging() {
        xmlhttp20 = GetXmlHttpObject();

        var url20 = "notify_imaging.php";

        xmlhttp20.onreadystatechange = handleResponse20;
        xmlhttp20.open("GET", url20, true);
        xmlhttp20.send(null);
    }

    function notify_guiding() {
        xmlhttp21 = GetXmlHttpObject();

        var url21 = "notify_guiding.php";

        xmlhttp21.onreadystatechange = handleResponse21;
        xmlhttp21.open("GET", url21, true);
        xmlhttp21.send(null);
    }

    function set_temma() {

        xmlhttp = GetXmlHttpObject();

        var url = "set_temma.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Temma protocol was selected.";

    }

    function set_iOptron() {

        xmlhttp = GetXmlHttpObject();

        var url = "set_iOptron.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "iOptron protocol was selected.";

    }


    function set_nexstar() {

        xmlhttp = GetXmlHttpObject();

        var url = "set_nexstar.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "Nexstar/Skywatcher protocol was selected.";

    }

    function set_lx200() {

        xmlhttp = GetXmlHttpObject();

        var url = "set_lx200.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "LX200 protocol was selected.";

    }

    function set_TSX() {

        xmlhttp = GetXmlHttpObject();

        var url = "set_TSX.php";

        xmlhttp.onreadystatechange = handleResponse;
        xmlhttp.open("GET", url, true);
        xmlhttp.send(null);

        document.getElementById('returned_msg').innerHTML = "TheSkyX protocol was selected.";

    }


    function is_int(value) {
        if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
            return true;
        } else {
            return false;
        }
    }


    function handleResponse() {
        if (xmlhttp.readyState == 4) {
            st = xmlhttp.responseText;
            st = st.substr(0, 4);
            if (st == "AAAA") {
                document.getElementById('dithering').value = "Disable";
                document.getElementById('returned_msg').innerHTML = "Dithering was enabled.";
            }
            if (st == "DDDD") {
                document.getElementById('dithering').value = "Enable";
                document.getElementById('returned_msg').innerHTML = "Dithering was disabled.";
            }
        }
    }


    function handleResponse2() {
        if (xmlhttp2.readyState == 4) {
            st2 = xmlhttp2.responseText;
            st2 = st2.substr(0, 4);
            if (st2 == "AAAA") {
                document.getElementById('hattrick').value = "Disable";
                document.getElementById('returned_msg').innerHTML = "Auto Hat-trick was enabled.";
            }
            if (st2 == "DDDD") {
                document.getElementById('hattrick').value = "Enable";
                document.getElementById('returned_msg').innerHTML = "Auto Hat-trick was disabled.";
            }
        }
    }


    function handleResponse20() {
        if (xmlhttp20.readyState == 4) {
            st20 = xmlhttp20.responseText;
            st20 = st20.substr(0, 4);
            if (st20 == "AAAA") {
                document.getElementById('notify_imaging').value = "Disable";
            }
            if (st20 == "DDDD") {
                document.getElementById('notify_imaging').value = "Enable";
            }
        }
    }


    function handleResponse21() {
        if (xmlhttp21.readyState == 4) {
            st21 = xmlhttp21.responseText;
            st21 = st21.substr(0, 4);
            if (st21 == "AAAA") {
                document.getElementById('notify_guiding').value = "Disable";
            }
            if (st21 == "DDDD") {
                document.getElementById('notify_guiding').value = "Enable";
            }
        }
    }


    function handleResponse22() {
        if (xmlhttp22.readyState == 4) {
            st22 = xmlhttp22.responseText;
            st22 = st22.substr(0, 4);
            if (st22 == "AAAA") {
                document.getElementById('focuserlink').value = "Disable";
            }
            if (st22 == "DDDD") {
                document.getElementById('focuserlink').value = "Enable";
            }
        }
    }


    function handleResponse23() {
        if (xmlhttp23.readyState == 4) {
            st23 = xmlhttp23.responseText;
            st23 = st23.substr(0, 4);
            if (st23 == "AAAA") {
                document.getElementById('tts').value = "Disable";
            }
            if (st23 == "DDDD") {
                document.getElementById('tts').value = "Enable";
            }
        }
    }


    function handleResponse3() {
        if (xmlhttp3.readyState == 4) {
            var temptext = xmlhttp3.responseText;
            document.getElementById('returned_msg').innerHTML = temptext;
        }
    }


    function handleResponse4() {
        if (xmlhttp4.readyState == 4) {
            st4 = xmlhttp4.responseText;
            st4 = st4.substr(0, 4);
            if (st4 == "AAAA") {
                document.getElementById('download').value = "Disable";
                document.getElementById('returned_msg').innerHTML = "Image download was enabled.";
            }
            if (st4 == "DDDD") {
                document.getElementById('download').value = "Enable";
                document.getElementById('returned_msg').innerHTML = "Image download was disabled.";
            }
        }
    }


    function handleResponse5() {
        if (xmlhttp5.readyState == 4) {
            st5 = xmlhttp5.responseText;
            st5 = st5.substr(0, 4);
            if (st5 == "AAAA") {
                document.getElementById('mlu').value = "Disable Mirror Lock-Up";
                document.getElementById('returned_msg').innerHTML = "Mirror lock-up was enabled. Make sure that the function is also enabled in your camera. The FTDI-based shutter control cable is needed.";
            }
            if (st5 == "DDDD") {
                document.getElementById('mlu').value = "Enable Mirror Lock-Up";
                document.getElementById('returned_msg').innerHTML = "Mirror lock-up was disabled. Make sure that the function is also disabled in your camera.";
            }
        }
    }


    function handleResponse6() {
        if (xmlhttp6.readyState == 4) {
            var temptext6 = xmlhttp6.responseText;
            document.getElementById('gain').value = temptext6;
        }
    }


    function handleResponse7() {
        if (xmlhttp7.readyState == 4) {
            var temptext7 = xmlhttp7.responseText;
            document.getElementById('offset').value = temptext7;
        }
    }


    function handleResponse8() {
        if (xmlhttp8.readyState == 4) {
            var temptext8 = xmlhttp8.responseText;
            document.getElementById('delay').value = temptext8;
        }
    }


</script>
<div class="containers">
    <h2>启动系统，启动前确认连接好导星CCD，检查ST4线，检查USB线，用完记得先关机再拔电源</h2>
    <input type="button" value="启动App" onClick="javascript: startapp();" class="full_button">
    <!--
<p>
Focuser Link (for filter offset):
<?php
    if (file_exists('/home/pi/www/focuserlink')) {
        $btn_focuserlink = 'Press to Disable';
    } else {
        $btn_focuserlink = 'Press to Enable';
    }
    ?>
<input type="button" id="focuserlink" value="<?= htmlentities($btn_focuserlink) ?>" onClick="javascript: focuserlink();" style="background-color:#000000; color:#FF0000">

<p>
Auto Hat-trick (exposure time >= 30s):
<?php
    if (file_exists('/home/pi/www/hattrick')) {
        $btn_hattrick = 'Press to Disable';
    } else {
        $btn_hattrick = 'Press to Enable';
    }
    ?>
<input type="button" id="hattrick" value="<?= htmlentities($btn_hattrick) ?>" onClick="javascript: hattrick();" style="background-color:#000000; color:#FF0000">
-->
    <span class="rowText">抖动拍摄</span>
    <?php
    if (file_exists('/home/pi/www/dithering')) {
        $btn_dithering = '关闭（已开启）';
    } else {
        $btn_dithering = '开启（已关闭）';
    }
    ?>
    <input type="button" id="dithering" value="<?= htmlentities($btn_dithering) ?>"
           onClick="javascript: dithering();" class="full_button">
    <span class="rowText">日志管理</span>
    <input type="button" value="删除导星日志" onClick="javascript: clearguidinglog();" class="full_button">
    <!--
    <input type="button" value="Stop Apps" onClick="javascript: stopapp();" style="background-color:#000000; color:#FF0000">
    <p>
    -->
</div>

<div class="containers">
    <h2>单反选择</h2>
    <span class="rowText">单反类型:</span>
    <input type="button" value="Canon 1000D and Nikon" onClick="javascript: setdslr3();"
           class="full_button">
    <input type="button" value="Canon 6D/60D/550D/1100D" onClick="javascript: setdslr2();" class="full_button">
    <input type="button" value="Canon 40D" onClick="javascript: setdslr1();" class="half_button">
    <input type="button" value="Pentax" onClick="javascript: setdslr5();" class="half_button">

    <input type="button" value="FTDI-(ttyUSB0)" onClick="javascript: setdslr6();"
           class="half_button">
    <input type="button" value="FTDI-(ttyUSB1)" onClick="javascript: setdslr7();"
           class="half_button">

    <span class="rowText">FTDI 驱动（D5100这种附加快门线用）:</span>
    <input type="button" value="加载" onClick="javascript: ftdi_load();"
           class="half_button">
    <input type="button" value="卸载" onClick="javascript: ftdi_unload();"
           class="half_button">
    <!--
<?php
    if (file_exists('/home/pi/www/mlu')) {
        $btn_mlu = 'Press to Disable Mirror Lock-Up';
    } else {
        $btn_mlu = 'Press to Enable Mirror Lock-Up';
    }
    ?>
<input type="button" id="mlu" value="<?= htmlentities($btn_mlu) ?>" onClick="javascript: mlu();" style="background-color:#000000; color:#FF0000">
-->
    <span class="rowText">自动下载图片，建议开启</span>
    <?php
    if (file_exists('/home/pi/www/download')) {
        $btn_download = '关闭（已开启）';
    } else {
        $btn_download = '开启（已关闭）';
    }
    ?>
    <input type="button" id="download" value="<?= htmlentities($btn_download) ?>" onClick="javascript: download();"
           class="full_button">
</div>

<div class="containers">
    <h2>图像盲解析</h2>
    <span class="rowText">最小 FOV (角度)</span>
    <select name="FOV" id="FOV" style="background-color:#000000; color:#FF0000">
        <option value="0.1">0.1</option>
        <option value="0.2">0.2</option>
        <option value="0.5">0.5</option>
        <option value="1.0">1.0</option>
        <option value="2.0">2.0</option>
        <option value="5.0">5.0</option>
        <option value="10">10</option>
    </select>
    <input type="button" value="Set" onClick="javascript: setFOV(document.getElementById('FOV').value);"
           class="half_button">
    <input type="button" value="查看盲解析日志" onclick="window.open('astrometry.txt');" class="full_button">

    <h2>选择赤道仪:</h2>
    <input type="button" value="iOptron" onClick="javascript: set_iOptron();"
           class="half_button">
    <input type="button" value="LX200" onClick="javascript: set_lx200();" class="half_button">
    <input type="button" value="Nexstar/Skywatcher" onClick="javascript: set_nexstar();" class="full_button">
<!--    <input type="button" value="TheSkyX" onClick="javascript: set_TSX();" class="half_button">-->

    <h2>文件管理</h2>
    <input type="button" value="加载U盘" onClick="javascript: mount();"
           class="half_button">
    <input type="button" value="卸载U盘" onClick="javascript: unmount();"
           class="half_button">
    <input type="button" value="下载图片到U盘" onClick="javascript: downloadimages();"
           class="full_button">
    <input type="button" value="文件状态查看" onClick="javascript: file_getStatus();"
           class="half_button">
    <input type="button" value="删除图片" onClick="javascript: deleteimages();"
           class="half_button">
</div>

<div class="containers">
    <h2>系统设置</h2>
    <span class="rowText">WIFI SSID<span class="right">&nbsp;密码</span></span>
    <input type="text" size="15" value="" name="net_name" id="net_name"/>
    <input type="text" size="15" value="" placeholder="大于8个字符" name="net_pwd" id="net_pwd"/>
    <input type="button" value="设置"
           onClick="javascript: setNetwork(document.getElementById('net_name').value,document.getElementById('net_pwd').value);"
           class="full_button">
    <!--
    <p>
    <input type="button" value="Start/Restart Pagekite" onClick="javascript: startPK();" style="background-color:#000000; color:#FF0000">
    -->
    <span class="rowText">VNC 服务</span>
    <input type="button" value="启动VNC" onClick="javascript: vnc();"
           class="full_button">
    <input type="button" value="VNC for LinGuider/Skychart"
           onclick="window.open('noVNC/vnc.html?autoconnect=true&host=10.0.0.1&port=5551');" class="full_button">
    <input type="button" value="系统信息" onclick="window.open('sysinfo/index.php');" class="half_button">
    <input type="button" value="U盘升级更新" onClick="javascript: uploadpatch();" class="half_button">
    <input type="button" value="重启" onClick="javascript: reboot();"
           class="full_button">
    <input type="button" value="关机" onClick="javascript: shutdown();"
           class="full_button">
</div>

<pre STYLE="font-size: large">
<span id="returned_msg"></span>
</pre>

</body>
</html>
