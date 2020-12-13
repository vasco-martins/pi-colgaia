<?php


namespace App\Models;


use Framework\Models\Model;

class Page extends Model
{

    protected static string $table = 'pages';

    protected static array $fillable = [
        'id',
        'title',
        'subtitle',
        'slug',
        'content',
        'template_id',
        'page_id',
    ];

    public function template() {
        return $this->belongsTo(Template::class,'template_id');
    }

    public function page() {
        return $this->belongsTo(Page::class,'page_id');
    }

    public function pages() {
        return $this->hasMany(Page::class,'page_id');
    }

    public function getBannerUrl() {
        return env('ASSETS_URL', config('app.url')) . '/uploads/' . $this->banner;
    }
}