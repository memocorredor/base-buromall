<div class="col-md-12 grilla-item">
    <i class="fas fa-qrcode"></i><label>@lang('web_layout.local_qrcode'):</label>
    <div class="data-dt-value d-flex justify-content-center">
        <img src="data:{{ $qr_type }};base64,{{ $qr_img }}" class="img-fluid" />
    </div>
</div>
