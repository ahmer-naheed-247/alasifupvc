<!-- resources/views/services/upvc_doors.blade.php -->

@extends('app')
@section('content')
<div class="container mt-2">
    <div class="section-title text-center">
        <h6 class="display-6 mb-5">Project done for Captain Emad prefeb office humak</h6>
    </div>
    <div class="row g-4">
        <div class="col-md-6 col-lg-6">
            <div class="service-item">
                <div class="overflow-hidden">
                    <img class="img-fluid service-img" style="width: 100%; height: 400px; object-fit: cover;" src="{{ asset('img\projects\capt_emad\1.jfif') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="service-item">
                <div class="overflow-hidden">
                    <img class="img-fluid service-img" style="width: 100%; height: 400px; object-fit: cover;" src="{{ asset('img\projects\capt_emad\2.jfif') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
@push('styles')
<style>
</style>
@endpush
