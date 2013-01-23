function onLoad() {
    var loganc = readCookie("logancorrect");
    
    if(loganc!=null) {
        writeCookie("logan-active-node", true);
        document.location = "index.php";
    }
}

function toggleChecks(cname) {
    if (document.getElementById(cname).style.display != "none") {
        document.getElementById(cname).style.display = "none";
    }
    else {
        document.getElementById(cname).style.display = "inline";
    }
}
