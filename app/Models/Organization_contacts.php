<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Organizations;

class Organization_contacts extends Model
{
    use HasFactory;

    protected $table = 'organization_contacts';

    protected $fillable = [
        'organization_id',
        'type',   // 'phone', 'email', or 'website'
        'value',  // actual phone number, email, or website
    ];

    /**
     * The organization that owns this contact.
     */
    public function organization()
    {
        return $this->belongsTo(Organizations::class, 'organization_id');
    }
}
