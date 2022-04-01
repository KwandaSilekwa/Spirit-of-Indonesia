<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="UTF-8">
  <script type="text/javascript">
    var gform;
    gform || (document.addEventListener("gform_main_scripts_loaded", function() {
      gform.scriptsLoaded = !0
    }), window.addEventListener("DOMContentLoaded", function() {
      gform.domLoaded = !0
    }), gform = {
      domLoaded: !1,
      scriptsLoaded: !1,
      initializeOnLoaded: function(o) {
        gform.domLoaded && gform.scriptsLoaded ? o() : !gform.domLoaded && gform.scriptsLoaded ? window.addEventListener("DOMContentLoaded", o) : document.addEventListener("gform_main_scripts_loaded", o)
      },
      hooks: {
        action: {},
        filter: {}
      },
      addAction: function(o, n, r, t) {
        gform.addHook("action", o, n, r, t)
      },
      addFilter: function(o, n, r, t) {
        gform.addHook("filter", o, n, r, t)
      },
      doAction: function(o) {
        gform.doHook("action", o, arguments)
      },
      applyFilters: function(o) {
        return gform.doHook("filter", o, arguments)
      },
      removeAction: function(o, n) {
        gform.removeHook("action", o, n)
      },
      removeFilter: function(o, n, r) {
        gform.removeHook("filter", o, n, r)
      },
      addHook: function(o, n, r, t, i) {
        null == gform.hooks[o][n] && (gform.hooks[o][n] = []);
        var e = gform.hooks[o][n];
        null == i && (i = n + "_" + e.length), gform.hooks[o][n].push({
          tag: i,
          callable: r,
          priority: t = null == t ? 10 : t
        })
      },
      doHook: function(n, o, r) {
        var t;
        if (r = Array.prototype.slice.call(r, 1), null != gform.hooks[n][o] && ((o = gform.hooks[n][o]).sort(function(o, n) {
            return o.priority - n.priority
          }), o.forEach(function(o) {
            "function" != typeof(t = o.callable) && (t = window[t]), "action" == n ? t.apply(null, r) : r[0] = t.apply(null, r)
          })), "filter" == n) return r[0]
      },
      removeHook: function(o, n, t, i) {
        var r;
        null != gform.hooks[o][n] && (r = (r = gform.hooks[o][n]).filter(function(o, n, r) {
          return !!(null != i && i != o.tag || null != t && t != o.priority)
        }), gform.hooks[o][n] = r)
      }
    });
  </script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="p:domain_verify" content="eaaf6e63774fafab214d4957e97303b3" />
  <meta name="facebook-domain-verification" content="mjhguowq87cb35jmj6o9wrdkn2tg16" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <title>Spirit of Indonesia - Art in Voyage</title>

   <!-- FAVICON -->
   <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" type="image/png" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="img/favicons/apple-icon-76x76.html">
  <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="img/favicons/apple-icon-114x114.html">
  <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
  <link rel="manifest" href="#">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

  <meta name="description" content="Join Art In Voyage as we invite you to uncover two of Indonesia&#039;s incredible islands: Bali and Raja Ampat. Experience the spirit of Indonesia." />
  <link rel="canonical" href="index.php" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Spirit of Indonesia - Art in Voyage" />
  <meta property="og:description" content="Join Art In Voyage as we invite you to uncover two of Indonesia&#039;s incredible islands: Bali and Raja Ampat. Experience the spirit of Indonesia." />
  <meta property="og:url" content="#" />
  <meta property="og:site_name" content="Art in Voyage" />
  <meta property="article:publisher" content="#" />
  <meta property="article:modified_time" content="2022-04-01T00:08:50+00:00" />
  <meta name="twitter:card" content="summary_large_image" />
 
    <link rel='dns-prefetch' href='http://client.crisp.chat/' />
  <link rel='dns-prefetch' href='http://kit.fontawesome.com/' />
  
  <link rel='dns-prefetch' href='http://cdn.jsdelivr.net/' />
  <link rel='dns-prefetch' href='http://www.google.com/' />
  <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  <link rel='dns-prefetch' href='http://ajax.googleapis.com/' />
  <link rel='dns-prefetch' href='http://s.w.org/' />
  <link rel="alternate" type="application/rss+xml" title="Art in Voyage &raquo; Feed" href="#" />
  <script type="text/javascript">
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/artinvoyage.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.2"
      }
    };
    /*! This file is auto-generated */
    ! function(e, a, t) {
      var n, r, o, i = a.createElement("canvas"),
        p = i.getContext && i.getContext("2d");

      function s(e, t) {
        var a = String.fromCharCode;
        p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
        e = i.toDataURL();
        return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
      }

      function c(e) {
        var t = a.createElement("script");
        t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
      }
      for (o = Array("flag", "emoji"), t.supports = {
          everything: !0,
          everythingExceptFlag: !0
        }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
        if (!p || !p.fillText) return !1;
        switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
          case "flag":
            return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
          case "emoji":
            return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
        }
        return !1
      }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
      t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
        t.DOMReady = !0
      }, t.supports.everything || (n = function() {
        t.readyCallback()
      }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
        "complete" === a.readyState && t.readyCallback()
      })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
    }(window, document, window._wpemojiSettings);
  </script>
  <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel='stylesheet' id='wp-block-library-css'  href='wp-includes/css/dist/block-library/style.min6dcf.css?ver=5.9.2' type='text/css' media='all' />
  <style id='global-styles-inline-css' type='text/css'>
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
  </style>
  <link rel='stylesheet' id='theme-my-login-css'  href='wp-content/plugins/theme-my-login/assets/styles/theme-my-login.minf719.css?ver=7.1.4' type='text/css' media='all' />

  <link rel='stylesheet' id='aiv-googlefont-css' href='https://fonts.googleapis.com/css2?family=Noto+Sans%3Awght%40400%3B700&amp;display=swap&amp;ver=5.9.2' type='text/css' media='all' />
  <link rel='stylesheet' id='omni-general-styles-css' href='wp-includes/themes/omni/css/omni081c.css?ver=MzAxdFJPui' type='text/css' media='screen' />
  <link rel='stylesheet' id='omni-lightbox-css-css' href='cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min081c.css?ver=MzAxdFJPui' type='text/css' media='screen' />
  <link rel='stylesheet' id='jquery-ui-theme-smoothness-css' href='ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/themes/smoothness/jquery-ui6dcf.css?ver=5.9.2' type='text/css' media='all' />
  <script type='text/javascript' src='wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
  <script type='text/javascript' src='kit.fontawesome.com/16b034d31b6dcf.js?ver=5.9.2' id='omni-fa-kit-js'></script>
  <script type='text/javascript' id='omni-ajax-handle-js-extra'>
    /* <![CDATA[ */
    var omni_ajax_script = {
      "ajaxurl": "https:\/\/artinvoyage.com\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
  </script>
  <script type='text/javascript' src='wp-content/themes/omni/includes/js/ajax.min081c.js?ver=MzAxdFJPui' id='omni-ajax-handle-js'></script>
  <script type='text/javascript' src='wp-content/themes/omni/library/slick/slick.min081c.js?ver=MzAxdFJPui' id='slick-scripts-js'></script>
  <script type='text/javascript' src='wp-content/themes/omni/library/jssocials.min081c.js?ver=MzAxdFJPui' id='experience-script-sharejs-js'></script>
  <script type='text/javascript' src='wp-content/themes/omni/js/experience.min081c.js?ver=MzAxdFJPui' id='experience-scripts-js'></script>
  <script type='text/javascript' src='wp-content/themes/omni/js/gen.min081c.js?ver=MzAxdFJPui' id='omni-gen-scripts-js'></script>
  <script type='text/javascript' src='wp-content/themes/omni/js/nav.min081c.js?ver=MzAxdFJPui' id='omni-nav-scripts-js'></script>
  <script type='text/javascript' src='wp-content/themes/omni/bannerfour6dcf.js?ver=5.9.2' id='banner-scripts-js'></script>
  <link rel="https://api.w.org/" href="https://artinvoyage.com/wp-json/" />
  <link rel="alternate" type="application/json" href="https://artinvoyage.com/wp-json/wp/v2/once-off-journey/23994" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://artinvoyage.com/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://artinvoyage.com/wp-includes/wlwmanifest.xml" />
  <meta name="generator" content="WordPress 5.9.2" />
  <link rel='shortlink' href='#' />
  <link rel="alternate" type="application/json+oembed" href="https://artinvoyage.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fartinvoyage.com%2Fonce-off-journey%2Fspiritofindonesia%2F" />
  <link rel="alternate" type="text/xml+oembed" href="https://artinvoyage.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fartinvoyage.com%2Fonce-off-journey%2Fspiritofindonesia%2F&amp;format=xml" />

  <script>
    (function(h, o, t, j, a, r) {
      h.hj = h.hj || function() {
        (h.hj.q = h.hj.q || []).push(arguments)
      };
      h._hjSettings = {
        hjid: 2409426,
        hjsv: 5
      };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script');
      r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KMD677P');
  </script>
  <!-- End Google Tag Manager -->
  <style type="text/css">
    @font-face {
      font-family: 'Avant Garde Book BT';
      font-style: normal;
      font-weight: normal;
      src: local('Avant Garde Book BT'), url('wp-content/themes/omni/Fonts/AVGARDN_2.woff') format('woff');
    }

    @font-face {
      font-family: 'Avant Garde Demi BT';
      font-style: normal;
      font-weight: normal;
      src: local('Avant Garde Demi BT'), url('wp-content/themes/omni/Fonts/AVGARDD_2.woff') format('woff');
    }

    @font-face {
      font-family: 'Avant Garde Demi Oblique BT';
      font-style: normal;
      font-weight: normal;
      src: local('Avant Garde Demi Oblique BT'), url('wp-content/themes/omni/Fonts/AVGARDDO_2.woff') format('woff');
    }

    @font-face {
      font-family: "AvenirNextLTW01-Regular";
      src: url("wp-content/themes/omni/Fonts/2cd55546-ec00-4af9-aeca-4a3cd186da53.woff2") format("woff2"), url("Fonts/1e9892c0-6927-4412-9874-1b82801ba47a.html") format("woff");
    }

    @font-face {
      font-family: "AvenirNextLTW01-Medium";
      src: url("wp-content/themes/omni/Fonts/627fbb5a-3bae-4cd9-b617-2f923e29d55e.woff2") format("woff2"), url("Fonts/f26faddb-86cc-4477-a253-1e1287684336.html") format("woff");
    }

    @font-face {
      font-family: "Avenir Next LT W01 Bold";
      src: url("wp-content/themes/omni/Fonts/14c73713-e4df-4dba-933b-057feeac8dd1.woff2") format("woff2"), url("Fonts/b8e906a1-f5e8-4bf1-8e80-82c646ca4d5f.html") format("woff");
    }
  </style>
  <script type="text/javascript">
    var MTIProjectId = '9a36c75c-5951-46b7-b8d7-0342db0da5e4';
    (function() {
      var mtiTracking = document.createElement('script');
      mtiTracking.type = 'text/javascript';
      mtiTracking.async = 'true';
      mtiTracking.src = 'wp-content/themes/omni/mtiFontTrackingCode.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mtiTracking);
    })();
  </script>

</head>

<body class="once-off-journey-template-default single single-once-off-journey postid-23994  ">
  <!-- OMNI HEAD -->

  <!-- BANNER  -->
  <!-- / BANNER  -->

  <!-- Pre Header  -->
  <!-- / Pre Header  -->

  <div class="header-holder">
    <div class='omni-primary-head gray-bg aiv-nav-mobile-blue'>
      <!-- Top bar -->

      <div class="top-bar hide-me-1092 ">
        <div class="omni-grid omni-top ">
          <div class="aiv-row">
            <div class="aiv-col-10">

              <div class="omni-social top-social hide-me-mobile" style="padding: 0.4em ;">
                <div><span>Stay Connected</span><a class="aiv-phone-link  " href="#">
                    <i class="fas fa-phone " aria-hidden="true"></i> <span>+1 631 440 3050</span></a>
                </div>
                <div>
                  <a class="icon-link padding-l-1  " href="#" target="_blank">
                    <i class="fas fa-envelope " aria-hidden="true"></i></a>
                </div>
                <div>
                  <a class="icon-link padding-l-1 " href="#" target="_blank">
                    <i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
                <div>
                  <a class="icon-link padding-l-1 " href="#" target="_blank">
                    <i class="fab fa-facebook" aria-hidden="true"></i></a>
                </div>
                <div>
                  <a class="icon-link padding-l-1 " href="#" target="_blank">
                    <i class="fab fa-pinterest" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>

            <div class="aiv-col-2 hide-me-mobile" style="padding: 0.4em" ;>
              <div class="text-right">
                <div class="aiv-col-4 currency-form-container padding-l-1 ">
                  <form action='#' method='post'>
                    <div class='currencySelectContainer'><select class='currencySelect' id='currency' name='sltUsrCur' onchange='this.form.submit()'>
                        <option value='USD' selected>$ USD</option>
                        <option value='EUR'>€ EUR</option>
                        <option value='CAD'>$ CAD</option>
                        <option value='AUD'>$ AUD</option>
                        <option value='GBP'>£ GBP</option>
                      </select><span class='arrowSelect'></span></div>
                  </form>
                  <script>
                    (function($) {
                      $(document).ready(function() {
                        //alert('1');
                      });
                    })(jQuery);
                  </script>

                </div>
                <div class="aiv-col-2 acc-user padding-l-1
                                             <i style="font-size: 1.9rem!important;" class="fa fa-lg fa-user"></i> 
                                            </div>
                <div class="aiv-col-3 padding-l-2 ">
                  <a href="#" class="wished-btn link-disabled  hide-me"><i class="fas fa-heart top-wish wished-top-bar" id="wished-top-bar"></i><span class="wish-number wishcount" id="wishcount"><sup><sup><sup><sup></sup></sup></sup></sup></span></a>
                </div>
                <div class="aiv-nav-searchBtn aiv-col-2 padding-l-1 .hide-me-mobile" id="aiv-nav-searchBtn"><i id="aiv-searchbtn-Icon" class="fal fa-search active" aria-hidden="true"></i>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- / Top bar  -->
      <div class="omni-wrapper">

        <!-- Primary Header -->
        <header>
          <div class="omni-grid boxed">

            <!-- Logo Box-->

            <!-- Logo -->
            <div class="logo-box">
              <div class="logo-wrapper ">
                  <a href="#" rel="home">
                  <img src="wp-content/uploads/aiv-header.png" class="header-logo white-logo " alt="Art in Voyage" />
                </a>
              </div>
            </div>
            <!-- / Logo -->

            <div class="hide-me-desktop currencyMobileNav" style="padding-top: 18px">
              <form action='#' method='post'>
                <div class='currencySelectContainerMobile'><select class='currencySelectMobile' id='currency' name='sltUsrCur' onchange='this.form.submit()'>
                    <option value='USD' selected>$ USD</option>
                    <option value='EUR'>€ EUR</option>
                    <option value='CAD'>$ CAD</option>
                    <option value='AUD'>$ AUD</option>
                    <option value='GBP'>£ GBP</option>
                  </select><span class='arrowSelect'></span></div>
              </form>
              <script>
                (function($) {
                  $(document).ready(function() {
                    //alert('1');
                  });
                })(jQuery);
              </script>
            </div>

            <!-- Primary Nav - DESKTOP -->
            <div class="primary-nav">

              <nav data-submenuwidth="300">
                <div class="primary-navbar-desktop">
                  <ul id="primary-menu" class="menu nav-menu desktop">
                    <li id="menu-item-16788" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16788"><a href="#">JOURNEYS</a>
                      <ul class='sub-menu'>
                        <div class='sub-menu-wrap'>
                          <li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="#">CURATED JOURNEYS</a></li>
                          <li id="menu-item-22779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22779"><a href="#">ONCE-OFF JOURNEYS</a></li>
                          <li id="menu-item-13731" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13731"><a href="#">EXCLUSIVE JOURNEYS</a></li>
                        </div>
                      </ul>
                    </li>
                    <li id="menu-item-16787" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16787"><a href="#">MAGELLAN ODYSSEY</a></li>
                    <li id="menu-item-7049" class="drop-down menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7049"><a href="#">GET INSPIRED</a>
                      <ul class='sub-menu'>
                        <div class='sub-menu-wrap'>
                          <li id="menu-item-112" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"><a href="#">BLOG</a></li>
                        </div>
                      </ul>
                    </li>
                    <li id="menu-item-1860" class="drop-down menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1860"><a href="#">ABOUT US</a>
                      <ul class='sub-menu'>
                        <div class='sub-menu-wrap'>
                          <li id="menu-item-15774" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15774"><a href="#">WHY AIV?</a></li>
                          <li id="menu-item-1215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1215"><a href="#">OUR TEAM</a></li>
                          <li id="menu-item-15690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15690"><a href="#">GIFT CARDS</a></li>
                          <li id="menu-item-18529" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18529"><a href="#">GRATITUDE LOYALTY PROGRAM</a></li>
                          <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="#">GET IN TOUCH</a></li>
                          <li id="menu-item-1220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1220"><a href="#">FAQS</a></li>
                        </div>
                      </ul>
                    </li>
                    <li id="menu-item-18472" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18472"><a href="#">REVIEWS</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <!-- / Primary Nav -->

            <!-- Primary Nav -  RESPONSIVE -->
            <div class="responsive-nav">
              <nav data-submenuwidth="300">
                <div class="primary-navbar-responsive">
                  <ul id="primary-menu" class="menu nav-menu responsive">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16788"><a href="#">JOURNEYS</a>
                      <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253"><a href="#">CURATED JOURNEYS</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22779"><a href="#">ONCE-OFF JOURNEYS</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13731"><a href="#">EXCLUSIVE JOURNEYS</a></li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16787"><a href="#">MAGELLAN ODYSSEY</a></li>
                    <li class="drop-down menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7049"><a href="#">GET INSPIRED</a>
                      <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"><a href="#">BLOG</a></li>
                      </ul>
                    </li>
                    <li class="drop-down menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1860"><a href="#">ABOUT US</a>
                      <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15774"><a href="#">WHY AIV?</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1215"><a href="#">OUR TEAM</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15690"><a href="#">GIFT CARDS</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18529"><a href="#">GRATITUDE LOYALTY PROGRAM</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a href="#">GET IN TOUCH</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1220"><a href="#">FAQS</a></li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18472"><a href="#">REVIEWS</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <!-- / Primary Nav -->

            <!-- Secondary Navigation -->
            <!-- Secondary Nav -->
            <div class="secondary-nav">

              <div class="responsivebuttons burger secondary-nav-element">
                <i class="fas fa-bars"></i>
              </div>

              <div class="responsivebuttons close secondary-nav-element">
                <i class="far fa-times"></i>
              </div>

            </div>
            <!-- / Secondary Nav -->

          </div>
        </header>

        <!-- / Primary Header -->

      </div>

      <!-- Search  -->
      <div class="aiv-nav-searchContainer" id="aiv-nav-searchContainer">
        <div class="searchBar">
          <form id="userSearch-form">
            <div class="input-container">
              <span class="icon" id="input-container-icon">
                <i class="fal fa-search"></i>
                <div class="spinner" style="display: none"></div>
              </span>
              <input type="text" id="aiv-nav-searchBar" name="searchQuery" autocomplete="off" placeholder="Search" />
              <span class="icon">
                <i class="far fa-times-circle" id="clearSearchBtn"></i>
              </span>
            </div>
          </form>
        </div>
        <div class="searchResult" id="searchResult" style="display: none;">
          <hr>
          <div class="padding-l-3 padding-r-3 omni-top">
            <div class="aiv-row">
              <div id="displayUserSearchResults">

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Search -->
    </div>
  </div>

  <!-- Sub Header -->

  <!-- / OMNI HEAD -->

  <div class="omni-global">

    <style>
      .cookie-popup {
        z-index: 9999999;
        border-radius: 1em;
        background: white;
        font-size: 0.875rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        position: fixed;
        bottom: -6.25rem;
        left: 1.25rem;
        right: 1.25rem;
        padding: 0.625rem 0.9375rem;
        box-shadow: 0 0 0.625rem 0 rgba(0, 0, 0, .15);
        line-height: 150%;
        transition: opacity .5s;
        opacity: 0;
        font-family: Arial, Helvetica, sans-serif;
      }

      .cookie-popup--short {
        right: none;
        width: 21.875rem;
      }

      .cookie-popup--dark {
        background: #000;
        color: #fff;
      }

      .cookie-popup--not-accepted {
        opacity: 1;
        animation: cookie-popup-in .5s ease forwards;
      }

      .cookie-popup--accepted {
        opacity: 0;
      }

      .cookie-popup a {
        color: skyblue;
      }

      .cookie-popup a:visited {
        color: skyblue;
        text-decoration: none;
      }

      .cookie-popup-actions {
        flex: 1;
        text-align: right;
      }

      .cookie-popup-actions button {
        color: orange;
        border: none;
        background: none;
        font-family: inherit;
        font-style: inherit;
        font-size: inherit;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.75rem;
        padding: 0;
        cursor: pointer;
      }

      .cookie-popup-actions button:hover {
        text-decoration: underline;
      }

      @keyframes cookie-popup-in {
        from {
          bottom: -6.25rem;
        }

        to {
          bottom: 1.25rem;
        }
      }
    </style>
    <div class="cookie-popup cookie-popup--short cookie-popup--dark">
      <div>
        This website uses cookies to provide you with a great user experience. By using it, you accept our <a target="_blank" href="#">Cookies Policy</a>
      </div>
      <div class="cookie-popup-actions">
        <button>Okay</button>
      </div>
    </div>
    <script>
      /* common fuctions */
      function el(selector) {
        return document.querySelector(selector)
      }

      function els(selector) {
        return document.querySelectorAll(selector)
      }

      function on(selector, event, action) {
        els(selector).forEach(e => e.addEventListener(event, action))
      }

      function cookie(name) {
        let c = document.cookie.split('; ').find(cookie => cookie && cookie.startsWith(name + '='))
        return c ? c.split('=')[1] : false;
      }
      /* popup button hanler */
      on('.cookie-popup button', 'click', () => {
        el('.cookie-popup').classList.add('cookie-popup--accepted');
        var d = new Date();
        d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
        document.cookie = "cookie-accepted=true; expires=" + d.toUTCString() + "; path=/"
      });
      /* popup init hanler */
      if (cookie('cookie-accepted') !== "true") {
        el('.cookie-popup').classList.add('cookie-popup--not-accepted');
      }
      on('.color-btn', 'click', () => {
        el('.cookie-popup').classList.toggle('cookie-popup--dark');
      });
      on('.layout-btn', 'click', () => {
        el('.cookie-popup').classList.toggle('cookie-popup--short');
      });
      /* page buttons handlers */
      function _reset() {
        document.cookie = 'cookie-accepted=false';
        document.location.reload();
      }

      function _switchMode(cssClass) {
        el('.cookie-popup').classList.toggle(cssClass);
      }
    </script>
    <div class="omni-body">

      <div class="pre-content">
        <div class="omni-hero standard">

          <div class="omni-overlay" style="background-color:#000000; opacity:0.20;">&nbsp;</div>

          <div class="omni-hero-image hide-me-mobile">
            <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/main-hero-3-1.jpg 1900w, wp-content/uploads/main-hero-3-1.jpg 1400w, wp-content/uploads/main-hero-3-1-1200x783.jpg 1200w,  wp-content/uploads/main-hero-3-1-768x501.jpg 768w, wp-content/uploads/main-hero-3-1-576x376.jpg 576w," src="wp-content/uploads/main-hero-3-1.jpg">
          </div>
          <div class="omni-hero-image hide-me-desktop">
            <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/main-hero-3-1.jpg 1900w, wp-content/uploads/main-hero-3-1.jpg 1400w, wp-content/uploads/main-hero-3-1-1200x783.jpg 1200w,  wp-content/uploads/main-hero-3-1-768x501.jpg 768w, wp-content/uploads/main-hero-3-1-576x376.jpg 576w," src="wp-content/uploads/main-hero-3-1.jpg">
          </div>

          <div class="omni-hero-content">
            <div class="omni-hero-content-inner">
              <h1 class="flexible-title white centered margin-v-05">Spirit of Indonesia</h1>
              <h4 class="flexible-subtitle white centered">Raja Ampat, Ubud (Bali) | December 01 - 10, 2022</h4>
            </div>
          </div>

        </div>
      </div>

      <div class="omni-grid flexible-blurb">
        <p>
          <center><big>Join Art In Voyage as we invite you to uncover two of Indonesia's incredible islands: Bali and Raja Ampat.
        </p>
        <p>Ubud is the cultural heartland of Bali and provides the perfect introducion into the magical Balinese way of life. A serene paradise of healing and relaxation, its abundance of ornate and aging temples, lush green rice paddies, and dense, wild jungles make Ubud the perfect location from which to embark on this 10-day long journey of rejuvenation. For four nights, we will explore the surrounding area of Ubud through temple visits, cooking classes and an immersion within the local community. From here, we will travel to Raja Ampat for the second half of our journey, which focuses on exploring the islands and discovering the many wonders of this diverse landscape through a selection of exciting, outdoor experiences. </p>
        <p>Translated to mean “Four Kings”, Raja Ampat captivates with the enigmatic beauty of its limestone karst island clusters. Spawned out of legendary myth, this setting continues to bewilder and enthrall explorers with dramatic landscapes that shelter secret lagoons, bays, and beaches. In between excursions to discover the world’s most biodiverse environments, Raja Ampat offers visitors the chance to discover or create their own perfect paradise.<br />
          <br />On this journey, you will enjoy an all-inclusive package with a series of memorable tours and activities included (always optional in attendance), over 6 massages throughout, all meals paired with their international wines, VIP airport and hotel transfers, and much more.<br />
          </center></big>
        </p>

      </div>
      <div class="omni-wrapper   ">

        <content class="content flexible-content-block margin-b-2">
          <div class="">
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <div class="flexible-col-content" style="text-align:center;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 1 | D</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image">
                                <img alt="Classics of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/hero3.jpg 1900w, wp-content/uploads/hero3.jpg 1400w, wp-content/uploads/hero3.jpg 1200w,  wp-content/uploads/hero3.jpg 768w, wp-content/uploads/hero3.jpg 576w," src="wp-content/uploads/hero3.jpg">
                              </div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                Welcome to Bali & Ubud
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>After a private transfer from the airport (by road - Helicopter transfers available), you are greeted at your home for the next four nights - a picturesque estate nestled into the jungle and rice fields of Ubud, bordering the Ayung River. Take your time soaking in your surroundings and shake off the jetlag with an afternoon of massages and pampering. Tonight, our Balinese chef has prepared an authentic dinner to welcome us to beautiful Bali!</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 2 | B, L, D</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="'Classics Of Indonesia' curated travel journey, by Art In Voyage" srcset=" wp-content/uploads/Indo-1.png 1900w, wp-content/uploads/Indo-1.png 1400w, wp-content/uploads/Indo-1.png 1200w,  wp-content/uploads/Indo-1.png 768w, wp-content/uploads/Indo-1.png 576w," src="/wp-content/uploads/Indo-1.png"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                Ubud and its temples
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>After our routine of yoga and fitness (optional, as always), enjoy the rest of the morning at leisure. An afternoon of both transformative and experiential travel then begins! We meet up with our spiritual guide to learn more about Balinese spirituality. Our afternoon then takes us to local temples and a visit to a local family home. Here, immerse yourself in the essence of Balinese life and culture. We then head to a traditional Hindu bath whose sacred springs are said to possess curative properties. Another massage and an incredible Indonesian-inspired dinner conclude the day. </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 3 | B, L, D</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Classics Of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/10-3.jpg 1900w, wp-content/uploads/10-3.jpg 1400w, wp-content/uploads/10-3.jpg 1200w,  wp-content/uploads/10-3.jpg 768w, wp-content/uploads/10-3.jpg 576w," src="/wp-content/uploads/10-3.jpg"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                A foodie paradise
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>This morning, we make our way to the amazing Alila Ubud where we start with a locally prepared and inspired breakfast. We then join their Chef for a fascinating traditional cooking. Guests will have the opportunity to learn about some of the local cuisine and techniques, explore the vegetable gardens and indulge in a mixology class. After lunch, we end the day with a short walk around the local rice terraces and jungles, ending at a nearby Luwak farm for a tasting of the most expensive coffee in the world. Tonight, dinner is served at the property.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 4 | B, L, D</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Classics of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/day4-5-1.jpg 1900w, wp-content/uploads/day4-5-1.jpg 1400w, wp-content/uploads/day4-5-1.jpg 1200w,  wp-content/uploads/day4-5-1.jpg 768w, wp-content/uploads/day4-5-1.jpg 576w," src="/wp-content/uploads/day4-5-1.jpg"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                It's YOUR day
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>Today is your day to relax so do as little, or as much as you'd like! Our guests will have a choice to enjoy some of our favorite activities (included) such as an afternoon of white water rafting through the jungle complete with an afternoon tea stop along the way. For the more courageous members of our group, a 2.30 AM wake-up call followed by a sunrise Volcano Hike is available. Others may opt for the 8 AM departure on a biking tour, discovering a different perspective of life on the island. If your body is telling you to relax, listen to it - take time to relax in the peaceful surroundings of the property for the day. A visit to the town of Ubud town using our complimentary transfers is on offer.
                                  Tonight, we are hosted at the Michelin level restaurant <a href="https://www.mozaic-bali.com/" target="_blank">MOZAIC</a> for an incredible private tasting experience, paired with international wines.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 5 | B, L</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 1900w, wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 1400w, wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 1200w, wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 768w, wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 576w," src="wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                Meeting the Four Kings
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>This morning, we embark on a flight towards the archipelago of Raja Ampat, known as the "Four Kings". This afternoon, we are greeted by a welcome cocktail and a massage. Dinner is served as we set sail at sunset. The name Raja Ampat—literally ‘The Four Kings’—speaks of the mysterious folklore surrounding Indonesia’s most far-flung cluster of islands. Local stories tell of a woman who finds seven mysterious eggs, four of which hatched to become the kings that reigned over the archipelago’s four main islands, Waigo, Salawati, Batanta, and Misool. It’s said that the other three were not so lucky, and become a ghost, a woman, and a stone.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 6 | B, L, D</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/day-6-2.jpg 1900w, wp-content/uploads/day-6-2.jpg 1400w, wp-content/uploads/day-6-2.jpg 1200w,  wp-content/uploads/day-6-2.jpg 768w, wp-content/uploads/day-6-2.jpg 576w," src="wp-content/uploads/day-6-2.jpg"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                Sailing paradise
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>More than 1,500 wild islands, cays, and shoals make up Raja Ampat’s 40,000 square kilometer area, which lies on the northwest tip of the Bird’s Head Peninsula in Papua (New Guinea). Underwater, the marine habitats are among the most biodiverse in the world with 1,200 species of fish and 550 species of hard and soft coral. Giant manta rays, black and white-tipped reef sharks, wobbegong sharks, sea turtles, pygmy seahorses, and schools of barracuda can often be observed. On this journey, kayaking, scuba diving, snorkeling, and even beach-going are on the schedule daily.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 7 | B, L, D</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/day-7-2-3.jpg 1900w, wp-content/uploads/day-7-2-3.jpg 1400w, wp-content/uploads/day-7-2-3.jpg 1200w, wp-content/uploads/day-7-2-3.jpg 768w, wp-content/uploads/day-7-2-3.jpg 576w," src="wp-content/uploads/day-7-2-3.jpg"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                Jurassic feel and a picnic
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>Raja Ampat’s landscapes resemble something out of Jurassic Park with dense tropical jungle giving way to hidden waterfalls and jutting limestone cliffs. Prehistoric wall paintings can be found alongside cave bunkers and a seabed wreckage from WW2. Birdsong from parrots, hornbills, and birds-of-paradise are your soundtrack as you paddle through mangroves on a kayak, stroll on beaches fringed by thick tropical jungle, or meet the indigenous tribes. Today, we have planned to stop on one of the many deserted islands for a traditional Indonesian picnic, complete with bubbly, cocktails and beach time.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 8</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/day-7-18.jpg 1900w, wp-content/uploads/day-7-18.jpg 1400w, wp-content/uploads/day-7-18.jpg 1200w,  wp-content/uploads/day-7-18.jpg 768w, wp-content/uploads/day-7-18.jpg 576w," src="wp-content/uploads/day-7-18.jpg"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                Wanderers welcome
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>For the most adventurous explorers, head off the boat for an early morning hike starting at 5.30 AM; the perfect time to spot the elusive Birds of Paradise. Raja Ampat has long been famous for its Birds of Paradise, ever since the ancient trade in their feathers in the 18th Century. Over 250 species have been connected to the archipelago including the well-known Greater Bird of Paradise. Some of these species can easily be seen during a short excursion. The uphill walk takes about 30 minutes but the reward is panoramic sunrise views from atop the island! Enjoy various water sports activities or indulge in a massage onboard.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 9 | B, L, D</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/day-9-1.jpg 1900w, wp-content/uploads/day-9-1.jpg 1400w, wp-content/uploads/day-9-1.jpg 1200w,  wp-content/uploads/day-9-1-576x432.jpg 768w, wp-content/uploads/day-9-1-576x432.jpg 576w," src="wp-content/uploads/day-9-1.jpg"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                One last hurrah
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>On this last full day aboard The Maj, we offer many opportunities to enjoy snorkeling, kayaking, or even a speedboat tour of the many limestone islands surrounding us. Right before sunset, we head out for visit to the nearby, pearl farms. It is an excellent opportunity to learn about the world of pearl farming; one of Raja Ampat's main sources of income. We close the day with a traditional BBQ dinner on a private beach, complete with traditional dances and songs. </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:center;">DAY 10 | B</h3>
                      <div class="flexible-col-content" style="text-align:center;">
                        <div class="">
                          <div class="aiv-image-container">
                            <div class="image">
                              <div class="flexible-image"> <img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/day-10.png 1900w, wp-content/uploads/day-10.png 1400w, wp-content/uploads/day-10.png 1200w,  wp-content/uploads/day-10-576x400.png 768w, wp-content/uploads/day-10-576x400.png 576w," src="wp-content/uploads/day-10.png"></div>
                            </div>
                            <div class="overlay-image" style=" background-color:#000000!important;   opacity:0.20!important;">
                            </div>
                            <div class="image-title">
                              <div class="text">
                                Time to say "Selamat Tinggal"
                              </div>
                            </div>
                            <div class="overlay">
                              <div class="text">
                                <div>After one last traditional breakfast enjoying a beautiful sunrise on board, we disembark and make our way to the local airport where you catch a connecting flight home.
                                  <br>
                                  For guests interested in extending, our team of experts would be delighted to research and assist with the design of a very exclusive (maybe romantic) escape beyond Raja Ampat and Indonesia.
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <div class="flexible-col-content" style="text-align:center;"></div>
                      <div class="button-row"><a href="javascript:;" data-fancybox data-animation-duration="700" data-src="#animatedModal-24251" class="omni-button pill center ">Check out our Jungle Estate</a></div>
                      <div style="display: none" id="animatedModal-24251" class="animated-modal">
                        <h2 class="margin-b-0">Nag Shampa Estate</h2>
                        <div>Ubud, Indonesia</div>
                        <p>
                        <p>Nag Shampa, meaning “Incense of Love” is located in the peaceful village of Taro, where the ancient rhythm of life, prayer and ceremony, established over a century ago, still exists today. Approximately 30 minutes drive from north of the mountain town Ubud, Nag Shampa Estate is cradled in a landscape of gardens and mist laden ranges. </p>
                        <p>Nag Shampa Estate is composed of 8 oversized bedrooms, ranging from expansive Joglo style, to private pool cottages called Kubu’s. The Istana Suite occupies an entire Joglo to itself and comprises lounge areas, relaxation spaces, and a huge Master Bathroom. </p>
                        <p>All connected by raised timber walkways, dwellings are filled with a vibrant energy and meaning treasures that are infused with warmth and style. </p>
                        <p>Nag Shampa understands that each customer is different, and has created a menu that takes into account some of people’s favorites, while still providing food that still pays homage to their own beliefs. The Chefs are local and much of the cuisine is inspired by their own simple style, yet cultural cuisine. </p>
                        </p>
                        <div class="margin-t-2 ">
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/COMO-Shambhala-Estate-Umabona-Residence-09.jpg" alt="COMO-Shambhala-Estate" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/bali-villanagshampa-18-576x382.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/bali-hartlandestate-09-800x530-1-576x382.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/nagshampa-bali.com-slide3-576x384.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/bali-villa-nag-shampa-12645731705ac5cd5b389db2.11484684.1920-576x324.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/VillaNagshampa_24-576x384.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/Villa-Nag-Shampa-Bali-62-1024x640-1-576x360.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/bali-villanagshampa-13-576x382.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/Villa-Nag-Shampa-Bali-25-1024x640-1-576x360.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/VillaNagshampa_14-576x384.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <div class="flexible-col-content" style="text-align:left;"></div>
                      <div class="button-row"><a href="javascript:;" data-fancybox data-animation-duration="700" data-src="#animatedModal-24230" class="omni-button pill left ">Check out our Luxury Ship</a></div>
                      <div style="display: none" id="animatedModal-24230" class="animated-modal">
                        <h2 class="margin-b-0">The Maj</h2>
                        <div>Raja Ampat, Indonesia</div>
                        <p>
                        <p>If to travel is to live, then a voyage aboard The Maj Oceanic might be the life you never knew existed. Learn, feel, understand, taste, and touch new things while awakening your inner explorer. Get up close with the world’s largest lizard species. Huddle together along the railings to spot nature’s great displays. Enjoy seafood the Jack Sparrow way. Or practice yoga to the sound of waves. </p>
                        <p>The Maj allows you to unwind and take the stress away without having to leave the boat. Guests can relax with locally-inspired spa treatments, or they can choose to enjoy a one-of-a-kind golfing experience from the top of the deck of the ship, with the ocean being their fairway. </p>
                        <p>Menus aboard The MAJ Oceanic pay homage to the regions where you will be sailing while ensuring tremendous variety. You and your chef can also craft a bespoke menu inspired by a palate or a special moment. It is then prepared and served in a location of your choosing.</p>
                        <p>Whether you are interested in culture, history, ecology or wildlife, sailing on a modern-take of the Phinisi is the best way to enjoy the beauty of Indonesia’s eastern Archipelago.</p>
                        </p>
                        <div class="margin-t-2 ">
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/Admiral-suite-2-576x364.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/Admiral-suite.jpg" alt="Admiral Suite | The Maj" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/bath-tub-576x384.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/Commodore-2-576x385.jpg" alt="Commodore Cabin | The Maj" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/Commodore-576x384.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/deluxe-5-576x388.jpg" alt="Deluxe Cabin | The Maj" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/dining-28-576x384.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/massage-2-576x350.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/sunbathing-576x384.jpg" alt="" />
                            </div>
                          </div>
                          <div class="accom-image-box-5 ">
                            <div class="imagebox div-zoom-out"><img src="wp-content/uploads/MAJ-OCEANIC-Sitting-area-576x351.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <div class="flexible-col-content" style="text-align:left;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:left;">The Nitty Gritty:</h3>
                      <div class="flexible-col-content" style="text-align:left;">
                        <ul class="flexible-list">
                          <li>4 nights at our Luxury Jungle Estate</li>
                          <li>5 nights onboard our Luxury ship</li>
                          <li>All meals taken at the estate and onboard</li>
                          <li>3 lunches in Ubud during tours & Activities</li>
                          <li>All tours and activities as listed on the itinerary</li>
                          <li>3 massages at the estate and 3 massages on board <br>(option to secure additional ones)</li>
                          <li>Non-alcoholic beverages throughout</li>
                          <li>Alcohol Open bar:<br><b>At the villa</b>: FULL | <b>On board</b>: With lunch & dinner</li>
                          <li><b>Optional</b>: Add the drink package on board (all cocktails and drinks all day): $480/person</li>
                          <li>Private VIP transfers and transportation throughout</li>
                          <li>Inter island flights (First class/premium if available)</li>
                          <li>Full staff & crew 24/7</li>
                          <li>Services of an AIV host throughout</li>
                          <li>Sales taxes, port charges & fees</li>
                          <li>Travel Journal and Concierge Services, 24/7, by AIV</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <h3 class="flexible-col-heading" style="text-align:left;">Our offers:</h3>
                      <div class="flexible-col-content" style="text-align:left;">
                        <div>
                          <div id="flexible-rooms-html-selection">
                            <div class="aiv-row ">
                              <div class="aiv-col-6 margin-b-1">
                                <div class="aiv-row flexible-room-details">
                                  <div class="aiv-col-6 ">
                                    <div class="flexible-image-container">
                                      <div class="image-box"><img alt="Spirit of Indonesia, by Art In Voyage" src="wp-content/uploads/Admiral-suite.jpg"></div>
                                    </div>
                                  </div>
                                  <div class="aiv-col-6">
                                    <div class=" margin-l-05 flexible-room-info">
                                      <div class="">
                                        <div class="flexible-room-title">Admiral Package:<br>Istana Suite Pool & Admiral Suite</div>
                                        <div><b>$9,636</b>/person</div>
                                        <div class="smallprint red-text">One room left</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="aiv-col-6 margin-b-1">
                                <div class="aiv-row flexible-room-details">
                                  <div class="aiv-col-6 ">
                                    <div class="flexible-image-container">
                                      <div class="image-box"><img alt="Spirit of Indonesia, by Art In Voyage" src="wp-content/uploads/Commodore-2.jpg"></div>
                                    </div>
                                  </div>
                                  <div class="aiv-col-6">
                                    <div class=" margin-l-05 flexible-room-info">
                                      <div class="">
                                        <div class="flexible-room-title">Commodore Package:<br>Pool Cottage & Commodore Suite</div>
                                        <div><b>$9,124</b>/person</div>
                                        <div class="smallprint red-text">Sold out</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="aiv-col-6 margin-b-1">
                                <div class="aiv-row flexible-room-details">
                                  <div class="aiv-col-6 ">
                                    <div class="flexible-image-container">
                                      <div class="image-box"><img alt="Spirit of Indonesia, by Art In Voyage" src="wp-content/uploads/deluxe-5-768x518.jpg"></div>
                                    </div>
                                  </div>
                                  <div class="aiv-col-6">
                                    <div class=" margin-l-05 flexible-room-info">
                                      <div class="">
                                        <div class="flexible-room-title">Joglo Package: <br>Joglo Cottage & Deluxe Suite</div>
                                        <div><b>$8,698</b>/person</div>
                                        <div class="smallprint red-text">One room left</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="aiv-col-6 margin-b-1">
                                <div class="aiv-row flexible-room-details">
                                  <div class="aiv-col-6 ">
                                    <div class="flexible-image-container">
                                      <div class="image-box"><img alt="Azalea Cruise, By Art In Voyage" src="wp-content/uploads/REFRESHING-DRINKS.jpg"></div>
                                    </div>
                                  </div>
                                  <div class="aiv-col-6">
                                    <div class=" margin-l-05 flexible-room-info">
                                      <div class="">
                                        <div class="flexible-room-title">Drink package on board (per person)</div>
                                        <div><b>$480</b>/person</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="continue-to-book-flexible">
                            <div class="flexible-phase-text">
                              <div>This departure is confirmed. Your deposit becomes non-refundable once you book. </div>
                            </div>
                            <div class=""><a data-fancybox data-src="#emailcapture" href="#" class="flexible-continue-btn">Book </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row content-row ">
                  <div class="flexible-col">
                    <div class="flexible-col-inner">
                      <div class="flexible-col-content" style="text-align:left;">
                        <p>Terms and Conditions:</p>
                        <p><small>A $750/person commitment deposit is required to lock your space. We are unable to hold space without deposits and all bookings must be processed online.<br />
                            Should the departure be confirmed (decision date: January 31, 2022), a further deposit of $500/person will be billed, both of which then become non-refundable<br />. Should it not be confirmed, you will receive your commitment deposit back in full.<br />
                            Your final balance will be due 90 days before departure. Should you cancel 91+ days before departure, 50% of your deposit will be turned into an e-credit with Art In Voyage, valid for 1 year.</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row  image-set ">
                  <div class="image-set gallery-set">
                    <div class="main-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/ubud.jpg 1900w, wp-content/uploads/ubud.jpg 1400w, wp-content/uploads/ubud.jpg 1200w,  wp-content/uploads/ubud.jpg 768w, wp-content/uploads/ubud.jpg 576w," src="wp-content/uploads/ubud.jpg"></div>
                    <div class="other-images">
                      <div class="other-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/temples.jpg 1900w, wp-content/uploads/temples.jpg 1400w, wp-content/uploads/temples.jpg 1200w,  wp-content/uploads/temples.jpg 768w, wp-content/uploads/temples.jpg 576w," src="wp-content/uploads/temples.jpg"></div>
                      <div class="other-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/staff.jpg 1900w, wp-content/uploads/staff.jpg 1400w, wp-content/uploads/staff.jpg 1200w,  wp-content/uploads/staff.jpg 768w, wp-content/uploads/staff.jpg 576w," src="wp-content/uploads/staff.jpg"></div>
                      <div class="other-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/washing.png 1900w, wp-content/uploads/washing.png 1400w, wp-content/uploads/washing.png 1200w,  wp-content/uploads/washing.png 768w, wp-content/uploads/washing.png 576w," src="wp-content/uploads/washing.png"></div>
                      <div class="other-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/Cooking_Class_in_the_Organic_Garden.jpg 1900w, wp-content/uploads/Cooking_Class_in_the_Organic_Garden.jpg 1400w, wp-content/uploads/Cooking_Class_in_the_Organic_Garden.jpg 1200w,  wp-content/uploads/Cooking_Class_in_the_Organic_Garden.jpg 768w, wp-content/uploads/Cooking_Class_in_the_Organic_Garden.jpg 576w," src="wp-content/uploads/Cooking_Class_in_the_Organic_Garden.jpg"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" white-bg">
              <div class="omni-grid ">
                <div class="flexible-row  image-set ">
                  <div class="image-set gallery-set">
                    <div class="main-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 1900w, wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 1400w, wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 1200w,  wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 768w, wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg 576w," src="wp-content/uploads/raja-ampat-water-color-top-down-aerial.jpg"></div>
                    <div class="other-images">
                      <div class="other-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/scuba.jpg 1900w, wp-content/uploads/scuba.jpg 1400w, wp-content/uploads/scuba.jpg 1200w,  wp-content/uploads/scuba.jpg 768w, wp-content/uploads/scuba.jpg 576w," src="wp-content/uploads/scuba.jpg"></div>
                      <div class="other-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/activity-1-1.jpg 1900w, wp-content/uploads/activity-1-1.jpg 1400w, wp-content/uploads/activity-1-1.jpg 1200w,  wp-content/uploads/activity-1-1.jpg 768w, wp-content/uploads/activity-1-1.jpg 576w," src="wp-content/uploads/activity-1-1.jpg"></div>
                      <div class="other-image flexible-image"><img alt="Spirit of Indonesia, by Art In Voyage" srcset=" wp-content/uploads/sunset-4.jpg 1900w, wp-content/uploads/sunset-4.jpg 1400w, wp-content/uploads/sunset-4.jpg 1200w,  wp-content/uploads/sunset-4jpg 768w, wp-content/uploads/sunset-4.jpg 576w," src="wp-content/uploads/sunset-4.jpg"></div>
                      <div class="other-image flexible-image"><img alt="Art in Voyage" srcset=" wp-content/uploads/manta-ray.jpg 1900w, wp-content/uploads/manta-ray.jpg 1400w, wp-content/uploads/manta-ray.jpg 1200w,  wp-content/uploads/manta-ray.jpg 768w, wp-content/uploads/manta-ray.jpg 576w," src="wp-content/uploads/manta-ray.jpg"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </content>
        <div style="display: none;" id="terms" class="animated-modal">
          <div class="omni-grid">
            <h2>Sales Terms and conditions</h2>
            <p><b>TEMPORARY RELIEF ON ALL BOOKINGS MADE BY JUNE 30, 2021 - <a href="#" target="_blank">CLICK HERE</a></b></p>
            <hr>
            <p><BR>These sales conditions are agreed upon to by using our website or by booking through an agent. By doing so, You are entering into an Agreement for purchase of travel from Art In Voyage, Inc. (“Art In Voyage”). </p>
            <p><i>The Travel Agreement is a document that is sent to guests after making a reservation, highlighting all the deliverables from Art In Voyage, and responsibilities/obligations from the guest.</i></p>
            <h4>Upon reservation and acceptance of the Travel Agreement</h4>
            <p>A minimum deposit of $750.00 per person unless otherwise noted on page 1 of the Travel Agreement This deposit will be applied towards the balance. It is usually refundable up to 90 days prior to departure (unless otherwise specified on page 1), less an administrative fee that is specified on page 1 of this Travel Agreement.</p>
            <h4>Late Payments</h4>
            <p>Late payments may lead to the cancellation of your journey without any refund on monies already paid. A reinstatement of your reservation may be arranged yet subjected to new rates and penalties.</p>
            <h4>Exchange Rates</h4>
            <p>We guarantee the exchange rate at the time of booking</p>
            <h4>Exclusions</h4>
            <p>Quoted Journey prices exclude: trip insurance not purchased through Art In Voyage; international airfare, including airfare and other transportation to and from the Journey (unless otherwise noted); costs associated with obtaining passports or entry visas; airport departure taxes (unless otherwise noted); excess baggage charges; gratuities to the Journey directors, drivers and guides; meals other than those specified in the Itinerary; sightseeing not included in the Itinerary; and personal expenses such as laundry, communication charges and optional activities (which are subject to availability).</p>
            <h4>Price Changes</h4>
            <p>We reserve the right to increase Journey prices to cover increased costs, tariffs, taxes and V.A.T. received after prices are published or after this Travel Agreement is entered into.</p>
            <p>A handling fee of $150.00 per traveler will be assessed for any changes or revision other than the departure date made to a reservation at less than 30 days. A change of departure date within 60 days of departure will be treated as a cancellation and cancellation charges will apply. Some exceptions may apply, in the sole and unfettered discretion of Art In Voyage.</p>
            <p>Cancelation conditions are stipulated in the Travel Agreement on page 1 and vary by Journey and type of Journey. Refund of all monies paid may take up to 8 (eight) weeks to be processed and received. Cancellations may only be validated once you have received an answer from Art In Voyage confirming receipt of your cancellation. Cancellations may not be done by phone and will only be accepted by email or certified mail.</p>
            <p><b>IMPORTANT – ART IN VOYAGE MAY HAVE TO RESCHEDULE, POSTPONE OR EVEN CANCEL YOUR JOURNEY</b>: Circumstances may arise where Art In Voyage must exercise its professional discretion and postpone or re-schedule your Journey due to such exigencies as transportation schedule changes or delays in other important services. Such circumstances are rare, but if they arise, Art In Voyage commits to you that it will work diligently to reschedule your Journey for other dates that are compatible with your calendar, with Art In Voyage’s capabilities, and with the destination vendors, accommodations, and service providers. Art In Voyage will do its best to maintain the same itinerary and pricing, but cannot guarantee that there will be no changes. All deposits and payments already made will be applied toward the cost of the rescheduled Journey. You retain the discretion to decline to enjoy a rescheduled Journey, in which case you will have two choices: (1) Art in Voyage will retain all funds previously paid by you for up to two years, to be applied as a credit against a new Journey that you and Art in Voyage will arrange and document with a new Travel Agreement; or (2) your original Journey will be considered as canceled by Art In Voyage and handled as described in the next paragraph. Art In Voyage will have to set a deadline to complete this rescheduling option, usually two weeks from the event that causes it to happen. If a rescheduled Journey cannot be programmed and agreed to by you (in writing by the execution of a new Travel Agreement) by the deadline, or if you decline to elect a credit against a future Journey, then Art In Voyage will have to treat your original Journey as canceled by Art In Voyage, and handled as described in the next paragraph. </p>
            <p>Circumstances may arise where Art In Voyage must exercise its professional discretion and completely cancel your Journey due to such exigencies as lack of transportation or other important services. If your Journey is canceled by Art In Voyage, and you, the guest, are not at fault, and you, the guest, have not already canceled, and you, the guest, are not in violation of any of the material terms and conditions of this Travel Agreement, including timely payment, then you will be refunded 100% of any payments that you have properly made. Because this payment must come from our own insurance company, it can take up to eight (8) weeks for the refund to be paid to you.<br />
              Those cancellation charges, fees, and refunds for any Journey that is on the Art In Voyage website and/or contained in the Travel Agreement specific to your Journey shall govern and supersede any other previously printed policies relating to these same charges. </p>
            <p>Sometimes a party of two becomes a party of one because one guest decides to cancel the Journey. Such cancellation is handled as described above, but there is an additional impact on the other guest who does not cancel. Single supplement charges must be added to the charges for the non-cancelling guest. In order to handle this, the single supplement charges will be deducted from the refund, if there is one, owed to the person who cancels. The two guests must handle adjustments or reimbursements to each other independently, without any involvement or responsibility of Art in Voyage. If the amount deducted from the canceling client is insufficient to cover the single supplement charges, then the traveling guest agrees to pay the balance of the single supplement charge. If the cancelling guest purchased travel insurance, the cancellation and refund provisions of the insurance policy will control the amount of any refund, and its manner of payment. Depending upon the policy purchased, not all portions of the premium will be refunded by the insurance company. Art in Voyage is not liable to pay any non-refunded portions of the travel insurance premium.</p>
            <p>Art In Voyage may not be held responsible for the lack of refund, or penalty implementation, by airlines on canceled tickets, whether these tickets were purchased by the guests directly, or with the assistance of Art In Voyage. Airlines have their own sets of rules and conditions which are to be enforced by the airlines, independently of your agreement with Art In Voyage.</p>
            <p>ART IN VOYAGE is fully bonded and insured with coverage for its own potential liabilities. However, guests are encouraged to purchase their own travel insurance or use a credit card that includes substantial travel coverage. As part of the travel Agreement, Art In Voyage offers the opportunity to purchase travel insurance through one of its preferred partners, which may include CSA Travel Protection (Generali), SEVEN CORNERS, AXA, ALLIANZ or WORLD NOMAD (Nationwide).</p>
            <p>Some destinations, airlines or airports may charge a departure tax and/or city tax. These are not prepaid expenses and so are never included in our Curated or Exclusive Journeys. These taxes will be assessed by the local jurisdictions and must be paid by the guests on departure, unless otherwise noted in the Travel Agreement. </p>
            <p>You are solely responsible for complying with passport and visa requirements. For U.S. travelers, international travel requires a passport valid six (6) months beyond your intended return travel date. For other countries, it is a shorter time, but this shows how important it is for you to be familiar with your country’s laws. Art In Voyage cannot do this for you, so learn what is needed to make your Journey problem-free! In many cases, you will also need to have multiple consecutive blank visa pages within your passport (the number varies depending on the destination(s)). Many destinations also require that visas be obtained prior to travel. It is recommended that you check with the U.S. Department of State website for the latest passport and visa requirements. </p>
            <p>ART IN VOYAGE provides all its guests a Travel Journal, usually sent 20-30 days prior to departure. Each Travel Journal lists and details all of the items (accommodations, tours, transportation, activities, etc..) that are part of the Journey agreed upon between Art In Voyage and the guests. It is the responsibility of the guests to carefully review the information provided and report any discrepancies (with tickets, tour booking dates, transportation, etc..) no more than 7 days prior to the scheduled departure. Unless you do so, Art In Voyage will assume the Travel Journal is accurate. Failure to timely report discrepancies may result in revision fees or even cancellation fees to accommodate the correction of any discrepancies.</p>
            <p>Any person reserving or purchasing any product or service offered by ART IN VOYAGE accepts the condition that ART IN VOYAGE reserves to itself the exclusive right to change or cancel itineraries, hotels, and other tour components whenever it is deemed necessary. If this occurs, every effort will be made to offer alternate dates and/or programs. We may in our sole discretion substitute services such as hotels or goods of similar quality for any service or good stated in the itinerary.<br />
              Published times on itineraries are as accurate as possible but subject to change due to conditions beyond ART IN VOYAGE's reasonable control that may prevent ART IN VOYAGE from operating as scheduled. ART IN VOYAGE expressly disclaims any liability for any damages that may be incurred while your Journey is underway for any changes, cancellations or delays on any itinerary provided by ART IN VOYAGE that are due to matters beyond its reasonable control. Such matters include, but are not limited to, the following: war, terrorism, strikes, riots, mechanical failures, facility closures, extreme weather, disasters, disease, pestilence, pandemics, illness of key people, economic impacts on currencies or governments, recession or hyper-inflation. </p>
            <p>All rates on foreign tours are subject to fluctuations of currency and may be changed when necessary without advance notice prior to deposit. Once your deposit has been received, payments of the balance due shall be based upon the exchange rate in effect on the date you paid your deposit.<br />
              All rates published are per person as indicated and are based on double occupancy when only one rate is shown. Reservations will be accepted subject to availability at the time of a request and will be considered confirmed only upon completion of this Travel Agreement receipt of the required deposit.<br />
              ART IN VOYAGE is not liable or responsible if any guest is denied boarding by any airline carrier due to the carrier's over-booking of a flight, the guest’s inability to secure a visa or passport, or a guest not following entry requirements as provided by the airline, the local government or Art In Voyage. However, ART IN VOYAGE will make every reasonable effort to ensure the guest is offered an alternative by the airline, and, to the extent possible, an associate will remain with the guest until boarding is finalized. </p>
            <p>Art In Voyage endeavors to learn about and understand potential hazards of the Journey, but is often unable to assess or gain accurate knowledge of suitability of the Journey for any guest, unsafe conditions, health hazards, weather hazards, political conditions, or climate extremes at locations to which you may travel. For information concerning possible dangers at destinations, Art In Voyage recommends contacting the Travel Warnings Section of the U.S. State Department at (202) 647-5225 or www.travel.state.gov. For medical information, Art In Voyage recommends contacting the Centers for Disease Control at (877) FYI-TRIP or www.cdc.gov/travel. You assume full and complete responsibility for checking and verifying any and all passport, visa, vaccination, or other entry requirements of your destination(s), and all conditions regarding health, safety, security, political stability, and labor or civil unrest at such destination(s). </p>
            <p>Some of our Journeys incorporate active elements such as hiking, climbing or boating; you are responsible for familiarizing yourself with the level of activity that will be involved in your Journey. You must disclose in your Guest Information Form (or at such later time when you become aware of such a condition) any existing physical or mental illness, disability, pregnancy or any other condition which may create a health hazard for yourself or others during the Tour or for which you may require medical attention or special accommodation during the Journey. When required by law, such as the American with Disabilities Act, ART IN VOYAGE will make reasonable efforts to accommodate the special needs of guests. It is strongly recommended that persons requiring assistance be accompanied by a companion who is capable of providing the assistance, and who agrees to be responsible to do so. Neither ART IN VOYAGE personnel nor its local vendors or service suppliers may physically lift or assist clients onto transportation vehicles. Travelers needing special assistance for any special accommodations must inform ART IN VOYAGE at the time of booking to determine what assistance may reasonably be made available by ART IN VOYAGE. ART IN VOYAGE regrets that it cannot provide special individual assistance to a guest with special needs for walking, dining or other special needs. If you fall into such a category and cannot provide your own assistance, you should probably not book with Art In Voyage.</p>
            <p>Allowance is determined by your carrier. ART IN VOYAGE reserves the right to limit baggage allowance in some particular cases where it may impact the quality and experience of the journey. Such limitation would be provided in the travel journal.<br />
              Responsibility wise, although every effort is made to handle passengers' luggage as carefully as possible, ART IN VOYAGE is not responsible for and does not assume any liability or accept any claims for loss of or damage to luggage due to breakage, theft or wear and tear through hotel and group carrier handling. We recommend that you purchase adequate insurance to cover these eventualities. Check with your sales agent for low cost insurance to cover these risks. </p>
            <p>In all matters relating to the making of arrangements for hotel and/or motel accommodations, sightseeing tours and services provided incidental thereto, entertainment, and transportation by air, railroad, motor bus, automobile, or steamship, ART IN VOYAGE and its subsidiaries act only in the capacity of an agent for the airlines, hotels, and other suppliers stated in the tour literature describing the services purchased.<br />
              Because of its status as an agent, and because it maintains no control over the personnel, equipment, or operations of these travel suppliers, ART IN VOYAGE and its subsidiaries assume no responsibility for, and cannot be held liable for, any personal injury, property damage or other loss, accident, delay, inconvenience, or irregularity which may be occasioned either by reason of (1) any </p>
            <p>wrongful, negligent, or unauthorized acts or omissions on the part of any of the suppliers, (2) any wrongful, negligent, or unauthorized acts or omissions on the part of any employee of any of these suppliers, (3) any defect in or failure of any vehicle, equipment, or instrument owned, operated or otherwise used by any of these suppliers, or (4) any wrongful or negligent acts or omissions on the part of any other party not under the supervision and control, direct or otherwise, of ART IN VOYAGE. You hereby release Art in Voyage from all claims arising out of any problem covered in this paragraph.<br />
              ART IN VOYAGE may not be held responsible should the guests dislike the country, places, the food and the climate while traveling with Art In Voyage. For our Curated Journeys, guests are briefed prior to departure. Should the guest disagree with one or many options/activities on the Journey, ART IN VOYAGE will accept comments and remarks and do its best to accommodate the guest to make their experience as enjoyable as possible.<br />
              ART IN VOYAGE, for all tours and packages involving villa or apartment rentals, will hold the guests responsible for any damages that incurred during their stay beyond ordinary wear and tear. In the event of any dispute with the provider of the accommodation, the guest will be able to request repair/replacement invoices and dispute any abusive charges as long as a counter-expertise is requested and paid for by the guest.<br />
              FOR ALL VACATIONS INVOLVING A RENTAL (group or individual), GUESTS MAY BE ASKED TO PROVIDE A VALID CREDIT CARD. ART IN VOYAGE AND/OR THE PROVIDER OF SUCH ACCOMMODATIONS MAY CHARGE OR HOLD A DAMAGE DEPOSIT IN ADVANCE OF UP TO $5,000 PER GUEST, TO BE REFUNDED OR CANCELLED UPON LEAVING THE ACCOMMODATION IN PROPER CONDITION.<br />
              ART IN VOYAGE does not discriminate nor refuse service to anyone based on ethnicity, religion, sex, sexual preferences, or social category. We reserve the right to decline to do business with anyone on a nondiscriminatory basis. We reserve the right to deny service to anyone should ART IN VOYAGE associates judge our services and products inappropriate for the guest. If such action is taken, the guest will be informed about the decision and may be referred to another travel company. ART IN VOYAGE also reserves the right to refuse service to anyone showing signs of a proclivity for, or who engages in, violent behavior. Our goal is to protect our travelers from any incident.<br />
              We may exclude you from participating in all or any part of the Journey if, in our sole discretion, your condition or behavior renders you unfit for the Journey or unfit for continuation once the Journey has begun. Unfitness may include, without limitation, any behavior that, regardless of its cause, is inappropriate or offensive or interferes with the delivery of Journey services or may constitute a hazard or embarrassment. In such case, our liability shall be strictly limited to refund of the recoverable cost of any unused portion of the Journey. Should you decide for any reason not to participate in certain parts of the Journey or use certain goods included in the Journey, no refunds will be made for those unused parts of the Journey or goods.<br />
              ART IN VOYAGE organizes and supervises the making of many Journeys every year. Each one of these Journeys is designed with the assistance of suppliers and other travel partners. For such Journeys ART IN VOYAGE assumes liability only to the extent of its actual participation, including actions by its guides and other employees. ART IN VOYAGE does not assume responsibility for and cannot be held liable for any wrongful, negligent or unauthorized acts or omissions of any travel agent or travel agency that is not ART IN VOYAGE itself, or one of its own employees or contractually-affiliated agent. </p>
            <p>NO CONSEQUENTIAL DAMAGES: IN NO EVENT WILL ART IN VOYAGE BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL OR CONSEQUENTAL DAMAGES, INCLUDING WITHOUT LIMITATION LOST PROFITS AND COST OF PROCUREMENT OF SUBSTITUTE PRODUCTS, ARISING OUT OF YOUR SELECTION OF OR PARTICIPATION IN ANY JOURNEY OR OTHER SERVICE OFFERED BY ART IN VOYAGE, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. IN ANY EVENT, THE MAXIMUM DAMAGES THAT MAY BE ASSESSED AGAINST ART IN VOYAGE FOR ANY CLAIM, INJURY, LOSS OR DAMAGE OF ANY KIND OR NATURE WHATSOEVER SHALL BE THE AMOUUNT IN U.S. DOLLARS ACTUALLY PAID BY YOU TO AND RETAINED BY ART IN VOYAGE. SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION AND EXCLUSIONS MAY NOT APPLY TO YOU.</p>
            <p>Any controversy or claim arising out of or relating to this Travel Agreement, to the website or brochures or to any information relating in any way to the trip, or to the trip itself, shall first be presented by the parties to non-binding mediation, which must be conducted within sixty (60) days after written notice of any such claim is delivered by the aggrieved party to the other party. The mediation may be conducted in person, but either party may attend by video conference or teleconference, in their sole discretion. Legal representation is at the option of the parties. The costs of the mediator shall be paid in advance, one half by Art in Voyage and the balance by the guest(s). Each side shall otherwise bear all of their other costs and expenses associated with the mediation, including attorney’s fees. </p>
            <p>If the dispute cannot be resolved through mediation, then, only after the mediation has occurred and been unsuccessful, a party remaining aggrieved must submit its claims solely and exclusively to binding arbitration to be conducted in Dover, Delaware, in accordance with the then existent commercial rules of the American Arbitration Association. In any such arbitration, the substantive (but not procedural) law of Delaware shall apply. The claim(s) will be decided by a single arbitrator who shall have at least ten years experience in business law and civil litigation. The Arbitrator and not any federal, state, or local court or agency shall have exclusive authority to resolve any dispute relating to the interpretation, applicability, enforceability, or formation of this contract, including but not limited to any claim that all or any part of this contract is void or voidable. Art in Voyage and you will each have the option, exercised in your respective sole discretion, to participate in any arbitration by video conference and not in person, and to call witnesses to attend by video conference or telephone. The Arbitrator is authorized to use fair procedures to ensure authenticity of witnesses and evidence presented in such fashion. The filing fee for the Arbitration shall be borne by the party initiating it. The fees for the service of the Arbitrator shall be borne one half by Art in Voyage and the balance by the guest(s). Each party shall otherwise bear their own costs and expenses associated with the Arbitration, including attorney’s fees. </p>
            <p>BY AGREEING TO BINDING ARBITRATION, YOU ARE IRREVOCABLY WAIVING YOUR RIGHT TO TRIAL BY JURY OR BY ANY OTHER COURT OR TRIBUNAL THAT MIGHT EXIST IN YOUR HOME JURISDICTION. YOU ARE CONSCIOUSLY AND INTENTIONALLY SELECTING ARBITRATION BECAUSE YOU AGREE THAT IT IS BEST SUITED TO RESOLVE DISPUTES INVOLVING THIS TRAVEL AGREEMENT.</p>
            <p>This Agreement contains the entire agreement by and between the Parties, relative to the business arrangement provided for herein. No amendment, waiver or discharge of any provision of this Agreement shall be effective against any Party unless that Party shall have consented thereto in writing.</p>
            <p>This Agreement shall be binding upon and shall inure to the benefit of the parties hereto and their respective heirs, personal representatives, successors and assigns.</p>
            <p>No failure or delay in exercising any rights or remedies pursuant to this Agreement shall constitute a waiver of any other right or remedy pursuant hereto. Resort to one form of remedy shall not constitute a waiver of other available remedies.</p>
            <p>This Agreement may be executed in counterparts by the parties hereto, each of which shall constitute an original of this Agreement and all of which, when taken together, shall constitute one and the same instrument. The parties hereto intend that facsimile copies of fully executed counterparts of this Agreement shall be binding and enforceable.</p>
            <p>A ruling by any court that one or more of the provisions contained in this Agreement is invalid, illegal or unenforceable in any respect shall not affect any other provision of this Agreement. Thereafter, this Agreement shall be construed as if the invalid, illegal or unenforceable provision had never been included, but only within the jurisdiction of the court making the ruling.</p>
            <p>If suit is brought to enforce any of the provisions of this Agreement, then the prevailing party shall be paid by the other party all of the prevailing party’s costs and expenses of prosecuting and/or defending the suit, including, without limitation, the reasonable attorneys’ fees, court costs and expenses of the prevailing party.</p>
            <p>Entire Agreement. Guest warrants that no promises or inducements have been offered for this Travel Agreement other than as set forth herein and that this Travel Agreement is executed without reliance upon any other promises or representations. No modification, termination, or attempted waiver of this Travel Agreement shall be valid unless in writing and signed by the guest and Art In Voyage.</p>
            <p>updated December 20, 2019</p>
          </div>
        </div>

        <div class="hide-me centered" id="emailcapture">
          <h3 class=" centered">Let's get started</h3>
          <script type="text/javascript"></script>
          <div class='gf_browser_unknown gform_wrapper omni_wrapper gform_legacy_markup_wrapper' id='gform_wrapper_42'>
            <div id='gf_42' class='gform_anchor' tabindex='-1'></div>
            <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_42' id='gform_42' class='omni gform_legacy_markup' action='#' novalidate>
              <div class='gf_invisible ginput_recaptchav3' data-sitekey='6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A' data-tabindex='10'><input id="input_74a70c0592984a06cc9351c612c67542" class="gfield_recaptcha_response" type="hidden" name="input_74a70c0592984a06cc9351c612c67542" value="" /></div>
              <div class='gform_body gform-body'>
                <ul id='gform_fields_42' class='gform_fields top_label form_sublabel_above description_above'>
                  <li id="field_42_1" class="gfield flex-input-100 gfield_contains_required field_sublabel_above field_description_above gfield_visibility_visible" data-js-reload="field_42_1"><label class='gfield_label gfield_label_before_complex'>Name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                    <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name' id='input_42_1'>

                      <span id='input_42_1_3_container' class='name_first'>
                        <label for='input_42_1_3'>First</label>
                        <input type='text' name='input_1.3' id='input_42_1_3' value='' tabindex='12' aria-required='true' />
                      </span>

                      <span id='input_42_1_6_container' class='name_last'>
                        <label for='input_42_1_6'>Last</label>
                        <input type='text' name='input_1.6' id='input_42_1_6' value='' tabindex='14' aria-required='true' />
                      </span>

                    </div>
                  </li>
                  <li id="field_42_15" class="gfield flex-input-100 field_sublabel_above field_description_above gfield_visibility_visible" data-js-reload="field_42_15"><label class='gfield_label gfield_label_before_complex'>Email</label>
                    <div class='ginput_complex ginput_container ginput_container_email' id='input_42_15_container'>
                      <span id='input_42_15_1_container' class='ginput_left'>
                        <label for='input_42_15'>Enter Email</label>
                        <input class='' type='email' name='input_15' id='input_42_15' value='' tabindex='16' aria-invalid="false" />
                      </span>
                      <span id='input_42_15_2_container' class='ginput_right'>
                        <label for='input_42_15_2'>Confirm Email</label>
                        <input class='' type='email' name='input_15_2' id='input_42_15_2' value='' tabindex='17' aria-invalid="false" />
                      </span>
                      <div class='gf_clear gf_clear_complex'></div>
                    </div>
                  </li>
                  <li id="field_42_26" class="gfield gfield--width-full field_sublabel_above field_description_above gfield_visibility_hidden" data-js-reload="field_42_26">
                    <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_42_26'>Journey Category</label>
                    <div class='ginput_container ginput_container_text'><input name='input_26' id='input_42_26' type='text' value='onceoff' class='large' tabindex='18' aria-invalid="false" /> </div>
                  </li>
                  <li id="field_42_3" class="gfield field_sublabel_above field_description_above gfield_visibility_hidden" data-js-reload="field_42_3">
                    <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_42_3'>Journey Title</label>
                    <div class='ginput_container ginput_container_text'><input name='input_3' id='input_42_3' type='text' value='Spirit Of Indonesia' class='large' tabindex='19' aria-invalid="false" /> </div>
                  </li>
                  <li id="field_42_20" class="gfield field_sublabel_above field_description_above gfield_visibility_hidden" data-js-reload="field_42_20">
                    <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_42_20'>Journey ID</label>
                    <div class='ginput_container ginput_container_text'><input name='input_20' id='input_42_20' type='text' value='23994' class='large' tabindex='20' aria-invalid="false" /> </div>
                  </li>
                  <li id="field_42_21" class="gfield field_sublabel_above field_description_above gfield_visibility_hidden" data-js-reload="field_42_21">
                    <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_42_21'>Project Number</label>
                    <div class='ginput_container ginput_container_text'><input name='input_21' id='input_42_21' type='text' value='473' class='medium' tabindex='21' aria-invalid="false" /> </div>
                  </li>
                  <li id="field_42_22" class="gfield field_sublabel_above field_description_above gfield_visibility_hidden" data-js-reload="field_42_22">
                    <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_42_22'>Promotional Code</label>
                    <div class='ginput_container ginput_container_text'><input name='input_22' id='input_42_22' type='text' value='UGQ473' class='medium' tabindex='22' aria-invalid="false" /> </div>
                  </li>
                  <li id="field_42_23" class="gfield field_sublabel_above field_description_above gfield_visibility_hidden" data-js-reload="field_42_23">
                    <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_42_23'>Promotion Time</label>
                    <div class='ginput_container ginput_container_text'><input name='input_23' id='input_42_23' type='text' value='2022-03-31 01:17:17' class='medium' tabindex='23' aria-invalid="false" /> </div>
                  </li>
                  <li id="field_42_24" class="gfield field_sublabel_above field_description_above gfield_visibility_hidden" data-js-reload="field_42_24">
                    <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_42_24'>Promotion Code Status</label>
                    <div class='ginput_container ginput_container_text'><input name='input_24' id='input_42_24' type='text' value='Not Booked' class='medium' tabindex='24' aria-invalid="false" /> </div>
                  </li>
                </ul>
              </div>
              <div class='gform_footer top_label'> <button class='omni-button pill centered' id='gform_submit_button_42'>Next Step <i class='fas fa-arrow-right'></i> Select Your Package</button> <input type='hidden' name='gform_ajax' value='form_id=42&amp;title=&amp;description=&amp;tabindex=10' />
                <input type='hidden' class='gform_hidden' name='is_submit_42' value='1' />
                <input type='hidden' class='gform_hidden' name='gform_submit' value='42' />

                <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                <input type='hidden' class='gform_hidden' name='state_42' value='WyJbXSIsIjBhMGFkNWQ0ODYwNzBlOWU0NDA3Y2U2ZjMxODhhNGNmIl0=' />
                <input type='hidden' class='gform_hidden' name='gform_target_page_number_42' id='gform_target_page_number_42' value='0' />
                <input type='hidden' class='gform_hidden' name='gform_source_page_number_42' id='gform_source_page_number_42' value='1' />
                <input type='hidden' name='gform_field_values' value='' />

              </div>
              <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="ak_js" value="3" />
                <script>
                  document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                </script>
              </p>
            </form>
          </div>
          <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_42' id='gform_ajax_frame_42' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
          <script type="text/javascript">
            gform.initializeOnLoaded(function() {
              gformInitSpinner(42, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
              jQuery('#gform_ajax_frame_42').on('load', function() {
                var contents = jQuery(this).contents().find('*').html();
                var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                if (!is_postback) {
                  return;
                }
                var form_content = jQuery(this).contents().find('#gform_wrapper_42');
                var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_42').length > 0;
                var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                if (is_form) {
                  jQuery('#gform_wrapper_42').html(form_content.html());
                  if (form_content.hasClass('gform_validation_error')) {
                    jQuery('#gform_wrapper_42').addClass('gform_validation_error');
                  } else {
                    jQuery('#gform_wrapper_42').removeClass('gform_validation_error');
                  }
                  setTimeout(function() {
                    /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                    jQuery(document).scrollTop(jQuery('#gform_wrapper_42').offset().top - mt);
                  }, 50);
                  if (window['gformInitDatepicker']) {
                    gformInitDatepicker();
                  }
                  if (window['gformInitPriceFields']) {
                    gformInitPriceFields();
                  }
                  var current_page = jQuery('#gform_source_page_number_42').val();
                  gformInitSpinner(42, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                  jQuery(document).trigger('gform_page_loaded', [42, current_page]);
                  window['gf_submitting_42'] = false;
                } else if (!is_redirect) {
                  var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                  if (!confirmation_content) {
                    confirmation_content = contents;
                  }
                  setTimeout(function() {
                    jQuery('#gform_wrapper_42').replaceWith(confirmation_content);
                    jQuery(document).scrollTop(jQuery('#gf_42').offset().top - mt);
                    jQuery(document).trigger('gform_confirmation_loaded', [42]);
                    window['gf_submitting_42'] = false;
                    wp.a11y.speak(jQuery('#gform_confirmation_message_42').text());
                  }, 50);
                } else {
                  jQuery('#gform_42').append(contents);
                  if (window['gformRedirect']) {
                    gformRedirect();
                  }
                }
                jQuery(document).trigger('gform_post_render', [42, current_page]);
              });
            });
          </script>
        </div>

      </div>
    </div>
    <!-- / Content -->

    <div class="omni-footer ">
      <div class="omni-wrapper">

        <!-- Pre Footer -->
        <!-- / Pre Footer -->

        <!-- Primary Footer -->

        <footer class="main-footer">

          <div style="display: none;" id="exit_survey" class="animated-modal">
            <h3>Leaving Us Already?</h3>
            <p>Help us improve the experience across our site, and enter to win an TUMI luggage set, kindly complete this quick survey.<br>
              <i>We have one drawing per month until December 31, 2020.</i>
            </p>
            <div class='gf_browser_unknown gform_wrapper omni_wrapper popupform_wrapper gform_legacy_markup_wrapper' id='gform_wrapper_23'>
              <div id='gf_23' class='gform_anchor' tabindex='-1'></div>
              <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_23' id='gform_23' class='omni popupform gform_legacy_markup' action='#' novalidate>
                <div class='gf_invisible ginput_recaptchav3' data-sitekey='6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A' data-tabindex='99'><input id="input_e0ecbff81860c5b5959833e1d83dce2f" class="gfield_recaptcha_response" type="hidden" name="input_e0ecbff81860c5b5959833e1d83dce2f" value="" /></div>
                <div class='gform_body gform-body'>
                  <ul id='gform_fields_23' class='gform_fields top_label form_sublabel_below description_below'>
                    <li id="field_23_7" class="gfield flex-input-100 gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_23_7"><label class='gfield_label gfield_label_before_complex'>Reason for leaving<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                      <div class='ginput_container ginput_container_checkbox'>
                        <ul class='gfield_checkbox' id='input_23_7'>
                          <li class='gchoice gchoice_23_7_1'>
                            <input class='gfield-choice-input' name='input_7.1' type='checkbox' value='Did not find what I was looking for' id='choice_23_7_1' tabindex='100' />
                            <label for='choice_23_7_1' id='label_23_7_1'>Did not find what I was looking for</label>
                          </li>
                          <li class='gchoice gchoice_23_7_2'>
                            <input class='gfield-choice-input' name='input_7.2' type='checkbox' value='Most journeys are above my budget' id='choice_23_7_2' tabindex='101' />
                            <label for='choice_23_7_2' id='label_23_7_2'>Most journeys are above my budget</label>
                          </li>
                          <li class='gchoice gchoice_23_7_3'>
                            <input class='gfield-choice-input' name='input_7.3' type='checkbox' value='I am interested, but not ready to commit' id='choice_23_7_3' tabindex='102' />
                            <label for='choice_23_7_3' id='label_23_7_3'>I am interested, but not ready to commit</label>
                          </li>
                          <li class='gchoice gchoice_23_7_4'>
                            <input class='gfield-choice-input' name='input_7.4' type='checkbox' value='The dates offered did not work for me' id='choice_23_7_4' tabindex='103' />
                            <label for='choice_23_7_4' id='label_23_7_4'>The dates offered did not work for me</label>
                          </li>
                          <li class='gchoice gchoice_23_7_5'>
                            <input class='gfield-choice-input' name='input_7.5' type='checkbox' value='I was browsing for ideas' id='choice_23_7_5' tabindex='104' />
                            <label for='choice_23_7_5' id='label_23_7_5'>I was browsing for ideas</label>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li id="field_23_11" class="gfield gsection field_sublabel_below field_description_below gfield_visibility_hidden" data-js-reload="field_23_11">
                      <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div>
                      <h2 class="gsection_title">Information needed for a possible win!</h2>
                      <div class='gsection_description' id='gfield_description_23_11'>The following will not be used for any other purpose than to be entered into the drawing. </div>
                    </li>
                    <li id="field_23_3" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_23_3"><label class='gfield_label' for='input_23_3'>Email<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                      <div class='ginput_container ginput_container_email'>
                        <input name='input_3' id='input_23_3' type='email' value='' class='medium' tabindex='105' placeholder='Email' aria-required="true" aria-invalid="false" />
                      </div>
                    </li>
                    <li id="field_23_2" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_23_2"><label class='gfield_label' for='input_23_2'>First &amp; Last Name</label>
                      <div class='ginput_container ginput_container_text'><input name='input_2' id='input_23_2' type='text' value='' class='medium' tabindex='106' placeholder='First &amp; Last Name' aria-invalid="false" /> </div>
                    </li>
                    <li id="field_23_4" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_23_4"><label class='gfield_label' for='input_23_4'>How often do you travel internationally?</label>
                      <div class='ginput_container ginput_container_select'><select name='input_4' id='input_23_4' class='medium gfield_select' tabindex='107' aria-invalid="false">
                          <option value='' selected='selected' class='gf_placeholder'>How often do you travel internationally?</option>
                          <option value='Never'>Never</option>
                          <option value='Once a year'>Once a year</option>
                          <option value='Twice a year'>Twice a year</option>
                          <option value='Three times a year'>Three times a year</option>
                          <option value='Once every other year'>Once every other year</option>
                        </select></div>
                    </li>
                    <li id="field_23_5" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_23_5"><label class='gfield_label screen-reader-text' for='input_23_5'>Your next dream destination</label>
                      <div class='ginput_container ginput_container_text'><input name='input_5' id='input_23_5' type='text' value='' class='medium' tabindex='108' placeholder='Your next dream destination' aria-invalid="false" /> </div>
                    </li>
                    <li id="field_23_12" class="gfield omni field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_23_12"><label class='gfield_label' for='input_23_12'>Any comments on improving user experience?</label>
                      <div class='ginput_container ginput_container_textarea'><textarea name='input_12' id='input_23_12' class='textarea medium' tabindex='109' placeholder='Any comments on improving user experience?' aria-invalid="false" rows='10' cols='50'></textarea></div>
                    </li>
                    <li id="field_23_9" class="gfield field_sublabel_below field_description_below gfield_visibility_hidden" data-js-reload="field_23_9">
                      <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_23_9'>Source Title</label>
                      <div class='ginput_container ginput_container_text'><input name='input_9' id='input_23_9' type='text' value='Spirit of Indonesia' class='medium' tabindex='110' aria-invalid="false" /> </div>
                    </li>
                    <li id="field_23_8" class="gfield field_sublabel_below field_description_below gfield_visibility_hidden" data-js-reload="field_23_8">
                      <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_23_8'>Source ID</label>
                      <div class='ginput_container ginput_container_text'><input name='input_8' id='input_23_8' type='text' value='23994' class='medium' tabindex='111' aria-invalid="false" /> </div>
                    </li>
                  </ul>
                </div>
                <div class='gform_footer top_label'> <button class='omni-button pill' id='gform_submit_button_23'>Send <i class='far fa-paper-plane'></i></button> <input type='hidden' name='gform_ajax' value='form_id=23&amp;title=&amp;description=&amp;tabindex=99' />
                  <input type='hidden' class='gform_hidden' name='is_submit_23' value='1' />
                  <input type='hidden' class='gform_hidden' name='gform_submit' value='23' />

                  <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                  <input type='hidden' class='gform_hidden' name='state_23' value='WyJbXSIsIjBhMGFkNWQ0ODYwNzBlOWU0NDA3Y2U2ZjMxODhhNGNmIl0=' />
                  <input type='hidden' class='gform_hidden' name='gform_target_page_number_23' id='gform_target_page_number_23' value='0' />
                  <input type='hidden' class='gform_hidden' name='gform_source_page_number_23' id='gform_source_page_number_23' value='1' />
                  <input type='hidden' name='gform_field_values' value='' />

                </div>
                <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_2" name="ak_js" value="84" />
                  <script>
                    document.getElementById("ak_js_2").setAttribute("value", (new Date()).getTime());
                  </script>
                </p>
              </form>
            </div>
            <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_23' id='gform_ajax_frame_23' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
            <script type="text/javascript">
              gform.initializeOnLoaded(function() {
                gformInitSpinner(23, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                jQuery('#gform_ajax_frame_23').on('load', function() {
                  var contents = jQuery(this).contents().find('*').html();
                  var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                  if (!is_postback) {
                    return;
                  }
                  var form_content = jQuery(this).contents().find('#gform_wrapper_23');
                  var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_23').length > 0;
                  var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                  var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                  var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                  if (is_form) {
                    jQuery('#gform_wrapper_23').html(form_content.html());
                    if (form_content.hasClass('gform_validation_error')) {
                      jQuery('#gform_wrapper_23').addClass('gform_validation_error');
                    } else {
                      jQuery('#gform_wrapper_23').removeClass('gform_validation_error');
                    }
                    setTimeout(function() {
                      /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                      jQuery(document).scrollTop(jQuery('#gform_wrapper_23').offset().top - mt);
                    }, 50);
                    if (window['gformInitDatepicker']) {
                      gformInitDatepicker();
                    }
                    if (window['gformInitPriceFields']) {
                      gformInitPriceFields();
                    }
                    var current_page = jQuery('#gform_source_page_number_23').val();
                    gformInitSpinner(23, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                    jQuery(document).trigger('gform_page_loaded', [23, current_page]);
                    window['gf_submitting_23'] = false;
                  } else if (!is_redirect) {
                    var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                    if (!confirmation_content) {
                      confirmation_content = contents;
                    }
                    setTimeout(function() {
                      jQuery('#gform_wrapper_23').replaceWith(confirmation_content);
                      jQuery(document).scrollTop(jQuery('#gf_23').offset().top - mt);
                      jQuery(document).trigger('gform_confirmation_loaded', [23]);
                      window['gf_submitting_23'] = false;
                      wp.a11y.speak(jQuery('#gform_confirmation_message_23').text());
                    }, 50);
                  } else {
                    jQuery('#gform_23').append(contents);
                    if (window['gformRedirect']) {
                      gformRedirect();
                    }
                  }
                  jQuery(document).trigger('gform_post_render', [23, current_page]);
                });
              });
            </script>
            <div class="omni-col aiv-popup-image">
              <div class="imagebox contain">
                <img src="wp-content/themes/omni/popup/images/tumi_luggage.jpg" alt="Win a three piece set of Tumi luggage" />
              </div>
            </div>
          </div><a data-fancybox data-animation="600" data-src="#exit_survey" href="javascript:;" style="display: none" id="target_exit_survey"></a>"

          <div class="connect-footer display-none ">
            <div class="">
              <div class="connect-footer-wrapper omni-row-grid two-col">

                <div class="omni-col box padding-v-1 hide-me-mobile">
                  <div class="omni-row-grid two-col">
                    <div class="omni-col  subscribe-box " style="width: 500px">

                      <div class='gf_browser_unknown gform_wrapper omni_footer_wrapper gform_legacy_markup_wrapper' id='gform_wrapper_2'>
                        <div id='gf_2' class='gform_anchor' tabindex='-1'></div>
                        <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_2' id='gform_2' class='omni_footer gform_legacy_markup' action='#' novalidate>
                          <div class='gf_invisible ginput_recaptchav3' data-sitekey='6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A' data-tabindex='999'><input id="input_3340c8db712e9b7a8f6541e967fab25b" class="gfield_recaptcha_response" type="hidden" name="input_3340c8db712e9b7a8f6541e967fab25b" value="" /></div>
                          <div class='gform_body gform-body'>
                            <ul id='gform_fields_2' class='gform_fields top_label form_sublabel_below description_below'>
                              <li id="field_2_1" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_2_1"><label class='gfield_label' for='input_2_1'>Email<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                <div class='ginput_container ginput_container_email'>
                                  <input name='input_1' id='input_2_1' type='email' value='' class='medium' tabindex='1000' placeholder='Sign up to our newsletter' aria-required="true" aria-invalid="false" />
                                </div>
                              </li>
                              <li id="field_2_3" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_2_3"><label class='gfield_label' for='input_2_3'>Next Destination<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                <div class='ginput_container ginput_container_text'><input name='input_3' id='input_2_3' type='text' value='' class='medium' tabindex='1001' placeholder='What&#039;s your next destination?' aria-required="true" aria-invalid="false" /> </div>
                              </li>
                            </ul>
                          </div>
                          <div class='gform_footer top_label'> <button class='omni-button' id='gform_submit_button_2'><i class='far fa-paper-plane'></i></button> <input type='hidden' name='gform_ajax' value='form_id=2&amp;title=&amp;description=&amp;tabindex=999' />
                            <input type='hidden' class='gform_hidden' name='is_submit_2' value='1' />
                            <input type='hidden' class='gform_hidden' name='gform_submit' value='2' />

                            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                            <input type='hidden' class='gform_hidden' name='state_2' value='WyJbXSIsIjBhMGFkNWQ0ODYwNzBlOWU0NDA3Y2U2ZjMxODhhNGNmIl0=' />
                            <input type='hidden' class='gform_hidden' name='gform_target_page_number_2' id='gform_target_page_number_2' value='0' />
                            <input type='hidden' class='gform_hidden' name='gform_source_page_number_2' id='gform_source_page_number_2' value='1' />
                            <input type='hidden' name='gform_field_values' value='' />

                          </div>
                          <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_3" name="ak_js" value="170" />
                            <script>
                              document.getElementById("ak_js_3").setAttribute("value", (new Date()).getTime());
                            </script>
                          </p>
                        </form>
                      </div>
                      <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_2' id='gform_ajax_frame_2' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
                      <script type="text/javascript">
                        gform.initializeOnLoaded(function() {
                          gformInitSpinner(2, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                          jQuery('#gform_ajax_frame_2').on('load', function() {
                            var contents = jQuery(this).contents().find('*').html();
                            var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                            if (!is_postback) {
                              return;
                            }
                            var form_content = jQuery(this).contents().find('#gform_wrapper_2');
                            var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length > 0;
                            var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                            var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                            var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                            if (is_form) {
                              jQuery('#gform_wrapper_2').html(form_content.html());
                              if (form_content.hasClass('gform_validation_error')) {
                                jQuery('#gform_wrapper_2').addClass('gform_validation_error');
                              } else {
                                jQuery('#gform_wrapper_2').removeClass('gform_validation_error');
                              }
                              setTimeout(function() {
                                /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                                jQuery(document).scrollTop(jQuery('#gform_wrapper_2').offset().top - mt);
                              }, 50);
                              if (window['gformInitDatepicker']) {
                                gformInitDatepicker();
                              }
                              if (window['gformInitPriceFields']) {
                                gformInitPriceFields();
                              }
                              var current_page = jQuery('#gform_source_page_number_2').val();
                              gformInitSpinner(2, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                              jQuery(document).trigger('gform_page_loaded', [2, current_page]);
                              window['gf_submitting_2'] = false;
                            } else if (!is_redirect) {
                              var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                              if (!confirmation_content) {
                                confirmation_content = contents;
                              }
                              setTimeout(function() {
                                jQuery('#gform_wrapper_2').replaceWith(confirmation_content);
                                jQuery(document).scrollTop(jQuery('#gf_2').offset().top - mt);
                                jQuery(document).trigger('gform_confirmation_loaded', [2]);
                                window['gf_submitting_2'] = false;
                                wp.a11y.speak(jQuery('#gform_confirmation_message_2').text());
                              }, 50);
                            } else {
                              jQuery('#gform_2').append(contents);
                              if (window['gformRedirect']) {
                                gformRedirect();
                              }
                            }
                            jQuery(document).trigger('gform_post_render', [2, current_page]);
                          });
                        });
                      </script>
                      <style>
                        ul#gform_fields_2 {
                          margin-top: 0.2em;
                        }

                        ul#gform_fields_2 li {
                          display: inline !important;
                        }

                        ul#gform_fields_2 div {
                          display: inline !important;
                        }

                        ul#gform_fields_2 input {
                          display: inline !important;
                          width: 205px;
                        }
                      </style>
                    </div>
                    <div class="omni-col hide-me-mobile">
                      <a href="#" target="_blank">
                        <div class="aiv-footer-trustpilot-img"><img src="wp-content/themes/omni/images/rated_excellent_on_trust_pilot.png" alt="Rated excellent on Trust Pilot" width="100%" /></div>
                      </a>
                      <style>
                        .aiv-footer-trustpilot-img {
                          margin-top: 0.6em;
                        }
                      </style>
                    </div>
                  </div>
                </div>
                <div class=" hide-me-desktop aiv-get-started-mobile  padding-v-1">
                  <div class="">
                    <a data-fancybox data-src='#' href="#"><span>GET STARTED</span></a>
                  </div>
                </div>
                <div class="footer-box-contact">

                  <div class="omni-col box phone-box hide-me-mobile">
                    <a class="aiv-phone-link" href="#"><i class="fas fa-phone"></i> <span>+1 631 440 3050</span></a>
                  </div>

                  <div class="omni-col box hide-me-mobile">
                    <div class="omni-row flex-end  five-col auto no-grow-auto ">
                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#/">
                          <i class="fas fa-envelope hide-me-mobile"></i><i class="fas fa-envelope fa-sm hide-me-desktop"></i>
                        </a>
                      </div>
                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#/" target="_blank">
                          <i class="fab fa-instagram hide-me-mobile"></i><i class="fab fa-instagram fa-sm hide-me-desktop"></i>
                        </a>
                      </div>

                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#" target="_blank">
                          <i class="fab fa-facebook hide-me-mobile"></i><i class="fab fa-facebook fa-sm hide-me-desktop"></i>
                        </a>

                      </div>

                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#" target="_blank">
                          <i class="fab fa-pinterest hide-me-mobile"></i><i class="fab fa-pinterest fa-sm hide-me-desktop"></i>
                        </a>
                      </div>
                      <div class="omni-col padding-h-05 omni-social">

                      </div>
                    </div>

                  </div>
                  <div class="omni-col box centered-aiv-col hide-me-desktop">
                    <div class="omni-row flex-end  five-col auto no-grow-auto ">
                      <div class="omni-col padding-h-05 omni-social ">
                        <a class="icon-link" href="tel:+16314403050"><i class="fas fa-phone fa-sm"></i> </a>
                      </div>
                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#">
                          <i class="fas fa-envelope hide-me-mobile"></i><i class="fas fa-envelope fa-sm hide-me-desktop"></i>
                        </a>
                      </div>
                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#" target="_blank">
                          <i class="fab fa-instagram hide-me-mobile"></i><i class="fab fa-instagram fa-sm hide-me-desktop"></i>
                        </a>
                      </div>

                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#" target="_blank">
                          <i class="fab fa-facebook hide-me-mobile"></i><i class="fab fa-facebook fa-sm hide-me-desktop"></i>
                        </a>

                      </div>

                      <div class="omni-col padding-h-05 omni-social">
                        <a class="icon-link" href="#" target="_blank">
                          <i class="fab fa-pinterest hide-me-mobile"></i><i class="fab fa-pinterest fa-sm hide-me-desktop"></i>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="omni-col  hide-me-desktop">
                    <a href="#" target="_blank">
                      <div class=""><img width="120" src="wp-content/themes/omni/images/rated_excellent_on_trust_pilot.png" alt="Rated excellent on Trust Pilot" width="100%" /></div>
                    </a>
                  </div>

                  <div class="omni-col  hide-me-desktop">
                    <a href="#" class="aiv-whatsapp-btn-float " target="_blank">
                      <i class="fa fa-whatsapp aiv-whatsapp-float"></i>
                    </a>
                  </div>
                </div>

              </div>
            </div>

          </div>
          <a href="#" class="aiv-whatsapp-btn-float hide-me-mobile " target="_blank">
            <i class="fa fa-whatsapp aiv-whatsapp-float"></i>
          </a>

          <div class="hide-me   popupform" id="getstartedExclusiveJourney">
            <h4>Let's Get Started On Your Exclusive Journey</h4>

            <div class='gf_browser_unknown gform_wrapper omni_wrapper gform_legacy_markup_wrapper' id='gform_wrapper_5'>
              <div id='gf_5' class='gform_anchor' tabindex='-1'></div>
              <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_5' id='gform_5' class='omni gform_legacy_markup' action='#' novalidate>
                <div class='gf_invisible ginput_recaptchav3' data-sitekey='6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A' data-tabindex='30'><input id="input_8ac3e2f34a68d50055f36935b9a3b724" class="gfield_recaptcha_response" type="hidden" name="input_8ac3e2f34a68d50055f36935b9a3b724" value="" /></div>
                <div class='gform_body gform-body'>
                  <ul id='gform_fields_5' class='gform_fields top_label form_sublabel_above description_below'>
                    <li id="field_5_1" class="gfield gfield_contains_required field_sublabel_above field_description_below gfield_visibility_visible" data-js-reload="field_5_1"><label class='gfield_label gfield_label_before_complex'>Name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                      <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name' id='input_5_1'>

                        <span id='input_5_1_3_container' class='name_first'>
                          <label for='input_5_1_3'>First</label>
                          <input type='text' name='input_1.3' id='input_5_1_3' value='' tabindex='32' aria-required='true' />
                        </span>

                        <span id='input_5_1_6_container' class='name_last'>
                          <label for='input_5_1_6'>Last</label>
                          <input type='text' name='input_1.6' id='input_5_1_6' value='' tabindex='34' aria-required='true' />
                        </span>

                      </div>
                    </li>
                    <li id="field_5_15" class="gfield gfield_contains_required field_sublabel_above field_description_below gfield_visibility_visible" data-js-reload="field_5_15"><label class='gfield_label gfield_label_before_complex'>Email<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                      <div class='ginput_complex ginput_container ginput_container_email' id='input_5_15_container'>
                        <span id='input_5_15_1_container' class='ginput_left'>
                          <label for='input_5_15'>Enter Email</label>
                          <input class='' type='email' name='input_15' id='input_5_15' value='' tabindex='36' aria-required="true" aria-invalid="false" aria-describedby="gfield_description_5_15" />
                        </span>
                        <span id='input_5_15_2_container' class='ginput_right'>
                          <label for='input_5_15_2'>Confirm Email</label>
                          <input class='' type='email' name='input_15_2' id='input_5_15_2' value='' tabindex='37' aria-required="true" aria-invalid="false" aria-describedby="gfield_description_5_15" />
                        </span>
                        <div class='gf_clear gf_clear_complex'></div>
                      </div>
                      <div class='gfield_description' id='gfield_description_5_15'>Your email is used as the primary form of contact. </div>
                    </li>
                    <li id="field_5_24" class="gfield field_sublabel_above field_description_below gfield_visibility_visible" data-js-reload="field_5_24"><label class='gfield_label' for='input_5_24'>Your phone number</label>
                      <div class='ginput_container ginput_container_phone'><input name='input_24' id='input_5_24' type='tel' value='' class='medium' tabindex='38' aria-invalid="false" aria-describedby="gfield_description_5_24" /></div>
                      <div class='gfield_description' id='gfield_description_5_24'>Although not required, we would reach out should we be unable to get through by email.</div>
                    </li>
                    <li id="field_5_25" class="gfield field_sublabel_above field_description_below gfield_visibility_visible" data-js-reload="field_5_25"><label class='gfield_label' for='input_5_25'>Your location</label>
                      <div class='ginput_container ginput_container_text'><input name='input_25' id='input_5_25' type='text' value='' class='medium' aria-describedby="gfield_description_5_25" tabindex='39' aria-invalid="false" /> </div>
                      <div class='gfield_description' id='gfield_description_5_25'>City, state or country.</div>
                    </li>
                    <li id="field_5_19" class="gfield field_sublabel_above field_description_below gfield_visibility_visible" data-js-reload="field_5_19"><label class='gfield_label' for='input_5_19'>Number of travelers in your party</label>
                      <div class='ginput_container ginput_container_select'><select name='input_19' id='input_5_19' class='medium gfield_select' tabindex='40' aria-invalid="false">
                          <option value='1'>1</option>
                          <option value='2'>2</option>
                          <option value='3'>3</option>
                          <option value='4'>4</option>
                          <option value='5'>5</option>
                          <option value='6'>6</option>
                          <option value='7'>7</option>
                          <option value='8'>8</option>
                          <option value='9'>9</option>
                          <option value='10 +'>10 +</option>
                        </select></div>
                    </li>
                    <li id="field_5_28" class="gfield field_sublabel_above field_description_below gfield_visibility_hidden" data-js-reload="field_5_28">
                      <div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_5_28'>Source</label>
                      <div class='ginput_container ginput_container_text'><input name='input_28' id='input_5_28' type='text' value='Spirit of Indonesia' class='medium' tabindex='41' aria-invalid="false" /> </div>
                    </li>
                    <li id="field_5_26" class="gfield inspiration field_sublabel_above field_description_below hidden_label gfield_visibility_visible" data-js-reload="field_5_26"><label class='gfield_label' for='input_5_26'>Your inspiration</label>
                      <div class='ginput_container ginput_container_select'><select name='input_26' id='input_5_26' class='medium gfield_select' tabindex='42' aria-describedby="gfield_description_5_26" aria-invalid="false">
                          <option value='' selected='selected' class='gf_placeholder'>Choose your inspiration</option>
                          <option value='JOURNEY OF RENEWAL: In Tahiti'>JOURNEY OF RENEWAL: In Tahiti</option>
                          <option value='TASTE OF MYKONOS: Wine, Dine, Sail &amp; Soak'>TASTE OF MYKONOS: Wine, Dine, Sail &amp; Soak</option>
                          <option value='SUMMER ESCAPE TO DOURO'>SUMMER ESCAPE TO DOURO</option>
                          <option value='FOOD, WINE &amp; LAVENDER: Provence for foodies and winos'>FOOD, WINE &amp; LAVENDER: Provence for foodies and winos</option>
                          <option value='FEAST OF THE SENSES: A Portugal Food &amp; Wine Experience'>FEAST OF THE SENSES: A Portugal Food &amp; Wine Experience</option>
                          <option value='A TASTE OF PROVENCE: Encore Edition'>A TASTE OF PROVENCE: Encore Edition</option>
                          <option value='TASTE OF PIEDMONT: With Chef Kevin Fonzo'>TASTE OF PIEDMONT: With Chef Kevin Fonzo</option>
                          <option value='TIM TALKS WINE: Burgundy &amp; Beaujolais'>TIM TALKS WINE: Burgundy &amp; Beaujolais</option>
                          <option value='SOUTH AFRICA AT A GLANCE: Spring Edition'>SOUTH AFRICA AT A GLANCE: Spring Edition</option>
                          <option value='MYSTICAL EMERALD ISLE: Western Ireland'>MYSTICAL EMERALD ISLE: Western Ireland</option>
                          <option value='THE GALAPAGOS ISLANDS 2022'>THE GALAPAGOS ISLANDS 2022</option>
                          <option value='ESSENCE OF PERU 2022'>ESSENCE OF PERU 2022</option>
                          <option value='SNAPSHOT OF SRI LANKA: Culture, Traditions, Spices &amp; Leopards'>SNAPSHOT OF SRI LANKA: Culture, Traditions, Spices &amp; Leopards</option>
                          <option value='CHRISTMAS MARKETS OF EUROPE: Featuring France and Switzerland'>CHRISTMAS MARKETS OF EUROPE: Featuring France and Switzerland</option>
                          <option value='HIGHLIGHTS &amp; DELIGHTS:: Morocco'>HIGHLIGHTS &amp; DELIGHTS:: Morocco</option>
                          <option value='ROADSTERS OF EUROPE: The Ultimate Sports Car Experience'>ROADSTERS OF EUROPE: The Ultimate Sports Car Experience</option>
                          <option value='A TASTE OF PROVENCE: Home Region of our CEO'>A TASTE OF PROVENCE: Home Region of our CEO</option>
                          <option value='ICELAND AT A GLANCE'>ICELAND AT A GLANCE</option>
                          <option value='TIARE &amp; VANILLA: Sailing French Polynesia'>TIARE &amp; VANILLA: Sailing French Polynesia</option>
                          <option value='PEARLS OF THE ADRIATIC 2022: Fall Edition'>PEARLS OF THE ADRIATIC 2022: Fall Edition</option>
                          <option value='JOURNEY OF RENEWAL: Costa Rica'>JOURNEY OF RENEWAL: Costa Rica</option>
                          <option value='LAND OF THE RISING SUN: All The Flavors of Japan'>LAND OF THE RISING SUN: All The Flavors of Japan</option>
                          <option value='CHRISTMAS MARKETS OF EUROPE: Featuring Germany &amp; Austria'>CHRISTMAS MARKETS OF EUROPE: Featuring Germany &amp; Austria</option>
                          <option value='A TASTE OF UMBRIA: Fall Foliage &amp; Truffles'>A TASTE OF UMBRIA: Fall Foliage &amp; Truffles</option>
                          <option value='HIGHLIGHTS &amp; DELIGHTS: of Portugal'>HIGHLIGHTS &amp; DELIGHTS: of Portugal</option>
                          <option value='FLAVORFUL ANDALUCIA'>FLAVORFUL ANDALUCIA</option>
                          <option value='TASTE OF SPAIN'>TASTE OF SPAIN</option>
                        </select></div>
                      <div class='gfield_description' id='gfield_description_5_26'>If your request is based on one of our curated or existing journey, please let us know which one.
                      </div>
                    </li>
                    <li id="field_5_17" class="gfield field_sublabel_above field_description_below gfield_visibility_visible" data-js-reload="field_5_17"><label class='gfield_label' for='input_5_17'>What travel dates do you have in mind (if known)?</label>
                      <div class='ginput_container ginput_container_textarea'><textarea name='input_17' id='input_5_17' class='textarea small' tabindex='43' aria-describedby="gfield_description_5_17" aria-invalid="false" rows='10' cols='50'></textarea></div>
                      <div class='gfield_description' id='gfield_description_5_17'>If you considering several dates, please list them all. If you have a general idea as to month and year, let us know that too.</div>
                    </li>
                    <li id="field_5_27" class="gfield field_sublabel_above field_description_below gfield_visibility_visible" data-js-reload="field_5_27"><label class='gfield_label' for='input_5_27'>Destination(s) or Journey you have in mind:</label>
                      <div class='ginput_container ginput_container_textarea'><textarea name='input_27' id='input_5_27' class='textarea small' tabindex='44' aria-describedby="gfield_description_5_27" aria-invalid="false" rows='10' cols='50'></textarea></div>
                      <div class='gfield_description' id='gfield_description_5_27'>Tell us about any destinations you have in mind, or a type of journey. Not sure? Not a problem! That is what we are here for. Our team of experts will guide you by better understanding your interests upon speaking with you.
                      </div>
                    </li>
                  </ul>
                </div>
                <div class='gform_footer top_label'> <button class='omni-button pill' id='gform_submit_button_5'>Send <i class='far fa-paper-plane'></i></button> <input type='hidden' name='gform_ajax' value='form_id=5&amp;title=&amp;description=&amp;tabindex=30' />
                  <input type='hidden' class='gform_hidden' name='is_submit_5' value='1' />
                  <input type='hidden' class='gform_hidden' name='gform_submit' value='5' />

                  <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                  <input type='hidden' class='gform_hidden' name='state_5' value='WyJbXSIsIjBhMGFkNWQ0ODYwNzBlOWU0NDA3Y2U2ZjMxODhhNGNmIl0=' />
                  <input type='hidden' class='gform_hidden' name='gform_target_page_number_5' id='gform_target_page_number_5' value='0' />
                  <input type='hidden' class='gform_hidden' name='gform_source_page_number_5' id='gform_source_page_number_5' value='1' />
                  <input type='hidden' name='gform_field_values' value='' />

                </div>
                <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_4" name="ak_js" value="11" />
                  <script>
                    document.getElementById("ak_js_4").setAttribute("value", (new Date()).getTime());
                  </script>
                </p>
              </form>
            </div>
            <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_5' id='gform_ajax_frame_5' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
            <script type="text/javascript">
              gform.initializeOnLoaded(function() {
                gformInitSpinner(5, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                jQuery('#gform_ajax_frame_5').on('load', function() {
                  var contents = jQuery(this).contents().find('*').html();
                  var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                  if (!is_postback) {
                    return;
                  }
                  var form_content = jQuery(this).contents().find('#gform_wrapper_5');
                  var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_5').length > 0;
                  var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                  var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                  var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                  if (is_form) {
                    jQuery('#gform_wrapper_5').html(form_content.html());
                    if (form_content.hasClass('gform_validation_error')) {
                      jQuery('#gform_wrapper_5').addClass('gform_validation_error');
                    } else {
                      jQuery('#gform_wrapper_5').removeClass('gform_validation_error');
                    }
                    setTimeout(function() {
                      /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                      jQuery(document).scrollTop(jQuery('#gform_wrapper_5').offset().top - mt);
                    }, 50);
                    if (window['gformInitDatepicker']) {
                      gformInitDatepicker();
                    }
                    if (window['gformInitPriceFields']) {
                      gformInitPriceFields();
                    }
                    var current_page = jQuery('#gform_source_page_number_5').val();
                    gformInitSpinner(5, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                    jQuery(document).trigger('gform_page_loaded', [5, current_page]);
                    window['gf_submitting_5'] = false;
                  } else if (!is_redirect) {
                    var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                    if (!confirmation_content) {
                      confirmation_content = contents;
                    }
                    setTimeout(function() {
                      jQuery('#gform_wrapper_5').replaceWith(confirmation_content);
                      jQuery(document).scrollTop(jQuery('#gf_5').offset().top - mt);
                      jQuery(document).trigger('gform_confirmation_loaded', [5]);
                      window['gf_submitting_5'] = false;
                      wp.a11y.speak(jQuery('#gform_confirmation_message_5').text());
                    }, 50);
                  } else {
                    jQuery('#gform_5').append(contents);
                    if (window['gformRedirect']) {
                      gformRedirect();
                    }
                  }
                  jQuery(document).trigger('gform_post_render', [5, current_page]);
                });
              });
            </script>
          </div>

          <div class="omni-grid footer-block padding-t-1 boxed aiv-mobile-center">

            <div id="sidebar-footer_first_col" class="footer-widget flex-mobile-100 flex-last">
              <div class="footer-logo">
                <a href="#" rel="home">
                  <img src="wp-content/uploads/aiv_logo_neg.png" class="footer-logo" alt="Art in Voyage" />
                </a>
              </div>
              <div class="omni-row-grid  big-gap margin-v-1 ">
                <a class="omni-button outline pill light-button margin-v-0" href="#">Curated journeys</a>
                <a class="omni-button outline pill light-button margin-v-0" href="#">Create your own</a>
                <a class="omni-button outline pill light-button margin-v-0" href="#">Get in touch</a>
              </div>
              <div class="margin-v-1 footer-address centered ">
                Offices in the United States<br>and South Africa.

              </div>
            </div>

            <div id="sidebar-footer_second_col" class="footer-widget">
              <div id="nav_menu-5" class="widget widget_nav_menu">
                <h3 class="widget-title">Partnerships &#038; Media</h3>
                <div class="menu-partnerships-media-container">
                  <ul id="menu-partnerships-media" class="menu">
                    <li id="menu-item-15843" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15843"><a href="#">Working With Travel Agents</a></li>
                    <li id="menu-item-15871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15871"><a href="#">Our Partners</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div id="sidebar-footer_second_col" class="footer-widget">
              <div id="nav_menu-5" class="widget widget_nav_menu">
                <h3 class="widget-title">What do you enjoy?</h3>
                <div class="menu-where-footer-container ">
                  <ul id="menu-where-footer" class="menu">
                    <li class="menu-item menu-item-type-custom"><a href="#">City discovery</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Cooking class</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Culinary Experience</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Culture and History</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Outdoors</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Wellness and Pampering</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Wine and Spirit Education</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Wine and Spirits Appreciation</a></li>
                    <li class="menu-item menu-item-type-custom"><a href="#">Yoga and Meditation</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="sidebar-footer_fourth_col" class="footer-widget">
              <div id="nav_menu-7" class="widget widget_nav_menu">
                <h3 class="widget-title">About Art In Voyage</h3>
                <div class="menu-about-art-in-voyage-container">
                  <ul id="menu-about-art-in-voyage" class="menu">
                    <li id="menu-item-15836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15836"><a href="#">Why Art in Voyage?</a></li>
                    <li id="menu-item-15837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15837"><a href="#">About Art In Voyage</a></li>
                    <li id="menu-item-18530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18530"><a href="#">Gratitude Loyalty Program</a></li>
                    <li id="menu-item-15839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15839"><a href="#">Get In Touch</a></li>
                    <li id="menu-item-15840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15840"><a href="#">Sales Terms and conditions</a></li>
                    <li id="menu-item-15841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15841"><a href="#">Travel Insurance</a></li>
                    <li id="menu-item-15842" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15842"><a href="#">Our Main Experiences Explained!</a></li>
                    <li id="menu-item-15936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15936"><a href="#">Terms of Site Use</a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

        </footer>

        <div style="display: none;" id="animatedModal-subscribe" class="animated-modal">
          <div class="omni-grid">
            <div class="subscribe-aiv-section2">
              <div class="omni-grid">
                <div class='gf_browser_unknown gform_wrapper gform_legacy_markup_wrapper' id='gform_wrapper_35'>
                  <div id='gf_35' class='gform_anchor' tabindex='-1'></div>
                  <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_35' id='gform_35' action='#' novalidate>
                    <div class='gf_invisible ginput_recaptchav3' data-sitekey='6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A' data-tabindex='1'><input id="input_db0059821c32c3d617b7108c3514701f" class="gfield_recaptcha_response" type="hidden" name="input_db0059821c32c3d617b7108c3514701f" value="" /></div>
                    <div class='gform_body gform-body'>
                      <ul id='gform_fields_35' class='gform_fields top_label form_sublabel_below description_below'>
                        <li id="field_35_5" class="gfield gsection field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_35_5">
                          <h2 class="gsection_title"></h2>
                          <div class='gsection_description' id='gfield_description_35_5'>
                            <div "><h3 class=" white text-centered">Subscribe to our newsletter</h3>
                            </div>
                          </div>
                        </li>
                        <li id="field_35_4" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_35_4"><label class='gfield_label' for='input_35_4'>First Name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                          <div class='ginput_container ginput_container_text'><input name='input_4' id='input_35_4' type='text' value='' class='medium' tabindex='2' aria-required="true" aria-invalid="false" /> </div>
                        </li>
                        <li id="field_35_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_35_2"><label class='gfield_label' for='input_35_2'>Email<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                          <div class='ginput_container ginput_container_email'>
                            <input name='input_2' id='input_35_2' type='email' value='' class='medium' tabindex='3' aria-required="true" aria-invalid="false" />
                          </div>
                        </li>
                        <li id="field_35_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_35_3"><label class='gfield_label' for='input_35_3'>What destination(s) do you have in mind<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                          <div class='ginput_container ginput_container_text'><input name='input_3' id='input_35_3' type='text' value='' class='medium' tabindex='4' aria-required="true" aria-invalid="false" /> </div>
                        </li>
                        <li id="field_35_6" class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_35_6"><label class='gfield_label' for='input_35_6'>CAPTCHA</label>
                          <div id='input_35_6' class='ginput_container ginput_recaptcha' data-sitekey='6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A' data-theme='light' data-tabindex='-1' data-size='invisible' data-badge='bottomright'></div>
                        </li>
                      </ul>
                    </div>
                    <div class='gform_footer top_label'> <button class='omni-button pill subscribe-aiv-section-btn' id='gform_submit_button_35'>Subscribe <i class='far fa-paper-plane'></i></button> <input type='hidden' name='gform_ajax' value='form_id=35&amp;title=&amp;description=&amp;tabindex=1' />
                      <input type='hidden' class='gform_hidden' name='is_submit_35' value='1' />
                      <input type='hidden' class='gform_hidden' name='gform_submit' value='35' />

                      <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                      <input type='hidden' class='gform_hidden' name='state_35' value='WyJbXSIsIjBhMGFkNWQ0ODYwNzBlOWU0NDA3Y2U2ZjMxODhhNGNmIl0=' />
                      <input type='hidden' class='gform_hidden' name='gform_target_page_number_35' id='gform_target_page_number_35' value='0' />
                      <input type='hidden' class='gform_hidden' name='gform_source_page_number_35' id='gform_source_page_number_35' value='1' />
                      <input type='hidden' name='gform_field_values' value='' />

                    </div>
                    <p style="display: none !important;"><label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_5" name="ak_js" value="176" />
                      <script>
                        document.getElementById("ak_js_5").setAttribute("value", (new Date()).getTime());
                      </script>
                    </p>
                  </form>
                </div>
                <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_35' id='gform_ajax_frame_35' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
                <script type="text/javascript">
                  gform.initializeOnLoaded(function() {
                    gformInitSpinner(35, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                    jQuery('#gform_ajax_frame_35').on('load', function() {
                      var contents = jQuery(this).contents().find('*').html();
                      var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                      if (!is_postback) {
                        return;
                      }
                      var form_content = jQuery(this).contents().find('#gform_wrapper_35');
                      var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_35').length > 0;
                      var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                      var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                      var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                      if (is_form) {
                        jQuery('#gform_wrapper_35').html(form_content.html());
                        if (form_content.hasClass('gform_validation_error')) {
                          jQuery('#gform_wrapper_35').addClass('gform_validation_error');
                        } else {
                          jQuery('#gform_wrapper_35').removeClass('gform_validation_error');
                        }
                        setTimeout(function() {
                          /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                          jQuery(document).scrollTop(jQuery('#gform_wrapper_35').offset().top - mt);
                        }, 50);
                        if (window['gformInitDatepicker']) {
                          gformInitDatepicker();
                        }
                        if (window['gformInitPriceFields']) {
                          gformInitPriceFields();
                        }
                        var current_page = jQuery('#gform_source_page_number_35').val();
                        gformInitSpinner(35, 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
                        jQuery(document).trigger('gform_page_loaded', [35, current_page]);
                        window['gf_submitting_35'] = false;
                      } else if (!is_redirect) {
                        var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                        if (!confirmation_content) {
                          confirmation_content = contents;
                        }
                        setTimeout(function() {
                          jQuery('#gform_wrapper_35').replaceWith(confirmation_content);
                          jQuery(document).scrollTop(jQuery('#gf_35').offset().top - mt);
                          jQuery(document).trigger('gform_confirmation_loaded', [35]);
                          window['gf_submitting_35'] = false;
                          wp.a11y.speak(jQuery('#gform_confirmation_message_35').text());
                        }, 50);
                      } else {
                        jQuery('#gform_35').append(contents);
                        if (window['gformRedirect']) {
                          gformRedirect();
                        }
                      }
                      jQuery(document).trigger('gform_post_render', [35, current_page]);
                    });
                  });
                </script>
              </div>
            </div>
          </div>
        </div> <!-- / Primary Footer -->

        <!-- Sub Footer -->
        <div class="sub-footer">
          <div class="omni-grid boxed">
            <div class="omni-row subfooter-row ">

              <div id="sidebar-sub_footer_first_col" class="omni-col copyright-col">
                All rights reserved. Art in Voyage. 2022 </div>

              <!-- <div id="sidebar-sub_footer_third_col " class="omni-col byline-col margin-t-1">
          Designed and built in Cape Town by <a href="https://ibay.co.za">ibay</a>
        </div> -->

            </div>

          </div>
        </div>
        <!-- / Sub Footer -->

      </div>

    </div>

    <script type='text/javascript' id='crisp-js-before'>
      window.$crisp = [];
      CRISP_RUNTIME_CONFIG = {
        locale: 'en'
      };
      CRISP_WEBSITE_ID = 'de879cdb-86fd-4e38-9f44-762f9b17d67b';
    </script>
    <script type='text/javascript' async src='client.crisp.chat/l6dcf.js?ver=5.9.2' id='crisp-js'></script>
    <script type='text/javascript' id='theme-my-login-js-extra'>
      /* <![CDATA[ */
      var themeMyLogin = {
        "action": "",
        "errors": []
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/theme-my-login/assets/scripts/theme-my-login.minf719.js?ver=7.1.4' id='theme-my-login-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/js/aiv-omni.min081c.js?ver=MzAxdFJPui' id='omni-custom-js-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/js/aiv-viewJourney081c.js?ver=MzAxdFJPui' id='aiv-viewJourney-js-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/js/aiv-homeHero081c.js?ver=MzAxdFJPui' id='aiv-homeHero-js-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/js/room-cart081c.js?ver=MzAxdFJPui' id='aiv-room-cart-js-js'></script>
    <script type='text/javascript' src='cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min081c.js?ver=MzAxdFJPui' id='omni-lightbox-js-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/includes/js.cookie-min081c.js?ver=MzAxdFJPui' id='omni-js-cookie-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/js/jquery.cookie081c.js?ver=MzAxdFJPui' id='jquery-cookie-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/js/wish-list.min081c.js?ver=MzAxdFJPui' id='omni-wish-list-scripts-js'></script>
    <script type='text/javascript' src='wp-content/themes/omni/js/nav-responsive-min081c.js?ver=MzAxdFJPui' id='omni-responsive-nav-scripts-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/tooltip.min0028.js?ver=1.13.1' id='jquery-ui-tooltip-js'></script>
    <script type='text/javascript' id='gforms_recaptcha_recaptcha-js-extra'>
      /* <![CDATA[ */
      var gforms_recaptcha_recaptcha_strings = {
        "site_key": "6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A",
        "ajaxurl": "https:\/\/artinvoyage.com\/wp-admin\/admin-ajax.php",
        "nonce": "f1bd5365f5"
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='www.google.com/recaptcha/api8c46.js?render=6Ld0XuQZAAAAAITnxGO3pA5S8copcJ38fMY2Ii7A&amp;ver=1.1' id='gforms_recaptcha_recaptcha-js'></script>
    <script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type='text/javascript' src='wp-includes/js/dist/dom-ready.min9b8e.js?ver=ecda74de0221e1c2ce5c57cbb5af09d5' id='wp-dom-ready-js'></script>
    <script type='text/javascript' src='wp-includes/js/dist/hooks.min8cbb.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
    <script type='text/javascript' src='wp-includes/js/dist/i18n.mina28b.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
    <script type='text/javascript' id='wp-i18n-js-after'>
      wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
      });
    </script>
    <script type='text/javascript' id='wp-a11y-js-translations'>
      (function(domain, translations) {
        var localeData = translations.locale_data[domain] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData(localeData, domain);
      })("default", {
        "locale_data": {
          "messages": {
            "": {}
          }
        }
      });
    </script>
    <script type='text/javascript' src='wp-includes/js/dist/a11y.minef62.js?ver=68e470cf840f69530e9db3be229ad4b6' id='wp-a11y-js'></script>
    <script type='text/javascript' defer='defer' src='wp-content/plugins/gravityforms/js/jquery.json.minc141.js?ver=2.6.1' id='gform_json-js'></script>
    <script type='text/javascript' id='gform_gravityforms-js-extra'>
      /* <![CDATA[ */
      var gform_i18n = {
        "datepicker": {
          "days": {
            "monday": "Mon",
            "tuesday": "Tue",
            "wednesday": "Wed",
            "thursday": "Thu",
            "friday": "Fri",
            "saturday": "Sat",
            "sunday": "Sun"
          },
          "months": {
            "january": "January",
            "february": "February",
            "march": "March",
            "april": "April",
            "may": "May",
            "june": "June",
            "july": "July",
            "august": "August",
            "september": "September",
            "october": "October",
            "november": "November",
            "december": "December"
          },
          "firstDay": 1,
          "iconText": "Select date"
        }
      };
      var gf_legacy_multi = [];
      var gform_gravityforms = {
        "strings": {
          "invalid_file_extension": "This type of file is not allowed. Must be one of the following:",
          "delete_file": "Delete this file",
          "in_progress": "in progress",
          "file_exceeds_limit": "File exceeds size limit",
          "illegal_extension": "This type of file is not allowed.",
          "max_reached": "Maximum number of files reached",
          "unknown_error": "There was a problem while saving the file on the server",
          "currently_uploading": "Please wait for the uploading to complete",
          "cancel": "Cancel",
          "cancel_upload": "Cancel this upload",
          "cancelled": "Cancelled"
        },
        "vars": {
          "images_url": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms\/images"
        }
      };
      var gf_global = {
        "gf_currency_config": {
          "name": "U.S. Dollar",
          "symbol_left": "$",
          "symbol_right": "",
          "symbol_padding": "",
          "thousand_separator": ",",
          "decimal_separator": ".",
          "decimals": 2,
          "code": "USD"
        },
        "base_url": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms",
        "number_formats": [],
        "spinnerUrl": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
        "strings": {
          "newRowAdded": "New row added.",
          "rowRemoved": "Row removed",
          "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
        }
      };
      var gf_global = {
        "gf_currency_config": {
          "name": "U.S. Dollar",
          "symbol_left": "$",
          "symbol_right": "",
          "symbol_padding": "",
          "thousand_separator": ",",
          "decimal_separator": ".",
          "decimals": 2,
          "code": "USD"
        },
        "base_url": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms",
        "number_formats": [],
        "spinnerUrl": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
        "strings": {
          "newRowAdded": "New row added.",
          "rowRemoved": "Row removed",
          "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
        }
      };
      var gf_global = {
        "gf_currency_config": {
          "name": "U.S. Dollar",
          "symbol_left": "$",
          "symbol_right": "",
          "symbol_padding": "",
          "thousand_separator": ",",
          "decimal_separator": ".",
          "decimals": 2,
          "code": "USD"
        },
        "base_url": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms",
        "number_formats": [],
        "spinnerUrl": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
        "strings": {
          "newRowAdded": "New row added.",
          "rowRemoved": "Row removed",
          "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
        }
      };
      var gf_global = {
        "gf_currency_config": {
          "name": "U.S. Dollar",
          "symbol_left": "$",
          "symbol_right": "",
          "symbol_padding": "",
          "thousand_separator": ",",
          "decimal_separator": ".",
          "decimals": 2,
          "code": "USD"
        },
        "base_url": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms",
        "number_formats": [],
        "spinnerUrl": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
        "strings": {
          "newRowAdded": "New row added.",
          "rowRemoved": "Row removed",
          "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
        }
      };
      var gf_global = {
        "gf_currency_config": {
          "name": "U.S. Dollar",
          "symbol_left": "$",
          "symbol_right": "",
          "symbol_padding": "",
          "thousand_separator": ",",
          "decimal_separator": ".",
          "decimals": 2,
          "code": "USD"
        },
        "base_url": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms",
        "number_formats": [],
        "spinnerUrl": "https:\/\/artinvoyage.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
        "strings": {
          "newRowAdded": "New row added.",
          "rowRemoved": "Row removed",
          "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
        }
      };
      /* ]]> */
    </script>
    <script type='text/javascript' defer='defer' src='wp-content/plugins/gravityforms/js/gravityforms.minc141.js?ver=2.6.1' id='gform_gravityforms-js'></script>
    <script type='text/javascript' src='wp-content/plugins/gravityformsrecaptcha/js/frontend.min4963.js?ver=1.1' id='gforms_recaptcha_frontend-js'></script>
    <script type='text/javascript' defer='defer' src='wp-content/plugins/gravityforms/js/placeholders.jquery.minc141.js?ver=2.6.1' id='gform_placeholder-js'></script>
    <script type='text/javascript' defer='defer' src='wp-content/plugins/gravityforms/js/jquery.maskedinput.minc141.js?ver=2.6.1' id='gform_masked_input-js'></script>
    <script type='text/javascript' defer='defer' src='www.google.com/recaptcha/api73a2.js?hl=en&amp;ver=5.9.2#038;render=explicit' id='gform_recaptcha-js'></script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
          if (formId == 42) {}
        });
        jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).trigger('gform_post_render', [42, 1])
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
          if (formId == 23) {
            if (typeof Placeholders != 'undefined') {
              Placeholders.enable();
            }
          }
        });
        jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).trigger('gform_post_render', [23, 1])
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
          if (formId == 2) {
            if (typeof Placeholders != 'undefined') {
              Placeholders.enable();
            }
          }
        });
        jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).trigger('gform_post_render', [2, 1])
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
          if (formId == 5) {
            if (typeof Placeholders != 'undefined') {
              Placeholders.enable();
            }
            jQuery('#input_5_24').mask('(999) 999-9999').bind('keypress', function(e) {
              if (e.which == 13) {
                jQuery(this).blur();
              }
            });
          }
        });
        jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).trigger('gform_post_render', [5, 1])
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
          if (formId == 35) {}
        });
        jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
      });
    </script>
    <script type="text/javascript">
      gform.initializeOnLoaded(function() {
        jQuery(document).trigger('gform_post_render', [35, 1])
      });
    </script>