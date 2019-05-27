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
use Buromall\AppCore\coreImage;
use Carbon\Carbon;
use Buromall\AppCore\CoreUser;
use CodeItNow\BarcodeBundle\Utils\QrCode;

class HomeUserStoreProductController extends Controller
{
    //Asignacion de variables generales para uso en el CONTROLLER.
    private $web_sis;
    private $seo_title;
    private $seo_description;
    private $seo_keywords;
    private $lang;
    private $media_id;
    private $item_url_base;
    private $item_name_base;
    private $quantity_icon;
    private $meta_sis;
    private $user_sis;
    private $view_icon;

    //Constructor del CONTROLLER
    public function __construct()
    {
        //Carga del id de la web a usar
        $this->web_sis = env('APP_ID_USE', '1');
        //Carga del idioma en uso
        $this->lang = str_replace('_', '-', app()->getLocale());
        //Media filter imagenes
        $this->media_id = 'cupon_id';
        //Url base para redirecion
        $this->item_url_base = 'home.user_product_detail';
        //Name headers item
        $this->item_name_base = __('web_layout.local_product');
        //Icon Cantidad
        $this->quantity_icon = 'fas fa-shopping-basket';
        //Icon View
        $this->view_icon = 'fas fa-gift';
    }

    //Asignacion de variables y carga del META
    public function setMeta()
    {
        //Carga los datos del meta
        $send_meta_data = WebSite::where('id', $this->web_sis)->first();
        $send_meta_title = $this->seo_title;
        $send_meta_description = $this->seo_description;
        $send_meta_keywords = $this->seo_keywords;
        $send_lang = $this->lang;
        //Indicar si queremos que se indexe o no a los robots
        $send_meta_robot = 'index,follow';
        // carga de los metadatos en esta variable para ser pasados al view
        $this->meta_sis = CoreMeta::MetaTags($send_meta_data, $send_lang, $send_meta_title, $send_meta_description, $send_meta_keywords, $send_meta_robot);
    }

    //Para calga del index home
    public function index()
    {
        //Si title, description y keywords esta vacio se mantiene el de defult por base de datos
        $this->seo_title = __('seo_home.local_home_user_product_title');
        $this->seo_description = __('seo_home.local_home_user_product_description');
        $this->seo_keywords = __('seo_home.local_home_user_product_keywords');
        // Carga de combos
        $data_items = UserStoreProduct::all();
        //Carga los metas en las variables
        $this->setMeta();
        //Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        //Carga del view
        return view('web.home.user_product.main', [
            'meta_lang' => $this->lang,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis,
            'icon' => $this->view_icon,
            'quantity_icon' => $this->quantity_icon,
            'title_view' => $this->seo_title,
            'data_items' => $data_items,
            'item_url_base' => $this->item_url_base,
            'item_name_base' => $this->item_name_base
        ]);
    }

