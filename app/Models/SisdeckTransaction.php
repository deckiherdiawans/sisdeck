<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SisdeckTransaction
 * @package App\Models
 * @version April 15, 2021, 9:54 am WIB
 *
 * @property integer $student_id
 * @property integer $fee_id
 * @property integer $user_id
 * @property integer $paid
 * @property string $transaction_date
 * @property string $remark
 * @property string $description
 */
class SisdeckTransaction extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sisdeck_transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transaction_date',
        'remark',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'fee_id' => 'integer',
        'user_id' => 'integer',
        'paid' => 'integer',
        'transaction_date' => 'date',
        'remark' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required|integer',
        'fee_id' => 'required|integer',
        'user_id' => 'required|integer',
        'paid' => 'required|integer',
        'transaction_date' => 'required',
        'remark' => 'required|string',
        'description' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}