<?php
namespace Returntrueir\Categories\Models;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    protected $fillable = [
        'slug',
        'slug_title_url',
        'page_title',
        'body',
        'sort',
        'h1_title',
        'seo_meta_description',
        'seo_schema_code',
        'children_ids',
        'category_id',
    ];

    protected $casts = [
        "children_ids" => "array",
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug_title_url'
            ]
        ];
    }

    //============Scopes
    public function scopeSort($query , $sort = null)
    {
        return $query->orderBy('sort', 'ASC')->orderBy('id', 'DESC');
    }
    public function scopeSearch($query, $keyword)
    {
        if (is_null($keyword))
            return $query;
        $keyword = '%' . $keyword . '%';
        $query
            ->where('slug_title_url', 'LIKE', $keyword)
            ->orWhere("page_title", 'LIKE', $keyword)
            ->orWhere("h1_title", 'LIKE', $keyword);
        return $query;
    }
    //============/Scopes

    //============Relations
    public function categories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Category::class,"category_id");
    }
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    //============/Relations
}