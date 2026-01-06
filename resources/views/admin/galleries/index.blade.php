@extends('admin.layouts.app')
@section('title', 'Galeri Foto')
@section('page-title', 'Galeri Kegiatan')

@section('content')

{{-- UPLOAD CARD --}}
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card p-4 border-dashed bg-light text-center">
            <h5 class="fw-bold mb-3">Upload Foto Baru</h5>

            <form action="{{ route('admin.galleries.store') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="d-flex flex-column align-items-center gap-3">
                @csrf

                <div class="d-flex justify-content-center align-items-center gap-3">
                    <input type="file"
                           class="form-control w-auto"
                           name="image"
                           id="galleryInput"
                           required>

                    <button class="btn btn-primary"
                            id="btnUpload"
                            disabled>
                        <i class="bi bi-upload"></i> Upload
                    </button>
                </div>

                <div id="uploadPreview" class="mt-3 d-none">
                    <img src="" class="rounded shadow-sm" height="150">
                </div>
            </form>
        </div>
    </div>
</div>

{{-- GALLERY LIST --}}
<div class="row g-3">
    @forelse ($galleries as $item)
        <div class="col-md-3 col-6">
            <div class="card h-100 group-action">
                <div class="position-relative">
                    <img
                        src="{{ asset('storage/'.$item->image) }}"
                        class="card-img-top"
                        style="height:200px; object-fit:cover;">

                    <form action="{{ route('admin.galleries.destroy', $item->id) }}"
                          method="POST"
                          class="position-absolute top-0 end-0 m-2 delete-form">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center text-muted">
            Belum ada foto di galeri
        </div>
    @endforelse
</div>

@endsection

@push('scripts')
<script>
    // PREVIEW UPLOAD
    const galleryInput = document.getElementById('galleryInput');
    const uploadPreview = document.getElementById('uploadPreview');
    const btnUpload = document.getElementById('btnUpload');

    galleryInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                uploadPreview.classList.remove('d-none');
                uploadPreview.querySelector('img').src = e.target.result;
                btnUpload.removeAttribute('disabled');
            }
            reader.readAsDataURL(file);
        }
    });

    // DELETE CONFIRM
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Hapus Foto?',
                text: 'Foto yang dihapus tidak bisa dikembalikan',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endpush
