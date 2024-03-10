@extends('layouts.main')

@section('title', 'About Us :: ' . $model->title)

@section('content')
@include('layouts.includes.header', ['model' => $model])

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="page-title">About Us</h2>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section class="sample-page" style="min-height:500px;">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h1>About Us</h1>
            </div>
            <div class="business.content">
                <?= $model->content ?>
            </div>
        </div>
    </section>
</main>

@include('layouts.includes.footer', ['model' => $model])

@endsection
