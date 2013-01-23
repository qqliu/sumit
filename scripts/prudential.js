function onLoad() {
    var prfir = readCookie("pr1");
    var prsec = readCookie("pr2");
    var prthi = readCookie("pr3");
    var prfou = readCookie("pr4");
    var prfif = readCookie("pr5");
    var prsit = readCookie("pr6");
    var prsev = readCookie("pr7");
    
    if(prfir!=null && prsec!=null && prthi!=null && prfou!=null && prfif!=null && prsit!=null && prsev!=null) {
        writeCookie("prudential-active-node", true);
        document.location = "index.php";
    }
}
