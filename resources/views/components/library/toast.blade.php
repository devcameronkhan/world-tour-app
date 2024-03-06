<div class="bs-toast toast toast-placement-ex m-2 fade bg-{{ $status }} top-0 end-0 show" role="alert"
    aria-live="assertive" aria-atomic="true" data-delay="2000">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">{{ $status }}!</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">{{ $data }}</div>
</div>
<script>
    setTimeout(() => {
        $(".bs-toast").hide();
    }, 3000);
</script>