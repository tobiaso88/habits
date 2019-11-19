@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('habits.store') }}" method="POST">
                @csrf
                @include('habits.form', ['habit' => null])
            </form>
        </div>
    </div>
</div>
@stop
