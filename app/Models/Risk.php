<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    /**
     * Nama tabel terkait.
     *
     * @var string
     */
    protected $table = 'risks';

    /**
     * Kolom yang dapat diisi (mass assignable).
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'severity',
        'occurrence',
        'detection',
        'status',
        'risk_priority_number',
        'time_added',
    ];

    // Mapping status ke teks deskriptif
    public static $statusDescriptions = [
        1 => 'Risk!',
        2 => 'Risks Correction',
        3 => 'Risk Resolved',
        4 => 'Residual Risk',
    ];

    // Metode untuk mendapatkan teks status berdasarkan angka
    public function getStatusTextAttribute()
    {
        return self::$statusDescriptions[$this->status] ?? 'Unknown Status';
    }

    /**
     * Format default untuk atribut time_added.
     *
     * @var string
     */
    protected $casts = [
        'time_added' => 'datetime',
    ];

    // Automatically calculate RPN when creating or updating
    public static function boot()
    {
        parent::boot();

        // Event: Before creating a record
        static::creating(function ($risk) {
            $risk->risk_priority_number = $risk->severity * $risk->occurrence * $risk->detection;
        });

        // Event: Before updating a record
        static::updating(function ($risk) {
            $risk->risk_priority_number = $risk->severity * $risk->occurrence * $risk->detection;
        });
    }
}
