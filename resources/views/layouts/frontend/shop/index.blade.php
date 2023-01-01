@extends('layouts.frontend.main')
@section('front-body')
@push('shop-menu')
<div class="shop-container container-fuild pt-5">
    <div class="row col-md-11 m-auto">
        <div class="col-md-2 category-container ml-4">
            <h3 class="ml-2 text-white">Category</h3>
            <ul class="mt-4">
                <li><a href="#">Pre Workouts <i class="fa-solid fa-play"></i></a></li>
                <li><a href="#">Weight Gainers <i class="fa-solid fa-play"></i></a></li>
                <li><a href="#">Creatine <i class="fa-solid fa-play"></i></a></li>
                <li><a href="#">BCCA <i class="fa-solid fa-play"></i></a></li>
            </ul>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection