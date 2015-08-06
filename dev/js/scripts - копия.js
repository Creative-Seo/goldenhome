window.Modernizr=function(a,b,c){
	function y(a){i.cssText=a}
	function z(a,b){return y(l.join(a+";")+(b||""))}
	function A(a,b){return typeof a===b}
	function B(a,b){return!!~(""+a).indexOf(b)}
	function C(a,b){for(var d in a){var e=a[d];if(!B(e,"-")&&i[e]!==c)return b=="pfx"?e:!0}return!1}
	function D(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:A(f,"function")?f.bind(d||b):f}return!1}
	function E(a,b,c){
		var d=a.charAt(0).toUpperCase()+a.slice(1),
		e=(a+" "+n.join(d+" ")+d).split(" ");
		return A(b,"string")||A(b,"undefined")?C(e,b):(e=(a+" "+o.join(d+" ")+d).split(" "),D(e,b,c))
	}
	var d="2.8.3",
		e={},
		f=b.documentElement,
		g="modernizr",
		h=b.createElement(g),
		i=h.style,
		j,
		k={}.toString,l=" -webkit- -moz- -o- -ms- ".split(" "),
		m="Webkit Moz O ms",
		n=m.split(" "),
		o=m.toLowerCase().split(" "),
		p={},q={},r={},s=[],
		t=s.slice,u,
		v=function(a,c,d,e){
			var h,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");
			if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:g+(d+1),l.appendChild(j);
			return h=["&#173;",'<style id="s',g,'">',a,"</style>"].join(""),
				l.id=g,(m?l:n).innerHTML+=h,n.appendChild(l),
				m||(n.style.background="",
				n.style.overflow="hidden",
				k=f.style.overflow,f.style.overflow="hidden",
				f.appendChild(n)),
				i=c(l,a),
				m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),
				f.style.overflow=k),
				!!i
		},
		w={}.hasOwnProperty,x;
		!A(w,"undefined")&&!A(w.call,"undefined")?x=function(a,b){return w.call(a,b)}:x=function(a,b){return b in a&&A(a.constructor.prototype[b],"undefined")},
			Function.prototype.bind||(Function.prototype.bind=function(b){
				var c=this;
				if(typeof c!="function")throw new TypeError;
				var d=t.call(arguments,1),e=function(){if(this instanceof e){
					var a=function(){};
					a.prototype=c.prototype;
					var f=new a,g=c.apply(f,d.concat(t.call(arguments)));
					return Object(g)===g?g:f
				}
				return c.apply(b,d.concat(t.call(arguments)))
				};
				return e
			}),
		p.csstransforms3d=function(){
			var a=!!E("perspective");
			return a&&"webkitPerspective"in f.style&&v("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",
				function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),
				a
		};
		for(var F in p)x(p,F)&&(u=F.toLowerCase(),e[u]=p[F](),s.push((e[u]?"":"no-")+u));
		return e.addTest=function(a,b){
				if(typeof a=="object")for(var d in a)x(a,d)&&e.addTest(d,a[d]);
				else{a=a.toLowerCase();
				if(e[a]!==c)return e;
				b=typeof b=="function"?b():b,
					typeof enableClasses!="undefined"&&enableClasses&&(f.className+=" "+(b?"":"no-")+a),
					e[a]=b}return e
			},
			y(""),
			h=j=null,
			e._version=d,
			e._prefixes=l,
			e._domPrefixes=o,
			e._cssomPrefixes=n,
			e.testProp=function(a){return C([a])},
			e.testAllProps=E,
			e.testStyles=v,
			e
}
(this,this.document);

