function onLoad() {
    var fir = readCookie("fc1");
    var sec = readCookie("fc2");
    var thi = readCookie("fc3");
    var fou = readCookie("fc4");
    var fif = readCookie("fc5");
    var sit = readCookie("fc6");
    var sev = readCookie("fc7");
    if (fir != null) {
        makeMark('end-check-1');
    }
    else {
        makeMark('end-cross-1');
    }
    
    if (sec != null) {
        makeMark("end-check-2");
    }
    else {
        makeMark("end-cross-2");
    }
    
    if (thi != null) {
        makeMark("end-check-3");
    }
    else {
        makeMark("end-cross-3");
    }
    
    if (fou != null) {
        makeMark("end-check-4");
    }
    else {
        makeMark("end-cross-4");
    }
    
    if (fif != null) {
        makeMark("end-check-5");
    }
    else {
        makeMark("end-cross-5");
    }
    
    if (sit != null) {
        makeMark("end-check-6");
    }
    else {
        makeMark("end-cross-6");
    }
    
    if (sev != null) {
        makeMark("end-check-7");
    }
    else {
        makeMark("end-cross-7");
    }
    
    if(fir!=null && sec!=null && thi!=null && fou!=null && fif!=null && sit!=null && sev!=null) {
        writeCookie("world-end-active-node", true);
        document.location = "index.php";
    }
}