<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--facebook-->
    <meta property="og:title" content="PHP作業" />
    <meta property="og:description" content="Chino & Cocoa & Chiya & Risa & Syaro" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert"></script>
    <link rel="Shortcut Icon" type="image/x-icon" href="{{ asset('img/icon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/main.js') }}">
    <script src="//js.frubil.info/"></script>
    <script>function getIP(json) {window.ip = json.ip;}</script>
    <script src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
	    $(window).load(function () {
            var footerClass = document.getElementsByTagName("footer")[0].classList;
            var lastScrollY = 0;
            window.addEventListener('scroll', function () {
                var st = this.scrollY;
                if (st > lastScrollY) {
                    footerClass.remove('footer-show');
                    footerClass.add('footer-hide');
                } else {
                    footerClass.remove('footer-hide');
                    footerClass.add('footer-show');
                }
                lastScrollY = st;
                $("ul#sidebar>li.active").children("ul").css("display","block");
            });
        });
    </script>
    <script type="text/javascript">
        var scroller, scrolling = false;
        window.addEventListener('scroll', function (e) {
            scrolling = true;
            window.clearTimeout(scroller);
            scroller = setTimeout(() => {
                scrolling = false;
            }, 66);
        }, false);
        function blabla()
        {
            $.getScript( 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', function( data, textStatus, jqxhr ) {
                $('body').scrollspy({
                    target: '.bs-docs-sidebar',
                    offset: 20
                });
            $("li > a").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    if (scrolling==false&&window.scrollY!==(Math.floor($(hash).offset().top))){
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {
                            window.location.hash = hash;
                        });
                    }
                }
            });
            $("a[href='#bottom']").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                        $('html, body').animate({
                            scrollTop: document.body.scrollHeight
                        }, 800, function () {
                            window.location.hash = hash;
                        });
                }
            });
            $("a[href='#top']").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    if (scrolling==false&&window.scrollY!==(Math.floor($(hash).offset().top))){
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function () {
                            window.location.hash = hash;
                        });
                    }
                }
            });
            });
        }
        $(document).ready(function () {
        });
        function load_change() {
            $('span.pln').each(function () {
                var text = $(this).text();
                $(this).text(text.replace(/\&lt;/g, '<'));
            });
        }
        function load_sidebar() {
            var html="";
            var a=$('section');
            var b=$('section').length;
            for(var i=0;i<b;i++){
                var c=a[i].querySelectorAll("h3");
                var d=a[i].querySelectorAll("h3").length;
                html+="<li><a href=\"#"+a[i].id+"\">"+a[i].id+"</a><ul class=\"nav nav-stacked\">";
                for(var j=0;j<d;j++){
                    html+="<li><a href=\"#"+c[j].innerHTML+"\">"+c[j].innerHTML+"</a></li>\n";
                }
                html+="</ul></li>";
            }
            $("ul#sidebar").html(html);
        }
            function expand_all(that) {
                var a=$("ul#sidebar>li:not(.active)").children("ul").css("display","block");
                $(that).html("Collapse all");
                $(that).attr("onclick","collapse_all(this)");
            };
            function collapse_all(that) {
                var a=$("ul#sidebar>li:not(.active)").children("ul").css("display","none");
                $(that).html("Expand all");
                $(that).attr("onclick","expand_all(this)");
            };
    </script>
</head>
