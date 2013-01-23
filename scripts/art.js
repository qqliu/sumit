function onLoad() {
    var afir = readCookie("ar1");
    
    if (afir != null) {
        writeCookie("art-active-node", true);
        document.location = "index.php";
    }
}
