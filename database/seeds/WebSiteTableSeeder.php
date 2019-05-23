<?php

use Illuminate\Database\Seeder;

class WebSiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('web_sites')->insert([
            'image' => '',
            'title_es' => 'Buromall',
            'description_es' => 'Buromall es un lugar donde puedes hacer tus pagos y compras de todo tipo.',
            'keywords_es' => 'pagos, pago, compras, compra, tiendas, tienda, precios, precio, pagos por redes sociales, ofertas, oferta, subastas, subasta, promociones, promocion, publicidades, geolocolazadas, envios, envio, tiendas online, pagos online, puntos de pago, facil, seguro, rapido, pagos faciles, monedero, monedero virtual, recargas, servicios, clasificados, dispositivos, aplicaciones, software, colombia, panama, venezuela, costa rica, nicaragua, guatemala, honduras peru, ecuador, transaciones online, comodidad, gadgets, atencion al cliente, sistemas de pagos, pagos integrales, latino america, centroamerica, caribe, vende, compras online, buro, mall, buromall',
            'title_en' => 'Buromall',
            'description_en' => 'Buromall is a place where you can make your payments and purchases of all kinds.',
            'keywords_en' => 'payments, payment, purchases, purchases, stores, store, prices, prices, payments by social networks, offers, offer, auctions, auction, promotions, promotion, advertising, geolocalised, shipping, shipping, online stores, online payments, payment points , easy, safe, fast, easy payments, wallet, virtual wallet, refills, services, classifieds, devices, applications, software, colombia, panama, venezuela, costa rica, nicaragua, guatemala, honduras peru, ecuador, online transactions, convenience, gadgets, customer service, payment systems, integral payments, latin america, central america, caribbean, sells, online shopping, buro, mall, buromall',
            'title_pt' => 'Buromall',
            'description_pt' => 'Buromall é um lugar onde você pode fazer seus pagamentos e compras de todos os tipos.',
            'keywords_pt' => 'pagamentos, compras, compras, lojas, loja, preços, preços, pagamentos por redes sociais, ofertas, ofertas, leilões, leilão, promoções, promoção, publicidade, localização geográfica, envio, envio, lojas online, pagamentos online, pontos de pagamento fácil, seguro, rápido, pagamentos fáceis, carteira, carteira virtual, recargas, serviços, classificados, dispositivos, aplicativos, software, colômbia, panamá, venezuela, costa rica, nicarágua, guatemala, honduras peru, equador, transações on-line, conveniência, gadgets, atendimento ao cliente, sistemas de pagamento, pagamentos integrais, américa latina, américa central, caribe, vende, compras on-line, buro, mall, buromall',
            'email' => 'info@buromall.com',
            'zipcode' => '113511',
            'country_id' => '174',
            'state_id' => '0',
            'city_id' => '0',
            'address' => '1',
            'areacode' => '57',
            'phone' => '1',
            'mobile' => '1',
            'facebook' => 'https://www.facebook.com/buromall',
            'facebook_enable' => '1',
            'twitter' => 'https://twitter.com/buromall',
            'twitter_enable' => '1',
            'instagram' => 'https://www.instagram.com/buromall/',
            'instagram_enable' => '1',
            'pinterest' => 'https://co.pinterest.com/buromall/',
            'pinterest_enable' => '1',
            'youtube' => 'https://www.youtube.com/channel/UCdWhsLsGqob-rPXxBjEj3Tg',
            'youtube_enable' => '0',
            'linkedin' => '0',
            'linkedin_enable' => '0',
            'skype' => '@buromall',
            'skype_enable' => '1',
            'android' => '',
            'android_enable' => '0',
            'itunes' => '',
            'itunes_enable' => '0',
            'windows' => '',
            'windows_enable' => '0',
            'author' => 'GCSProsoft',
            'copyright' => 'BuroMall - Tu punto de compra y pagos',
            'time_zone' => 'America/Bogota',
            'google_analitic' => 'UA-134625329-1',
            'name_page' => 'Buromall',
            'url_web' => 'www.buromall.com',
            'no_ruc' => '1',
            'created_at' => '2019-01-01 12:00:00',
            'updated_at' => '2019-01-01 12:00:00'
        ]);
    }
}
