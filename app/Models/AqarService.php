<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AqarSetting;
use Illuminate\Database\Eloquent\SoftDeletes;


class AqarService extends Model
{
    use HasFactory, SoftDeletes;

    public $guarded = ['id'];

    protected $table = 'aqar_details';
    protected $with = ['subsection'];
    protected $appends = ['image_path'];

    protected $fillable = [
        'name_ar', // required
        'name_en', // required
        'icon', // nullable
        'parent_id', // nullable

    ];

    protected $hidden = ['deleted_at', 'updated_at'];

    public function getImagePathAttribute()
    {
        return asset('images/services_aqars/' . $this->icon);

    }//end of get image path

    // relations

    public function subservices()
    {
        return $this->HasMany(AqarService::class, 'parent_id')->withdefault();
    }

    public function subsection()
    {
        return $this->HasMany(AqarService::class, 'parent_id')->join('aqar_sections', 'aqar_details.id', '=', 'aqar_sections.sub_section_id');
    }

}
