<?php

namespace App;

use Carbon\Carbon;
use App\EraCategory;
use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\SoftDeletes;

class Era extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'image',
        'title',
        'slug',
        'excerpt',
        'title',
        'body',
        'era_category_id',
        'occurance_date'
    ];

    protected $dates    = ['occurance_date'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function eraCategory(){
        return $this->belongsTo(EraCategory::class);
    }

    public function setOccuranceDateAttribute($value)
    {
        $this->attributes['occurance_date'] = $value ?: NULL;
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $directory = config('cms.era-image.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->image);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $directory = config('cms.era-image.directory');
            $ext       = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $thumbnail);
        }

        return $imageUrl;
    }

    public function getDateAttribute($value)
    {
        return is_null($this->occurance_date) ? '' : $this->occurance_date->diffForHumans();
    }

    public function getBodyHtmlAttribute($value)
    {
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL;
    }

    public function getExcerptHtmlAttribute($value)
    {
        return $this->excerpt ? Markdown::convertToHtml(e($this->excerpt)) : NULL;
    }

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        // return $this->created_at->format($format);
        return $this->created_at
        ->locale('eng')->isoFormat('dddd, MMMM Do YYYY, h:mm');
    }

    public function occuranceLabel()
    {
        if ( ! $this->occurance_date) {
            return '<span class="label label-warning">Draft</span>';
        }
        elseif ($this->occurance_date && $this->occurance_date->isFuture()) {
            return '<span class="label label-info">Schedule</span>';
        }
        else {
            return '<span class="label label-success">Occured</span>';
        }
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('occurance_date', 'desc');
    }

    public function scopeOccured($query)
    {
        return $query->where("occurance_date", "<=", Carbon::now());
    }

    public function scopeScheduled($query)
    {
        return $query->where("occurance_date", ">", Carbon::now());
    }

    public function scopeDraft($query)
    {
        return $query->whereNull("occurance_date");
    }

    public static function archives()
    {
        if (env("DB_CONNECTION") === 'pgsql') {
            return static::selectRaw('count(id) as post_count, extract(year from occurance_date) as year, extract(month from occurance_date) as month')
                            ->occured()
                            ->groupBy('year', 'month')
                            ->orderByRaw('min(occurance_date) desc')
                            ->get();
        }
        else {
            return static::selectRaw('count(id) as post_count, year(occurance_date) year, month(occurance_date) month')
                            ->occured()
                            ->groupBy('year', 'month')
                            ->orderByRaw('min(occurance_date) desc')
                            ->get();

        }
    }

    public function scopeFilter($query, $filter)
    {
        if (isset($filter['month']) && $month = $filter['month']) {
            if (env('DB_CONNECTION') === 'pgsql') {
                $query->whereRaw('extract(month from occurance_date) = ?', [$month]);
            }
            else {
                $query->whereRaw('month(occurance_date) = ?', [$month]);
            }
        }

        if (isset($filter['year']) && $year = $filter['year']) {
            if (env('DB_CONNECTION') === 'pgsql') {
                $query->whereRaw('extract(year from occurance_date) = ?', [$year]);
            }
            else {
                $query->whereRaw('year(occurance_date) = ?', [$year]);
            }
        }

        // check if any term entered
        if (isset($filter['term']) && $term = strtolower($filter['term']))
        {
            $query->where(function($q) use ($term) {
                // $q->whereHas('author', function($qr) use ($term) {
                //     $qr->where('name', 'LIKE', "%{$term}%");
                // });
                // $q->orWhereHas('category', function($qr) use ($term) {
                //     $qr->where('title', 'LIKE', "%{$term}%");
                // });
                $q->orWhere('title', 'LIKE', "%{$term}%");
                $q->orWhere('excerpt', 'LIKE', "%{$term}%");
            });
        }
    }
}
