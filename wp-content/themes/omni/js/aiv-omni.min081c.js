function docReady(fn) {
    "complete" === document.readyState || "interactive" === document.readyState ? setTimeout(fn, 1) : document.addEventListener("DOMContentLoaded", fn)
}

function addNewStyle(newStyle) {
    var styleElement = document.getElementById("styles_js");
    styleElement || ((styleElement = document.createElement("style")).type = "text/css", styleElement.id = "styles_js", document.getElementsByTagName("head")[0].appendChild(styleElement)), styleElement.appendChild(document.createTextNode(newStyle))
}
var display = window.location.pathname.split("/")[1];
addNewStyle("journey" == display || "create-our-own-experience" == display ? ".aiv-whatsapp-btn-float { bottom: 42.2%!important; right: 22.1px!important;}" : "body .crisp-client .cc-kv6t .cc-1xry .cc-unoo {display: none !important;}");