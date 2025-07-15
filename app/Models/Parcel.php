<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrackingLog;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parcel extends Model
{
    protected $fillable = [
        'tracking_id',
        'tracking_number',
        'customer_name',
        'status',
        'orgin',
        'destination',
        'weight',
        'price',
        'notes',
        'sender_email',
        'receiver_email',
        'receiver_number',
    ];

    protected $casts = [ 
        'delivery_date' => 'date',
    ];

    public function scopeDelivered($query) 
    {
        return $query->where('status', 'Delivered');
    }

    public function scopeInTransit($query)
    {
        return $query->where('status', 'In Transit');
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_email');
    }
    
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_email');
    }

    public function trackingLogs()
    {
        return $this->hasMany(TrackingLog::class);
    }

    use HasFactory;
}
