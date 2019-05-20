<?php

namespace Buromall\Http\Controllers;

use Illuminate\Http\Request;
use Buromall\Models\ScMision;
use Buromall\Models\WebSite;
use Buromall\Models\LocaleCountry;
use Buromall\AppCore\CoreMeta;
use Buromall\AppCore\CoreUser;

class HomeScMisionController extends Controller
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
        $this->view_icon = 'fas fa-rocket';
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
        //Se muestra segun idioma
        //Si title, description y keywords esta vacio se mantiene el de defult por base de datos
        $data_view = ScMision::where('id', $this->web_sis)->first();
        //Se envia a url segun idioma y carga la info de la pantalla
        if ($this->lang === 'pt') {
            $this->seo_title = $data_view->title_pt;
            $this->seo_description = $data_view->description_pt;
            $this->seo_keywords = $data_view->keywords_pt;
            $title_view = $data_view->title_pt;
            $text_view = $data_view->text_pt;
            $seo_title = $data_view->seo_title_pt;
        } elseif ($this->lang === 'en') {
            $this->seo_title = $data_view->title_en;
            $this->seo_description = $data_view->description_en;
            $this->seo_keywords = $data_view->keywords_en;
            $title_view = $data_view->title_en;
            $text_view = $data_view->text_en;
            $seo_title = $data_view->seo_title_en;
        } else {
            $this->seo_title = $data_view->title_es;
            $this->seo_description = $data_view->description_es;
            $this->seo_keywords = $data_view->keywords_es;
            $title_view = $data_view->title_es;
            $text_view = $data_view->text_es;
            $seo_title = $data_view->seo_title_es;
        }
        $name_color_view = $data_view->name_color;
        $date_view = $data_view->created_at;
        $url_img_view = 'imagens/static_sc/' . $data_view->url_img;
        //Carga los metas en las variables
        $this->setMeta();
        //Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        //Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        //Carga del view
        return view('web.home.sc_content.main', [
            'meta_lang' => $this->lang,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis,
            'url_img_view' => $url_img_view,
            'icon' => $this->view_icon,
            'name_color_view' => $name_color_view,
            'date_view' => $date_view,
            'title_view' => $title_view,
            'text_view' => $text_view,
            'seo_title' => $seo_title
        ]);
    }
}
