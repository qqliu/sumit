function checkAnswer(input, ans) {
    if (input == ans) {
        return true;
    }
    
    else {
        return false;
    }
}

function makeMark(markname) {
    document.getElementById(markname).style.visibility="visible";
}

function activateNode(nodename) {
    document.getElementById(nodename).style.visibility = "visible";
}

function changeValue(name, value) {
    document.getElementsByName(name).value=value;
}

function writeCookie(cookieName, data) {
    var exDate = new Date();
    if (data == '') {
        exDate.setDate(exDate.getDate() - 1);
    } else {
        exDate.setDate(exDate.getDate() + 7);
    }
    document.cookie = cookieName+'='+data+'; expires='+exDate+'; path=/';
}

function readCookie(cookieName) {
    var start = document.cookie.indexOf(cookieName + '=');
    if (start != -1) {
        start = start + cookieName.length + 1
        var end = document.cookie.indexOf(';', start);
        if (end == -1) {
            end = document.cookie.length;
        }
        var content = unescape(document.cookie.substring(start, end));
        if (content != '') {
            return content;
        }
        return null;
    }
    return null;
}