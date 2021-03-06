<?php
namespace App\Src\Photo;

use App\Core\BaseImageService;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageService extends BaseImageService
{

    public function store(UploadedFile $image)
    {
        return $this->process($image, ['large', 'medium', 'thumbnail']);
    }

} 