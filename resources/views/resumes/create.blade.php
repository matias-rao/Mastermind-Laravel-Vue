@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Creat Resume</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('resumes.store')}}">
                            @csrf
                            <resume-form :errors="{{$errors}}" ></resume-form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
