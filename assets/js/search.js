$(function() {
    var e = location.search.replace(/^\?.*s=([^&]+)/, "$1")
      , r = $("#search")
      , t = $("input[type=text]", r)
      , a = $("#search-results").height(0)
      , r = $('<iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" allowTransparency="true"></iframe>');
    a.length && (r.attr({
        src: "search/results.php?s=" + e
    }).appendTo(a),
    t.val(decodeURI(e))),
    window._resize = function(e) {
        a.height(e)
    }
});
