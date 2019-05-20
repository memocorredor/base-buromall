<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\AcOrder;
use Buromall\Models\User;
use Buromall\Models\StatusOrder;
use Buromall\Models\StatusPayment;
use Buromall\Models\StatusRefund;
use Buromall\Models\StatusShipping;
use Buromall\Models\TypePayment;
use Buromall\Models\TypeIdentification;
use Buromall\Models\AcNoBill;
use Buromall\Models\AcNoCart;
use Buromall\Models\AcNoOrder;
use Buromall\Models\AcNoRequest;
use Buromall\Models\PayErrorAvs;
use Buromall\Models\PayErrorCvv;
use Buromall\Models\PayError;
use Buromall\Models\LocaleCountry;
use Buromall\Models\LocaleRegion;
use Buromall\Models\LocaleCity;
use Buromall\Models\LocaleTownship;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;

class AdminAcOrderController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_ac_order_title');
        $this->seo_description = __('seo_admin.local_admin_ac_order_description');
        $this->seo_keywords = __('seo_admin.local_admin_ac_order_keywords');
        $this->view_icon = 'fas fa-users-cog';
        // Rutas del view and form
        $this->form_view = 'admin.ac_order';
        $this->form_show = 'admin.ac_order.show';
        $this->form_new = 'admin.ac_order.new';
        $this->form_create = 'admin.ac_order.store';
        $this->form_edit = 'admin.ac_order.edit';
        $this->form_update = 'admin.ac_order.update';
        $this->form_delete = 'admin.ac_order.delete';
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
        $data_item = AcOrder::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.ac_order.main', compact('data_item'), [
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
        $data_item = AcOrder::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $user_id = $data_item->user_id;
            $status_order_id = $data_item->status_order_id;
            $type_payment_id = $data_item->type_payment_id;
            $no_order_id = $data_item->no_order_id;
            $no_bill_id = $data_item->no_bill_id;
            $no_request_id = $data_item->no_request_id;
            $status_payment_id = $data_item->status_payment_id;
            $status_refund_id = $data_item->status_refund_id;
            $status_shipping_id = $data_item->status_shipping_id;
            $name = $data_item->name;
            $lastname = $data_item->lastname;
            $identification_id = $data_item->identification_id;
            $identification = $data_item->identification;
            $email = $data_item->email;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $country_id = $data_item->country_id;
            $region_id = $data_item->region_id;
            $city_id = $data_item->city_id;
            $township_id = $data_item->township_id;
            $address = $data_item->address;
            $zipcode = $data_item->zipcode;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            $name_credit = $data_item->name_credit;
            $number_credit = $data_item->number_credit;
            $cvv_credit = $data_item->cvv_credit;
            $exp_credit = $data_item->exp_credit;
            $nu_autorization = $data_item->nu_autorization;
            $error_vpos_id = $data_item->error_vpos_id;
            $error_avs_vpos_id = $data_item->error_avs_vpos_id;
            $error_cvv_vpos_id = $data_item->error_cvv_vpos_id;
            $wallet_saldo_debit = $data_item->wallet_saldo_debit;
            $wallet_saldo_credit = $data_item->wallet_saldo_credit;
            $wallet_total = $data_item->wallet_total;
            $cart_stotal = $data_item->cart_stotal;
            $cart_tax = $data_item->cart_tax;
            $cart_shipping = $data_item->cart_shipping;
            $cart_total = $data_item->cart_total;
            $token = $data_item->token;
            // Carga de combos
            $data_user_id = User::all();
            $data_status_order_id = StatusOrder::all();
            $data_status_payment_id = StatusPayment::all();
            $data_status_refund_id = StatusRefund::all();
            $data_status_shipping_id = StatusShipping::all();
            $data_type_payment_id = TypePayment::all();
            $data_type_identification_id = TypeIdentification::all();
            $data_no_bill_id = AcNoBill::all();
            $data_no_cart_id = AcNoCart::all();
            $data_no_order_id = AcNoOrder::all();
            $data_no_request_id = AcNoRequest::all();
            $data_country_id = LocaleCountry::all();
            $data_region_id = LocaleRegion::all();
            $data_city_id = LocaleCity::all();
            $data_township_id = LocaleTownship::all();
            $data_pay_errors_id = PayError::all();
            $data_pay_errors_avs_id = PayErrorAvs::all();
            $data_pay_errors_cvv_id = PayErrorCvv::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.ac_order.form', [
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
                'data_status_order_id' => $data_status_order_id,
                'data_status_payment_id' => $data_status_payment_id,
                'data_status_refund_id' => $data_status_refund_id,
                'data_status_shipping_id' => $data_status_shipping_id,
                'data_type_payment_id' => $data_type_payment_id,
                'data_type_identification_id' => $data_type_identification_id,
                'data_no_bill_id' => $data_no_bill_id,
                'data_no_cart_id' => $data_no_cart_id,
                'data_no_order_id' => $data_no_order_id,
                'data_no_request_id' => $data_no_request_id,
                'data_country_id' => $data_country_id,
                'data_region_id' => $data_region_id,
                'data_city_id' => $data_city_id,
                'data_township_id' => $data_township_id,
                'data_pay_errors_id' => $data_pay_errors_id,
                'data_pay_errors_avs_id' => $data_pay_errors_avs_id,
                'data_pay_errors_cvv_id' => $data_pay_errors_cvv_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'user_id' => $user_id,
                'status_order_id' => $status_order_id,
                'type_payment_id' => $type_payment_id,
                'no_order_id' => $no_order_id,
                'no_bill_id' => $no_bill_id,
                'no_request_id' => $no_request_id,
                'status_payment_id' => $status_payment_id,
                'status_refund_id' => $status_refund_id,
                'status_shipping_id' => $status_shipping_id,
                'name' => $name,
                'lastname' => $lastname,
                'identification_id' => $identification_id,
                'identification' => $identification,
                'email' => $email,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'country_id' => $country_id,
                'region_id' => $region_id,
                'city_id' => $city_id,
                'township_id' => $township_id,
                'address' => $address,
                'zipcode' => $zipcode,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'name_credit' => $name_credit,
                'number_credit' => $number_credit,
                'cvv_credit' => $cvv_credit,
                'exp_credit' => $exp_credit,
                'nu_autorization' => $nu_autorization,
                'error_vpos_id' => $error_vpos_id,
                'error_avs_vpos_id' => $error_avs_vpos_id,
                'error_cvv_vpos_id' => $error_cvv_vpos_id,
                'wallet_saldo_debit' => $wallet_saldo_debit,
                'wallet_saldo_credit' => $wallet_saldo_credit,
                'wallet_total' => $wallet_total,
                'cart_stotal' => $cart_stotal,
                'cart_tax' => $cart_tax,
                'cart_shipping' => $cart_shipping,
                'cart_total' => $cart_total,
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
        $user_id = 0;
        $status_order_id = 0;
        $type_payment_id = 0;
        $no_order_id = 0;
        $no_bill_id = 0;
        $no_request_id = 0;
        $status_payment_id = 0;
        $status_refund_id = 0;
        $status_shipping_id = 0;
        $name = '';
        $lastname = '';
        $identification_id = 0;
        $identification = '';
        $email = '';
        $areacode = '';
        $phone = '';
        $mobile = '';
        $country_id = 0;
        $region_id = 0;
        $city_id = 0;
        $township_id = 0;
        $address = '';
        $zipcode = '';
        $latitude = '';
        $longitude = '';
        $name_credit = '';
        $number_credit = '';
        $cvv_credit = '';
        $exp_credit = '';
        $nu_autorization = '';
        $error_vpos_id = 0;
        $error_avs_vpos_id = 0;
        $error_cvv_vpos_id = 0;
        $wallet_saldo_debit = '';
        $wallet_saldo_credit = '';
        $wallet_total = '';
        $cart_stotal = '';
        $cart_tax = '';
        $cart_shipping = '';
        $cart_total = '';
        $token = '';
        // Carga de combos
        $data_user_id = User::all();
        $data_status_order_id = StatusOrder::all();
        $data_status_payment_id = StatusPayment::all();
        $data_status_refund_id = StatusRefund::all();
        $data_status_shipping_id = StatusShipping::all();
        $data_type_payment_id = TypePayment::all();
        $data_type_identification_id = TypeIdentification::all();
        $data_no_bill_id = AcNoBill::all();
        $data_no_cart_id = AcNoCart::all();
        $data_no_order_id = AcNoOrder::all();
        $data_no_request_id = AcNoRequest::all();
        $data_country_id = LocaleCountry::all();
        $data_region_id = LocaleRegion::all();
        $data_city_id = LocaleCity::all();
        $data_township_id = LocaleTownship::all();
        $data_pay_errors_id = PayError::all();
        $data_pay_errors_avs_id = PayErrorAvs::all();
        $data_pay_errors_cvv_id = PayErrorCvv::all();
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.ac_order.form', [
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
            'data_status_order_id' => $data_status_order_id,
            'data_status_payment_id' => $data_status_payment_id,
            'data_status_refund_id' => $data_status_refund_id,
            'data_status_shipping_id' => $data_status_shipping_id,
            'data_type_payment_id' => $data_type_payment_id,
            'data_type_identification_id' => $data_type_identification_id,
            'data_no_bill_id' => $data_no_bill_id,
            'data_no_cart_id' => $data_no_cart_id,
            'data_no_order_id' => $data_no_order_id,
            'data_no_request_id' => $data_no_request_id,
            'data_country_id' => $data_country_id,
            'data_region_id' => $data_region_id,
            'data_city_id' => $data_city_id,
            'data_township_id' => $data_township_id,
            'data_pay_errors_id' => $data_pay_errors_id,
            'data_pay_errors_avs_id' => $data_pay_errors_avs_id,
            'data_pay_errors_cvv_id' => $data_pay_errors_cvv_id,
            'id' => '',
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'user_id' => $user_id,
            'status_order_id' => $status_order_id,
            'type_payment_id' => $type_payment_id,
            'no_order_id' => $no_order_id,
            'no_bill_id' => $no_bill_id,
            'no_request_id' => $no_request_id,
            'status_payment_id' => $status_payment_id,
            'status_refund_id' => $status_refund_id,
            'status_shipping_id' => $status_shipping_id,
            'name' => $name,
            'lastname' => $lastname,
            'identification_id' => $identification_id,
            'identification' => $identification,
            'email' => $email,
            'areacode' => $areacode,
            'phone' => $phone,
            'mobile' => $mobile,
            'country_id' => $country_id,
            'region_id' => $region_id,
            'city_id' => $city_id,
            'township_id' => $township_id,
            'address' => $address,
            'zipcode' => $zipcode,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'name_credit' => $name_credit,
            'number_credit' => $number_credit,
            'cvv_credit' => $cvv_credit,
            'exp_credit' => $exp_credit,
            'nu_autorization' => $nu_autorization,
            'error_vpos_id' => $error_vpos_id,
            'error_avs_vpos_id' => $error_avs_vpos_id,
            'error_cvv_vpos_id' => $error_cvv_vpos_id,
            'wallet_saldo_debit' => $wallet_saldo_debit,
            'wallet_saldo_credit' => $wallet_saldo_credit,
            'wallet_total' => $wallet_total,
            'cart_stotal' => $cart_stotal,
            'cart_tax' => $cart_tax,
            'cart_shipping' => $cart_shipping,
            'cart_total' => $cart_total,
            'token' => $token
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'user_id' => 'required',
                'status_order_id' => 'required',
                'type_payment_id' => 'required',
                'no_order_id' => 'required',
                'no_bill_id' => 'required',
                'no_request_id' => 'required',
                'status_payment_id' => 'required',
                'status_refund_id' => 'required',
                'status_shipping_id' => 'required',
                'name' => 'required',
                'lastname' => 'required',
                'identification_id' => 'required',
                'identification' => 'required',
                'email' => 'required',
                'areacode' => 'required',
                'phone' => 'required',
                'mobile' => 'required',
                'country_id' => 'required',
                'region_id' => 'required',
                'city_id' => 'required',
                'township_id' => 'required',
                'address' => 'required',
                'zipcode' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'name_credit' => 'required',
                'number_credit' => 'required',
                'cvv_credit' => 'required',
                'exp_credit' => 'required',
                'nu_autorization' => 'required',
                'error_vpos_id' => 'required',
                'error_avs_vpos_id' => 'required',
                'error_cvv_vpos_id' => 'required',
                'wallet_saldo_debit' => 'required',
                'wallet_saldo_credit' => 'required',
                'wallet_total' => 'required',
                'cart_stotal' => 'required',
                'cart_tax' => 'required',
                'cart_shipping' => 'required',
                'cart_total' => 'required',
                'token' => 'required'

            ]);
            // Crea la instancia
            $data_field = new AcOrder();
            $data_field->user_id = $request->get('user_id');
            $data_field->status_order_id = $request->get('status_order_id');
            $data_field->type_payment_id = $request->get('type_payment_id');
            $data_field->no_order_id = $request->get('no_order_id');
            $data_field->no_bill_id = $request->get('no_bill_id');
            $data_field->no_request_id = $request->get('no_request_id');
            $data_field->status_payment_id = $request->get('status_payment_id');
            $data_field->status_refund_id = $request->get('status_refund_id');
            $data_field->status_shipping_id = $request->get('status_shipping_id');
            $data_field->name = $request->get('name');
            $data_field->lastname = $request->get('lastname');
            $data_field->identification_id = $request->get('identification_id');
            $data_field->identification = $request->get('identification');
            $data_field->email = $request->get('email');
            $data_field->areacode = $request->get('areacode');
            $data_field->phone = $request->get('phone');
            $data_field->mobile = $request->get('mobile');
            $data_field->country_id = $request->get('country_id');
            $data_field->region_id = $request->get('region_id');
            $data_field->city_id = $request->get('city_id');
            $data_field->township_id = $request->get('township_id');
            $data_field->address = $request->get('address');
            $data_field->zipcode = $request->get('zipcode');
            $data_field->latitude = $request->get('latitude');
            $data_field->longitude = $request->get('longitude');
            $data_field->name_credit = $request->get('name_credit');
            $data_field->number_credit = $request->get('number_credit');
            $data_field->cvv_credit = $request->get('cvv_credit');
            $data_field->exp_credit = $request->get('exp_credit');
            $data_field->nu_autorization = $request->get('nu_autorization');
            $data_field->error_vpos_id = $request->get('error_vpos_id');
            $data_field->error_avs_vpos_id = $request->get('error_avs_vpos_id');
            $data_field->error_cvv_vpos_id = $request->get('error_cvv_vpos_id');
            $data_field->wallet_saldo_debit = $request->get('wallet_saldo_debit');
            $data_field->wallet_saldo_credit = $request->get('wallet_saldo_credit');
            $data_field->wallet_total = $request->get('wallet_total');
            $data_field->cart_stotal = $request->get('cart_stotal');
            $data_field->cart_tax = $request->get('cart_tax');
            $data_field->cart_shipping = $request->get('cart_shipping');
            $data_field->cart_total = $request->get('cart_total');
            $data_field->token = $request->get('token');
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
        $data_item = AcOrder::find($id_a);
        if ($data_item != null) {
            // Aciones del form
            $route_form = $this->form_update;
            $action_form = 'edit';
            $status_input = '';
            // Carga data para el view
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $user_id = $data_item->user_id;
            $status_order_id = $data_item->status_order_id;
            $type_payment_id = $data_item->type_payment_id;
            $no_order_id = $data_item->no_order_id;
            $no_bill_id = $data_item->no_bill_id;
            $no_request_id = $data_item->no_request_id;
            $status_payment_id = $data_item->status_payment_id;
            $status_refund_id = $data_item->status_refund_id;
            $status_shipping_id = $data_item->status_shipping_id;
            $name = $data_item->name;
            $lastname = $data_item->lastname;
            $identification_id = $data_item->identification_id;
            $identification = $data_item->identification;
            $email = $data_item->email;
            $areacode = $data_item->areacode;
            $phone = $data_item->phone;
            $mobile = $data_item->mobile;
            $country_id = $data_item->country_id;
            $region_id = $data_item->region_id;
            $city_id = $data_item->city_id;
            $township_id = $data_item->township_id;
            $address = $data_item->address;
            $zipcode = $data_item->zipcode;
            $latitude = $data_item->latitude;
            $longitude = $data_item->longitude;
            $name_credit = $data_item->name_credit;
            $number_credit = $data_item->number_credit;
            $cvv_credit = $data_item->cvv_credit;
            $exp_credit = $data_item->exp_credit;
            $nu_autorization = $data_item->nu_autorization;
            $error_vpos_id = $data_item->error_vpos_id;
            $error_avs_vpos_id = $data_item->error_avs_vpos_id;
            $error_cvv_vpos_id = $data_item->error_cvv_vpos_id;
            $wallet_saldo_debit = $data_item->wallet_saldo_debit;
            $wallet_saldo_credit = $data_item->wallet_saldo_credit;
            $wallet_total = $data_item->wallet_total;
            $cart_stotal = $data_item->cart_stotal;
            $cart_tax = $data_item->cart_tax;
            $cart_shipping = $data_item->cart_shipping;
            $cart_total = $data_item->cart_total;
            $token = $data_item->token;
            // Carga de combos
            $data_user_id = User::all();
            $data_status_order_id = StatusOrder::all();
            $data_status_payment_id = StatusPayment::all();
            $data_status_refund_id = StatusRefund::all();
            $data_status_shipping_id = StatusShipping::all();
            $data_type_payment_id = TypePayment::all();
            $data_type_identification_id = TypeIdentification::all();
            $data_no_bill_id = AcNoBill::all();
            $data_no_cart_id = AcNoCart::all();
            $data_no_order_id = AcNoOrder::all();
            $data_no_request_id = AcNoRequest::all();
            $data_country_id = LocaleCountry::all();
            $data_region_id = LocaleRegion::all();
            $data_city_id = LocaleCity::all();
            $data_township_id = LocaleTownship::all();
            $data_pay_errors_id = PayError::all();
            $data_pay_errors_avs_id = PayErrorAvs::all();
            $data_pay_errors_cvv_id = PayErrorCvv::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.ac_order.form', [
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
                'data_status_order_id' => $data_status_order_id,
                'data_status_payment_id' => $data_status_payment_id,
                'data_status_refund_id' => $data_status_refund_id,
                'data_status_shipping_id' => $data_status_shipping_id,
                'data_type_payment_id' => $data_type_payment_id,
                'data_type_identification_id' => $data_type_identification_id,
                'data_no_bill_id' => $data_no_bill_id,
                'data_no_cart_id' => $data_no_cart_id,
                'data_no_order_id' => $data_no_order_id,
                'data_no_request_id' => $data_no_request_id,
                'data_country_id' => $data_country_id,
                'data_data_region_id' => $data_region_id,
                'data_city_id' => $data_city_id,
                'data_township_id' => $data_township_id,
                'data_pay_errors_id' => $data_pay_errors_id,
                'data_pay_errors_avs_id' => $data_pay_errors_avs_id,
                'data_pay_errors_cvv_id' => $data_pay_errors_cvv_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'user_id' => $user_id,
                'status_order_id' => $status_order_id,
                'type_payment_id' => $type_payment_id,
                'no_order_id' => $no_order_id,
                'no_bill_id' => $no_bill_id,
                'no_request_id' => $no_request_id,
                'status_payment_id' => $status_payment_id,
                'status_refund_id' => $status_refund_id,
                'status_shipping_id' => $status_shipping_id,
                'name' => $name,
                'lastname' => $lastname,
                'identification_id' => $identification_id,
                'identification' => $identification,
                'email' => $email,
                'areacode' => $areacode,
                'phone' => $phone,
                'mobile' => $mobile,
                'country_id' => $country_id,
                'region_id' => $region_id,
                'city_id' => $city_id,
                'township_id' => $township_id,
                'address' => $address,
                'zipcode' => $zipcode,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'name_credit' => $name_credit,
                'number_credit' => $number_credit,
                'cvv_credit' => $cvv_credit,
                'exp_credit' => $exp_credit,
                'nu_autorization' => $nu_autorization,
                'error_vpos_id' => $error_vpos_id,
                'error_avs_vpos_id' => $error_avs_vpos_id,
                'error_cvv_vpos_id' => $error_cvv_vpos_id,
                'wallet_saldo_debit' => $wallet_saldo_debit,
                'wallet_saldo_credit' => $wallet_saldo_credit,
                'wallet_total' => $wallet_total,
                'cart_stotal' => $cart_stotal,
                'cart_tax' => $cart_tax,
                'cart_shipping' => $cart_shipping,
                'cart_total' => $cart_total,
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
        $data_item = AcOrder::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'user_id' => 'required',
                    'status_order_id' => 'required',
                    'type_payment_id' => 'required',
                    'no_order_id' => 'required',
                    'no_bill_id' => 'required',
                    'no_request_id' => 'required',
                    'status_payment_id' => 'required',
                    'status_refund_id' => 'required',
                    'status_shipping_id' => 'required',
                    'name' => 'required',
                    'lastname' => 'required',
                    'identification_id' => 'required',
                    'identification' => 'required',
                    'email' => 'required',
                    'areacode' => 'required',
                    'phone' => 'required',
                    'mobile' => 'required',
                    'country_id' => 'required',
                    'region_id' => 'required',
                    'city_id' => 'required',
                    'township_id' => 'required',
                    'address' => 'required',
                    'zipcode' => 'required',
                    'latitude' => 'required',
                    'longitude' => 'required',
                    'name_credit' => 'required',
                    'number_credit' => 'required',
                    'cvv_credit' => 'required',
                    'exp_credit' => 'required',
                    'nu_autorization' => 'required',
                    'error_vpos_id' => 'required',
                    'error_avs_vpos_id' => 'required',
                    'error_cvv_vpos_id' => 'required',
                    'wallet_saldo_debit' => 'required',
                    'wallet_saldo_credit' => 'required',
                    'wallet_total' => 'required',
                    'cart_stotal' => 'required',
                    'cart_tax' => 'required',
                    'cart_shipping' => 'required',
                    'cart_total' => 'required',
                    'token' => 'required'
                ]);
                //Compara la info
                $data_item->name = $request->get('name');
                $data_item->user_id = $request->get('user_id');
                $data_item->status_order_id = $request->get('status_order_id');
                $data_item->type_payment_id = $request->get('type_payment_id');
                $data_item->no_order_id = $request->get('no_order_id');
                $data_item->no_bill_id = $request->get('no_bill_id');
                $data_item->no_request_id = $request->get('no_request_id');
                $data_item->status_payment_id = $request->get('status_payment_id');
                $data_item->status_refund_id = $request->get('status_refund_id');
                $data_item->status_shipping_id = $request->get('status_shipping_id');
                $data_item->name = $request->get('name');
                $data_item->lastname = $request->get('lastname');
                $data_item->identification_id = $request->get('identification_id');
                $data_item->identification = $request->get('identification');
                $data_item->email = $request->get('email');
                $data_item->areacode = $request->get('areacode');
                $data_item->phone = $request->get('phone');
                $data_item->mobile = $request->get('mobile');
                $data_item->country_id = $request->get('country_id');
                $data_item->region_id = $request->get('region_id');
                $data_item->city_id = $request->get('city_id');
                $data_item->township_id = $request->get('township_id');
                $data_item->address = $request->get('address');
                $data_item->zipcode = $request->get('zipcode');
                $data_item->latitude = $request->get('latitude');
                $data_item->longitude = $request->get('longitude');
                $data_item->name_credit = $request->get('name_credit');
                $data_item->number_credit = $request->get('number_credit');
                $data_item->cvv_credit = $request->get('cvv_credit');
                $data_item->exp_credit = $request->get('exp_credit');
                $data_item->nu_autorization = $request->get('nu_autorization');
                $data_item->error_vpos_id = $request->get('error_vpos_id');
                $data_item->error_avs_vpos_id = $request->get('error_avs_vpos_id');
                $data_item->error_cvv_vpos_id = $request->get('error_cvv_vpos_id');
                $data_item->wallet_saldo_debit = $request->get('wallet_saldo_debit');
                $data_item->wallet_saldo_credit = $request->get('wallet_saldo_credit');
                $data_item->wallet_total = $request->get('wallet_total');
                $data_item->cart_stotal = $request->get('cart_stotal');
                $data_item->cart_tax = $request->get('cart_tax');
                $data_item->cart_shipping = $request->get('cart_shipping');
                $data_item->cart_total = $request->get('cart_total');
                $data_item->token = $request->get('token');
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
        $data_item = AcOrder::find($id);
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
