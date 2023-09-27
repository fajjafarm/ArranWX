window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.Popper = require('@popperjs/core').default;
window.$ = window.jQuery = require('jquery');
window.bootstrap = require('bootstrap/dist/js/bootstrap.min.js');
window.waypoint = require('waypoints/lib/noframework.waypoints');

require('datatables.net-bs5');
require('datatables.net');

require('select2')

// window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
