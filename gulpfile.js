process.env.DISABLE_NOTIFIER = true;

var gulp = require('gulp');
var elixir = require('laravel-elixir');
var del = require('del'); // execute: $ npm install --save-dev del

elixir.config.sourcemaps = false;

elixir.extend("remove", function (path) {
    gulp.task("remove", function () {
        del(path);
    });
    return this.queueTask("remove");
});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(function (mix) {
    mix.scripts([
            //scripts loaded on first page
            'include/javascript/sugar_3.js',
            'include/javascript/ajaxUI.js',
            'include/javascript/cookie.js',
            'include/javascript/menu.js',
            'include/javascript/calendar.js',
            'include/javascript/quickCompose.js',
            'include/javascript/yui/build/yuiloader/yuiloader-min.js',
            //HTML decode
            'include/javascript/phpjs/license.js',
            'include/javascript/phpjs/get_html_translation_table.js',
            'include/javascript/phpjs/html_entity_decode.js',
            //Expression Engine
            'include/Expressions/javascript/expressions.js',
            'include/Expressions/javascript/dependency.js'
        ], 'include/javascript/sugar_grp1.js', 'jssource/src_files/'
    ).scripts([
            //YUI scripts loaded on first page
            'include/javascript/yui3/build/yui/yui-min.js',
            'include/javascript/yui3/build/loader/loader-min.js',
            'include/javascript/yui/build/yahoo/yahoo-min.js',
            'include/javascript/yui/build/dom/dom-min.js',
            'include/javascript/yui/build/yahoo-dom-event/yahoo-dom-event.js',
            'include/javascript/yui/build/event/event-min.js',
            'include/javascript/yui/build/logger/logger-min.js',
            'include/javascript/yui/build/animation/animation-min.js',
            'include/javascript/yui/build/connection/connection-min.js',
            'include/javascript/yui/build/dragdrop/dragdrop-min.js',
            //Ensure we grad the SLIDETOP custom container animation
            'include/javascript/yui/build/container/container-min.js',
            'include/javascript/yui/build/element/element-min.js',
            'include/javascript/yui/build/tabview/tabview-min.js',
            'include/javascript/yui/build/selector/selector.js',
            //This should probably be removed as it is not often used with the rest of YUI
            'include/javascript/yui/ygDDList.js',
            //YUI based quicksearch
            'include/javascript/yui/build/datasource/datasource-min.js',
            'include/javascript/yui/build/json/json-min.js',
            'include/javascript/yui/build/autocomplete/autocomplete-min.js',
            'include/javascript/quicksearch.js',
            'include/javascript/yui/build/menu/menu-min.js',
            'include/javascript/sugar_connection_event_listener.js',
            'include/javascript/yui/build/calendar/calendar.js',
            'include/javascript/yui/build/history/history.js'
        ], 'include/javascript/sugar_grp1_yui.js', 'jssource/src_files/'
    ).scripts([
            //sugar_grp1_yui must be laoded before sugar_grp_yui_widgets
            'include/javascript/yui/build/datatable/datatable-min.js',
            'include/javascript/yui/build/treeview/treeview-min.js',
            'include/javascript/yui/build/button/button-min.js',
            'include/javascript/yui/build/calendar/calendar-min.js',
            'include/javascript/sugarwidgets/SugarYUIWidgets.js',
            // Include any Sugar overrides done to YUI libs for bugfixes
            'include/javascript/sugar_yui_overrides.js'
        ], 'include/javascript/sugar_grp_yui_widgets.js', 'jssource/src_files/'
    ).scripts([
            //YUI combination 2
            'include/javascript/yui/build/dragdrop/dragdrop-min.js',
            'include/javascript/yui/build/container/container-min.js'
        ], 'include/javascript/sugar_grp_yui2.js', 'jssource/src_files/'
    ).scripts([
            //overlib combination
            'include/javascript/overlibmws.js',
            'include/javascript/overlibmws_iframe.js',
        ], 'include/javascript/sugar_grp_overlib.js', 'jssource/src_files/'
    ).scripts([
            'include/javascript/yui/ygDDList.js',
            'include/SugarEmailAddress/SugarEmailAddress.js',
            'include/SugarFields/Fields/Collection/SugarFieldCollection.js',
            'include/SugarRouting/javascript/SugarRouting.js',
            'include/SugarDependentDropdown/javascript/SugarDependentDropdown.js',
            'modules/InboundEmail/InboundEmail.js',
            'modules/Emails/javascript/EmailUIShared.js',
            'modules/Emails/javascript/EmailUI.js',
            'modules/Emails/javascript/EmailUICompose.js',
            'modules/Emails/javascript/ajax.js',
            'modules/Emails/javascript/grid.js',
            'modules/Emails/javascript/init.js',
            'modules/Emails/javascript/complexLayout.js',
            'modules/Emails/javascript/composeEmailTemplate.js',
            'modules/Emails/javascript/displayOneEmailTemplate.js',
            'modules/Emails/javascript/viewPrintable.js',
            'include/javascript/quicksearch.js'
        ], 'include/javascript/sugar_grp_emails.js', 'jssource/src_files/'
    ).scripts([
            'modules/Emails/javascript/vars.js',
            'include/SugarFields/Fields/Collection/SugarFieldCollection.js',
            //For team selection
            'modules/Emails/javascript/EmailUIShared.js',
            'modules/Emails/javascript/ajax.js',
            'modules/Emails/javascript/grid.js',
            //For address book
            'modules/Emails/javascript/EmailUICompose.js',
            'modules/Emails/javascript/composeEmailTemplate.js',
            'modules/Emails/javascript/complexLayout.js'
        ], 'include/javascript/sugar_grp_quickcomp.js', 'jssource/src_files/'
    ).scripts([
            'include/javascript/jsclass_base.js',
            'include/javascript/jsclass_async.js',
            'modules/Meetings/jsclass_scheduler.js'
        ], 'include/javascript/sugar_grp_jsolait.js', 'jssource/src_files/'
    ).scripts(
        'include/MySugar/javascript/MySugar.js', 'include/MySugar/javascript/MySugar.js', 'jssource/src_files/'
    ).scripts(
        'modules/Meetings/jsclass_scheduler.js', 'modules/Meetings/jsclass_scheduler.js', 'jssource/src_files/'
    )
});