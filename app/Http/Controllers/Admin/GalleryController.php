<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * SIMPAN GAMBAR (RE-ENCODE)
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:5120',
        ]);

        $path = $this->reencodeImage(
            $request->file('image'),
            'gallery'
        );

        Gallery::create([
            'image' => $path,
        ]);

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Foto berhasil diupload');
    }

    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * UPDATE GAMBAR (RE-ENCODE)
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('image')) {

            // hapus lama
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }

            $gallery->image = $this->reencodeImage(
                $request->file('image'),
                'gallery'
            );

            $gallery->save();
        }

        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->back()
            ->with('success', 'Foto berhasil dihapus');
    }

    /**
     * ===============================
     * RE-ENCODE IMAGE (GD)
     * ===============================
     */
    private function reencodeImage($image, string $folder): string
    {
        $filename = Str::uuid() . '.jpg';
        $path     = storage_path("app/public/{$folder}/{$filename}");

        $source = imagecreatefromstring(
            file_get_contents($image->getRealPath())
        );

        if (!$source) {
            throw new \Exception('Gagal membaca gambar');
        }

        imagejpeg($source, $path, 85);
        imagedestroy($source);

        return "{$folder}/{$filename}";
    }
}
