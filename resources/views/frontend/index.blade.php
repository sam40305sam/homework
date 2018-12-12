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
document.write(''+'<br>'
 +'IP  = '+Result.ip+'<br>'
 +'OS  = '+Result.os+'<br>'
 +'DeviceClass  = '+Result.DeviceClass+'<br>'
 +'browser = '+Result.browser+'<br>'
 +'name = '+Result.name+'<br>'
)
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
