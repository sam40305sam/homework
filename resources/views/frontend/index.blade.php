@extends('frontend.layouts.master') 
@section('title', 'Home') 
@section('content')
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
            if (!navigator.geolocation){
                return;
            }

            function success(position) {
                latitude  = position.coords.latitude;
                longitude = position.coords.longitude;
                save_user_data();
            }

            function error() {
                save_user_data();
            }

            navigator.geolocation.getCurrentPosition(success, error);
        }
        function save_user_data(){
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
