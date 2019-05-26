<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\UserStore;
use Buromall\Models\User;
use Buromall\Models\TypeStore;
use Buromall\Models\LocaleCountry;
use Buromall\Models\LocaleState;
use Buromall\Models\LocaleCity;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;
use Auth;

class AdminUserStoreController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_user_store_title');
        $this->seo_description = __('seo_admin.local_admin_user_store_description');
        $this->seo_keywords = __('seo_admin.local_admin_user_store_keywords');
        $this->view_icon = 'fas fa-store-alt';
        // Rutas del view and form
        $this->form_view = 'admin.user_store';
        $this->form_show = 'admin.user_store.show';
        $this->form_new = 'admin.user_store.new';
        $this->form_create = 'admin.user_store.store';
        $this->form_edit = 'admin.user_store.edit';
        $this->form_update = 'admin.user_store.update';
        $this->form_delete = 'admin.user_store.delete';
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
        $data_item = UserStore::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.user_store.main', compact('data_item'), [
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
        $data_item = UserStore::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $time_zone = $data_item->time_zone;
            $url_name = $data_item->url_name;
            $user_id = $data_item->user_id;
            $type_store_id = $data_item->type_store_id;
            $image = $data_item->image;
            $profile_background = $data_item->profile_background;
            $profile_background_position = $data_item->profile_background_position;
            $name = $data_item->name;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $email = $data_item->email;
            $country_id = $data_item->country_id;
            $state_id = $data_item->state_id;
            $city_id = $data_item->city_id;
            $zipcode = $data_item->zipcode;
            $address = $data_item->address;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $porcent_pay = $data_item->porcent_pay;
            $cent_pay = $data_item->cent_pay;
            $no_company = $data_item->no_company;
            $merchant = $data_item->merchant;
            $name_bank = $data_item->name_bank;
            $name_acount = $data_item->name_acount;
            $no_acount = $data_item->no_acount;
            $iban = $data_item->iban;
            $swift = $data_item->swift;
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
            // Carga de combos
            $data_user_id = User::all();
            $data_type_store_id = TypeStore::all();
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
            return view('web.admin.user_store.form', [
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
                'data_type_store_id' => $data_type_store_id,
                'data_country_id' => $data_country_id,
                'data_state_id' => $data_state_id,
                'data_city_id' => $data_city_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'time_zone' => $time_zone,
                'url_name' => $url_name,
                'user_id' => $user_id,
                'type_store_id' => $type_store_id,
                'image' => $image,
                'profile_background' => $profile_background,
                'profile_background_position' => $profile_background_position,
                'name' => $name,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'email' => $email,
                'country_id' => $country_id,
                'state_id' => $state_id,
                'city_id' => $city_id,
                'zipcode' => $zipcode,
                'address' => $address,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'porcent_pay' => $porcent_pay,
                'cent_pay' => $cent_pay,
                'no_company' => $no_company,
                'merchant' => $merchant,
                'name_bank' => $name_bank,
                'name_acount' => $name_acount,
                'no_acount' => $no_acount,
                'iban' => $iban,
                'swift' => $swift,
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
                'skype_enable' => $skype_enable
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
        if(!is_null($filter_country) AND $filter_country <> '-') {
            $for_country = $filter_country;
        } else {
            $for_country = 'CO';
        }
        $data_country = LocaleCountry::where('code', $for_country)->first();
        $data_for_country = $data_country->id;

        $filter_city = $user_data['city_user'];
        if(!is_null($filter_city) AND $filter_city <> '-') {
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
        $time_zone = $user_data['timezone'];
        $url_name = '';
        $user_id = Auth::user()->id;
        $type_store_id = '';
        $image = 'imagens/stores/default-store.png';
        $profile_background = 'imagens/stores/default-background.png';
        $profile_background_position = '0px';
        $name = '';
        $description_es = '';
        $keywords_es = '';
        $description_en = '';
        $keywords_en = '';
        $description_pt = '';
        $keywords_pt = '';
        $email = '';
        $country_id = $data_for_country;
        $state_id = $data_city->state_id;
        $city_id = $data_city->id;
        $zipcode = $user_data['zip_code_user'];
        $address = '';
        $areacode = $user_data['area_code_user'];
        $phone = '';
        $mobile = '';
        $porcent_pay = env('APP_PORCENT_PAY');
        $cent_pay = env('APP_CENT_PAY');
        $no_company = '';
        $merchant = '';
        $name_bank = '';
        $name_acount = '';
        $no_acount = '';
        $iban = '';
        $swift = '';
        $facebook = '';
        $facebook_enable = 0;
        $twitter = '';
        $twitter_enable = 0;
        $instagram = '';
        $instagram_enable = 0;
        $pinterest = '';
        $pinterest_enable = 0;
        $youtube = '';
        $youtube_enable = 0;
        $linkedin = '';
        $linkedin_enable = 0;
        $skype = '';
        $skype_enable = 0;
        // Carga de combos
        $data_user_id = User::all();
        $data_type_store_id = TypeStore::all();
        $data_country_id = LocaleCountry::all();
        $data_state_id = LocaleState::where('country_id', $country_id)->get();
        $data_city_id = LocaleCity::where('state_id', $state_id)->get();
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Render del view
        return view('web.admin.user_store.form', [
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
            'data_type_store_id' => $data_type_store_id,
            'data_country_id' => $data_country_id,
            'data_state_id' => $data_state_id,
            'data_city_id' => $data_city_id,
            'id' => '',
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'time_zone' => $time_zone,
            'url_name' => $url_name,
            'user_id' => $user_id,
            'type_store_id' => $type_store_id,
            'image' => $image,
            'profile_background' => $profile_background,
            'profile_background_position' => $profile_background_position,
            'name' => $name,
            'description_es' => $description_es,
            'keywords_es' => $keywords_es,
            'description_en' => $description_en,
            'keywords_en' => $keywords_en,
            'description_pt' => $description_pt,
            'keywords_pt' => $keywords_pt,
            'email' => $email,
            'country_id' => $country_id,
            'state_id' => $state_id,
            'city_id' => $city_id,
            'zipcode' => $zipcode,
            'address' => $address,
            'areacode' => $areacode,
            'phone' => $phone,
            'mobile' => $mobile,
            'porcent_pay' => $porcent_pay,
            'cent_pay' => $cent_pay,
            'no_company' => $no_company,
            'merchant' => $merchant,
            'name_bank' => $name_bank,
            'name_acount' => $name_acount,
            'no_acount' => $no_acount,
            'iban' => $iban,
            'swift' => $swift,
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
            'skype_enable' => $skype_enable
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'user_id' => 'required',
                'time_zone' => 'required',
                'type_store_id' => 'required',
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
                'no_company' => 'required',
                'name_bank' => 'required',
                'name_acount' => 'required',
                'no_acount' => 'required',
                'facebook' => 'max:60',
                'twitter' => 'max:60',
                'instagram' => 'max:60',
                'pinterest' => 'max:60',
                'youtube' => 'max:60',
                'linkedin' => 'max:60',
                'skype' => 'max:60'
            ]);
            // Crea la instancia
            $data_field = new UserStore();
            $data_field->enable = $request->get('enable');
            $data_field->time_zone = $request->get('time_zone');
            $data_field->url_name = CoreUser::friendly_Url($request->get('name'));
            $data_field->user_id = $request->get('user_id');
            $data_field->type_store_id = $request->get('type_store_id');
            $data_field->image = 'imagens/stores/default-store.png';
            $data_field->profile_background = 'imagens/stores/default-background.png';
            $data_field->profile_background_position = '0px';
            $data_field->name = $request->get('name');
            $data_field->description_es = $request->get('description_es');
            $data_field->keywords_es = $request->get('keywords_es');
            $data_field->description_en = $request->get('description_en');
            $data_field->keywords_en = $request->get('keywords_en');
            $data_field->description_pt = $request->get('description_pt');
            $data_field->keywords_pt = $request->get('keywords_pt');
            $data_field->email = $request->get('email');
            $data_field->country_id = $request->get('country_id');
            $data_field->state_id = $request->get('state_id');
            $data_field->city_id = $request->get('city_id');
            $data_field->zipcode = $request->get('zipcode');
            $data_field->address = $request->get('address');
            $data_field->areacode = $request->get('areacode');
            $data_field->phone = $request->get('phone');
            $data_field->mobile = $request->get('mobile');
            $data_field->porcent_pay = env('APP_PORCENT_PAY');
            $data_field->cent_pay = env('APP_CENT_PAY');
            $data_field->no_company = $request->get('no_company');
            $data_field->merchant = $request->get('merchant');
            $data_field->name_bank = $request->get('name_bank');
            $data_field->name_acount = $request->get('name_acount');
            $data_field->no_acount = $request->get('no_acount');
            $data_field->iban = $request->get('iban');
            $data_field->swift = $request->get('swift');
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
        $data_item = UserStore::find($id_a);
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
            $time_zone = $data_item->time_zone;
            $url_name = $data_item->url_name;
            $user_id = $data_item->user_id;
            $type_store_id = $data_item->type_store_id;
            $image = $data_item->image;
            $profile_background = $data_item->profile_background;
            $profile_background_position = $data_item->profile_background_position;
            $name = $data_item->name;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $email = $data_item->email;
            $country_id = $data_item->country_id;
            $state_id = $data_item->state_id;
            $city_id = $data_item->city_id;
            $zipcode = $data_item->zipcode;
            $address = $data_item->address;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $porcent_pay = $data_item->porcent_pay;
            $cent_pay = $data_item->cent_pay;
            $no_company = $data_item->no_company;
            $merchant = $data_item->merchant;
            $name_bank = $data_item->name_bank;
            $name_acount = $data_item->name_acount;
            $no_acount = $data_item->no_acount;
            $iban = $data_item->iban;
            $swift = $data_item->swift;
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
            // Carga de combos
            $data_user_id = User::all();
            $data_type_store_id = TypeStore::all();
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
            return view('web.admin.user_store.form', [
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
                'data_type_store_id' => $data_type_store_id,
                'data_country_id' => $data_country_id,
                'data_state_id' => $data_state_id,
                'data_city_id' => $data_city_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'time_zone' => $time_zone,
                'url_name' => $url_name,
                'user_id' => $user_id,
                'type_store_id' => $type_store_id,
                'image' => $image,
                'profile_background' => $profile_background,
                'profile_background_position' => $profile_background_position,
                'name' => $name,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'email' => $email,
                'country_id' => $country_id,
                'state_id' => $state_id,
                'city_id' => $city_id,
                'zipcode' => $zipcode,
                'address' => $address,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'porcent_pay' => $porcent_pay,
                'cent_pay' => $cent_pay,
                'no_company' => $no_company,
                'merchant' => $merchant,
                'name_bank' => $name_bank,
                'name_acount' => $name_acount,
                'no_acount' => $no_acount,
                'iban' => $iban,
                'swift' => $swift,
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
                'skype_enable' => $skype_enable
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
        $data_item = UserStore::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'user_id' => 'required',
                    'time_zone' => 'required',
                    'type_store_id' => 'required',
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
                    'no_company' => 'required',
                    'name_bank' => 'required',
                    'name_acount' => 'required',
                    'no_acount' => 'required',
                    'facebook' => 'max:60',
                    'twitter' => 'max:60',
                    'instagram' => 'max:60',
                    'pinterest' => 'max:60',
                    'youtube' => 'max:60',
                    'linkedin' => 'max:60',
                    'skype' => 'max:60'
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->time_zone = $request->get('time_zone');
                $data_item->url_name = $request->get('url_name');
                $data_item->user_id = $request->get('user_id');
                $data_item->type_store_id = $request->get('type_store_id');
                $data_item->image = $request->get('image');
                $data_item->profile_background = $request->get('profile_background');
                $data_item->profile_background_position = $request->get('profile_background_position');
                $data_item->name = $request->get('name');
                $data_item->description_es = $request->get('description_es');
                $data_item->keywords_es = $request->get('keywords_es');
                $data_item->description_en = $request->get('description_en');
                $data_item->keywords_en = $request->get('keywords_en');
                $data_item->description_pt = $request->get('description_pt');
                $data_item->keywords_pt = $request->get('keywords_pt');
                $data_item->email = $request->get('email');
                $data_item->country_id = $request->get('country_id');
                $data_item->state_id = $request->get('state_id');
                $data_item->city_id = $request->get('city_id');
                $data_item->zipcode = $request->get('zipcode');
                $data_item->address = $request->get('address');
                $data_item->areacode = $request->get('areacode');
                $data_item->phone = $request->get('phone');
                $data_item->mobile = $request->get('mobile');
                $data_item->porcent_pay = $request->get('porcent_pay');
                $data_item->cent_pay = $request->get('cent_pay');
                $data_item->no_company = $request->get('no_company');
                $data_item->merchant = $request->get('merchant');
                $data_item->name_bank = $request->get('name_bank');
                $data_item->name_acount = $request->get('name_acount');
                $data_item->no_acount = $request->get('no_acount');
                $data_item->iban = $request->get('iban');
                $data_item->swift = $request->get('swift');
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
        $data_item = UserStore::find($id);
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
