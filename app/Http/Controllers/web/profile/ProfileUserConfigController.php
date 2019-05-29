<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\User;
use Buromall\Models\StatusUser;
use Buromall\Models\UserPlan;
use Buromall\Models\UserGender;
use Buromall\Models\UserRelationship;
use Buromall\Models\LocaleCountry;
use Buromall\Models\LocaleState;
use Buromall\Models\LocaleCity;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;
use Auth;

class ProfileUserConfigController extends Controller
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
        $this->middleware('auth');
        // Carga del id de la web a usar
        $this->web_sis = env('APP_ID_USE', '1');
        // Carga del idioma en uso
        $this->lang = str_replace('_', '-', app()->getLocale());
        // SEO del form
        $this->seo_title = __('seo_profile.local_profile_user_config_title');
        $this->seo_description = __('seo_profile.local_profile_user_config_description');
        $this->seo_keywords = __('seo_profile.local_admin_users_keywords');
        // SEO del form
        $this->view_icon = 'fas fa-id-card-alt';
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
    public function index($id)
    {

        if (is_numeric($id)) {
            $filter = Auth::user()->id;
        } else {
            $filter = Auth::user()->username;
        }

        if ($id === $filter) {
            // Aciones del form
            $action_form = 'edit';
            $status_input = '';
            // Carga data para el view
            $data_item = User::find(Auth::user()->id);
            if ($data_item != null) {
                $date_created = $data_item->created_at;
                $date_edit = $data_item->updated_at;
                $enable = $data_item->enable;
                $user_invite_id = $data_item->user_invite_id;
                $relationship_id = $data_item->relationship_id;
                $con_newsletter = $data_item->con_newsletter;
                $image = $data_item->image;
                $profile_background = $data_item->profile_background;
                $profile_background_position = $data_item->profile_background_position;
                $name = $data_item->name;
                $lastname = $data_item->lastname;
                $birthdate = $data_item->birthdate;
                $description_es = $data_item->description_es;
                $description_en = $data_item->description_en;
                $description_pt = $data_item->description_pt;
                $country_id = $data_item->country_id;
                $state_id = $data_item->state_id;
                $city_id = $data_item->city_id;
                $zipcode = $data_item->zipcode;
                $address = $data_item->address;
                $email = $data_item->email;
                $email_verified_at = $data_item->email_verified_at;
                $areacode = $data_item->areacode;
                $phone = $data_item->phone;
                $mobile = $data_item->mobile;
                $facebook = $data_item->facebook;
                $facebook_enable = $data_item->facebook_enable;
                $facebook_id_user = $data_item->facebook_id_user;
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
                $username = $data_item->username;
                $ip_joined = $data_item->ip_joined;
                // Carga de combos
                $res_status_user = $data_item->status_user_id;
                $data_status_user_id = StatusUser::where('id', $res_status_user)->first();
                $status_user_id = $data_status_user_id->name_es;

                $res_plan = $data_item->plan_id;
                $data_plan_id = UserPlan::where('id', $res_plan)->first();
                $plan_id = $data_plan_id->name_es;

                $res_gender = $data_item->gender_id;
                $data_gender_id = UserGender::where('id', $res_gender)->first();
                $gender_id = $data_gender_id->name_es;

                $data_relationship_id = UserRelationship::all();
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
                return view('web.profile.user_config.main', [
                    'meta_lang' => $this->lang,
                    'seo_title' => $this->seo_title,
                    'seo_description' => $this->seo_description,
                    'meta_sis' => $for_meta_sis,
                    'user_sis' => $this->user_sis,
                    'view_icon' => $this->view_icon,
                    'action_form' => $action_form,
                    'status_input' => $status_input,
                    'data_item' => $data_item,
                    'data_relationship_id' => $data_relationship_id,
                    'data_country_id' => $data_country_id,
                    'data_state_id' => $data_state_id,
                    'data_city_id' => $data_city_id,
                    'id' => Auth::user()->username,
                    'form_action' => __('app_messages.local_action_show'),
                    'created_at' => $date_created,
                    'updated_at' => $date_edit,
                    'enable' => $enable,
                    'status_user_id' => $status_user_id,
                    'plan_id' => $plan_id,
                    'user_invite_id' => $user_invite_id,
                    'gender_id' => $gender_id,
                    'relationship_id' => $relationship_id,
                    'con_newsletter' => $con_newsletter,
                    'image' => $image,
                    'profile_background' => $profile_background,
                    'profile_background_position' => $profile_background_position,
                    'name' => $name,
                    'lastname' => $lastname,
                    'birthdate' => $birthdate,
                    'description_es' => $description_es,
                    'description_en' => $description_en,
                    'description_pt' => $description_pt,
                    'country_id' => $country_id,
                    'state_id' => $state_id,
                    'city_id' => $city_id,
                    'zipcode' => $zipcode,
                    'address' => $address,
                    'email' => $email,
                    'email_verified_at' => $email_verified_at,
                    'areacode' => $areacode,
                    'phone' => $phone,
                    'mobile' => $mobile,
                    'facebook' => $facebook,
                    'facebook_enable' => $facebook_enable,
                    'facebook_id_user' => $facebook_id_user,
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
                    'skype_enable' => $skype_enable,
                    'username' => $username,
                    'ip_joined' => $ip_joined
                ]);
            } else {
                $notification = array(
                    'message' => __('app_messages.local_msg_warning_id_null'),
                    'alert-type' => 'error'
                );
                return redirect()->route('profile.user_edit', Auth::user()->username)->with($notification);
            }
        } else {
            $notification = array(
                'message' => __('app_messages.local_msg_warning_id_no_mach'),
                'alert-type' => 'error'
            );
            return redirect()->route('profile.user_edit', Auth::user()->username)->with($notification);
        }
    }

    // Editar un registro
    public function update(Request $request, $id)
    {
        //Carga la informacion del registro
        $data_item = User::find(Auth::user()->id);
        if ($data_item != null) {
            if ($request->get('process') === 'edit') {
                $this->validate($request, [
                    'relationship_id' => 'required',
                    'birthdate' => 'required',
                    'country_id' => 'required',
                    'state_id' => 'required',
                    'city_id' => 'required',
                    'zipcode' => 'required',
                    'address' => 'required',
                    'areacode' => 'required',
                    'mobile' => 'required'
                ]);
                //Compara la info
                $data_item->enable = $request->get('enable');
                $data_item->relationship_id = $request->get('relationship_id');
                $data_item->con_newsletter = $request->get('con_newsletter');
                $data_item->birthdate = $request->get('birthdate');
                $data_item->description_es = $request->get('description_es');
                $data_item->description_en = $request->get('description_en');
                $data_item->description_pt = $request->get('description_pt');
                $data_item->country_id = $request->get('country_id');
                $data_item->state_id = $request->get('state_id');
                $data_item->city_id = $request->get('city_id');
                $data_item->zipcode = $request->get('zipcode');
                $data_item->address = $request->get('address');
                $data_item->areacode = $request->get('areacode');
                $data_item->phone = $request->get('phone');
                $data_item->mobile = $request->get('mobile');
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
                return redirect()->route('profile.user_edit', Auth::user()->username)->with($notification);
            } else {
                $notification = array(
                    'message' => __('app_messages.local_msg_warning_process'),
                    'alert-type' => 'warning'
                );
                return redirect()->route('profile.user_edit', Auth::user()->username)->with($notification);
            }
        } else {
            $notification = array(
                'message' => __('app_messages.local_msg_warning_id_null'),
                'alert-type' => 'error'
            );
            return redirect()->route('profile.user_edit', Auth::user()->username)->with($notification);
        }
    }
}
