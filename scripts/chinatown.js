function onLoad() {
    var cfir = readCookie("ch1");
    
    if (cfir != null) {
        writeCookie("chinatown-active-node", true);
        document.location = "index.php";
    }
}