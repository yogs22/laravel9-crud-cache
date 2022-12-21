<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path',
        'file_name',
    ];

    /**
     * The attributes that are default accessor
     *
     * @var array
     */
    protected $appends = ['url'];

    /**
     * Define url accessor
     * @return Attribute [description]
     */
    public function url(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => is_null($this->path) ? asset('default.png') : asset($this->path.'/'.$this->file_name),
        );
    }

    /**
     * Upload image in disk and store in database
     * @param  File $image
     * @param  Models $model
     * @param  string $location
     */
    public static function uploadImage($image, $model, $location = 'img')
    {
        $imageName = rand(10000,99999).$image->getClientOriginalName();

        $image->move($location, $imageName);

        $image = $model->image()->create([
            'path' => $location,
            'file_name' => $imageName,
        ]);
    }

    /**
     * Delete image from disk & database
     * @param  Models $model
     */
    public static function deleteImage($model)
    {
        Storage::delete("{$model->image->path}/{$model->image->file_name}");
        $model->image()->delete();
    }
}
