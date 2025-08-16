<?php

namespace App\Models;
use App\Models\Applicants;
use App\Models\Jobs;
use App\Models\Applicaion_Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $table = 'interviews';

    protected $fillable = [
        'application_id',
        'interview_date',
        'status',   // 'selected' or 'rejected'
        'notes',
    ];

    protected $casts = [
        'interview_date' => 'datetime',
    ];

    /**
     * The application this interview belongs to.
     */
    public function application()
    {
        return $this->belongsTo(Applicaion_Form::class, 'application_id');
    }

    /**
     * Access the applicant through the application.
     */
    public function applicant()
    {
        return $this->hasOneThrough(
            Applicants::class,
            Applicaion_Form::class,
            'id',             // Foreign key on applications table (local key for through)
            'id',             // Foreign key on applicants table
            'application_id', // Local key on interviews table
            'applicant_id'    // Local key on applications table
        );
    }

    /**
     * Access the job through the application.
     */
    public function job()
    {
        return $this->hasOneThrough(
            Jobs::class,
            Applicaion_Form::class,
            'id',             // Foreign key on applications table
            'id',             // Foreign key on jobs table
            'application_id', // Local key on interviews table
            'job_id'          // Local key on applications table
        );
    }
}
