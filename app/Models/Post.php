<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopodes\Tenant;
use App\Scopodes\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Scope;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    public static function boot()
    {
        parent::boot();
        //static::addGlobalScope(TenantScope::class);
        static::addGlobalScope(new TenantScope);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }





}
