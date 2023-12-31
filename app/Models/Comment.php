<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'status',
        'pseudo',
        'publication_date',
        'content',
    ];


    public function articles() : BelongsTo
    {
        return $this->BelongsTo(Article::class);
    }
}
