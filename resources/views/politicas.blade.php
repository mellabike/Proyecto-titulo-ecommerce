@extends('maestra')

@section('seccion')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <script>
            function mostrar(enla) {
            obj = document.getElementById('oculto'+enla);
            obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';}
            </script>
                       
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Politicas de Compra/Venta</title>
  </head>
  <body>

        <h4>Politicas de Compra/Venta</h4>
        <h6>Términos y condiciones de uso del sitio AbastCam<br><br>
            <p>
            Este contrato describe los términos y condiciones generales aplicables al uso de los servicios ofrecidos por AbastCam. Cualquier persona que desee acceder y/o usar el sitio o los servicios de www.abastcam.cl podrá hacerlo sujetándose a los Términos y Condiciones Generales, junto con todas las demás políticas y principios que rige AbastCam y que son incorporados al presente por referencia.
            </p>        
                CUALQUIER PERSONA QUE NO ACEPTE ESTOS TÉRMINOS Y CONDICIONES GENERALES, LOS CUALES TIENEN UN CARÁCTER OBLIGATORIO Y VINCULANTE, DEBERÁ ABSTENERSE DE UTILIZAR EL SITIO Y/O LOS SERVICIOS.
                <br>
                El Usuario debe leer, entender y aceptar todas las condiciones establecidas en los Términos y Condiciones Generales y en las Políticas de Privacidad así como en los demás documentos incorporados a los mismos por referencia, previo a su inscripción como Usuario de AbastCam.
                <br><br>
                01 - Capacidad 
                <a href="#" onclick="mostrar('1'); return false" />Ver/Ocultar</a>
                <div id="oculto1" style="visibility:hidden">
                Los Servicios sólo están disponibles para personas que tengan capacidad legal para contratar. No podrán utilizar los servicios las personas que no tengan esa capacidad, los menores de edad o Usuarios de AbastCam que hayan sido suspendidos temporalmente o inhabilitados definitivamente. Si estás inscribiendo un Usuario como Empresa, debes tener capacidad para contratar a nombre de tal entidad y de obligar a la misma en los términos de este Acuerdo.     
                </div>
                02 - Inscripción
                <a href="#" onclick="mostrar('2'); return false" />Ver/Ocultar</a>
                <div id="oculto2" style="visibility:hidden">
                Para poder utilizar los servicios que brinda AbastCam es obligatorio que todos los campos del formulario de inscripción cuenten con datos válidos. El futuro Usuario debe verificar que la información personal que pone a disposición de AbastCam a fin de registrarse en el Sitio sea exacta, precisa y verdadera ("Datos Personales") y asume el compromiso de actualizar los Datos Personales conforme resulte necesario. El Usuario presta expresa conformidad con que AbastCam utilice diversos medios para identificar sus datos personales, asumiendo el Usuario la obligación de revisarlos y mantenerlos actualizados. AbastCam NO se responsabiliza por la certeza de los Datos Personales de los Usuarios. Los Usuarios garantizan y responden, en cualquier caso, de la veracidad, exactitud, vigencia y autenticidad de sus Datos Personales.
                </div> 
                03 - Ingreso
                <a href="#" onclick="mostrar('3'); return false" />Ver/Ocultar</a>
                <div id="oculto2" style="visibility:hidden">
                El Usuario accederá a su cuenta personal ("Cuenta") mediante el ingreso de su Seudónimo o de un correo electrónico a su elección, y de la clave de seguridad personal elegida ("Clave de Seguridad"). El Usuario se obliga a mantener la confidencialidad de su Clave de Seguridad. La Cuenta es personal, única e intransferible, y está prohibido que un mismo Usuario inscriba o posea más de una Cuenta. El Usuario reconoce que PortalInmobiliario.com es una marca de Mercado Libre y que la plataforma Portalinmobiliario.com está integrada con el Sitio Web. Esto significa que cuando los Usuarios ingresan al Sitio Web, están automáticamente ingresando a la plataforma Portalinmobiliario.com, y que su información, datos personales y actividad como usuarios del sitio, es compartida e integrada en tiempo real. En caso que Mercado Libre detecte distintas Cuentas que contengan datos coincidentes o relacionados, podrá cancelar, suspender o inhabilitarlas.
                </div>
                04 -Datos usuario 
                <a href="#" onclick="mostrar('4'); return false" />Ver/Ocultar</a>
                <div id="oculto2" style="visibility:hidden">
                Para poder utilizar los servicios que brinda AbastCam es obligatorio que todos los campos del formulario de inscripción cuenten con datos válidos. El futuro Usuario debe verificar que la información personal que pone a disposición de AbastCam a fin de registrarse en el Sitio sea exacta, precisa y verdadera ("Datos Personales") y asume el compromiso de actualizar los Datos Personales conforme resulte necesario. El Usuario presta expresa conformidad con que AbastCam utilice diversos medios para identificar sus datos personales, asumiendo el Usuario la obligación de revisarlos y mantenerlos actualizados. AbastCam NO se responsabiliza por la certeza de los Datos Personales de los Usuarios. Los Usuarios garantizan y responden, en cualquier caso, de la veracidad, exactitud, vigencia y autenticidad de sus Datos Personales.
                El Usuario será responsable por todas las operaciones efectuadas en su Cuenta, pues el acceso a la misma está restringido al ingreso y uso de su Clave de Seguridad, de conocimiento exclusivo del Usuario. El Usuario se compromete a notificar a AbastCam en forma inmediata y por medio idóneo y fehaciente, cualquier uso no autorizado de su Cuenta, así como el ingreso por terceros no autorizados a la misma.
                 </div>                     
                                 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
        
        <br><br>
        
        
                Ver políticas de inhabilitación o suspensión de usuario
        
        03 - Modificaciones del Acuerdo
        Mercado Libre podrá modificar los Términos y Condiciones Generales en cualquier momento haciendo públicos en el Sitio los términos modificados. Todos los términos modificados entrarán en vigor a los 10 (diez) días de su publicación. Dichas modificaciones serán comunicadas por Mercado Libre a los usuarios que en la Configuración de su Cuenta de Mercado Libre hayan indicado que desean recibir notificaciones de los cambios en estos Términos y Condiciones. Todo usuario que no esté de acuerdo con las modificaciones efectuadas por Mercado Libre podrá solicitar la baja de la cuenta.
        
        El uso del sitio y/o sus servicios implica la aceptación de estos Términos y Condiciones generales de uso de Mercado Libre.
        
        04 - Listado de Bienes
        4.1 Utilización de MercadoPago. Al publicar un anuncio en el Sitio, el usuario vendedor consiente expresamente la utilización de Mercado Pago como una de las formas disponibles para el pago del bien o servicio ofrecido y se obliga a no modificar en nada el precio de venta del bien o servicio si el comprador decidiera utilizar MercadoPago. Asimismo, el usuario declara que ha leído, comprendido y aceptado los Términos y Condiciones de utilización de dicho servicio.
        
        4.2 Publicación de bienes y/o servicios. El Usuario deberá ofrecer a la venta, los bienes y/o servicios en las categorías y subcategorías apropiadas. Las publicaciones podrán incluir textos descriptivos, gráficos, fotografías y otros contenidos y condiciones pertinentes para la venta del bien o la contratación del servicio, siempre que no violen ninguna disposición de este acuerdo o demás políticas de Mercado Libre. El producto ofrecido por el Usuario Vendedor debe ser exactamente descrito en cuanto a sus condiciones y características relevantes. Se entiende y presume que mediante la inclusión del bien o servicio en Mercado Libre, el Usuario acepta que tiene la intención y el derecho de vender el bien por él ofrecido, o está facultado para ello por su titular y lo tiene disponible para su entrega inmediata. Se establece que los precios de los productos publicados deberán ser expresados con IVA incluido cuando corresponda la aplicación del mismo, y en moneda del curso legal. Mercado Libre podrá remover cualquier publicación cuyo precio no sea expresado de esta forma para evitar confusiones o malos entendidos en cuanto al precio final del producto. Se deja expresamente establecido que ninguna descripción podrá contener datos personales o de contacto, tales como, y sin limitarse a, números telefónicos, dirección de e-mail, dirección postal, direcciones de páginas de Internet que contengan datos como los mencionados anteriormente, salvo lo estipulado específicamente para las categorías: Autos, motos y otros, Inmuebles y Servicios. No podrá publicitarse otros medios de pagos, distintos de los enunciados por Mercado Libre en la página de publicación de artículos ni tampoco podrá sugerir o insinuar a los compradores que no utilicen Mercado Pago y/o alterar las condiciones de compra si el Usuario comprador decidiera utilizar MercadoPago. En caso que se infrinja cualquiera de las disposiciones establecidas en esta cláusula, Mercado Libre podrá editar el espacio, solicitar al Usuario que lo edite, o dar de baja la publicación donde se encuentre la infracción.
        
        
        4.3 Inclusión de imágenes y fotografías. El usuario puede incluir imágenes y fotografías del producto ofrecido siempre que las mismas se correspondan con el artículo, salvo que se trate de bienes o productos o de servicios que por su naturaleza no permiten esa correspondencia. El usuario declara y garantiza que está facultado para incluir las imágenes y fotografías contenidas en sus publicaciones, siendo responsable por cualquier infracción a derechos de terceros.
        
        Mercado Libre podrá impedir la publicación de la fotografía, e incluso del producto, si interpretara, a su exclusivo criterio, que la imagen no cumple con los presentes Términos y Condiciones. Las imágenes y fotografías de artículos publicados en el tipo de publicación Clásica o Premium deberán cumplir con algunos requisitos adicionales como condición para ser expuestas en la Pagina Principal del Sitio Web. Conoce los requisitos. 
        
        El usuario otorga a Mercado Libre una autorización gratuita y sin límite temporal para publicar y/o adaptar las imágenes incluidas en sus publicaciones con fines de clasificación de productos en todos sus sitios, redes sociales y/o por cualquier medio que Mercado Libre utilice para comunicación.
        
        4.4 Artículos Prohibidos. Sólo podrán ser ingresados en las listas de bienes y/o servicios ofrecidos, aquellos cuya venta no se encuentre tácita o expresamente prohibida en los Términos y Condiciones Generales y demás políticas de Mercado Libre o por la ley vigente. Para obtener mayor información sobre artículos o servicios prohibidos, se pueden consultar nuestras Políticas de Artículos Prohibidos de Mercado Libre.
        
        4.5 Protección de Propiedad Intelectual. Mercado Libre ha desarrollado un Programa (en adelante, "PPPI") destinado a asegurar que los artículos publicados no infringen los derechos de propiedad intelectual e industrial y cualesquiera otros de terceros. Los participantes del PPPI o quienes sean titulares de derechos podrán identificar y solicitar la remoción de aquellos artículos que a su criterio infrinjan o violen sus derechos. En caso que Mercado Libre sospeche que se está cometiendo o se ha cometido una actividad ilícita o infractora de derechos de propiedad intelectual o industrial, Mercado Libre se reserva el derecho de adoptar todas las medidas que entienda adecuadas, lo que puede incluir dar acceso limitado a los participantes del PPPI y otros titulares de estos derechos a algunos de sus datos personales tal y como se describe en las Políticas de Privacidad.
         
        
        05 - Privacidad de la Información
        Para utilizar los Servicios ofrecidos por Mercado Libre, los Usuarios deberán facilitar determinados datos de carácter personal. Su información personal se procesa y almacena en servidores o medios magnéticos que mantienen altos estándares de seguridad y protección tanto física como tecnológica. Para mayor información sobre la privacidad de los Datos Personales y casos en los que será revelada la información personal, se pueden consultar nuestras Políticas de Privacidad.
        
        06 - Obligaciones de los Usuarios
        6.1 Obligaciones del Comprador. Durante el plazo fijado por el Usuario Vendedor, los Usuarios interesados realizarán ofertas de compra para los bienes y ofertas de contratación para los servicios. La oferta de venta se cierra una vez que vence el plazo o se acaban las cantidades estipuladas por el Vendedor, y la oferta de contratación del servicio culmina con el vencimiento del plazo de la publicación.
        
        El Comprador está obligado a intentar comunicarse con el vendedor y completar la operación si ha realizado una oferta por un artículo publicado bajo la modalidad de "compra inmediata" o si realizó la oferta más alta, en los casos en que esta modalidad esté permitida, salvo que la operación esté prohibida por la ley o los Términos y Condiciones Generales y demás políticas de Mercado Libre, en cuyo caso no estará obligado a concretar la operación.
        
        Al ofertar por un artículo el Usuario acepta quedar obligado por las condiciones de venta incluidas en la descripción del artículo en la medida en que las mismas no infrinjan las leyes o los Términos y Condiciones Generales y demás políticas de Mercado Libre. La oferta de compra es irrevocable salvo en circunstancias excepcionales, tales como que el vendedor cambie sustancialmente la descripción del artículo después de realizada alguna oferta, que exista un claro error tipográfico, o que no pueda verificar la identidad del vendedor.
        
        Las ofertas de compra sólo serán consideradas válidas, una vez que hayan sido procesadas por el sistema informático de Mercado Libre.
        
        Impuestos. Tal como lo establece la normativa fiscal vigente, el comprador debe exigir boleta o factura al vendedor como comprobante de la operación. El vendedor no estará obligado a emitir boleta o factura sólo en el caso de tratarse de una persona física que efectúa ventas ocasionalmente.
        
        6.2. Obligaciones del Vendedor. El Usuario Vendedor debe tener capacidad legal para vender el bien objeto de su oferta. Si el Usuario Vendedor ha recibido al menos una oferta sobre el precio mínimo que estableció, queda obligado a intentar comunicarse con el comprador y completar la operación con el Usuario que haya realizado la oferta más alta o la que alcance el precio establecido en la modalidad Compra Inmediata. La cancelación de las ofertas de compra por parte del usuario vendedor impactarán en su reputación. La reiteración de estas cancelaciones hasta alcanzar un porcentaje igual o mayor al 2.5% sobre el total de ofertas de compra recibidas, será tenida en cuenta por Mercado Libre para sancionar y/o inhabilitar su cuenta.
        
        Mercado Libre tendrá el derecho de requerir, conforme los criterios que considere pertinentes, que ciertos Usuarios vendedores solamente anuncien sus bienes o servicios en el Sitio Web mediante la utilización de los Servicios de Gestión de Pagos online de Mercado Pago y/o otras herramientas ofrecidas por Mercado Libre para el cobro del bien vendido y de las tarifas por la utilización de los servicios, importando eventualmente en el pago de tarifas aplicables por la utilización de los mismos.
        
        Dado que Mercado Libre es un punto de encuentro entre comprador y vendedor y no participa de las operaciones que se realizan entre ellos, el Vendedor será responsable por todas las obligaciones y cargas impositivas que correspondan por la venta de sus artículos, sin que pudiera imputársele a Mercado Libre algún tipo de responsabilidad por incumplimientos en tal sentido.
        
        Cuando el Vendedor haya recibido una oferta en un artículo por él publicado, deberá calificar a la contraparte de acuerdo a lo establecido en la Cláusula 14 de estos Términos y Condiciones Generales.
        
        Impuestos. Como se menciona anteriormente, Mercado Libre sólo pone a disposición de los Usuarios un espacio virtual que les permite comunicarse mediante Internet para encontrar una forma de vender o comprar artículos y/o servicios. Mercado Libre no tiene participación alguna en el proceso de negociación y perfeccionamiento del contrato definitivo entre las partes. Por eso, Mercado Libre no es responsable por el efectivo cumplimiento de las obligaciones fiscales o impositivas establecidas por la ley vigente.
        
        Encuentra más información en ventas.
        
        El vendedor acepta que su comprador puede revocar la compra dentro de un plazo de 10 días desde que recibe el producto. Asimismo, el vendedor acepta que los compradores podrán pedir el cambio o devolución del producto en los términos de los programas de Compra Protegida, Mercado Puntos y demás Anexos, hasta 30 días después de la recepción del producto.
        
        En cualquiera de los mencionados casos, el vendedor deberá aceptar el cambio o devolución del producto vendido y podrá hacerse cargo de los gastos que esto conlleve, incluyendo los costos de envío que fueren necesarios. Mercado Libre podrá debitar estos costos de la cuenta de Mercado Pago del vendedor.
        
        Mercado Libre podrá disponibilizar etiquetas de envíos para que el comprador realice la devolución y debitar el costo de las misma de la cuenta de Mercado Pago del vendedor.
        
        Si en la operación en cuestión hubiese sido usado el servicio de Mercado Envíos, Mercado Libre podrá disponibilizar etiquetas de envíos para que el comprador realice la devolución y debitar el costo de las mismas de la cuenta de Mercado Pago del vendedor.
        
        Sin perjuicio de lo previsto en el párrafo anterior, en el caso de publicaciones que prevean envíos internacionales, el vendedor podrá excluir el derecho de retracto del comprador siempre que cumpla con los requisitos que prevé la normativa vigente.
        
        07 - Prohibiciones
        Los Usuarios no podrán: (a) manipular los precios de los artículos; (b) interferir en la puja entre distintos Usuarios; (c) mantener ningún tipo de comunicación por e-mail, o por cualquier otro medio (incluso redes sociales) durante la oferta del bien con ninguno de los Usuarios que participan en la misma, salvo en la sección de Preguntas y Respuestas; (d) dar a conocer sus datos personales o de otros usuarios a través de la sección de Preguntas y Respuestas y/o por algún otro medio (incluyendo pero sin limitar a Twitter, Facebook y/ o cualquier otra red social), salvo lo estipulado específicamente para la categoría Autos, motos y otros, Servicios e Inmuebles; (e) aceptar datos personales proporcionados por otros usuarios a través de la sección de Preguntas y Respuestas y/o algún otro medio (incluyendo pero sin limitar Twitter, Facebook y/o cualquier otra red social); (f) publicar o vender artículos prohibidos por los Términos y Condiciones Generales, demás políticas de Mercado Libre o leyes vigentes; (g) insultar o agredir a otros Usuarios; (h) utilizar su reputación, calificaciones o comentarios recibidos en el sitio de Mercado Libre en cualquier ámbito fuera de Mercado Libre; (i) publicar artículos idénticos en más de una publicación.
        
        Este tipo de actividades será investigado por Mercado Libre y el infractor podrá ser sancionado con la suspensión o cancelación de la oferta e incluso de su inscripción como Usuario deMercado Libre y/o de cualquier otra forma que estime pertinente, sin perjuicio de las acciones legales a que pueda dar lugar por la configuración de delitos o contravenciones o los perjuicios civiles que pueda causar a los Usuarios oferentes.
        
        08 - Violaciones del Sistema o Bases de Datos
        No está permitida ninguna acción o uso de dispositivo, software, u otro medio tendiente a interferir tanto en las actividades y operatoria de Mercado Libre como en las ofertas, descripciones, cuentas o bases de datos de Mercado Libre. Cualquier intromisión, tentativa o actividad violatoria o contraria a las leyes sobre derecho de propiedad intelectual y/o a las prohibiciones estipuladas en este contrato harán pasible a su responsable de las acciones legales pertinentes, y a las sanciones previstas por este acuerdo, así como lo hará responsable de indemnizar los daños ocasionados.
        
        09 - Sanciones. Suspensión de operaciones
        Sin perjuicio de otras medidas, Mercado Libre podrá advertir, suspender en forma temporal o inhabilitar definitivamente la Cuenta de un Usuario o una publicación,  aplicar una sanción que impacte negativamente en la reputación de un Usuario, iniciar las acciones que estime pertinentes y/o suspender la prestación de sus Servicios si (a) se quebrantara alguna ley, o cualquiera de las estipulaciones de los Términos y Condiciones Generales y demás políticas de Mercado Libre; (b) si incumpliera sus compromisos como Usuario; (c) si se incurriera a criterio de Mercado Libre en conductas o actos dolosos o fraudulentos; (d) no pudiera verificarse la identidad del Usuario o cualquier información proporcionada por el mismo fuere errónea; (e) Mercado Libre entendiera que las publicaciones u otras acciones pueden ser causa de responsabilidad para el Usuario que las publicó, para Mercado Libre o para los demás Usuarios en general. En el caso de la suspensión de un Usuario, sea temporal o definitiva, todos los artículos que tuviera publicados serán removidos del sistema. También se removerán del sistema las ofertas de compra de bienes ofrecidos en subasta.
        
        10 - Responsabilidad
        
        Mercado Libre sólo pone a disposición de los Usuarios un espacio virtual que les permite ponerse en comunicación mediante Internet para encontrar una forma de vender o comprar servicios o bienes. Mercado Libre no es el propietario de los artículos ofrecidos, no tiene posesión de ellos ni los ofrece en venta. Mercado Libre no interviene en el perfeccionamiento de las operaciones realizadas entre los Usuarios ni en las condiciones por ellos estipuladas para las mismas, por ello no será responsable respecto de la existencia, calidad, cantidad, estado, integridad o legitimidad de los bienes ofrecidos, adquiridos o enajenados por los Usuarios, así como de la capacidad para contratar de los Usuarios o de la veracidad de los Datos Personales por ellos ingresados. Cada Usuario conoce y acepta ser el exclusivo responsable por los artículos que publica para su venta y por las ofertas y/o compras que realiza. 
        
        Debido a que Mercado Libre no tiene ninguna participación durante todo el tiempo en que el artículo se publica para la venta, ni en la posterior negociación y perfeccionamiento del contrato definitivo entre las partes, no será responsable por el efectivo cumplimiento de las obligaciones asumidas por los Usuarios en el perfeccionamiento de la operación. El Usuario conoce y acepta que al realizar operaciones con otros Usuarios o terceros lo hace bajo su propio riesgo. En ningún caso Mercado Libre será responsable por lucro cesante, o por cualquier otro daño y/o perjuicio que haya podido sufrir el Usuario, debido a las operaciones realizadas o no realizadas por artículos publicados a través de Mercado Libre.
        
        Mercado Libre recomienda actuar con prudencia y sentido común al momento de realizar operaciones con otros Usuarios. El Usuario debe tener presentes, además, los riesgos de contratar con menores o con personas que se valgan de una identidad falsa. Mercado Libre NO será responsable por la realización de ofertas y/o operaciones con otros Usuarios basadas en la confianza depositada en el sistema o los Servicios brindados por Mercado Libre.
        
        En caso que uno o más Usuarios o algún tercero inicien cualquier tipo de reclamo o acciones legales contra otro u otros Usuarios, todos y cada uno de los Usuarios involucrados en dichos reclamos o acciones eximen de toda responsabilidad a Mercado Libre y a sus directores, gerentes, empleados, agentes, operarios, representantes y apoderados. Los Usuarios tienen un plazo de 60 días desde la compra para iniciar un reclamo contra otro u otros Usuarios. Una vez vencido este plazo, no podrán iniciar un reclamo desde el sitio de Mercado Libre.
        
        11 - Alcance de los servicios de Mercado Libre
        Este acuerdo no crea ningún contrato de sociedad, de mandato, de franquicia, o relación laboral entre Mercado Libre y el Usuario. El Usuario reconoce y acepta que Mercado Libre no es parte en ninguna operación, ni tiene control alguno sobre la calidad, seguridad o legalidad de los artículos anunciados, la veracidad o exactitud de los anuncios, la capacidad de los Usuarios para vender o comprar artículos. Mercado Libre no puede asegurar que un Usuario completará una operación ni podrá verificar la identidad o Datos Personales ingresados por los Usuarios.Mercado Libre no garantiza la veracidad de la publicidad de terceros que aparezca en el sitio y no será responsable por la correspondencia o contratos que el Usuario celebre con dichos terceros o con otros Usuarios.
        
        12 - Fallas en el sistema
        Mercado Libre no se responsabiliza por cualquier daño, perjuicio o pérdida al Usuario causados por fallas en el sistema, en el servidor o en Internet. Mercado Libre tampoco será responsable por cualquier virus que pudiera infectar el equipo del Usuario como consecuencia del acceso, uso o examen de su sitio web o a raíz de cualquier transferencia de datos, archivos, imágenes, textos, o audio contenidos en el mismo. Los Usuarios NO podrán imputarle responsabilidad alguna ni exigir pago por lucro cesante, en virtud de perjuicios resultantes de dificultades técnicas o fallas en los sistemas o en Internet. Mercado Libre no garantiza el acceso y uso continuado o ininterrumpido de su sitio. El sistema puede eventualmente no estar disponible debido a dificultades técnicas o fallas de Internet, o por cualquier otra circunstancia ajena a Mercado Libre; en tales casos se procurará restablecerlo con la mayor celeridad posible sin que por ello pueda imputársele algún tipo de responsabilidad. Mercado Libre no será responsable por ningún error u omisión contenidos en su sitio web.
        
        13 - Tarifas. Facturación
        La inscripción en Mercado Libre es gratuita. El usuario deberá pagar a Mercado Libre un costo por la venta cuando la operación se concrete o cuando el Usuario no califique la operación en el plazo correspondiente. Para el caso de las publicaciones correspondientes a las categorías Autos, motos y Otros, y Servicios e Inmuebles, el usuario deberá pagar a Mercado Libre únicamente un costo por publicar.
        
        Mercado Libre se reserva el derecho de tomar las medidas judiciales y extrajudiciales que estime pertinentes para obtener el pago del monto debido.
        
        Mercado Libre se reserva el derecho de modificar, cambiar, agregar, o eliminar las tarifas vigentes, en cualquier momento, lo cual será notificado a los Usuarios, en la forma establecida en la Cláusula 3. Sin embargo, Mercado Libre podrá modificar temporalmente la Política de Tarifas y las tarifas por sus servicios por razón de promociones, siendo efectivas estas modificaciones cuando se haga pública la promoción o se realice el anuncio.
        
        En caso de haberse facturado cargos que no hubiesen correspondido, el Usuario deberá calificar o modificar su calificación indicando que la operación no fue concretada, o deberá comunicarse con nuestro equipo de Atención al Cliente para resolver dicha cuestión.
        
        Conoce más sobre nuestras Políticas de facturación.
         
        
        14 - Sistema de reputación
        Debido a que la verificación de la identidad de los Usuarios en Internet es difícil, Mercado Libre no puede confirmar ni confirma la identidad pretendida de cada Usuario. Por ello el Usuario cuenta con un sistema de reputación de Usuarios que es actualizado periódicamente en base a datos vinculados con su actividad en el sitio  y a los comentarios ingresados por los Usuarios según las operaciones que hayan realizado. Tanto aquellos Usuarios que hayan resultado ganadores de una oferta como el vendedor deberán ingresar una calificación informando acerca de la concreción o no de la operación; también podrán ingresar un comentario si así lo desean. Este sistema de reputación, además constará de un espacio donde los Usuarios podrán hacer comentarios sobre las calificaciones recibidas y acceder a los mismos. Dichos comentarios serán incluidos bajo exclusiva responsabilidad de los Usuarios que los emitan.
        
        
        En virtud que las calificaciones y comentarios que son realizados por los Usuarios, éstos serán incluidos bajo exclusiva responsabilidad de los Usuarios que los emitan. Mercado Libre no tiene obligación de verificar la veracidad o exactitud de los mismos y NO se responsabiliza por los dichos allí vertidos por cualquier Usuario, por las ofertas de compras o ventas que los Usuarios realicen teniéndolos en cuenta o por la confianza depositada en las calificaciones de la contraparte o por cualquier otro comentario expresado dentro del sitio o a través de cualquier otro medio, incluido el correo electrónico. Mercado Libre se reserva el derecho de editar y/o eliminar aquellos comentarios que sean considerados inadecuados u ofensivos. Mercado Libre mantiene el derecho de excluir a aquellos Usuarios que sean objeto de comentarios negativos provenientes de fuentes distintas. Para obtener mayor información sobre el sistema de calificaciones, se pueden consultar nuestro Sistema de Reputación.
        
        15 - Propiedad intelectual. Enlaces
        Los contenidos de las pantallas relativas a los servicios de Mercado Libre como así también los programas, bases de datos, redes, archivos que permiten al Usuario acceder y usar su Cuenta, son de propiedad de Mercado Libre y están protegidas por las leyes y los tratados internacionales de derecho de autor, marcas, patentes, modelos y diseños industriales. El uso indebido y la reproducción total o parcial de dichos contenidos quedan prohibidos, salvo autorización expresa y por escrito de Mercado Libre. 
         
        El Sitio puede contener enlaces a otros sitios web lo cual no indica que sean propiedad u operados por Mercado Libre. En virtud que Mercado Libre no tiene control sobre tales sitios, NO será responsable por los contenidos, materiales, acciones y/o servicios prestados por los mismos, ni por daños o pérdidas ocasionadas por la utilización de los mismos, sean causadas directa o indirectamente. La presencia de enlaces a otros sitios web no implica una sociedad, relación, aprobación, respaldo deMercado Libre a dichos sitios y sus contenidos.
        
        16 - Indemnidad
        El Usuario mantendrá indemne a Mercado Libre, así como a sus filiales, empresas controladas y/o controlantes, funcionarios, directivos, sucesores, administradores, representantes y empleados, por cualquier reclamo iniciado por otros Usuarios, terceros o por cualquier Organismo, relacionado con sus actividades en el Sitio, el cumplimiento y/o el incumplimiento de los Términos y Condiciones Generales o demás Políticas, así como respecto de cualquier violación de leyes o derechos de terceros.
        
        A tal fin, el Usuario faculta a Mercado Libre a: i) intervenir y representarlo en dichos reclamos, pudiendo celebrar los acuerdos transaccionales que considere oportunos y que tiendan a evitar mayores costos y/o evitar eventuales contingencias sin limitación, en su nombre y representación; ii) retener y debitar de su Cuenta de Mercado Pago y/o de la(s) cuenta(s) bancaria(s) registrada(s) en la Cuenta Mercado Pago los fondos existentes y/o futuros para recuperar cualquier gasto incurrido en relación a los supuestos del párrafo anterior, los cuales podrán incluir, entre otros, los honorarios de los letrados intervinientes y las costas judiciales en una cantidad razonable, y/o iii) generar débitos específicos en su facturación.
        
        18 - Representante para recibir notificaciones en virtud de la Ley de Propiedad Intelectual
        A los fines de recibir notificaciones judiciales conforme lo dispuesto en el artículo 85 Ñ, letra c) y en el artículo 24 del Reglamento Ley 17.336, sobre Propiedad Intelectual, se designa como representante para aquello, al abogado  Sr. Claudio Paul Magliona Markovitch, Cédula Nacional de Identidad N° 9.855.757-1, con domicilio en La Bolsa 81, piso 6to, comuna y ciudad de Santiago, Chile.
        
        19 - Domicilio
        Se fija como domicilio de Mercado Libre Chile Ltda., la Av. Apoquindo 4800, Torre 2, piso 21, Las Condes, Santiago - Chile.
        
        Si tienes alguna duda sobre los Términos y Condiciones Generales o demás políticas y principios que rigen Mercado Libre consulta nuestra página de Ayuda.
        
        20 - Jurisdicción y Ley Aplicable
        Este acuerdo estará regido en todos sus puntos por las leyes vigentes en la República Chilena.
        
        Cualquier controversia derivada del presente acuerdo, su existencia, validez, interpretación, alcance o cumplimiento, será sometida a las leyes aplicables y a los Tribunales competentes de la Ciudad de Santiago y los procedimientos se llevarán a cabo en idioma castellano.
    </h6>
    
@endsection