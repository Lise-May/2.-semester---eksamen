$(document).ready(function () {
    $(".open_menu").click(function () {
        $(".sub_nav").slideToggle();
    });
    $(".about_button").click(() => {
        $(".about_p_hide").slideToggle();
        $(".about_p_hide").toggleClass("open");
        if (!$(".about_p_hide").hasClass("open")) {
            $(".about_button").text("... LÆS MERE");
        } else {
            $(".about_button").text("... LÆS MINDRE");
        }
    });

    // Index video src change
    if ($(window).width() > 671) {
        $(".hero_video").attr("src", "video/draupnir_index_hero_desktop.mp4");
    } else {
        $(".hero_video").attr("src", "video/draupnir_index_hero_mobile.mp4");
    }

    if ($(window).width() > 950) {
        $(".product_article").each(function () {
            $(this).mouseenter(function () {
                $(".link_button_anchor", this).animate({
                    backgroundColor: "#af0404",
                    fontSize: "20px",
                });
            });
            $(this).mouseleave(function () {
                $(".link_button_anchor", this).animate({
                    backgroundColor: "transparent",
                    fontSize: "0px",
                });
            });
        });
        $(".index_guidance_article").each(function () {
            $(this).mouseenter(function () {
                $(".link_button_anchor", this).animate({
                    backgroundColor: "#af0404",
                    fontSize: "20px",
                });
                $(".index_guidance_img", this).addClass("grayscale");
            });
            $(this).mouseleave(function () {
                $(".link_button_anchor", this).animate({
                    backgroundColor: "transparent",
                    fontSize: "0px",
                });
                $(".index_guidance_img", this).removeClass("grayscale");
            });
        });
    }
});

// Hamburger menu
function onClickMenu() {
    document.getElementById("menu").classList.toggle("change");

    document.querySelector(".nav_list").classList.toggle("change");
}

// To top btn
function scrollToId() {
    $(document).ready(function () {
        $("a.scrollLink").click(function (event) {
            event.preventDefault();
            $("html, body").animate(
                { scrollTop: $($(this).attr("href")).offset().top },
                500
            );
        });
    });
    jQuery(document).ready(function () {
        var offset = 220;
        var duration = 500;
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery(".scroll-to-top").fadeIn(duration);
            } else {
                jQuery(".scroll-to-top").fadeOut(duration);
            }
        });
        jQuery(".scroll-to-top").click(function (event) {
            event.preventDefault();
            jQuery("html, body").animate({ scrollTop: 0 }, duration);
            return false;
        });
    });
}
// Filter products
filterSelection("all");
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
    }
}

function addClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

function removeClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
