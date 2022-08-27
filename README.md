  <h1 align="center">🎉 Laravel 8, Vue.js & Bootstrap 4 SPA Dashboard 🎉</h1>

  <div align="center">
    <h2>An awesome SPA Admin Dashboard starter kit!</h2>
  </div>
</p>


<!-- ABOUT THE PROJECT -->
## About The Project


`laravel-vue-dashboard` is a Single Page Application (SPA) dashboard
built with [Laravel 8](https://laravel.com), [Vue.js](https://vuejs.org/) and [Bootstrap 4](https://getbootstrap.com) ([SB Admin Template](https://github.com/StartBootstrap/startbootstrap-sb-admin-2)). Thanks to the combination of the power of Laravel and the speed of Vue.js it is an excellent full-stack starter kit for enterprise applications.
 
 
It's a kit to start from scratch, not a Laravel package. It can help you to cut down your time by having an SPA dashboard with authentication system ready to use, taking advantage of [Laravel Passport](https://laravel.com/docs/8.x/passport) that uses the oauth2 authentication protocol.
 
The project provides sample pages, uses the routing system of Vue.js and Vuex for maintaining the application state.<br>
The code is structured in such a way to make it easy to modify and add new pages, components and APIs.


<!-- FEATURES -->
## FEATURES

* Sigle page application (SPA)
* Laravel 8
* [Vue.js](https://vuejs.org/) + VueRouter (configured with auth restricted pages) + Vuex 
* Login, register, email verification (optional) and resend, recovery password systems
* Ui with Bootstrap 4 and [SB Admin Template](https://github.com/StartBootstrap/startbootstrap-sb-admin-2)
* Sample views to get started
* Easy to add new pages and routes 
* Notification system


<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

<ul>
    <li>Your machine needs to be ready for the latest Laravel and Node.js.</li>
</ul>

## Installation


   ```sh
    # Clone the project
    git clone https://github.com/ramoncrisante/laravel-vue-dashboard.git

    # Enter the project directory
    cd laravel-vue-dashboard

    # Copy env file and add your own database and mail credentials
    cp .env.example .env

    # Install dependency
    composer install

    # Generate app key
    php artisan key:generate
    
    # Migrate database
    php artisan migrate

    # Create encryption keys
    php artisan passport:install

    # Install dependency with NPM
    npm install

    # Develop
    npm run dev # or npm run watch

    # Build on production
    npm run production
    
    # Serving application
    php artisan serve

   ```

## Configuration

* Email verification is optional and it's disabled by default.
  To enable it, change the following parameter in the `.env` file
  
  `MUST_VERIFY_EMAIL=true`

* To use email verification and reset password functionality is required to set up the email service. 
  In order to successfully send emails, we need to provide `MAIL_DRIVER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD` in the `.env` file.


## Built With

* [Laravel 8](https://laravel.com)
* [Vue.js](https://vuejs.org/)
* [Vuex](https://vuex.vuejs.org/)
* [Bootstrap 4](https://getbootstrap.com)
* [SB Admin Template](https://github.com/StartBootstrap/startbootstrap-sb-admin-2)
* [JQuery](https://jquery.com)
* [Axios](https://github.com/axios/axios)
* [Laravel Passport](https://laravel.com/docs/8.x/passport)
* [Font Awesome 5](https://fontawesome.com/)




