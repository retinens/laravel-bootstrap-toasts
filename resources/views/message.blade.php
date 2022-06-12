@if (session('toasts', collect())->count())
    <div class="toast-container position-static">
        <div class="p-3 {{ $xPosition }}-0 {{ $yPosition }}-0">
            @foreach (session('toasts', collect())->toArray() as $toast)
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" @if (!$autoHide) data-autohide="false" @endif>
                    <div class="toast-header">
                        @if (config('laravel-bootstrap-toasts.icon',null))
                            <img src="{{ config('laravel-bootstrap-toasts.icon',null) }}" class="rounded me-2" alt="...">
                        @endif
                        <strong class="me-auto">{{ $toast['title'] ?? '' }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {!! $toast['message'] !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        const toastElList = document.querySelectorAll('.toast')
        const toastList = [...toastElList].map(toastEl => new bootstrap.Toast(toastEl, option))
    </script>
    @php
        session()->forget('toasts')
    @endphp
@endif
