<p><strong>¿Cuál es la diferencia entre Internet y la World Wide Web?</strong></p>
<p>Internet, es un sistema que conforma una gran red de comunicacion mundial, por la cual nse mantienen interconectados millones de personas.</p>
<p>WEB, sistema que funciona a traves de internet, por la cual nos permite transmitir diversos tipos de datos.</p>
<p><strong>¿Cuál es el propósito de los métodos HTTP: GET, HEAD, POST, PUT, PATCH, DELETE?</strong></p>
<p>GET:</p>
<p>HEAD: Es muy parecido al get, sin emebago no regresa el cuerpo, es decir, get puede regresar la lista de usuarios oeri el head hará la misma peticion aunque no la regresa.</p>
<p>POST:Mnadar datos de una forma segura.</p>
<p>PUT: manda datos al servidor para crar o actualizar recursos.</p>
<p>DELETE: Elimina un recurso en especifico</p>
<p><strong>¿Qué método HTTP se debe utilizar al enviar un formulario HTML, por ejemplo cuando ingresas tu usuario y contraseña en algún sitio? ¿Por qué?</strong></p>
<p>Post, debido a que lo manda de una forma segura los datos.</p>
<p><strong>¿Qué método HTTP se utiliza cuando a través de un navegador web se accede a una página a través de un URL?</strong></p>
<p>Se utiliza el metodo GET</p>
<p><strong>Un servidor web devuelve una respuesta HTTP con código 200. ¿Qué significa esto? ¿Ocurrió algún error?</strong></p>
<p>Significa que todo esta bien, ya que regresa un "OK"</p>
<p><strong>¿Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al sitio y se encontró con un error 404? ¿Por qué?</strong></p>
<p>Siginifica error en el cliente, a lo mejor es que no esta autorizado o existe un mal request.</p>
<p><strong>¿Es responsabilidad del desarrollador corregir un sitio web si un usuario reporta que intentó acceder al sitio y se encontró con un error 500? ¿Por qué?</strong></p>
<p>Sinifica que hubo un error en el servidor</p>
<p><strong>¿Qué significa que un atributo HTML5 esté depreciado o desaprobado (deprecated)? Menciona algunos elementos de HTML 4 que en HTML5 estén desaprobados.</strong></p>
<p>Que este desaprobado siginifica que ya algunos navegadores no lo soportan, y por consecuente puede traer problmeas a la página en caso que se abre en un navegador que no lo utilize.</p>

<h2>Preguntas Lab 3</h2>
<p class="preguntasLab">Como ingeniero de software ¿cuál es tu recomendación sobre el uso de !important en un CSS? </p>
<p>Los estilos del usuario marcados como !important tienen más prioridad que los estilos marcados como !important en la hoja de estilos del diseñador. De esta forma, ninguna página web puede sobreescribir o redefinir ninguna propiedad de alta prioridad establecida por el usuario. Por lo tanto se debe de tener cuidado la manera en que se va a definir</p>
<p class="preguntasLab">Si se pone una imagen de fondo en una página HTML, ¿por qué debe escogerse con cuidado?</p>
<p>Se debe de escoger con cuidado ya que puede condunfir las letras, si es que tienen el mismo color, asi mismo también si es una imagen con colores que son fuerte para la vista humna, esto los pudiera llegar a cansar.</p>
<p class="preguntasLab">Como ingeniero de software, ¿cuál es tu recomendación al elegir las unidades de un propiedad de estilo entre %, px y pt?</p>
<p>Para prototipos es más recomendable usar pt, ya que es una página que es estatica, sin embargo es mejor visto usar %, debido a que este va cambiando de acuerdo al tamaño de la pagina, dando como resultado una mejor experiencia y menor retrabajo.</p>
<p class="preguntasLab">¿Por qué el uso de una versión minimizada del CSS mejora el rendimiento del sitio?</p>
<p>Debido a que se elimnan los espacios y los saltos en linea , haciendolos de menor tamaño.</p>
	<h2>Conceptos</h2>
				<ul class="collection">
					<li>URL: Uniform Resource Locator</li>
					<li>MIME: Multipurpose Internet Mail Extensions</li>
					<li>Métodos HTTP: Son procedimientos que indican que acción tomar sobre determinado recurso</li>
					<li>Códigos de errores HTTP: Indican la resolución de la petición.</li>
					<li>XML: Extesible markup language, un metalenguaje</li>
					<li>XHTML: Una combinación entre HTML y XML</li>
					<li>HTML5: Estándar actual de HTML</li>
					<li>JS: Javascript, Es un lenguaje de programación Orientado</li>
					<li>php: Hypertext Preprocessor, Lenguaje</li>
					<li>jsp: JavaServer Pages</li>
					<li>Ajax: Asynchronous Javascript and XML</li>
				</ul>