$(function() {
    if (!Modernizr.csstransforms3d){
        $(".work_slide_info").hide();
    }
    var workSliderTimer = null;
    function workSliderTimeFunc(){
        $(".work_slider_control_item.current").next().find("span").animate({"width": "100%"}, 10000, function(){
            $(this).removeAttr("style");
        });
    }
    function workSliderTimerFunc(){
        if($(".work_slide:last").hasClass("current")){
            $(".work_slide:last").css({"z-index":"1","display":"block","left":"0"}).animate({"left": "100%"}, 500, function(){
                $(this).removeClass("current").removeAttr("style");
            });
            $(".work_slide:first").css({"z-index":"1","display":"block","left":"-100%"}).animate({"left": "0"}, 500, function(){
                $(this).addClass("current").removeAttr("style");
            });
            $(".work_slider_control_item.current").removeClass("current");
            $(".work_slider_control_item:first").addClass("current");
        }
        else{
            $(".work_slide.current").css({"z-index":"1","display":"block","left":"0"}).animate({"left": "-100%"}, 500, function(){
                $(this).removeClass("current").removeAttr("style");
            });
            $(".work_slide.current").next().css({"z-index":"1","display":"block","left":"100%"}).animate({"left": "0"}, 500, function(){
                $(this).addClass("current").removeAttr("style");
            });
            $(".work_slider_control_item.current").next().next().addClass("current");
            $(".work_slider_control_item.current:first").removeClass("current");
        }
        $(".work_slider_control_line").each(function(){
            if($(this).nextAll().is(".work_slider_control_item.current")){
                $(this).addClass("pass");
            }
            else{
                $(this).removeClass("pass");
            }
            $(this).find("span").stop(true, true);
        });
        workSliderTimeFunc();
    }
    workSliderTimeFunc();
    workSliderTimer = setInterval(workSliderTimerFunc, 10000);
    $(".work_slide_info_tr").on("click", function(e){
        e.preventDefault();
        clearInterval(workSliderTimer);
        $(".work_slider_control_line").each(function(){
            $(this).find("span").stop(true, true);
        });
        $(".work_slider_control").fadeOut(500);
        if(!Modernizr.csstransforms3d){
            $('#'+$(this).attr('data-slide')+' .work_slide_info').fadeIn(500);
        }
        else{
            $('#'+$(this).attr('data-slide')).addClass("hover");
        }
    });
    $(".work_slide_info_close").on("click", function(e){
        e.preventDefault();
        if(!Modernizr.csstransforms3d){
            $(this).parent().fadeOut(500);
        }
        else{
            $(this).parent().parent().removeClass("hover");
        }
        $(".work_slider_control").fadeIn(500);
    });
    $(".work_slide_info_wr").on("click", function(e){
        e.preventDefault();
        if(!Modernizr.csstransforms3d){
            $(this).parent().fadeOut(500);
        }
        else{
            $(this).parent().parent().removeClass("hover");
        }
        $(".work_slider_control").fadeIn(500);
    });
    $(".work_slider_control_item").on("touchstart click", function(e){
        e.preventDefault();
        
        if(!($(this).hasClass("current"))){
        	clearInterval(workSliderTimer);
            var thisIndex = $(this).index();
            var currentIndex = $(".work_slider_control_item.current").index();
            $(".work_slider_control_item.current").removeClass("current");
            $(this).addClass("current");
            if(thisIndex>currentIndex){
                $(".work_slide.current").css({"z-index":"1","display":"block","left":"0"}).animate({"left": "-100%"}, 500, function(){
                    $(this).removeClass("current").removeAttr("style");
                });
                $('#'+$(this).attr("data-rel")).css({"z-index":"1","display":"block","left":"100%"}).animate({"left": "0"}, 500, function(){
                    $(this).addClass("current").removeAttr("style");
                });
            }
            else{
                $(".work_slide.current").css({"z-index":"1","display":"block","left":"0"}).animate({"left": "100%"}, 500, function(){
                    $(this).removeClass("current").removeAttr("style");
                });
                $('#'+$(this).attr("data-rel")).css({"z-index":"1","display":"block","left":"-100%"}).animate({"left": "0"}, 500, function(){
                    $(this).addClass("current").removeAttr("style");
                });
            }
            $(".work_slider_control_line").each(function(){
                if($(this).nextAll().is(".work_slider_control_item.current")){
                    $(this).addClass("pass");
                }
                else{
                    $(this).removeClass("pass");
                }
                $(this).find("span").stop(true, true);
            });
        }
    });
    
});
