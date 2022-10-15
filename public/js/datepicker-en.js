$(document).ready(function() {
    var start = moment();

    function cb(start) {
        var $date_reservation = start.format("YYYY-MM-DD");

        console.log($date_reservation);
        var $current = $(".nav-tabs .active").attr("role");
        if ($current == "simple")
            $("#simple .date_reservation").val($date_reservation);
        else $("#hourly_form .date_reservation").val($date_reservation);

        $(".reportrange span").html(start.format("MMMM D, YYYY"));
    }

    // display server time : hours  on select box
    var my_hour = isParis ?
        new Date().getUTCHours() + 1 :
        new Date().getUTCHours();

    if (my_hour == 24 || my_hour == 0) {
        $("select[name='hours']").prop("selectedIndex", 0);
        my_hour = 00;
    }

    $("select[name='hours']").val(my_hour);

    // display server time : minutes nearest 5  on select box
    var ROUNDING = 5 * 60 * 1000;
    start = moment();
    start = moment(Math.ceil(+start / ROUNDING) * ROUNDING);
    var real_minutes = new Date().getUTCMinutes();

    // test if hour is near 00
    if (real_minutes >= 55) {

        if (my_hour == 23) {
            $("select[name='hours']").prop("selectedIndex", 0);
        } else {
            $("select[name='hours']").prop("selectedIndex", my_hour + 1);
        }

        $("select[name='minutes']").prop("selectedIndex", 0);
    } else if (real_minutes < 05) {
        $("select[name='minutes']").prop("selectedIndex", 1);
    } else {
        $("select[name='minutes']").val(start.format("mm"));
    }

    $(".reportrange").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minDate: moment().format("YYYY-MM-DD"),
            maxDate: "2030-01-01",
            locale: {
                format: "YYYY-MM-DD",
            },
        },
        cb
    );

    cb(start);
});