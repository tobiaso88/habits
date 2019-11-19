@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('habits.update', $habit) }}" method="POST">
                @csrf
                @method('PUT')
                @include('habits.form')
            </form>
        </div>
    </div>
</div>
@stop
