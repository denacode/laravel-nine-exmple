@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Estudo') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('studies.store') }}">
                            @csrf

                            <x-study-form-fields :study="$study" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
