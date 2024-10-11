setInterval(function () {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    var hour = today.getHours();
    var minute = today.getMinutes();

    if (hour < 10) {
        hour = '0' + hour;
    }

    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    today = mm + '/' + dd + '/' + yyyy;
    document.getElementById("date").innerHTML = today;

    if (minute < 10) {
        minute = '0' + minute;
    }

    if (hour < 12) {
        time = hour + ':' + minute + ' AM';
    } else {
        time = (hour - 12) + ':' + minute + ' PM';
    }
    document.getElementById("time").innerHTML = time;
}, 250);