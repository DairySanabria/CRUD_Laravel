<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditor extends Model

{
    
	protected $table = 'auditoria';
    protected $fillable = ['usuario_id'];
}
