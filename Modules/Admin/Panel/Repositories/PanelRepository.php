<?php


namespace Modules\Admin\Panel\Repositories;


use Core\Models\User;
use Illuminate\Database\Eloquent\Model;
use Jsdecena\Baserepo\BaseRepository;

class PanelRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    // Get menu lateral o menús

    // Get statics home

    // Get notifications

    // Get data de las páginas iniciales, las acciones especiales irán definidas en el repositorio
    // concreto, sino se construirá el controller con todos los datos index para cuando sea necesario.


}
