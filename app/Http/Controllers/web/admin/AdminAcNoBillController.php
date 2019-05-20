<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\AcNoBill;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;

class AdminAcNoBillController extends Controller
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
        $this->seo_title = __('seo_admin.local_admin_ac_no_bill_title');
        $this->seo_description = __('seo_admin.local_admin_ac_no_bill_description');
        $this->seo_keywords = __('seo_admin.local_admin_ac_no_bill_keywords');
        $this->view_icon = 'fas fa-search-dollar';
        // Rutas del view and form
        $this->form_view = 'admin.ac_no_bill';
        $this->form_show = 'admin.ac_no_bill.show';
        $this->form_new = 'admin.ac_no_bill.new';
        $this->form_create = 'admin.ac_no_bill.store';
        $this->form_edit = 'admin.ac_no_bill.edit';
        $this->form_update = 'admin.ac_no_bill.update';
        $this->form_delete = 'admin.ac_no_bill.delete';
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
        $data_item = AcNoBill::paginate(7);
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.ac_no_bill.main', compact('data_item'), [
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
        $data_item = AcNoBill::find($id_a);
        if ($data_item != null) {
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $status = $data_item->status;
            $order_num = $data_item->order_num;
            $no_item = $data_item->no_item;
            $token = $data_item->token;
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.ac_no_bill.form', [
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
                'form_action' => __('app_messages.local_action_show'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'status' => $status,
                'order_num' => $order_num,
                'no_item' => $no_item,
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
        $status = '';
        $order_num = '';
        $no_item = '';
        $token = '';
        // Carga los metas en las variables
        $this->setMeta();
        // Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        // Render del view
        return view('web.admin.ac_no_bill.form', [
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
            'form_action' => __('app_messages.local_action_new'),
            'created_at' => $date_created,
            'updated_at' => $date_edit,
            'status' => $status,
            'order_num' => $order_num,
            'no_item' => $no_item,
            'token' => $token
        ]);
    }

    // Crear nuevo registro
    public function store(Request $request)
    {
        if ($request->get('process') === 'add') {
            $this->validate($request, [
                'status' => 'required',
                'order_num' => 'required',
                'no_item' => 'required',
                'token' => 'required',
            ]);
            // Crea la instancia
            $data_field = new AcNoBill();
            $data_field->status = $request->get('status');
            $data_field->order_num = $request->get('order_num');
            $data_field->no_item = $request->get('no_item');
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
        $data_item = AcNoBill::find($id_a);
        if ($data_item != null) {
            // Aciones del form
            $route_form = $this->form_update;
            $action_form = 'edit';
            $status_input = '';
            // Carga data para el view
            $id_sis = $data_item->id;
            $date_created = $data_item->created_at;
            $date_edit = $data_item->updated_at;
            $status = $data_item->status;
            $order_num = $data_item->order_num;
            $no_item = $data_item->no_item;
            $token = $data_item->token;
            // Carga los metas en las variables
            $this->setMeta();
            // Carga los datos de la web
            $for_meta_sis = $this->meta_sis;
            // Carga los datos del usuario
            $this->user_sis = CoreUser::getUser();
            // Render del view
            return view('web.admin.ac_no_bill.form', [
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
                'form_action' => __('app_messages.local_action_edit'),
                'created_at' => $date_created,
                'updated_at' => $date_edit,
                'status' => $status,
                'order_num' => $order_num,
                'no_item' => $no_item,
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
        $data_item = AcNoBill::find($id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'status' => 'required',
                    'order_num' => 'required',
                    'no_item' => 'required',
                    'token' => 'required',
                ]);
                //Compara la info
                $data_item->status = $request->get('status');
                $data_item->order_num = $request->get('order_num');
                $data_item->no_item = $request->get('no_item');
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
        $data_item = AcNoBill::find($id);
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
