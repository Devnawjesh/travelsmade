$(function() {
    "use strict";
    $(function() {
        $("#menu").metisMenu()
    }), $(".slimscroll-left-sidebar").slimScroll({
        height: "auto",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "0",
        alwaysVisible: !1
    }), $(".scroolbar-notification").slimScroll({
        height: "300px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "5px",
        alwaysVisible: !0
    }), $(".table-body").slimScroll({
        height: "460px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "5px",
        alwaysVisible: !0
    }), $(".quicknote").slimScroll({
        height: "350px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "4px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".inbox-chat").slimScroll({
        height: "290px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "2px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".message-chat-list").slimScroll({
        height: "650px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "0px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".chat-window").slimScroll({
        height: "650px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "0px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".sidebar-toggle").on("click", function() {
        var a = window.innerWidth;
        a < 850 && a > 527 ? ($("#app").toggleClass("mini-app"), $("#app").removeClass("mobile-app")) : a > 850 ? ($("#app").toggleClass("mini-app"), $("#app").removeClass("mobile-app")) : a < 527 && ($("#app").toggleClass("mini-app"), $("#app").toggleClass("mobile-app"))
    }), $(function() {
        var a = window.innerWidth;
        a < 850 && a > 527 ? ($("#app").addClass("mini-app"), $("#app").removeClass("mobile-app")) : a > 850 ? ($("#app").removeClass("mini-app"), $("#app").removeClass("mobile-app")) : a < 527 && ($("#app").removeClass("mini-app"), $("#app").addClass("mobile-app"))
    }), window.addEventListener("resize", function(a) {
        var e = window.innerWidth;
        e < 850 && e > 527 ? ($("#app").addClass("mini-app"), $("#app").removeClass("mobile-app")) : e > 850 ? ($("#app").removeClass("mini-app"), $("#app").removeClass("mobile-app")) : e < 527 && ($("#app").removeClass("mini-app"), $("#app").addClass("mobile-app"))
    }), $("#preview_image").on("change", function() {
        var a = $(".image-preview");
        this.files && $.each(this.files, function(e, i) {
            if (!/\.(jpe?g|png|gif)$/i.test(i.name)) return alert(i.name + " is not an image");
            var l = new FileReader;
            $(l).on("load", function() {
                a.append("<span class='upload-wrapper'><span class='upload-wrapper-delete'>X</span><img src='" + this.result + "'></span>")
            }), l.readAsDataURL(i), $(document).on("click", ".upload-wrapper-delete", function(a) {
                $(this).parents(".upload-wrapper").remove(), $(this).remove()
            })
        })
    })
});