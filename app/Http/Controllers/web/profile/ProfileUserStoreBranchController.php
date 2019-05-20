<?php

namespace Buromall\Http\Controllers;

use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Buromall\AppCore\CoreUser;

class ProfileUserStoreBranchController extends Controller
{
    // Asignacion de variables generales para uso en el CONTROLLER.
    private $lang;
    private $seo_title;
    private $seo_description;
    private $seo_keywords;
    private $web_sis;
    private $meta_sis;
    private $user_sis;
    private $view_icon;

    // Constructor del CONTROLLER
    public function __construct()
    {
        // Carga del id de la web a usar
        $this->web_sis = env('APP_ID_USE', '1');
        // Carga del idioma en uso
        $this->lang = str_replace('_', '-', app()->getLocale());
        // SEO del form
        $this->view_icon = 'fas fa-home';
    }

    // Asignacion de variables y carga del META
    public function setMeta()
    {
        // Carga los datos del meta
        $send_meta_data = WebSite::where('id', $this->web_sis)->first();
        $send_meta_title = $this->seo_title;
        $send_meta_description = $this->seo_description;
        $send_meta_keywords = $this->seo_keywords;
        $send_lang = $this->lang;
        // Indicar si queremos que se indexe o no a los robots
        $send_meta_robot = 'index,follow';
        // Carga de los metadatos en esta variable para ser pasados al view
        $this->meta_sis = CoreMeta::MetaTags($send_meta_data, $send_lang, $send_meta_title, $send_meta_description, $send_meta_keywords, $send_meta_robot);
    }

    //Para calga del index home
    public function index()
    {
        //Si title, description y keywords esta vacio se mantiene el de defult por base de datos
        $this->seo_title = '';
        $this->seo_description = '';
        $this->seo_keywords = '';
        //Carga los metas en las variables
        $this->setMeta();
        //Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        //Carga del view
        return view('web.profile.user_store_branch.main', [
            'meta_lang' => $this->lang,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis
        ]);
    }
}
