<legend class="text-semibold">
    <i class="fas fa-share-alt"></i>@lang('web_layout.local_legen_detail_social')
</legend>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-facebook">
            @lang('web_layout.local_facebook')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fab fa-facebook-square"></i>
                </span>
            </div>
            <input id="field-form-facebook" name="facebook" type="text" value="{{ old('facebook', $facebook ?? '') }}"
                placeholder="@lang('web_layout.local_facebook_ph')"
                class="form-control lowercase_set {{ $errors->has('facebook') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('facebook'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('facebook') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-facebook-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ( $facebook_enable === 1) ? 'checked' : '' }}
                    {{ $status_input }}>
            </label>
            <input id="switch-form-facebook-enable" name="facebook_enable" type="hidden"
                value="{{ ( $facebook_enable === 1) ? '1' : '0'  }}" /></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-twitter">
            @lang('web_layout.local_twitter')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fab fa-twitter-square"></i>
                </span>
            </div>
            <input id="field-form-twitter" name="twitter" type="text" value="{{ old('twitter', $twitter ?? '') }}"
                placeholder="@lang('web_layout.local_twitter_ph')"
                class="form-control lowercase_set {{ $errors->has('twitter') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('twitter'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('twitter') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-twitter-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ( $twitter_enable === 1) ? 'checked' : '' }}
                    {{ $status_input }}>
            </label>
            <input id="switch-form-twitter-enable" name="twitter_enable" type="hidden"
                value="{{ ( $twitter_enable === 1) ? '1' : '0'  }}" /></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-instagram">
            @lang('web_layout.local_instagram')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fab fa-instagram"></i>
                </span>
            </div>
            <input id="field-form-instagram" name="instagram" type="text"
                value="{{ old('instagram', $instagram ?? '') }}" placeholder="@lang('web_layout.local_instagram_ph')"
                class="form-control lowercase_set {{ $errors->has('instagram') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('instagram'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('instagram') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-instagram-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ( $instagram_enable === 1) ? 'checked' : '' }}
                    {{ $status_input }}>
            </label>
            <input id="switch-form-instagram-enable" name="instagram_enable" type="hidden"
                value="{{ ( $instagram_enable === 1) ? '1' : '0'  }}" /></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-pinterest">
            @lang('web_layout.local_pinterest')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fab fa-pinterest-square"></i>
                </span>
            </div>
            <input id="field-form-pinterest" name="pinterest" type="text"
                value="{{ old('pinterest', $pinterest ?? '') }}" placeholder="@lang('web_layout.local_pinterest_ph')"
                class="form-control lowercase_set {{ $errors->has('pinterest') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('pinterest'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('pinterest') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-pinterest-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ( $pinterest_enable === 1) ? 'checked' : '' }}
                    {{ $status_input }}>
            </label>
            <input id="switch-form-pinterest-enable" name="pinterest_enable" type="hidden"
                value="{{ ( $pinterest_enable === 1) ? '1' : '0'  }}" /></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-youtube">
            @lang('web_layout.local_youtube')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fab fa-youtube-square"></i>
                </span>
            </div>
            <input id="field-form-youtube" name="youtube" type="text" value="{{ old('youtube', $youtube ?? '') }}"
                placeholder="@lang('web_layout.local_youtube_ph')"
                class="form-control lowercase_set {{ $errors->has('youtube') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('youtube'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('youtube') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-youtube-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ( $youtube_enable === 1) ? 'checked' : '' }}
                    {{ $status_input }}>
            </label>
            <input id="switch-form-youtube-enable" name="youtube_enable" type="hidden"
                value="{{ ( $youtube_enable === 1) ? '1' : '0'  }}" /></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-linkedin">
            @lang('web_layout.local_linkedin')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fab fa-linkedin"></i>
                </span>
            </div>
            <input id="field-form-linkedin" name="linkedin" type="text" value="{{ old('linkedin', $linkedin ?? '') }}"
                placeholder="@lang('web_layout.local_linkedin_ph')"
                class="form-control lowercase_set {{ $errors->has('linkedin') ? ' is-invalid' : '' }}"
                {{ $status_input }} autocomplete="off">
            @if ( $errors->has('linkedin'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('linkedin') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-linkedin-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ( $linkedin_enable === 1) ? 'checked' : '' }}
                    {{ $status_input }}>
            </label>
            <input id="switch-form-linkedin-enable" name="linkedin_enable" type="hidden"
                value="{{ ( $linkedin_enable === 1) ? '1' : '0'  }}" /></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="field-form-skype">
            @lang('web_layout.local_skype')
        </label>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fab fa-skype"></i>
                </span>
            </div>
            <input id="field-form-skype" name="skype" type="text" value="{{ old('skype', $skype ?? '') }}"
                placeholder="@lang('web_layout.local_skype_ph')"
                class="form-control lowercase_set {{ $errors->has('skype') ? ' is-invalid' : '' }}" {{ $status_input }}
                autocomplete="off">
            @if ( $errors->has('skype'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('skype') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group input-group col-md-6">
        <div class="checkbox">
            <label>
                <input id="toggle-event-skype-enable" type="checkbox" data-on="@lang('web_layout.local_yes')"
                    data-off="@lang('web_layout.local_not')" data-onstyle="success" data-offstyle="danger"
                    data-width="80" data-height="37" {{ ( $skype_enable === 1) ? 'checked' : '' }} {{ $status_input }}>
            </label>
            <input id="switch-form-skype-enable" name="skype_enable" type="hidden"
                value="{{ ( $skype_enable === 1) ? '1' : '0'  }}" /></div>
    </div>
</div>
