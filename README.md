# Curso de Programación Orientada a Objetos: POO

## Paradigma Orientado a Objetos
**La Programación Orientada a Objetos** viene de una filosofía o forma de pensar que es la Orientación a Objetos y esto surge a partir de los problemas que necesitamos plasmar en código.

Es analizar un problema en forma de objetos para después llevarlo a código, eso es la Orientación a Objetos.

Un paradigma es una teoría que suministra la base y modelo para resolver problemas. La paradigma de Programación Orientada a Objetos se compone de **4 elementos**:

- Clases
- Propiedades
- Métodos
- Objetos

Y **4 Pilares**:

- Encapsulamiento
- Abstracción
- Herencia
- Polimorfismo

## Lenguajes Orientados a Objetos

Algunos de los lenguajes de programación Orientados a Objetos son:

**Java:**
- Orientado a Objetos naturalmente
- Es muy útilizado en Android
- Y es usado del lado del servidor o Server Side

**PHP**
- Lenguaje interpretado
- Pensado para la Web

**Python**
- Diseñado para ser fácil de usar
- Múltiples usos: Web, Server Side, Análisis de Datos, Machine Learning, etc

**Javascript**
- Lenguaje interpretado
- Orientado a Objetos pero basado en prototipos
- Pensado para la Web

**C#**
**Ruby**
**Kotlin**

## Diagramas de Modelado

**OMT:** Object Modeling Techniques. Es una metodología para el análisis orientado a objetos.

**UML:** Unified Modeling Language o Lenguaje de Modelado Unificado. Tomó las bases y técnicas de OMT unificándolas. Tenemos más opciones de diagramas como lo son Clases, Casos de Uso, Objetos, Actividades, Iteración, Estados, Implementación.

### UML
Las clases se representan así:
![UML](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939437/Academia-Java.-CDMX/POO/UML_amkkyj.webp)

Estos son los niveles de visibilidad que se puede tener:

* **-private**
* **+public**
* **#protected**
* **~default**

Una forma de representar las relaciones que tendrá un elemento con otro es a través de las flechas en UML, y aquí tenemos varios tipos, estos son los más comunes:

#### Asociación
![Asociacion](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/asociacion_kagxdp.webp)

Como su nombre lo dice, notarás que cada vez que esté referenciada este tipo de flecha significará que ese elemento contiene al otro en su definición. La flecha apuntará hacia la dependencia.

![Asociacion_ejemplo](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/asociacion-1_ubfcqh.webp)
Con esto vemos que la ClaseA está asociada y depende de la ClaseB.

#### Herencia
![Herencia](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/herencia_cngz9y.webp)
Siempre que veamos este tipo de flecha se estará expresando la herencia.
La dirección de la flecha irá desde el hijo hasta el padre.

![Herencia_Ejemplo](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/herencia-1_ggqqdd.webp)

Con esto vemos que la ClaseB hereda de la ClaseA

#### Agregación
![Agregacion](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/agregacion_gauf5a.webp)

Un elemento dependerá de muchos otros. Aquí tomamos como referencia la multiplicidad del elemento.

![Agregacion](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/agregacion-1_jleiqu.webp)

Con esto decimos que la ClaseA contiene varios elementos de la ClaseB. Estos últimos son comúnmente representados con listas o colecciones de datos.

#### Composición
![Composicion](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/composicion_qbpizf.webp)

Este es similar al anterior solo que su relación es totalmente compenetrada de tal modo que conceptualmente una de estas clases no podría vivir si no existiera la otra.

![Composiicion_ejemplo](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625939851/Academia-Java.-CDMX/POO/composicion-1_v1qfq1.webp)

## Objetos

Los Objetos son aquellos que tienen propiedades y comportamientos, también serán sustantivos.

Pueden ser Físicos o Conceptuales
Las Propiedades también pueden llamarse atributos y estos también serán sustantivos. Algunos atributos o propiedades son nombre, tamaño, forma, estado, etc. Son todas las características del objeto.

Los Comportamientos serán todas las operaciones que el objeto puede hacer, suelen ser verbos o sustantivos y verbo. Algunos ejemplos pueden ser que el usuario pueda hacer login y logout.

## Abstracción y Clases
Una Clase es el modelo por el cual nuestros objetos se van a construir y nos van a permitir generar más objetos.

Analizamos Objetos para crear Clases. Las Clases son los modelos sobres los cuales construiremos nuestros objetos.

Abstracción es cuando separamos los datos de un objeto para generar un molde.

## Modularidad

**La modularidad** va muy relacionada con las clases y es un principio de la Programación Orientado a Objetos y va de la mano con el Diseño Modular que significa dividir un sistema en partes pequeñas y estas serán nuestros módulos pudiendo funcionar de manera independiente.

La modularidad de nuestro código nos va a permitir

1. Reutilizar
1. Evitar colapsos
1. Hacer nuestro código más mantenible
1. Legibilidad
1. Resolución rápida de problemas
1. Una buena práctica es separando las clases en archivos diferentes.

## Clases en UML y sus sintaxis en código

**Java**
<pre><code>class Person {
    String name = "";
    void walk();
}</code></pre>

**Python**

<pre><code>class Person:
name="";
def walk();</code></pre>

**JavaScript**
<pre><code>class Person {
    name = "";
    walk();
}
</code></pre>

**PHP**
<pre><code>class Person{
$name="";
    function walk(){}
}
</code></pre>

## Herencia
**Don’t repeat yourself** es una filosofía que promueve la reducción de duplicación en programación, esto nos va a inculcar que no tengamos líneas de código duplicadas.

Toda pieza de información nunca debería ser duplicada debido a que incrementa la dificultad en los cambios y evolución

La herencia nos permite crear nuevas clases a partir de otras, se basa en modelos y conceptos de la vida real. También tenemos una jerarquía de padre e hijo.

# Proyecto Curso 
## Diagrama y Herencia (Uber)

**Diagrama Uber**
![Diagrama](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625941410/Academia-Java.-CDMX/POO/diagrama_uber_kcuelo.webp)

**Herencia Payments**
![Payments](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625941433/Academia-Java.-CDMX/POO/actividad-herencia1_y25hsb.png)

**Herencia Account**
![Account](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625941432/Academia-Java.-CDMX/POO/actividad-herencia2_jujk5d.png)

**Herencia Car**
![Car](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625941426/Academia-Java.-CDMX/POO/actividad-herencia3_wqfgdr.png)

## Carpetas iniciales
Estructura de carpetas

![Carpetas_iniciales](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625943362/Academia-Java.-CDMX/POO/carpetas_iniciales_mc6tr9.png)


## Clases Java && Python
![Clases_java_python](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625944994/Academia-Java.-CDMX/POO/clases_java-python_bfckgb.png)

## Clases JavaScript && PHP
![Clases_javaScript_PHP](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625945918/Academia-Java.-CDMX/POO/clases_php_js_r8zash.png)

## Instancia de clases

### Java
![Instancia_clase-Java](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625955120/Academia-Java.-CDMX/POO/Instancia_clase-java_h7a5vj.png)

### Python

![Instancia_clase-Python](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625955170/Academia-Java.-CDMX/POO/Instancia_clase-python_o0l9fq.png)

### JavaScript

![Instancia_clase-JavaScript](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625957085/Academia-Java.-CDMX/POO/Instancia_clase_JavaScript_ahblai.png)

### PHP
![Instancia_clase-PHP](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625959070/Academia-Java.-CDMX/POO/Constructor_PHP_fqps3l.png)

### Python constructor
![Constructor_python](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625958103/Academia-Java.-CDMX/POO/Constructor_python_oezuyz.png)


## Herencia

### Java
![Herencia_java](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625961107/Academia-Java.-CDMX/POO/Herencia_Java_vragvc.png)

### Python
![HErencia_Python](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625964092/Academia-Java.-CDMX/POO/Herencia_python_ekasjv.png)

### JavaScript
![Herencia_JS](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625964091/Academia-Java.-CDMX/POO/Herencia_js_jxwmqa.png)

### PHP

![Herencia_PHP](https://res.cloudinary.com/dvhl6xkqf/image/upload/v1625965536/Academia-Java.-CDMX/POO/Herencia_php_nhgh0g.png)


