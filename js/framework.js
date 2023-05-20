// Date and time start
function addZero(i) {
    if (i < 10) {
        return "0" + i;
    } else {
        return i;
    }
}

function displayTime() {
    let topCalendar = new Date;
    document.querySelector(".index-header-timer-content").innerHTML = " " + (topCalendar.getMonth() + 1) + "/" + topCalendar.getDate() + "&nbsp;&nbsp;" + addZero(topCalendar.getHours()) + ":" + addZero(topCalendar.getMinutes()) + ":" + addZero(topCalendar.getSeconds());
    setTimeout(displayTime, 1000);
    return 0;
}
// Date and time stop

// Buttons
function jumpTo404OC() {
    window.location.href = "404.html";
    return 0;
}