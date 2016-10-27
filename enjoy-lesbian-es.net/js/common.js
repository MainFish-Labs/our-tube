/*!
 * $Id: common.js 2531 2010-08-17 18:41:34Z mloftis $
 *
 * Common javascript, eg page ready.
 * Must be loaded AFTER the jQuery modules.
 */
if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function(b) {
        var a = this.length;
        var c = Number(arguments[1]) || 0;
        c = (c < 0) ? Math.ceil(c) : Math.floor(c);
        if (c < 0) {
            c += a
        }
        for (; c < a; c++) {
            if (c in this && this[c] === b) {
                return c
            }
        }
        return -1
    };
    /*!
     * Tag Selector plugin for jQuery: Facilitates selecting multiple tags by extending jQuery UI Autocomplete.
     * You may use Tag Selector under the terms of either the MIT License or the GNU General Public License (GPL) Version 2.
     * https://petprojects.googlecode.com/svn/trunk/MIT-LICENSE.txt
     * https://petprojects.googlecode.com/svn/trunk/GPL-LICENSE.txt
     */
}(function(a) {
    a.fn.tagSelector = function(c, b) {
        return this.each(function() {
            var d = a(this),
                e = a("input[type=text]", this);
            d.click(function() {
                e.focus()
            }).delegate(".tag a", "click", function() {
                a(this).parent().remove()
            });
            e.keydown(function(f) {
                if (f.keyCode === 9 && a(this).data("autocomplete").menu.active) {
                    f.preventDefault()
                }
            }).autocomplete({
                minLength: 0,
                source: c,
                select: function(g, h) {
                    var f = a('<span class="tag"/>').text(h.item.toString() + " ").append("<a>\u00D7</a>").append(a('<input type="hidden"/>').attr("name", b).val(h.item.id)).insertBefore(e);
                    a("<span>").text(" ").insertAfter(f);
                    return true
                }
            });
            e.data("autocomplete")._renderItem = function(f, g) {
                return a("<li/>").data("item.autocomplete", g).append(a("<a/>").text(g.toString())).appendTo(f)
            };
            e.data("autocomplete")._resizeMenu = function(f, g) {
                f = this.menu.element;
                f.outerWidth(Math.max(f.width("").outerWidth(), d.outerWidth()))
            }
        })
    }
})(jQuery);
var ratingStarsRunOn = [];

function getCookieVal(b) {
    var a = document.cookie.indexOf(";", b);
    if (a == -1) {
        a = document.cookie.length
    }
    return unescape(document.cookie.substring(b, a))
}

function GetCookie(d) {
    var b = d + "=";
    var f = b.length;
    var a = document.cookie.length;
    var e = 0;
    while (e < a) {
        var c = e + f;
        if (document.cookie.substring(e, c) == b) {
            return getCookieVal(c)
        }
        e = document.cookie.indexOf(" ", e) + 1;
        if (e === 0) {
            break
        }
    }
    return null
}

function ratingStars(a) {
    var b = {
        style: a.rating_style,
        curvalue: a.current_rating,
        maxvalue: a.max_rating,
        isStatic: a.rating_static,
        statid: $("#" + a.div_name + "res"),
        fbkid: $("#" + a.div_name + "fbk"),
        numvotes: a.numvotes
    };
    if (ratingStarsRunOn.indexOf(a.div_name) == -1) {
        ratingStarsRunOn.push(a.div_name);
        $("div#" + a.div_name).sp3rater(a.rating_callback_url, b)
    }
}
var loadpieceInfo = {
    lasturl: null
};

