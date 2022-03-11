<?php

namespace App\Service;

use App\Models\Article;
use Illuminate\Http\UploadedFile;

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
}