    //Para calga del index home
    public function indexDetail($id)
    {
        //Recibe la info del view
        $id_a = $id;
        if (is_numeric($id)) {
            $filter = 'id';
        } else {
            $filter = 'url_title_' . $this->lang;
        }
        //Filtra la info de acuerdo al parametro si es numerico o texto
        $data_view = UserStoreProduct::where($filter, '=', $id_a)->firstOrFail();
        // envio de variable de id
        $id_data = $data_view->id;
        //Carga la fecha de publicacion
        $date_created = $data_view->created_at;
        //Carga el usuario
        $user_id = User::where('id', $data_view->user_id)->first();
        $publiced_by = $user_id->name . ' ' . $user_id->lastname;
        //Carga la tienda
        $store_id = UserStore::where('id', $data_view->store_id)->first();
        $store = $store_id->name;
        //Carga el name para los status, types o catalogo
        $name_items = 'name_' . $this->lang;
        //Carga el nombre del departamento
        $departaments_id = CgDepartament::where('id', $data_view->departaments_id)->first();
        $departaments = $departaments_id->$name_items;
        //Carga el nombre de la categoria
        $categories_id = CgCategorie::where('id', $data_view->categories_id)->first();
        $categories = $categories_id->$name_items;
        //Carga el nombre de la sub categoria
        $categories_sub_id = CgSubCategorie::where('id', $data_view->categories_sub_id)->first();
        $categories_sub = $categories_sub_id->$name_items;
        //Carga el nombre del estado del producto
        $status_product_id = StatusProduct::where('id', $data_view->status_product_id)->first();
        $status_product = $status_product_id->$name_items;
        //Carga el nombre del tipo de transsaccion
        $type_transaction_id = TypeTransaction::where('id', $data_view->type_transaction_id)->first();
        $type_transaction = $type_transaction_id->$name_items;
        //Carga los datos de venta
        //$price = $data_view->price;
        $descount = $data_view->descount;
        $quantity = $data_view->quantity;

        $descount_apply = $data_view->descount;
        $price_to_operation = $data_view->price;
        $price_operation = $price_to_operation - ($price_to_operation * ($descount_apply / 100));
        $price = number_format($data_view->price, 2, ',', '.');
        $price_descount = number_format($price_operation, 2, ',', '.');
        //Carga las imagenes
        $data_img_id = $data_view->id;
        $data_img = UserItemMedia::where($this->media_id, '=', $data_img_id)->get();
        $data_imagenes = coreImage::imageNews($data_img_id);

        //Se envia a url segun idioma y carga la info de la pantalla
        if ($this->lang === 'pt') {
            $url_title = $data_view->url_title_pt;
            $this->seo_title = $data_view->title_pt;
            $this->seo_description = $data_view->description_pt;
            $this->seo_keywords = $data_view->keywords_pt;
            $title_view = $data_view->title_pt;
            $text_view = $data_view->text_pt;
            $keywords_view = $data_view->keywords_pt;
        } elseif ($this->lang === 'en') {
            $url_title = $data_view->url_title_en;
            $this->seo_title = $data_view->title_en;
            $this->seo_description = $data_view->description_en;
            $this->seo_keywords = $data_view->keywords_en;
            $title_view = $data_view->title_en;
            $text_view = $data_view->text_en;
            $keywords_view = $data_view->keywords_en;
        } else {
            $url_title = $data_view->url_title_es;
            $this->seo_title = $data_view->title_es;
            $this->seo_description = $data_view->description_es;
            $this->seo_keywords = $data_view->keywords_es;
            $title_view = $data_view->title_es;
            $text_view = $data_view->text_es;
            $keywords_view = $data_view->keywords_es;
        }
        //Base url qr
        $data_url = config('app.url') . __('app_route.lrhd_user_cupon') . $url_title;
        // Carga del qrcode deacuerdo a la url
        $qrCode = new QrCode();
        $qrCode
            ->setText($data_url)
            ->setSize(300)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
            ->setBackgroundColor(array('r' => 229, 'g' => 230, 'b' => 231, 'a' => 0))
            ->setLabel($data_url)
            ->setLabelFontSize(7)
            ->setImageType(QrCode::IMAGE_TYPE_PNG);
        $qr_type = $qrCode->getContentType();
        $qr_img = $qrCode->generate();
        //Carga los metas en las variables
        $this->setMeta();
        //Carga los datos de la web
        $for_meta_sis = $this->meta_sis;
        // Carga los datos del usuario
        $this->user_sis = CoreUser::getUser();
        //Carga del view
        return view('web.home.user_product.detail', [
            'meta_lang' => $this->lang,
            'meta_sis' => $for_meta_sis,
            'user_sis' => $this->user_sis,
            'data_view' => $data_view,
            'id_data' => $id_data,
            'icon' => $this->view_icon,
            'date_created' => $date_created,
            'publiced_by' => $publiced_by,
            'store' => $store,
            'departaments' => $departaments,
            'categories' => $categories,
            'categories_sub' => $categories_sub,
            'status_product' => $status_product,
            'type_transaction' => $type_transaction,
            'url_title' => $url_title,
            'title_view' => $title_view,
            'text_view' => $text_view,
            'keywords_view' => $keywords_view,
            'price' => $price,
            'descount' => $descount,
            'price_descount' => $price_descount,
            'quantity_icon' => $this->quantity_icon,
            'quantity' => $quantity,
            'qr_type' => $qr_type,
            'qr_img' => $qr_img,
            'data_imagenes' => $data_imagenes,
            'data_url' => $data_url
        ]);
    }
}
