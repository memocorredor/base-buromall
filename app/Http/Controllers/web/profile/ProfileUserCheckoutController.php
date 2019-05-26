<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\User;
use Buromall\Models\LocaleCountry;
use Buromall\Models\LocaleState;
use Buromall\Models\LocaleCity;
use Buromall\Models\StatusOrder;
use Buromall\Models\StatusPayment;
use Buromall\Models\StatusRefund;
use Buromall\Models\StatusShipping;
use Buromall\Models\TypePayment;
use Buromall\Models\TypeIdentification;
use Buromall\Models\AcOrder;
use Buromall\Models\AcNoBill;
use Buromall\Models\AcNoCart;
use Buromall\Models\AcNoOrder;
use Buromall\Models\AcNoRequest;
use Buromall\Models\PayErrorAvs;
use Buromall\Models\PayErrorCvv;
use Buromall\Models\PayError;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Buromall\AppCore\CoreUser;
use Darryldecode\Cart\Cart;
use Auth;

class ProfileUserCheckoutController extends Controller
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

        $status_input = '';

        $data_item = User::find(Auth::user()->id);
        $name = $data_item->name;
        $lastname = $data_item->lastname;
        $email = $data_item->email;
        $areacode = $data_item->areacode;
        $phone = $data_item->phone;
        $mobile = $data_item->mobile;

        $country_id = $data_item->country_id;
        $state_id = $data_item->state_id;
        $city_id = $data_item->city_id;
        $zipcode = $data_item->zipcode;
        $address = $data_item->address;

        $data_country_id = LocaleCountry::all();
        $data_state_id = LocaleState::where('country_id', $country_id)->get();
        $data_city_id = LocaleCity::where('state_id', $state_id)->get();
        $data_type_identification_id = TypeIdentification::all();



        //Carga los metas en las variables
        $this->setMeta();
        //Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        //Carga del view
        return view('web.profile.user_checkout.main', [
            'meta_lang' => $this->lang,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis,
            'status_input' => $status_input,
            'data_country_id' => $data_country_id,
            'data_state_id' => $data_state_id,
            'data_city_id' => $data_city_id,
            'data_type_identification_id' => $data_type_identification_id,
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'areacode' => $areacode,
            'phone' => $phone,
            'mobile' => $mobile,
            'country_id' => $country_id,
            'state_id' => $state_id,
            'city_id' => $city_id,
            'zipcode' => $zipcode,
            'address' => $address,
        ]);
    }

    public function iniOrden(Request $request)
    {

        // $data_field = new AcOrder();
        // $data_field->user_id = $request->get('user_id');
        // $data_field->status_order_id = $request->get('status_order_id');
        // $data_field->type_payment_id = $request->get('type_payment_id');
        // $data_field->no_order_id = $request->get('no_order_id');
        // $data_field->no_bill_id = $request->get('no_bill_id');
        // $data_field->no_request_id = $request->get('no_request_id');
        // $data_field->status_payment_id = $request->get('status_payment_id');
        // $data_field->status_refund_id = $request->get('status_refund_id');
        // $data_field->status_shipping_id = $request->get('status_shipping_id');
        // $data_field->name = $request->get('name');
        // $data_field->lastname = $request->get('lastname');
        // $data_field->identification_id = $request->get('identification_id');
        // $data_field->identification = $request->get('identification');
        // $data_field->email = $request->get('email');
        // $data_field->areacode = $request->get('areacode');
        // $data_field->phone = $request->get('phone');
        // $data_field->mobile = $request->get('mobile');
        // $data_field->country_id = $request->get('country_id');
        // $data_field->region_id = $request->get('region_id');
        // $data_field->city_id = $request->get('city_id');
        // $data_field->township_id = $request->get('township_id');
        // $data_field->address = $request->get('address');
        // $data_field->zipcode = $request->get('zipcode');
        // $data_field->latitude = $request->get('latitude');
        // $data_field->longitude = $request->get('longitude');
        // $data_field->name_credit = $request->get('name_credit');
        // $data_field->number_credit = $request->get('number_credit');
        // $data_field->cvv_credit = $request->get('cvv_credit');
        // $data_field->exp_credit = $request->get('exp_credit');
        // $data_field->nu_autorization = $request->get('nu_autorization');
        // $data_field->error_vpos_id = $request->get('error_vpos_id');
        // $data_field->error_avs_vpos_id = $request->get('error_avs_vpos_id');
        // $data_field->error_cvv_vpos_id = $request->get('error_cvv_vpos_id');
        // $data_field->wallet_saldo_debit = $request->get('wallet_saldo_debit');
        // $data_field->wallet_saldo_credit = $request->get('wallet_saldo_credit');
        // $data_field->wallet_total = $request->get('wallet_total');
        // $data_field->cart_stotal = $request->get('cart_stotal');
        // $data_field->cart_tax = $request->get('cart_tax');
        // $data_field->cart_shipping = $request->get('cart_shipping');
        // $data_field->cart_total = $request->get('cart_total');
        // $data_field->token = $request->get('token');

        $notification = array(
            'message' => 'listo el pago',
            'alert-type' => 'error'
        );

        return redirect()->route('home')->with($notification);


    }
}
