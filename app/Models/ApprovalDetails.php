<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id',
        'name',
        'paybill',
        'money',
        'status',
    'approved_at'];
        protected $table = "approval_details";
        protected $primaryKey = 'id';
        public $incrementing = true;
}
