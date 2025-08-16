<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ApplicantContactsFactory; // import the factory

class Applicant_contacts extends Model
{
    use HasFactory;

    protected $table = 'applicant_contacts';

    protected $fillable = [
        'applicant_id',
        'type',   // 'phone' or 'email'
        'value',  // actual phone number or email
    ];

    /**
     * Tell Laravel which factory to use
     */
    protected static function newFactory()
    {
        return ApplicantContactsFactory::new();
    }

    /**
     * The applicant that owns this contact.
     */
    public function applicant()
    {
        return $this->belongsTo(Applicants::class, 'applicant_id');
    }
}
