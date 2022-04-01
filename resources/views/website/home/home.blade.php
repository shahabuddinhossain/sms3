@extends('master.front.master');

@section('title')
    SATYA | Home
@endsection


@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Learning Today,<br>Leading Tomorrow</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href="courses.html" class="btn-get-started">Get Started</a>
        </div>
    </section><!-- End Hero -->
@endsection

@section('body')
    <!-- ======= Counts Section ======= -->
    @include('master.front.count')
    <!-- End Counts Section -->

    <!-- ======= Popular Courses Section ======= -->
    @include('master.front.populerCourses')
    <!-- End Popular Courses Section -->

    <!-- ======= Popular Trainers Section ======= -->
    @include('master.front.populerTrainer')
    <!-- End Trainers Section -->


@endsection

