<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ["title", "body", "published_at"];

    protected $dates = ["published_at"];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
    public function scopeUnPublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }
    public function getPublishedAtAttribute($date){
        return Carbon::parse($date)->format('Y-m-d');
    }

    /**
     * An article is owned by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the tags associate with the given article
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function tags(){
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the current article
     * @return array|\Illuminate\Support\Collection
     */
    public function getTagListAttribute(){
        return $this->tags()->pluck('id');
    }
}
