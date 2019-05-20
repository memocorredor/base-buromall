<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\UserAdsBeacon;
use Buromall\Models\User;
use Buromall\Models\CgDepartament;
use Buromall\Models\CgCategorie;
use Buromall\Models\CgSubCategorie;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;

class AdminUserAdsBeaconController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_ads_beacon_title');
        $this->seo_description = __('seo_admin.local_admin_ads_beacon_description');
        $this->seo_keywords = __('seo_admin.local_admin_ads_beacon_keywords');
        $this->view_icon = 'fab fa-bluetooth';
        // Rutas del view and form
        $this->form_view = 'admin.ads_beacon';
        $this->form_show = 'admin.ads_beacon.show';
        $this->form_new = 'admin.ads_beacon.new';
        $this->form_create = 'admin.ads_beacon.store';
        $this->form_edit = 'admin.ads_beacon.edit';
        $this->form_update = 'admin.ads_beacon.update';
        $this->form_delete = 'admin.ads_beacon.delete';
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
        $data_item = UserAdsBeacon::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.user_ads_beacon.main', compact('data_item'), [
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
        $data_item = UserAdsBeacon::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $user_id = $data_item->user_id;
            $departaments_id = $data_item->departaments_id;
            $categories_id = $data_item->categories_id;
            $categories_sub_id = $data_item->categories_sub_id;
            $date_campain_end = $data_item->date_campain_end;
            $name = $data_item->name;
            $text_es = $data_item->text_es;
            $text_en = $data_item->text_en;
            $text_pt = $data_item->text_pt;
            $url_destine = $data_item->url_destine;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            // Carga de combos
            $data_user_id = User::all();
            $data_departaments_id = CgDepartament::all();
            $data_categories_id = CgCategorie::all();
            $data_categories_sub_id = CgSubCategorie::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.user_ads_beacon.form', [
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
                'data_user_id' => $data_user_id,
                'data_departaments_id' => $data_departaments_id,
                'data_categories_id' => $data_categories_id,
                'data_categories_sub_id' => $data_categories_sub_id,
                'id' => $id_sis,
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => $user_id,
                'departaments_id' => $departaments_id,
                'categories_id' => $categories_id,
                'categories_sub_id' => $categories_sub_id,
                'date_campain_end' => $date_campain_end,
                'name' => $name,
                'text_es' => $text_es,
                'text_en' => $text_en,
                'text_pt' => $text_pt,
                'url_destine' => $url_destine,
                'latitude' => $latitude,
                'longitude' => $longitude
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
        $user_id = 1;
        $departaments_id = '';
        $categories_id = '';
        $categories_sub_id = '';
        $date_campain_end = '';
        $name = '';
        $text_es = '';
        $text_en = '';
        $text_pt = '';
        $url_destine = '';
        $latitude = '';
        $longitude = '';
        // Carga de combos
        $data_user_id = User::all();
        $data_departaments_id = CgDepartament::all();
        $data_categories_id = CgCategorie::all();
        $data_categories_sub_id = CgSubCategorie::all();
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.user_ads_beacon.form', [
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
            'data_user_id' => $data_user_id,
            'data_departaments_id' => $data_departaments_id,
            'data_categories_id' => $data_categories_id,
            'data_categories_sub_id' => $data_categories_sub_id,
            'id' => '',
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'user_id' => $user_id,
            'departaments_id' => $departaments_id,
            'categories_id' => $categories_id,
            'categories_sub_id' => $categories_sub_id,
            'date_campain_end' => $date_campain_end,
            'name' => $name,
            'text_es' => $text_es,
            'text_en' => $text_en,
            'text_pt' => $text_pt,
            'url_destine' => $url_destine,
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'user_id' => 'required',
                'departaments_id' => 'required',
                'categories_id' => 'required',
                'categories_sub_id' => 'required',
                'date_campain_end' => 'required',
                'name' => 'required',
                'text_es' => 'required',
                'text_en' => 'required',
                'text_pt' => 'required',
                'url_destine' => 'required',
                'latitude' => 'required',
                'longitude' => 'required'
            ]);
            // Crea la instancia
            $data_field = new UserAdsBeacon();
            $data_field->enable = $request->get('enable');
            $data_field->user_id = $request->get('user_id');
            $data_field->departaments_id = $request->get('departaments_id');
            $data_field->categories_id = $request->get('categories_id');
            $data_field->categories_sub_id = $request->get('categories_sub_id');
            $data_field->date_campain_end = $request->get('date_campain_end');
            $data_field->name = $request->get('name');
            $data_field->text_es = $request->get('text_es');
            $data_field->text_en = $request->get('text_en');
            $data_field->text_pt = $request->get('text_pt');
            $data_field->url_destine = $request->get('url_destine');
            $data_field->latitude = $request->get('latitude');
            $data_field->longitude = $request->get('longitude');
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
        $data_item = UserAdsBeacon::find($id_a);
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
            $user_id = $data_item->user_id;
            $departaments_id = $data_item->departaments_id;
            $categories_id = $data_item->categories_id;
            $categories_sub_id = $data_item->categories_sub_id;
            $date_campain_end = $data_item->date_campain_end;
            $name = $data_item->name;
            $text_es = $data_item->text_es;
            $text_en = $data_item->text_en;
            $text_pt = $data_item->text_pt;
            $url_destine = $data_item->url_destine;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            // Carga de combos
            $data_user_id = User::all();
            $data_departaments_id = CgDepartament::all();
            $data_categories_id = CgCategorie::all();
            $data_categories_sub_id = CgSubCategorie::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.user_ads_beacon.form', [
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
                'data_user_id' => $data_user_id,
                'data_departaments_id' => $data_departaments_id,
                'data_categories_id' => $data_categories_id,
                'data_categories_sub_id' => $data_categories_sub_id,
                'id' => $id_sis,
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => $user_id,
                'departaments_id' => $departaments_id,
                'categories_id' => $categories_id,
                'categories_sub_id' => $categories_sub_id,
                'date_campain_end' => $date_campain_end,
                'name' => $name,
                'text_es' => $text_es,
                'text_en' => $text_en,
                'text_pt' => $text_pt,
                'url_destine' => $url_destine,
                'latitude' => $latitude,
                'longitude' => $longitude
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
        $data_item = UserAdsBeacon::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'user_id' => 'required',
                    'departaments_id' => 'required',
                    'categories_id' => 'required',
                    'categories_sub_id' => 'required',
                    'date_campain_end' => 'required',
                    'name' => 'required',
                    'text_es' => 'required',
                    'text_en' => 'required',
                    'text_pt' => 'required',
                    'url_destine' => 'required',
                    'latitude' => 'required',
                    'longitude' => 'required'
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->user_id = $request->get('user_id');
                $data_item->departaments_id = $request->get('departaments_id');
                $data_item->categories_id = $request->get('categories_id');
                $data_item->categories_sub_id = $request->get('categories_sub_id');
                $data_item->date_campain_end = $request->get('date_campain_end');
                $data_item->name = $request->get('name');
                $data_item->text_es = $request->get('text_es');
                $data_item->text_en = $request->get('text_en');
                $data_item->text_pt = $request->get('text_pt');
                $data_item->url_destine = $request->get('url_destine');
                $data_item->latitude = $request->get('latitude');
                $data_item->longitude = $request->get('longitude');
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
        $data_item = UserAdsBeacon::find($id);
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
