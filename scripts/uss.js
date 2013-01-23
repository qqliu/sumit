function onLoad() {
    var ussc = readCookie("usscorrect");
    
    if(ussc!=null) {
        writeCookie("uss-active-node", true);
        document.location = "index.php";
    }
}