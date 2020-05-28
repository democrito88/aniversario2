<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cartaos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'texto', 'icone', 'caminhoImagem', 'data'];

    
}
