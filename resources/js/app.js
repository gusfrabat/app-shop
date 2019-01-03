
/**
* Primero cargaremos todas las dependencias de JavaScript de este proyecto que
 * Incluye Vue y otras bibliotecas. Es un gran punto de partida cuando
 * Construyendo aplicaciones web robustas y potentes usando Vue y Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
* El siguiente bloque de código puede usarse para registrar automáticamente su
 * Vue componentes. Explorará recursivamente este directorio para el Vue
 * Componentes y registrarlos automáticamente con su "nombre base".
 *
 * P.ej. ./components/ExampleComponent.vue -> <example-component> </example-component>
 * /

// const files = require.context ('./', true, /\.vue$/i)
// files.keys (). map (key => Vue.component (key.split ('/'). pop (). split ('.') [0], files (key) .default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
