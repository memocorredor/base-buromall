<?php

use Illuminate\Database\Seeder;

class UserNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('user_news')->delete();
        
        DB::table('user_news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'enable' => 1,
                'user_id' => 1,
                'departaments_id' => 9,
                'categories_id' => 0,
                'categories_sub_id' => 0,
                'url_title_es' => 'google-veta-a-huawei-y-como-esto-afecta-a-usuarios',
                'title_es' => 'Google Veta A Huawei Y Como Esto Afecta A Usuarios',
                'text_es' => '<p style="font-size: 14.4px;">Lo mas importante y que debemos tener en cuenta es que la firma china no tendrá acceso a las actualizaciones de Android ni a Gmail.</p><p style="font-size: 14.4px;">Como cadena de hechos los fabricantes de procesadores dejarán de vender al gigante tecnológico asiático.</p><p style="font-size: 14.4px;">Pero por que esto sucede?.</p><p style="font-size: 14.4px;">Es una medida que pone la administración del presidente Donald Trump agregara a Huawei a una lista de compañías con las que las empresas estadounidenses no pueden negociar a menos que tengan una licencia especial.</p><p style="font-size: 14.4px;">Esta medida se da ya que la administración del presidente Trump pone un veto a estas compañías chinas por supuesto espionaje.</p><p style="font-size: 14.4px;">Este veto es por 90 días con posibilidad de continuarlo, al estar esta&nbsp;<span style="font-size: 14.4px;">compañía en esta lista prohibe que otras&nbsp;</span><span style="font-size: 14.4px;">compañías americanas vendan productos a esta&nbsp;</span>Huawei.</p><p style="font-size: 14.4px;">Para los usuarios esta medida tiene una repercusión importante ya que los usuarios de continuar esta medida no tendrán soporte en actualizaciones al sistema operativo y descarga de aplicaciones.&nbsp;</p><p style="font-size: 14.4px;">A través de un comunicado, Google afirmó que "estamos cumpliendo con la norma y analizando las implicaciones. Para los usuarios de nuestros servicios, Google Play y las medidas de seguridad de Google Play Protect continuarán funcionando en los dispositivos Huawei existentes”, esto quiere decir que los usuarios podrán seguir usando Gmail, Google Traslate o Google Maps. La actualización del software es primordial, pues se encarga de controlar los teléfonos y sin ella no sería posible la utilización de las aplicaciones ni las funciones del Smartphone.</p><p style="font-size: 14.4px;">“Huawei podría ofrecer actualizaciones de Android de seguridad cuando estén disponibles como código abierto. Pero esto le obliga al usuario a esperar bastante tiempo para disponer de la actualización”, afirmaron fuentes de Google.</p>',
                'description_es' => 'Google veta a huawei y como esto afecta a usuarios de estos dispositivos',
                'keywords_es' => 'google,huawei,veto',
                'url_title_en' => 'google-veta-a-huawei-y-como-esto-afecta-a-usuarios',
                'title_en' => 'Google Veta A Huawei Y Como Esto Afecta A Usuarios',
                'text_en' => '<p style="font-size: 14.4px;">Lo mas importante y que debemos tener en cuenta es que la firma china no tendrá acceso a las actualizaciones de Android ni a Gmail.</p><p style="font-size: 14.4px;">Como cadena de hechos los fabricantes de procesadores dejarán de vender al gigante tecnológico asiático.</p><p style="font-size: 14.4px;">Pero por que esto sucede?.</p><p style="font-size: 14.4px;">Es una medida que pone la administración del presidente Donald Trump agregara a Huawei a una lista de compañías con las que las empresas estadounidenses no pueden negociar a menos que tengan una licencia especial.</p><p style="font-size: 14.4px;">Esta medida se da ya que la administración del presidente Trump pone un veto a estas compañías chinas por supuesto espionaje.</p><p style="font-size: 14.4px;">Este veto es por 90 días con posibilidad de continuarlo, al estar esta&nbsp;<span style="font-size: 14.4px;">compañía en esta lista prohibe que otras&nbsp;</span><span style="font-size: 14.4px;">compañías americanas vendan productos a esta&nbsp;</span>Huawei.</p><p style="font-size: 14.4px;">Para los usuarios esta medida tiene una repercusión importante ya que los usuarios de continuar esta medida no tendrán soporte en actualizaciones al sistema operativo y descarga de aplicaciones.&nbsp;</p><p style="font-size: 14.4px;">A través de un comunicado, Google afirmó que "estamos cumpliendo con la norma y analizando las implicaciones. Para los usuarios de nuestros servicios, Google Play y las medidas de seguridad de Google Play Protect continuarán funcionando en los dispositivos Huawei existentes”, esto quiere decir que los usuarios podrán seguir usando Gmail, Google Traslate o Google Maps. La actualización del software es primordial, pues se encarga de controlar los teléfonos y sin ella no sería posible la utilización de las aplicaciones ni las funciones del Smartphone.</p><p style="font-size: 14.4px;">“Huawei podría ofrecer actualizaciones de Android de seguridad cuando estén disponibles como código abierto. Pero esto le obliga al usuario a esperar bastante tiempo para disponer de la actualización”, afirmaron fuentes de Google.</p>',
                'description_en' => 'Google veta a huawei y como esto afecta a usuarios de estos dispositivos',
                'keywords_en' => 'google,huawei,veto',
                'url_title_pt' => 'google-veta-a-huawei-y-como-esto-afecta-a-usuarios',
                'title_pt' => 'Google Veta A Huawei Y Como Esto Afecta A Usuarios',
                'text_pt' => '<p style="font-size: 14.4px;">Lo mas importante y que debemos tener en cuenta es que la firma china no tendrá acceso a las actualizaciones de Android ni a Gmail.</p><p style="font-size: 14.4px;">Como cadena de hechos los fabricantes de procesadores dejarán de vender al gigante tecnológico asiático.</p><p style="font-size: 14.4px;">Pero por que esto sucede?.</p><p style="font-size: 14.4px;">Es una medida que pone la administración del presidente Donald Trump agregara a Huawei a una lista de compañías con las que las empresas estadounidenses no pueden negociar a menos que tengan una licencia especial.</p><p style="font-size: 14.4px;">Esta medida se da ya que la administración del presidente Trump pone un veto a estas compañías chinas por supuesto espionaje.</p><p style="font-size: 14.4px;">Este veto es por 90 días con posibilidad de continuarlo, al estar esta&nbsp;<span style="font-size: 14.4px;">compañía en esta lista prohibe que otras&nbsp;</span><span style="font-size: 14.4px;">compañías americanas vendan productos a esta&nbsp;</span>Huawei.</p><p style="font-size: 14.4px;">Para los usuarios esta medida tiene una repercusión importante ya que los usuarios de continuar esta medida no tendrán soporte en actualizaciones al sistema operativo y descarga de aplicaciones.&nbsp;</p><p style="font-size: 14.4px;">A través de un comunicado, Google afirmó que "estamos cumpliendo con la norma y analizando las implicaciones. Para los usuarios de nuestros servicios, Google Play y las medidas de seguridad de Google Play Protect continuarán funcionando en los dispositivos Huawei existentes”, esto quiere decir que los usuarios podrán seguir usando Gmail, Google Traslate o Google Maps. La actualización del software es primordial, pues se encarga de controlar los teléfonos y sin ella no sería posible la utilización de las aplicaciones ni las funciones del Smartphone.</p><p style="font-size: 14.4px;">“Huawei podría ofrecer actualizaciones de Android de seguridad cuando estén disponibles como código abierto. Pero esto le obliga al usuario a esperar bastante tiempo para disponer de la actualización”, afirmaron fuentes de Google.</p>',
                'description_pt' => 'Google veta a huawei y como esto afecta a usuarios de estos dispositivos',
                'keywords_pt' => 'google,huawei,veto',
                'token' => NULL,
                'created_at' => '2019-05-21 12:56:42',
                'updated_at' => '2019-05-21 12:56:42',
            ),
        ));
        
        
    }
}