<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->belongsToMany(roles::class, 'user_roles');
    }

    public function isPanelAdminAuthorize() {
        return $this->role()
            ->where('name', 'Administrateur')
            ->orWhere('name', 'Developpeur')
            ->orWhere('name', 'Bureau')
            ->orWhere('name', 'Moderateur')
            ->orWhere('name', 'Editeur')
            ->orWhere('name', 'Organisateur')
            ->exists();
    }

    public function isAdministrator() {
        return $this->role()->where('name', 'Administrateur')->exists();
    }
    public function isDeveloppeur() {
        return $this->role()->where('name', 'Developpeur')->exists();
    }
    public function isBureau() {
        return $this->role()->where('name', 'Bureau')->exists();
    }
    public function isModerateur() {
        return $this->role()->where('name', 'Moderateur')->exists();
    }
    public function isEditeur() {
        return $this->role()->where('name', 'Editeur')->exists();
    }
    public function isOrganisateur() {
        return $this->role()->where('name', 'Organisateur')->exists();
    }
    public function isMembre() {
        return $this->role()->where('name', 'Membres')->exists();
    }


}
