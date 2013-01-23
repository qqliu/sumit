function onLoad() {
    var cfir = readCookie("co1");
    var csec = readCookie("co2");
    var cthi = readCookie("co3");
    var cfou = readCookie("co4");
    var cfif = readCookie("co5");
    var csit = readCookie("co6");
    var csev = readCookie("co7");
    var ceig = readCookie("co8");
    
    if(cfir!=null && csec!=null && cthi!=null && cfou!=null && cfif!=null && csit!=null && csev!=null && ceig!=null) {
        writeCookie("hancock-active-node", true);
        document.location = "index.php";
    }
}
