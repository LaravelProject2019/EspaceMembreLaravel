<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Membre extends Model implements Authenticatable
{

    public $table = "membre";

    use BasicAuthenticatable;

    protected $fillable = ['nom','prenom','email','matricule','niveau','ecole','password'];


    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password; /*Si le champ password etait nommer autrement, cette ligne serai importante */
    }


}
