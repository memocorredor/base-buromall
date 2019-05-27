<?php

namespace Buromall\Http\Controllers;

use Buromall\Models\User;
use Illuminate\Http\Request;
use Buromall\Models\WebSite;
use Buromall\AppCore\CoreMeta;
use Buromall\AppCore\CoreUser;
use Darryldecode\Cart\CartCondition;
use Buromall\Models\UserStoreProduct;
use Auth;

class ProfileUserCartController extends Controller
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
        //Get cart
        $items = \Cart::getContent();

        $get_stotal = \Cart::getSubTotal();
        $get_total = \Cart::getTotal();
        //Carga los metas en las variables
        $this->setMeta();
        //Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        //Carga del view
        return view('web.profile.user_cart.main', [
            'meta_lang' => $this->lang,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis,
            'items' => $items,
            'get_stotal' => $get_stotal,
            'get_total' => $get_total
        ]);
    }

    public function itemAdd(Request $request)
    {
        $input = $request->all();

        $type_item = $request['type_item'];
        $id_prod = $request['id_prod'];
        $cant_prod = $request['cant_prod'];

        $data_item = UserStoreProduct::find($id_prod);

        $res_id_item = $type_item . '-' . $data_item->id;
        $name_item = $data_item->title_es;
        $price_item = $data_item->price;

        $condition = new CartCondition(array(
            'name' => 'VAT 12.5%',
            'type' => 'tax',
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '12.5%',
            'attributes' => array( // attributes field is optional
                'description' => 'Value added tax',
                'more_data' => 'more data here'
            )
        ));

        \Cart::condition($condition);

        \Cart::add($res_id_item, $name_item, $price_item, $cant_prod, array());


        return response()->json(['success' => 'Got Simple Ajax Request.']);









        //$type_item = $request->get('type_item');

        //$id_prod = $request->get('id_prod');
        //$cant_prod = $request->get('cant_prod');


        //$data_item = UserStoreProduct::find($id_prod);

        //$condition = new CartCondition(array(
            //'name' => 'VAT 12.5%',
            //'type' => 'tax',
            //'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            //'value' => '12.5%',
            //'attributes' => array( // attributes field is optional
                //'description' => 'Value added tax',
                //'more_data' => 'more data here'
           // )
        //));

        //\Cart::condition($condition);

        //\Cart::add(1, 'Sample Item 1', 100.99, $cant_prod, array());
        //$input = $request->all();

        //return response()->json(['success' => 'Got Simple Ajax Request.']);
        //return response()->json(['success'=>true]);

    }
}
