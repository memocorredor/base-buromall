@extends("layouts.app")
@section("content")
<div class="layout-admin-cruds">
    <div class="card bg-light crud-card">
        <div class="card-header">
            @include('components.forms.headers')
        </div>
        <div class="card-body">
            <form role="form" action="{{ route($route_form, $id) }}" method="post">
                @include('components.forms.error')
                <div class="row">
                    <div class="col-md-4">
                        <fieldset class="text-semibold">
                            @include('components.forms.action')
                            @include('components.forms.dates')
                            @include('components.forms.buttons')
                        </fieldset>
                    </div>
                    <div class="col-md-8">
                        <fieldset>
                            @include('components.forms.legend_detail')
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-status">
                                        @lang('web_layout.local_status')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-bell"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-status" name="status" type="text"
                                            value="{{ old('status', $status ?? '') }}"
                                            placeholder="@lang('web_layout.local_status_ph')"
                                            class="form-control letters_first {{ $errors->has('status') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('status'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="field-form-order-num">
                                        @lang('web_layout.local_order_num')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-file-invoice-dollar"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-order-num" name="order_num" type="text"
                                            value="{{ old('order_num', $order_num ?? '') }}" placeholder="#"
                                            class="form-control letters_first {{ $errors->has('order_num') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('order_num'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('order_num') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="field-form-no-item">
                                        @lang('web_layout.local_no_item')
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-search-dollar"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-no-item" name="no_item" type="text"
                                            value="{{ old('no_item', $no_item ?? '') }}"
                                            placeholder="@lang('web_layout.local_no_item_ph')"
                                            class="form-control letters_first {{ $errors->has('no_item') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('no_item'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('no_item') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="field-form-token">@lang('web_layout.local_token'):
                                    </label>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-shield-alt"></i>
                                            </span>
                                        </div>
                                        <input id="field-form-token" name="token" type="text"
                                            value="{{ old('token', $token ?? '') }}" placeholder="#"
                                            class="form-control letters_none {{ $errors->has('token') ? ' is-invalid' : '' }}"
                                            {{ $status_input }} autocomplete="off">
                                        @if ( $errors->has('token'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('token') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
