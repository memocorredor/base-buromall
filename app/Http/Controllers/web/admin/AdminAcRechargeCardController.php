<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\AcRechargeCard;
use Buromall\Models\User;
use Buromall\Models\UserStore;
use Buromall\Models\UserStoreBranch;
use Buromall\Models\AcOrder;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;

class AdminAcRechargeCardController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_ac_recharge_card_title');
        $this->seo_description = __('seo_admin.local_admin_ac_recharge_card_description');
        $this->seo_keywords = __('seo_admin.local_admin_ac_recharge_card_keywords');
        $this->view_icon = 'fas fa-credit-card';
        // Rutas del view and form
        $this->form_view = 'admin.ac_recharge_card';
        $this->form_show = 'admin.ac_recharge_card.show';
        $this->form_new = 'admin.ac_recharge_card.new';
        $this->form_create = 'admin.ac_recharge_card.store';
        $this->form_edit = 'admin.ac_recharge_card.edit';
        $this->form_update = 'admin.ac_recharge_card.update';
        $this->form_delete = 'admin.ac_recharge_card.delete';
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
        $data_item = AcRechargeCard::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.ac_recharge_card.main', compact('data_item'), [
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
        $data_item = AcRechargeCard::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $enable = $data_item->enable;
            $user_create_id = $data_item->user_create_id;
            $number = $data_item->number;
            $date_recarge = $data_item->date_recarge;
            $store_id = $data_item->store_id;
            $branch_id = $data_item->branch_id;
            $user_id = $data_item->user_id;
            $email_send = $data_item->email_send;
            $value_card = $data_item->value_card;
            $ac_order_id = $data_item->ac_order_id;
            $token = $data_item->token;
            // Carga de combos
            $data_user_create_id = User::all();
            $data_store_id = UserStore::all();
            $data_branch_id = UserStoreBranch::all();
            $data_user_id = User::all();
            $data_ac_order_id = AcOrder::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.ac_recharge_card.form', [
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
                'data_user_create_id' => $data_user_create_id,
                'data_store_id' => $data_store_id,
                'data_branch_id' => $data_branch_id,
                'data_user_id' => $data_user_id,
                'data_ac_order_id' => $data_ac_order_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_create_id' => $user_create_id,
                'number' => $number,
                'date_recarge' => $date_recarge,
                'store_id' => $store_id,
                'branch_id' => $branch_id,
                'user_id' => $user_id,
                'email_send' => $email_send,
                'value_card' => $value_card,
                'ac_order_id' => $ac_order_id,
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
        $enable = 0;
        $user_create_id = 0;
        $number = '';
        $date_recarge = '';
        $store_id = 0;
        $branch_id = 0;
        $user_id = 0;
        $email_send = '';
        $value_card = '';
        $ac_order_id = 0;
        $token = '';
        // Carga de combos
        $data_user_create_id = User::all();
        $data_store_id = UserStore::all();
        $data_branch_id = UserStoreBranch::all();
        $data_user_id = User::all();
        $data_ac_order_id = AcOrder::all();
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.ac_recharge_card.form', [
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
            'data_user_create_id' => $data_user_create_id,
            'data_store_id' => $data_store_id,
            'data_branch_id' => $data_branch_id,
            'data_user_id' => $data_user_id,
            'data_ac_order_id' => $data_ac_order_id,
            'id' => '',
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'enable' => $enable,
            'user_create_id' => $user_create_id,
            'number' => $number,
            'date_recarge' => $date_recarge,
            'store_id' => $store_id,
            'branch_id' => $branch_id,
            'user_id' => $user_id,
            'email_send' => $email_send,
            'value_card' => $value_card,
            'ac_order_id' => $ac_order_id,
            'token' => $token
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'number' => 'required',
                'value_card' => 'required',
                'token' => 'required'
            ]);
            // Crea la instancia
            $data_field = new AcRechargeCard();
            $data_field->enable = $request->get('enable');
            $data_field->user_create_id = $request->get('user_create_id');
            $data_field->number = $request->get('number');
            $data_field->date_recarge = $request->get('date_recarge');
            $data_field->store_id = $request->get('store_id');
            $data_field->branch_id = $request->get('branch_id');
            $data_field->user_id = $request->get('user_id');
            $data_field->email_send = $request->get('email_send');
            $data_field->value_card = $request->get('value_card');
            $data_field->ac_order_id = $request->get('ac_order_id');
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
        $data_item = AcRechargeCard::find($id_a);
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
            $user_create_id = $data_item->user_create_id;
            $number = $data_item->number;
            $date_recarge = $data_item->date_recarge;
            $store_id = $data_item->store_id;
            $branch_id = $data_item->branch_id;
            $user_id = $data_item->user_id;
            $email_send = $data_item->email_send;
            $value_card = $data_item->value_card;
            $ac_order_id = $data_item->ac_order_id;
            $token = $data_item->token;
            // Carga de combos
            $data_user_create_id = User::all();
            $data_store_id = UserStore::all();
            $data_branch_id = UserStoreBranch::all();
            $data_user_id = User::all();
            $data_ac_order_id = AcOrder::all();
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.ac_recharge_card.form', [
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
                'data_user_create_id' => $data_user_create_id,
                'data_store_id' => $data_store_id,
                'data_branch_id' => $data_branch_id,
                'data_user_id' => $data_user_id,
                'data_ac_order_id' => $data_ac_order_id,
                'id' => $id_sis,
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'enable' => $enable,
                'user_create_id' => $user_create_id,
                'number' => $number,
                'date_recarge' => $date_recarge,
                'store_id' => $store_id,
                'branch_id' => $branch_id,
                'user_id' => $user_id,
                'email_send' => $email_send,
                'value_card' => $value_card,
                'ac_order_id' => $ac_order_id,
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
        $data_item = AcRechargeCard::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'user_create_id' => 'required',
                    'number' => 'required',
                    'value_card' => 'required',
                    'token' => 'required'
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->user_create_id = $request->get('user_create_id');
                $data_item->number = $request->get('number');
                $data_item->date_recarge = $request->get('date_recarge');
                $data_item->store_id = $request->get('store_id');
                $data_item->branch_id = $request->get('branch_id');
                $data_item->user_id = $request->get('user_id');
                $data_item->email_send = $request->get('email_send');
                $data_item->value_card = $request->get('value_card');
                $data_item->ac_order_id = $request->get('ac_order_id');
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
        $data_item = AcRechargeCard::find($id);
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
