$(function() {
  
   $( '.firstbanerfotorama' ).fotorama();
         
   $( '.index-baner-1' ).delegate( '.nav-tags-item', 'click', function(e) {
     e.preventDefault();
     e.stopPropagation();
     var $item = $( this );
     $( '.firstbanerfotorama' ).data( 'fotorama' ).show( $item.data( 'id' ));
   });

   $( '.index-baner-1' ).delegate( '.nav-tags-icon', 'click', function(e) {
     e.preventDefault();
     e.stopPropagation();
     var $item = $( this );
     $( '.firstbanerfotorama' ).data( 'fotorama' ).show(0);
   });
   
  $(".index-baner-1").delegate( '.callback-show', "click", function () {
    var e = "NONE";
    return 0 < $(this).data("teasername").length && (e = $(this).data("teasername")), $("#mango-widget-btn").click(), sendEventAjax("CALLBACK_OPEN", e), !1
  })

    
  function a() {
      e = window.matchMedia("( min-width: 1200px )").matches ? "lg" : window.matchMedia("( min-width: 992px )").matches ? "md" : window.matchMedia("( min-width: 768px )").matches ? "sm" : "xs", d !== e && (d = e, b())
  }

  function b() {
      f = "lg" === d ? 440 : "md" === d ? 440 : 360, c.data("fotorama") && c.data("fotorama").destroy(), c.on("fotorama:show", function(a, b) {
          var c, d = $("video", $(b.activeFrame.$stageFrame)),
              e = !1;
          $(document).innerWidth() > 768 && d.length > 0 && (c = setInterval(function() {
              if (e) clearTimeout(c);
              else {
                  var a = d.get(0).play();
                  void 0 !== a && a.then(function() {
                      e = !0
                  }).catch(function() {
                      d.get(0).play()
                  })
              }
          }, 1e3))
      }).fotorama({
          height: f
      }), $("input, textarea", c).on("click", function(a) {
          a.stopPropagation(), a.preventDefault(), $(this).focus()
      })
  }
  var c = $(".firstbanerfotorama"),
      d = "",
      e = "",
      f = 440,
      g = $(".item", c);
  g.length > 0 && g.each(function() {
      var a = $(this);
      if (a.data("ytvideo") && a.data("videoid")) {
          var b = "";
          if (a.data("videoautoplay") && (b = "autoPlayModal"), 0 == $("#" + a.data("videoid")).length) {
              $('<div id="' + a.data("videoid") + '" tabindex="-1" role="dialog" aria-labelledby="' + a.data("videoid") + 'Label" class="modal ' + b + ' "><div role="document" class="modal-dialog modal-lg"><div class="modal-content text-middle"><button type="button" data-dismiss="modal" aria-label="Close" class="close"></button><div class="modal-body center"><div class="embed-responsive embed-responsive-16by9"><iframe src="https://www.youtube.com/embed/' + a.data("ytvideo") + '?enablejsapi=1&rel=0&autoplay=0" allowfullscreen></iframe></div></div></div></div></div>').appendTo("body")
          }
      }
  }), $(".autoPlayModal").on("loaded.bs.modal", function(a) {}).on("hide.bs.modal", function(a) {
      var b = a.target;
      $("iframe", b)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*")
  }).on("show.bs.modal", function(a) {
      var b = a.target;
      $("iframe", b)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', "*")
  }), $(window).resize(a), a(), $(".index-baner-1 .popover_teaser").popover()
});