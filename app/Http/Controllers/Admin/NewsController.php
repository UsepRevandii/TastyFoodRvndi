<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * List berita (admin)
     */
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Form tambah berita
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Simpan berita baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'required|string|max:255',
            'excerpt'        => 'required|string',
            'content'        => 'required|string',
            'status'         => 'required|in:publish,draft',
            'featured_image' => 'required|image|max:5120',
        ]);

        $imagePath = $this->reencodeImage($request->file('featured_image'));

        if (!$imagePath) {
            return back()->withErrors(['featured_image' => 'Gambar gagal diproses']);
        }

        News::create([
            'title'          => $request->title,
            'slug'           => Str::slug($request->title),
            'excerpt'        => $request->excerpt,
            'content'        => $request->content,
            'status'         => $request->status,
            'featured_image' => $imagePath,
        ]);

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Form edit berita
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update berita
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title'          => 'required|string|max:255',
            'excerpt'        => 'required|string',
            'content'        => 'required|string',
            'status'         => 'required|in:publish,draft',
            'featured_image' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('featured_image')) {

            // hapus gambar lama
            if ($news->featured_image) {
                Storage::disk('public')->delete($news->featured_image);
            }

            $imagePath = $this->reencodeImage($request->file('featured_image'));

            if (!$imagePath) {
                return back()->withErrors(['featured_image' => 'Gambar gagal diproses']);
            }

            $news->featured_image = $imagePath;
        }

        $news->update([
            'title'   => $request->title,
            'slug'    => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'status'  => $request->status,
        ]);

        return redirect()
            ->route('admin.news.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Hapus berita
     */
    public function destroy(News $news)
    {
        if ($news->featured_image) {
            Storage::disk('public')->delete($news->featured_image);
        }

        $news->delete();

        return back()->with('success', 'Berita berhasil dihapus');
    }

    /**
     * ===============================
     * RE-ENCODE GAMBAR (ANTI ERROR)
     * ===============================
     */
    private function reencodeImage($file)
    {
        if (!$file || !$file->isValid()) {
            return null;
        }

        $info = getimagesize($file->getPathname());
        if (!$info) {
            return null;
        }

        switch ($info['mime']) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($file->getPathname());
                break;
            case 'image/png':
                $image = imagecreatefrompng($file->getPathname());
                break;
            case 'image/webp':
                $image = imagecreatefromwebp($file->getPathname());
                break;
            default:
                return null;
        }

        if (!$image) {
            return null;
        }

        $filename = 'news/' . Str::uuid() . '.jpg';
        $path = storage_path('app/public/' . $filename);

        imagejpeg($image, $path, 85);
        imagedestroy($image);

        return $filename;
    }
}
