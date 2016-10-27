/*! Copyright (c) 2008 Brandon Aaron (http://brandonaaron.net)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Version: 1.0.3
 * Requires jQuery 1.1.3+
 * Docs: http://docs.jquery.com/Plugins/livequery
 */
(function(a) {
    a.extend(a.fn, {
        livequery: function(f, e, d) {
            var c = this,
                g;
            if (a.isFunction(f)) {
                d = e, e = f, f = undefined
            }
            a.each(a.livequery.queries, function(h, j) {
                if (c.selector == j.selector && c.context == j.context && f == j.type && (!e || e.$lqguid == j.fn.$lqguid) && (!d || d.$lqguid == j.fn2.$lqguid)) {
                    return (g = j) && false
                }
            });
            g = g || new a.livequery(this.selector, this.context, f, e, d);
            g.stopped = false;
            g.run();
            return this
        },
        expire: function(f, e, d) {
            var c = this;
            if (a.isFunction(f)) {
                d = e, e = f, f = undefined
            }
            a.each(a.livequery.queries, function(g, h) {
                if (c.selector == h.selector && c.context == h.context && (!f || f == h.type) && (!e || e.$lqguid == h.fn.$lqguid) && (!d || d.$lqguid == h.fn2.$lqguid) && !this.stopped) {
                    a.livequery.stop(h.id)
                }
            });
            return this
        }
    });
    a.livequery = function(c, e, g, f, d) {
        this.selector = c;
        this.context = e || document;
        this.type = g;
        this.fn = f;
        this.fn2 = d;
        this.elements = [];
        this.stopped = false;
        this.id = a.livequery.queries.push(this) - 1;
        f.$lqguid = f.$lqguid || a.livequery.guid++;
        if (d) {
            d.$lqguid = d.$lqguid || a.livequery.guid++
        }
        return this
    };
    a.livequery.prototype = {
        stop: function() {
            var c = this;
            if (this.type) {
                this.elements.unbind(this.type, this.fn)
            } else {
                if (this.fn2) {
                    this.elements.each(function(d, e) {
                        c.fn2.apply(e)
                    })
                }
            }
            this.elements = [];
            this.stopped = true
        },
        run: function() {
            if (this.stopped) {
                return
            }
            var e = this;
            var f = this.elements,
                d = a(this.selector, this.context),
                c = d.not(f);
            this.elements = d;
            if (this.type) {
                c.bind(this.type, this.fn);
                if (f.length > 0) {
                    a.each(f, function(g, h) {
                        if (a.inArray(h, d) < 0) {
                            a.event.remove(h, e.type, e.fn)
                        }
                    })
                }
            } else {
                c.each(function() {
                    e.fn.apply(this)
                });
                if (this.fn2 && f.length > 0) {
                    a.each(f, function(g, h) {
                        if (a.inArray(h, d) < 0) {
                            e.fn2.apply(h)
                        }
                    })
                }
            }
        }
    };
    a.extend(a.livequery, {
        guid: 0,
        queries: [],
        queue: [],
        running: false,
        timeout: null,
        checkQueue: function() {
            if (a.livequery.running && a.livequery.queue.length) {
                var c = a.livequery.queue.length;
                while (c--) {
                    a.livequery.queries[a.livequery.queue.shift()].run()
                }
            }
        },
        pause: function() {
            a.livequery.running = false
        },
        play: function() {
            a.livequery.running = true;
            a.livequery.run()
        },
        registerPlugin: function() {
            a.each(arguments, function(d, e) {
                if (!a.fn[e]) {
                    return
                }
                var c = a.fn[e];
                a.fn[e] = function() {
                    var f = c.apply(this, arguments);
                    a.livequery.run();
                    return f
                }
            })
        },
        run: function(c) {
            if (c != undefined) {
                if (a.inArray(c, a.livequery.queue) < 0) {
                    a.livequery.queue.push(c)
                }
            } else {
                a.each(a.livequery.queries, function(d) {
                    if (a.inArray(d, a.livequery.queue) < 0) {
                        a.livequery.queue.push(d)
                    }
                })
            }
            if (a.livequery.timeout) {
                clearTimeout(a.livequery.timeout)
            }
            a.livequery.timeout = setTimeout(a.livequery.checkQueue, 20)
        },
        stop: function(c) {
            if (c != undefined) {
                a.livequery.queries[c].stop()
            } else {
                a.each(a.livequery.queries, function(d) {
                    a.livequery.queries[d].stop()
                })
            }
        }
    });
    a.livequery.registerPlugin("append", "prepend", "after", "before", "wrap", "attr", "removeAttr", "addClass", "removeClass", "toggleClass", "empty", "remove");
    a(function() {
        a.livequery.play()
    });
    var b = a.prototype.init;
    a.prototype.init = function(d, f) {
        var e = b.apply(this, arguments);
        if (d && d.selector) {
            e.context = d.context, e.selector = d.selector
        }
        if (typeof d == "string") {
            e.context = f || document, e.selector = d
        }
        return e
    };
    a.prototype.init.prototype = a.prototype
})(jQuery);
