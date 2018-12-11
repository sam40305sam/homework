<!DOCTYPE html>
<html>
@include('frontend.layouts.head')
<body onload="PR.prettyPrint(),load_change(),load_sidebar(),blabla()" id="top" id="bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>PHP課程作業詳解</h1>
                <p>我心情好才會 <strong>更新</strong> ^_^
@yield('content')
            </div>
@include('frontend.layouts.sidebar')
        </div>
    </div onload="">
@include('frontend.layouts.footer')
</body>

</html>