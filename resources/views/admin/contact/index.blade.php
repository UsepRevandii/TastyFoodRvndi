@extends('admin.layouts.app')
@section('title', 'Pesan Masuk')
@section('page-title', 'Pesan dari Pengunjung')

@section('content')
<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Tanggal</th>
                        <th class="text-end pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                @forelse ($contacts as $contact)
                    <tr style="cursor:pointer"
                        onclick="showDetail(
                            @js($contact->name),
                            @js($contact->email),
                            @js($contact->subject),
                            @js($contact->message)
                        )">

                        <td class="ps-4 fw-bold">
                            {{ $contact->name }}
                        </td>

                        <td>{{ $contact->email }}</td>

                        <td>{{ $contact->subject }}</td>

                        <td class="small text-muted">
                            {{ $contact->created_at->format('d M Y H:i') }}
                        </td>

                        <td class="text-end pe-4">
                            <form method="POST"
                                  action="{{ route('admin.contacts.destroy', $contact->id) }}"
                                  class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        onclick="event.stopPropagation()">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Belum ada pesan masuk
                        </td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- MODAL --}}
<div class="modal fade" id="messageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="msgSubject"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 border-bottom pb-2">
                    <small class="text-muted d-block">Dari:</small>
                    <span class="fw-bold" id="msgName"></span>
                    <span class="text-muted small">&lt;<span id="msgEmail"></span>&gt;</span>
                </div>
                <div class="p-3 bg-light rounded">
                    <p class="mb-0" id="msgContent"></p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="mailto:" id="replyEmail" class="btn btn-primary btn-sm">
                    <i class="bi bi-reply"></i> Balas Email
                </a>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function showDetail(name, email, subject, content) {
    document.getElementById('msgName').innerText = name;
    document.getElementById('msgEmail').innerText = email;
    document.getElementById('msgSubject').innerText = subject;
    document.getElementById('msgContent').innerText = content;
    document.getElementById('replyEmail').href = 'mailto:' + email;

    new bootstrap.Modal(document.getElementById('messageModal')).show();
}

// DELETE CONFIRM
document.querySelectorAll('.delete-form').forEach(form => {
    form.addEventListener('submit', function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Hapus pesan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus'
        }).then(result => {
            if(result.isConfirmed) form.submit();
        });
    });
});
</script>
@endpush
