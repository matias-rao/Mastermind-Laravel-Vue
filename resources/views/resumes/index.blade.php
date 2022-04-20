@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Index Resumes</div>
                    <div class="card-body">
                        <resumes-index :resumes="{{$resumes}}"></resumes-index>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
