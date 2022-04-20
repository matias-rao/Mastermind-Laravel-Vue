@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Creat Resume</div>
                    {{--FIXME: puedo guardar la data de basics(y cambia), pero no el resto de las tabs--}}
                    <div class="card-body">
                        <form method="POST" action="{{ route('resumes.update', $resume->id)}}">
                            @csrf
                            @method('PUT')
                            <resume-form :errors="{{$errors}}" info="{{$resume->content}}"></resume-form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
