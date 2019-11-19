<div class="form-group">
    <label for="title">{{ __('habit.title') }}</label>
    <input type="text" 
        class="form-control"
        name="title"
        id="title"
        value="{{ old('title', optional($habit)->title) }}">
</div>
<div class="form-group">
    <label for="regularity">{{ __('habit.regularity') }}</label>
    <input type="text" 
        class="form-control"
        name="regularity"
        id="regularity"
        value="{{ old('regularity', optional($habit)->regularity) }}">
</div>
