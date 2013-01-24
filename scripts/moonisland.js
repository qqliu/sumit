function onLoad() {
    var mfir = readCookie("mi1");
    var msec = readCookie("mi2");
    var mthi = readCookie("mi3");
    var mfou = readCookie("mi4");
    var mfif = readCookie("mi5");
    var msit = readCookie("mi6");
    
    if(mfir!=null && msec!=null && mthi!=null && mfou!=null && mfif!=null && msit!=null) {
        writeCookie("moon-island-active-node", true);
        document.location = "index.php";
    }
}