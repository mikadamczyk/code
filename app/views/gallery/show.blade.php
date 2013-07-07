@extends('layout')

@section('head')
<link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
<script src="{{ URL::asset('assets/js/jquery.jcarousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
@stop

@section('main')

<h1>Gallery</h1>
<!-- Content slider - main section -->
<div class="sl-main">

    <!-- Controls -->
    <div class="sl-controls">
        <a class="next"></a>
        <div id="count"></div>
        <a class="prev"></a>
        <a class="back-home"></a> 
    </div>

    <!-- Content -->
    <div class="sl-content">
        <div class="sl-slide">
            <h2 class="sl-title">Just Hidden</h2>
            <p><img src="{{ URL::asset('assets/images/1.jpg') }}" /> 'Just Hidden' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Come sit awhile...</h2>
            <p><img src="{{ URL::asset('assets/images/2.jpg') }}" /> 'Come sit awhile... image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">escapando</h2>
            <p><img src="{{ URL::asset('assets/images/3.jpg') }}" /> 'escapando' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Beelitz Heilstatten</h2>
            <p><img src="{{ URL::asset('assets/images/4.jpg') }}" /> 'Beelitz Heilstatten' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">I'm just a little guy...</h2>
            <p><img src="{{ URL::asset('assets/images/5.jpg') }}" /> 'I'm just a little guy...' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Nothing says I love you...</h2>
            <p><img src="{{ URL::asset('assets/images/6.jpg') }}" /> 'Nothing says I love you...' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">The birds</h2>
            <p><img src="{{ URL::asset('assets/images/7.jpg') }}" /> 'The birds' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Have a Seat</h2>
            <p><img src="{{ URL::asset('assets/images/8.jpg') }}" /> 'Have a Seat' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Jess and the birds</h2>
            <p><img src="{{ URL::asset('assets/images/9.jpg') }}" /> 'Jess and the birds' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Lost Angel</h2>
            <p><img src="{{ URL::asset('assets/images/10.jpg') }}" /> 'Lost Angel' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Lost Angel</h2>
            <p><img src="{{ URL::asset('assets/images/11.jpg') }}" /> 'Lost Angel' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Lost Angel</h2>
            <p><img src="{{ URL::asset('assets/images/12.jpg') }}" /> 'Lost Angel' image description</p>
        </div>
        <div class="sl-slide">
            <h2 class="sl-title">Lost Angel</h2>
            <p><img src="{{ URL::asset('assets/images/13.jpg') }}" /> 'Lost Angel' image description</p>
        </div>
    </div>

    <!-- jCarousel -->
    <ul id="sl-thumbs">
        <li><img src="{{ URL::asset('assets/images/1t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/2t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/3t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/4t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/5t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/6t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/7t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/8t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/9t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/10t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/11t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/12t.jpg') }}" /></li>
        <li><img src="{{ URL::asset('assets/images/13t.jpg') }}" /></li>

    </ul>

    <!-- ViewAll button -->
    <!-- <div class="sl-view-all">View as one page</div> -->
</div>

@stop