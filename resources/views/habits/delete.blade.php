@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('habits.destory', $habit) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">{{ __('general.save') }}</button>
            </form>
        </div>
    </div>
</div>
@stop
