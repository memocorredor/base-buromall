<legend class="text-semibold">
    <i class="fas fa-map-marked-alt position-left"></i>@lang('app_fields.local_legen_geolocation')
</legend>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-latitude">
            @lang('app_fields.local_latitude')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
            </div>
            <input id="field-form-latitude" name="latitude" type="text" value="{{ old('latitude', $latitude ?? '') }}"
                placeholder="" class="form-control letters_first {{ $errors->has('latitude') ? ' is-invalid' : '' }}"
                disabled autocomplete="off">
            @if ( $errors->has('latitude'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('latitude') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <label for="field-form-longitude">
            @lang('app_fields.local_longitude')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
            </div>
            <input id="field-form-longitude" name="longitude" type="text"
                value="{{ old('longitude', $longitude ?? '') }}" placeholder=""
                class="form-control letters_first {{ $errors->has('longitude') ? ' is-invalid' : '' }}" disabled
                autocomplete="off">
            @if ( $errors->has('longitude'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('longitude') }}</strong>
            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="us3" style="height: 400px;"></div>
    </div>
</div>
