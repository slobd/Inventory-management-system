<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'ShortName', 'base_unit', 'operator', 'operator_value', 'is_active', 'workspace_id',
    ];

    protected $casts = [
        'base_unit' => 'integer',
        'operator_value' => 'float',
        'is_active' => 'integer',
        'workspace_id' => 'integer',
    ];

    public function workspace()
    {
        return $this->belongsTo('App\Models\Workspace');
    }
}
