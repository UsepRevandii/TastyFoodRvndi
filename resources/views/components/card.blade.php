<div class="card card-custom text-center border-0">
    <div class="card-inner">
        <div class="img-circle-wrapper">
            <img src="{{ asset($img) }}" alt="{{ $title }}" class="img-fluid">
        </div>
        <div class="card-body">
            <h5 class="fw-bold mb-2">{{ $title }}</h5>
            <p class="small text-muted mb-0">
                {{ $desc }}
            </p>
        </div>
    </div>
</div>