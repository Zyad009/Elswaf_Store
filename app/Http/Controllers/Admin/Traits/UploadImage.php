<?php

namespace App\Http\Controllers\Admin\Traits;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


trait UploadImage
{

  private function buildStoragePath($entityName, $folderName,  $categoryId = null)
  {

    $basePath = "public/admin/$entityName/";
    $startPath = [];
    if ($categoryId) {
      $category = Category::find($categoryId);
      while ($category) {
        array_unshift($startPath, $category->name);
        $category = Category::find($category->parent_id);
      }
      return $basePath . implode('/', $startPath) . "/$folderName";
    }
    return  $basePath . $folderName;
  }

  private function saveMainImage($mainImage, $path)
  {

    $imageName = time() . '_' . Str::random(10) . '.' . $mainImage->getClientOriginalExtension();
    $mainImage->storeAs($path, $imageName);
    
    return "$path/$imageName";
  }

  private function saveHoverImage($hoverImage = null, $path)
  {
    if ($hoverImage){
      $imageName = time() . '_' . Str::random(10) . '.' . $hoverImage->getClientOriginalExtension();
      $hoverImage->storeAs($path, $imageName);
      return "$path/$imageName";
    } 
    return null;
  }

  private function saveFilesImages($images, $path)
  {
    if (!$images) {
      return [];
    }
    $nameOfImages = [];
    foreach ($images as $image) {
      $ttt = "$path/" . $image;
      $nameOfImages[] = $ttt;
      $image->store($path);
    }
    return $nameOfImages;
  }

  public function saveImages(
    string $entityName,
    int $requestId,
    string $requestName,
    $mainImage,
    $hoverImage = null,
    array $images = null,
     $categoryId = null
  ) {
    //=== Validate Main Image ===//

    // === Create Folder Name === //
    $folderName = Str::slug($requestName) . "_" . Str::uuid();
    // === Build Storage Path === //
    $path = $this->buildStoragePath($entityName, $folderName, $categoryId);
    $path  = str_replace(" ", "-", $path);
    // === Save Main Image === //
    $mainImageName = $this->saveMainImage($mainImage, $path);
    
    // === Save Main Image === //
    // dd($mainImageName);
    $hoverImageName = $this->saveHoverImage($hoverImage, $path);


    // === Save Additional Images === //
    $nameImages = $this->saveFilesImages($images, $path);
    // dd($nameImages);
    // === Save Image Data in DB === //
    $modelClass = "App\Models\\$entityName";
    Image::create([
      "folder" => $folderName,
      "main_image" => $mainImageName,
      "hover_image" => $hoverImageName,
      "images" => json_encode($nameImages),
      "imageable_id" => $requestId,
      "imageable_type" => $modelClass,
    ]);
  }
}
