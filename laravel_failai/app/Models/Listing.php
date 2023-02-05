<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $tags
 * @property string $company
 * @property string $location
 * @property string $email
 * @property string $website
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Listing extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'tags',
        'company',
        'location',
        'email',
        'website',
        'description'

        ];

    public function scopeFilter($query, array $filters)
    {
    if($filters['tag'] ?? false ) {
    $query->where('tags', 'like', '%'. request('tag').'%');
    }

        if($filters['search'] ?? false ) {
            $query->where('title', 'like', '%'. request('search').'%')
                ->orWhere('description', 'like', '%'. request('search').'%')
                ->orWhere('company', 'like', '%'. request('search').'%');
        }
    }
}