<h2>Preguntas Lab 4</h2>
<p class="preguntasLab">¿Qué diferencia y semejanza hay entre java y javascript?</p>
<p> la principal diferencias es que JS es un script de programación mientras Java es lenguaje de programación</p>
<p class="preguntasLab">¿Qué métodos tiene el objeto Date?</p>
<p>now(),parse(),toJSON(),toString(),getDate()</p>
<p class="preguntasLab">¿Qué métodos tienen los arreglos? </p>
concat(),every(),find(),forEach,indexOf()
<p class="preguntasLab">¿Cómo se declara una variable con alcance local dentro de una función?</p>
<p>Se utiliza la palabra reservada let</p>
<p class="preguntasLab">¿Qué método de String se puede utilizar para buscar patrones con expresiones regulares?¿Para qué podrías utilizar esto en una aplicación web?</p>
<p>String tiene el métdo match() para buscar substrongs que cumplan con esa expresión, puede servir para crawlear algún sitio o bien la información que introduce el usuario</p>
			
			
<h2>Preguntas Lab 5</h2>
<p class="preguntasLab">¿Por qué es una buena práctica usar JavaScript para checar que sean válidos los inputs de las formas antes de enviar los datos al servidor?</p>
<p>Depende, por una parte el servidor ahorra trabajo sin embargo puede generarse un problema de seguridad</p>
<p class="preguntasLab">¿Cómo puedes saltarte la seguridad de validaciones hechas con JavaScript?</p>
<p>Puedes usar la consola, o bien observar en el .js que hace esa verificación</p>



<h2>Preguntas Lab 6</h2>

<p class="preguntasLab">¿Cuáles son las diferencias entre los posibles valores de la propiedad position?</p>
<p>Básicamente describe la relación que tiene su posición respecto a sus padres, sus etiquetas superioes</p>
<p class="preguntasLab">¿Cuáles son los valores estándar para la propiedad visibility?</p>
<p>visible, hidden, collaps</p>
<p class="preguntasLab">¿Qué es el zIndex y para qué sirve?</p>
<p>define la produndidad o la capa en la que debe estar el selector</p>

<h2>Preguntas Lab 7</h2>
<p class="preguntasLab">Material design</p>
<p> lenguaje que combina los principios innovadores de la tecnología con las normas clásicas del diseño</p>

<h2>Preguntas lab 9</h2>
<p class="preguntasLab">¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</p>
<p>
Muestra gran cantidad de información sobre el estado actual de PHP. Incluye información sobre las opciones de compilación y extensiones de PHP, versión de PHP, información del servidor</p> 
<p class="preguntasLab">¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.
</p>
<p>Por el uso de PHP, ya que PHP es un lenguaje de programación de uso general de código del lado del servidor. Originalmente fue diseñado para el desarrollo web de contenido dinámico</p>


