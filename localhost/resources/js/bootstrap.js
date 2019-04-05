
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */



try {
   // window.Popper = require('../../node_modules/popper.js/dist/popper.min.js').default;
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('../../node_modules/jquery/dist/jquery.min.js');
    //require('../../node_modules/jquery-migrate/dist/jquery-migrate.min.js');
    // require('../../node_modules/jquery-ui-css/jquery-ui.min.js');
    // require('../../node_modules/bootstrap/dist/js/bootstrap.js');
    // require('../../node_modules/bootstrap/dist/js/bootstrap.bundle.js');
    // require('../../node_modules/magnific-popup/dist/jquery.magnific-popup.min.js');
    // require('../../node_modules/owl.carousel/dist/owl.carousel.min.js');
    // require('../../node_modules/jquery.stellar/jquery.stellar.js');
    // require('../../node_modules/jquery.countdown/jquery.countdown.js');
    // require('../../node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
    // require('../../node_modules/purify/lib/purify.js');
    // require('../../node_modules/aos/dist/aos.js');
    require('slick');
} catch (e) {
    console.log(e);
}
//require('../../node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.ru.min.js');
// require('../../node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.uk.min.js');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
