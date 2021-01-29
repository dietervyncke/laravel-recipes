<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    use HasFactory;

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredients(): HasMany
    {
        return $this->hasMany(RecipeIngredient::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(RecipeCategory::class);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    /**
     * @param $query
     * @param string|null $categoryId
     * @return mixed
     */
    public function scopeCategory($query, ?string $categoryId)
    {
        if (! $categoryId) {
            return $query;
        }

        return $query->where('recipe_category_id', $categoryId);
    }

    /**
     * @param $query
     * @param string|null $search
     * @return mixed
     */
    public function scopeSearch($query, ?string $search)
    {
        return $query->where('title', 'like', '%'.$search.'%');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeRelated($query)
    {
        return $query
            ->where('recipe_category_id', $this->recipe_category_id)
            ->where('id', '<>', $this->id)
        ;
    }
}
