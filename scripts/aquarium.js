function onLoad() {
    var afir = readCookie("aq1");
    var asec = readCookie("aq2");
    var athi = readCookie("aq3");
    var afou = readCookie("aq4");
    var afif = readCookie("aq5");
    var asit = readCookie("aq6");
    
    if(afir!=null && asec!=null && athi!=null && afou!=null && afif!=null && asit!=null) {
        writeCookie("aquarium-active-node", true);
        document.location = "index.php";
    }
}
