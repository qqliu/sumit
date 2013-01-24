function onLoad() {
    var lifir = readCookie("li1");
    var lisec = readCookie("li2");
    var lithi = readCookie("li3");
    var lifou = readCookie("li4");
    var lifif = readCookie("li5");
    var lisit = readCookie("li6");
    
    if(lifir!=null && lisec!=null && lithi!=null && lifou!=null && lifif!=null && lisit!=null) {
        writeCookie("island-active-node", true);
        document.location = "index.php";
    }
}
