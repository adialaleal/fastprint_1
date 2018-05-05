<?php

namespace fastprint;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'printfast';
    public $timestamps = false;
    protected $fillable = array
    (
    	'inputNome','inputSetor','inputRamal','inputEmail3','inputFile','inputCopias','inputPapel','inputCor','inputAcabamento','inputObs'
    );
    protected $guarded = ['id'];
}
