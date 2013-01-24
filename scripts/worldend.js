function onLoad() {
    var fir = readCookie("fc1");
    var sec = readCookie("fc2");
    var thi = readCookie("fc3");
    var fou = readCookie("fc4");
    var fif = readCookie("fc5");
    var sit = readCookie("fc6");
    var sev = readCookie("fc7");
    var eig = readCookie("fc8");
    var nin = readCookie("fc9");
        
    if(fir!=null && sec!=null && thi!=null && fou!=null && fif!=null && sit!=null && sev!=null && eig!=null && nin!=null) {
        writeCookie("world-end-active-node", true);
        document.location = "index.php";
    }
}