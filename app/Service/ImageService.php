<?php

namespace App\Service;

use App\Models\Article;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function storeImage(UploadedFile $file, string $destination): ?string
    {
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        if (!$file->storeAs($destination, $filename, 'public')) {
            return null;
        }

        return $filename;
    }

    public function updateImage(UploadedFile $file, string $destination, string $oldFile): ?string
    {
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        if (!$file->storeAs($destination, $filename, 'public')) {
            return null;
        }

        $this->removeImage($oldFile);

        return $filename;
    }

    public function removeImage($oldFile)
    {
        Storage::delete($oldFile);
    }
}
