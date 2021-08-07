"use strict";
function AnimCube2(t) {
    var e, r, n, o, a, f, l, i, u, c, s, h, v, d, g, m, b, M, p, k, L, w, y, A, R, S, T, D, F, E, x, B, I, U, P, C, W, X, Y, q, z, O, Q = [], N = [], Z = [], H = [], G = [], K = [], j = [[0, -1, 0], [0, 1, 0], [0, 0, -1], [0, 0, 1], [-1, 0, 0], [1, 0, 0]], J = [[-1, -1, -1], [1, -1, -1], [1, -1, 1], [-1, -1, 1], [-1, 1, -1], [1, 1, -1], [1, 1, 1], [-1, 1, 1]], V = [[0, 1, 2, 3], [4, 7, 6, 5], [0, 4, 5, 1], [2, 6, 7, 3], [0, 3, 7, 4], [1, 5, 6, 2]], $ = [[0, 3, 2, 1], [0, 3, 2, 1], [3, 2, 1, 0], [3, 2, 1, 0], [0, 3, 2, 1], [0, 3, 2, 1]], _ = [[2, 5, 3, 4], [4, 3, 5, 2], [4, 1, 5, 0], [5, 1, 4, 0], [0, 3, 1, 2], [2, 1, 3, 0]], tt = [1, 1, -1, -1, -1, -1], et = [0, 0, -1], rt = [1, 0, 0], nt = [], ot = [], at = [], ft = [], lt = !0, it = [], ut = [], ct = [], st = !0, ht = -1, vt = 6, dt = 12, gt = !0, mt = !1, bt = !1, Mt = !1, pt = !1, kt = 0, Lt = 0, wt = 0, yt = 0, At = [3, 2, 0, 5, 1, 4], Rt = [[2, 0, 3, 1], [1, 3, 0, 2], [0, 1, 2, 3], [0, 1, 2, 3], [2, 0, 3, 1], [0, 1, 2, 3]];
    function St() {
        var t = Dt("config");
        null != t ? function(t) {
            var e = new XMLHttpRequest;
            e.onreadystatechange = function() {
                4 == e.readyState && (200 == e.status ? function(t) {
                    for (var e = t.split("\n"), r = 0; r < e.length; r++) {
                        var n = e[r].split("=");
                        void 0 !== n[1] && (Q[n[0]] = n[1].trim())
                    }
                }(e.responseText) : console.log("Error loading config file: " + t),
                Tt())
            }
            ,
            e.open("GET", t, !0),
            e.send()
        }(t) : Tt()
    }
    function Tt() {
        N[0] = Tr(255, 128, 64),
        N[1] = Tr(255, 0, 0),
        N[2] = Tr(0, 255, 0),
        N[3] = Tr(0, 0, 255),
        N[4] = Tr(153, 153, 153),
        N[5] = Tr(170, 170, 68),
        N[6] = Tr(187, 119, 68),
        N[7] = Tr(153, 68, 68),
        N[8] = Tr(68, 119, 68),
        N[9] = Tr(0, 68, 119),
        N[10] = Tr(255, 255, 255),
        N[11] = Tr(255, 255, 0),
        N[12] = Tr(255, 96, 32),
        N[13] = Tr(208, 0, 0),
        N[14] = Tr(0, 144, 0),
        N[15] = Tr(32, 64, 208),
        N[16] = Tr(176, 176, 176),
        N[17] = Tr(80, 80, 80),
        N[18] = Tr(255, 0, 255),
        N[19] = Tr(0, 255, 255),
        N[20] = Tr(255, 160, 192),
        N[21] = Tr(32, 255, 16),
        N[22] = Tr(0, 0, 0),
        N[23] = Tr(128, 128, 128);
        var t = Dt("bgcolor");
        if (e = null != t && 6 == t.length && Fr(t) ? "#" + t : "gray",
        t = Dt("butbgcolor"),
        o = null != t && 6 == t.length && Fr(t) ? "#" + t : e,
        null != (t = Dt("colors")))
            for (var u = 0; u < 10 && u < t.length / 6; u++)
                Fr(t.substring(6 * u, 6 * u + 6)) && (N[u] = "#" + t.substring(6 * u, 6 * u + 6));
        for (u = 0; u < 6; u++)
            for (var c = 0; c < 4; c++)
                Z[u][c] = u + 10;
        if (null != (t = Dt("supercube")) && "1" == t) {
            Mt = !0,
            Ft(.06);
            for (u = 0; u < 4; u++)
                Z[0][u] = 22;
            null != (t = Dt("scw")) && ("1" == t ? wt = 1 : "2" == t && (wt = 2)),
            1 == wt && (N[10] = "#000000")
        }
        if (null != (t = Dt("gabbacolors")) && "1" == t && (1 == Mt ? (N[11] = "#fdcf00",
        N[12] = "#fd4e0a",
        N[13] = "#93000d",
        N[14] = "#00702d",
        N[15] = "#00347a") : (Ft(.06),
        N[11] = "#ffd90a",
        N[12] = "#ff4f0b",
        N[13] = "#9e0b19",
        N[14] = "#0b7d39",
        N[15] = "#0b4186")),
        null != (t = Dt("borderwidth"))) {
            for (u = 0; u < t.length; u++)
                t.charAt(u) >= "0" && t.charAt(u) <= "9" && (yt = 10 * yt + parseInt(t[u]));
            yt >= 0 && yt <= 20 && Ft(yt / 100)
        }
        if (Mt)
            for (u = 0; u < 6; u++)
                for (c = 0; c < 4; c++)
                    H[u][c] = 0;
        var s = "lluu";
        if (null != (t = Dt("colorscheme")) && 6 == t.length)
            for (u = 0; u < 6; u++) {
                var h = 23;
                for (c = 0; c < 23; c++)
                    if (t[u].toLowerCase() == "0123456789wyorgbldmcpnk".charAt(c)) {
                        h = c;
                        break
                    }
                for (c = 0; c < 4; c++)
                    Z[u][c] = h
            }
        if ("1" == (t = Dt("scramble")) ? kt = 1 : "2" == t && (kt = 2),
        2 == kt)
            for (u = 0; u < 6; u++)
                for (c = 0; c < 4; c++)
                    G[u][c] = Z[u][c],
                    K[u][c] = H[u][c];
        if (0 == kt) {
            if (null != (t = Dt("pos")) && 24 == t.length) {
                s = "uuuuff",
                "gray" == e && (e = "white");
                for (u = 0; u < 6; u++) {
                    var g = At[u];
                    for (c = 0; c < 4; c++) {
                        var m = Rt[u][c];
                        Z[g][m] = 23;
                        for (var b = 0; b < 14; b++)
                            if (t.charAt(9 * u + c) == "DFECABdfecabgh".charAt(b)) {
                                Z[g][m] = b + 4;
                                break
                            }
                    }
                }
            }
            if (null != (t = Dt("facelets")) && 24 == t.length)
                for (u = 0; u < 6; u++)
                    for (c = 0; c < 4; c++) {
                        Z[u][c] = 23;
                        for (b = 0; b < 23; b++)
                            if (t[4 * u + c].toLowerCase() == "0123456789wyorgbldmcpnk".charAt(b)) {
                                Z[u][c] = b;
                                break
                            }
                    }
            if (null != (t = Dt("superfacelets")) && 24 == t.length)
                for (u = 0; u < 6; u++)
                    for (c = 0; c < 4; c++)
                        for (b = 0; b < 4; b++)
                            if (t[4 * u + c].toLowerCase() == "0123".charAt(b)) {
                                H[u][c] = b;
                                break
                            }
        }
        if (null != (t = Dt("randmoves"))) {
            var M = 0;
            for (u = 0; u < t.length; u++)
                t.charAt(u) >= "0" && t.charAt(u) <= "9" && (M = 10 * M + parseInt(t[u]));
            M > 0 && (Lt = M)
        }
        if (("random" == (t = Dt("move")) || kt > 0) && (t = dn(2, Lt)),
        it = null == t ? [] : Bt(t, !0),
        I = 0,
        X = -1,
        0 == kt && null != (t = Dt("initmove"))) {
            "random" == t && (t = dn(2, Lt));
            var w = "#" == t ? it : Bt(t, !1);
            w.length > 0 && Zt(Z, w[0], 0, w[0].length, !1)
        }
        if (t = Dt("initrevmove"),
        1 == kt ? t = null : 2 == kt && (t = "#"),
        null != t) {
            "random" == t && (t = dn(2, Lt));
            var y = "#" == t ? it : Bt(t, !1);
            y.length > 0 && Zt(Z, y[0], 0, y[0].length, !0)
        }
        0 == kt && null != (t = Dt("demo")) && ("random" == t && (t = dn(2, Lt)),
        (ut = "#" == t ? it : Bt(t, !0)).length > 0 && ut[0].length > 0 && (S = !0)),
        t = Dt("position"),
        Mr(yr(nt, et, rt)),
        null == t && (t = s);
        var A = Math.PI / 12;
        for (u = 0; u < t.length; u++) {
            var R = A;
            switch (t[u].toLowerCase()) {
            case "d":
                R = -R;
            case "u":
                Rr(et, R),
                Rr(rt, R);
                break;
            case "f":
                R = -R;
            case "b":
                Sr(et, R),
                Sr(rt, R);
                break;
            case "l":
                R = -R;
            case "r":
                Ar(et, R),
                Ar(rt, R)
            }
        }
        if (Mr(yr(nt, et, rt)),
        v = 0,
        d = 0,
        null != (t = Dt("speed")))
            for (u = 0; u < t.length; u++)
                t.charAt(u) >= "0" && t.charAt(u) <= "9" && (v = 10 * v + parseInt(t[u]));
        if (null != (t = Dt("doublespeed")))
            for (u = 0; u < t.length; u++)
                t.charAt(u) >= "0" && t.charAt(u) <= "9" && (d = 10 * d + parseInt(t[u]));
        if (0 == v && (v = 10),
        0 == d && (d = 3 * v / 2),
        T = 0,
        null == (t = Dt("perspective")))
            T = 2;
        else
            for (u = 0; u < t.length; u++)
                t.charAt(u) >= "0" && t.charAt(u) <= "9" && (T = 10 * T + parseInt(t[u]));
        var B, U = 0;
        if (null != (t = Dt("scale")))
            for (u = 0; u < t.length; u++)
                t.charAt(u) >= "0" && t.charAt(u) <= "9" && (U = 10 * U + parseInt(t[u]));
        if (D = 1 / (1 + U / 10),
        E = !1,
        null != (t = Dt("hint"))) {
            E = !0,
            x = 0;
            for (u = 0; u < t.length; u++)
                t.charAt(u) >= "0" && t.charAt(u) <= "9" && (x = 10 * x + parseInt(t[u]));
            x < 1 ? E = !1 : x /= 10
        }
        (q = 13,
        null != (t = Dt("buttonheight"))) && ((B = parseInt(t)) >= 9 & B <= 25 && (q = B));
        (vt = 0 == it.length ? 0 : 6,
        Y = 1,
        "0" == (t = Dt("buttonbar")) ? (Y = 0,
        q = 0,
        vt = 0) : "1" == t ? Y = 1 : "2" != t && 0 != it.length || (Y = 2,
        vt = 0),
        t = Dt("edit"),
        p = "0" != t,
        t = Dt("repeat"),
        k = "0" != t,
        t = Dt("clickprogress"),
        L = "0" != t,
        t = Dt("movetext"),
        O = "1" == t ? 1 : 0,
        null != (t = Dt("textsize"))) && ((B = parseInt(t)) >= 5 & B <= 40 && (dt = B));
        if (t = Dt("fonttype"),
        gt = null == t || "1" == t,
        W = 0,
        null != (t = Dt("metric")) && ("1" == t ? W = 1 : "2" == t ? W = 2 : "3" == t && (W = 3)),
        F = 1,
        null != (t = Dt("align")) && ("0" == t ? F = 0 : "1" == t ? F = 1 : "2" == t && (F = 2)),
        null != (t = Dt("ww")) && "1" == t && (mt = !0),
        null != (t = Dt("snap")) && "1" == t && (bt = !0),
        2 != kt)
            for (u = 0; u < 6; u++)
                for (c = 0; c < 4; c++)
                    G[u][c] = Z[u][c],
                    K[u][c] = H[u][c];
        for (u = 0; u < 3; u++)
            ot[u] = et[u],
            at[u] = rt[u],
            ft[u] = nt[u];
        qr(e) < 128 ? (n = "white",
        r = function(t) {
            "#" != t.substring(0, 1) && (t = Yr(t));
            var e = parseInt(t.substring(1, 3), 16)
              , r = parseInt(t.substring(3, 5), 16)
              , n = parseInt(t.substring(5, 7), 16);
            return e = Math.floor(1.3 * e),
            r = Math.floor(1.3 * r),
            n = Math.floor(1.3 * n),
            Tr(e > 255 ? 255 : e, r > 255 ? 255 : r, n > 255 ? 255 : n)
        }(e)) : (n = "black",
        r = zr(e)),
        l = qr(o) < 128 ? "white" : "black",
        a = n,
        null != (t = Dt("slidercolor")) && 6 == t.length && Fr(t) && (a = "#" + t),
        f = zr(e),
        null != (t = Dt("sliderbgcolor")) && 6 == t.length && Fr(t) && (f = "#" + t),
        null != (t = Dt("troughcolor")) && 6 == t.length && Fr(t) && (f = "#" + t),
        i = "black",
        null != (t = Dt("cubecolor")) && 6 == t.length && Fr(t) && (i = "#" + t),
        X = -1,
        _r = $r.getContext("2d"),
        nn = q,
        on = vt,
        an = dt,
        vn(),
        fn.appendChild($r),
        _e(),
        S && Kt(-1)
    }
    function Dt(t) {
        var e = gn[t];
        return void 0 === e ? Q[t] : e
    }
    function Ft(t) {
        lr[0][0] = lr[0][1] = lr[1][1] = lr[3][0] = t,
        lr[1][0] = lr[2][0] = lr[2][1] = lr[3][1] = 1 - t
    }
    var Et = [0, 0, 0, 0, 0, 0, 1, 1, 1, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2]
      , xt = [0, 1, 2, 3, 4, 5, 1, 2, 4, 5, 2, 0, 5, 2, 0, 0, 1, 2, 3, 4, 5];
    function Bt(t, e) {
        if (e) {
            for (var r = t.indexOf("{"); -1 != r; )
                0,
                r = t.indexOf("{", r + 1);
            if (null == ct)
                X = 0,
                ct = [];
            else {
                for (var n = [], o = 0; o < ct.length; o++)
                    n[o] = ct[o];
                X = ct.length,
                ct = n
            }
        }
        var a = 1;
        for (r = t.indexOf(";"); -1 != r; )
            a++,
            r = t.indexOf(";", r + 1);
        var f = []
          , l = 0;
        for (r = t.indexOf(";"),
        a = 0; -1 != r; )
            f[a++] = Ut(t.substring(l, r), e),
            l = r + 1,
            r = t.indexOf(";", l);
        return f[a] = Ut(t.substring(l), e),
        f
    }
    var It = ["m", "t", "c", "s", "a"];
    function Ut(t, e) {
        for (var r = 0, n = [], o = 0; o < t.length; o++)
            if ("." == t.charAt(o))
                n[r] = -1,
                r++;
            else if ("{" == t.charAt(o)) {
                o++;
                for (var a = ""; o < t.length && "}" != t.charAt(o); )
                    e && (a += t.charAt(o)),
                    o++;
                e && (ct[X] = a,
                n[r] = 1e3 + X,
                X++,
                r++)
            } else
                for (var f = 0; f < 21; f++)
                    if (t.charAt(o) == "UDFBLRESMXYZxyzudfblr".charAt(f)) {
                        o++;
                        var l = Et[f];
                        if (n[r] = 24 * xt[f],
                        o < t.length && 0 == Et[f])
                            for (var i = 0; i < It.length; i++)
                                if (t.charAt(o) == It[i]) {
                                    l = i + 1,
                                    o++;
                                    break
                                }
                        n[r] += 4 * l,
                        o < t.length && ("1" == t.charAt(o) ? o++ : "'" == t.charAt(o) || "3" == t.charAt(o) ? (n[r] += 2,
                        o++) : "2" == t.charAt(o) && (++o < t.length && "'" == t.charAt(o) ? (n[r] += 3,
                        o++) : n[r] += 1)),
                        r++,
                        o--;
                        break
                    }
        var u = [];
        for (o = 0; o < r; o++)
            u[o] = n[o];
        return u
    }
    function Pt(t, e, r) {
        if (e >= t.length)
            return "";
        for (var n = "", o = e; o < r; o++)
            n += Xt(t, o);
        return n
    }
    var Ct = [[["U", "D", "F", "B", "L", "R"], ["Um", "Dm", "Fm", "Bm", "Lm", "Rm"], ["Ut", "Dt", "Ft", "Bt", "Lt", "Rt"], ["Uc", "Dc", "Fc", "Bc", "Lc", "Rc"], ["Us", "Ds", "Fs", "Bs", "Ls", "Rs"], ["Ua", "Da", "Fa", "Ba", "La", "Ra"]], [["U", "D", "F", "B", "L", "R"], ["~E", "E", "S", "~S", "M", "~M"], ["u", "d", "f", "b", "l", "r"], ["Z", "~Z", "Y", "~Y", "~X", "X"], ["Us", "Ds", "Fs", "Bs", "Ls", "Rs"], ["Ua", "Da", "Fa", "Ba", "La", "Ra"]], [["U", "D", "F", "B", "L", "R"], ["~E", "E", "S", "~S", "M", "~M"], ["u", "d", "f", "b", "l", "r"], ["Y", "~Y", "Z", "~Z", "~X", "X"], ["Us", "Ds", "Fs", "Bs", "Ls", "Rs"], ["Ua", "Da", "Fa", "Ba", "La", "Ra"]], [["U", "D", "F", "B", "L", "R"], ["u", "d", "f", "b", "l", "r"], ["Uu", "Dd", "Ff", "Bb", "Ll", "Rr"], ["QU", "QD", "QF", "QB", "QL", "QR"], ["UD'", "DU'", "FB'", "BF'", "LR'", "RL'"], ["UD", "DU", "FB", "BF", "LR", "RL"]], [["U", "D", "F", "B", "L", "R"], ["~E", "E", "S", "~S", "M", "~M"], ["u", "d", "f", "b", "l", "r"], ["y", "~y", "z", "~z", "~x", "x"], ["Us", "Ds", "Fs", "Bs", "Ls", "Rs"], ["Ua", "Da", "Fa", "Ba", "La", "Ra"]]]
      , Wt = ["", "2", "'", "2'"];
    function Xt(t, e) {
        if (e >= t.length)
            return "";
        if (t[e] >= 1e3)
            return "";
        if (-1 == t[e])
            return ".";
        var r = Ct[O - 1][Math.floor(t[e] / 4) % 6][Math.floor(t[e] / 24)];
        return "~" == r.charAt(0) ? r.substring(1) + Wt[(t[e] + 2) % 4] : r + Wt[t[e] % 4]
    }
    var Yt = ["", "q", "h", "s"];
    function qt(t) {
        for (var e = 0, r = 0; r < t.length; r++)
            t[r] < 1e3 && e++;
        return e
    }
    function zt(t, e) {
        for (var r = 0, n = 0; ; ) {
            for (; r < t.length && t[r] >= 1e3; )
                r++;
            if (n == e)
                break;
            r < t.length && (n++,
            r++)
        }
        return r
    }
    function Ot(t, e) {
        for (var r = 0, n = 0; n < t.length && (n < e || e < 0); n++)
            r += Qt(t[n]);
        return r
    }
    function Qt(t) {
        if (t < 0 || t >= 1e3)
            return 0;
        var e = t % 4
          , r = Math.floor(t / 4) % 6
          , n = 1;
        switch (W) {
        case 1:
            1 != e && 3 != e || (n *= 2);
        case 2:
            1 != r && 4 != r && 5 != r || (n *= 2);
        case 3:
            3 == r && (n = 0),
            3 != W || 4 != r && 5 != r || (n *= 2)
        }
        return n
    }
    function Nt(t) {
        X = t.length > 0 && t[0] >= 1e3 ? t[0] - 1e3 : -1
    }
    function Zt(t, e, r, n, o) {
        for (var a = o ? r + n : r; ; ) {
            if (o) {
                if (a <= r)
                    break;
                a--
            }
            if (e[a] >= 1e3)
                X = o ? -1 : e[a] - 1e3;
            else if (e[a] >= 0) {
                var f = e[a] % 4 + 1
                  , l = Math.floor(e[a] / 4) % 6;
                4 == f && (f = 2),
                o && (f = 4 - f),
                oe(t, Math.floor(e[a] / 24), f, l)
            }
            if (!o && ++a >= r + n)
                break
        }
    }
    var Ht = 0
      , Gt = 0;
    function Kt(t) {
        if (jt(),
        (S || 0 != it.length && 0 != it[B].length) && (!S || 0 != ut.length && 0 != ut[0].length)) {
            switch (U = 1,
            P = !1,
            C = !0,
            t) {
            case 0:
                break;
            case 1:
                U = -1;
                break;
            case 2:
                P = !0;
                break;
            case 3:
                U = -1,
                P = !0;
                break;
            case 4:
                C = !1
            }
            Or(Ht++, U)
        }
    }
    function jt() {
        1 == A && (b = !0)
    }
    function Jt() {
        I = 0,
        it.length > 0 && Nt(it[B]),
        lt = !0,
        M = !1;
        for (var t = 0; t < 6; t++)
            for (var e = 0; e < 4; e++)
                Z[t][e] = G[t][e],
                H[t][e] = K[t][e];
        kt > 0 && (it = Bt(dn(2, Lt), !1)),
        2 == kt && Zt(Z, it[0], 0, it[0].length, !0);
        for (t = 0; t < 3; t++)
            et[t] = ot[t],
            rt[t] = at[t],
            nt[t] = ft[t]
    }
    var Vt = [[[0, 2], [0, 2]], [[0, 2], [0, 2]], [[0, 2], [0, 2]], [[0, 2], [0, 2]], [[0, 2], [0, 2]], [[0, 2], [0, 2]]]
      , $t = []
      , _t = []
      , te = [[[0, 0], [0, 0]], [[0, 2], [0, 2]], [[0, 2], [0, 1]], [[0, 1], [0, 2]], [[0, 2], [1, 2]], [[1, 2], [0, 2]]]
      , ee = [[1, 0, 3, 3, 2, 3], [0, 1, 5, 5, 4, 5], [2, 3, 1, 0, 3, 2], [4, 5, 0, 1, 5, 4], [3, 2, 2, 4, 1, 0], [5, 4, 4, 2, 0, 1]]
      , re = [[0, 1, 5, 5, 4, 5], [1, 0, 3, 3, 2, 3], [4, 5, 0, 1, 5, 4], [2, 3, 1, 0, 3, 2], [5, 4, 4, 2, 0, 1], [3, 2, 2, 4, 1, 0]];
    function ne(t) {
        for (var e = 0; e < 6; e++)
            $t[e] = te[ee[t][e]],
            _t[e] = te[re[t][e]];
        lt = !1
    }
    function oe(t, e, r, n) {
        5 == n ? ce(t, 1 ^ e, 4 - r) : 2 != n && 3 != n && 4 != n || ce(t, 1 ^ e, r),
        ce(t, e, 4 - r)
    }
    var ae = [0, 1, 3, 2]
      , fe = [1, 2, -1, -2]
      , le = [0, 1, 3, 2]
      , ie = [[3, 3, 3, 0], [2, 1, 1, 1], [3, 3, 0, 0], [2, 1, 1, 2], [3, 2, 0, 0], [2, 2, 0, 1]]
      , ue = [];
    function ce(t, e, r) {
        se(t, e, r),
        1 == Mt && r > 0 && r < 4 && (se(H, e, r),
        function(t, e) {
            for (var r = 0; r < 4; r++)
                H[t][r] = (H[t][r] + 4 - e) % 4;
            4 == t && (ke(2, 1, 3),
            1 == e ? ke(0, 1, 1) : 2 == e ? ke(0, 1, 2) : 3 == e && ke(0, 2, 0));
            5 == t && (ke(0, 1, 3),
            1 == e ? ke(1, 2, 0) : 2 == e ? ke(2, 1, 2) : 3 == e && ke(2, 1, 1));
            2 == t && Le(0, 4 - e);
            3 == t && Le(1, e)
        }(e, r))
    }
    function se(t, e, r) {
        for (var n = 0; n < 4; n++)
            ue[(n + r) % 4] = t[e][ae[n]];
        for (n = 0; n < 4; n++)
            t[e][ae[n]] = ue[n];
        var o = 2 * r;
        for (n = 0; n < 4; n++)
            for (var a = _[e][n], f = ie[e][n], l = fe[f], i = le[f], u = 0; u < 2; u++,
            o++)
                ue[o % 8] = t[a][u * l + i];
        for (n = 0,
        o = 0; n < 4; n++)
            for (a = _[e][n],
            f = ie[e][n],
            l = fe[f],
            i = le[f],
            u = 0; u < 2; u++,
            o++)
                t[a][u * l + i] = ue[o]
    }
    var he, ve, de, ge, me, be, Me, pe = [[[0, 1, 0], [0, 2, 1], [0, 2, 4], [0, 1, 5]], [[2, 1, 0], [1, 2, 1], [1, 2, 4], [2, 1, 5]]];
    function ke(t, e, r) {
        for (var n = t, o = 0; o < 2; n += e,
        o++)
            H[r][n] = (H[r][n] + 2) % 4
    }
    function Le(t, e) {
        for (var r = 0; r < 4; r++)
            for (var n = pe[t][r], o = n[0], a = 0; a < 2; o += n[1],
            a++)
                H[n[2]][o] = (H[n[2]][o] + e) % 4
    }
    var we, ye, Ae = [], Re = [], Se = [], Te = [], De = [[[0, 0], [2, 0], [2, 1], [0, 1]], [[2, 0], [2, 2], [1, 2], [1, 0]], [[2, 2], [0, 2], [0, 1], [2, 1]], [[0, 2], [0, 0], [1, 0], [1, 2]]], Fe = [[1, 0], [0, 1], [-1, 0], [0, -1]], Ee = [[1, 1, 1, 1], [1, 1, 1, 1], [1, -1, 1, -1], [1, -1, 1, -1], [-1, 1, -1, 1], [1, -1, 1, -1]], xe = [], Be = [], Ie = [[[1, 0, 0], [0, 0, 0], [0, 0, 1]], [[1, 0, 0], [0, 1, 0], [0, 0, 0]], [[0, 0, 0], [0, 1, 0], [0, 0, 1]]], Ue = [[[0, 0, 1], [0, 0, 0], [-1, 0, 0]], [[0, 1, 0], [-1, 0, 0], [0, 0, 0]], [[0, 0, 0], [0, 0, 1], [0, -1, 0]]], Pe = [[[0, 0, 0], [0, 1, 0], [0, 0, 0]], [[0, 0, 0], [0, 0, 0], [0, 0, 1]], [[1, 0, 0], [0, 0, 0], [0, 0, 0]]], Ce = [1, -1, 1, -1, 1, -1], We = [], Xe = [], Ye = [], qe = [], ze = [], Oe = [], Qe = [], Ne = [], Ze = [], He = [], Ge = [], Ke = [], je = [[1, 0], [1, 0], [1, 1], [1, 1], [1, 1], [1, 2]], Je = [], Ve = [[0, 2], [2, 1], [2, 2], [2, 2], [2, 2], [2, 2]], $e = [[0, 1], [1, 0], [0, 1]];
    function _e() {
        if (_r.save(),
        _r.fillStyle = e,
        1 != Y || 0 != vt && !S ? (Er(_r, 0, 0, he, ve),
        _r.fillRect(0, 0, he, ve)) : (Er(_r, 0, 0, he, ve - tn),
        _r.fillRect(0, 0, he, ve - tn)),
        Me = 0,
        lt)
            cr(et, rt, nt, Vt, 3);
        else {
            for (var t = Math.cos(h + s), n = Math.sin(h + s) * Ce[u], i = 0; i < 3; i++) {
                We[i] = 0,
                Xe[i] = 0;
                for (var v = 0; v < 3; v++) {
                    var d = Math.floor(u / 2);
                    We[i] += et[v] * (Pe[d][i][v] + Ie[d][i][v] * t + Ue[d][i][v] * n),
                    Xe[i] += rt[v] * (Pe[d][i][v] + Ie[d][i][v] * t + Ue[d][i][v] * n)
                }
            }
            yr(Ye, We, Xe);
            var g = Math.cos(h - s)
              , m = Math.sin(h - s) * Ce[u];
            for (i = 0; i < 3; i++) {
                qe[i] = 0,
                ze[i] = 0;
                for (v = 0; v < 3; v++) {
                    d = Math.floor(u / 2);
                    qe[i] += et[v] * (Pe[d][i][v] + Ie[d][i][v] * g + Ue[d][i][v] * m),
                    ze[i] += rt[v] * (Pe[d][i][v] + Ie[d][i][v] * g + Ue[d][i][v] * m)
                }
            }
            yr(Oe, qe, ze),
            He[0] = et,
            Ge[0] = rt,
            Ke[0] = nt,
            He[1] = We,
            Ge[1] = Xe,
            Ke[1] = Ye,
            He[2] = qe,
            Ge[2] = ze,
            Ke[2] = Oe,
            Je[0] = $t,
            Je[1] = _t,
            wr(pr(br(Qe, et), 5 + T), pr(br(Ze, j[u]), 1 / 3)),
            wr(pr(br(Ne, et), 5 + T), pr(br(Ze, j[1 ^ u]), 1 / 3));
            var b, M = kr(Qe, j[u]), p = kr(Ne, j[1 ^ u]);
            b = M < 0 && p > 0 ? 0 : M > 0 && p < 0 ? 1 : 2,
            cr(He[je[c][$e[b][0]]], Ge[je[c][$e[b][0]]], Ke[je[c][$e[b][0]]], Je[$e[b][0]], Ve[c][$e[b][0]]),
            cr(He[je[c][$e[b][1]]], Ge[je[c][$e[b][1]]], Ke[je[c][$e[b][1]]], Je[$e[b][1]], Ve[c][$e[b][1]])
        }
        if (z || A || (ht = -1),
        !(kt > 0 && 2 == Y)) {
            if (!S && it.length > 0) {
                if (it[B].length > 0) {
                    if (vt > 0) {
                        _r.lineWidth = rn,
                        _r.strokeStyle = l;
                        var k = (he - 2) * function(t, e) {
                            for (var r = 0, n = 0; n < e; n++)
                                t[n] < 1e3 && r++;
                            return r
                        }(it[B], I) / qt(it[B]);
                        _r.fillStyle = f,
                        _r.fillRect(en, ve - vt - en, he - tn, vt),
                        _r.fillStyle = a,
                        _r.fillRect(en, ve - vt - en, k, vt),
                        _r.beginPath(),
                        _r.rect(en, ve - vt - en, he - tn, vt),
                        _r.stroke()
                    }
                    var L = Ot(it[B], I) + "/" + Ot(it[B], -1) + Yt[W];
                    _r.font = "bold " + dt + "px helvetica";
                    var w = _r.measureText(L).width
                      , y = he - w - 2
                      , R = ve - vt - Math.floor(3 * tn);
                    O > 0 ? (dr(_r, L, gt ? y - tn : y, R - dt),
                    function(t, e) {
                        var n = 0 == I ? zt(it[B], I) : I
                          , o = Pt(it[B], 0, n)
                          , a = Xt(it[B], n)
                          , f = Pt(it[B], n + 1, it[B].length)
                          , l = t.measureText(o).width
                          , i = t.measureText(a).width
                          , u = t.measureText(f).width
                          , c = 1;
                        c + l + i + u > he && (c = Math.min(1, he / 2 - l - i / 2),
                        c = Math.max(c, he - l - i - u - 2));
                        i > 0 && (t.fillStyle = r,
                        t.lineWidth = 2,
                        t.strokeStyle = "black",
                        t.beginPath(),
                        an <= 14 ? t.fillRect(c + l - 1, ve - vt - dt - Math.floor(4 * tn), i + 2, dt + Math.floor(3 * tn)) : t.fillRect(c + l - 1, ve - vt - dt - Math.floor(2 * tn), i + 2, dt + Math.floor(tn)));
                        l > 0 && dr(t, o, c, e);
                        i > 0 && dr(t, a, c + l, e);
                        u > 0 && dr(t, f, c + l + i, e)
                    }(_r, R)) : dr(_r, L, gt ? y - tn : y, R)
                }
                if (it.length > 1) {
                    L = B + 1 + "/" + it.length,
                    w = _r.measureText(L).width,
                    y = he - w - q - Math.floor(5 * tn);
                    dr(_r, L, y, tr()),
                    Ur(_r, 7, he - q / 2, q / 2)
                }
            }
            X >= 0 && (_r.font = "bold " + dt + "px helvetica",
            dr(_r, ct[X], gt ? tn : 0, tr()))
        }
        _r.restore(),
        st && 0 != Y && function(t) {
            var e = q % 2 == 0 ? 1 : 0;
            if (e += Math.floor(tn + .5) - 1,
            2 == Y)
                return t.fillStyle = 0 == ht || kt > 0 && 6 == ht ? zr(o) : o,
                t.fillRect(en, ve - q, q, q),
                t.lineWidth = rn,
                t.strokeStyle = l,
                t.beginPath(),
                t.rect(en, ve - q - en, q, q),
                t.stroke(),
                void Ur(t, 0, q / 2, ve - (q + 1) / 2 - e);
            if (1 == Y) {
                for (var r = 0, n = 0; n < 7; n++) {
                    var a = Math.floor((he - r) / (7 - n));
                    t.fillStyle = ht == n ? zr(o) : o,
                    t.fillRect(r, ve, a, q),
                    t.lineWidth = rn,
                    t.strokeStyle = l,
                    t.beginPath(),
                    0 == n ? t.rect(r + en, ve - en, a - tn, q) : t.rect(r - en, ve - en, a, q),
                    t.stroke(),
                    t.strokeStyle = "black",
                    Ur(t, n, r + a / 2, ve + q / 2 - e),
                    r += a
                }
                st = !1
            }
        }(_r)
    }
    function tr() {
        return an < 10 ? Math.floor(10 * tn) : an < 12 ? Math.floor(12 * tn) : an < 14 ? Math.floor(14 * tn) : dt
    }
    var er = []
      , rr = []
      , nr = []
      , or = []
      , ar = [[], [], [], [], [], []]
      , fr = [[], [], [], [], [], []]
      , lr = [[.1, .1], [.9, .1], [.9, .9], [.1, .9]]
      , ir = [[0, 0], [0, 1], [1, 1], [1, 0]]
      , ur = [];
    function cr(t, e, r, n, o) {
        for (var a = 0; a < 8; a++) {
            var f = (s = he < ve ? he : ve - vt) / 3.7 * kr(J[a], e) * D
              , l = s / 3.7 * kr(J[a], r) * D;
            f /= 1 - (h = s / (5 + T) * kr(J[a], t) * D) / s,
            l /= 1 - h / s,
            nr[a] = he / 2 + f,
            or[a] = 0 == F ? (ve - vt) / 2 * D - l : 2 == F ? ve - vt - (ve - vt) / 2 * D - l : (ve - vt) / 2 - l
        }
        for (a = 0; a < 6; a++)
            for (var c = 0; c < 4; c++)
                ar[a][c] = nr[V[a][c]],
                fr[a][c] = or[V[a][c]];
        if (E)
            for (a = 0; a < 6; a++)
                if (wr(pr(br(Qe, t), 5 + T), j[a]),
                kr(Qe, j[a]) < 0) {
                    pr(br(ur, j[a]), x);
                    var s, h;
                    f = (s = he < ve ? he : ve - vt) / 3.7 * kr(ur, e),
                    l = s / 3.7 * kr(ur, r);
                    f /= 1 - (h = s / (5 + T) * kr(ur, t)) / s,
                    l /= 1 - h / s;
                    var v = n[a][0][1] - n[a][0][0]
                      , d = n[a][1][1] - n[a][1][0];
                    if (v > 0 && d > 0)
                        for (var g = 0, m = n[a][1][0]; g < d; g++,
                        m++)
                            for (var b = 0, k = n[a][0][0]; b < v; b++,
                            k++) {
                                for (c = 0; c < 4; c++)
                                    sr(a, c, er, rr, k + lr[c][0], m + lr[c][1], M),
                                    er[c] = Math.floor(er[c] + (M ? -f : f)),
                                    rr[c] = Math.floor(rr[c] - l);
                                1 == Mt ? (Wr(_r, er, rr, "#fdfdfd"),
                                Xr(_r, er, rr, a, H[a][2 * m + k], N[Z[a][2 * m + k]])) : Wr(_r, er, rr, N[Z[a][2 * m + k]])
                            }
                }
        for (a = 0; a < 6; a++) {
            v = n[a][0][1] - n[a][0][0],
            d = n[a][1][1] - n[a][1][0];
            if (v <= 0 || d <= 0) {
                for (c = 0; c < 4; c++) {
                    var L = $[a][c];
                    er[c] = Math.floor(ar[a][c] + 1 * (ar[1 ^ a][L] - ar[a][c]) / 2),
                    rr[c] = Math.floor(fr[a][c] + 1 * (fr[1 ^ a][L] - fr[a][c]) / 2),
                    M && (er[c] = he - er[c])
                }
                Wr(_r, er, rr, i)
            } else {
                for (c = 0; c < 4; c++)
                    sr(a, c, er, rr, n[a][0][ir[c][0]], n[a][1][ir[c][1]], M);
                Wr(_r, er, rr, i)
            }
        }
        for (a = 0; a < 6; a++)
            if (wr(pr(br(Qe, t), 5 + T), j[a]),
            kr(Qe, j[a]) > 0) {
                v = n[a][0][1] - n[a][0][0],
                d = n[a][1][1] - n[a][1][0];
                if (v > 0 && d > 0)
                    for (g = 0,
                    m = n[a][1][0]; g < d; g++,
                    m++)
                        for (b = 0,
                        k = n[a][0][0]; b < v; b++,
                        k++) {
                            for (c = 0; c < 4; c++)
                                sr(a, c, er, rr, k + lr[c][0], m + lr[c][1], M);
                            1 == Mt ? (Wr(_r, er, rr, "#fdfdfd"),
                            Xr(_r, er, rr, a, H[a][2 * m + k], N[Z[a][2 * m + k]])) : Wr(_r, er, rr, N[Z[a][2 * m + k]])
                        }
                if (!p || A)
                    continue;
                var w = (ar[a][1] - ar[a][0] + ar[a][2] - ar[a][3]) / 6
                  , y = (ar[a][3] - ar[a][0] + ar[a][2] - ar[a][1]) / 6
                  , R = (fr[a][1] - fr[a][0] + fr[a][2] - fr[a][3]) / 6
                  , S = (fr[a][3] - fr[a][0] + fr[a][2] - fr[a][1]) / 6;
                if (3 == o)
                    for (c = 0; c < 4; c++) {
                        for (L = 0; L < 4; L++)
                            sr(a, L, Ae[Me], Re[Me], De[c][L][0], De[c][L][1], !1);
                        if (Se[Me] = (w * Fe[c][0] + R * Fe[c][1]) * Ee[a][c],
                        Te[Me] = (y * Fe[c][0] + S * Fe[c][1]) * Ee[a][c],
                        xe[Me] = _[a][c % 4],
                        Be[Me] = Math.floor(c / 4),
                        12 == ++Me)
                            break
                    }
                else if (0 == o && a != u && v > 0 && d > 0) {
                    for (c = 2 == v ? 0 == n[a][1][0] ? 0 : 2 : 0 == n[a][0][0] ? 3 : 1,
                    L = 0; L < 4; L++)
                        sr(a, L, Ae[Me], Re[Me], De[c][L][0], De[c][L][1], !1);
                    Se[Me] = (w * Fe[c][0] + R * Fe[c][1]) * Ee[a][c],
                    Te[Me] = (y * Fe[c][0] + S * Fe[c][1]) * Ee[a][c],
                    xe[Me] = u,
                    Be[Me] = 0,
                    Me++
                }
            }
    }
    function sr(t, e, r, n, o, a, f) {
        o /= 2,
        a /= 2;
        var l = ar[t][0] + (ar[t][1] - ar[t][0]) * o
          , i = fr[t][0] + (fr[t][1] - fr[t][0]) * o
          , u = ar[t][3] + (ar[t][2] - ar[t][3]) * o
          , c = fr[t][3] + (fr[t][2] - fr[t][3]) * o;
        r[e] = Math.floor(.5 + l + (u - l) * a),
        n[e] = Math.floor(.5 + i + (c - i) * a),
        f && (r[e] = he - r[e])
    }
    var hr = [1, 1, -1, -1, -1, 1, 1, -1, -1, 0, 1, 0, 0, 1, 0, -1]
      , vr = [];
    function dr(t, e, r, o) {
        if (gt) {
            t.fillStyle = "black";
            for (var a = 0; a < vr.length; a += 2)
                t.fillText(e, r + vr[a], o + vr[a + 1]);
            t.fillStyle = "white"
        } else
            t.fillStyle = n;
        t.fillText(e, r, o)
    }
    var gr = [-1, 3, 1, -1, 0, 2, 4, -1]
      , mr = [];
    function br(t, e) {
        return t[0] = e[0],
        t[1] = e[1],
        t[2] = e[2],
        t
    }
    function Mr(t) {
        var e = Math.sqrt(kr(t, t));
        return t[0] /= e,
        t[1] /= e,
        t[2] /= e,
        t
    }
    function pr(t, e) {
        return t[0] *= e,
        t[1] *= e,
        t[2] *= e,
        t
    }
    function kr(t, e) {
        return t[0] * e[0] + t[1] * e[1] + t[2] * e[2]
    }
    function Lr(t, e) {
        return t[0] += e[0],
        t[1] += e[1],
        t[2] += e[2],
        t
    }
    function wr(t, e) {
        return t[0] -= e[0],
        t[1] -= e[1],
        t[2] -= e[2],
        t
    }
    function yr(t, e, r) {
        return t[0] = e[1] * r[2] - e[2] * r[1],
        t[1] = e[2] * r[0] - e[0] * r[2],
        t[2] = e[0] * r[1] - e[1] * r[0],
        t
    }
    function Ar(t, e) {
        var r = Math.sin(e)
          , n = Math.cos(e)
          , o = t[1] * n - t[2] * r
          , a = t[1] * r + t[2] * n;
        return t[1] = o,
        t[2] = a,
        t
    }
    function Rr(t, e) {
        var r = Math.sin(e)
          , n = Math.cos(e)
          , o = t[0] * n - t[2] * r
          , a = t[0] * r + t[2] * n;
        return t[0] = o,
        t[2] = a,
        t
    }
    function Sr(t, e) {
        var r = Math.sin(e)
          , n = Math.cos(e)
          , o = t[0] * n - t[1] * r
          , a = t[0] * r + t[1] * n;
        return t[0] = o,
        t[1] = a,
        t
    }
    function Tr(t, e, r) {
        return "#" + Dr(t.toString(16)) + Dr(e.toString(16)) + Dr(r.toString(16))
    }
    function Dr(t) {
        return ("00" + t).substring(t.length)
    }
    function Fr(t) {
        for (var e = 0, r = 0; r < 6; r++)
            for (var n = 0; n < 16; n++)
                if (t[r].toLowerCase() == "0123456789abcdef".charAt(n)) {
                    e++;
                    break
                }
        return 6 == e
    }
    function Er(t, e, r, n, o) {
        t.beginPath(),
        t.moveTo(e, r),
        t.lineTo(e + n, r),
        t.lineTo(e + n, r + o),
        t.lineTo(e, r + o),
        t.lineTo(e, r),
        t.closePath(),
        t.clip()
    }
    var xr, Br, Ir = [];
    function Ur(t, e, r, n) {
        switch (r = Math.floor(r),
        n = Math.floor(n),
        e) {
        case 0:
            Cr(t, r - Ir[4], n - Ir[3], Ir[3], Ir[6] + 1),
            Pr(t, r + Ir[4], n, -1);
            break;
        case 1:
            Cr(t, r + Ir[1], n - Ir[3], Ir[3], Ir[6] + 1),
            Pr(t, r - Ir[1], n, -1);
            break;
        case 2:
            Pr(t, r + Ir[1], n, -1);
            break;
        case 3:
            A ? Cr(t, r - Ir[4], n - Ir[3], Ir[7], Ir[7]) : (Cr(t, r - Ir[4], n - Ir[2], Ir[7], Ir[5]),
            Cr(t, r - Ir[2], n - Ir[4], Ir[3], Ir[9]));
            break;
        case 4:
            Pr(t, r - Ir[2], n, 1);
            break;
        case 5:
            Cr(t, r - Ir[4], n - Ir[3], Ir[3], Ir[6] + 1),
            Pr(t, r, n, 1);
            break;
        case 6:
            Cr(t, r + Ir[1], n - Ir[3], Ir[3], Ir[6] + 1),
            Pr(t, r - Ir[4], n, 1);
            break;
        case 7:
            t.fillStyle = 7 == ht ? zr(o) : o,
            t.fillRect(he - q - Ir[1] - en, Ir[1] + en, q, q),
            t.lineWidth = rn,
            t.strokeStyle = l,
            t.beginPath(),
            tn % 2 == 0 ? t.rect(he - q - Ir[1], Ir[1], q, q) : t.rect(he - q - Ir[1] - en, Ir[1] + en, q, q),
            t.stroke(),
            Pr(t, r - Ir[3], n + Ir[1], 1)
        }
    }
    function Pr(t, e, r, n) {
        var o = 3 * tn
          , a = []
          , f = [];
        a[0] = e,
        a[1] = e + n,
        a[2] = e + 4 * tn * n,
        a[3] = e + n,
        a[4] = e,
        f[0] = r - o,
        f[1] = r - o,
        f[2] = r,
        f[3] = r + o,
        f[4] = r + o,
        function(t, e, r) {
            t.beginPath(),
            t.moveTo(e[0] + en, r[0] + en);
            for (var n = 1; n < 5; n++)
                t.lineTo(e[n] + en, r[n] + en);
            t.closePath(),
            t.fillStyle = "white",
            t.strokeStyle = "black",
            t.fill(),
            t.lineWidth = rn,
            t.stroke()
        }(t, a, f)
    }
    function Cr(t, e, r, n, o) {
        t.lineWidth = rn,
        t.beginPath(),
        t.rect(e + en, r + en, n - 1, o - 1),
        t.fillStyle = "white",
        t.fill(),
        t.strokeStyle = "black",
        t.stroke()
    }
    function Wr(t, e, r, n) {
        t.beginPath(),
        t.moveTo(e[0], r[0]),
        t.lineTo(e[1], r[1]),
        t.lineTo(e[2], r[2]),
        t.lineTo(e[3], r[3]),
        t.closePath(),
        t.fillStyle = n,
        t.strokeStyle = n,
        t.fill(),
        t.lineWidth = .7,
        t.stroke()
    }
    function Xr(t, e, r, n, o, a) {
        var f = []
          , l = []
          , i = [[0, 1, 2, 3], [3, 0, 1, 2], [2, 3, 0, 1], [1, 2, 3, 0]];
        if (2 != wt || "#ffffff" != a) {
            for (var u = 0; u < 4; u++)
                f[u] = Math.floor(e[u] + .05 * (e[i[2][u]] - e[u])),
                l[u] = Math.floor(r[u] + .05 * (r[i[2][u]] - r[u]));
            0 == n && (o = (o + 1) % 4),
            4 == n && (o = (o + 3) % 4);
            var c = i[o][0]
              , s = i[o][1]
              , h = i[o][2]
              , v = i[o][3]
              , d = .26 * (f[h] - f[s])
              , g = .26 * (l[h] - l[s])
              , m = (f[c] - f[s]) / 2
              , b = l[s] + (l[c] - l[s]) / 2
              , M = l[h] + (l[v] - l[h]) / 2
              , p = (f[v] - f[h]) / 2
              , k = 1 ^ o;
            t.fillStyle = a,
            t.beginPath(),
            t.moveTo(f[c] + (f[v] - f[c]) / 2, l[c] + (l[v] - l[c]) / 2),
            t.lineTo(f[k] + m, b),
            t.lineTo(f[k] + d + m, b + g),
            t.lineTo(f[k] + d, l[k] + g),
            k = (k + 1) % 4,
            t.lineTo(f[k] - d, l[k] - g),
            t.lineTo(f[k] - d + p, M - g),
            t.lineTo(f[k] + p, M),
            t.closePath(),
            t.fill(),
            t.lineWidth = .6 * tn,
            t.strokeStyle = "black",
            t.stroke()
        }
    }
    function Yr(t) {
        return "white" == t ? "#FFFFFF" : "black" == t ? "#000000" : "#808080"
    }
    function qr(t) {
        return "#" != t.substring(0, 1) && (t = Yr(t)),
        (299 * parseInt(t.substring(1, 3), 16) + 587 * parseInt(t.substring(3, 5), 16) + 114 * parseInt(t.substring(5, 7), 16)) / 1e3
    }
    function zr(t) {
        "#" != t.substring(0, 1) && (t = Yr(t));
        var e = parseInt(t.substring(1, 3), 16)
          , r = parseInt(t.substring(3, 5), 16)
          , n = parseInt(t.substring(5, 7), 16);
        return Tr(e = Math.floor(.7 * e), r = Math.floor(.7 * r), n = Math.floor(.7 * n))
    }
    function Or(t, e) {
        if (t > Gt)
            setTimeout(Or, 0, t, e);
        else {
            if (!C) {
                for (var r = it[B]; I < r.length; ) {
                    if (r[I] >= 1e3)
                        X = r[I] - 1e3;
                    else if (-1 != r[I]) {
                        var n = r[I] % 4 + 1
                          , o = Math.floor(r[I] / 4) % 6
                          , a = Math.floor(r[I] / 24);
                        oe(Z, a, 4 == n ? 2 : n, o)
                    }
                    I++
                }
                return A = !1,
                st = !0,
                _e(),
                void Gt++
            }
            var f, l, i, g, M, p, L = e;
            m = !1,
            requestAnimationFrame(function t() {
                if (T) {
                    if (T = !1,
                    p = !1,
                    k)
                        L > 0 ? I >= r.length && (I = 0,
                        Nt(r)) : (X = -1,
                        0 == I && (I = r.length));
                    else if (L > 0 && I >= r.length || L < 0 && 0 == I)
                        return b = !1,
                        A = !1,
                        Gt++,
                        st = !0,
                        void _e();
                    A = !0,
                    st = !0
                }
                if (D && (D = !1,
                L < 0 && (x = !1,
                0 == I ? (x = !0,
                E = !0) : I--),
                !x)) {
                    if (R = !1,
                    -1 == r[I]) {
                        if (_e(),
                        !P)
                            for (f = Date.now(); Date.now() - f < 1e3; )
                                ;
                    } else
                        r[I] >= 1e3 ? X = L > 0 ? r[I] - 1e3 : -1 : R = !0;
                    if (R) {
                        n = r[I] % 4 + 1,
                        o = Math.floor(r[I] / 4) % 6;
                        var e = n < 3;
                        if (4 == n && (n = 2),
                        L < 0 && (e = !e,
                        n = 4 - n),
                        a = Math.floor(r[I] / 24),
                        w = !1,
                        lt = !0,
                        y = !0,
                        h = 0,
                        tt[a] > 0 && (e = !e),
                        C) {
                            M = Math.PI / 2,
                            g = e ? 1 : -1;
                            var B = 67 * v;
                            2 == n && (M = Math.PI,
                            B = 67 * d),
                            w = !0,
                            u = a,
                            c = o,
                            ne(a),
                            f = Date.now(),
                            l = f,
                            i = g * M / B,
                            s = 0
                        }
                    } else
                        F = !0
                }
                if (!x && (R && (C ? s * g < M ? (_e(),
                (m || b) && (F = !0),
                l = Date.now(),
                s = i * (l - f)) : (F = !0,
                mt && !P && (s -= g * M,
                _e(),
                I > 0 && I < r.length - 1 && (F = !1,
                I += L,
                f = l,
                l = Date.now(),
                s = i * (l - f)))) : F = !0),
                F)) {
                    if (F = !1,
                    D = !0,
                    R && (s = 0,
                    w = !1,
                    lt = !0,
                    oe(Z, a, n, o),
                    y = !1,
                    C && _e(),
                    P && (p = !0)),
                    L > 0) {
                        if (++I < r.length && r[I] >= 1e3 && (X = r[I] - 1e3,
                        I++),
                        I == r.length)
                            if (S) {
                                I = 0,
                                Nt(r);
                                for (var U = 0; U < 6; U++)
                                    for (var W = 0; W < 4; W++)
                                        Z[U][W] = G[U][W],
                                        H[U][W] = K[U][W]
                            } else
                                E = !0
                    } else
                        X = -1;
                    (m || b || p) && (E = !0)
                }
                if (E)
                    return E = !1,
                    T = !0,
                    Ht <= Gt + 1 && (A = !1),
                    st = !0,
                    0 == ht && Jt(),
                    _e(),
                    S && (Jt(),
                    S = !1),
                    b = !1,
                    void Gt++;
                requestAnimationFrame(t)
            });
            var R = !1
              , T = !0
              , D = !0
              , F = !1
              , E = !1
              , x = !1;
            r = S ? ut[0] : it[B]
        }
    }
    document.addEventListener("touchstart", jr),
    document.addEventListener("touchmove", ln),
    document.addEventListener("touchend", Kr),
    document.addEventListener("mousedown", jr),
    document.addEventListener("mousemove", ln),
    document.addEventListener("mouseup", Kr),
    document.addEventListener("contextmenu", sn);
    var Qr = !1
      , Nr = !0
      , Zr = document.getElementsByTagName("div")
      , Hr = Zr.length > 0 && "wrap" == Zr[0].className;
    function Gr(t) {
        Hr ? Zr[0].style.overflow = t : document.body.style.overflow = t
    }
    function Kr(t) {
        if (Qr && void 0 !== t.touches && (t.preventDefault(),
        Gr("auto")),
        Qr ? setTimeout(function() {
            Nr = !0
        }, 100) : Nr = !0,
        Qr = !1,
        R = !1,
        z)
            z = !1,
            st = !0,
            _e();
        else if (w && !y) {
            w = !1,
            h += s,
            s = 0;
            for (var e = h; e < 0; )
                e += 32 * Math.PI;
            var r = Math.floor(8 * e / Math.PI) % 16;
            (bt || r % 4 == 0 || r % 4 == 3) && (r = Math.floor((r + 2) / 4),
            tt[u] > 0 && (r = (4 - r) % 4),
            h = 0,
            lt = !0,
            oe(Z, u, r, c)),
            _e()
        }
    }
    function jr(t) {
        var e = $r.getBoundingClientRect()
          , r = Math.floor(e.left)
          , n = Math.floor(e.top);
        if (void 0 === t.touches)
            var o = t.clientX
              , a = t.clientY;
        else
            o = t.touches[0].clientX,
            a = t.touches[0].clientY;
        o < r || o > r + he / tn || a < n || a > n + (ve + q) / tn || (t.preventDefault(),
        Qr = !0,
        Nr = !1,
        void 0 !== t.touches && (t.preventDefault(),
        Gr("hidden")),
        xr = r,
        Br = n,
        me = de = un(t),
        be = ge = cn(t),
        g = !1,
        (ht = function(t, e) {
            if (0 == Y)
                return -1;
            if (it.length > 1 && t >= he - q && t < he && e >= 0 && e < q)
                return 7;
            if (2 == Y)
                return t >= 0 && t < q && e >= ve - q && e < ve ? 0 : -1;
            if (e < ve)
                return -1;
            for (var r = 0, n = 0; n < 7; n++) {
                var o = (he - r) / (7 - n);
                if (t >= r && t < r + o && e >= ve && e < ve + q)
                    return n;
                r += o
            }
            return -1
        }(de, ge)) >= 0 ? (z = !0,
        3 == ht ? A ? jt() : M = !M : 0 == ht ? kt > 0 && 2 == Y ? 1 == pt ? (pt = !1,
        jt(),
        Jt()) : (pt = !0,
        Kt(gr[ht = 6])) : (jt(),
        Jt()) : 7 == ht ? (jt(),
        setTimeout(Jt, 10),
        B = B < it.length - 1 ? B + 1 : 0) : Kt(gr[ht]),
        st = !0,
        _e()) : vt > 0 && it.length > 0 && it[B].length > 0 && ge > ve - vt && ge <= ve ? L && (jt(),
        Jr(Ht++)) : (M && (me = de = he - de),
        void 0 === t.touches ? !p || A || 0 != t.button || t.shiftKey || (g = !0) : p && !A && (g = !0)))
    }
    function Jr(t) {
        if (t > Gt)
            setTimeout(Jr, 0, t);
        else {
            var e = qt(it[B])
              , r = Math.floor(((de - 1) * e * 2 / (he - 2) + 1) / 2);
            (r = Math.max(0, Math.min(e, r))) > 0 && (r = zt(it[B], r)),
            r > I && Zt(Z, it[B], I, r - I, !1),
            r < I && Zt(Z, it[B], r, I - r, !0),
            I = r,
            R = !0,
            _e(),
            A = !1,
            Gt++
        }
    }
    var Vr, $r, _r, tn, en, rn, nn, on, an, fn;
    mr = [];
    function ln(t) {
        if (Qr && !z) {
            if (R) {
                jt();
                var e = qt(it[B])
                  , r = Math.floor(((un(t) - 1) * e * 2 / (he - 2) + 1) / 2);
                return (r = Math.max(0, Math.min(e, r))) > 0 && (r = zt(it[B], r)),
                r > I && Zt(Z, it[B], I, r - I, !1),
                r < I && Zt(Z, it[B], r, I - r, !0),
                I = r,
                void _e()
            }
            var n = M ? he - un(t) : un(t)
              , o = cn(t)
              , a = n - de
              , f = o - ge;
            if (p && g && !w && !A) {
                me = n,
                be = o;
                for (var l = 0; l < Me; l++) {
                    var i = Ae[l][0]
                      , h = Ae[l][1] - i
                      , v = Ae[l][3] - i
                      , d = Re[l][0]
                      , m = Re[l][1] - d
                      , b = Re[l][3] - d
                      , k = (b * (de - i) - v * (ge - d)) / (h * b - v * m)
                      , L = (-m * (de - i) + h * (ge - d)) / (h * b - v * m);
                    if (k > 0 && k < 1 && L > 0 && L < 1) {
                        if (a * a + f * f < 144)
                            return;
                        if (we = Se[l],
                        ye = Te[l],
                        Math.abs(we * a + ye * f) / Math.sqrt((we * we + ye * ye) * (a * a + f * f)) > .75) {
                            w = !0,
                            u = xe[l],
                            c = Be[l];
                            break
                        }
                    }
                }
                g = !1,
                de = me,
                ge = be
            }
            a = (n - de) / tn,
            f = (o - ge) / tn,
            !w || A ? (Mr(Lr(et, pr(br(mr, rt), -.016 * a))),
            Mr(yr(rt, nt, et)),
            Mr(Lr(et, pr(br(mr, nt), .016 * f))),
            Mr(yr(nt, et, rt)),
            de = n,
            ge = o) : (lt && ne(u),
            s = .03 * (we * a + ye * f) / Math.sqrt(we * we + ye * ye)),
            _e()
        }
    }
    function un(t) {
        return void 0 === t.touches ? (t.clientX - xr) * tn : (t.touches[0].clientX - xr) * tn
    }
    function cn(t) {
        return void 0 === t.touches ? (t.clientY - Br) * tn : (t.touches[0].clientY - Br) * tn
    }
    function sn(t) {
        Nr || t.preventDefault()
    }
    function hn() {
        clearTimeout(Vr),
        Vr = setTimeout(function() {
            vn(),
            st = !0,
            _e()
        }, 20)
    }
    function vn() {
        ve = fn.clientHeight - 1,
        he = fn.clientWidth - 1,
        $r.style.width = he + "px",
        $r.style.height = ve + "px",
        tn = devicePixelRatio,
        en = tn / 2,
        ve = Math.floor(ve * tn),
        he = Math.floor(he * tn),
        $r.width = he,
        $r.height = ve,
        rn = tn,
        q = Math.floor(nn * tn),
        vt = Math.floor(on * tn),
        dt = Math.floor(an * tn);
        for (var t = 1; t < 10; t++)
            Ir[t] = t * tn;
        for (t = 0; t < hr.length; t++)
            vr[t] = hr[t] * tn;
        1 == Y && (ve -= q)
    }
    function dn(t, e) {
        var r, n, o = ["R", "L", "F", "B", "U", "D"], a = ["", "m", "n"], f = ["", "2", "'"], l = -1, i = -1, u = -1, c = "";
        0 == e && (e = 10 * t);
        for (var s = 0; s < e; s++) {
            for (; l == i || Math.floor(l / 2) == Math.floor(i / 2) && l == u; )
                l = Math.floor(6 * Math.random());
            u = i,
            i = l,
            r = Math.floor(3 * Math.random()),
            t <= 3 ? c += "" + o[l] + f[r] + " " : (n = Math.floor(Math.random() * (t > 4 ? 3 : 2)),
            5 == t && 1 == n && (n = 0),
            c += "" + o[l] + a[n] + f[r] + " ")
        }
        return c
    }
    window.addEventListener("resize", hn);
    var gn = [];
    function mn() {
        document.removeEventListener("mousedown", jr),
        document.removeEventListener("touchstart", jr),
        document.removeEventListener("touchmove", ln),
        document.removeEventListener("touchend", Kr),
        document.removeEventListener("mousedown", jr),
        document.removeEventListener("mousemove", ln),
        document.removeEventListener("mouseup", Kr),
        document.removeEventListener("contextmenu", sn),
        window.removeEventListener("resize", hn)
    }
    !function() {
        $r = document.createElement("canvas"),
        void 0 !== t && function() {
            for (var e = t.split("&"), r = 0; r < e.length; r++) {
                var n = e[r].split("=");
                void 0 !== n[1] && (gn[n[0]] = decodeURIComponent(n[1].trim()))
            }
        }();
        var e = Dt("id");
        if (null != e)
            (fn = document.getElementById(e)).innerHTML = "";
        else if (null != document.currentScript)
            fn = document.currentScript.parentNode;
        else {
            var r = document.getElementsByTagName("script")
              , n = r[r.length - 1];
            fn = n.parentNode
        }
        null != fn.id && "undefined" != typeof removeListeners && (removeListeners[fn.id] = mn);
        for (var o = 0; o < 6; o++)
            Z[o] = [],
            H[o] = [],
            G[o] = [],
            K[o] = [];
        for (o = 0; o < 12; o++)
            Ae[o] = [],
            Re[o] = [];
        B = 0,
        h = 0,
        St()
    }()
}
