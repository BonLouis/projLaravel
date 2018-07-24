<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'online'];

    public function scopePublished($query) {
    	return $query->where('online', true)->whereRaw('created_at < NOW()');
    }
    public function scopeSearchByTitle($query, $q) {
    	return $query->where('online', true)->where('title', 'LIKE', '%'.$q.'%');
    }

    public function setSlugAttribute($value) {
    	if (empty($value)) {
    		$this->attributes['slug'] = Str::slug($this->title);
    	}
        $this->attributes['title'] = strtoupper($value);
    }

    public function getDates() {
    	return ['created_at', 'updated_at', 'published_at'];
    }

    public function getRouteKey() {
    	// return $this;
    	return $this->slug;
    }
}
