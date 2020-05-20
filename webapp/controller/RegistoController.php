<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Post;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\View;
use ArmoredCore\Interfaces\ResourceControllerInterface;


class RegistoController extends BaseController
{
    /**
     * @return mixed
     */
    public function create()
    {
        View::make('home.registo');
    }

    /**
     * @return mixed
     */
    public function store()
    {
        // create new resource (activerecord/model) instance
        // your form name fields must match the ones of the table fields

        $registo = new Registo(Post::getAll());

        if($registo->is_valid()){
            $registo->save();
            Redirect::toRoute('home/index');
        } else {
            // return form with data and errors
            Redirect::flashToRoute('home/registo', ['registo' => $registo]);
        }
    }
}