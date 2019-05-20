<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\UserPlan;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;

class AdminUserPlanController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_user_plan_title');
        $this->seo_description = __('seo_admin.local_admin_user_plan_description');
        $this->seo_keywords = __('seo_admin.local_admin_user_plan_keywords');
        $this->view_icon = 'fas fa-shoe-prints';
        // Rutas del view and form
        $this->form_view = 'admin.user_plan';
        $this->form_show = 'admin.user_plan.show';
        $this->form_new = 'admin.user_plan.new';
        $this->form_create = 'admin.user_plan.store';
        $this->form_edit = 'admin.user_plan.edit';
        $this->form_update = 'admin.user_plan.update';
        $this->form_delete = 'admin.user_plan.delete';
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
        $data_item = UserPlan::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.user_plan.main', compact('data_item'), [
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
        $data_item = UserPlan::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $highlight = $data_item->highlight;
            $name_es = $data_item->name_es;
            $description_es = $data_item->description_es;
            $name_en = $data_item->name_en;
            $description_en = $data_item->description_en;
            $name_pt = $data_item->name_pt;
            $description_pt = $data_item->description_pt;
            $enable_profile = $data_item->enable_profile;
            $price = $data_item->price;
            $nu_stores = $data_item->nu_stores;
            $nu_branch = $data_item->nu_branch;
            $nu_employes = $data_item->nu_employes;
            $nu_products = $data_item->nu_products;
            $nu_smedia = $data_item->nu_smedia;
            $nu_geolocation = $data_item->nu_geolocation;
            $nu_banners = $data_item->nu_banners;
            $nu_auction = $data_item->nu_auction;
            $nu_days_recu = $data_item->nu_days_recu;
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.user_plan.form', [
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
                'id' => $id_sis,
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'highlight' => $highlight,
                'name_es' => $name_es,
                'description_es' => $description_es,
                'name_en' => $name_en,
                'description_en' => $description_en,
                'name_pt' => $name_pt,
                'description_pt' => $description_pt,
                'enable_profile' => $enable_profile,
                'price' => $price,
                'nu_stores' => $nu_stores,
                'nu_branch' => $nu_branch,
                'nu_employes' => $nu_employes,
                'nu_products' => $nu_products,
                'nu_smedia' => $nu_smedia,
                'nu_geolocation' => $nu_geolocation,
                'nu_banners' => $nu_banners,
                'nu_auction' => $nu_auction,
                'nu_days_recu' => $nu_days_recu,
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
        $highlight =  0;
        $name_es = '';
        $description_es = '';
        $name_en = '';
        $description_en = '';
        $name_pt = '';
        $description_pt = '';
        $enable_profile = 1;
        $price = '0.00';
        $nu_stores = '1';
        $nu_branch = '';
        $nu_employes = '';
        $nu_products = '';
        $nu_smedia = '';
        $nu_geolocation = '';
        $nu_banners = '';
        $nu_auction = '';
        $nu_days_recu = '';
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.user_plan.form', [
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
            'id' => '',
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'highlight' => $highlight,
            'name_es' => $name_es,
            'description_es' => $description_es,
            'name_en' => $name_en,
            'description_en' => $description_en,
            'name_pt' => $name_pt,
            'description_pt' => $description_pt,
            'enable_profile' => $enable_profile,
            'price' => $price,
            'nu_stores' => $nu_stores,
            'nu_branch' => $nu_branch,
            'nu_employes' => $nu_employes,
            'nu_products' => $nu_products,
            'nu_smedia' => $nu_smedia,
            'nu_geolocation' => $nu_geolocation,
            'nu_banners' => $nu_banners,
            'nu_auction' => $nu_auction,
            'nu_days_recu' => $nu_days_recu,
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'name_es' => 'required',
                'description_es' => 'required',
                'name_en' => 'required',
                'description_en' => 'required',
                'name_pt' => 'required',
                'description_pt' => 'required',
                'enable_profile' => 'required',
                'price' => 'required',
                'nu_stores' => 'required',
                'nu_branch' => 'required',
                'nu_employes' => 'required',
                'nu_products' => 'required',
                'nu_smedia' => 'required',
                'nu_geolocation' => 'required',
                'nu_banners' => 'required',
                'nu_auction' => 'required',
                'nu_days_recu' => 'required',
            ]);
            // Crea la instancia
            $data_field = new UserPlan();
            $data_field->enable = $request->get('enable');
            $data_field->highlight = $request->get('highlight');
            $data_field->name_es = $request->get('name_es');
            $data_field->description_es = $request->get('description_es');
            $data_field->name_en = $request->get('name_en');
            $data_field->description_en = $request->get('description_en');
            $data_field->name_pt = $request->get('name_pt');
            $data_field->description_pt = $request->get('description_pt');
            $data_field->enable_profile = $request->get('enable_profile');
            $data_field->price = $request->get('price');
            $data_field->nu_stores = $request->get('nu_stores');
            $data_field->nu_branch = $request->get('nu_branch');
            $data_field->nu_employes = $request->get('nu_employes');
            $data_field->nu_products = $request->get('nu_products');
            $data_field->nu_smedia = $request->get('nu_smedia');
            $data_field->nu_geolocation = $request->get('nu_geolocation');
            $data_field->nu_banners = $request->get('nu_banners');
            $data_field->nu_auction = $request->get('nu_auction');
            $data_field->nu_days_recu = $request->get('nu_days_recu');
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
        $data_item = UserPlan::find($id_a);
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
            $highlight = $data_item->highlight;
            $name_es = $data_item->name_es;
            $description_es = $data_item->description_es;
            $name_en = $data_item->name_en;
            $description_en = $data_item->description_en;
            $name_pt = $data_item->name_pt;
            $description_pt = $data_item->description_pt;
            $enable_profile = $data_item->enable_profile;
            $price = $data_item->price;
            $nu_stores = $data_item->nu_stores;
            $nu_branch = $data_item->nu_branch;
            $nu_employes = $data_item->nu_employes;
            $nu_products = $data_item->nu_products;
            $nu_smedia = $data_item->nu_smedia;
            $nu_geolocation = $data_item->nu_geolocation;
            $nu_banners = $data_item->nu_banners;
            $nu_auction = $data_item->nu_auction;
            $nu_days_recu = $data_item->nu_days_recu;
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.user_plan.form', [
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
                'id' => $id_sis,
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'highlight' => $highlight,
                'name_es' => $name_es,
                'description_es' => $description_es,
                'name_en' => $name_en,
                'description_en' => $description_en,
                'name_pt' => $name_pt,
                'description_pt' => $description_pt,
                'enable_profile' => $enable_profile,
                'price' => $price,
                'nu_stores' => $nu_stores,
                'nu_branch' => $nu_branch,
                'nu_employes' => $nu_employes,
                'nu_products' => $nu_products,
                'nu_smedia' => $nu_smedia,
                'nu_geolocation' => $nu_geolocation,
                'nu_banners' => $nu_banners,
                'nu_auction' => $nu_auction,
                'nu_days_recu' => $nu_days_recu,
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
        $data_item = UserPlan::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'name_es' => 'required',
                    'description_es' => 'required',
                    'name_en' => 'required',
                    'description_en' => 'required',
                    'name_pt' => 'required',
                    'description_pt' => 'required',
                    'enable_profile' => 'required',
                    'price' => 'required',
                    'nu_stores' => 'required',
                    'nu_branch' => 'required',
                    'nu_employes' => 'required',
                    'nu_products' => 'required',
                    'nu_smedia' => 'required',
                    'nu_geolocation' => 'required',
                    'nu_banners' => 'required',
                    'nu_auction' => 'required',
                    'nu_days_recu' => 'required',
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->highlight = $request->get('highlight');
                $data_item->name_es = $request->get('name_es');
                $data_item->description_es = $request->get('description_es');
                $data_item->name_en = $request->get('name_en');
                $data_item->description_en = $request->get('description_en');
                $data_item->name_pt = $request->get('name_pt');
                $data_item->description_pt = $request->get('description_pt');
                $data_item->enable_profile = $request->get('enable_profile');
                $data_item->price = $request->get('price');
                $data_item->nu_stores = $request->get('nu_stores');
                $data_item->nu_branch = $request->get('nu_branch');
                $data_item->nu_employes = $request->get('nu_employes');
                $data_item->nu_products = $request->get('nu_products');
                $data_item->nu_smedia = $request->get('nu_smedia');
                $data_item->nu_geolocation = $request->get('nu_geolocation');
                $data_item->nu_banners = $request->get('nu_banners');
                $data_item->nu_auction = $request->get('nu_auction');
                $data_item->nu_days_recu = $request->get('nu_days_recu');
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
        $data_item = UserPlan::find($id);
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
