@extends('frontend.layouts.master') 
@section('title', 'Home') 
@section('content')
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
