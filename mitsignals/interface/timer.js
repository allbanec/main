function get_timer_325(string_was_325, string_sec_325) {
    var date_new_was_325 = new Date(string_was_325);
    var date_new_sec_325 = string_sec_325;
    var date_325 = new Date();
    var razn_325, left_325, left_n_325, vraz_325, ost_325;
    razn_325 = date_325 - date_new_was_325;
    left_325 = date_new_sec_325 - razn_325;
    if (left_325 > 0) {
        left_n_325 = left_325;
    } else {
        if (Math.abs(left_325) > date_new_sec_325) {
            vraz_325 = (Math.abs(left_325)) / date_new_sec_325;
            vraz_325 = vraz_325.toString().split(".");
            left_n_325 = Math.abs(left_325) - (vraz_325[0]) * date_new_sec_325;
            left_n_325 = date_new_sec_325 - left_n_325;
        } else {
            left_n_325 = date_new_sec_325 - Math.abs(left_325);
        }
    }
    ost_325 = left_n_325;
    var day_325 = parseInt(ost_325 / (60 * 60 * 1000 * 24));
    if (day_325 < 10) {
        day_325 = "0" + day_325;
    }
    day_325 = day_325.toString();
    var hour_325 = parseInt(ost_325 / (60 * 60 * 1000)) % 24;
    if (hour_325 < 10) {
        hour_325 = "0" + hour_325;
    }
    hour_325 = hour_325.toString();
    var min_325 = parseInt(ost_325 / (1000 * 60)) % 60;
    if (min_325 < 10) {
        min_325 = "0" + min_325;
    }
    min_325 = min_325.toString();
    var sec_325 = parseInt(ost_325 / 1000) % 60;
    if (sec_325 < 10) {
        sec_325 = "0" + sec_325;
    }
    sec_325 = sec_325.toString();
    timethis_325 = day_325 + " : " + hour_325 + " : " + min_325 + " : " + sec_325;
    //$(".count-down .result .result-day").text(day_325);
    $(".count-down .result-hour").text(hour_325);
    $(".count-down .result-minute").text(min_325);
    $(".count-down .result-second").text(sec_325);
}
function getfrominputs_325() {
    string_was_325 = "Fri Jul 24 2015 12:27:33 GMT+0300 (RTZ 2 (зима))";
    string_sec_325 = "59900";
    get_timer_325(string_was_325, string_sec_325);
    setInterval(function () {
        get_timer_325(string_was_325, string_sec_325);
    }, 1000);
}
$(document).ready(function () {
    getfrominputs_325();
});
