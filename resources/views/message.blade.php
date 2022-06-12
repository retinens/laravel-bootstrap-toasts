@if (session('toasts', collect())->count())
    <div class="toast-container position-static">
        <div class="p-3 {{ $x_position }}-0 {{ $y_position }}-0">
            @foreach (session('toasts', collect())->toArray() as $toast)
                <div class="toast text-bg-{{ $toast['level'] ?? 'primary' }}" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000"
                     @if (!$autoHide) data-autohide="false" @endif>
                    @if ($toast['title'])
                        <div class="toast-header">
                            @if (config('laravel-bootstrap-toasts.icon',null))
                                <img src="{{ config('laravel-bootstrap-toasts.icon',null) }}" class="rounded me-2"
                                     alt="...">
                            @endif
                            <strong class="me-auto">{{ $toast['title'] ?? '' }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            {!! $toast['message'] !!}
                        </div>
                    @else
                        <div class="d-flex">
                            <div class="toast-body">
                                {!! $toast['message'] !!}
                            </div>
                            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <script>
        const toastElList = document.querySelectorAll('.toast')
        const toastList = [...toastElList].map(toastEl => new bootstrap.Toast(toastEl))
        toastList.forEach(function (item) {
            item.show()
        })
    </script>
    @php
        session()->forget('toasts')
    @endphp
@endif
