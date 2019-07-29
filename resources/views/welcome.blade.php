@extends('layouts.app')

@section('specialfocus')
    <div class="title">
        Verse of the Day
    </div>
    <div id="verseoftheday">
        <script src="https://www.biblegateway.com/votd/votd.write.callback.js"></script>
        <script src="https://www.biblegateway.com/votd/get/?format=json&version=ESV&callback=BG.votdWriteCallback"></script>
        <!-- alternative for no javascript -->
        <noscript>
        <iframe framespacing="0" frameborder="no" src="https://www.biblegateway.com/votd/get/?format=html&version=ESV">View Verse of the Day</iframe> 
        </noscript>
    </div>
@endsection

@section('content')
    <img src="{{ URL::to('/') }}/images/blue-water.jpg">
@endsection