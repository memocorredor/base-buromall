<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\WebSite;
use Buromall\Models\LocaleCountry;
use Buromall\Models\LocaleState;
use Buromall\Models\LocaleCity;
use Illuminate\Http\Request;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;

class AdminWebSiteController extends Controller
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
    private $form_view;
    private $form_new;
    private $form_show;
    private $form_edit;
    private $form_create;
    private $form_update;
    private $form_delete;

    // Constructor del CONTROLLER
    public function __construct()
    {
        $this->middleware('auth');
        // Carga del id de la web a usar
        $this->web_sis = env('APP_ID_USE', '1');
        // Carga del idioma en uso
        $this->lang = str_replace('_', '-', app()->getLocale());
        // SEO del form
        $this->seo_title = __('seo_admin.local_admin_webs_title');
        $this->seo_description = __('seo_admin.local_admin_webs_description');
        $this->seo_keywords = __('seo_admin.local_admin_webs_keywords');
        $this->view_icon = 'fas fa-satellite';
        // Rutas del view and form
        $this->form_view = 'admin.config_website';
        $this->form_show = 'admin.config_website.show';
        $this->form_new = 'admin.config_website.new';
        $this->form_create = 'admin.config_website.store';
        $this->form_edit = 'admin.config_website.edit';
        $this->form_update = 'admin.config_website.update';
        $this->form_delete = 'admin.config_website.delete';
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
        $send_meta_robot = 'noindex,nofollow';
        // Carga de los metadatos en esta variable para ser pasados al view
        $this->meta_sis = CoreMeta::MetaTags($send_meta_data, $send_lang, $send_meta_title, $send_meta_description, $send_meta_keywords, $send_meta_robot);
    }

    // Mostar tabla con datos
    public function index()
    {
        // Carga data para el view
        $data_item = WebSite::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.web_site.main', compact('data_item'), [
            'meta_lang' => $this->lang,
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis,
            'view_icon' => $this->view_icon,
            'form_new' => $this->form_new,
            'form_show' => $this->form_show,
            'form_edit' => $this->form_edit,
            'form_delete' => $this->form_delete
        ]);
    }

    // Mostar form con datos del registro. No aciones
    public function show($id)
    {
        // Aciones del form
        $id_a = $id;
        $route_form = $this->form_view;
        $action_form = 'show';
        $status_input = 'disabled';
        // Carga data para el view
        $data_item = WebSite::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $image = $data_item->image;
            $title_es = $data_item->title_es;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $title_en = $data_item->title_en;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $title_pt = $data_item->title_pt;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $email = $data_item->email;
            $zipcode = $data_item->zipcode;
            $country_id = $data_item->country_id;
            $state_id = $data_item->state_id;
            $city_id = $data_item->city_id;
            $address = $data_item->address;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $facebook = $data_item->facebook;
            $facebook_enable = $data_item->facebook_enable;
            $twitter = $data_item->twitter;
            $twitter_enable = $data_item->twitter_enable;
            $instagram = $data_item->instagram;
            $instagram_enable = $data_item->instagram_enable;
            $pinterest = $data_item->pinterest;
            $pinterest_enable = $data_item->pinterest_enable;
            $youtube = $data_item->youtube;
            $youtube_enable = $data_item->youtube_enable;
            $linkedin = $data_item->linkedin;
            $linkedin_enable = $data_item->linkedin_enable;
            $skype = $data_item->skype;
            $skype_enable = $data_item->skype_enable;
            $android = $data_item->android;
            $android_enable = $data_item->android_enable;
            $itunes = $data_item->itunes;
            $itunes_enable = $data_item->itunes_enable;
            $windows = $data_item->windows;
            $windows_enable = $data_item->windows_enable;
            $author = $data_item->author;
            $copyright = $data_item->copyright;
            $time_zone = $data_item->time_zone;
            $google_analitic = $data_item->google_analitic;
            $name_page = $data_item->name_page;
            $url_web = $data_item->url_web;
            $no_ruc = $data_item->no_ruc;
            // Carga de combos
            $data_country_id = LocaleCountry::all();
            $data_state_id = LocaleState::where('country_id', $country_id)->get();
            $data_city_id = LocaleCity::where('state_id', $state_id)->get();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.web_site.form', [
                'meta_lang' => $this->lang,
                'seo_title' => $this->seo_title,
                'seo_description' => $this->seo_description,
                'meta_sis' => $for_meta_sis,
                'user_sis' => $this->user_sis,
                'view_icon' => $this->view_icon,
                'form_view' => $this->form_view,
                'route_form' => $route_form,
                'action_form' => $action_form,
                'status_input' => $status_input,
                'data_item' => $data_item,
                'data_country_id' => $data_country_id,
                'data_state_id' => $data_state_id,
                'data_city_id' => $data_city_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'image' => $image,
                'title_es' => $title_es,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'title_en' => $title_en,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'title_pt' => $title_pt,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'email' => $email,
                'zipcode' => $zipcode,
                'country_id' => $country_id,
                'state_id' => $state_id,
                'city_id' => $city_id,
                'address' => $address,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'facebook' => $facebook,
                'facebook_enable' => $facebook_enable,
                'twitter' => $twitter,
                'twitter_enable' => $twitter_enable,
                'instagram' => $instagram,
                'instagram_enable' => $instagram_enable,
                'pinterest' => $pinterest,
                'pinterest_enable' => $pinterest_enable,
                'youtube' => $youtube,
                'youtube_enable' => $youtube_enable,
                'linkedin' => $linkedin,
                'linkedin_enable' => $linkedin_enable,
                'skype' => $skype,
                'skype_enable' => $skype_enable,
                'android' => $android,
                'android_enable' => $android_enable,
                'itunes' => $itunes,
                'itunes_enable' => $itunes_enable,
                'windows' => $windows,
                'windows_enable' => $windows_enable,
                'author' => $author,
                'copyright' => $copyright,
                'time_zone' => $time_zone,
                'google_analitic' => $google_analitic,
                'name_page' => $name_page,
                'url_web' => $url_web,
                'no_ruc' => $no_ruc
            ]);
        } else {
            $notification = array(
                'message' => __('app_messages.local_msg_warning_id_null'),
                'alert-type' => 'error'
            );
            return redirect()->route($this->form_view)->with($notification);
        }
    }

    // Mostar form paar crear nuevo registro
    public function create()
    {
        // Aciones del form
        $route_form = $this->form_create;
        $action_form = 'add';
        $status_input = '';
        // Carga data para el view
        $mytime = Carbon::now();
        $date_created = $mytime->toDateTimeString();
        $date_edit = $mytime->toDateTimeString();
        $image = '';
        $title_es = '';
        $description_es = '';
        $keywords_es = '';
        $title_en = '';
        $description_en = '';
        $keywords_en = '';
        $title_pt = '';
        $description_pt = '';
        $keywords_pt = '';
        $email = '';
        $zipcode = '';
        $country_id = '';
        $state_id = '';
        $city_id = '';
        $address = '';
        $areacode = '';
        $phone = '';
        $mobile = '';
        $facebook = '';
        $facebook_enable = '';
        $twitter = '';
        $twitter_enable = '';
        $instagram = '';
        $instagram_enable = '';
        $pinterest = '';
        $pinterest_enable = '';
        $youtube = '';
        $youtube_enable = '';
        $linkedin = '';
        $linkedin_enable = '';
        $skype = '';
        $skype_enable = '';
        $android = '';
        $android_enable = '';
        $itunes = '';
        $itunes_enable = '';
        $windows = '';
        $windows_enable = '';
        $author = '';
        $copyright = '';
        $time_zone = '';
        $google_analitic = '';
        $name_page = '';
        $url_web = '';
        $no_ruc = '';
        // Carga de combos
        $data_country_id = LocaleCountry::all();
        $data_state_id = LocaleState::where('country_id', 47)->get();
        $data_city_id = LocaleCity::where('state_id', 775)->get();
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.web_site.form', [
            'meta_lang' => $this->lang,
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis,
            'view_icon' => $this->view_icon,
            'form_view' => $this->form_view,
            'route_form' => $route_form,
            'action_form' => $action_form,
            'status_input' => $status_input,
            'data_country_id' => $data_country_id,
            'data_state_id' => $data_state_id,
            'data_city_id' => $data_city_id,
            'id' => '',
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'image' => $image,
            'title_es' => $title_es,
            'description_es' => $description_es,
            'keywords_es' => $keywords_es,
            'title_en' => $title_en,
            'description_en' => $description_en,
            'keywords_en' => $keywords_en,
            'title_pt' => $title_pt,
            'description_pt' => $description_pt,
            'keywords_pt' => $keywords_pt,
            'email' => $email,
            'zipcode' => $zipcode,
            'country_id' => $country_id,
            'state_id' => $state_id,
            'city_id' => $city_id,
            'address' => $address,
            'areacode' => $areacode,
            'phone' => $phone,
            'mobile' => $mobile,
            'facebook' => $facebook,
            'facebook_enable' => $facebook_enable,
            'twitter' => $twitter,
            'twitter_enable' => $twitter_enable,
            'instagram' => $instagram,
            'instagram_enable' => $instagram_enable,
            'pinterest' => $pinterest,
            'pinterest_enable' => $pinterest_enable,
            'youtube' => $youtube,
            'youtube_enable' => $youtube_enable,
            'linkedin' => $linkedin,
            'linkedin_enable' => $linkedin_enable,
            'skype' => $skype,
            'skype_enable' => $skype_enable,
            'android' => $android,
            'android_enable' => $android_enable,
            'itunes' => $itunes,
            'itunes_enable' => $itunes_enable,
            'windows' => $windows,
            'windows_enable' => $windows_enable,
            'author' => $author,
            'copyright' => $copyright,
            'time_zone' => $time_zone,
            'google_analitic' => $google_analitic,
            'name_page' => $name_page,
            'url_web' => $url_web,
            'no_ruc' => $no_ruc
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'title_es' => 'required',
                'description_es' => 'required',
                'keywords_es' => 'required',
                'title_en' => 'required',
                'description_en' => 'required',
                'keywords_en' => 'required',
                'title_pt' => 'required',
                'description_pt' => 'required',
                'keywords_pt' => 'required',
                'email' => 'required',
                'zipcode' => 'required',
                'country_id' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',
                'address' => 'required',
                'areacode' => 'required',
                'phone' => 'required',
                'mobile' => 'required',
                'facebook' => 'required',
                'facebook_enable' => 'required',
                'twitter' => 'required',
                'twitter_enable' => 'required',
                'instagram' => 'required',
                'instagram_enable' => 'required',
                'pinterest' => 'required',
                'pinterest_enable' => 'required',
                'youtube' => 'required',
                'youtube_enable' => 'required',
                'linkedin' => 'required',
                'linkedin_enable' => 'required',
                'skype' => 'required',
                'skype_enable' => 'required',
                'android' => 'required',
                'android_enable' => 'required',
                'itunes' => 'required',
                'itunes_enable' => 'required',
                'windows' => 'required',
                'windows_enable' => 'required',
                'author' => 'required',
                'copyright' => 'required',
                'time_zone' => 'required',
                'google_analitic' => 'required',
                'name_page' => 'required',
                'url_web' => 'required',
                'no_ruc' => 'required',
            ]);
            // Crea la instancia
            $data_field = new WebSite();
            $data_field->image = $request->get('image');
            $data_field->title_es = $request->get('title_es');
            $data_field->description_es = $request->get('description_es');
            $data_field->keywords_es = $request->get('keywords_es');
            $data_field->title_en = $request->get('title_en');
            $data_field->description_en = $request->get('description_en');
            $data_field->keywords_en = $request->get('keywords_en');
            $data_field->title_pt = $request->get('title_pt');
            $data_field->description_pt = $request->get('description_pt');
            $data_field->keywords_pt = $request->get('keywords_pt');
            $data_field->email = $request->get('email');
            $data_field->zipcode = $request->get('zipcode');
            $data_field->country_id = $request->get('country_id');
            $data_field->state_id = $request->get('state_id');
            $data_field->city_id = $request->get('city_id');
            $data_field->address = $request->get('address');
            $data_field->areacode = $request->get('areacode');
            $data_field->phone = $request->get('phone');
            $data_field->mobile = $request->get('mobile');
            $data_field->facebook = $request->get('facebook');
            $data_field->facebook_enable = $request->get('facebook_enable');
            $data_field->twitter = $request->get('twitter');
            $data_field->twitter_enable = $request->get('twitter_enable');
            $data_field->instagram = $request->get('instagram');
            $data_field->instagram_enable = $request->get('instagram_enable');
            $data_field->pinterest = $request->get('pinterest');
            $data_field->pinterest_enable = $request->get('pinterest_enable');
            $data_field->youtube = $request->get('youtube');
            $data_field->youtube_enable = $request->get('youtube_enable');
            $data_field->linkedin = $request->get('linkedin');
            $data_field->linkedin_enable = $request->get('linkedin_enable');
            $data_field->skype = $request->get('skype');
            $data_field->skype_enable = $request->get('skype_enable');
            $data_field->android = $request->get('android');
            $data_field->android_enable = $request->get('android_enable');
            $data_field->itunes = $request->get('itunes');
            $data_field->itunes_enable = $request->get('itunes_enable');
            $data_field->windows = $request->get('windows');
            $data_field->windows_enable = $request->get('windows_enable');
            $data_field->author = $request->get('author');
            $data_field->copyright = $request->get('copyright');
            $data_field->time_zone = $request->get('time_zone');
            $data_field->google_analitic = $request->get('google_analitic');
            $data_field->name_page = $request->get('name_page');
            $data_field->url_web = $request->get('url_web');
            $data_field->no_ruc = $request->get('no_ruc');

            //Accion de guardar la info
            $saved = $data_field->save();
            //Notificacion de la accion
            if ($saved) {
                $notification = array(
                    'message' => __('app_messages.local_msg_success_create'),
                    'alert-type' => 'success'
                );
            } else {
                $notification = array(
                    'message' => __('app_messages.local_msg_danger_create'),
                    'alert-type' => 'error'
                );
            }
            return redirect()->route($this->form_view)->with($notification);
        } else {
            $notification = array(
                'message' => __('app_messages.local_msg_warning_process'),
                'alert-type' => 'warning'
            );
            return redirect()->route($this->form_view)->with($notification);
        }
    }

    // Mostar form paar editar un registro
    public function edit($id)
    {
        $id_a = $id;
        // Carga data para el view
        $data_item = WebSite::find($id_a);
        if ($data_item != null) {
            // Aciones del form
            $route_form = $this->form_update;
            $action_form = 'edit';
            $status_input = '';
            // Carga data para el view
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $image = $data_item->image;
            $title_es = $data_item->title_es;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $title_en = $data_item->title_en;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $title_pt = $data_item->title_pt;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $email = $data_item->email;
            $zipcode = $data_item->zipcode;
            $country_id = $data_item->country_id;
            $state_id = $data_item->state_id;
            $city_id = $data_item->city_id;
            $address = $data_item->address;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $facebook = $data_item->facebook;
            $facebook_enable = $data_item->facebook_enable;
            $twitter = $data_item->twitter;
            $twitter_enable = $data_item->twitter_enable;
            $instagram = $data_item->instagram;
            $instagram_enable = $data_item->instagram_enable;
            $pinterest = $data_item->pinterest;
            $pinterest_enable = $data_item->pinterest_enable;
            $youtube = $data_item->youtube;
            $youtube_enable = $data_item->youtube_enable;
            $linkedin = $data_item->linkedin;
            $linkedin_enable = $data_item->linkedin_enable;
            $skype = $data_item->skype;
            $skype_enable = $data_item->skype_enable;
            $android = $data_item->android;
            $android_enable = $data_item->android_enable;
            $itunes = $data_item->itunes;
            $itunes_enable = $data_item->itunes_enable;
            $windows = $data_item->windows;
            $windows_enable = $data_item->windows_enable;
            $author = $data_item->author;
            $copyright = $data_item->copyright;
            $time_zone = $data_item->time_zone;
            $google_analitic = $data_item->google_analitic;
            $name_page = $data_item->name_page;
            $url_web = $data_item->url_web;
            $no_ruc = $data_item->no_ruc;
            // Carga de combos
            $data_country_id = LocaleCountry::all();
            $data_state_id = LocaleState::where('country_id', $country_id)->get();
            $data_city_id = LocaleCity::where('state_id', $state_id)->get();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.web_site.form', [
                'meta_lang' => $this->lang,
                'seo_title' => $this->seo_title,
                'seo_description' => $this->seo_description,
                'meta_sis' => $for_meta_sis,
                'user_sis' => $this->user_sis,
                'view_icon' => $this->view_icon,
                'form_view' => $this->form_view,
                'route_form' => $route_form,
                'action_form' => $action_form,
                'status_input' => $status_input,
                'data_item' => $data_item,
                'data_country_id' => $data_country_id,
                'data_state_id' => $data_state_id,
                'data_city_id' => $data_city_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'image' => $image,
                'title_es' => $title_es,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'title_en' => $title_en,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'title_pt' => $title_pt,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'email' => $email,
                'zipcode' => $zipcode,
                'country_id' => $country_id,
                'state_id' => $state_id,
                'city_id' => $city_id,
                'address' => $address,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'facebook' => $facebook,
                'facebook_enable' => $facebook_enable,
                'twitter' => $twitter,
                'twitter_enable' => $twitter_enable,
                'instagram' => $instagram,
                'instagram_enable' => $instagram_enable,
                'pinterest' => $pinterest,
                'pinterest_enable' => $pinterest_enable,
                'youtube' => $youtube,
                'youtube_enable' => $youtube_enable,
                'linkedin' => $linkedin,
                'linkedin_enable' => $linkedin_enable,
                'skype' => $skype,
                'skype_enable' => $skype_enable,
                'android' => $android,
                'android_enable' => $android_enable,
                'itunes' => $itunes,
                'itunes_enable' => $itunes_enable,
                'windows' => $windows,
                'windows_enable' => $windows_enable,
                'author' => $author,
                'copyright' => $copyright,
                'time_zone' => $time_zone,
                'google_analitic' => $google_analitic,
                'name_page' => $name_page,
                'url_web' => $url_web,
                'no_ruc' => $no_ruc
            ]);
        } else {
            $notification = array(
                'message' => __('app_messages.local_msg_warning_id_null'),
                'alert-type' => 'error'
            );
            return redirect()->route($this->form_view)->with($notification);
        }
    }

    // Editar un registro
    public function update(Request $request, $id)
    {
        //Carga la informacion del registro
        $data_item = WebSite::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'title_es' => 'required',
                    'description_es' => 'required',
                    'keywords_es' => 'required',
                    'title_en' => 'required',
                    'description_en' => 'required',
                    'keywords_en' => 'required',
                    'title_pt' => 'required',
                    'description_pt' => 'required',
                    'keywords_pt' => 'required',
                    'email' => 'required',
                    'zipcode' => 'required',
                    'country_id' => 'required',
                    'state_id' => 'required',
                    'city_id' => 'required',
                    'address' => 'required',
                    'areacode' => 'required',
                    'phone' => 'required',
                    'mobile' => 'required',
                    'facebook' => 'required',
                    'facebook_enable' => 'required',
                    'twitter' => 'required',
                    'twitter_enable' => 'required',
                    'instagram' => 'required',
                    'instagram_enable' => 'required',
                    'pinterest' => 'required',
                    'pinterest_enable' => 'required',
                    'youtube' => 'required',
                    'youtube_enable' => 'required',
                    'linkedin' => 'required',
                    'linkedin_enable' => 'required',
                    'skype' => 'required',
                    'skype_enable' => 'required',
                    'android' => 'required',
                    'android_enable' => 'required',
                    'itunes' => 'required',
                    'itunes_enable' => 'required',
                    'windows' => 'required',
                    'windows_enable' => 'required',
                    'author' => 'required',
                    'copyright' => 'required',
                    'time_zone' => 'required',
                    'google_analitic' => 'required',
                    'name_page' => 'required',
                    'url_web' => 'required',
                    'no_ruc' => 'required',
                ]);
                //Compara la info
                $data_item->image = $request->get('image');
                $data_item->title_es = $request->get('title_es');
                $data_item->description_es = $request->get('description_es');
                $data_item->keywords_es = $request->get('keywords_es');
                $data_item->title_en = $request->get('title_en');
                $data_item->description_en = $request->get('description_en');
                $data_item->keywords_en = $request->get('keywords_en');
                $data_item->title_pt = $request->get('title_pt');
                $data_item->description_pt = $request->get('description_pt');
                $data_item->keywords_pt = $request->get('keywords_pt');
                $data_item->email = $request->get('email');
                $data_item->zipcode = $request->get('zipcode');
                $data_item->country_id = $request->get('country_id');
                $data_item->state_id = $request->get('state_id');
                $data_item->city_id = $request->get('city_id');
                $data_item->address = $request->get('address');
                $data_item->areacode = $request->get('areacode');
                $data_item->phone = $request->get('phone');
                $data_item->mobile = $request->get('mobile');
                $data_item->facebook = $request->get('facebook');
                $data_item->facebook_enable = $request->get('facebook_enable');
                $data_item->twitter = $request->get('twitter');
                $data_item->twitter_enable = $request->get('twitter_enable');
                $data_item->instagram = $request->get('instagram');
                $data_item->instagram_enable = $request->get('instagram_enable');
                $data_item->pinterest = $request->get('pinterest');
                $data_item->pinterest_enable = $request->get('pinterest_enable');
                $data_item->youtube = $request->get('youtube');
                $data_item->youtube_enable = $request->get('youtube_enable');
                $data_item->linkedin = $request->get('linkedin');
                $data_item->linkedin_enable = $request->get('linkedin_enable');
                $data_item->skype = $request->get('skype');
                $data_item->skype_enable = $request->get('skype_enable');
                $data_item->android = $request->get('android');
                $data_item->android_enable = $request->get('android_enable');
                $data_item->itunes = $request->get('itunes');
                $data_item->itunes_enable = $request->get('itunes_enable');
                $data_item->windows = $request->get('windows');
                $data_item->windows_enable = $request->get('windows_enable');
                $data_item->author = $request->get('author');
                $data_item->copyright = $request->get('copyright');
                $data_item->time_zone = $request->get('time_zone');
                $data_item->google_analitic = $request->get('google_analitic');
                $data_item->name_page = $request->get('name_page');
                $data_item->url_web = $request->get('url_web');
                $data_item->no_ruc = $request->get('no_ruc');
                //Accion de guardar la info
                $saved = $data_item->save();
                //Notificacion de la accion
                if ($saved) {
                    $notification = array(
                        'message' => __('app_messages.local_msg_success_edit'),
                        'alert-type' => 'success'
                    );
                } else {
                    $notification = array(
                        'message' => __('app_messages.local_msg_danger_edit'),
                        'alert-type' => 'error'
                    );
                }
                return redirect()->route($this->form_view)->with($notification);
            } else {
                $notification = array(
                    'message' => __('app_messages.local_msg_warning_process'),
                    'alert-type' => 'warning'
                );
                return redirect()->route($this->form_view)->with($notification);
            }
        } else {
            $notification = array(
                'message' => __('app_messages.local_msg_warning_id_null'),
                'alert-type' => 'error'
            );
            return redirect()->route($this->form_view)->with($notification);
        }
    }

    // Borrar un registro
    public function destroy($id)
    {
        $data_item = WebSite::find($id);
        if ($data_item != null) {
            $data_item->delete();
            $notification = array(
                'message' => __('app_messages.local_msg_success_delete'),
                'alert-type' => 'success'
            );
            return redirect()->route($this->form_view)->with($notification);
        } else {
            $notification = array(
                'message' => __('app_messages.local_msg_warning_id_null'),
                'alert-type' => 'error'
            );
            return redirect()->route($this->form_view)->with($notification);
        }
    }
}
