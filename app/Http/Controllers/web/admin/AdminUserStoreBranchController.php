<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\UserStoreBranch;
use Buromall\Models\User;
use Buromall\Models\UserStore;
use Buromall\Models\LocaleCountry;
use Buromall\Models\LocaleState;
use Buromall\Models\LocaleCity;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;
use Auth;

class AdminUserStoreBranchController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_user_store_branch_title');
        $this->seo_description = __('seo_admin.local_admin_user_store_branch_description');
        $this->seo_keywords = __('seo_admin.local_admin_user_store_branch_keywords');
        $this->view_icon = 'fas fa-store';
        // Rutas del view and form
        $this->form_view = 'admin.user_store_branch';
        $this->form_show = 'admin.user_store_branch.show';
        $this->form_new = 'admin.user_store_branch.new';
        $this->form_create = 'admin.user_store_branch.store';
        $this->form_edit = 'admin.user_store_branch.edit';
        $this->form_update = 'admin.user_store_branch.update';
        $this->form_delete = 'admin.user_store_branch.delete';
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
        $data_item = UserStoreBranch::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.user_store_branch.main', compact('data_item'), [
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
        $data_item = UserStoreBranch::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $user_id = $data_item->user_id;
            $store_id = $data_item->store_id;
            $name = $data_item->name;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $email = $data_item->email;
            $zipcode = $data_item->zipcode;
            $country_id = $data_item->country_id;
            $state_id = $data_item->state_id;
            $city_id = $data_item->city_id;
            $address = $data_item->address;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            $lun_a = $data_item->lun_a;
            $lun_c = $data_item->lun_c;
            $mar_a = $data_item->mar_a;
            $mar_c = $data_item->mar_c;
            $mier_a = $data_item->mier_a;
            $mier_c = $data_item->mier_c;
            $jue_a = $data_item->jue_a;
            $jue_c = $data_item->jue_c;
            $vier_a = $data_item->vier_a;
            $vier_c = $data_item->vier_c;
            $sab_a = $data_item->sab_a;
            $sab_c = $data_item->sab_c;
            $dom_a = $data_item->dom_a;
            $dom_c = $data_item->dom_c;
            // Carga de combos
            $data_user_id = User::all();
            $data_user_store_id = UserStore::all();
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
            return view('web.admin.user_store_branch.form', [
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
                'data_user_store_id' => $data_user_store_id,
                'data_country_id' => $data_country_id,
                'data_state_id' => $data_state_id,
                'data_city_id' => $data_city_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => $user_id,
                'store_id' => $store_id,
                'name' => $name,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'email' => $email,
                'zipcode' => $zipcode,
                'country_id' => $country_id,
                'state_id' => $state_id,
                'city_id' => $city_id,
                'address' => $address,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'lun_a' => $lun_a,
                'lun_c' => $lun_c,
                'mar_a' => $mar_a,
                'mar_c' => $mar_c,
                'mier_a' => $mier_a,
                'mier_c' => $mier_c,
                'jue_a' => $jue_a,
                'jue_c' => $jue_c,
                'vier_a' => $vier_a,
                'vier_c' => $vier_c,
                'sab_a' => $sab_a,
                'sab_c' => $sab_c,
                'dom_a' => $dom_a,
                'dom_c' => $dom_c
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
        // Carga los datos del usuario
        $user_data = CoreUser::getUser();
        $this->user_sis = $user_data;

        $filter_country = $user_data['countrie_code_user'];
        if (!is_null($filter_country) and $filter_country <> '-') {
            $for_country = $filter_country;
        } else {
            $for_country = 'CO';
        }
        $data_country = LocaleCountry::where('code', $for_country)->first();
        $data_for_country = $data_country->id;

        $filter_city = $user_data['city_user'];
        if (!is_null($filter_city) and $filter_city <> '-') {
            $for_city = $filter_city;
        } else {
            $for_city = 'Bogotá';
        }
        $data_city = LocaleCity::where('name', $for_city)->first();
        // Carga data para el view
        $mytime = Carbon::now();
        $date_created = $mytime->toDateTimeString();
        $date_edit = $mytime->toDateTimeString();
        $enable = 1;
        $user_id = Auth::user()->id;
        $store_id = 0;
        $name = '';
        $description_es = '';
        $keywords_es = '';
        $description_pt = '';
        $keywords_pt = '';
        $description_en = '';
        $keywords_en = '';
        $email = '';
        $zipcode = $user_data['zip_code_user'];
        $country_id = $data_for_country;
        $state_id = $data_city->state_id;
        $city_id = $data_city->id;
        $address = '';
        $areacode = $user_data['area_code_user'];
        $phone = '';
        $mobile = '';
        $latitude = $user_data['latitude_user'];
        $longitude = $user_data['longitude_user'];
        $lun_a = '';
        $lun_c = '';
        $mar_a = '';
        $mar_c = '';
        $mier_a = '';
        $mier_c = '';
        $jue_a = '';
        $jue_c = '';
        $vier_a = '';
        $vier_c = '';
        $sab_a = '';
        $sab_c = '';
        $dom_a = '';
        $dom_c = '';
        // Carga de combos
        $data_user_id = User::all();
        $data_user_store_id = UserStore::all();
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
        return view('web.admin.user_store_branch.form', [
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
            'data_user_store_id' => $data_user_store_id,
            'data_country_id' => $data_country_id,
            'data_state_id' => $data_state_id,
            'data_city_id' => $data_city_id,
            'id' => '',
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'user_id' => $user_id,
            'store_id' => $store_id,
            'name' => $name,
            'description_es' => $description_es,
            'keywords_es' => $keywords_es,
            'description_pt' => $description_pt,
            'keywords_pt' => $keywords_pt,
            'description_en' => $description_en,
            'keywords_en' => $keywords_en,
            'email' => $email,
            'zipcode' => $zipcode,
            'country_id' => $country_id,
            'state_id' => $state_id,
            'city_id' => $city_id,
            'address' => $address,
            'areacode' => $areacode,
            'phone' => $phone,
            'mobile' => $mobile,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'lun_a' => $lun_a,
            'lun_c' => $lun_c,
            'mar_a' => $mar_a,
            'mar_c' => $mar_c,
            'mier_a' => $mier_a,
            'mier_c' => $mier_c,
            'jue_a' => $jue_a,
            'jue_c' => $jue_c,
            'vier_a' => $vier_a,
            'vier_c' => $vier_c,
            'sab_a' => $sab_a,
            'sab_c' => $sab_c,
            'dom_a' => $dom_a,
            'dom_c' => $dom_c
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'user_id' => 'required',
                'store_id' => 'required',
                'name' => 'required|min:5|max:60',
                'description_es' => 'required|min:5|max:150',
                'keywords_es' => 'required',
                'description_en' => 'required|min:5|max:150',
                'keywords_en' => 'required',
                'description_pt' => 'required|min:5|max:150',
                'keywords_pt' => 'required',
                'email' => 'required',
                'country_id' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',
                'zipcode' => 'required',
                'address' => 'required',
                'areacode' => 'required',
                'phone' => 'required',
                'mobile' => 'required',
            ]);
            // Crea la instancia
            $data_field = new UserStoreBranch();
            $data_field->enable = $request->get('enable');
            $data_field->user_id = $request->get('user_id');
            $data_field->store_id = $request->get('store_id');
            $data_field->name = $request->get('name');
            $data_field->description_es = $request->get('description_es');
            $data_field->keywords_es = $request->get('keywords_es');
            $data_field->description_pt = $request->get('description_pt');
            $data_field->keywords_pt = $request->get('keywords_pt');
            $data_field->description_en = $request->get('description_en');
            $data_field->keywords_en = $request->get('keywords_en');
            $data_field->email = $request->get('email');
            $data_field->zipcode = $request->get('zipcode');
            $data_field->country_id = $request->get('country_id');
            $data_field->state_id = $request->get('state_id');
            $data_field->city_id = $request->get('city_id');
            $data_field->address = $request->get('address');
            $data_field->areacode = $request->get('areacode');
            $data_field->phone = $request->get('phone');
            $data_field->mobile = $request->get('mobile');
            $data_field->latitude = $request->get('latitude');
            $data_field->longitude = $request->get('longitude');
            $data_field->lun_a = $request->get('lun_a');
            $data_field->lun_c = $request->get('lun_c');
            $data_field->mar_a = $request->get('mar_a');
            $data_field->mar_c = $request->get('mar_c');
            $data_field->mier_a = $request->get('mier_a');
            $data_field->mier_c = $request->get('mier_c');
            $data_field->jue_a = $request->get('jue_a');
            $data_field->jue_c = $request->get('jue_c');
            $data_field->vier_a = $request->get('vier_a');
            $data_field->vier_c = $request->get('vier_c');
            $data_field->sab_a = $request->get('sab_a');
            $data_field->sab_c = $request->get('sab_c');
            $data_field->dom_a = $request->get('dom_a');
            $data_field->dom_c = $request->get('dom_c');
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
        $data_item = UserStoreBranch::find($id_a);
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
            $store_id = $data_item->store_id;
            $name = $data_item->name;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $email = $data_item->email;
            $zipcode = $data_item->zipcode;
            $country_id = $data_item->country_id;
            $state_id = $data_item->state_id;
            $city_id = $data_item->city_id;
            $address = $data_item->address;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            $lun_a = $data_item->lun_a;
            $lun_c = $data_item->lun_c;
            $mar_a = $data_item->mar_a;
            $mar_c = $data_item->mar_c;
            $mier_a = $data_item->mier_a;
            $mier_c = $data_item->mier_c;
            $jue_a = $data_item->jue_a;
            $jue_c = $data_item->jue_c;
            $vier_a = $data_item->vier_a;
            $vier_c = $data_item->vier_c;
            $sab_a = $data_item->sab_a;
            $sab_c = $data_item->sab_c;
            $dom_a = $data_item->dom_a;
            $dom_c = $data_item->dom_c;
            // Carga de combos
            $data_user_id = User::all();
            $data_user_store_id = UserStore::all();
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
            return view('web.admin.user_store_branch.form', [
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
                'data_user_store_id' => $data_user_store_id,
                'data_country_id' => $data_country_id,
                'data_state_id' => $data_state_id,
                'data_city_id' => $data_city_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => $user_id,
                'store_id' => $store_id,
                'name' => $name,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'email' => $email,
                'zipcode' => $zipcode,
                'country_id' => $country_id,
                'state_id' => $state_id,
                'city_id' => $city_id,
                'address' => $address,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'lun_a' => $lun_a,
                'lun_c' => $lun_c,
                'mar_a' => $mar_a,
                'mar_c' => $mar_c,
                'mier_a' => $mier_a,
                'mier_c' => $mier_c,
                'jue_a' => $jue_a,
                'jue_c' => $jue_c,
                'vier_a' => $vier_a,
                'vier_c' => $vier_c,
                'sab_a' => $sab_a,
                'sab_c' => $sab_c,
                'dom_a' => $dom_a,
                'dom_c' => $dom_c
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
        $data_item = UserStoreBranch::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'user_id' => 'required',
                    'store_id' => 'required',
                    'name' => 'required|min:5|max:60',
                    'description_es' => 'required|min:5|max:150',
                    'keywords_es' => 'required',
                    'description_en' => 'required|min:5|max:150',
                    'keywords_en' => 'required',
                    'description_pt' => 'required|min:5|max:150',
                    'keywords_pt' => 'required',
                    'email' => 'required',
                    'country_id' => 'required',
                    'state_id' => 'required',
                    'city_id' => 'required',
                    'zipcode' => 'required',
                    'address' => 'required',
                    'areacode' => 'required',
                    'phone' => 'required',
                    'mobile' => 'required',
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->user_id = $request->get('user_id');
                $data_item->store_id = $request->get('store_id');
                $data_item->name = $request->get('name');
                $data_item->description_es = $request->get('description_es');
                $data_item->keywords_es = $request->get('keywords_es');
                $data_item->description_pt = $request->get('description_pt');
                $data_item->keywords_pt = $request->get('keywords_pt');
                $data_item->description_en = $request->get('description_en');
                $data_item->keywords_en = $request->get('keywords_en');
                $data_item->email = $request->get('email');
                $data_item->zipcode = $request->get('zipcode');
                $data_item->country_id = $request->get('country_id');
                $data_item->state_id = $request->get('state_id');
                $data_item->city_id = $request->get('city_id');
                $data_item->address = $request->get('address');
                $data_item->areacode = $request->get('areacode');
                $data_item->phone = $request->get('phone');
                $data_item->mobile = $request->get('mobile');
                $data_item->latitude = $request->get('latitude');
                $data_item->longitude = $request->get('longitude');
                $data_item->lun_a = $request->get('lun_a');
                $data_item->lun_c = $request->get('lun_c');
                $data_item->mar_a = $request->get('mar_a');
                $data_item->mar_c = $request->get('mar_c');
                $data_item->mier_a = $request->get('mier_a');
                $data_item->mier_c = $request->get('mier_c');
                $data_item->jue_a = $request->get('jue_a');
                $data_item->jue_c = $request->get('jue_c');
                $data_item->vier_a = $request->get('vier_a');
                $data_item->vier_c = $request->get('vier_c');
                $data_item->sab_a = $request->get('sab_a');
                $data_item->sab_c = $request->get('sab_c');
                $data_item->dom_a = $request->get('dom_a');
                $data_item->dom_c = $request->get('dom_c');
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
        $data_item = UserStoreBranch::find($id);
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

    // Carga del los combos
    public function getBranch(Request $request, $id)
    {
        if ($request->ajax()) {
            $data_cambo = UserStoreBranch::where('store_id', $id)->get();
            return response()->json($data_cambo);
        }
    }
}
