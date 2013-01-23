function onLoad() {
    var lifir = readCookie("is1");
    var lisec = readCookie("is2");
    var lithi = readCookie("is3");
    var lifou = readCookie("is4");
    var lifif = readCookie("is5");
    var lisit = readCookie("is6");
    
    if(lifir!=null && lisec!=null && lithi!=null && lifou!=null && lifif!=null && lisit!=null) {
        writeCookie("island-active-node", true);
        document.location = "index.php";
    }
}
