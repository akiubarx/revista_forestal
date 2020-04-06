function openFbPopup(url, width, height, callBack) {
    var top = top || screen.height / 2 - height / 2,
        left = left || screen.width / 2 - width / 2,
        win = window.open(
            url,
            "",
            "location=1,status=1,resizable=yes,width=" +
                width +
                ",height=" +
                height +
                ",top=" +
                top +
                ",left=" +
                left
        );

    function check() {
        if (!win || win.closed != false) {
            callBack();
        } else {
            setTimeout(check, 100);
        }
    }

    setTimeout(check, 100);
}

function connectFb(obj, type) {
    openFbPopup(
        "https://appfb.premiumaddons.com/auth/fbreviews?scope=manage_pages,pages_show_list",
        670,
        520,
        function() {
            $.ajax({
                type: "GET",
                url: settings.ajaxurl,
                dataType: "json",
                data: {
                    action: "get_page_token"
                },
                success: function(res) {
                    if (res.success) {
                        var accessID =
                                "reviews" === type
                                    ? "page_access"
                                    : "access_token",
                            pageID =
                                "reviews" === type ? "page_id" : "account_id";

                        var accessToken = res.data.access_token,
                            name = res.data.name,
                            id = res.data.id;

                        if ("reviews" === type)
                            $(obj)
                                .parents(".elementor-control-facebook_login")
                                .nextAll(".elementor-control-page_name")
                                .find("input")
                                .val(name)
                                .trigger("input");

                        $(obj)
                            .parents(".elementor-control-facebook_login")
                            .nextAll(".elementor-control-" + pageID)
                            .find("input")
                            .val(id)
                            .trigger("input");

                        $(obj)
                            .parents(".elementor-control-facebook_login")
                            .nextAll(".elementor-control-" + accessID)
                            .find("textarea")
                            .val(accessToken)
                            .trigger("input");
                    }
                }
            });
        }
    );

    return false;
}

function connectFbInit(obj) {
    if (!obj) return;

    var type = $(obj).data("type");

    connectFb(obj, type);
}
