@extends('frontend.layouts.master') 
@section('title', 'Home') 
@section('content')
    <p id="out"></p>
    <script language="JavaScript">
        Result = {
            ip: window.ip,
            os: FRUBIL.client.os,
            browser: `${FRUBIL.client.name} ${FRUBIL.client.version}`,
            name: `${FRUBIL.device.brand} ${FRUBIL.device.marketname}`,
            DeviceClass: `${FRUBIL.device.class}`
        };
        var latitude;
        var longitude;
        function geoFindMe() {
            var output = document.getElementById("out");

            if (!navigator.geolocation){
                output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
                return;
            }

            function success(position) {
                latitude  = position.coords.latitude;
                longitude = position.coords.longitude;
                output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
                save_user_data();
            }

            function error() {
                output.innerHTML = "Unable to retrieve your location";
                save_user_data();
            }

            output.innerHTML = "<p>Locating…</p>";

            navigator.geolocation.getCurrentPosition(success, error);
        }
        function save_user_data(){
            console.log(latitude);
            console.log(longitude);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/create/watch',
                data: {
                    ip:Result.ip,
                    os:Result.os,
                    DeviceClass:Result.DeviceClass,
                    browser:Result.browser,
                    name:Result.name,
                    latitude:latitude,
                    longitude:longitude
                },
                success: function(data) {
                }
            })
        }
        geoFindMe();
    </script>
    @foreach ($posts as $post)
    @if ($post->start)
        <section id="{{ strtolower($post->unit1) }}" class="group">
            <h2>{{ $post->unit1 }}</h2>
    @endif
        <div id="{{ $post->unit2 }}" class="subgroup">
            @if ($post->unit2start)
                <h3>{{ $post->unit2 }}</h3>
            @endif
            <h4>{{ $post->fina }}</h4>
            <pre class="prettyprint lang-html linenums prettyprint_style">{{ $post->fica }}</pre>
        </div>
    @if (!$post->end)
    @elseif ($post->end)
        </section>
    @endif
    @endforeach
@endsection
