webpackJsonp([13], {
    0: function (e, t, a) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var r = a(1),
            l = n(r),
            s = a(12),
            o = a(315),
            i = n(o),
            c = a(891),
            u = n(c),
            f = [{
                name: "Nivas",
                designation: "IEEE Madras Section",
                pic: "/static/images/testimonials/nivas.png",
                testimonial: "Every time we did a conference or an event, it used to be so difficult to get the prints done. We used to have problems every single time. But now, with Inkmonk it has become so convenient. It is an one stop shop for all our print needs. They have a special eye for quality and make sure they deliver nothing but the best."
            }, {
                name: "Girish",
                designation: "Freshdesk",
                pic: "/static/images/testimonials/girish.png",
                testimonial: "Inkmonk makes fantastic merchandise - the quality is top-notch, and they deliver on time, neatly-packaged. They're definitely one of a kind in India."
            }, {
                name: "Siddharth",
                designation: "Exotel",
                pic: "/static/images/testimonials/siddharth.png",
                testimonial: "At Exotel we use InkMonk extensively for all our events. They provide super-awesome printing experience! They have revolutionized printing in India."
            }];
        (0, s.render)(l.default.createElement(i.default, {
            testimonials: f
        }), document.getElementById("customerTestimonials")), (0, s.render)(l.default.createElement(u.default, null), document.getElementById("reachUs"))
    },
    314: function (e, t, a) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }

        function r(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        function l(e, t) {
            if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function s(e, t) {
            if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
            e.prototype = Object.create(t && t.prototype, {
                constructor: {
                    value: e,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.default = void 0;
        var o, i, c = function () {
                function e(e, t) {
                    for (var a = 0; a < t.length; a++) {
                        var n = t[a];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }
                return function (t, a, n) {
                    return a && e(t.prototype, a), n && e(t, n), t
                }
            }(),
            u = a(1),
            f = n(u),
            m = (i = o = function (e) {
                function t() {
                    var e, a, n, s;
                    r(this, t);
                    for (var o = arguments.length, i = Array(o), c = 0; c < o; c++) i[c] = arguments[c];
                    return a = n = l(this, (e = t.__proto__ || Object.getPrototypeOf(t)).call.apply(e, [this].concat(i))), n.state = {
                        currentIndex: 0
                    }, s = a, l(n, s)
                }
                return s(t, e), c(t, [{
                    key: "select",
                    value: function (e) {
                        this.setState({
                            currentIndex: e
                        })
                    }
                }, {
                    key: "render",
                    value: function () {
                        var e = this,
                            t = this.props.testimonials,
                            a = this.state.currentIndex,
                            n = t[a].testimonial,
                            r = function (e) {
                                return a === e ? "col-md-4 col-sm-4 active" : "col-md-4 col-sm-4"
                            };
                        return f.default.createElement("div", {
                            className: "row section testimonials"
                        }, f.default.createElement("div", {
                            className: "col-md-12 text-center"
                        }, f.default.createElement("div", {
                            className: "excla-mark"
                        }, '"'), f.default.createElement("p", null, n)), t.map(function (t, a) {
                            var n = t.name,
                                l = t.designation,
                                s = t.pic;
                            return f.default.createElement("div", {
                                className: r(a),
                                key: a,
                                onClick: function () {
                                    return e.select(a)
                                }
                            }, f.default.createElement("span", {
                                className: "pic"
                            }, f.default.createElement("img", {
                                src: s
                            })), f.default.createElement("span", {
                                className: "name"
                            }, n), f.default.createElement("span", {
                                className: "text-muted"
                            }, l))
                        }))
                    }
                }]), t
            }(u.Component), o.propTypes = {
                testimonials: u.PropTypes.arrayOf(u.PropTypes.shape({
                    name: u.PropTypes.string.isRequired,
                    designation: u.PropTypes.string.isRequired,
                    pic: u.PropTypes.string.isRequired,
                    testimonial: u.PropTypes.string.isRequired
                }))
            }, i);
        t.default = m
    },
    315: function (e, t, a) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.default = void 0;
        var r = a(314),
            l = n(r);
        t.default = l.default
    },
    890: function (e, t, a) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }

        function r(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        function l(e, t) {
            if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !t || "object" != typeof t && "function" != typeof t ? e : t
        }

        function s(e, t) {
            if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
            e.prototype = Object.create(t && t.prototype, {
                constructor: {
                    value: e,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), t.default = void 0;
        var o = function () {
                function e(e, t) {
                    for (var a = 0; a < t.length; a++) {
                        var n = t[a];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                    }
                }
                return function (t, a, n) {
                    return a && e(t.prototype, a), n && e(t, n), t
                }
            }(),
            i = a(1),
            c = n(i),
            u = a(14),
            f = n(u),
            m = function (e) {
                function t() {
                    var e, a, n, s;
                    r(this, t);
                    for (var o = arguments.length, i = Array(o), c = 0; c < o; c++) i[c] = arguments[c];
                    return a = n = l(this, (e = t.__proto__ || Object.getPrototypeOf(t)).call.apply(e, [this].concat(i))), n.state = {
                        alertMessageClass: "",
                        alertMessage: ""
                    }, s = a, l(n, s)
                }
                return s(t, e), o(t, [{
                    key: "handleSubmit",
                    value: function (e) {
                        var t = this;
                        e.preventDefault();
                        var a = this.refs.name.value,
                            n = this.refs.email.value,
                            r = this.refs.name.value,
                            l = this.refs.message.value;
                        f.default.ajax({
                            type: "POST",
                            url: "/json/customer-requests",
                            data: JSON.stringify({
                                name: a,
                                email: n,
                                contact_number: r,
                                message: l
                            }),
                            contentType: "application/json",
                            headers: {
                                "X-CSRFToken": document.getElementById("csrftoken").getAttribute("content")
                            }
                        }).done(function () {
                            t.setState({
                                alertMessageClass: "alert alert-success",
                                alertMessage: "Thank you for contacting us. We will get back to you shortly."
                            })
                        }).fail(function (e) {
                            var a = e.responseJSON;
                            "failure" === a.status && t.setState({
                                alertMessageClass: "alert alert-danger",
                                alertMessage: a.error
                            })
                        })
                    }
                }, {
                    key: "render",
                    value: function () {
                        var e = this.state,
                            t = e.alertMessageClass,
                            a = e.alertMessage;
                        return c.default.createElement("div", {
                            className: "row section reach-us"
                        }, c.default.createElement("div", {
                            className: "col-md-12 text-center"
                        }, c.default.createElement("span", {
                            className: "section-title"
                        }, "Reach Us", c.default.createElement("hr", null))), c.default.createElement("div", {
                            className: "col-md-12 text-center"
                        }, c.default.createElement("i", null, "No.12 Krishnan Street, Govindan Road, West mambalam, Chennai - 600033.", c.default.createElement("br", null), "Ph: 044-33185184  | E-mail: support@inkmonk.com"), c.default.createElement("form", {
                            onSubmit: this.handleSubmit.bind(this)
                        }, c.default.createElement("div", {
                            className: "row"
                        }, c.default.createElement("div", {
                            className: "col-md-4"
                        }, c.default.createElement("span", {
                            className: "fa fa-user"
                        }), c.default.createElement("input", {
                            ref: "name",
                            type: "text",
                            placeholder: "Name",
                            className: "form-control"
                        })), c.default.createElement("div", {
                            className: "col-md-4"
                        }, c.default.createElement("span", {
                            className: "fa fa-envelope"
                        }), c.default.createElement("input", {
                            ref: "email",
                            type: "email",
                            placeholder: "Email",
                            className: "form-control"
                        })), c.default.createElement("div", {
                            className: "col-md-4"
                        }, c.default.createElement("span", {
                            className: "fa fa-phone"
                        }), c.default.createElement("input", {
                            ref: "contact_number",
                            type: "tel",
                            placeholder: "Contact Number",
                            className: "form-control"
                        })), c.default.createElement("div", {
                            className: "col-md-12"
                        }, c.default.createElement("span", {
                            className: "fa fa-comment"
                        }), c.default.createElement("textarea", {
                            ref: "message",
                            placeholder: "Message",
                            className: "form-control"
                        })), c.default.createElement("div", {
                            className: "col-md-10"
                        }, c.default.createElement("div", {
                            className: t
                        }, a)), c.default.createElement("div", {
                            className: "col-md-2 text-right"
                        }, c.default.createElement("button", {
                            className: "btn btn-primary"
                        }, "Submit"))))))
                    }
                }]), t
            }(i.Component);
        t.default = m
    },
    891: function (e, t, a) {
        "use strict";

        function n(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = a(890),
            l = n(r);
        t.default = l.default
    }
});