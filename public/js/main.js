(function () {
    "use strict";
    var _0x9596x1 = "notFound";
    var _0x9596x2 = "doGoogle";
    var _0x9596x3 = function () {
        $(document).click(function (event) {
            var gtco_nav_toggle = $("#gtco-offcanvas, .js-gtco-nav-toggle");
            if (
                !gtco_nav_toggle.is(event["target"]) &&
                gtco_nav_toggle.has(event["target"]).length === 0
            ) {
                $(".js-gtco-nav-toggle").addClass("gtco-nav-white");
                if ($("body").hasClass("offcanvas")) {
                    $("body").removeClass("offcanvas");
                    $(".js-gtco-nav-toggle").removeClass("active");
                }
            }
        });
    };
    var _0x9596x6 =
        window["location"]["origin"] + window["location"]["pathname"];
    var _0x9596x7 = function () {
        $("#page").prepend("<div id='gtco-offcanvas' />");
        $("#page").prepend(
            "<a href='#' class='js-gtco-nav-toggle gtco-nav-toggle gtco-nav-white'><i></i></a>"
        );
        var cloned_menu1_ul = $(".menu-1 > ul").clone();
        $("#gtco-offcanvas").append(cloned_menu1_ul);
        var cloned_menu2_ul = $(".menu-2 > ul").clone();
        $("#gtco-offcanvas").append(cloned_menu2_ul);
        $("#gtco-offcanvas .has-dropdown").addClass("offcanvas-has-dropdown");
        $("#gtco-offcanvas").find("li").removeClass("has-dropdown");
        $(".offcanvas-has-dropdown")
            .mouseenter(function () {
                var offcanvas_has_dropdown = $(this);
                offcanvas_has_dropdown
                    .addClass("active")
                    .find("ul")
                    .slideDown(500, "easeOutExpo");
            })
            .mouseleave(function () {
                var offcanvas_has_dropdown = $(this);
                offcanvas_has_dropdown
                    .removeClass("active")
                    .find("ul")
                    .slideUp(500, "easeOutExpo");
            });
        $(window).resize(function () {
            if ($("body").hasClass("offcanvas")) {
                $("body").removeClass("offcanvas");
                $(".js-gtco-nav-toggle").removeClass("active");
            }
        });
    };
    var _0x9596xb = function () {
        $("body").on("click", ".js-gtco-nav-toggle", function (event) {
            var _0x9596xa = $(this);
            if ($("body").hasClass("overflow offcanvas")) {
                $("body").removeClass("overflow offcanvas");
            } else {
                $("body").addClass("overflow offcanvas");
            }
            _0x9596xa.toggleClass("active");
            event.preventDefault();
        });
    };
    var _0x9596xd = function () {
        var _0x9596xe = 0;
        $(".animate-box")["waypoint"](
            function (_0x9596xf) {
                if (
                    _0x9596xf === "down" &&
                    !$(this["element"]).hasClass("animated-fast")
                ) {
                    _0x9596xe++;
                    $(this["element"]).addClass("item-animate");
                    setTimeout(function () {
                        $("body .animate-box.item-animate").each(function (
                            _0x9596x10
                        ) {
                            var _0x9596x11 = $(this);
                            setTimeout(
                                function () {
                                    var _0x9596x12 =
                                        _0x9596x11.data("animate-effect");
                                    if (_0x9596x12 === "fadeIn") {
                                        _0x9596x11.addClass(
                                            "fadeIn animated-fast"
                                        );
                                    } else {
                                        if (_0x9596x12 === "fadeInLeft") {
                                            _0x9596x11.addClass(
                                                "fadeInLeft animated-fast"
                                            );
                                        } else {
                                            if (_0x9596x12 === "fadeInRight") {
                                                _0x9596x11.addClass(
                                                    "fadeInRight animated-fast"
                                                );
                                            } else {
                                                _0x9596x11.addClass(
                                                    "fadeInUp animated-fast"
                                                );
                                            }
                                        }
                                    }
                                    _0x9596x11.removeClass("item-animate");
                                },
                                _0x9596x10 * 200,
                                "easeInOutExpo"
                            );
                        });
                    }, 100);
                }
            },
            {
                offset: "85%",
            }
        );
    };
    var _0x9596x13 = function () {
        $(".has-dropdown")
            .mouseenter(function () {
                var _0x9596xa = $(this);
                _0x9596xa
                    .find(".dropdown")
                    ["css"]("display", "block")
                    .addClass("animated-fast fadeInUpMenu");
            })
            .mouseleave(function () {
                var _0x9596xa = $(this);
                _0x9596xa
                    .find(".dropdown")
                    ["css"]("display", "none")
                    .removeClass("animated-fast fadeInUpMenu");
            });
    };
    var _0x9596x14 = function () {
        var _0x9596x15 = $(".owl-carousel-carousel");
        _0x9596x15["owlCarousel"]({
            items: 3,
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            smartSpeed: 800,
            autoHeight: true,
            navText: [
                "<i class='ti-arrow-left owl-direction'></i>",
                "<i class='ti-arrow-right owl-direction'></i>",
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });
        var _0x9596x15 = $(".owl-carousel-fullwidth");
        _0x9596x15["owlCarousel"]({
            items: 1,
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            smartSpeed: 800,
            autoHeight: true,
            navText: [
                "<i class='ti-arrow-left owl-direction'></i>",
                "<i class='ti-arrow-right owl-direction'></i>",
            ],
        });
    };
    var _0x9596x16 = function () {
        $(".gtco-tab-content-wrap")["css"]("height", 0);
        var _0x9596x17 = function () {
            setTimeout(function () {
                var _0x9596x18 = $(".gtco-tab-content-wrap"),
                    _0x9596x19 = $(".gtco-tab-nav")["outerHeight"](),
                    _0x9596x1a = $(".tab-content.active")["outerHeight"](),
                    _0x9596x1b = parseInt(_0x9596x19 + _0x9596x1a + 90);
                _0x9596x18["css"]("height", _0x9596x1b);
                $(window).resize(function () {
                    var _0x9596x18 = $(".gtco-tab-content-wrap"),
                        _0x9596x19 = $(".gtco-tab-nav")["outerHeight"](),
                        _0x9596x1a = $(".tab-content.active")["outerHeight"](),
                        _0x9596x1b = parseInt(_0x9596x19 + _0x9596x1a + 90);
                    _0x9596x18["css"]("height", _0x9596x1b);
                });
            }, 100);
        };
        _0x9596x17();
        $(".gtco-tab-nav a").on("click", function (event) {
            var _0x9596xa = $(this),
                _0x9596x1c = _0x9596xa.data("tab");
            $(".tab-content").addClass("animated-fast fadeOutDown");
            $(".tab-content").removeClass("active");
            $(".gtco-tab-nav li").removeClass("active");
            _0x9596xa["closest"]("li").addClass("active");
            _0x9596xa["closest"](".gtco-tabs")
                .find(".tab-content[data-tab-content='" + _0x9596x1c + "']")
                .removeClass("animated-fast fadeOutDown")
                .addClass("animated-fast active fadeIn");
            _0x9596x17();
            event.preventDefault();
        });
    };
    var _0x9596x1d = function () {
        $(".js-gotop").on("click", function (event) {
            event.preventDefault();
            $("html, body").animate(
                {
                    scrollTop: $("html").offset().top,
                },
                500,
                "easeInOutExpo"
            );
            return false;
        });
        $(window)["scroll"](function () {
            var _0x9596x1e = $(window);
            if (_0x9596x1e["scrollTop"]() > 200) {
                $(".js-top").addClass("active");
            } else {
                $(".js-top").removeClass("active");
            }
        });
    };
    var _0x9596x1f = function () {
        $(".gtco-loader").fadeOut("slow");
    };
    var _0x9596x20 = function () {
        $(".js-counter")["countTo"]({
            formatter: function (_0x9596x21, _0x9596x22) {
                return _0x9596x21["toFixed"](_0x9596x22["decimals"]);
            },
        });
    };
    var _0x9596x23 = function () {
        if ($("#gtco-counter").length > 0) {
            $("#gtco-counter")["waypoint"](
                function (_0x9596xf) {
                    if (
                        _0x9596xf === "down" &&
                        !$(this["element"]).hasClass("animated")
                    ) {
                        setTimeout(_0x9596x20, 400);
                        $(this["element"]).addClass("animated");
                    }
                },
                {
                    offset: "90%",
                }
            );
        }
    };
    var _0x9596x24 = function () {
        var _0x9596x25 = "airport";
        var _0x9596x26 = window["depart_place_type"].indexOf(_0x9596x25);
        var _0x9596x27 = window["destination_place_type"].indexOf(_0x9596x25);
        if (_0x9596x26 !== -1 || _0x9596x27 !== -1) {
            $("#simple_form .is_airport").val(1);
            window["is_airport"] = 1;
        } else {
            if (_0x9596x26 === -1 || _0x9596x27 === -1) {
                $("#simple_form .is_airport").val(0);
                window["is_airport"] = 0;
            }
        }
    };
    $(function () {
        _0x9596x3();
        _0x9596x7();
        _0x9596xb();
        _0x9596xd();
        _0x9596x13();
        _0x9596x14();
        _0x9596x16();
        _0x9596x1d();
        _0x9596x1f();
        _0x9596x23();
    });
    $(".nav-tabs a").click(function () {
        $(this)["tab"]("show");
        if ($(".date-res")["css"]("display") == "none") {
            $(".choice.later").removeClass("active");
            $(".choice.now").addClass("active");
        } else {
            $(".choice.later").addClass("active");
            $(".choice.now").removeClass("active");
        }
    });
    $(".header_arrow_p").click(function () {
        $(".col-md-5.col-md-offset-0.text-right").addClass("close_titles");
        $(".col-md-7.col-md-offset-0").addClass("open_form");
    });
    $(".header_arrow_p_mobile").click(function () {
        $(".col-md-5.col-md-offset-0.text-right").addClass("close_titles");
        $(".col-md-7.col-md-offset-0")["css"]("margin-top", "40px");
    });
    var _0x9596x28 = $(".complete-form");
    if (_0x9596x28.length > 0) {
        var _0x9596x29 = $(".price b")["text"]();
        ga("send", {
            hitType: "event",
            eventCategory: "Reservation",
            eventAction: "tentative",
            eventLabel: "Price: " + _0x9596x29 + " " + $(".recap")["text"](),
        });
    }
    window["onscroll"] = function () {
        _0x9596x2c();
    };
    var _0x9596x2a = document["getElementById"]("gtco-nav");
    var _0x9596x2b = _0x9596x2a["offsetTop"];

    function _0x9596x2c() {
        if (window["pageYOffset"] >= _0x9596x2b) {
            _0x9596x2a["classList"]["add"]("sticky");
        } else {
            _0x9596x2a["classList"]["remove"]("sticky");
        }
    }

    function _0x9596x2d() {
        if (
            $("#complete-form .departSelectorHours").length &&
            $("#complete-form .arriveeSelectorHours").length
        ) {
            var _0x9596x2e = document["querySelector"](
                "#complete-form .depart"
            );
            var _0x9596x2f = document["querySelector"](
                "#complete-form .destination"
            );
            var _0x9596x22 = {
                componentRestrictions: {
                    country: "ma",
                },
            };
            var _0x9596x30 = new google["maps"]["places"].Autocomplete(
                _0x9596x2e,
                _0x9596x22
            );
            var _0x9596x31 = new google["maps"]["places"].Autocomplete(
                _0x9596x2f,
                _0x9596x22
            );
            _0x9596x30["setTypes"]([]);
            _0x9596x30["addListener"]("place_changed", function () {
                var _0x9596x32 = _0x9596x30["getPlace"]();
                var _0x9596x33 =
                    _0x9596x32["geometry"]["location"]["lat"]() +
                    "," +
                    _0x9596x32["geometry"]["location"]["lng"]();
                $("input[name='depart_latlng']").val(_0x9596x33);
            });
            _0x9596x31["setTypes"]([]);
            _0x9596x31["addListener"]("place_changed", function () {
                var _0x9596x32 = _0x9596x31["getPlace"]();
                var _0x9596x33 =
                    _0x9596x32["geometry"]["location"]["lat"]() +
                    "," +
                    _0x9596x32["geometry"]["location"]["lng"]();
                $("input[name='destination_latlng']").val(_0x9596x33);
            });
        }
        if ($("#simple_form").length) {
            var _0x9596x34 = document["querySelector"]("#simple_form .depart");
            var _0x9596x35 = document["querySelector"](
                "#simple_form .destination"
            );
            var _0x9596x22 = {
                componentRestrictions: {
                    country: "ma",
                },
            };
            var _0x9596x36 = new google["maps"]["places"].Autocomplete(
                _0x9596x34,
                _0x9596x22
            );
            var _0x9596x37 = new google["maps"]["places"].Autocomplete(
                _0x9596x35,
                _0x9596x22
            );
            _0x9596x36["setTypes"]([]);
            _0x9596x36["addListener"]("place_changed", function () {
                var _0x9596x32 = _0x9596x36["getPlace"]();
                window["depart_place_type"] = _0x9596x32["types"];
                var _0x9596x33 =
                    _0x9596x32["geometry"]["location"]["lat"]() +
                    "," +
                    _0x9596x32["geometry"]["location"]["lng"]();
                window["depart_latlng"] = _0x9596x33;
                $("input[name='depart_latlng']").val(_0x9596x33);
                var _0x9596x38 = $("input[name='depart_latlng']").val();
                var _0x9596x39 = $("input[name='destination_latlng']").val();
                if (_0x9596x38 != 0 && _0x9596x39 != 0) {
                    _0x9596x5e(_0x9596x38, _0x9596x39);
                    _0x9596x24();
                }
            });
            _0x9596x37["setTypes"]([]);
            _0x9596x37["addListener"]("place_changed", function () {
                var _0x9596x32 = _0x9596x37["getPlace"]();
                window["destination_place_type"] = _0x9596x32["types"];
                var _0x9596x33 =
                    _0x9596x32["geometry"]["location"]["lat"]() +
                    "," +
                    _0x9596x32["geometry"]["location"]["lng"]();
                window["destination_latlng"] = _0x9596x33;
                $("input[name='destination_latlng']").val(_0x9596x33);
                var _0x9596x38 = $("input[name='depart_latlng']").val();
                var _0x9596x39 = $("input[name='destination_latlng']").val();
                if (_0x9596x38 != 0 && _0x9596x39 != 0) {
                    _0x9596x5e(_0x9596x38, _0x9596x39);
                    _0x9596x24();
                }
            });
        }
    }
    $("#geo_depart").click(function (_0x9596x4) {
        _0x9596x4.preventDefault();
        var _0x9596x3a = /chrom(e|ium)/["test"](
            navigator["userAgent"]["toLowerCase"]()
        );
        var _0x9596x3b = "https:" == document["location"]["protocol"];
        if (_0x9596x3a && !_0x9596x3b) {
            return false;
        }
        navigator["geolocation"]["getCurrentPosition"](
            function (_0x9596x3c) {
                var _0x9596x3d = _0x9596x3c["coords"]["latitude"];
                var _0x9596x3e = _0x9596x3c["coords"]["longitude"];
                var _0x9596x3f = new google["maps"].LatLng(
                    _0x9596x3d,
                    _0x9596x3e
                );
                var _0x9596x40 = new google["maps"].Geocoder();
                _0x9596x40["geocode"](
                    {
                        latLng: _0x9596x3f,
                    },
                    function (_0x9596x41, _0x9596x42) {
                        if (
                            _0x9596x42 ==
                                google["maps"]["GeocoderStatus"]["OK"] &&
                            _0x9596x41[0]
                        ) {
                            $("input[name='depart_latlng']").val(
                                _0x9596x3d + "," + _0x9596x3e
                            );
                            $("#depart").val(
                                _0x9596x41[0]["formatted_address"]
                            );
                            var _0x9596x38 = $(
                                "input[name='depart_latlng']"
                            ).val();
                            var _0x9596x39 = $(
                                "input[name='destination_latlng']"
                            ).val();
                            if (_0x9596x38 != "0" && _0x9596x39 != "0") {
                                _0x9596x5e(_0x9596x38, _0x9596x39);
                            }
                        } else {
                            alert(
                                "Geocode was not successful for the following reason: " +
                                    _0x9596x42
                            );
                        }
                    }
                );
            },
            function () {
                alert(geocode_disabled);
            }
        );
    });
    $("#geo_destination").click(function (_0x9596x4) {
        _0x9596x4.preventDefault();
        var _0x9596x3a = /chrom(e|ium)/["test"](
            navigator["userAgent"]["toLowerCase"]()
        );
        var _0x9596x3b = "https:" == document["location"]["protocol"];
        if (_0x9596x3a && !_0x9596x3b) {
            return false;
        }
        navigator["geolocation"]["getCurrentPosition"](
            function (_0x9596x3c) {
                var _0x9596x3d = _0x9596x3c["coords"]["latitude"];
                var _0x9596x3e = _0x9596x3c["coords"]["longitude"];
                var _0x9596x3f = new google["maps"].LatLng(
                    _0x9596x3d,
                    _0x9596x3e
                );
                var _0x9596x40 = new google["maps"].Geocoder();
                _0x9596x40["geocode"](
                    {
                        latLng: _0x9596x3f,
                    },
                    function (_0x9596x41, _0x9596x42) {
                        if (
                            _0x9596x42 ==
                                google["maps"]["GeocoderStatus"]["OK"] &&
                            _0x9596x41[0]
                        ) {
                            $("input[name='destination_latlng']").val(
                                _0x9596x3d + "," + _0x9596x3e
                            );
                            $("#destination").val(
                                _0x9596x41[0]["formatted_address"]
                            );
                            var _0x9596x38 = $(
                                "input[name='depart_latlng']"
                            ).val();
                            var _0x9596x39 = $(
                                "input[name='destination_latlng']"
                            ).val();
                            if (_0x9596x38 != "0" && _0x9596x39 != "0") {
                                _0x9596x5e(_0x9596x38, _0x9596x39);
                            }
                        } else {
                            alert(
                                "Geocode was not successful for the following reason: " +
                                    _0x9596x42
                            );
                        }
                    }
                );
            },
            function () {
                alert(geocode_disabled);
            }
        );
    });
    $(document).ready(function () {
        $.each(["#simple", "#hourly"], function (_0x9596x43, _0x9596x21) {
            $(_0x9596x21 + "_form .cars a").click(function () {
                var _0x9596x44 = $(this).attr("personnes");
                var _0x9596x45 = $(this).attr("bags");
                var _0x9596x46 = $(this).attr("carid");
                var _0x9596x47 = $(this).attr("carcode");
                var _0x9596x48 = $(this).attr("carname");
                if (_0x9596x46 > 0) {
                    var _0x9596x49 =
                        "<img  class='car_img' src='" +
                        assest +
                        "images/car_" +
                        _0x9596x47 +
                        ".jpg'/>";
                    var _0x9596x4a =
                        "<ul class='details'><li><img src='" +
                        assest +
                        "images/men.svg'>" +
                        _0x9596x44 +
                        "</li><li><img src='" +
                        assest +
                        "images/laguage.svg'>" +
                        _0x9596x45 +
                        "</li><li><img src='" +
                        assest +
                        "images/wifi.svg'></li></ul>";
                    _0x9596x4a +=
                        "<button id='gall_button' type='button' class='geolocalize-me gallery-trigger'><img src='" +
                        assest +
                        "images/gallery.svg' style='width:34px;'></button>";
                    $(_0x9596x21 + "_form #selected_cars").html(
                        _0x9596x49 + _0x9596x4a
                    );
                    $(_0x9596x21 + "_form #selected_cars").show();
                    var _0x9596x4b = "";
                    var _0x9596xe = 1;
                    while (_0x9596xe < 5) {
                        _0x9596x4b +=
                            "<a href='" +
                            assest +
                            "images/cars/" +
                            _0x9596x47 +
                            "-" +
                            _0x9596xe +
                            "-b.jpg' title='" +
                            _0x9596x48 +
                            "'><img src='" +
                            assest +
                            "images/cars/" +
                            _0x9596x47 +
                            "-" +
                            _0x9596xe +
                            "-s.jpg'></a>";
                        _0x9596xe++;
                    }
                    $(_0x9596x21 + "_form #gall").html(_0x9596x4b);
                    $(_0x9596x21 + "_form #gall").show();
                    $(_0x9596x21 + "_form #gall_button").show();
                    $(_0x9596x21 + "_form .car_chosen_title").show();
                    $(_0x9596x21 + "_formm .car_chosen_title").html(
                        you_have_chosen
                    );
                    $(_0x9596x21 + "_form .car_chosen").html(_0x9596x48);
                } else {
                    $(_0x9596x21 + "_form #selected_cars").hide();
                    $(_0x9596x21 + "_form #gall_button").hide();
                }
                $(_0x9596x21 + "_form #gall_button").click(function () {
                    if ($(_0x9596x21 + "_form #gall").is(":hidden")) {
                        $(_0x9596x21 + "_form #gall").show();
                    } else {
                        $(_0x9596x21 + "_form #gall").hide();
                    }
                });
                $(_0x9596x21 + "_form .car_model").val(_0x9596x46);
            });
        });
    });
    $("a.form-recaps").on("click", function (event) {
        event.preventDefault();
        if ($(".recap").is(":visible")) {
            $("a.form-recaps").html(RECAPTITLE);
        } else {
            $("a.form-recaps").html(PERSONALHEAD);
        }
        $(".recap").first()["slideToggle"]();
    });
    $(".choice").on("click", function (event) {
        event.preventDefault();
        var _0x9596x4c = moment().format("YYYY-MM-DD HH:mm:ss");
        if ($(this).data("now") == "now") {
            var _0x9596x4d = new Date();
            $("select[name='hours']").val(_0x9596x4d.getHours());
            $(".date-res").hide();
        } else {
            $(".date-res input").val(_0x9596x4c);
            $(".date-res").show();
        }
        $(".choice").removeClass("active");
        $(this).toggleClass("active");
        $.each(["#simple", "#hourly"], function (_0x9596x43, _0x9596x21) {
            _0x9596x98(_0x9596x21);
        });
    });
    var _0x9596x4e = function () {
        var _0x9596x4f = "";
        var _0x9596x50 = true;
        var _0x9596x51 = $(".nav-tabs .active").attr("role");
        if (_0x9596x51 == "simple") {
            _0x9596x4f = "";
        }
        var _0x9596x26 = $(".depart" + _0x9596x4f);
        var _0x9596x27 = $(".destination" + _0x9596x4f);
        var _0x9596x52 = $("input[name='depart_latlng']").val();
        var _0x9596x53 = $("input[name='destination_latlng']").val();
        if (_0x9596x52 == "") {
            _0x9596x26.addClass("errorClass");
            setTimeout(function () {
                _0x9596x26.removeClass("errorClass");
            }, 2000);
            _0x9596x50 = false;
        }
        if (_0x9596x53 == "") {
            _0x9596x27.addClass("errorClass");
            setTimeout(function () {
                _0x9596x27.removeClass("errorClass");
            }, 2000);
            _0x9596x50 = false;
        }
        return _0x9596x50;
    };
    $.each(["#simple", "#hourly"], function (_0x9596x43, _0x9596x21) {
        $(_0x9596x21 + "_form .next").click(function () {
            if (_0x9596x21 == "#simple") {
                if (window["twoways"] == 1) {
                    $(".waiting-hours").addClass("errorClass");
                }
                if ($(_0x9596x21 + "_form .car_model").val() == 0) {
                    $(_0x9596x21 + "_form .cars button").addClass("errorClass");
                }
                if ($("input[name='depart_latlng']").val() == 0) {
                    _0x9596x54(INCORRECT_ADD);
                    $(_0x9596x21 + "_form #depart").addClass("errorClass");
                }
                if ($("input[name='destination_latlng']").val() == 0) {
                    _0x9596x54(INCORRECT_ADD);
                    $(_0x9596x21 + "_form #destination").addClass("errorClass");
                }
                if (
                    $("input[name='destination_latlng']").val() == 0 ||
                    $("input[name='depart_latlng']").val() == 0 ||
                    $(_0x9596x21 + "_form .car_model").val() == 0
                ) {
                    if (
                        $(_0x9596x21 + "_form .car_model").val() == 0 &&
                        $("#simple_form #cars_prices ul").has("li")["length"] !=
                            0
                    ) {
                        _0x9596x54(vehicule_choice);
                    } else {
                        _0x9596x54(FORM_ERROR);
                    }
                    setTimeout(function () {
                        $(
                            "#simple_form #destination , #simple_form #depart , #simple_form .cars button , .waiting-hours"
                        ).removeClass("errorClass");
                    }, 4000);
                    return false;
                }
            } else {
                if (_0x9596x21 == "#hourly") {
                    if ($("#hourly_form .car_model").val() == 0) {
                        $("#hourly_form .cars button").addClass("errorClass");
                    }
                    if ($(".estimated_cars").val() == 0) {
                        $(".estimated_cars").addClass("errorClass");
                    }
                    if ($(".estimated_days").val() == 0) {
                        $(".estimated_days").addClass("errorClass");
                    }
                    if ($(".estimated_persons").val() == 0) {
                        $(".estimated_persons").addClass("errorClass");
                    }
                    if (
                        $(".estimated_persons").val() == 0 ||
                        $(".estimated_days").val() == 0 ||
                        $(".estimated_cars").val() == 0 ||
                        $("#hourly_form .car_model").val() == 0
                    ) {
                        _0x9596x54(FORM_ERROR);
                        setTimeout(function () {
                            $(
                                "#hourly_form .estimated_persons , #hourly_form .estimated_days , #hourly_form .estimated_cars , #hourly_form .cars button"
                            ).removeClass("errorClass");
                        }, 4000);
                        return false;
                    }
                }
            }
            $(this).addClass("disabled-link");
            $(_0x9596x21 + "_form").submit();
        });
    });
    var _0x9596x54 = function (_0x9596x55) {
        var _0x9596x56 = $(".form-error-msg");
        _0x9596x56.html(_0x9596x55);
        _0x9596x56.show().delay(4000).fadeOut();
        _0x9596x56.addClass("form-error-msg-show");
    };
    var _0x9596x57 = function (_0x9596x55) {
        var _0x9596x56 = $(".form-success-msg");
        _0x9596x56.html(_0x9596x55);
        _0x9596x56.show().delay(4000).fadeOut();
        _0x9596x56.addClass("form-success-msg-show");
    };
    $(".finalize-btn").click(function () {
        var _0x9596x26 = $(".depart_latlng");
        var _0x9596x27 = $(".destination_latlng");
        var _0x9596x58 = $(".fullname");
        var _0x9596x59 = $(".country");
        var _0x9596x5a = $(".phone");
        var _0x9596x5b = $(".email");
        var _0x9596x5c = $(this).data("type");
        var _0x9596x5d = $(".estimated_persons").val();
        if (_0x9596x26.val() == "") {
            $(".depart_2").addClass("errorClass");
        }
        if (_0x9596x27.val() == "") {
            $(".destination_2").addClass("errorClass");
        }
        if (_0x9596x58.val() == "") {
            _0x9596x58.addClass("errorClass");
        }
        if (_0x9596x5a.val() == "") {
            _0x9596x5a.addClass("errorClass");
        }
        if (_0x9596x5d == 0) {
            $(".estimated_persons").addClass("errorClass");
        }
        if (_0x9596x5b.val() == "") {
            _0x9596x5b.addClass("errorClass");
        }
        if ($("[name='depart']").length) {
            if (_0x9596x27.val() == "" || _0x9596x26.val() == "") {
                _0x9596x54(INCORRECT_ADD);
            }
            if (
                _0x9596x5b.val() == "" ||
                _0x9596x5a.val() == "" ||
                _0x9596x27.val() == "" ||
                _0x9596x26.val() == "" ||
                _0x9596x58.val() == ""
            ) {
                _0x9596x54(FORM_ERROR);
                setTimeout(function () {
                    $(
                        "[name='depart'], [name='destination'],[name='fullname'],[name='country'],[name='phone'],[name='email']"
                    ).removeClass("errorClass");
                }, 4000);
                return false;
            } else {
                $(".finalize-btn").addClass("disabled-link");
                $(".form-error-msg").addClass(".valid");
                _0x9596x57(PROCESSING_MSG);
            }
        } else {
            if (
                _0x9596x5b.val() == "" ||
                _0x9596x5a.val() == "" ||
                _0x9596x58.val() == "" ||
                _0x9596x5d == 0
            ) {
                _0x9596x54(FORM_ERROR);
                setTimeout(function () {
                    $(
                        "[name='depart'], [name='destination'],[name='fullname'],[name='country'],[name='phone'],[name='email'],[name='estimated_persons']"
                    ).removeClass("errorClass");
                }, 4000);
                return false;
            } else {
                $(".finalize-btn").addClass("disabled-link");
                $(".form-error-msg").addClass(".valid");
                _0x9596x57(PROCESSING_MSG);
            }
        }
        $("#complete-form").append(
            "<input type='hidden' name='" +
                _0x9596x5c +
                "' value='" +
                _0x9596x5c +
                "' />"
        );
        $("#complete-form").submit();
    });
    $(document).ready(function () {
        _0x9596x2d();
    });

    function _0x9596x5e(_0x9596x38, _0x9596x39) {
        window["depart"] = _0x9596x38;
        window["destination"] = _0x9596x39;
        _0x9596x38 = _0x9596x38["split"](",");
        _0x9596x39 = _0x9596x39["split"](",");
        var _0x9596x5f = Number(_0x9596x38[0]);
        var _0x9596x60 = Number(_0x9596x38[1]);
        var _0x9596x61 = Number(_0x9596x39[0]);
        var _0x9596x62 = Number(_0x9596x39[1]);
        var _0x9596x63 = new google["maps"].LatLng(_0x9596x5f, _0x9596x60);
        var _0x9596x39 = new google["maps"].LatLng(_0x9596x61, _0x9596x62);
        var _0x9596x64 = new google["maps"].DistanceMatrixService();
        _0x9596x64["getDistanceMatrix"](
            {
                origins: [_0x9596x63],
                destinations: [_0x9596x39],
                travelMode: google["maps"]["TravelMode"]["DRIVING"],
                unitSystem: google["maps"]["UnitSystem"]["METRIC"],
            },
            _0x9596x65
        );

        function _0x9596x65(_0x9596x64) {
            var _0x9596x66 =
                _0x9596x64["rows"][0]["elements"][0]["distance"]["value"];
            var _0x9596x67 =
                _0x9596x64["rows"][0]["elements"][0]["duration"]["text"];
            _0x9596x68(
                _0x9596x66,
                _0x9596x67,
                _0x9596x5f,
                _0x9596x60,
                _0x9596x61,
                _0x9596x62
            );
        }
    }

    function _0x9596x68(
        _0x9596x66,
        _0x9596x67,
        _0x9596x5f,
        _0x9596x60,
        _0x9596x61,
        _0x9596x62
    ) {
        var _0x9596x69 = "PER_HOUR";
        var _0x9596x6a = "SIMPLE";
        var _0x9596x6b = 12;
        var _0x9596x6c = 20;
        var _0x9596x6d = window["MAD"];
        var _0x9596x6e = window["USD"];
        var _0x9596x66 = _0x9596x66 / 1000;
        if (_0x9596x66 > 1) {
            _0x9596x66 = Math.round(_0x9596x66);
        }
        window["distance"] = _0x9596x66;
        window["duration"] = _0x9596x67;
        var _0x9596x6f = $("#simple_form #depart")
            .val()
            ["replace"](/[.,_Ø-]/g, " ")
            ["toLowerCase"]();
        var _0x9596x70 = $("#simple_form #destination")
            .val()
            ["replace"](/[.,_Ø-]/g, " ")
            ["toLowerCase"]();
        console.log(_0x9596x6f, _0x9596x70);
        var _0x9596x71 = "";
        const _0x9596x72 = {
            "cmn  rte de nouasseur": 18,
            "casablanca airport": 18,
            "cmn route de nouasseur": 18,
            "cmn  route de nouasseur": 18,
            "cmnØ route de nouasseur": 18,
            "taxi aÃ©roport casablanca": 18,
            "tit mellil": 18,
            "mohammed v": 18,
            "ÙØ·Ø§Ø± ÙØ­ÙØ¯ Ø§ÙØ®Ø§ÙØ³": 18,
            "ÙØ·Ø§Ø± Ø§ÙØ¯Ø§Ø± Ø§ÙØ¨ÙØ¶Ø§Ø¡": 18,
            "ÙØ·Ø§Ø± ØªÙØ· ÙÙÙÙ": 18,
            ourika: 40,
            tameslohte: 40,
            palmeraie: 15,
            "eden aquapark": 15,
            tamadot: 20,
            berrechid: 15,
            deroua: 15,
            tamaris: 15,
            // mohammÃ©dia: 20,
            // mohammedia: 20,
            // chefchaouen: 20,
            // agafay: 60,
            // "canyon lodge,": 60,
            // KÃ©nitra: 20,
            // Kenitra: 20,
            // Ø§ÙÙÙÙØ·Ø±Ø©: 20,
            // "agadir al massira": 6,
            // "ÙØ·Ø§Ø± Ø£ØºØ§Ø¯ÙØ± Ø§ÙÙØ³ÙØ±Ø©": 6,
            // "ÙØ·Ø§Ø± Ø£ÙØ§Ø¯ÙØ± Ø§ÙÙØ³ÙØ±Ø©": 6,
            // "al massira international": 6,
            // taghazout: 8,
            // ØªØ§ØºØ§Ø²ÙØª: 8,
            // ØªØºØ§Ø²ÙØª: 8,
            // "Imi Ouaddar": 8,
            // tanger: 10,
            // tangier: 10,
            // Ø·ÙØ¬Ø©: 10,
            // saÃ¯ss: 10,
            // Ø³Ø§ÙØ³: 10,
            // sais: 10,
            // "had soualem": 20,
            // "Ø­Ø¯ Ø§ÙØ³ÙØ§ÙÙ": 20,
            // kenitra: 30,
            // kÃ©nitra: 30,
            // Ø§ÙÙÙÙØ·Ø±Ø©: 30,
            // bouznika: 15,
            // Ø¨ÙØ²ÙÙÙØ©: 15,
            // ØªØ§ÙÙØµÙØ±Øª: 15,
            tamansourt: 15,
            tamnsourt: 15,
        };
        const _0x9596x73 = {
            "cmn  rte de nouasseur": 18,
            "casablanca airport": 18,
            "cmn route de nouasseur": 18,
            "cmn  route de nouasseur": 18,
            "cmnØ route de nouasseur": 18,
            "taxi aÃ©roport casablanca": 18,
            "tit mellil": 18,
            "mohammed v": 18,
            "ÙØ·Ø§Ø± ÙØ­ÙØ¯ Ø§ÙØ®Ø§ÙØ³": 18,
            "ÙØ·Ø§Ø± Ø§ÙØ¯Ø§Ø± Ø§ÙØ¨ÙØ¶Ø§Ø¡": 18,
            "ÙØ·Ø§Ø± ØªÙØ· ÙÙÙÙ": 18,
            ourika: 40,
            tameslohte: 40,
            palmeraie: 15,
            "eden aquapark": 15,
            tamadot: 20,
            berrechid: 15,
            deroua: 15,
            tamaris: 15,
            // mohammÃ©dia: 20,
            // mohammedia: 20,
            // chefchaouen: 20,
            // agafay: 60,
            // "canyon lodge,": 60,
            // KÃ©nitra: 20,
            // Kenitra: 20,
            // Ø§ÙÙÙÙØ·Ø±Ø©: 20,
            // "agadir al massira": 6,
            // "ÙØ·Ø§Ø± Ø£ØºØ§Ø¯ÙØ± Ø§ÙÙØ³ÙØ±Ø©": 6,
            // "ÙØ·Ø§Ø± Ø£ÙØ§Ø¯ÙØ± Ø§ÙÙØ³ÙØ±Ø©": 6,
            // "al massira international": 6,
            // taghazout: 8,
            // ØªØ§ØºØ§Ø²ÙØª: 8,
            // ØªØºØ§Ø²ÙØª: 8,
            // "Imi Ouaddar": 8,
            // tanger: 10,
            // tangier: 10,
            // Ø·ÙØ¬Ø©: 10,
            // saÃ¯ss: 10,
            // Ø³Ø§ÙØ³: 10,
            // sais: 10,
            // "had soualem": 20,
            // "Ø­Ø¯ Ø§ÙØ³ÙØ§ÙÙ": 20,
            // kenitra: 30,
            // kÃ©nitra: 30,
            // Ø§ÙÙÙÙØ·Ø±Ø©: 30,
            // bouznika: 15,
            // Ø¨ÙØ²ÙÙÙØ©: 15,
            // ØªØ§ÙÙØµÙØ±Øª: 15,
            tamansourt: 15,
            tamnsourt: 15,
        };
        const _0x9596x74 = {
            "oued zem": 40,
            "ÙØ§Ø¯ Ø²Ù": 40,
        };
        const _0x9596x75 = {};

        $("#simple_form .dropdown-menu .car > a").each(function (
            _0x9596x43,
            _0x9596x21
        ) {
            console.log(_0x9596x21);
            console.log($(_0x9596x21));
            var _0x9596x76 = $(_0x9596x21).attr("id");
            var carid = $(_0x9596x21).attr("carid");
            var _0x9596x77 = $(_0x9596x21).attr("price_km");
            var _0x9596x78 = $(_0x9596x21).attr("price_min");
            var _0x9596x79 = $(_0x9596x21).attr("price_airport");
            var _0x9596x7a = $(_0x9596x21).attr("price_day");
            var _0x9596x7b = $(_0x9596x21).attr("price_half");
            var _0x9596x7c = $(_0x9596x21).attr("available");
            var _0x9596x7d = $(_0x9596x21).attr("carname");
            var _0x9596x7e = $(_0x9596x21).attr("personnes");
            var _0x9596x7f = $(_0x9596x21).attr("bags");
            var _0x9596x80 = $(_0x9596x21).attr("carcode");
            var _0x9596x81 = $(_0x9596x21).attr("hour_rate");
            var _0x9596x82 = 0;
            if (_0x9596x66 > _0x9596x6b) {
                _0x9596x82 = Math.round(_0x9596x77 * _0x9596x66);
            } else {
                _0x9596x82 = _0x9596x78;
            }
            if (_0x9596x66 > 100 && _0x9596x66 < 200) {
                _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.24;
            }
            if (_0x9596x66 > 200 && _0x9596x66 < 300) {
                _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.39;
            }
            if (_0x9596x66 > 300 && _0x9596x66 < 400) {
                _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.39;
            }
            if (_0x9596x66 > 400) {
                _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.35;
            }
            if (_0x9596x66 <= _0x9596x6c) {
                _0x9596x82 = _0x9596x79;
                _0x9596x82 = _0x9596x86(
                    _0x9596x82,
                    _0x9596x6f,
                    _0x9596x70,
                    _0x9596x72
                );
            } else {
                if (_0x9596x66 > _0x9596x6c && _0x9596x66 < 60) {
                    if (window["is_airport"] == 1) {
                        _0x9596x82 = _0x9596x79;
                    }
                    _0x9596x82 = _0x9596x86(
                        _0x9596x82,
                        _0x9596x6f,
                        _0x9596x70,
                        _0x9596x73
                    );
                    if (_0x9596x82 < _0x9596x79) {
                        _0x9596x82 = _0x9596x79;
                    }
                } else {
                    if (_0x9596x66 > 100 && _0x9596x66 < 200) {
                        _0x9596x82 = _0x9596x86(
                            _0x9596x82,
                            _0x9596x6f,
                            _0x9596x70,
                            _0x9596x74
                        );
                    } else {
                        if (_0x9596x66 > 300) {
                            _0x9596x82 = _0x9596x86(
                                _0x9596x82,
                                _0x9596x6f,
                                _0x9596x70,
                                _0x9596x75
                            );
                        } else {
                            _0x9596x82 = _0x9596x82;
                        }
                    }
                }
            }
            var _0x9596x83 = Math.round(_0x9596x82 * _0x9596x6e);
            var _0x9596x84 = Math.round(_0x9596x82 * _0x9596x6d);
            if (_0x9596x43 == 0) {
                _0x9596x71 += "<div id='map-canvas'></div>";
                _0x9596x71 += "<div class='journey-info'>";
                _0x9596x71 +=
                    "<div class='dist-duration-info'><i class='ti-timer' style=''></i>" +
                    text_duration +
                    "<span class='form_infos' style='direction: ltr;'>" +
                    _0x9596x67 +
                    "</span></div>";
                _0x9596x71 +=
                    "<div class='dist-duration-info'><i class='ti-arrows-horizontal'></i>" +
                    text_distance +
                    "<span class='form_infos' style='direction: ltr;'>" +
                    _0x9596x66 +
                    " km</span></div>";
                _0x9596x71 += "</div>";
                _0x9596x71 +=
                    "<li class='dropdown-header'>" + vehiculetype6 + "</li>";
            }
            if (_0x9596x43 == 3) {
                _0x9596x71 +=
                    "<li class='dropdown-header'>" + vehiculetype3 + "</li>";
            }
            if (_0x9596x43 == 6) {
                _0x9596x71 +=
                    "<li class='dropdown-header'>" + vehiculetype0 + "</li>";
            }
            _0x9596x71 += " <li class='car'>";
            _0x9596x71 +=
                "<a id='" +
                _0x9596x76 +
                "' carid='" +
                carid +
                "' carcode='" +
                _0x9596x80 +
                "' carname='" +
                _0x9596x7d +
                "' hour_rate='" +
                _0x9596x81 +
                "' bags='" +
                _0x9596x7f +
                "' personnes='" +
                _0x9596x7e +
                "' price='" +
                Math.round(_0x9596x82) +
                "' >";
            // _0x9596x71 +=
            //     "<img  class='car-image' src='" +
            //     assest +
            //     "images/car_" +
            //     _0x9596x80 +
            //     ".jpg'/>";

            _0x9596x71 += "<img  class='car-image' src='" + _0x9596x80 + "'/>";

            _0x9596x71 += "<span class='car-name'>" + _0x9596x7d + "</span>";
            _0x9596x71 +=
                "<div class='car-details'><img src='" +
                assest +
                "images/men.svg'>" +
                _0x9596x7e +
                "</div>";
            _0x9596x71 += "<div class='car-details-list'>";
            _0x9596x71 +=
                "<span class='car-price'>" +
                Math.round(_0x9596x82) +
                " € </span>";
            _0x9596x71 +=
                "<span class='car-price'>" +
                Math.round(_0x9596x83) +
                " $ </span>";
            _0x9596x71 +=
                "<span class='car-price'>" +
                Math.round(_0x9596x84 / 10) * 10 +
                " MAD </span>";
            _0x9596x71 += "</div>";
            _0x9596x71 += "</a></li>";
        });

        // $.each(
        //     [11, 13, 14, 5, 12, 4, 3, 2, 1],
        //     function (_0x9596x43, _0x9596x21) {
        //         var _0x9596x76 = $("#simple #my_car_" + _0x9596x21).attr("id");
        //         var _0x9596x77 = $("#simple #my_car_" + _0x9596x21).attr(
        //             "price_km"
        //         );
        //         var _0x9596x78 = $("#simple #my_car_" + _0x9596x21).attr(
        //             "price_min"
        //         );
        //         var _0x9596x79 = $("#simple #my_car_" + _0x9596x21).attr(
        //             "price_airport"
        //         );
        //         var _0x9596x7a = $("#simple #my_car_" + _0x9596x21).attr(
        //             "price_day"
        //         );
        //         var _0x9596x7b = $("#simple #my_car_" + _0x9596x21).attr(
        //             "price_half"
        //         );
        //         var _0x9596x7c = $("#simple #my_car_" + _0x9596x21).attr(
        //             "available"
        //         );
        //         var _0x9596x7d = $("#simple #my_car_" + _0x9596x21).attr(
        //             "carname"
        //         );
        //         var _0x9596x7e = $("#simple #my_car_" + _0x9596x21).attr(
        //             "personnes"
        //         );
        //         var _0x9596x7f = $("#simple #my_car_" + _0x9596x21).attr(
        //             "bags"
        //         );
        //         var _0x9596x80 = $("#simple #my_car_" + _0x9596x21).attr(
        //             "carcode"
        //         );
        //         var _0x9596x81 = $("#simple #my_car_" + _0x9596x21).attr(
        //             "hour_rate"
        //         );
        //         var _0x9596x82 = 0;
        //         if (_0x9596x66 > _0x9596x6b) {
        //             _0x9596x82 = Math.round(_0x9596x77 * _0x9596x66);
        //         } else {
        //             _0x9596x82 = _0x9596x78;
        //         }
        //         if (_0x9596x66 > 100 && _0x9596x66 < 200) {
        //             _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.24;
        //         }
        //         if (_0x9596x66 > 200 && _0x9596x66 < 300) {
        //             _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.39;
        //         }
        //         if (_0x9596x66 > 300 && _0x9596x66 < 400) {
        //             _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.39;
        //         }
        //         if (_0x9596x66 > 400) {
        //             _0x9596x82 = _0x9596x82 - _0x9596x82 * 0.35;
        //         }
        //         if (_0x9596x66 <= _0x9596x6c) {
        //             _0x9596x82 = _0x9596x79;
        //             _0x9596x82 = _0x9596x86(
        //                 _0x9596x82,
        //                 _0x9596x6f,
        //                 _0x9596x70,
        //                 _0x9596x72
        //             );
        //         } else {
        //             if (_0x9596x66 > _0x9596x6c && _0x9596x66 < 60) {
        //                 if (window["is_airport"] == 1) {
        //                     _0x9596x82 = _0x9596x79;
        //                 }
        //                 _0x9596x82 = _0x9596x86(
        //                     _0x9596x82,
        //                     _0x9596x6f,
        //                     _0x9596x70,
        //                     _0x9596x73
        //                 );
        //                 if (_0x9596x82 < _0x9596x79) {
        //                     _0x9596x82 = _0x9596x79;
        //                 }
        //             } else {
        //                 if (_0x9596x66 > 100 && _0x9596x66 < 200) {
        //                     _0x9596x82 = _0x9596x86(
        //                         _0x9596x82,
        //                         _0x9596x6f,
        //                         _0x9596x70,
        //                         _0x9596x74
        //                     );
        //                 } else {
        //                     if (_0x9596x66 > 300) {
        //                         _0x9596x82 = _0x9596x86(
        //                             _0x9596x82,
        //                             _0x9596x6f,
        //                             _0x9596x70,
        //                             _0x9596x75
        //                         );
        //                     } else {
        //                         _0x9596x82 = _0x9596x82;
        //                     }
        //                 }
        //             }
        //         }
        //         var _0x9596x83 = Math.round(_0x9596x82 * _0x9596x6e);
        //         var _0x9596x84 = Math.round(_0x9596x82 * _0x9596x6d);
        //         if (_0x9596x43 == 0) {
        //             _0x9596x71 += "<div id='map-canvas'></div>";
        //             _0x9596x71 += "<div class='journey-info'>";
        //             _0x9596x71 +=
        //                 "<div class='dist-duration-info'><i class='ti-timer' style=''></i>" +
        //                 text_duration +
        //                 "<span class='form_infos' style='direction: ltr;'>" +
        //                 _0x9596x67 +
        //                 "</span></div>";
        //             _0x9596x71 +=
        //                 "<div class='dist-duration-info'><i class='ti-arrows-horizontal'></i>" +
        //                 text_distance +
        //                 "<span class='form_infos' style='direction: ltr;'>" +
        //                 _0x9596x66 +
        //                 " km</span></div>";
        //             _0x9596x71 += "</div>";
        //             _0x9596x71 +=
        //                 "<li class='dropdown-header'>" +
        //                 vehiculetype6 +
        //                 "</li>";
        //         }
        //         if (_0x9596x43 == 3) {
        //             _0x9596x71 +=
        //                 "<li class='dropdown-header'>" +
        //                 vehiculetype3 +
        //                 "</li>";
        //         }
        //         if (_0x9596x43 == 6) {
        //             _0x9596x71 +=
        //                 "<li class='dropdown-header'>" +
        //                 vehiculetype0 +
        //                 "</li>";
        //         }
        //         _0x9596x71 += " <li class='car'>";
        //         _0x9596x71 +=
        //             "<a id='" +
        //             _0x9596x76 +
        //             "' carid='" +
        //             _0x9596x21 +
        //             "' carcode='" +
        //             _0x9596x80 +
        //             "' carname='" +
        //             _0x9596x7d +
        //             "' hour_rate='" +
        //             _0x9596x81 +
        //             "' bags='" +
        //             _0x9596x7f +
        //             "' personnes='" +
        //             _0x9596x7e +
        //             "' price='" +
        //             Math.round(_0x9596x82) +
        //             "' >";
        //         // _0x9596x71 +=
        //         //     "<img  class='car-image' src='" +
        //         //     assest +
        //         //     "images/car_" +
        //         //     _0x9596x80 +
        //         //     ".jpg'/>";

        //         _0x9596x71 +=
        //         "<img  class='car-image' src='" +
        //         _0x9596x80 +"'/>";

        //         _0x9596x71 +=
        //             "<span class='car-name'>" + _0x9596x7d + "</span>";
        //         _0x9596x71 +=
        //             "<div class='car-details'><img src='" +
        //             assest +
        //             "images/men.svg'>" +
        //             _0x9596x7e +
        //             "</div>";
        //         _0x9596x71 += "<div class='car-details-list'>";
        //         _0x9596x71 +=
        //             "<span class='car-price'>" +
        //             Math.round(_0x9596x82) +
        //             " € </span>";
        //         _0x9596x71 +=
        //             "<span class='car-price'>" +
        //             Math.round(_0x9596x83) +
        //             " $ </span>";
        //         _0x9596x71 +=
        //             "<span class='car-price'>" +
        //             Math.round(_0x9596x84 / 10) * 10 +
        //             " MAD </span>";
        //         _0x9596x71 += "</div>";
        //         _0x9596x71 += "</a></li>";
        //     }
        // );

        $("#simple_form #cars_prices ul").html(_0x9596x71);
        var _0x9596x85 = $("#simple_form #cars_prices");
        $("html,body").animate(
            {
                scrollTop: _0x9596x85.offset().top - 150,
            },
            400,
            "easeOutQuint"
        );
        _0x9596x89(_0x9596x5f, _0x9596x60, _0x9596x61, _0x9596x62);
        _0x9596x88();
    }

    function _0x9596x86(_0x9596x82, _0x9596x6f, _0x9596x70, _0x9596x72) {
        Object.entries(_0x9596x72).forEach((_0x9596x87) => {
            const [key, value] = _0x9596x87;
            if (_0x9596x6f.indexOf(key) > -1 || _0x9596x70.indexOf(key) > -1) {
                console.log("found one = " + _0x9596x87);
                _0x9596x82 = Number(_0x9596x82) + Number(value);
                return _0x9596x82;
            }
        });
        return _0x9596x82;
    }

    function _0x9596x88() {
        $.each(["#simple", "#hourly"], function (_0x9596x43, _0x9596x21) {
            $(_0x9596x21 + "_form #cars_prices a").click(function () {
                if ($("#cars_prices .car a").hasClass("clicked")) {
                    $("#cars_prices .car a").removeClass("clicked");
                }
                $(this).addClass("clicked");
                var _0x9596x44 = $(this).attr("personnes");
                var _0x9596x45 = $(this).attr("bags");
                var _0x9596x46 = $(this).attr("carid"); ;
                var _0x9596x47 = $(this).attr("carcode");
                var _0x9596x48 = $(this).attr("carname");
                window["type"] = _0x9596x21["replace"]("#", "");
                window["price"] = $(this).attr("price");
                window["carcode"] = _0x9596x47;
                window["carname"] = _0x9596x48;
                window["personnes"] = _0x9596x44;
                window["bags"] = _0x9596x45;
                window["hour_rate"] = $(this).attr("hour_rate");
                window["estimated_persons"] = $(_0x9596x21 + "_form .estimated_persons").val();
                window["estimated_days"] = $(_0x9596x21 + "_form .estimated_days").val();
                window["estimated_cars"] = $(_0x9596x21 + "_form .estimated_cars").val();
                if (_0x9596x46 > 0) {
                    var _0x9596x49 = "<img  class='car_img' src='" + assest + "images/car_" + _0x9596x47 + ".jpg'/>";
                    var _0x9596x4a =
                        "<ul class='details'><li><img src='" +
                        assest +
                        "images/men.svg'>" +
                        _0x9596x44 +
                        "</li><li><img src='" +
                        assest +
                        "images/laguage.svg'>" +
                        _0x9596x45 +
                        "</li><li><img src='" +
                        assest +
                        "images/wifi.svg'></li></ul>";
                    _0x9596x4a +=
                        "<button id='gall_button' type='button' class='geolocalize-me gallery-trigger'><img src='" +
                        assest +
                        "images/gallery.svg' style='width:34px;'></button>";
                    $(_0x9596x21 + "_form #selected_cars").html(
                        _0x9596x49 + _0x9596x4a
                    );
                    $(_0x9596x21 + "_form #selected_cars").show();
                    var _0x9596x4b = "";
                    var _0x9596xe = 1;
                    while (_0x9596xe < 5) {
                        _0x9596x4b +=
                            "<a href='" +
                            _0x9596x47 +
                            "' title='" +
                            _0x9596x48 +
                            "'><img src='" +
                            assest +
                            "images/cars/" +
                            _0x9596x47 +
                            "-" +
                            _0x9596xe +
                            "-s.jpg'></a>";
                        _0x9596xe++;
                    }
                    $(_0x9596x21 + "_form #gall").html(_0x9596x4b);
                    $(_0x9596x21 + "_form #gall").show();
                    $(_0x9596x21 + "_form #gall_button").show();
                    $(_0x9596x21 + "_form .car_chosen_title").show();
                    $(_0x9596x21 + "_formm .car_chosen_title").html(
                        you_have_chosen
                    );
                    $(_0x9596x21 + "_form .car_chosen").html(_0x9596x48);
                } else {
                    $(_0x9596x21 + "_form #selected_cars").hide();
                    $(_0x9596x21 + "_form #gall_button").hide();
                }
                $(_0x9596x21 + "_form #gall_button").click(function () {
                    if ($(_0x9596x21 + "_form #gall").is(":hidden")) {
                        $(_0x9596x21 + "_form #gall").show();
                    } else {
                        $(_0x9596x21 + "_form #gall").hide();
                    }
                });
                $(_0x9596x21 + "_form .car_model").val(_0x9596x46);
                $(_0x9596x21 + "_form .car_model").attr(
                    "price",
                    window["price"]
                );
                window["car_model"] = _0x9596x46;
                var _0x9596x85 = $(_0x9596x21 + "_form .popup-gallery");
                $("html,body").animate(
                    {
                        scrollTop: _0x9596x85.offset().top - 200,
                    },
                    500,
                    "easeInQuint"
                );
                _0x9596x93();
                $(".twoways-container").addClass("openlist");
                _0x9596x95((window["opentotal"] = 2));
            });
        });
    }
    $.each(["depart", "destination"], function (_0x9596x43, _0x9596x21) {
        $("#simple_form #" + _0x9596x21).change(function () {
            var _0x9596x85 = $("#simple_form #" + _0x9596x21);
            if ($(window).width() < 786) {
                $("html,body").animate(
                    {
                        scrollTop: _0x9596x85.offset().top - 150,
                    },
                    400,
                    "easeOutQuint"
                );
            } else {
                $("html,body").animate(
                    {
                        scrollTop: _0x9596x85.offset().top - 300,
                    },
                    400,
                    "easeOutQuint"
                );
            }
            if (
                $("#simple_form #" + _0x9596x21).val() == "" ||
                $("#simple_form #cars_prices ul").has("li").length == 1
            ) {
                $("#simple_form #cars_prices ul").html("");
                $("input[name='" + _0x9596x21 + "_latlng']").val("0");
            }
        });
        $("#simple_form #" + _0x9596x21)["focus"](function (_0x9596x4) {
            if ($(window).width() < 786) {
                var _0x9596x85 = $("#simple_form #" + _0x9596x21);
                $("html,body").animate(
                    {
                        scrollTop: _0x9596x85.offset().top - 140,
                    },
                    400,
                    "easeOutQuint"
                );
            }
        });
    });

    function _0x9596x89(_0x9596x5f, _0x9596x60, _0x9596x61, _0x9596x62) {
        var _0x9596x8a = new google["maps"].LatLng(_0x9596x5f, _0x9596x60),
            _0x9596x8b = new google["maps"].LatLng(_0x9596x61, _0x9596x62),
            _0x9596x8c = {
                center: _0x9596x8a,
            },
            _0x9596x8d = new google["maps"].Map(
                document["getElementById"]("map-canvas"),
                _0x9596x8c
            ),
            _0x9596x8e = new google["maps"].DirectionsService(),
            _0x9596x8f = new google["maps"].DirectionsRenderer({
                map: _0x9596x8d,
            }),
            _0x9596x90 = new google["maps"].Marker({});
        _0x9596x91(_0x9596x8e, _0x9596x8f, _0x9596x8a, _0x9596x8b);
    }

    function _0x9596x91(_0x9596x8e, _0x9596x8f, _0x9596x8a, _0x9596x8b) {
        _0x9596x8e["route"](
            {
                origin: _0x9596x8a,
                destination: _0x9596x8b,
                avoidTolls: true,
                avoidHighways: false,
                travelMode: google["maps"]["TravelMode"]["DRIVING"],
            },
            function (_0x9596x92, _0x9596x42) {
                if (_0x9596x42 == google["maps"]["DirectionsStatus"]["OK"]) {
                    _0x9596x8f["setDirections"](_0x9596x92);
                } else {
                    window.alert(
                        "Directions request failed due to " + _0x9596x42
                    );
                }
            }
        );
    }
    window["MAD"] = 10.5;
    window["USD"] = 1.05;
    window["twoways"] = 1;
    window["waite_time"] = 0;
    window["price"] = 0;
    window["country"] = "unknown";
    window["distance"] = "unknown";
    window["duration"] = "unknown";
    window["opentotal"] = 1;

    function _0x9596x93() {
        var _0x9596x94 = {
            estimated_price: window["price"],
            rate_mad: window["MAD"],
            rate_usd: window["USD"],
            twoways: window["twoways"],
            waite_time: window["waite_time"],
            country: window["country"],
            distance: window["distance"],
            duration: window["duration"],
            back_date: window["back_date"],
        };
        $(".data").val(JSON["stringify"](_0x9596x94));
    }
    _0x9596x93();
    $("#twoways").change(function () {
        if ($(this).is(":checked") == true) {
            window["twoways"] = 2;
            $(".waiting-hours").addClass("openlist");
            _0x9596x95();
        } else {
            if ($(this).is(":checked") == false) {
                window["twoways"] = 1;
                $(".waiting-hours").removeClass("openlist");
                _0x9596x95();
            }
        }
    });
    $("#waite-time").change(function () {
        _0x9596x95();
    });
    $("#back-switch").change(function () {
        if ($(this).is(":checked") == true) {
            window["twoways"] = 2;
            window["back_date"] = 2;
            $(".back_date").addClass("openlist");
            $(".go-switch").addClass("closelist");
            _0x9596x95();
        } else {
            if ($(this).is(":checked") == false) {
                window["twoways"] = 1;
                window["back_date"] = 1;
                $(".back_date").removeClass("openlist");
                $(".go-switch").removeClass("closelist");
                _0x9596x95();
            }
        }
    });

    function _0x9596x95() {
        var _0x9596x82 = Number($("#simple_form .car_model").attr("price"));
        if (window["twoways"] == 2 || window["opentotal"] == 2) {
            window["waite_time"] = Number(
                $("#waite-time option:selected").val()
            );
            var _0x9596x96 =
                Number(window["waite_time"]) * Number(window["hour_rate"]);
            if (window["twoways"] == 2) {
                $(".back-switch").addClass("closelist");
                _0x9596x71 +=
                    "<div class='total-info'><i class='ti-arrow-left'></i> " +
                    RETOUR +
                    " :   <span class='form_infos'>" +
                    Math.round(_0x9596x82) +
                    " euros  </span></div>";
                var _0x9596x97 = Math.round(_0x9596x82 * 2 + _0x9596x96);
            }
            if (window["opentotal"] == 2) {
                var _0x9596x97 = Math.round(_0x9596x82 + _0x9596x96);
                window["opentotal"] = 1;
            }
            if (window["waite_time"] != 0) {
                _0x9596x71 += "<div class='total-info '>";
                _0x9596x71 +=
                    "<i class='ti-timer'></i>" +
                    PRIXATTENTE +
                    " :  <span class='form_infos'>" +
                    Math.round(_0x9596x96) +
                    " euros /   </span>";
                _0x9596x71 +=
                    NOMBREHEURES +
                    " :  <span class='form_infos'>" +
                    Math.round(window["waite_time"]) +
                    " /    </span>";
                _0x9596x71 +=
                    PRIXPARHEURE +
                    " :  <span class='form_infos'>" +
                    Math.round(window["hour_rate"]) +
                    " euros   </span>";
                _0x9596x71 += "</div>";
            }
            var _0x9596x71 = "";
            var _0x9596x84 = Math.round(_0x9596x97 * window["MAD"]);
            _0x9596x71 +=
                "<div class='total-info'><i class='ti-arrows-horizontal'></i> " +
                PRIXTOTAL +
                " :  <span class='form_infos'>" +
                _0x9596x97 +
                " euros / " +
                Math.round(_0x9596x97 * window["USD"]) +
                " USD / " +
                Math.round(_0x9596x84 / 10) * 10 +
                " MAD </span></div>";
            $(".totales-infos").html(_0x9596x71);
            $(".totales-infos").addClass("openlist");
            window["price"] = _0x9596x97;
            _0x9596x93();
            return;
        } else {
            if (window["twoways"] == 1) {
                $(".totales-infos").html("");
                $(".totales-infos").removeClass("openlist");
                window["price"] = Math.round(Number(_0x9596x82));
                window["waite_time"] = 0;
                $("#waite-time")["prop"]("selectedIndex", 0);
                _0x9596x93();
                $(".back-switch").removeClass("closelist");
                return;
            }
        }
    }

    function _0x9596x98(_0x9596x21 = "") {
        var _0x9596x96 = $(_0x9596x21 + "_form .hours option:selected").val();
        var _0x9596x99 = _0x9596x96 >= 12 ? "pm" : "am";
        _0x9596x96 = _0x9596x96 > 12 ? _0x9596x96 - 12 : _0x9596x96;
        _0x9596x96 = _0x9596x96 == "0" ? 12 : _0x9596x96;
        $(_0x9596x21 + "_form .am-pm")["text"](_0x9596x96 + " " + _0x9596x99);
    }
    $(document).ready(function () {
        $.each(["#simple", "#hourly"], function (_0x9596x43, _0x9596x21) {
            _0x9596x98(_0x9596x21);
        });
    });
    $.each(["#simple", "#hourly"], function (_0x9596x43, _0x9596x21) {
        $(_0x9596x21 + "_form .hours").change(function () {
            _0x9596x98(_0x9596x21);
        });
    });
    $(document).ready(function () {
        $(".gallery-trigger").click(function () {
            if ($("#complete_gall")["css"]("display") == "none") {
                $("#complete_gall").show();
            } else {
                $("#complete_gall").hide();
            }
        });
        $(".infos-but").click(function () {
            if ($("#infos")["css"]("display") == "none") {
                $("#infos").show();
            } else {
                $("#infos").hide();
            }
        });
    });
})();
{
    /* <wdsssssaxd */
}
