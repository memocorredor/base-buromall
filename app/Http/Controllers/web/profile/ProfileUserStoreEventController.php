<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\UserStoreEvent;
use Buromall\Models\User;
use Buromall\Models\UserStore;
use Buromall\Models\StatusProduct;
use Buromall\Models\TypeTransaction;
use Buromall\Models\TypeEvent;
use Buromall\Models\UserItemMedia;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;
use Auth;
use File;
use Image;

class ProfileUserStoreEventController extends Controller
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
        $this->seo_title = __('seo_profile.local_profile_user_store_event_title');
        $this->seo_description = __('seo_profile.local_profile_user_store_event_description');
        $this->seo_keywords = __('seo_profile.local_profile_user_store_event_keywords');
        $this->view_icon = 'fas fa-theater-masks';
        // Rutas del view and form
        $this->form_view = 'profile.user_event';
        $this->form_show = 'profile.user_event.show';
        $this->form_new = 'profile.user_event.new';
        $this->form_create = 'profile.user_event.store';
        $this->form_edit = 'profile.user_event.edit';
        $this->form_update = 'profile.user_event.update';
        $this->form_delete = 'profile.user_event.delete';
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
        $data_item = UserStoreEvent::where('user_id', Auth::user()->id)->paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.profile.user_store_event.main', compact('data_item'), [
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
        $data_item = UserStoreEvent::where('id', $id_a)
                                   ->where('user_id', Auth::user()->id)->get();
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $store_id = $data_item->store_id;
            $status_product_id = $data_item->status_product_id;
            $type_transaction_id = $data_item->type_transaction_id;
            $type_event_id = $data_item->type_event_id;
            $url_title_es = $data_item->url_title_es;
            $title_es = $data_item->title_es;
            $text_es = $data_item->text_es;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $url_title_en = $data_item->url_title_en;
            $title_en = $data_item->title_en;
            $text_en = $data_item->text_en;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $url_title_pt = $data_item->url_title_pt;
            $title_pt = $data_item->title_pt;
            $text_pt = $data_item->text_pt;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $price = $data_item->price;
            $quantity = $data_item->quantity;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            $token = $data_item->token;
            // Carga de combos
            $data_user_store_id = UserStore::where('user_id', Auth::user()->id)->get();
            $data_status_product_id = StatusProduct::all();
            $data_type_transaction_id = TypeTransaction::all();
            $data_type_event_id = TypeEvent::all();
            $data_pictures = UserItemMedia::where('event_id', $id_a)->get();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.profile.user_store_event.form', [
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
                'data_user_store_id' => $data_user_store_id,
                'data_status_product_id' => $data_status_product_id,
                'data_type_transaction_id' => $data_type_transaction_id,
                'data_type_event_id' => $data_type_event_id,
                'data_pictures' => $data_pictures,
                'id' => $id_sis,
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => Auth::user()->username,
                'store_id' => $store_id,
                'status_product_id' => $status_product_id,
                'type_transaction_id' => $type_transaction_id,
                'type_event_id' => $type_event_id,
                'url_title_es' => $url_title_es,
                'title_es' => $title_es,
                'text_es' => $text_es,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'url_title_en' => $url_title_en,
                'title_en' => $title_en,
                'text_en' => $text_en,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'url_title_pt' => $url_title_pt,
                'title_pt' => $title_pt,
                'text_pt' => $text_pt,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'price' => $price,
                'quantity' => $quantity,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'token' => $token
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
        $store_id = 0;
        $status_product_id = '';
        $type_transaction_id = '';
        $type_event_id = '';
        $url_title_es = '';
        $title_es = '';
        $text_es = '';
        $description_es = '';
        $keywords_es = '';
        $url_title_en = '';
        $title_en = '';
        $text_en = '';
        $description_en = '';
        $keywords_en = '';
        $url_title_pt = '';
        $title_pt = '';
        $text_pt = '';
        $description_pt = '';
        $keywords_pt = '';
        $price = '';
        $quantity = '';
        $latitude = '';
        $longitude = '';
        $token = '';
        // Carga de combos
        $data_user_store_id = UserStore::where('user_id', Auth::user()->id)->get();
        $data_status_product_id = StatusProduct::all();
        $data_type_transaction_id = TypeTransaction::all();
        $data_type_event_id = TypeEvent::all();
        $data_pictures = 0;
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.profile.user_store_event.form', [
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
            'data_user_store_id' => $data_user_store_id,
            'data_status_product_id' => $data_status_product_id,
            'data_type_transaction_id' => $data_type_transaction_id,
            'data_type_event_id' => $data_type_event_id,
            'data_pictures' => $data_pictures,
            'id' => '',
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'user_id' => Auth::user()->username,
            'store_id' => $store_id,
            'status_product_id' => $status_product_id,
            'type_transaction_id' => $type_transaction_id,
            'type_event_id' => $type_event_id,
            'url_title_es' => $url_title_es,
            'title_es' => $title_es,
            'text_es' => $text_es,
            'description_es' => $description_es,
            'keywords_es' => $keywords_es,
            'url_title_en' => $url_title_en,
            'title_en' => $title_en,
            'text_en' => $text_en,
            'description_en' => $description_en,
            'keywords_en' => $keywords_en,
            'url_title_pt' => $url_title_pt,
            'title_pt' => $title_pt,
            'text_pt' => $text_pt,
            'description_pt' => $description_pt,
            'keywords_pt' => $keywords_pt,
            'price' => $price,
            'quantity' => $quantity,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'token' => $token
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'store_id' => 'required',
                'status_product_id' => 'required',
                'type_transaction_id' => 'required',
                'type_event_id' => 'required',
                'title_es' => 'required',
                'text_es' => 'required',
                'description_es' => 'required',
                'keywords_es' => 'required',
                'title_en' => 'required',
                'text_en' => 'required',
                'description_en' => 'required',
                'keywords_en' => 'required',
                'title_pt' => 'required',
                'text_pt' => 'required',
                'description_pt' => 'required',
                'keywords_pt' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            // Crea la instancia
            $data_field = new UserStoreEvent();
            $data_field->enable = $request->get('enable');
            $data_field->user_id = Auth::user()->id;
            $data_field->store_id = $request->get('store_id');
            $data_field->status_product_id = $request->get('status_product_id');
            $data_field->type_transaction_id = $request->get('type_transaction_id');
            $data_field->type_event_id = $request->get('type_event_id');
            $data_field->url_title_es = CoreUser::friendly_Url($request->get('title_es'));
            $data_field->title_es = $request->get('title_es');
            $data_field->text_es = $request->get('text_es');
            $data_field->description_es = $request->get('description_es');
            $data_field->keywords_es = $request->get('keywords_es');
            $data_field->url_title_en = CoreUser::friendly_Url($request->get('title_en'));
            $data_field->title_en = $request->get('title_en');
            $data_field->text_en = $request->get('text_en');
            $data_field->description_en = $request->get('description_en');
            $data_field->keywords_en = $request->get('keywords_en');
            $data_field->url_title_pt = CoreUser::friendly_Url($request->get('title_pt'));
            $data_field->title_pt = $request->get('title_pt');
            $data_field->text_pt = $request->get('text_pt');
            $data_field->description_pt = $request->get('description_pt');
            $data_field->keywords_pt = $request->get('keywords_pt');
            $data_field->price = $request->get('price');
            $data_field->quantity = $request->get('quantity');
            $data_field->latitude = $request->get('latitude');
            $data_field->longitude = $request->get('longitude');
            $data_field->token = $request->get('token');
            //Accion de guardar la info
            $saved = $data_field->save();
            //ID para guardar las fotos
            $next_events_id = $data_field->id;
            //check if image exist
            if ($request->hasFile('image')) {
                $images = $request->file('image');
                //Ruta para guardar
                $url_save_or = 'upload/events/' . $next_events_id . '/';
                //setting flag for condition
                $org_img = $thm_img = true;
                // create new directory for uploading image if doesn't exist
                if (!File::exists($url_save_or)) {
                    $org_img = File::makeDirectory($url_save_or, 0777, true);
                }
                $count = 1;
                // loop through each image to save and upload
                foreach ($images as $key => $image) {
                    //create new instance of Photo class
                    $newPhoto = new UserItemMedia();
                    //get file name of image  and concatenate with 4 random integer for unique
                    $filename = rand(1111, 9999) . time() . '.' . $image->getClientOriginalExtension();
                    //path of image for upload
                    $org_path = $url_save_or . $filename;
                    //Campos para guardar la info
                    $newPhoto->enable = 1;
                    $newPhoto->user_id = Auth::user()->id;
                    $newPhoto->product_id = 0;
                    $newPhoto->cupon_id = 0;
                    $newPhoto->event_id = $next_events_id;
                    $newPhoto->classified_id = 0;
                    $newPhoto->news_id = 0;
                    $newPhoto->post_id = 0;
                    $newPhoto->order = $count;
                    $newPhoto->iframe = 0;
                    $newPhoto->url = $url_save_or . $filename;
                    $newPhoto->alt_img = '';
                    $newPhoto->description = '';
                    //don't upload file when unable to save name to database
                    if (!$newPhoto->save()) {
                        return false;
                    }
                    // upload image to server
                    if (($org_img) == true) {
                        Image::make($image)->fit(980, 520, function ($constraint) {
                            $constraint->upsize();
                        })->save($org_path);
                    }
                }
                $count++;
            }
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
        $data_item = UserStoreEvent::where('id', $id_a)
                                   ->where('user_id', Auth::user()->id)->get();
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
            $store_id = $data_item->store_id;
            $status_product_id = $data_item->status_product_id;
            $type_transaction_id = $data_item->type_transaction_id;
            $type_event_id = $data_item->type_event_id;
            $url_title_es = $data_item->url_title_es;
            $title_es = $data_item->title_es;
            $text_es = $data_item->text_es;
            $description_es = $data_item->description_es;
            $keywords_es = $data_item->keywords_es;
            $url_title_en = $data_item->url_title_en;
            $title_en = $data_item->title_en;
            $text_en = $data_item->text_en;
            $description_en = $data_item->description_en;
            $keywords_en = $data_item->keywords_en;
            $url_title_pt = $data_item->url_title_pt;
            $title_pt = $data_item->title_pt;
            $text_pt = $data_item->text_pt;
            $description_pt = $data_item->description_pt;
            $keywords_pt = $data_item->keywords_pt;
            $price = $data_item->price;
            $quantity = $data_item->quantity;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            $token = $data_item->token;
            // Carga de combos
            $data_user_store_id = UserStore::where('user_id', Auth::user()->id)->get();
            $data_status_product_id = StatusProduct::all();
            $data_type_transaction_id = TypeTransaction::all();
            $data_type_event_id = TypeEvent::all();
            $data_pictures = UserItemMedia::where('event_id', $id_a)->get();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.profile.user_store_event.form', [
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
                'data_user_store_id' => $data_user_store_id,
                'data_status_product_id' => $data_status_product_id,
                'data_type_transaction_id' => $data_type_transaction_id,
                'data_type_event_id' => $data_type_event_id,
                'data_pictures' => $data_pictures,
                'id' => $id_sis,
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => Auth::user()->username,
                'store_id' => $store_id,
                'status_product_id' => $status_product_id,
                'type_transaction_id' => $type_transaction_id,
                'type_event_id' => $type_event_id,
                'url_title_es' => $url_title_es,
                'title_es' => $title_es,
                'text_es' => $text_es,
                'description_es' => $description_es,
                'keywords_es' => $keywords_es,
                'url_title_en' => $url_title_en,
                'title_en' => $title_en,
                'text_en' => $text_en,
                'description_en' => $description_en,
                'keywords_en' => $keywords_en,
                'url_title_pt' => $url_title_pt,
                'title_pt' => $title_pt,
                'text_pt' => $text_pt,
                'description_pt' => $description_pt,
                'keywords_pt' => $keywords_pt,
                'price' => $price,
                'quantity' => $quantity,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'token' => $token
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
        $data_item = UserStoreEvent::where('id', $id)
                                   ->where('user_id', Auth::user()->id)->get();
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'store_id' => 'required',
                    'status_product_id' => 'required',
                    'type_transaction_id' => 'required',
                    'type_event_id' => 'required',
                    'title_es' => 'required',
                    'text_es' => 'required',
                    'description_es' => 'required',
                    'keywords_es' => 'required',
                    'title_en' => 'required',
                    'text_en' => 'required',
                    'description_en' => 'required',
                    'keywords_en' => 'required',
                    'title_pt' => 'required',
                    'text_pt' => 'required',
                    'description_pt' => 'required',
                    'keywords_pt' => 'required',
                    'price' => 'required',
                    'quantity' => 'required',
                    'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->user_id = Auth::user()->id;
                $data_item->store_id = $request->get('store_id');
                $data_item->status_product_id = $request->get('status_product_id');
                $data_item->type_transaction_id = $request->get('type_transaction_id');
                $data_item->type_event_id = $request->get('type_event_id');
                $data_item->url_title_es = $request->get('url_title_es');
                $data_item->title_es = $request->get('title_es');
                $data_item->text_es = $request->get('text_es');
                $data_item->description_es = $request->get('description_es');
                $data_item->keywords_es = $request->get('keywords_es');
                $data_item->url_title_en = $request->get('url_title_en');
                $data_item->title_en = $request->get('title_en');
                $data_item->text_en = $request->get('text_en');
                $data_item->description_en = $request->get('description_en');
                $data_item->keywords_en = $request->get('keywords_en');
                $data_item->url_title_pt = $request->get('url_title_pt');
                $data_item->title_pt = $request->get('title_pt');
                $data_item->text_pt = $request->get('text_pt');
                $data_item->description_pt = $request->get('description_pt');
                $data_item->keywords_pt = $request->get('keywords_pt');
                $data_item->price = $request->get('price');
                $data_item->quantity = $request->get('quantity');
                $data_item->latitude = $request->get('latitude');
                $data_item->longitude = $request->get('longitude');
                $data_item->token = $request->get('token');
                //Accion de guardar la info
                $saved = $data_item->save();
                //ID para guardar las fotos
                $next_events_id = $data_item->id;
                //check if image exist
                if ($request->hasFile('image')) {
                    $images = $request->file('image');
                    //Ruta para guardar
                    $url_save_or = 'upload/events/' . $next_events_id . '/';
                    //setting flag for condition
                    $org_img = $thm_img = true;
                    // create new directory for uploading image if doesn't exist
                    if (!File::exists($url_save_or)) {
                        $org_img = File::makeDirectory($url_save_or, 0777, true);
                    }
                    $count = 1;
                    // loop through each image to save and upload
                    foreach ($images as $key => $image) {
                        //create new instance of Photo class
                        $newPhoto = new UserItemMedia();
                        //get file name of image  and concatenate with 4 random integer for unique
                        $filename = rand(1111, 9999) . time() . '.' . $image->getClientOriginalExtension();
                        //path of image for upload
                        $org_path = $url_save_or . $filename;
                        //Campos para guardar la info
                        $newPhoto->enable = 1;
                        $newPhoto->user_id = Auth::user()->id;
                        $newPhoto->product_id = 0;
                        $newPhoto->cupon_id = 0;
                        $newPhoto->event_id = $next_events_id;
                        $newPhoto->classified_id = 0;
                        $newPhoto->news_id = 0;
                        $newPhoto->post_id = 0;
                        $newPhoto->order = $count;
                        $newPhoto->iframe = 0;
                        $newPhoto->url = $url_save_or . $filename;
                        $newPhoto->alt_img = '';
                        $newPhoto->description = '';
                        //don't upload file when unable to save name to database
                        if (!$newPhoto->save()) {
                            return false;
                        }
                        // upload image to server
                        if (($org_img) == true) {
                            Image::make($image)->fit(980, 520, function ($constraint) {
                                $constraint->upsize();
                            })->save($org_path);
                        }
                    }
                    $count++;
                }
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
        $data_item = UserStoreEvent::where('id', $id)
                                   ->where('user_id', Auth::user()->id)->get();
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
