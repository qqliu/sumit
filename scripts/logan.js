function onLoad() {
    var ussc = readCookie("usscorrect");
    
    if(ussc!=null) {
        writeCookie("logan-active-node", true);
        document.location = "index.php";
    }
}