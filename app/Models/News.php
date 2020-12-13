<?php


namespace App\Models;


use Framework\Models\Model;

class News extends Model
{

    protected static string $table = 'news';

    protected static array $fillable = [
        'id',
        'title',
        'subtitle',
        'slug',
        'content',
    ];

    public function getBannerUrl() {
        return env('ASSETS_URL', config('app.url')) . '/uploads/' . $this->banner;
    }
}