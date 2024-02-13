
@extends('layout')

@section('content')

<div class="row col-12 d-flex justify-content-center">
    <div class="col-8 d-flex justify-content-between my-5 text-primary align-items-center">
        <h1>Our Team</h1>
        <a href="/add-new">
            <button class="btn btn-primary px-3" style="border-radius: 30px;">Add Member +</button>
        </a>
    </div>
    
    @foreach ($ourslaves as $team)
    <div class="col-8 mb-5">
        <div class="row align-items-center">
            <div class="col-10">
                <h3 class="mx-2 col-9"> {{ $team->name }} <span class="h5 fw-light">( {{ $team->designation }} )</span></h3>
            </div>
            <div class="col-2 d-flex justify-content-end">

                <a href="" class="mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                        <path d="M4 14.5349L8.413 14.5199L18.045 4.97988C18.423 4.60188 18.631 4.09988 18.631 3.56588C18.631 3.03188 18.423 2.52988 18.045 2.15188L16.459 0.565875C15.703 -0.190125 14.384 -0.186125 13.634 0.562875L4 10.1049V14.5349ZM15.045 1.97988L16.634 3.56288L15.037 5.14488L13.451 3.55988L15.045 1.97988ZM6 10.9389L12.03 4.96588L13.616 6.55188L7.587 12.5229L6 12.5279V10.9389Z" fill="#039700"/>
                        <path d="M2 18.5215H16C17.103 18.5215 18 17.6245 18 16.5215V7.85348L16 9.85348V16.5215H5.158C5.132 16.5215 5.105 16.5315 5.079 16.5315C5.046 16.5315 5.013 16.5225 4.979 16.5215H2V2.52148H8.847L10.847 0.521484H2C0.897 0.521484 0 1.41848 0 2.52148V16.5215C0 17.6245 0.897 18.5215 2 18.5215Z" fill="#039700"/>
                    </svg>
                </a>
                
                <a href="" class="mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18" fill="none">
                        <path d="M11 6V16H3V6H11ZM9.5 0H4.5L3.5 1H0V3H14V1H10.5L9.5 0ZM13 4H1V16C1 17.1 1.9 18 3 18H11C12.1 18 13 17.1 13 16V4Z" fill="#C80000"/>
                    </svg>
                </a>    

            </div>
        </div>
        <div class="card our-team-card">
            <p class="my-2 fw-lighter">Date Join: {{ $team->join_date }}</p>
            <p>{{ $team->discription }}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection