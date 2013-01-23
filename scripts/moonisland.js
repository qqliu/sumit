function onLoad() {
    var mfir = readCookie("mi1");
    var msec = readCookie("mi2");
    var mthi = readCookie("mi3");
    var mfou = readCookie("mi4");
    var mfif = readCookie("mi5");
    var msit = readCookie("mi6");
    
    if (mfir != null) {
        makeMark('moon-check-1');
    }
    else {
        makeMark('moon-cross-1');
    }
    
    if (msec != null) {
        makeMark("moon-check-2");
    }
    else {
        makeMark("moon-cross-2");
    }
    
    if (mthi != null) {
        makeMark("moon-check-3");
    }
    else {
        makeMark("moon-cross-3");
    }
    
    if (mfou != null) {
        makeMark("moon-check-4");
    }
    else {
        makeMark("moon-cross-4");
    }
    
    if (mfif != null) {
        makeMark("moon-check-5");
    }
    else {
        makeMark("moon-cross-5");
    }
    
    if (msit != null) {
        makeMark("moon-check-6");
    }
    else {
        makeMark("moon-cross-6");
    }
    
    if(mfir!=null && msec!=null && mthi!=null && mfou!=null && mfif!=null && msit!=null) {
        writeCookie("moon-island-active-node", true);
        document.location = "index.php";
    }
}