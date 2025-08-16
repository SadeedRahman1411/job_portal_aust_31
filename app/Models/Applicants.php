<?php

namespace App\Models;

use App\Models\User;
use App\Models\Applicant_contacts;
use App\Models\Jobs;
use App\Models\Application_Form;
use App\Models\Interview;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    protected $table = 'applicants';

    protected $fillable = [
        'address',
        'qualification',
        'skills',
        'resume',
        'cover_letter',
    ];

    protected $casts = [
        'skills' => 'array', // Automatically cast JSON to array
    ];

    /**
     * Link to the user account.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Applicant contacts (multiple emails/phones).
     */
    public function contacts()
    {
        return $this->hasMany(Applicant_contacts::class, 'applicant_id');
    }

    /**
     * Jobs this applicant has completed.
     */
 public function jobsCompleted()
{
    return $this->belongsToMany(Jobs::class, 'job_completions', 'applicant_id', 'job_id')
                ->withPivot('completed_at')
                ->withTimestamps()
                ->where('status', 'completed'); // only jobs with status completed
}


    /**
     * Applications submitted by this applicant.
     */
    public function applications()
    {
        return $this->hasMany(Application_Form::class, 'applicant_id');
    }

    /**
     * Interviews scheduled for this applicant via applications.
     */
    public function interviews()
    {
        return $this->hasManyThrough(
            Interview::class,
            Application_Form::class,
            'applicant_id', // Foreign key on applications table
            'application_id', // Foreign key on interviews table
            'id', // Local key on applicants
            'id'  // Local key on applications
        );
    }
}
