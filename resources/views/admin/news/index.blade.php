@extends('admin.layouts.app')
@section('title', 'Daftar Berita')
@section('page-title', 'Manajemen Berita')

@section('content')
    <div class="card">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 fw-bold text-dark">List Artikel & Berita</h6>
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-sm rounded-pill px-3">
                <i class="bi bi-plus-lg me-1"></i> Tambah Berita
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th width="10%">Thumb</th>
                            <th width="40%">Judul</th>
                            <th width="15%">Status</th>
                            <th width="15%">Tanggal</th>
                            <th width="20%" class="text-end">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($news as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->featured_image ? asset('storage/' . $item->featured_image) : 'https://placehold.co/80x60' }}"
                                        class="rounded" width="80" alt="thumb">

                                </td>

                                <td>
                                    <span class="d-block fw-bold text-dark">
                                        {{ $item->title }}
                                    </span>
                                    <small class="text-muted">
                                        {{ $item->excerpt ?? Str::limit(strip_tags($item->content), 60) }}
                                    </small>
                                </td>

                                <td>
                                    @if ($item->status === 'published')
                                        <span class="badge bg-success-subtle text-success rounded-pill px-3">
                                            Published
                                        </span>
                                    @else
                                        <span class="badge bg-secondary-subtle text-secondary rounded-pill px-3">
                                            Draft
                                        </span>
                                    @endif
                                </td>

                                <td class="small text-muted">
                                    {{ $item->created_at->format('d M Y') }}
                                </td>

                                <td class="text-end">
                                    <a href="{{ route('admin.news.show', $item->slug ?? $item->id) }}" target="_blank"
                                        class="btn btn-sm btn-light text-primary" title="Preview">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.news.edit', $item->id) }}"
                                        class="btn btn-sm btn-light text-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST"
                                        class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-light text-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    Belum ada berita.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $news->links() }}
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.querySelectorAll('.delete-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Hapus Berita?',
                        text: 'Data yang dihapus tidak bisa dikembalikan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
