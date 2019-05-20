<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\ScCookie;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\Models\LocaleCountry;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;

class AdminScCookieController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_sc_cookie_title');
        $this->seo_description = __('seo_admin.local_admin_sc_cookie_description');
        $this->seo_keywords = __('seo_admin.local_admin_sc_cookie_keywords');
        $this->view_icon = 'fas fa-cookie-bite';
        // Rutas del view and form
        $this->form_view = 'admin.sc_cookie';
        $this->form_show = 'admin.sc_cookie.show';
        $this->form_new = 'admin.sc_cookie.new';
        $this->form_create = 'admin.sc_cookie.store';
        $this->form_edit = 'admin.sc_cookie.edit';
        $this->form_update = 'admin.sc_cookie.update';
        $this->form_delete = 'admin.sc_cookie.delete';
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
        $data_item = ScCookie::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.sc_cookie.main', compact('data_item'), [
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
        $data_item = ScCookie::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $web_id = $data_item->web_id;
            $country_id = $data_item->country_id;
            $name_color = $data_item->name_color;
            $title_es = $data_item->title_es;
            $text_es = $data_item->text_es;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $title_en = $data_item->title_en;
            $text_en = $data_item->text_en;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $title_pt = $data_item->title_pt;
            $text_pt = $data_item->text_pt;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $url_img = $data_item->url_img;
            // Carga de combos
            $data_web_id = WebSite::all();
            $data_country_id = LocaleCountry::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.sc_cookie.form', [
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
                'data_web_id' => $data_web_id,
                'data_country_id' => $data_country_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'web_id' => $web_id,
                'country_id' => $country_id,
                'name_color' => $name_color,
                'title_es' => $title_es,
                'text_es' => $text_es,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'title_en' => $title_en,
                'text_en' => $text_en,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'title_pt' => $title_pt,
                'text_pt' => $text_pt,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'url_img' => $url_img,
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
        $enable = 1;
        $web_id = 1;
        $country_id = 0;
        $name_color = '';
        $title_es = '';
        $text_es = '';
        $description_es = '';
        $keywords_es = '';
        $title_en = '';
        $text_en = '';
        $description_en = '';
        $keywords_en = '';
        $title_pt = '';
        $text_pt = '';
        $description_pt = '';
        $keywords_pt = '';
        $url_img = '';
        // Carga de combos
        $data_web_id = WebSite::all();
        $data_country_id = LocaleCountry::all();
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.sc_cookie.form', [
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
            'data_web_id' => $data_web_id,
            'data_country_id' => $data_country_id,
            'id' => '',
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'web_id' => $web_id,
            'country_id' => $country_id,
            'name_color' => $name_color,
            'title_es' => $title_es,
            'text_es' => $text_es,
            'description_es' => $description_es,
            'keywords_es' => $keywords_es,
            'title_en' => $title_en,
            'text_en' => $text_en,
            'description_en' => $description_en,
            'keywords_en' => $keywords_en,
            'title_pt' => $title_pt,
            'text_pt' => $text_pt,
            'description_pt' => $description_pt,
            'keywords_pt' => $keywords_pt,
            'url_img' => $url_img,
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'web_id' => 'required',
                'country_id' => 'required',
                'name_color' => 'required',
                'title_es' => 'required',
                'text_es' => 'required',
                'description_es' => 'required',
                'keywords_es' => 'required',
                'title_en' => 'required',
                'text_en' => 'required',
                'description_en' => 'required',
                'keywords_en' => 'required',
                'title_pt' => 'required',
                'text_pt',
                'description_pt' => 'required',
                'keywords_pt' => 'required',
                //'url_img' => 'required',
            ]);
            // Crea la instancia
            $data_field = new ScCookie();
            $data_field->enable = $request->get('enable');
            $data_field->web_id = $request->get('web_id');
            $data_field->country_id = $request->get('country_id');
            $data_field->name_color = $request->get('name_color');
            $data_field->title_es = $request->get('title_es');
            $data_field->text_es = $request->get('text_es');
            $data_field->description_es = $request->get('description_es');
            $data_field->keywords_es = $request->get('keywords_es');
            $data_field->title_en = $request->get('title_en');
            $data_field->text_en = $request->get('text_en');
            $data_field->description_en = $request->get('description_en');
            $data_field->keywords_en = $request->get('keywords_en');
            $data_field->title_pt = $request->get('title_pt');
            $data_field->text_pt = $request->get('text_pt');
            $data_field->description_pt = $request->get('description_pt');
            $data_field->keywords_pt = $request->get('keywords_pt');
            $data_field->url_img = $request->get('url_img');
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
        $data_item = ScCookie::find($id_a);
        if ($data_item != null) {
            // Aciones del form
            $route_form = $this->form_update;
            $action_form = 'edit';
            $status_input = '';
            // Carga data para el view
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $web_id = $data_item->web_id;
            $country_id = $data_item->country_id;
            $name_color = $data_item->name_color;
            $title_es = $data_item->title_es;
            $text_es = $data_item->text_es;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $title_en = $data_item->title_en;
            $text_en = $data_item->text_en;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $title_pt = $data_item->title_pt;
            $text_pt = $data_item->text_pt;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $url_img = $data_item->url_img;
            // Carga de combos
            $data_web_id = WebSite::all();
            $data_country_id = LocaleCountry::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.sc_cookie.form', [
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
                'data_web_id' => $data_web_id,
                'data_country_id' => $data_country_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'web_id' => $web_id,
                'country_id' => $country_id,
                'name_color' => $name_color,
                'title_es' => $title_es,
                'text_es' => $text_es,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'title_en' => $title_en,
                'text_en' => $text_en,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'title_pt' => $title_pt,
                'text_pt' => $text_pt,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'url_img' => $url_img,
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
        $data_item = ScCookie::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'web_id' => 'required',
                    'country_id' => 'required',
                    'name_color' => 'required',
                    'title_es' => 'required',
                    'text_es' => 'required',
                    'description_es' => 'required',
                    'keywords_es' => 'required',
                    'title_en' => 'required',
                    'text_en' => 'required',
                    'description_en' => 'required',
                    'keywords_en' => 'required',
                    'title_pt' => 'required',
                    'text_pt',
                    'description_pt' => 'required',
                    'keywords_pt' => 'required',
                    //'url_img' => 'required',
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->web_id = $request->get('web_id');
                $data_item->country_id = $request->get('country_id');
                $data_item->name_color = $request->get('name_color');
                $data_item->title_es = $request->get('title_es');
                $data_item->text_es = $request->get('text_es');
                $data_item->description_es = $request->get('description_es');
                $data_item->keywords_es = $request->get('keywords_es');
                $data_item->title_en = $request->get('title_en');
                $data_item->text_en = $request->get('text_en');
                $data_item->description_en = $request->get('description_en');
                $data_item->keywords_en = $request->get('keywords_en');
                $data_item->title_pt = $request->get('title_pt');
                $data_item->text_pt = $request->get('text_pt');
                $data_item->description_pt = $request->get('description_pt');
                $data_item->keywords_pt = $request->get('keywords_pt');
                //$data_field->url_img = $request->get('url_img');
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
        $data_item = ScCookie::find($id);
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
