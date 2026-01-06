@php
    $isEdit = isset($news);
@endphp

<div class="row">
    <div class="col-lg-8">
        {{-- JUDUL --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Judul Berita</label>
            <input type="text"
                   class="form-control form-control-lg"
                   name="title"
                   value="{{ old('title', $news->title ?? '') }}"
                   placeholder="Masukkan judul menarik..."
                   required>
        </div>

        {{-- KONTEN --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Konten</label>
            <textarea id="newsContent"
                      name="content"
                      rows="20">{{ old('content', $news->content ?? '') }}</textarea>
        </div>
    </div>

    <div class="col-lg-4">
        {{-- STATUS --}}
        <div class="card mb-3">
            <div class="card-body">
                <label class="form-label fw-bold">Status</label>
                <select class="form-select mb-3" name="status">
                    <option value="publish"
                        {{ old('status', $news->status ?? 'publish') == 'publish' ? 'selected' : '' }}>
                        Publish
                    </option>
                    <option value="draft"
                        {{ old('status', $news->status ?? '') == 'draft' ? 'selected' : '' }}>
                        Draft
                    </option>
                </select>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-save me-1"></i>
                    {{ $isEdit ? 'Update Berita' : 'Simpan Berita' }}
                </button>
            </div>
        </div>

        {{-- FEATURED IMAGE --}}
        <div class="card">
            <div class="card-body">
                <label class="form-label fw-bold">Featured Image</label>

                <div class="bg-light rounded text-center p-4 border border-dashed mb-2"
                     style="cursor: pointer;"
                     onclick="document.getElementById('imgInput').click()">

                    <div id="previewContainer"
                         class="{{ ($isEdit && $news->featured_image) ? 'd-none' : '' }}">
                        <i class="bi bi-cloud-arrow-up fs-1 text-muted"></i>
                        <p class="small text-muted mb-0">Klik untuk upload gambar</p>
                    </div>

                    <img id="imgPreview"
                         src="{{ $isEdit && $news->featured_image ? asset('storage/'.$news->featured_image) : '' }}"
                         class="img-fluid rounded {{ ($isEdit && $news->featured_image) ? '' : 'd-none' }}"
                         style="max-height: 200px; object-fit: cover;">
                </div>

                <input type="file"
                       id="imgInput"
                       name="featured_image"
                       class="d-none"
                       accept="image/*"
                       onchange="previewImage(this)">
            </div>
        </div>

        {{-- EXCERPT --}}
        <div class="card mt-3">
            <div class="card-body">
                <label class="form-label fw-bold">Kutipan (Excerpt)</label>
                <textarea class="form-control"
                          name="excerpt"
                          rows="4"
                          placeholder="Ringkasan singkat...">{{ old('excerpt', $news->excerpt ?? '') }}</textarea>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // TinyMCE
    tinymce.init({
        selector: '#newsContent',
        height: 500,
        menubar: false,
        plugins: 'advlist autolink lists link charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help wordcount',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_style: 'body { font-family:Inter,sans-serif; font-size:14px }'
    });

    // Preview Image
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('previewContainer').classList.add('d-none');
                const img = document.getElementById('imgPreview');
                img.src = e.target.result;
                img.classList.remove('d-none');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
