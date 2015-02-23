/*!
 * Buttons helper for fancyBox
 * version: 1.0.5 (Mon, 15 Oct 2012)
 * @requires fancyBox v2.0 or later
 *
 * Usage:
 *     $(".fancybox").fancybox({
 *         helpers : {
 *             buttons: {
 *                 position : 'top'
 *             }
 *         }
 *     });
 *
 */(function(e){var t=e.fancybox;t.helpers.buttons={defaults:{skipSingle:!1,position:"top",tpl:'<div id="fancybox-buttons"><ul><li><a class="btnPrev" title="Previous" href="javascript:;"></a></li><li><a class="btnPlay" title="Start slideshow" href="javascript:;"></a></li><li><a class="btnNext" title="Next" href="javascript:;"></a></li><li><a class="btnToggle" title="Toggle size" href="javascript:;"></a></li><li><a class="btnClose" title="Close" href="javascript:jQuery.fancybox.close();"></a></li></ul></div>'},list:null,buttons:null,beforeLoad:function(e,t){if(e.skipSingle&&t.group.length<2){t.helpers.buttons=!1;t.closeBtn=!0;return}t.margin[e.position==="bottom"?2:0]+=30},onPlayStart:function(){this.buttons&&this.buttons.play.attr("title","Pause slideshow").addClass("btnPlayOn")},onPlayEnd:function(){this.buttons&&this.buttons.play.attr("title","Start slideshow").removeClass("btnPlayOn")},afterShow:function(n,r){var i=this.buttons;if(!i){this.list=e(n.tpl).addClass(n.position).appendTo("body");i={prev:this.list.find(".btnPrev").click(t.prev),next:this.list.find(".btnNext").click(t.next),play:this.list.find(".btnPlay").click(t.play),toggle:this.list.find(".btnToggle").click(t.toggle)}}r.index>0||r.loop?i.prev.removeClass("btnDisabled"):i.prev.addClass("btnDisabled");if(r.loop||r.index<r.group.length-1){i.next.removeClass("btnDisabled");i.play.removeClass("btnDisabled")}else{i.next.addClass("btnDisabled");i.play.addClass("btnDisabled")}this.buttons=i;this.onUpdate(n,r)},onUpdate:function(e,t){var n;if(!this.buttons)return;n=this.buttons.toggle.removeClass("btnDisabled btnToggleOn");t.canShrink?n.addClass("btnToggleOn"):t.canExpand||n.addClass("btnDisabled")},beforeClose:function(){this.list&&this.list.remove();this.list=null;this.buttons=null}}})(jQuery);