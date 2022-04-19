
# Fundamentos Desarrollo de modulos para magento 2.4.0

_ Este repositorio está diseñado para ser una guía personal de Magento 2. 
  Se tratan temas que permiten comprender el marco y estructura de magento y por lo tanto conceptos clave de Magento 2:

 * - Patrón de Arquitectura y Diseño en Magento 2
 * - ...
_
 

## Comenzando 🚀



### Pre-requisitos 📋

_Version de magento usada para este repo : _

```
*****  magento 2.4.0 *****
Requerimientos especificos para la version : https://devdocs.magento.com/guides/v2.4/install-gde/system-requirements.html
php  =>  Version 7.4.27
ElasticSearch  =>  Version 7.16.2
```

### Contenido  📄

_Indice_

<details open>
  <summary id="contenido">Table de contenido</summary>
  <ol>
    <li>
      <a href="#about-the-project">Creacion y activacion de modulo</a>
      <ul>
       <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/38ff335bb31ba65677bd2bbd28fb65f704fa6612"> Ejemplo 1</a></li>
       <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/7c3a945a9b3590ee981a90d892adace1081a900c"> Ejemplo 2</a></li>
      </ul>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/106a3619c2b301ed1528babfb099fd6aa9b59f34">Creacion de Ruta frontend</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/da8493209e96b89db962971c9d39598762de4000">Creacion de controlador que extiende template</a>
    </li>
    <li>
      <a href="#">Inyeccion de dependencia </a>
      <ul>
      <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/c0e784e4627b1228a40df8c739d9ecbe9c03712c">Ejmplo basico de inyeccion de dependencia 1</a></li>
      </ul>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/a4d78d0f6d96922c2b5112a70b2d5f3872d1d4f1">Creacion de atributo para producto</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/3569e158e39d1f41cd338f15adbae738d444d5be">Modulo en JavaScript</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/f693d0c838a6d86dfc06aa7f9f74e30c4a3525ad">Controlador y sus Acciones</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/45789fd18703c5aa685e462b826d3bb23c510bb9">Creacion de una vista</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/c22174079194e8bd7bbf6d151591cadd7749d322">Creación de un bloque </a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/08703f00a7f69431fa44f7ab1e4c858c9e89dd34">Creación de tabla para modulo</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/67e5801837326e56644c10ad75859bbaeba38568">Agregar campo a tabla</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/b9456772264a442199410c44161efe1cd89c1eed">Creación de Menú Panel admin</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/3bb22b19cd41a9dceff354c28a6f6732d8aed68e">Creación de Modelo para BDD</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/82ac3a7773789e8d465d63c8ce5bc9cbf2fe23f9">Modelo para consulta</a>
    </li>
    <li>
      <a href="#about-the-project">Creación de lista UIComponent en administrador de Magento </a>
      <ul>
      <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/f00f26caa1b7af633a3a9a0c434ca399a5b29df2">Creacion GRID (tabla | regilla) que lista los contactos existentes Parte 1/3</a></li>
      <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/076501b017272fc7ddb83f825d73de63ad79a75b">Agregamos accion de boton (Add a new contact) Parte 2/3</a></li>
      <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/8a4b633da6fff1cef094059fc77a29cbe57aacc5">Creación de elementos no obligatorios Parte 3/3</a></li>
      </ul>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/2d443beb73942cb39e2d111fffd9176a93137bbd">Formulario + CRUD Admin</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/d0ead5339728cb2020ab70a70b570e07f5f5da16">Creacion de Evento</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/01ff7b6a1e8e4975f3c891b81666147a1647b5ce">Implementacion de Interceptors (PLUGIN)</a>
    </li>
    <li>
      <a href="#about-the-project">Pagina [vista] en el FRONTEND que cargue los registros de una tabla</a>
      <ul>
        <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/16f8c38b770c34f4c47fa81adb58aa6fa764c6e9"> Creacion de modulo Parte 1/5</a></li>
        <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/6fdc2dbb6535c12b7281a15cef59751bf2fb39a1"> Creacion de tabla [mageplaza_helloworld_post] Parte 2/5</a></li>
        <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/f7663d90ac0fe8a2517b13b552122f2906b29b0b"> Creacion demodelos para conectar a la BDDParte 3/5</a></li>
        <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/7581e7b79251a33da1a99e67d0233ac4b617a1fa"> Cracion de objeto de fabrica Parte 4/5</a></li>
        <li><a href="https://github.com/PerezContrerasLuis/magento240App/commit/b019792e6f9b5597c288dd9eed69ef04807c3c1d"> Listado del contenido de una tabla Parte 5/5</a></li>
      </ul>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/15c9d5953d11d14329781e2af3f52484d8091d21">JS personalizado</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/839020c715eb77f35c1384f8616f56ec694815fa">Carga de widget</a>
    </li>
    <li>
      <a href="https://github.com/PerezContrerasLuis/magento240App/commit/9a625037177fb165a0fb69ca438f6e8b03bb5ad6">mensaje popup UI Magento component</a>
    </li>
  </ol>
</details>


_.._
## Construido usando 🛠️

_XAMPP para OS X 7.4.27 / PHP 7.4.27 _

* Apache 2.4.52, MariaDB 10.4.21, PHP 7.4.27 + SQLite 2.8.17/3.37.0 + multibyte (mbstring) support
* S.O 
    * Darwin MacBook 21.2.0 Darwin Kernel Version 21.2.0: arm64


## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki](https://github.com/tu/proyecto/wiki)

## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/tu/proyecto/tags).

## Autor✒️


* **Luis Perez Contreras** - *Backend Developer* - [luis](https://www.linkedin.com/in/luis-perez-contreras-56a67964/)


## Licencia 📄

Este proyecto está bajo la Licencia (...) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* 



---
⌨️ con ❤️ por [LuisPerezContreras](https://github.com/PerezContrerasLuis) 😊
