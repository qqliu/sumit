function onLoad() {
    var gfir = readCookie("ga1");
    var gsec = readCookie("ga2");
    var gthi = readCookie("ga3");
    var gfou = readCookie("ga4");
    
    if(gfir!=null && gsec!=null && gthi!=null && gfou!=null) {
        writeCookie("garden-active-node", true);
        document.location = "index.php";
    }
}
