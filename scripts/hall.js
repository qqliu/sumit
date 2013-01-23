function onLoad() {
    var hfir = readCookie("ha1");
    var hsec = readCookie("ha2");
    var hthi = readCookie("ha3");
    var hfou = readCookie("ha4");
    var hfif = readCookie("ha5");
    var hsit = readCookie("ha6");
    var hsev = readCookie("ha7");
    var heig = readCookie("ha8");
    var hnin = readCookie("ha9");
    var hten = readCookie("ha10");
    
    if(hfir!=null && hsec!=null && hthi!=null && hfou!=null && hfif!=null && hsit!=null && hsev!=null && heig!=null && hnin!=null && hten!=null) {
        writeCookie("hall-active-node", true);
        document.location = "index.php";
    }
}
