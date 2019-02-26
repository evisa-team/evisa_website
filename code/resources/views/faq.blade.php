@extends('layouts.website')

@section('content')
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>{{ $page_title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
        </ol>
    </div>
</section><!-- #page-title end -->
<!-- Content
============================================= -->
<section id="content">
    <div class="container topmargin">
        <div id="faqs" class="faqs">
            @foreach ($faqs as $faq)
                <div class="toggle faq">
                    <div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i>{{ $faq->question }}</div>
                    <div class="togglec">{{ $faq->answer }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection