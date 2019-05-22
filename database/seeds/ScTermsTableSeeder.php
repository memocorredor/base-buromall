<?php

use Illuminate\Database\Seeder;

class ScTermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sc_terms')->delete();

        \DB::table('sc_terms')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'web_id' => 1,
                'country_id' => 47,
                'name_color' => '',
                'title_es' => 'Nuestros Términos y Condiciones',
                'text_es' => '<p><span style="font-weight: bold;">TÉRMINOS Y CONDICIONES GENERALES: </span></p><p style="text-align: justify; ">Este contrato describe los términos y condiciones aplicables al uso de los servicios ofrecidos por <b>Buromall,</b><span style="font-weight: 700;"> S.A.</span>, dentro del sitio www.Buromall.com, en adelante denominado EL SITIO o/&nbsp;<span style="font-weight: 700;">Buromall.com</span>&nbsp;Mediante la aceptación de los Términos y Condiciones Generales en el momento del registro, el usuario acepta las políticas aquí contenidas.
CUALQUIER PERSONA QUE NO ACEPTE ESTOS TÉRMINOS Y CONDICIONES GENERALES, LOS CUALES TIENEN UN CARÁCTER OBLIGATORIO Y VINCULANTE, DEBERÁ ABSTENERSE DE UTILIZAR EL SITIO Y/O LOS SERVICIOS.
</p><p style="text-align: justify; ">El usuario debe leer, entender y aceptar todas las condiciones establecidas en los Términos y Condiciones así como en los demás documentos incorporados a los mismos por referencia, previo a la utilización de Buromall.com
</p><p style="text-align: justify; "><span style="font-weight: bold;">I.	OBJETO DE Buromall.com:</span> permite a los usuarios montar y administrar su propio negocio virtual a través de la utilización de un software desarrollado y de propiedad de&nbsp;<span style="font-weight: 700;">Oshitec S.A | Buromall</span>.  que posibilita a los usuarios crear y diseñar su propio comercio electrónico. </p><p style="text-align: justify; "><span style="font-weight: bold;">
II.	LICENCIA DE SOFTWARE: </span>Los servicios que provee <b>Oshitec S.A | Buromall,</b>&nbsp;así como todos los derechos de propiedad intelectual inherentes al software son propiedad exclusiva de&nbsp;<span style="font-weight: 700;">Oshitec S.A | Buromall</span>.&nbsp;y se reserva todos los derechos sobre el Software que no se le otorgan expresamente al usuario por el presente. <b>Buromall.com</b>&nbsp;otorga al usuario una licencia limitada, revocable, no exclusiva e intransferible de acceso y uso remoto del Software, únicamente a los fines de desarrollar y mantener una tienda virtual alojada en los Servidores de&nbsp;<span style="font-weight: 700;">Buromall.com.</span>&nbsp;donde el usuario ofrezca productos o servicios propios o de terceros ("Tienda Virtual").
</p><p style="text-align: justify; ">El usuario reconoce que el Software, así como su estructura, organización y código fuente son secretos comerciales valiosos que pertenecen a&nbsp;<span style="font-weight: 700;">Buromall.com</span>&nbsp;Por lo tanto, excepto por los permisos expresamente previstos en el presente, el usuario no podrá, directa o indirectamente, por sí o a través de terceros: </p><p style="text-align: justify; ">(a) Modificar, adaptar, alterar o traducir el Software o crear obras derivadas a partir del Software. </p><p style="text-align: justify; ">(b) Distribuir, conceder la licencia a terceros, ofrecer en locación o préstamo, o transferir de cualquier otro modo el Software a terceros.</p><p style="text-align: justify; "> (c) Aplicar herramientas de ingeniería inversa para decodificar, compilar, desensamblar o intentar de cualquier otro modo descifrar el código fuente del Software.</p><p style="text-align: justify; ">(d) Transferir a terceros el derecho sobre su Tienda Virtual.</p><p style="text-align: justify; ">
</p><p style="text-align: justify; "><span style="font-weight: bold;">III.	RESPONSABILIDADES: &nbsp;</span><span style="font-weight: 700;">Oshitec S.A | Buromall,</span>&nbsp;prestará los servicios en el estado en el que se encuentran, sin prestar ninguna garantía expresa, implícita o legal, incluidas las de disponibilidad, adecuación para usos o sistemas determinados, ausencia de violaciones o errores.<br></p><p style="text-align: justify; "><span style="font-weight: 700;">Oshitec S.A | Buromall,&nbsp;</span>no garantiza el uso continuado e ininterrumpido de&nbsp;<span style="font-weight: 700;">Buromall.com,</span>&nbsp;por tal motivo los usuarios NO podrán imputarle responsabilidad alguna ni exigir pago por lucro cesante, en virtud de perjuicios resultantes de dificultades técnicas o fallas en los sistemas o en Internet o cualquier otro tipo de error.
</p><p style="text-align: justify; ">El usuario reconoce y acepta que las limitaciones de responsabilidad convenidas en los presentes Términos y Condiciones constituyen un elemento esencial del acuerdo y por lo tanto resultan razonables, toda vez que constituyen un elemento esencial para mantener las condiciones económicas del contrato.</p><p style="text-align: justify; "><b>
IV.	Servicios Adicionales de&nbsp;Buromall</b><span style="font-weight: 700;">.com</span>&nbsp;podrá prestar todos o cualquiera de los siguientes Servicios Adicionales que solicite el usuario, previa aceptación de los términos y condiciones aplicables y el pago de las tarifas, si correspondiera, por parte del usuario:
</p><p style="text-align: justify; "><span style="font-weight: bold;">1.	</span>Obtención y registro a nombre del usuario de dominio de segundo nivel ("Dominio") para la Tienda Virtual.un nombre de fantasía siempre que estuviera disponible y cumpliera las reglas que siguen a continuación.
En caso que utilizara un dominio de su propiedad, el mismo deberá estar registrado ante la autoridad competente y cumplir con la normativa vigente en la materia y la que se dicte en el futuro.&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;proveerá al usuario la información necesaria de DNS.
</p><p style="text-align: justify; ">El nombre de dominio, en cualquier caso, no podrá generar confusiones con el nombre de&nbsp;<span style="font-weight: bold;">Buromall.com&nbsp;</span>o respecto de otros negocios virtuales o usuarios registrados, ni contener datos personales, ser ofensivos, o cualquier otra regla prevista en los Términos y Condiciones de Ley. No se podrán utilizar nombres tales que puedan inducir a pensar a los usuarios que los contenidos del negocio virtual pertenecen a&nbsp;<span style="font-weight: bold;">Buromall.com</span>, tampoco se permitirá aquellos nombres de dominio que puedan causar confusión respecto a marcas o derechos de propiedad intelectual que el usuario no sea titular, como nombres de empresas, de marcas, etc.
</p><p style="text-align: justify; "><span style="font-weight: bold;">Buromall.com</span>&nbsp;se reserva el derecho de interrumpir el Servicio si a su criterio considerara que los nombres de dominio tiene alguna de las características a que hace referencia esta sección directa o indirectamente, así como a otras causas que no están expresadas en el presente contrato.</p><p style="text-align: justify; "><span style="font-weight: bold;">




2.</span>	Otros servicios.&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;podrá ofrecer otros servicios compatibles y relacionados. Si el usuario se suscribe a estos servicios adicionales, deberá leer y aceptar los Términos y Condiciones correspondientes a los mismos.&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;se reserva el derecho de modificar los servicios que presta por otros equivalentes o iguales, sin previo aviso.
</p><p style="text-align: justify; "><span style="font-weight: bold;">V.	CONTENIDO DE LA TIENDA VIRTUAL:</span>&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;no brinda garantía alguna sobre el material contenido o publicado en&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;atento que los mismos son incorporados por terceros a través del Servicio, incluyendo pero no limitado a que la información publicada sea exacta o veraz, como así tampoco asegura que la información suministrada por terceros proveedores de contenido o usuarios, se encuentre libre de errores o virus, imprecisiones técnicas, etc.
La utilización del material o de la información es de exclusiva responsabilidad del usuario o internauta y <b>Buromall.com&nbsp;</b>no será responsable por los daños o perjuicios de cualquier naturaleza producidos en razón de tales irregularidades, defectos, errores, virus, imprecisiones técnicas, etc.
</p><p style="text-align: justify; "><span style="font-weight: bold;">Buromall.com</span>&nbsp;no se responsabiliza por la existencia, actualidad, veracidad, privacidad, funcionamiento, modificaciones, contenidos, ofertas y legalidad de los sitios de terceros vinculados u hospedados en virtud del Servicio denominado&nbsp;<span style="font-weight: bold;">Buromall.com.</span></p><p style="text-align: justify; ">&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;no será responsable por las transacciones efectuadas entre el usuario y los titulares de los negocios virtuales. </p><p style="text-align: justify; ">El usuario de&nbsp;<span style="font-weight: bold;">Buromall.com&nbsp;</span>no podrá volcar términos o utilizar expresiones injuriosas, intimidatorias, calumniantes o contrarias a las buenas costumbres, no podrá transmitir información o material que pueda, concreta o eventualmente, violar derechos de un tercero o que contenga virus o cualquier otro componente dañino. En todos los casos&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;se reserva el derecho de extraer y editar total o parcialmente cualquiera de los contenidos de la Tienda Virtual.</p><p style="text-align: justify; ">El usuario se obliga a mantener indemne a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;de toda suma que sea condenada a pagar por daños resultantes de cualquier acto o hecho ilícito imputable al usuario o a un tercero que utilice la cuenta del usuario.
El usuario será el único responsable del desarrollo, funcionamiento y mantenimiento de su Tienda Virtual, incluida la aceptación, el procesamiento y el registro de pedidos de clientes a través de su Tienda, y la respuesta a consultas, reclamos y quejas de los clientes o la resolución de conflictos que puedan surgir en relación con los pedidos o ventas a través de su Tienda.
</p><p style="text-align: justify; "><b>Buromall.com&nbsp;</b>no está obligado a mantener un back-up de la información relacionada con las operaciones de la Tienda del usuario. El usuario deberá tomar las medidas que considere adecuadas para mantener dicha información conforme a sus necesidades y exigencias.
El usuario reconoce que, al permitirle publicar y distribuir productos, servicios o Contenido propios o de terceros&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;y su Software actúan únicamente como canales pasivos para la distribución y/o publicación de dichos bienes, servicios o Contenido en la Tienda del usuario. </p><p style="text-align: justify; "><span style="font-weight: bold;">Buromall.com&nbsp;</span>no revisa ni corrobora el Contenido de la Tienda del usuario, o de los productos o servicios que allí se ofrecen.
Si&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;considera que la Tienda del usuario o cualquier producto, servicio, Contenido u otro material en la Tienda o en los Servidores de <b>Buromall.com&nbsp;</b>puede generar algún tipo de responsabilidad para&nbsp;<span style="font-weight: bold;">Buromall.com</span>, podrá tomar todas las medidas que considere necesarias en relación con el Contenido, los materiales o la Tienda del usuario a fin de evitar cualquier responsabilidad que pudiera recaer sobre&nbsp;<span style="font-weight: bold;">Buromall.com</span>, El usuario otorga a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;una licencia internacional, irrevocable y gratuita, para la reproducción, distribución, creación de obras derivadas, transmisión, ejecución en público, exhibición pública o digital del Contenido de la Tienda Virtual.
</p><p style="text-align: justify; ">Dicha licencia comprende una licencia con fines de acciones de marketing.&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;podrá cargar el Contenido de la Tienda a servicios como Google, Yahoo!, Bing entre otros. Si bien el usuario otorga a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;una licencia para subir el Contenido de la Tienda del usuario en herramientas de Terceros, <b>Buromall.com</b>&nbsp;no está obligado a subir el contenido.
</p><p style="text-align: justify; "><span style="font-weight: bold;">VI.</span>	<b>OBLIGACIONES</b> <b>DEL</b> <b>USUARIO</b>: El usuario reconoce y acepta que es el único responsable por la configuración del negocio virtual y por la alimentación de su contenido y su regular funcionamiento. Deberá efectuar las alteraciones que sean necesarias a los fines de adecuar el negocio virtual a las innovaciones técnicas o medidas de seguridad, o cualquier otro tipo, y de optimización que determine&nbsp;<span style="font-weight: bold;">Buromall.com</span></p><p style="text-align: justify; ">El usuario reconoce y acepta que es responsable exclusivo por el contenido del negocio virtual y por el nombre de dominio utilizado y mantendrá indemne a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;por cualquier suma que ésta sea condenada a pagar judicial o extrajudicialmente relacionado directa o indirectamente con el contenido del negocio virtual o su nombre de dominio.
</p><p style="text-align: justify; "><span style="font-weight: bold;">



VII.	PROHIBICIONES:</span> Está prohibido a los usuarios instalar, intentar instalar o utilizar cualquier tipo de programa en el servidor, así como realizar cualquier otra práctica que pueda ocasionar algún perjuicio al regular funcionamiento del mismo.
</p><p style="text-align: justify; ">Se encuentra prohibido almacenar en el negocio virtual material pornográfico, racista o que atente contra la moral y las buenas costumbres o que infrinja derechos de terceros así como también almacenar archivos o cualquier otro tipo de contenido no relacionados con comercio electrónico.
Las tiendas virtuales para Adultos deberán identificarlas como tales. El usuario se compromete a informar a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;sobre el contenido de su negocio virtual en oportunidad de contratar el Servicio y cuando&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;lo requiera. </p><p style="text-align: justify; ">El usuario es exclusivamente responsable por la legalidad de los productos, bienes o servicios que ofrece a través de la tienda virtual y en consecuencia libera a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;de toda responsabilidad relacionada con estas cuestiones.
Se encuentra prohibido utilizar el Servicio para el envío masivo de correo electrónico no solicitado o cualquier otro tipo de correo electrónico que pueda ser considerado como Spam.
</p><p style="text-align: justify; ">Está prohibido utilizar el negocio virtual para hospedar en forma gratuita u onerosa contenido de terceros o sitios web de terceros.
Se encuentra prohibido superar o alterar por cualquier medio las limitaciones técnicas del servicio.
Se encuentra prohibido llevar a cabo cualquier tipo de acto tendiente a evitar los procedimientos de autenticación o seguridad, componente de red o cuenta de usuario con el fin de acceder a los datos, cuentas o servidores a los cuales el usuario no está expresamente autorizado. </p><p style="text-align: justify; ">Esta prohibición se aplica tanto en el caso que el intento sea exitoso o como también en el caso que el mismo sea fallido, e incluye el uso no autorizado de scanners u otras herramientas con el fin de lograr accesos no autorizados.
Se encuentra terminantemente prohibido el monitoreo no autorizado de datos o de tráfico, así como también la utilización excesiva del ancho de banda mediante la utilización de programas, scripts o comandos para sobrecargar los sitios web de&nbsp;<span style="font-weight: 700;">Buromall.com</span>&nbsp;o cualquier otro.
</p><p style="text-align: justify; ">El usuario no podrá utilizar los servicios de almacenamiento para fines que no sean el alojamiento y servidor de comercio electrónico de páginas de Internet a través de un navegador de Internet. El usuario tampoco podrá utilizar dichos servicios para almacenar información que no esté relacionada con las operaciones de la Tienda Virtual,&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;cuenta con políticas internas y puede limitar el número de descargas desde el sitio del usuario si la capacidad de procesamiento del servidor de&nbsp;<span style="font-weight: bold;">Buromall.com</span>, la memoria del servidor o los controles de abuso indican que el usuario

está usando los servicios de almacenamiento con fines distintos a la satisfacción de las necesidades de comercio electrónico de una empresa pequeña/mediana e independiente.
</p><p style="text-align: justify; ">El incumplimiento de cualquiera de las disposiciones de los presente Términos y Condiciones por parte del usuario constituirá una violación del presente y será causal de cancelación y/o extinción inmediata de la relación comercial con&nbsp;<span style="font-weight: bold;">Buromall.com</span></p><p style="text-align: justify; "><span style="font-weight: bold;">VIII.	TARIFAS:</span>&nbsp;El usuario pagará las tarifas correspondientes por la prestación de los servicios que solicite, de conformidad con la Política de Tarifas de&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;que se incorporan al presente por vía de referencia.&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;podrá modificar la Política de Tarifas y las tarifas que cargue por sus Servicios en cualquier momento.
</p><p style="text-align: justify; "><span style="font-weight: bold;">IX.	AUTORIZACIONES:</span> El usuario autoriza a&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;a acceder a los contenidos del negocio virtual y archivos adjuntos siempre que fuera necesario o conveniente para la adecuada prestación del Servicio.</p><p style="text-align: justify; "><span style="font-weight: bold;">Buromall.com</span>&nbsp;no tendrá obligación de informar a los usuarios respecto de la realización de interrupciones en el Servicio que fueran necesarias a los fines de su optimización o mantenimiento.&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;podrá instalar sin autorización de los usuarios programas de protección o seguridad contra ataques externos, antivirus, firewall, upgrades de software y hardware.
</p><p style="text-align: justify; "><span style="font-weight: bold;">X.	CONSECUENCIAS DE INCUMPLIMIENTO:</span> En el caso de alguna violación a los Términos y Condiciones,&nbsp;<span style="font-weight: 700;">Oshitec S.A | Buromall</span>&nbsp;podrá - sin necesidad de previa notificación suspender o finalizar algunos o todos los Servicios, bloquear cualquier actividad abusiva y/o tomar cualquier acción que sea considerada apropiada a su exclusivo criterio.&nbsp;<span style="font-weight: bold;">Buromall.com&nbsp;</span>se reserva el derecho de denunciar tales violaciones a las autoridades pertinentes y revelar cualquier información con la finalidad de cumplir con las leyes, reglamentos y/o a requerimiento de autoridad competente a los efectos de cooperar con las mismas en su resolución.
</p><p style="text-align: justify; "><span style="font-weight: bold;">





XI.	USO ILEGAL-ABUSO:</span>&nbsp;<span style="font-weight: bold;">Buromall.com</span>&nbsp;considerará uso abusivo del Servicio cualquiera de las siguientes acciones que se enumeran en forma no taxativa:</p><p style="text-align: justify; "><span style="font-weight: bold;">
1.	</span>Acciones que restrinjan o inhiban del uso a cualquier persona del uso de los productos y servicios ofrecidos por&nbsp;<span style="font-weight: bold;">Buromall.com</span></p><p style="text-align: justify; "><span style="font-weight: bold;">2.	</span>La introducción de programas dañinos o virus en la red o servidores.
</p><p style="text-align: justify; "><span style="font-weight: bold;">3.</span>	El aprovechamiento de posibles vulnerabilidades presentes en los sitios web de&nbsp;<span style="font-weight: bold;">Buromall.com</span></p><p style="text-align: justify; "><span style="font-weight: bold;">4.</span>	El hostigamiento a terceros, a redes o servidores, a través de lenguaje, frecuencia o tamaño de mensajes o archivos.
</p><p style="text-align: justify; "><span style="font-weight: bold;">5.</span>	Fraguar los encabezados de los mensajes o la identidad del remitente, o tomar cualquier otra acción similar con el fin de evitar restricciones o limitaciones en el acceso a un servicio específico o cualquier otro fin.
</p><p style="text-align: justify; "><span style="font-weight: bold;">6.</span>	Falsificar la identidad o información de contacto así como proveer información falsa, incorrecta o fraudulenta.</p>',
                'description_es' => 'Conoce los Términos y Condiciones de Buromall.S.A.',
                'keywords_es' => 'terminos y condiciones, términos y condiciones, terminos, condiciones, Buromall',
                'title_en' => 'Our Terms and Conditions',
                'text_en' => 'TÉRMINOS Y CONDICIONES GENERALES
Este contrato describe los términos y condiciones (los "Términos y Condiciones") aplicables al uso de los servicios ofrecidos por PaseoMall.com, S.A. dentro del sitio www.paseomall.com, en adelante denominado EL SITIO o/ PASEOMALL.COM
Mediante la aceptación de los Términos y Condiciones Generales en el momento de la registración el usuario acepta las políticas aquí contenidas.
CUALQUIER PERSONA QUE NO ACEPTE ESTOS TÉRMINOS Y CONDICIONES GENERALES, LOS CUALES TIENEN UN CARÁCTER OBLIGATORIO Y VINCULANTE, DEBERÁ ABSTENERSE DE UTILIZAR EL SITIO Y/O LOS SERVICIOS.
El usuario debe leer, entender y aceptar todas las condiciones establecidas en los Términos y Condiciones así como en los demás documentos incorporados a los mismos por referencia, previo a la utilización de paseomall.com
I.	Objeto
PASEOMALL.COM permite a los usuarios montar y administrar su propio negocio virtual a través de la utilización de un software desarrollado y de propiedad de PASEOMALL.COM, S.A.  que posibilita a los usuarios crear y diseñar su propio comercio electrónico.
II.	Licencia de Software
Los Servicios que provee PASEOMALL.COM así como todos los derechos de propiedad intelectual inherentes al Software son propiedad exclusiva de PASEOMALL.COM, S.A. y se reserva todos los derechos sobre el Software que no se le otorgan expresamente al usuario por el presente.
PASEOMALL.COM otorga al usuario una licencia limitada, revocable, no exclusiva e intransferible de acceso y uso remoto del Software, únicamente a los fines de desarrollar y mantener una tienda virtual alojada en los Servidores de PASEOMALL.COM donde el usuario ofrezca productos o servicios propios o de terceros ("Tienda Virtual").
El usuario reconoce que el Software, así como su estructura, organización y código fuente son secretos comerciales valiosos que pertenecen a PASEOMALL.COM. Por lo tanto, excepto por los permisos expresamente previstos en el presente, el usuario no podrá, directa o indirectamente, por sí o a través de terceros, (a) modificar, adaptar, alterar o traducir el Software o crear obras derivadas a partir del Software; (b) distribuir, conceder la licencia a terceros, ofrecer en locación o préstamo, o transferir de cualquier otro modo el Software a terceros; (c) aplicar herramientas de ingeniería inversa para decodificar, decompilar, desensamblar o intentar de cualquier otro modo descifrar el código fuente del Software; o (d) transferir a terceros el derecho sobre su Tienda Virtual.
III.	Responsabilidades
PASEOMALL.COM prestará los Servicios en el estado en el que se encuentran, sin prestar ninguna garantía expresa, implícita o legal, incluidas las de disponibilidad, adecuación para usos o sistemas determinados, ausencia de violaciones o errores. PASEOMALL.COM no garantiza el uso continuado e ininterrumpido de PASEOMALL.COM por tal motivo los usuarios NO podrán imputarle responsabilidad alguna ni exigir pago por lucro cesante, en virtud de perjuicios resultantes de dificultades técnicas o fallas en los sistemas o en Internet o cualquier otro tipo de error.
El usuario reconoce y acepta que las limitaciones de responsabilidad convenidas en los presentes Términos y Condiciones constituyen un elemento esencial del acuerdo y por lo tanto resultan razonables, toda vez que constituyen un elemento esencial para mantener las condiciones económicas del contrato.
IV.	Servicios Adicionales de PASEOMALL.COM
PASEOMALL.COM podrá prestar todos o cualquiera de los siguientes Servicios Adicionales que solicite el usuario, previa aceptación de los términos y condiciones aplicables y el pago de las tarifas, si correspondiera, por parte del usuario:
1.	Obtención y registro a nombre del usuario de dominio de segundo nivel ("Dominio") para la Tienda Virtual
El usuario puede identificar su negocio virtual utilizando un nombre de dominio propio o provisto por PASEOMALL.COM, en cuyo caso el usuario elegirá un nombre de fantasía siempre que estuviera disponible y cumpliera las reglas que siguen a continuación.
En caso que utilizara un dominio de su propiedad, el mismo deberá estar registrado ante la autoridad competente y cumplir con la normativa vigente en la materia y la que se dicte en el futuro. PASEOMALL.COM proveerá al usuario la información necesaria de DNS.
El nombre de dominio, en cualquier caso, no podrá generar confusiones con el nombre de PASEOMALL.COM o respecto de otros negocios virtuales o usuarios registrados, ni contener datos personales, ser ofensivos, o cualquier otra regla prevista en los Términos y Condiciones o la Ley. No se podrán utilizar nombres tales que puedan inducir a pensar a los usuarios que los contenidos del negocio virtual pertenecen a PASEOMALL.COM.   Tampoco se permitirá aquellos nombres de dominio que puedan causar confusión respecto a marcas o derechos de propiedad intelectual que el usuario no sea titular, como nombres de empresas, de marcas, etc.
PASEOMALL.COM se reserva el derecho de interrumpir el Servicio si a su criterio considerara que los nombres de dominio tiene alguna de las características a que hace referencia esta sección directa o indirectamente, así como a otras causas que no están expresadas en el presente contrato.




2.	Otros servicios
PASEOMALL.COM podrá ofrecer otros servicios compatibles y relacionados. Si el usuario se suscribe a estos servicios adicionales, deberá leer y aceptar los Términos y Condiciones correspondientes a los mismos.
PASEOMALL.COM se reserva el derecho de modificar los Servicios que presta por otros equivalentes o iguales, sin previo aviso.
V.	Contenido de la Tienda Virtual
PASEOMALL.COM no brinda garantía alguna sobre el material contenido o publicado en PASEOMALL.COM atento que los mismos son incorporados por terceros a través del Servicio, incluyendo pero no limitado a que la información publicada sea exacta o veraz, como así tampoco asegura que la información suministrada por terceros proveedores de contenido o usuarios, se encuentre libre de errores o virus, imprecisiones técnicas, etc.
La utilización del material o de la información es de exclusiva responsabilidad del usuario o internauta y PASEOMALL.COM no será responsable por los daños o perjuicios de cualquier naturaleza producidos en razón de tales irregularidades, defectos, errores, virus, imprecisiones técnicas, etc.
PASEOMALL.COM no se responsabiliza por la existencia, actualidad, veracidad, privacidad, funcionamiento, modificaciones, contenidos, ofertas y legalidad de los sitios de terceros vinculados u hospedados en virtud del Servicio denominado PASEOMALL.COM.
PASEOMALL.COM no será responsable por las transacciones efectuadas entre el usuario y los titulares de los negocios virtuales. El usuario de PASEOMALL.COM no podrá volcar términos o utilizar expresiones injuriosas, intimidatorias, calumniantes o contrarias a las buenas costumbres, no podrá transmitir información o material que pueda, concreta o eventualmente, violar derechos de un tercero o que contenga virus o cualquier otro componente dañino. En todos los casos PASEOMALL.COM se reserva el derecho de extraer y editar total o parcialmente cualquiera de los contenidos de la Tienda Virtual.
El usuario se obliga a mantener indemne a PASEOMALL.COM de toda suma que sea condenada a pagar por daños resultantes de cualquier acto o hecho ilícito imputable al usuario o a un tercero que utilice la cuenta del usuario.
El usuario será el único responsable del desarrollo, funcionamiento y mantenimiento de su Tienda Virtual, incluida la aceptación, el procesamiento y el registro de pedidos de clientes a través de su Tienda, y la respuesta a consultas, reclamos y quejas de los clientes o la resolución de conflictos que puedan surgir en relación con los pedidos o ventas a través de su Tienda.


PASEOMALL.COM no está obligado a mantener un back-up de la información relacionada con las operaciones de la Tienda del usuario. El usuario deberá tomar las medidas que considere adecuadas para mantener dicha información conforme a sus necesidades y exigencias.
El usuario reconoce que, al permitirle publicar y distribuir productos, servicios o Contenido propios o de terceros PASEOMALL.COM y su Software actúan únicamente como canales pasivos para la distribución y/o publicación de dichos bienes, servicios o Contenido en la Tienda del usuario. PASEOMALL.COM no revisa ni corrobora el Contenido de la Tienda del usuario, o de los productos o servicios que allí se ofrecen.
Si PASEOMALL.COM considera que la Tienda del usuario o cualquier producto, servicio, Contenido u otro material en la Tienda o en los Servidores de PASEOMALL.COM puede generar algún tipo de responsabilidad para PASEOMALL.COM, podrá tomar todas las medidas que considere necesarias en relación con el Contenido, los materiales o la Tienda del usuario a fin de evitar cualquier responsabilidad que pudiera recaer sobre PASEOMALL.COM
El usuario otorga a PASEOMALL.COM una licencia internacional, irrevocable y gratuita, para la reproducción, distribución, creación de obras derivadas, transmisión, ejecución en público, exhibición pública o digital del Contenido de la Tienda Virtual.
Dicha licencia comprende una licencia con fines de acciones de marketing. PASEOMALL.COM podrá cargar el Contenido de la Tienda a servicios como Google, Yahoo!, Bing entre otros. Si bien el usuario otorga a PASEOMALL.COM una licencia para subir el Contenido de la Tienda del usuario en herramientas de Terceros, PASEOMALL.COM no está obligado a subir el contenido.
VI.	Obligaciones del usuario
El usuario reconoce y acepta que es el único responsable por la configuración del negocio virtual y por la alimentación de su contenido y su regular funcionamiento. Deberá efectuar las alteraciones que sean necesarias a los fines de adecuar el negocio virtual a las innovaciones técnicas o medidas de seguridad, o cualquier otro tipo, y de optimización que determine PASEOMALL.COM
El usuario reconoce y acepta que es responsable exclusivo por el contenido del negocio virtual y por el nombre de dominio utilizado y mantendrá indemne a PASEOMALL.COM por cualquier suma que ésta sea condenada a pagar judicial o extrajudicialmente relacionado directa o indirectamente con el contenido del negocio virtual o su nombre de dominio.




VII.	Prohibiciones
Está prohibido a los usuarios instalar, intentar instalar o utilizar cualquier tipo de programa en el servidor, así como realizar cualquier otra práctica que pueda ocasionar algún perjuicio al regular funcionamiento del mismo.
Se encuentra prohibido almacenar en el negocio virtual material pornográfico, racista o que atente contra la moral y las buenas costumbres o que infrinja derechos de terceros así como también almacenar archivos o cualquier otro tipo de contenido no relacionados con comercio electrónico.
Las tiendas virtuales para Adultos deberán identificarlas como tales. El usuario se compromete a informar a PASEOMALL.COM sobre el contenido de su negocio virtual en oportunidad de contratar el Servicio y cuando PASEOMALL.COM lo requiera. El usuario es exclusivamente responsable por la legalidad de los productos, bienes o servicios que ofrece a través de la tienda virtual y en consecuencia libera a PASEOMALL.COM de toda responsabilidad relacionada con estas cuestiones.
Se encuentra prohibido utilizar el Servicio para el envío masivo de correo electrónico no solicitado o cualquier otro tipo de correo electrónico que pueda ser considerado como Spam.
Está prohibido utilizar el negocio virtual para hospedar en forma gratuita u onerosa contenido de terceros o sitios web de terceros.
Se encuentra prohibido superar o alterar por cualquier medio las limitaciones técnicas del servicio.
Se encuentra prohibido llevar a cabo cualquier tipo de acto tendiente a evitar los procedimientos de autenticación o seguridad, componente de red o cuenta de usuario con el fin de acceder a los datos, cuentas o servidores a los cuales el usuario no está expresamente autorizado. Esta prohibición se aplica tanto en el caso que el intento sea exitoso o como también en el caso que el mismo sea fallido, e incluye el uso no autorizado de scanners u otras herramientas con el fin de lograr accesos no autorizados.
Se encuentra terminantemente prohibido el monitoreo no autorizado de datos o de tráfico, así como también la utilización excesiva del ancho de banda mediante la utilización de programas, scripts o comandos para sobrecargar los sitios web de PASEOMALL.COM o cualquier otro.
El usuario no podrá utilizar los servicios de almacenamiento para fines que no sean el alojamiento y servidor de comercio electrónico de páginas de Internet a través de un navegador de Internet. El usuario tampoco podrá utilizar dichos servicios para almacenar información que no esté relacionada con las operaciones de la Tienda Virtual, PASEOMALL.COM cuenta con políticas internas y puede limitar el número de descargas desde el sitio del usuario si la capacidad de procesamiento del servidor de PASEOMALL.COM, la memoria del servidor o los controles de abuso indican que el usuario

está usando los servicios de almacenamiento con fines distintos a la satisfacción de las necesidades de comercio electrónico de una empresa pequeña/mediana e independiente.
El incumplimiento de cualquiera de las disposiciones de los presente Términos y Condiciones por parte del usuario constituirá una violación del presente y será causal de cancelación y/o extinción inmediata de la relación comercial con PASEOMALL.COM
VIII.	Tarifas
El usuario pagará las tarifas correspondientes por la prestación de los Servicios que solicite, de conformidad con la Política de Tarifas de PASEOMALL.COM que se incorporan al presente por vía de referencia. PASEOMALL.COM podrá modificar la Política de Tarifas y las tarifas que cargue por sus Servicios en cualquier momento.
IX.	Autorizaciones
El usuario autoriza a PASEOMALL.COM a acceder a los contenidos del negocio virtual y archivos adjuntos siempre que fuera necesario o conveniente para la adecuada prestación del Servicio.
PASEOMALL.COM no tendrá obligación de informar a los usuarios respecto de la realización de interrupciones en el Servicio que fueran necesarias a los fines de su optimización o mantenimiento.
PASEOMALL.COM podrá instalar sin autorización de los usuarios programas de protección o seguridad contra ataques externos, antivirus, firewall, upgrades de software y hardware.
X.	Consecuencias de incumplimiento
En el caso de alguna violación a los Términos y Condiciones, PASEOMALL.COM podrá - sin necesidad de previa notificación suspender o finalizar algunos o todos los Servicios, bloquear cualquier actividad abusiva y/o tomar cualquier acción que sea considerada apropiada a su exclusivo criterio.
PASEOMALL.COM se reserva el derecho de denunciar tales violaciones a las autoridades pertinentes y revelar cualquier información con la finalidad de cumplir con las leyes, reglamentos y/o a requerimiento de autoridad competente a los efectos de cooperar con las mismas en su resolución.






XI.	Uso ilegal- Abuso
PASEOMALL.COM considerará uso abusivo del Servicio cualquiera de las siguientes acciones que se enumeran en forma no taxativa:
1.	Acciones que restrinjan o inhiban del uso a cualquier persona del uso de los productos y servicios ofrecidos por PASEOMALL.COM
2.	La introducción de programas dañinos o virus en la red o servidores.
3.	El aprovechamiento de posibles vulnerabilidades presentes en los sitios web de PASEOMALL.COM
4.	El hostigamiento a terceros, a redes o servidores, a través de lenguaje, frecuencia o tamaño de mensajes o archivos.
5.	Fraguar los encabezados de los mensajes o la identidad del remitente, o tomar cualquier otra acción similar con el fin de evitar restricciones o limitaciones en el acceso a un servicio específico o cualquier otro fin.
6.	Falsificar la identidad o información de contacto así como proveer información falsa, incorrecta o fraudulenta.

',
                'description_en' => 'Know the Terms and conditions of PaymentSpot',
                'keywords_en' => 'terms and conditions, terms, conditions, Buromall',
                'title_pt' => '',
                'text_pt' => '',
                'description_pt' => '',
                'keywords_pt' => '',
                'url_img' => 'terms.jpg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00'
            ),
        ));


    }
}
