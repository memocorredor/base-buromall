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
use Epayco\Util;
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
        $data_ac_order_new = AcOrder::latest()->first();
        if($data_ac_order_new){
            $id_ac_order_new = $data_ac_order_new->id;
        } else {
            $id_ac_order_new = 1;
        }

        $data_expire_cc = explode("/", $request->get('expiry'));
        $format_expire_cc = $data_expire_cc[1] . '-' . $data_expire_cc[0];


        // OJO CON ESTA
        //TODO: verificar como podemos hacer esto mejor.
        // Crea nuevo numero de factura
        $data_nobill = new AcNoBill();
        $data_nobill->status = 2;
        $data_nobill->order_num = $id_ac_order_new;
        $data_nobill->no_item = 1; //supuesto no de factura
        $data_nobill->token = $request->get('_token');
        //Accion de guardar la info
        $data_nobill->save();

        // Crea nuevo numero de orden
        $data_noorder = new AcNoOrder();
        $data_noorder->status = 2;
        $data_noorder->order_num = $id_ac_order_new;
        $data_noorder->no_item = 1;
        $data_noorder->token = $request->get('_token');
        //Accion de guardar la info
        $data_noorder->save();

        // Crea nuevo numero de orden
        $data_norequest = new AcNoRequest();
        $data_norequest->status = 2;
        $data_norequest->order_num = $id_ac_order_new;
        $data_norequest->no_item = 1;
        $data_norequest->token = $request->get('_token');
        //Accion de guardar la info
        $data_norequest->save();

        $data_field = new AcOrder();
        $data_field->user_id = Auth::user()->id;
        $data_field->status_order_id = 2; //Orden iniciada
        $data_field->type_payment_id = 3; //Tarjeta de credito
        $data_field->no_order_id = $data_noorder->id;
        $data_field->no_bill_id = $data_nobill->id;
        $data_field->no_request_id = $data_norequest->id;
        $data_field->status_payment_id = 2; //Pago pendiente
        $data_field->status_refund_id = 2; //Sin devoluciones
        $data_field->status_shipping_id = 2; //En espera del pago
        $data_field->name = $request->get('name_user');
        $data_field->lastname = $request->get('lastname_user');
        $data_field->type_identification_id = $request->get('type_identification_id');
        $data_field->identification = $request->get('identification_user');
        $data_field->exped_identification = $request->get('exped_identification');
        $data_field->email = $request->get('email_user');
        $data_field->areacode = $request->get('areacode_user');
        $data_field->phone = $request->get('phone_user');
        $data_field->mobile = $request->get('mobile_user');
        $data_field->country_id = $request->get('country_id');
        $data_field->state_id = $request->get('state_id');
        $data_field->city_id = $request->get('city_id');
        $data_field->address = $request->get('address_user');
        $data_field->zipcode = $request->get('zipcode_user');
        $data_field->latitude = $request->get('latitude_user');
        $data_field->longitude = $request->get('longitude_user');
        $data_field->name_credit = $request->get('name');
        $data_field->number_credit = $request->get('number');
        $data_field->cvv_credit = $request->get('cvc');
        $data_field->exp_credit = $format_expire_cc;
        $data_field->nu_autorization = '';
        $data_field->pay_errors_id = 1;
        $data_field->pay_errors_avs_id = 1;
        $data_field->pay_errors_cvv_id = 1;
        $data_field->wallet_saldo_debit = '';
        $data_field->wallet_saldo_credit = '';
        $data_field->wallet_total = '';
        $data_field->cart_stotal = \Cart::getSubTotal();
        $data_field->cart_tax = '';
        $data_field->cart_shipping = '';
        $data_field->cart_total = \Cart::getTotal();
        $data_field->token = $request->get('_token');

        //Accion de guardar la info
        $saved = $data_field->save();

        if ($saved) {
            $notification = array(
                'message' => 'Orden Generada!, procedemos a hacer el pago.',
                'alert-type' => 'info'
            );

            $this->makePaymentCC($data_field->id);
        }

        //return redirect()->route('home')->with($notification);
    }

    public function makePaymentCC($id)
    {
        $data_item = AcOrder::find($id);
        // Carga los datos del usuario
        $user_sis = CoreUser::getUser();

        $filter_identification = $data_item->type_identification_id;
        $data_identification = TypeIdentification::where('id', $filter_identification)->first();

        $filter_country = $data_item->country_id;
        $data_country = LocaleCountry::where('id', $filter_country)->first();

        $filter_state = $data_item->state_id;
        $data_state = LocaleState::where('id', $filter_state)->first();

        $filter_city = $data_item->city_id;
        $data_city = LocaleCity::where('id', $filter_city)->first();

        $data_send = array(
            'public_key' => env('APP_PAY_KEY'),
            'tipo_doc' => $data_identification->iso,
            'documento' => $data_item->identification,
            'fechaExpedicion' => $data_item->exped_identification,
            'nombres' => $data_item->name,
            'apellidos' => $data_item->lastname,
            'email' => $data_item->email,
            'pais' => $data_country->code,
            'depto' => $data_state->name,
            'ciudad' => $data_city->name,
            'telefono' => $data_item->phone,
            'celular' => $data_item->mobile,
            'direccion' => 'Transversal 3 No 52B - 08' . ' - Zip:' . $data_item->zipcode,
            'ip' => $user_sis['session_ip'],
            'factura' => '24',
            'descripcion' => 'test de prueba 1',
            'iva' => 0,
            'baseiva' => 0,
            'valor' => \Cart::getTotal(),//20.000, PUNTO ES miles y coma decimales.
            'moneda' => 'USD',
            'tarjeta' => $data_item->number_credit,
            'fechaexpiracion' => $data_item->exp_credit,//'2018-06',
            'codigoseguridad' => $data_item->cvv_credit,
            'franquicia' => 'VISA',
            'cuotas' => 1,
            'url_respuesta' => env('APP_URL').env('APP_PAY_URLR'),
            'url_confirmacion' => env('APP_URL').env('APP_PAY_URLC'),
            'metodoconfirmacion' => env('APP_PAY_ACTION_SIS'),
            'lenguaje' => env('APP_PAY_LANG_SIS'),
            'i' => env('APP_PAY_KEY_ENC'),
            'enpruebas' => env('APP_PAY_SIS_TEST')
        );
        $op_pay = new Util();
        $data = $op_pay->mergeSet($data_send, env('APP_PAY_SIS_TEST'), env('APP_PAY_LANG_SIS'), env('APP_PAY_KEY_PV'), env('APP_PAY_KEY'));

        $payload = json_encode($data);
        $ch = curl_init('https://secure.payco.co/restpagos/pagos/comercios.json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload))
        );
        //Submit the POST request
        $result = curl_exec($ch);
        echo 'data resultado <br>';
        print_r($result);
        //Close cURL session handle
        curl_close($ch);

    }
}