function loadPaginatedPiece(a, b) {
    loadpieceInfo.lasturl = a;
    $(b).load(a, function() {
        var c = b + " a";
        c = b + " a.clickclass";
        $(c).click(function() {
            var d = $(this).attr("href");
            loadPaginatedPiece(d, b);
            return false
        })
    })
}
var THUMBS_HTTP_ROOT = "";
var thumb_t_ID = null;
var thumb_t_selected = null;
$(document).ready(function() {
    $("#related_video .videolist:nth-child(4n)").addClass("last");
    var j = [];
    $.preLoadImages = function(h) {
        for (var m = 0; m < h.length; m++) {
            var e = document.createElement("img");
            e.src = h[m];
            j.push(e)
        }
    };
    $.cicleThumbsfrom = function(e) {
        thumb_t_selected++;
        if (thumb_t_selected >= e.thumbs.length) {
            thumb_t_selected = 1
        }
        e.attr("src", e.thumbs[thumb_t_selected])
    };
    try {
        $("img.rotate-thumbs").livequery("mouseenter", function() {
            clearInterval(thumb_t_ID);
            var e = $(this);
            var h = e.metadata();
            e.thumbs = new Array();
            i = 0;
            for (thumb in h.ethumbs) {
                e.thumbs[i] = THUMBS_HTTP_ROOT + h.ethumbs[thumb];
                i++
            }
            $.preLoadImages(e.thumbs);
            $.cicleThumbsfrom(e);
            thumb_t_ID = setInterval(function() {
                $.cicleThumbsfrom(e)
            }, 500)
        })
    } catch (c) {}
    try {
        $("img.rotate-thumbs").livequery("mouseleave", function() {
            var e = $(this);
            var h = e.metadata();
            e.attr("src", THUMBS_HTTP_ROOT + h.selected_thumb);
            clearInterval(thumb_t_ID);
            thumb_t_selected = null
        })
    } catch (c) {}
    $("#social>div.twitter>a").click(function() {
        var e = $(this);
        window.open("https://twitter.com/intent/follow?original_referer=" + window.location + "&screen_name=" + e.attr("rel") + "&source=followbutton&variant=2.0", "share", "width=450,height=500,location=no");
        return false
    });
    $("#social>div.plusone>a").attr("target", "_newtab").attr("href", "https://plusone.google.com/_/+1/confirm?hl=en&url=" + window.location);
    var l = ("placeholder" in document.createElement("input"));
    $("[placeholder]").focus(function() {
        var e = $(this);
        e.removeClass("placeholder");
        if (e.val() == e.attr("placeholder") && !l) {
            if (!("placeholder" in document.createElement("input"))) {
                e.val("")
            }
        }
    }).blur(function() {
        var e = $(this);
        if (e.val() === "") {
            e.addClass("placeholder")
        }
        if (e.val() === "" && !l) {
            e.val(e.attr("placeholder"))
        }
    }).blur().parents("form").submit(function() {
        $(this).find("[placeholder]").each(function() {
            if (l) {
                return
            }
            var e = $(this);
            if (e.hasClass("placeholder")) {
                e.val("")
            }
        })
    });

    function a(m, h) {
        var e = $("<div>").text(m);
        e.dialog({
            width: 400,
            modal: true,
            resizable: false,
            title: h,
            closeText: "hide",
            buttons: {
                OK: function() {
                    e.dialog("close")
                }
            }
        }).dialog("show")
    }
    $("#userprofile #removefromfriends, #userprofile #cancelfriendship").click(function f(p) {
        p.preventDefault();
        var n = $(this);
        var h = $("<div id='removeuserdialog'>Are you sure you want to delete this friend?</div>");
        h.dialog({
            width: 400,
            modal: true,
            resizable: false,
            title: "Delete Friend",
            closeText: "hide",
            buttons: {
                Yes: function o() {
                    $.ajax({
                        url: "/changefriend/" + n.attr("rel") + "/delete",
                        success: function q(r) {
                            $("#userprofile .userinfo .action").removeClass("accepted pending ignored none").addClass("none");
                            h.dialog("close");
                            a("This person is deleted from your friends list.", "Friend Deleted")
                        },
                        error: function e(r) {
                            a("There was an error deleting friend. Please try again.", "Error");
                            h.close()
                        }
                    })
                },
                No: function m() {
                    h.dialog("close")
                }
            }
        }).dialog("show");
        return false
    });
    $("#userprofile #addtofriends").click(function d(n) {
        n.preventDefault();
        var m = $(this);
        var h = $("<div id='adduserdialog' class='dialog'>");
        h.load("/addfriend #form", function o() {
            var r = h.find("form");
            h.find(".action, .title").hide();
            h.find("#id_friends_username").val(m.attr("rel")).parent().hide();
            r.submit(function q() {
                n.preventDefault();
                $.ajax({
                    data: r.serialize() + "&is_json=1",
                    url: "/addfriend",
                    type: "post",
                    success: function t(u) {
                        if (u.error) {
                            a(u.error, "Error")
                        } else {
                            $("#userprofile .userinfo .action").removeClass("accepted pending ignored none").addClass(u.status);
                            $("#userprofile #removefromfriends, #userprofile #cancelfriendship").attr("rel", u.pk);
                            h.dialog("close");
                            a("A friendship request has been sent.", "Friend Request Sent")
                        }
                    },
                    error: function s(u) {
                        a("There was an error adding friend. Please try again.", "Error");
                        h.close()
                    }
                });
                return false
            });
            h.dialog({
                width: 400,
                modal: true,
                resizable: false,
                title: "Add Friend",
                closeText: "hide",
                buttons: {
                    Submit: function p() {
                        r.submit()
                    },
                    Cancel: function e() {
                        h.dialog("close")
                    }
                }
            }).dialog("show")
        })
    });
    $("#id_niche", "#upload_form").change(function() {
        var e = $(this);
        $(".categories").find(".colsmall").hide().end().find(".niche-" + e.val()).show()
    }).val("1").change();
    if (typeof tags_list !== "undefined") {
        $("select#id_categories").removeProp("multiple");
        $("#id_tags", "#upload_form").tagSelector(tags_list, "tags")
    }
    $(".tab-container").each(function() {
        var e = $(this);
        e.find(".tab-nav").children("a").click(function(n) {
            var m = $(this).attr("href");
            e.find(".selected").removeClass("selected");
            $(m + "-tab").addClass("selected");
            $(this).addClass("selected")
        });
        var h = $(".wm-links-footer").find('a[href*="#"]');
        h.click(function(n) {
            var m = "#" + $(this).attr("href").split("#")[1];
            e.find(".selected").removeClass("selected");
            $(m + "-tab").addClass("selected");
            e.find('a[href="' + m + '"]').addClass("selected")
        });
        if (document.location.hash && e.find(document.location.hash + "-tab").length) {
            e.find(".selected").removeClass("selected");
            e.find("[href=" + document.location.hash + "]").addClass("selected");
            $(document.location.hash + "-tab").addClass("selected")
        }
    });
    $("#upload_form").submit(function() {
        var m = $(this);
        var h = [];
        var e = $("#id_tags_selector");
        $("span.tag", e).each(function() {
            var o = $(this);
            var n = o.find("input[type='hidden']");
            if (n.val() == -1) {
                h.push(o.data("text"));
                n.remove()
            }
        });
        if (h.length) {
            $.jsonRPC.request("tags.createTags", {
                params: [JSON.stringify(h)],
                success: function(o) {
                    var n = o.result.taglist;
                    for (var p in n) {
                        $('<input type="hidden" name="tags">').val(n[p].id).appendTo(e)
                    }
                    m.unbind("submit");
                    m.trigger("submit")
                }
            })
        } else {
            return true
        }
        return false
    });
    $("#id_tags_selector", "#upload_form").each(function() {
        var e = [];
        $("#id_tags option").each(function() {
            var h = $(this);
            e.push({
                id: h.attr("value"),
                text: h.text(),
                selected: h.is(":selected")
            })
        });
        $("#id_tags").remove();
        $(this).tagSelector({
            source: e,
            name: "tags",
            create: function(h, m) {
                $.jsonRPC.setup({
                    endPoint: "/json/",
                    namespace: ""
                });
                $.jsonRPC.request("tags.isValidTagName", {
                    params: [h],
                    success: function(n) {
                        if (n.result.result) {
                            m()
                        } else {
                            alert("This tag is not allowed")
                        }
                    }
                })
            }
        })
    });
    if ($(".show-more-toggle.load-more").length) {
        var g = 1;
        var k = $("#video-details").attr("data-id");
        $(".show-more-toggle.load-more").click(function() {
            $(this).hide();
            $(".show-more-toggle.loading").show();
            $.ajax({
                url: "/load_more_comments/video/" + k + "/",
                data: {
                    paginate_by: 10,
                    page: parseInt(g + 1),
                    o: "-submit_date"
                },
                success: function(e) {
                    g++;
                    $(".show-comments-toggle").before(e.comments_html);
                    $(".comments-item:hidden").not(".comment-form-container").slideDown("slow", function() {
                        if (e.last_page) {
                            $(".show-comments-toggle").hide()
                        } else {
                            $(".show-more-toggle.loading").hide();
                            $(".show-more-toggle.load-more").show()
                        }
                    })
                },
                error: function() {
                    $(".show-comments-toggle").hide()
                }
            })
        })
    }
    $("#videoviewtabs").find("a").click(function() {
        $("#videoviewtabs").find("li").removeClass("active");
        $(this).closest("li").addClass("active");
        var e = "#" + $(this).attr("rel");
        location.hash = e;
        $("#extracontent>div.section").not(e).hide();
        $(e).show();
        return false
    });
    if (location.hash) {
        var b = location.hash.substring(1);
        $("#videoviewtabs").find("a[rel=" + b + "]").click()
    }
});