<h2>Preguntas Lab 11</h2>
<p class="preguntasLab">¿Por qué es una buena práctica separar el controlador de la vista?</p>
<p> >Es una buena practica debido a que primeramente el acomodo es más sencillo y facíl de entender para terceros. Además de que hay maneras más sencillas de corromper el control de una pagína si todo está en la vista</p>
<p class="preguntasLab">Aparte de los arreglos $_POST y $_GET, ¿qué otros arreglos están predefinidos en php y cuál es su función?</p>
<p>$_REQUEST: Es una variable super global es decir que puede ser accedida desde cualquier lado del script sin ser declarada como global </p>
<p class="preguntasLab">Explora las funciones de php, y describe 2 que no hayas visto en otro lenguaje y que llamen tu atención.</p>
<p>>var_dump(): Va mostrabdo información de una variable mientras va cambiando </p>
<p>str_replace(): Dentro de algún string puede cambiar ciertas partes del string por otras</p>
<p class="preguntasLab">¿Qué es XSS y cómo se puede prevenir?</p>
<p>Es un tipo de vulnerabilidad que consiste en hacer carga de codigo del lado del cliente a un sitio que lo permita y así cambiar o conseguir información de este. </p>

<h2>Preguntas Lab 13</h2>
<p class="preguntasLab">¿Por qué es importante hacer un session_unset() y luego un session_destroy()?</p>
<p>evitar conflictos entre las sesiones</p>
<p class="preguntasLab">¿Cuál es la diferencia entre una variable de sesión y una cookie?</p>
<p>Las variables de sesión se guardan en el server mientras que las cookies en el cliente</p>
<p class="preguntasLab">¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</p>
<p>Su nombre debe ser el hash de la foto con salt de fecha</p>
<p class="preguntasLab">¿Qué es CSRF y cómo puede prevenirse?</p>
<p>Es Cross-site request forgery  básicamente hascer peticiones POST o GET fuera del sitio, con un token</p>


<h2>Preguntas Lab 16</h2>
<p class="preguntasLab">¿Por qué es una buena práctica separar el modelo del controlador?</p>
<p>Se puede llevar un mayor control denntro de la aplicacion</p>
<p class="preguntasLab">¿Qué es SQL injection y cómo se puede prevenir?</p>
<p>Se mete codigo malicioso en los campos de Input, es por eso que se debe de tener cuidado, y para esto se previene conviertiendo los inpust a string.</p>

<h2>Preguntas lab 17</h2>
<p class="preguntasLab">¿En qué consiste el acceso basado en roles?</p>
<p>Dependiendo del rol que tenga el usuario son los privilegios que este puede tener dentro de la aplicacion </p>
<p class="preguntasLab">Investiga y describe 6 sistemas, 3 conocidos que empleen RBAC y 3 desconocidos que no, junto con su funcionamiento general.</p>
<p>3 sistemas que usan RBAC: miTec, SAPA, Amazon</p>
<p class="preguntasLab">
Beneficios y desventajas de este modelo.</p>
<p>Los benedificios es que puedes diferenciar lo que vera cada individuo y no todos puedan controlar y modificar la aplicacion, auqnue su desventaja es que sube la dificultad en la implementaciòn.</p>

<h2>Preguntas lab 19</h2>
<p class="preguntasLab">¿Qué implicaciones de seguridad tiene AJAX? ¿Dónde se deben hacer las validaciones de seguridad, del lado del cliente o del lado del servidor?</p>
<p>El problema principal en AJAX es mover datos entre el servidor y el cliente, este problema se suele resolver usando XML.  </p>
<p class="preguntasLab">¿Qué es JSON?</p>
<p>JSON es un formato de texto para la serialización de datos estructurados. </p>


<h2>Preguntas lab 23</h2>
<p class="preguntasLab">¿Qué ventajas y desventajas tiene la integración de tus aplicaciones web con servicios web desarrollados por terceros?</p>
<p>Vwentajas es que puede ahorrarte trabajo y horas de trabajo, puesto que aplicaciones de terceros ya la han implementado anteriormente, la desventaja es que muchos de los caso nos puedes hacerle modificaciones.</p>


<h2>Preguntas lab 26</h2>
<p class="preguntasLab">¿Por qué es importante la accesibilidad?</p>
<p>Ayuda a que el usario pueda navegar con mayor facilidd y entender que accion va a ocurrir dentro de la aplicacion tras cada ejecucion del programa </p>
<p class="preguntasLab">¿Cuáles son los lineamientos de accesibilidad que consideras más importantes? ¿Por qué?</p>
<p>Navegacion y diseño, ya que si es amigable para el usuario, este permite que este màs tiempo dentro de la aplicacion </p>