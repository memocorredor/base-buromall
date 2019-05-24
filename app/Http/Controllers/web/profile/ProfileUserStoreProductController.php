<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\UserStoreProduct;
use Buromall\Models\User;
use Buromall\Models\LocaleCountry;
use Buromall\Models\UserStore;
use Buromall\Models\UserStoreBranch;
use Buromall\Models\StatusProduct;
use Buromall\Models\CgBrand;
use Buromall\Models\CgDepartament;
use Buromall\Models\CgCategorie;
use Buromall\Models\CgSubCategorie;
use Buromall\Models\TypeTransaction;
use Buromall\Models\TypeAuction;
use Buromall\Models\TypeShipping;
use Buromall\Models\PayTax;
use Buromall\Models\UserItemMedia;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;
use Auth;
use File;
use Image;

class ProfileUserStoreProductController extends Controller
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
        $this->seo_title = __('seo_profile.local_profile_user_store_product_title');
        $this->seo_description = __('seo_profile.local_profile_user_store_product_description');
        $this->seo_keywords = __('seo_profile.local_profile_user_store_product_keywords');
        $this->view_icon = 'fas fa-gift';
        // Rutas del view and form
        $this->form_view = 'profile.user_product';
        $this->form_show = 'profile.user_product.show';
        $this->form_new = 'profile.user_product.new';
        $this->form_create = 'profile.user_product.store';
        $this->form_edit = 'profile.user_product.edit';
        $this->form_update = 'profile.user_product.update';
        $this->form_delete = 'profile.user_product.delete';
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
        $data_item = UserStoreProduct::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.profile.user_store_product.main', compact('data_item'), [
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
        $data_item = UserStoreProduct::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $user_id = $data_item->user_id;
            $country_id = $data_item->country_id;
            $store_id = $data_item->store_id;
            $branch_id = $data_item->branch_id;
            $status_product_id = $data_item->status_product_id;
            $departaments_id = $data_item->departaments_id;
            $categories_id = $data_item->categories_id;
            $categories_sub_id = $data_item->categories_sub_id;
            $brand_id = $data_item->brand_id;
            $no_ref = $data_item->no_ref;
            $no_ean = $data_item->no_ean;
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
            $type_auction_id = $data_item->type_auction_id;
            $type_transaction_id = $data_item->type_transaction_id;
            $tax_id = $data_item->tax_id;
            $p_size = $data_item->p_size;
            $p_color = $data_item->p_color;
            $price_incrise = $data_item->price_incrise;
            $price = $data_item->price;
            $descount = $data_item->descount;
            $quantity = $data_item->quantity;
            $price_ini = $data_item->price_ini;
            $price_reserve = $data_item->price_reserve;
            $increase_bid = $data_item->increase_bid;
            $min_biders = $data_item->min_biders;
            $private_auction = $data_item->private_auction;
            $buyitnow = $data_item->buyitnow;
            $enable_deals = $data_item->enable_deals;
            $automatic_re_enter = $data_item->automatic_re_enter;
            $type_shipping_id = $data_item->type_shipping_id;
            $prod_weight = $data_item->prod_weight;
            $prod_long = $data_item->prod_long;
            $prod_width = $data_item->prod_width;
            $prod_high = $data_item->prod_high;
            $insurance = $data_item->insurance;
            $shipping_price = $data_item->shipping_price;
            $shipping_description_es = $data_item->shipping_description_es;
            $shipping_description_en = $data_item->shipping_description_en;
            $shipping_description_pt = $data_item->shipping_description_pt;
            $url_web_show = $data_item->url_web_show;
            $accept_returns = $data_item->accept_returns;
            $token = $data_item->token;
            // Carga de combos
            $data_user_id = User::all();
            $data_country_id = LocaleCountry::all();
            $data_user_store_id = UserStore::all();
            $data_user_store_branch_id = UserStoreBranch::all();
            $data_status_product_id = StatusProduct::all();
            $data_cg_brand_id = CgBrand::all();
            $data_departaments_id = CgDepartament::all();
            $data_categories_id = CgCategorie::where('departaments_id', $departaments_id)->get();
            $data_categories_sub_id = CgSubCategorie::where('categories_id', $categories_id)->get();
            $data_type_transaction_id = TypeTransaction::all();
            $data_type_auction_id = TypeAuction::all();
            $data_pay_tax_id = PayTax::all();
            $data_type_shipping_id = TypeShipping::all();
            $data_pictures = UserItemMedia::where('product_id', $id_a)->get();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.profile.user_store_product.form', [
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
                'data_country_id' => $data_country_id,
                'data_user_store_id' => $data_user_store_id,
                'data_user_store_branch_id' => $data_user_store_branch_id,
                'data_status_product_id' => $data_status_product_id,
                'data_cg_brand_id' => $data_cg_brand_id,
                'data_departaments_id' => $data_departaments_id,
                'data_categories_id' => $data_categories_id,
                'data_categories_sub_id' => $data_categories_sub_id,
                'data_type_transaction_id' => $data_type_transaction_id,
                'data_type_auction_id' => $data_type_auction_id,
                'data_pay_tax_id' => $data_pay_tax_id,
                'data_type_shipping_id' => $data_type_shipping_id,
                'data_pictures' => $data_pictures,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => $user_id,
                'country_id' => $country_id,
                'store_id' => $store_id,
                'branch_id' => $branch_id,
                'status_product_id' => $status_product_id,
                'departaments_id' => $departaments_id,
                'categories_id' => $categories_id,
                'categories_sub_id' => $categories_sub_id,
                'brand_id' => $brand_id,
                'no_ref' => $no_ref,
                'no_ean' => $no_ean,
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
                'type_auction_id' => $type_auction_id,
                'type_transaction_id' => $type_transaction_id,
                'tax_id' => $tax_id,
                'p_size' => $p_size,
                'p_color' => $p_color,
                'price_incrise' => $price_incrise,
                'price' => $price,
                'descount' => $descount,
                'quantity' => $quantity,
                'price_ini' => $price_ini,
                'price_reserve' => $price_reserve,
                'increase_bid' => $increase_bid,
                'min_biders' => $min_biders,
                'private_auction' => $private_auction,
                'buyitnow' => $buyitnow,
                'enable_deals' => $enable_deals,
                'automatic_re_enter' => $automatic_re_enter,
                'type_shipping_id' => $type_shipping_id,
                'prod_weight' => $prod_weight,
                'prod_long' => $prod_long,
                'prod_width' => $prod_width,
                'prod_high' => $prod_high,
                'insurance' => $insurance,
                'shipping_price' => $shipping_price,
                'shipping_description_es' => $shipping_description_es,
                'shipping_description_en' => $shipping_description_en,
                'shipping_description_pt' => $shipping_description_pt,
                'url_web_show' => $url_web_show,
                'accept_returns' => $accept_returns,
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
        $user_id = Auth::user()->id;
        $country_id = 0;
        $store_id = 0;
        $branch_id = 0;
        $status_product_id = 0;
        $departaments_id = 0;
        $categories_id = 0;
        $categories_sub_id = 0;
        $brand_id = 0;
        $no_ref = '';
        $no_ean = '';
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
        $type_auction_id = '';
        $type_transaction_id = '';
        $tax_id = '';
        $p_size = '';
        $p_color = '';
        $price_incrise = '';
        $price = '';
        $descount = '';
        $quantity = '';
        $price_ini = '';
        $price_reserve = '';
        $increase_bid = '';
        $min_biders = '';
        $private_auction = '';
        $buyitnow = '';
        $enable_deals = '';
        $automatic_re_enter = '';
        $type_shipping_id = '';
        $prod_weight = '';
        $prod_long = '';
        $prod_width = '';
        $prod_high = '';
        $insurance = '';
        $shipping_price = '';
        $shipping_description_es = '';
        $shipping_description_en = '';
        $shipping_description_pt = '';
        $url_web_show = '';
        $accept_returns = 0;
        $token = '';
        // Carga de combos
        $data_user_id = User::all();
        $data_country_id = LocaleCountry::all();
        $data_user_store_id = UserStore::all();
        $data_user_store_branch_id = UserStoreBranch::all();
        $data_status_product_id = StatusProduct::all();
        $data_cg_brand_id = CgBrand::all();
        $data_departaments_id = CgDepartament::all();
        $data_categories_id = CgCategorie::where('departaments_id', '1')->get();
        $data_categories_sub_id = CgSubCategorie::where('categories_id', '1')->get();
        $data_type_transaction_id = TypeTransaction::all();
        $data_type_auction_id = TypeAuction::all();
        $data_pay_tax_id = PayTax::all();
        $data_type_shipping_id = TypeShipping::all();
        $data_pictures = 0;
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.profile.user_store_product.form', [
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
            'data_country_id' => $data_country_id,
            'data_user_store_id' => $data_user_store_id,
            'data_user_store_branch_id' => $data_user_store_branch_id,
            'data_status_product_id' => $data_status_product_id,
            'data_cg_brand_id' => $data_cg_brand_id,
            'data_departaments_id' => $data_departaments_id,
            'data_categories_id' => $data_categories_id,
            'data_categories_sub_id' => $data_categories_sub_id,
            'data_type_transaction_id' => $data_type_transaction_id,
            'data_type_auction_id' => $data_type_auction_id,
            'data_pay_tax_id' => $data_pay_tax_id,
            'data_type_shipping_id' => $data_type_shipping_id,
            'data_pictures' => $data_pictures,
            'id' => '',
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'user_id' => $user_id,
            'country_id' => $country_id,
            'store_id' => $store_id,
            'branch_id' => $branch_id,
            'status_product_id' => $status_product_id,
            'departaments_id' => $departaments_id,
            'categories_id' => $categories_id,
            'categories_sub_id' => $categories_sub_id,
            'brand_id' => $brand_id,
            'no_ref' => $no_ref,
            'no_ean' => $no_ean,
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
            'type_auction_id' => $type_auction_id,
            'type_transaction_id' => $type_transaction_id,
            'tax_id' => $tax_id,
            'p_size' => $p_size,
            'p_color' => $p_color,
            'price_incrise' => $price_incrise,
            'price' => $price,
            'descount' => $descount,
            'quantity' => $quantity,
            'price_ini' => $price_ini,
            'price_reserve' => $price_reserve,
            'increase_bid' => $increase_bid,
            'min_biders' => $min_biders,
            'private_auction' => $private_auction,
            'buyitnow' => $buyitnow,
            'enable_deals' => $enable_deals,
            'automatic_re_enter' => $automatic_re_enter,
            'type_shipping_id' => $type_shipping_id,
            'prod_weight' => $prod_weight,
            'prod_long' => $prod_long,
            'prod_width' => $prod_width,
            'prod_high' => $prod_high,
            'insurance' => $insurance,
            'shipping_price' => $shipping_price,
            'shipping_description_es' => $shipping_description_es,
            'shipping_description_en' => $shipping_description_en,
            'shipping_description_pt' => $shipping_description_pt,
            'url_web_show' => $url_web_show,
            'accept_returns' => $accept_returns,
            'token' => $token
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                //'name' => 'required',
                'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            // Crea la instancia
            $data_field = new UserStoreProduct();
            $data_field->enable = $request->get('enable');
            $data_field->user_id = $request->get('user_id');
            $data_field->country_id = $request->get('country_id');
            $data_field->store_id = $request->get('store_id');
            $data_field->branch_id = $request->get('branch_id');
            $data_field->status_product_id = $request->get('status_product_id');
            $data_field->departaments_id = $request->get('departaments_id');
            $data_field->categories_id = $request->get('categories_id');
            $data_field->categories_sub_id = $request->get('categories_sub_id');
            $data_field->brand_id = $request->get('brand_id');
            $data_field->no_ref = $request->get('no_ref');
            $data_field->no_ean = $request->get('no_ean');
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
            $data_field->type_auction_id = $request->get('type_auction_id');
            $data_field->type_transaction_id = $request->get('type_transaction_id');
            $data_field->tax_id = $request->get('tax_id');
            $data_field->p_size = $request->get('p_size');
            $data_field->p_color = $request->get('p_color');
            $data_field->price_incrise = $request->get('price_incrise');
            $data_field->price = $request->get('price');
            $data_field->descount = $request->get('descount');
            $data_field->quantity = $request->get('quantity');
            $data_field->price_ini = $request->get('price_ini');
            $data_field->price_reserve = $request->get('price_reserve');
            $data_field->increase_bid = $request->get('increase_bid');
            $data_field->min_biders = $request->get('min_biders');
            $data_field->private_auction = $request->get('private_auction');
            $data_field->buyitnow = $request->get('buyitnow');
            $data_field->enable_deals = $request->get('enable_deals');
            $data_field->automatic_re_enter = $request->get('automatic_re_enter');
            $data_field->type_shipping_id = $request->get('type_shipping_id');
            $data_field->prod_weight = $request->get('prod_weight');
            $data_field->prod_long = $request->get('prod_long');
            $data_field->prod_width = $request->get('prod_width');
            $data_field->prod_high = $request->get('prod_high');
            $data_field->insurance = $request->get('insurance');
            $data_field->shipping_price = $request->get('shipping_price');
            $data_field->shipping_description_es = $request->get('shipping_description_es');
            $data_field->shipping_description_en = $request->get('shipping_description_en');
            $data_field->shipping_description_pt = $request->get('shipping_description_pt');
            $data_field->url_web_show = $request->get('url_web_show');
            $data_field->accept_returns = $request->get('accept_returns');
            $data_field->token = $request->get('_token');
            //Accion de guardar la info
            $saved = $data_field->save();
            //ID para guardar las fotos
            $next_product_id = $data_field->id;
            //check if image exist
            if ($request->hasFile('image')) {
                $images = $request->file('image');
                //Ruta para guardar
                $url_save_or = 'upload/products/' . $next_product_id . '/';
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
                    $newPhoto->product_id = $next_product_id;
                    $newPhoto->cupon_id = 0;
                    $newPhoto->event_id = 0;
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
        $data_item = UserStoreProduct::find($id_a);
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
            $country_id = $data_item->country_id;
            $store_id = $data_item->store_id;
            $branch_id = $data_item->branch_id;
            $status_product_id = $data_item->status_product_id;
            $departaments_id = $data_item->departaments_id;
            $categories_id = $data_item->categories_id;
            $categories_sub_id = $data_item->categories_sub_id;
            $brand_id = $data_item->brand_id;
            $no_ref = $data_item->no_ref;
            $no_ean = $data_item->no_ean;
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
            $type_auction_id = $data_item->type_auction_id;
            $type_transaction_id = $data_item->type_transaction_id;
            $tax_id = $data_item->tax_id;
            $p_size = $data_item->p_size;
            $p_color = $data_item->p_color;
            $price_incrise = $data_item->price_incrise;
            $price = $data_item->price;
            $descount = $data_item->descount;
            $quantity = $data_item->quantity;
            $price_ini = $data_item->price_ini;
            $price_reserve = $data_item->price_reserve;
            $increase_bid = $data_item->increase_bid;
            $min_biders = $data_item->min_biders;
            $private_auction = $data_item->private_auction;
            $buyitnow = $data_item->buyitnow;
            $enable_deals = $data_item->enable_deals;
            $automatic_re_enter = $data_item->automatic_re_enter;
            $type_shipping_id = $data_item->type_shipping_id;
            $prod_weight = $data_item->prod_weight;
            $prod_long = $data_item->prod_long;
            $prod_width = $data_item->prod_width;
            $prod_high = $data_item->prod_high;
            $insurance = $data_item->insurance;
            $shipping_price = $data_item->shipping_price;
            $shipping_description_es = $data_item->shipping_description_es;
            $shipping_description_en = $data_item->shipping_description_en;
            $shipping_description_pt = $data_item->shipping_description_pt;
            $url_web_show = $data_item->url_web_show;
            $accept_returns = $data_item->accept_returns;
            $token = $data_item->token;
            // Carga de combos
            $data_user_id = User::all();
            $data_country_id = LocaleCountry::all();
            $data_user_store_id = UserStore::all();
            $data_user_store_branch_id = UserStoreBranch::all();
            $data_status_product_id = StatusProduct::all();
            $data_cg_brand_id = CgBrand::all();
            $data_departaments_id = CgDepartament::all();
            $data_categories_id = CgCategorie::where('departaments_id', $departaments_id)->get();
            $data_categories_sub_id = CgSubCategorie::where('categories_id', $categories_id)->get();
            $data_type_transaction_id = TypeTransaction::all();
            $data_type_auction_id = TypeAuction::all();
            $data_pay_tax_id = PayTax::all();
            $data_type_shipping_id = TypeShipping::all();
            $data_pictures = UserItemMedia::where('product_id', $id_a)->get();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.profile.user_store_product.form', [
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
                'data_country_id' => $data_country_id,
                'data_user_store_id' => $data_user_store_id,
                'data_user_store_branch_id' => $data_user_store_branch_id,
                'data_status_product_id' => $data_status_product_id,
                'data_cg_brand_id' => $data_cg_brand_id,
                'data_departaments_id' => $data_departaments_id,
                'data_categories_id' => $data_categories_id,
                'data_categories_sub_id' => $data_categories_sub_id,
                'data_type_transaction_id' => $data_type_transaction_id,
                'data_type_auction_id' => $data_type_auction_id,
                'data_pay_tax_id' => $data_pay_tax_id,
                'data_type_shipping_id' => $data_type_shipping_id,
                'data_pictures' => $data_pictures,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_id' => $user_id,
                'country_id' => $country_id,
                'store_id' => $store_id,
                'branch_id' => $branch_id,
                'status_product_id' => $status_product_id,
                'departaments_id' => $departaments_id,
                'categories_id' => $categories_id,
                'categories_sub_id' => $categories_sub_id,
                'brand_id' => $brand_id,
                'no_ref' => $no_ref,
                'no_ean' => $no_ean,
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
                'type_auction_id' => $type_auction_id,
                'type_transaction_id' => $type_transaction_id,
                'tax_id' => $tax_id,
                'p_size' => $p_size,
                'p_color' => $p_color,
                'price_incrise' => $price_incrise,
                'price' => $price,
                'descount' => $descount,
                'quantity' => $quantity,
                'price_ini' => $price_ini,
                'price_reserve' => $price_reserve,
                'increase_bid' => $increase_bid,
                'min_biders' => $min_biders,
                'private_auction' => $private_auction,
                'buyitnow' => $buyitnow,
                'enable_deals' => $enable_deals,
                'automatic_re_enter' => $automatic_re_enter,
                'type_shipping_id' => $type_shipping_id,
                'prod_weight' => $prod_weight,
                'prod_long' => $prod_long,
                'prod_width' => $prod_width,
                'prod_high' => $prod_high,
                'insurance' => $insurance,
                'shipping_price' => $shipping_price,
                'shipping_description_es' => $shipping_description_es,
                'shipping_description_en' => $shipping_description_en,
                'shipping_description_pt' => $shipping_description_pt,
                'url_web_show' => $url_web_show,
                'accept_returns' => $accept_returns,
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
        $data_item = UserStoreProduct::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    //'name' => 'required',
                    'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->user_id = $request->get('user_id');
                $data_item->country_id = $request->get('country_id');
                $data_item->store_id = $request->get('store_id');
                $data_item->branch_id = $request->get('branch_id');
                $data_item->status_product_id = $request->get('status_product_id');
                $data_item->departaments_id = $request->get('departaments_id');
                $data_item->categories_id = $request->get('categories_id');
                $data_item->categories_sub_id = $request->get('categories_sub_id');
                $data_item->brand_id = $request->get('brand_id');
                $data_item->no_ref = $request->get('no_ref');
                $data_item->no_ean = $request->get('no_ean');
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
                $data_item->type_auction_id = $request->get('type_auction_id');
                $data_item->type_transaction_id = $request->get('type_transaction_id');
                $data_item->tax_id = $request->get('tax_id');
                $data_item->p_size = $request->get('p_size');
                $data_item->p_color = $request->get('p_color');
                $data_item->price_incrise = $request->get('price_incrise');
                $data_item->price = $request->get('price');
                $data_item->descount = $request->get('descount');
                $data_item->quantity = $request->get('quantity');
                $data_item->price_ini = $request->get('price_ini');
                $data_item->price_reserve = $request->get('price_reserve');
                $data_item->increase_bid = $request->get('increase_bid');
                $data_item->min_biders = $request->get('min_biders');
                $data_item->private_auction = $request->get('private_auction');
                $data_item->buyitnow = $request->get('buyitnow');
                $data_item->enable_deals = $request->get('enable_deals');
                $data_item->automatic_re_enter = $request->get('automatic_re_enter');
                $data_item->type_shipping_id = $request->get('type_shipping_id');
                $data_item->prod_weight = $request->get('prod_weight');
                $data_item->prod_long = $request->get('prod_long');
                $data_item->prod_width = $request->get('prod_width');
                $data_item->prod_high = $request->get('prod_high');
                $data_item->insurance = $request->get('insurance');
                $data_item->shipping_price = $request->get('shipping_price');
                $data_item->shipping_description_es = $request->get('shipping_description_es');
                $data_item->shipping_description_en = $request->get('shipping_description_en');
                $data_item->shipping_description_pt = $request->get('shipping_description_pt');
                $data_item->url_web_show = $request->get('url_web_show');
                $data_item->accept_returns = $request->get('accept_returns');
                //Accion de guardar la info
                $saved = $data_item->save();
                //ID para guardar las fotos
                $next_product_id = $data_item->id;
                //check if image exist
                if ($request->hasFile('image')) {
                    $images = $request->file('image');
                    //Ruta para guardar
                    $url_save_or = 'upload/products/' . $next_product_id . '/';
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
                        $newPhoto->product_id = $next_product_id;
                        $newPhoto->cupon_id = 0;
                        $newPhoto->event_id = 0;
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
        $data_item = UserStoreProduct::find($id);
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
