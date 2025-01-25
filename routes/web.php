<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('index', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/employee-dashboard', function () {
    return view('employee-dashboard');
})->name('employee-dashboard');

Route::get('/deals-dashboard', function () {
    return view('deals-dashboard');
})->name('deals-dashboard');

Route::get('/leads-dashboard', function () {
    return view('leads-dashboard');
})->name('leads-dashboard');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');

Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');

Route::get('/outgoing-call', function () {
    return view('outgoing-call');
})->name('outgoing-call');

Route::get('/incoming-call', function () {
    return view('incoming-call');
})->name('incoming-call');

Route::get('/call-history', function () {
    return view('call-history');
})->name('call-history');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/email', function () {
    return view('email');
})->name('email');

Route::get('/todo', function () {
    return view('todo');
})->name('todo');

Route::get('/todo-list', function () {
    return view('todo-list');
})->name('todo-list');

Route::get('/notes', function () {
    return view('notes');
})->name('notes');

Route::get('/social-feed', function () {
    return view('social-feed');
})->name('social-feed');

Route::get('/file-manager', function () {
    return view('file-manager');
})->name('file-manager');

Route::get('/kanban-view', function () {
    return view('kanban-view');
})->name('kanban-view');

Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');

Route::get('/add-invoices', function () {
    return view('add-invoices');
})->name('add-invoices');

Route::get('/edit-invoices', function () {
    return view('edit-invoices');
})->name('edit-invoices');

Route::get('/invoice-details', function () {
    return view('invoice-details');
})->name('invoice-details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/companies', function () {
    return view('companies');
})->name('companies');

Route::get('/subscription', function () {
    return view('subscription');
})->name('subscription');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/packages-grid', function () {
    return view('packages-grid');
})->name('packages-grid');

Route::get('/domain', function () {
    return view('domain');
})->name('domain');

Route::get('/purchase-transaction', function () {
    return view(view: 'purchase-transaction');
})->name('purchase-transaction');

Route::get('/layout-horizontal', function () {
    return view(view: 'layout-horizontal');
})->name('layout-horizontal');

Route::get('/layout-detached', function () {
    return view(view: 'layout-detached');
})->name('layout-detached');

Route::get('/layout-modern', function () {
    return view(view: 'layout-modern');
})->name('layout-modern');

Route::get('/layout-two-column', function () {
    return view(view: 'layout-two-column');
})->name('layout-two-column');

Route::get('/layout-horizontal-overlay', function () {
    return view(view: 'layout-horizontal-overlay');
})->name('layout-horizontal-overlay');

Route::get('/layout-hovered', function () {
    return view(view: 'layout-hovered');
})->name('layout-hovered');

Route::get('/layout-box', function () {
    return view(view: 'layout-box');
})->name('layout-box');

Route::get('/layout-horizontal-single', function () {
    return view(view: 'layout-horizontal-single');
})->name('layout-horizontal-single');

Route::get('/layout-horizontal-box', function () {
    return view(view: 'layout-horizontal-box');
})->name('layout-horizontal-box');

Route::get('/layout-horizontal-sidemenu', function () {
    return view(view: 'layout-horizontal-sidemenu');
})->name('layout-horizontal-sidemenu');

Route::get('/layout-vertical-transparent', function () {
    return view(view: 'layout-vertical-transparent');
})->name('layout-vertical-transparent');

Route::get('/layout-without-header', function () {
    return view(view: 'layout-without-header');
})->name('layout-without-header');

Route::get('/layout-rtl', function () {
    return view(view: 'layout-rtl');
})->name('layout-rtl');

Route::get('/layout-dark', function () {
    return view(view: 'layout-dark');
})->name('layout-dark');

Route::get('/clients-grid', function () {
    return view(view: 'clients-grid');
})->name('clients-grid');

Route::get('/clients', function () {
    return view(view: 'clients');
})->name('clients');

Route::get('/client-details', function () {
    return view(view: 'client-details');
})->name('client-details');

Route::get('/projects-grid', function () {
    return view(view: 'projects-grid');
})->name('projects-grid');

Route::get('/projects', function () {
    return view(view: 'projects');
})->name('projects');

Route::get('/project-details', function () {
    return view(view: 'project-details');
})->name('project-details');

Route::get('/tasks', function () {
    return view(view: 'tasks');
})->name('tasks');

Route::get('/task-board', function () {
    return view(view: 'task-board');
})->name('task-board');

Route::get('/task-details', function () {
    return view(view: 'task-details');
})->name('task-details');

Route::get('/contacts-grid', function () {
    return view(view: 'contacts-grid');
})->name('contacts-grid');

Route::get('/contacts', function () {
    return view(view: 'contacts');
})->name('contacts');

Route::get('/contact-details', function () {
    return view(view: 'contact-details');
})->name('contact-details');

Route::get('/companies-grid', function () {
    return view(view: 'companies-grid');
})->name('companies-grid');

Route::get('/companies-crm', function () {
    return view(view: 'companies-crm');
})->name('companies-crm');

Route::get('/company-details', function () {
    return view(view: 'company-details');
})->name('company-details');

Route::get('/deals-grid', function () {
    return view(view: 'deals-grid');
})->name('deals-grid');

Route::get('/deals', function () {
    return view(view: 'deals');
})->name('deals');

Route::get('/deals-details', function () {
    return view(view: 'deals-details');
})->name('deals-details');

Route::get('/leads-grid', function () {
    return view(view: 'leads-grid');
})->name('leads-grid');

Route::get('/leads', function () {
    return view(view: 'leads');
})->name('leads');

Route::get('/leads-details', function () {
    return view(view: 'leads-details');
})->name('leads-details');

Route::get('/pipeline', function () {
    return view(view: 'pipeline');
})->name('pipeline');

Route::get('/analytics', function () {
    return view(view: 'analytics');
})->name('analytics');

Route::get('/activity', function () {
    return view(view: 'activity');
})->name('activity');

Route::get('/employees', function () {
    return view(view: 'employees');
})->name('employees');

Route::get('/employees-grid', function () {
    return view(view: 'employees-grid');
})->name('employees-grid');

Route::get('/employee-details', function () {
    return view(view: 'employee-details');
})->name('employee-details');

Route::get('/departments', function () {
    return view(view: 'departments');
})->name('departments');

Route::get('/designations', function () {
    return view(view: 'designations');
})->name('designations');

Route::get('/policy', function () {
    return view(view: 'policy');
})->name('policy');

Route::get('/tickets', function () {
    return view(view: 'tickets');
})->name('tickets');

Route::get('/tickets-grid', function () {
    return view(view: 'tickets-grid');
})->name('tickets-grid');

Route::get('/ticket-details', function () {
    return view(view: 'ticket-details');
})->name('ticket-details');

Route::get('/holidays', function () {
    return view(view: 'holidays');
})->name('holidays');

Route::get('/leaves', function () {
    return view(view: 'leaves');
})->name('leaves');

Route::get('/leaves-employee', function () {
    return view(view: 'leaves-employee');
})->name('leaves-employee');

Route::get('/leave-settings', function () {
    return view(view: 'leave-settings');
})->name('leave-settings');

Route::get('/attendance-admin', function () {
    return view(view: 'attendance-admin');
})->name('attendance-admin');

Route::get('/attendance-employee', function () {
    return view(view: 'attendance-employee');
})->name('attendance-employee');

Route::get('/timesheets', function () {
    return view(view: 'timesheets');
})->name('timesheets');

Route::get('/schedule-timing', function () {
    return view(view: 'schedule-timing');
})->name('schedule-timing');

Route::get('/overtime', function () {
    return view(view: 'overtime');
})->name('overtime');

Route::get('/performance-indicator', function () {
    return view(view: 'performance-indicator');
})->name('performance-indicator');

Route::get('/performance-review', function () {
    return view(view: 'performance-review');
})->name('performance-review');

Route::get('/performance-appraisal', function () {
    return view(view: 'performance-appraisal');
})->name('performance-appraisal');

Route::get('/goal-tracking', function () {
    return view(view: 'goal-tracking');
})->name('goal-tracking');

Route::get('/goal-type', function () {
    return view(view: 'goal-type');
})->name('goal-type');

Route::get('/training', function () {
    return view(view: 'training');
})->name('training');

Route::get('/trainers', function () {
    return view(view: 'trainers');
})->name('trainers');

Route::get('/training-type', function () {
    return view(view: 'training-type');
})->name('training-type');

Route::get('/promotion', function () {
    return view(view: 'promotion');
})->name('promotion');

Route::get('/resignation', function () {
    return view(view: 'resignation');
})->name('resignation');

Route::get('/termination', function () {
    return view(view: 'termination');
})->name('termination');

Route::get('/job-grid', function () {
    return view(view: 'job-grid');
})->name('job-grid');

Route::get('/job-list', function () {
    return view(view: 'job-list');
})->name('job-list');

Route::get('/candidates-grid', function () {
    return view(view: 'candidates-grid');
})->name('candidates-grid');

Route::get('/candidates', function () {
    return view(view: 'candidates');
})->name('candidates');

Route::get('/candidates-kanban', function () {
    return view(view: 'candidates-kanban');
})->name('candidates-kanban');

Route::get('/refferals', function () {
    return view(view: 'refferals');
})->name('refferals');

Route::get('/estimates', function () {
    return view(view: 'estimates');
})->name('estimates');

Route::get('/payments', function () {
    return view(view: 'payments');
})->name('payments');

Route::get('/job-details', function () {
    return view(view: 'job-details');
})->name('job-details');

Route::get('/aptitude-result', function () {
    return view(view: 'aptitude-result');
})->name('aptitude-result');

Route::get('/blog-2', function () {
    return view(view: 'blog-2');
})->name('blog-2');

Route::get('/currencies', function () {
    return view(view: 'currencies');
})->name('currencies');

Route::get('/email-reply', function ()       {
    return view(view: 'email-reply');
})->name('email-reply');

Route::get('/experience-level', function ()       {
    return view(view: 'experience-level');
})->name('experience-level');

Route::get('/form-pickers', function ()       {
    return view(view: 'form-pickers');
})->name('form-pickers');

Route::get('/group-video-call', function ()       {
    return view(view: 'group-video-call');
})->name('group-video-call');

Route::get('/invoice', function ()       {
    return view(view: 'invoice');
})->name('invoice');


Route::get('/ui-alerts', function () {
    return view('ui-alerts');
})->name('ui-alerts');

Route::get('/ui-accordion', function () {
    return view('ui-accordion');
})->name('ui-accordion');

Route::get('/ui-avatar', function () {
    return view('ui-avatar');
})->name('ui-avatar');

Route::get('/ui-badges', function () {
    return view('ui-badges');
})->name('ui-badges');

Route::get('/ui-borders', function () {
    return view('ui-borders');
})->name('ui-borders');

Route::get('/ui-buttons', function () {
    return view('ui-buttons');
})->name('ui-buttons');

Route::get('/ui-buttons-group', function () {
    return view('ui-buttons-group');
})->name('ui-buttons-group');

Route::get('/ui-breadcrumb', function () {
    return view('ui-breadcrumb');
})->name('ui-breadcrumb');

Route::get('/ui-cards', function () {
    return view('ui-cards');
})->name('ui-cards');

Route::get('/ui-carousel', function () {
    return view('ui-carousel');
})->name('ui-carousel');

Route::get('/ui-colors', function () {
    return view('ui-colors');
})->name('ui-colors');

Route::get('/ui-dropdowns', function () {
    return view('ui-dropdowns');
})->name('ui-dropdowns');

Route::get('/ui-grid', function () {
    return view('ui-grid');
})->name('ui-grid');

Route::get('/ui-images', function () {
    return view('ui-images');
})->name('ui-images');

Route::get('/ui-lightbox', function () {
    return view('ui-lightbox');
})->name('ui-lightbox');

Route::get('/ui-media', function () {
    return view('ui-media');
})->name('ui-media');

Route::get('/ui-modals', function () {
    return view('ui-modals');
})->name('ui-modals');

Route::get('/ui-offcanvas', function () {
    return view('ui-offcanvas');
})->name('ui-offcanvas');

Route::get('/ui-pagination', function () {
    return view('ui-pagination');
})->name('ui-pagination');

Route::get('/ui-popovers', function () {
    return view('ui-popovers');
})->name('ui-popovers');

Route::get('/ui-progress', function () {
    return view('ui-progress');
})->name('ui-progress');

Route::get('/ui-placeholders', function () {
    return view('ui-placeholders');
})->name('ui-placeholders');

Route::get('/ui-rangeslider', function () {
    return view('ui-rangeslider');
})->name('ui-rangeslider');

Route::get('/ui-spinner', function () {
    return view('ui-spinner');
})->name('ui-spinner');

Route::get('/ui-sweetalerts', function () {
    return view('ui-sweetalerts');
})->name('ui-sweetalerts');

Route::get('/ui-nav-tabs', function () {
    return view('ui-nav-tabs');
})->name('ui-nav-tabs');

Route::get('/ui-toasts', function () {
    return view('ui-toasts');
})->name('ui-toasts');

Route::get('/ui-tooltips', function () {
    return view('ui-tooltips');
})->name('ui-tooltips');

Route::get('/ui-typography', function () {
    return view('ui-typography');
})->name('ui-typography');

Route::get('/ui-video', function () {
    return view('ui-video');
})->name('ui-video');

Route::get('/ui-ribbon', function () {
    return view('ui-ribbon');
})->name('ui-ribbon');

Route::get('/ui-clipboard', function () {
    return view('ui-clipboard');
})->name('ui-clipboard');

Route::get('/ui-drag-drop', function () {
    return view('ui-drag-drop');
})->name('ui-drag-drop');

Route::get('/ui-rating', function () {
    return view('ui-rating');
})->name('ui-rating');

Route::get('/ui-text-editor', function () {
    return view('ui-text-editor');
})->name('ui-text-editor');

Route::get('/ui-swiperjs', function () {
    return view('ui-swiperjs');
})->name('ui-swiperjs');

Route::get('/ui-counter', function () {
    return view('ui-counter');
})->name('ui-counter');

Route::get('/ui-scrollbar', function () {
    return view('ui-scrollbar');
})->name('ui-scrollbar');

Route::get('/ui-stickynote', function () {
    return view('ui-stickynote');
})->name('ui-stickynote');

Route::get('/ui-timeline', function () {
    return view('ui-timeline');
})->name('ui-timeline');

Route::get('/chart-apex', function () {
    return view('chart-apex');
})->name('chart-apex');

Route::get('/chart-c3', function () {
    return view('chart-c3');
})->name('chart-c3');  

Route::get('/chart-flot', function () {
    return view('chart-flot');
})->name('chart-flot'); 

Route::get('/chart-js', function () {
    return view('chart-js');
})->name('chart-js');    

Route::get('/chart-morris', function () {
    return view('chart-morris');
})->name('chart-morris'); 

Route::get('/chart-peity', function () {
    return view('chart-peity');
})->name('chart-peity');

Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
})->name('icon-fontawesome');

Route::get('/icon-feather', function () {
    return view('icon-feather');
})->name('icon-feather');

Route::get('/icon-ionic', function () {
    return view('icon-ionic');
})->name('icon-ionic');

Route::get('/icon-material', function () {
    return view('icon-material');
})->name('icon-material');

Route::get('/icon-pe7', function () {
    return view('icon-pe7');
})->name('icon-pe7');

Route::get('/icon-simpleline', function () {
    return view('icon-simpleline');
})->name('icon-simpleline');

Route::get('/icon-themify', function () {
    return view('icon-themify');
})->name('icon-themify');

Route::get('/icon-weather', function () {
    return view('icon-weather');
})->name('icon-weather');

Route::get('/icon-typicon', function () {
    return view('icon-typicon');
})->name('icon-typicon');

Route::get('/icon-flag', function () {
    return view('icon-flag');
})->name('icon-flag');

Route::get('/icon-tabler', function () {
    return view('icon-tabler');
})->name('icon-tabler');

Route::get('/icon-bootstrap', function () {
    return view('icon-bootstrap');
})->name('icon-bootstrap');

Route::get('/icon-remix', function () {
    return view('icon-remix');
})->name('icon-remix');

Route::get('/form-checkbox-radios', function () {
    return view('form-checkbox-radios');
})->name('form-checkbox-radios');

Route::get('/form-floating-labels', function () {
    return view('form-floating-labels');
})->name('form-floating-labels');

Route::get('/form-grid-gutters', function () {
    return view('form-grid-gutters');
})->name('form-grid-gutters');

Route::get('/form-elements', function () {
    return view('form-elements');
})->name('form-elements');

Route::get('/form-select', function () {
    return view('form-select');
})->name('form-select');

Route::get('/form-select2', function () {
    return view('form-select2');
})->name('form-select2');

Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');

Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');

Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');

Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');

Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');

Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');

Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');

Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');

Route::get('/form-checkbox-radios', function () {
    return view('form-checkbox-radios');
})->name('form-checkbox-radios');

Route::get('/form-floating-labels', function () {
    return view('form-floating-labels');
})->name('form-floating-labels');

Route::get('/form-grid-gutters', function () {
    return view('form-grid-gutters');
})->name('form-grid-gutters');

Route::get('/form-elements', function () {
    return view('form-elements');
})->name('form-elements');

Route::get('/form-select', function () {
    return view('form-select');
})->name('form-select');

Route::get('/form-select2', function () {
    return view('form-select2');
})->name('form-select2');

Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');

Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');

Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');

Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');

Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');

Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');

Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('/maps-vector', function () {
    return view('maps-vector');
})->name('maps-vector');

Route::get('/maps-leaflet', function () {
    return view('maps-leaflet');
})->name('maps-leaflet');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/login-2', function () {
    return view('login-2');
})->name('login-2');
Route::get('/login-3', function () {
    return view('login-3');
})->name('login-3');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/register-2', function () {
    return view('register-2');
})->name('register-2');
Route::get('/register-3', function () {
    return view('register-3');
})->name('register-3');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/forgot-password-2', function () {
    return view('forgot-password-2');
})->name('forgot-password-2');
Route::get('/forgot-password-3', function () {
    return view('forgot-password-3');
})->name('forgot-password-3');
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');
Route::get('/reset-password-2', function () {
    return view('reset-password-2');
})->name('reset-password-2');
Route::get('/reset-password-3', function () {
    return view('reset-password-3');
})->name('reset-password-3');
Route::get('/email-verification', function () {
    return view('email-verification');
})->name('email-verification');
Route::get('/email-verification-2', function () {
    return view('email-verification-2');
})->name('email-verification-2');
Route::get('/email-verification-3', function () {
    return view('email-verification-3');
})->name('email-verification-3');
Route::get('/two-step-verification', function () {
    return view('two-step-verification');
})->name('two-step-verification');
Route::get('/two-step-verification-2', function () {
    return view('two-step-verification-2');
})->name('two-step-verification-2');
Route::get('/two-step-verification-3', function () {
    return view('two-step-verification-3');
})->name('two-step-verification-3');
Route::get('/lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('/under-maintenance', function () {
    return view('under-maintenance');
})->name('under-maintenance');
Route::get('/under-construction', function () {
    return view('under-construction');
})->name('under-construction');

Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');

Route::get('/security-settings', function () {
    return view('security-settings');
})->name('security-settings');

Route::get('/notification-settings', function () {
    return view('notification-settings');
})->name('notification-settings');

Route::get('/connected-apps', function () {
    return view('connected-apps');
})->name('connected-apps');

Route::get('/bussiness-settings', function () {
    return view('bussiness-settings');
})->name('bussiness-settings');

Route::get('/seo-settings', function () {
    return view('seo-settings');
})->name('seo-settings');

Route::get('/localization-settings', function () {
    return view('localization-settings');
})->name('localization-settings');

Route::get('/expenses-report', function () {
    return view('expenses-report');
})->name('expenses-report');

Route::get('/invoice-report', function () {
    return view('invoice-report');
})->name('invoice-report');

Route::get('/payment-report', function () {
    return view('payment-report');
})->name('payment-report');

Route::get('/project-report', function () {
    return view('project-report');
})->name('project-report');

Route::get('/task-report', function () {
    return view('task-report');
})->name('task-report');

Route::get( 'user-report', function (){
    return view('user-report');
})->name('user-report');

Route::get( 'employee-report', function () {
    return view( 'employee-report' );
})->name( 'employee-report' );

Route::get( 'payslip-report', function () {
    return view('payslip-report');
})->name('payslip-report');

Route::get( 'attendance-report', function () {
    return view('attendance-report');
})->name('attendance-report');

Route::get( 'leave-report', function () {
    return view('leave-report');
})->name('leave-report');

Route::get('daily-report', function () {
    return view('daily-report');
})->name('daily-report');

Route::get('roles-permissions', function() {
    return view('roles-permissions');
})->name('roles-permissions');

Route::get('permission', function() {
    return view('permission');
})->name('permission');

Route::get('knowledgebase', function() {
    return view('knowledgebase');
})->name('knowledgebase');

Route::get('knowledgebase-view', function() {
    return view('knowledgebase-view');
})->name('knowledgebase-view');

Route::get('knowledgebase-details', function() {
    return view('knowledgebase-details');
})->name('knowledgebase-details');

Route::get('users', function() {
    return view('users');
})->name('users');

Route::get('assets', function() {
    return view('assets');
})->name('assets');

Route::get('asset-categories', function() {
    return view('asset-categories');
})->name('asset-categories');

Route::get('payroll', function() {
    return view('payroll');
})->name('payroll');

Route::get('payroll-overtime', function() {
    return view('payroll-overtime');
})->name('payroll-overtime');

Route::get('payroll-deduction', function() {
    return view('payroll-deduction');
})->name('payroll-deduction');

Route::get('payslip', function() {
    return view('payslip');
})->name('payslip');

Route::get('employee-salary', function() {
    return view('employee-salary');
})->name('employee-salary');

Route::get('/prefixes', function () {
    return view('prefixes');
})->name('prefixes');

Route::get('/preferences', function () {
    return view('preferences');
})->name('preferences');

Route::get('/appearance', function () {
    return view('appearance');
})->name('appearance');

Route::get('/language', function () {
    return view('language');
})->name('language');

Route::get('/language-web', function () {
    return view('language-web');
})->name('language-web');

Route::get('/add-language', function () {
    return view('add-language');
})->name('add-language');

Route::get('/authentication-settings', function () {
    return view('authentication-settings');
})->name('authentication-settings');

Route::get('/ai-settings', function () {
    return view('ai-settings');
})->name('ai-settings');

Route::get( '/salary-settings', function () {
    return view('salary-settings');
})->name('salary-settings');

Route::get( '/approval-settings', function () {
    return view('approval-settings');
})->name('approval-settings');

Route::get( '/invoice-settings', function () {
    return view('invoice-settings');
})->name('invoice-settings');

Route::get( '/leave-type', function () {
    return view('leave-type');
})->name('leave-type');

Route::get( '/custom-fields', function () {
    return view('custom-fields');
})->name('custom-fields');

Route::get( '/email-settings', function () {
    return view('email-settings');
})->name('email-settings');

Route::get( '/email-template', function () {
    return view('email-template');
})->name('email-template');

Route::get( '/sms-settings', function () {
    return view('sms-settings');
})->name('sms-settings');

Route::get( '/sms-template', function () {
    return view('sms-template');
})->name('sms-template');

Route::get( '/otp-settings', function () {
    return view('otp-settings');
})->name('otp-settings');

Route::get( '/gdpr', function () {
    return view('gdpr');
})->name('gdpr');

Route::get( '/maintenance-mode', function () {
    return view('maintenance-mode');
})->name('maintenance-mode');

Route::get( '/payment-gateways', function () {
    return view( 'payment-gateways');
})->name( 'payment-gateways');

Route::get( '/tax-rates', function () {
    return view( 'tax-rates');
})->name( 'tax-rates');

Route::get( '/pages', function () {
    return view( 'pages');
})->name( 'pages');

Route::get( '/blogs', function () {
    return view( 'blogs');
})->name( 'blogs');

Route::get( '/blog-categories', function () {
    return view( 'blog-categories');
})->name( 'blog-categories');

Route::get( '/blog-comments', function () {
    return view( 'blog-comments');
})->name( 'blog-comments');

Route::get( '/blog-tags',  function () {
    return view( 'blog-tags');
})->name( 'blog-tags');

Route::get( '/countries',  function () {
    return view( 'countries');
})->name( 'countries');

Route::get(uri: '/states', action: function () {
    return view( 'states');
})->name( 'states');

Route::get( '/cities', function () {
    return view( 'cities');
})->name( 'cities');

Route::get( '/testimonials', function () {
    return view( 'testimonials');
})->name( 'testimonials');

Route::get( '/faq', function () {
    return view( 'faq');
})->name( 'faq');

Route::get( '/budget-expenses', function () {
    return view( 'budget-expenses');
})->name( 'budget-expenses');

Route::get( '/budget-revenues', function () {
    return view( 'budget-revenues');
})->name( 'budget-revenues');

Route::get( '/budgets', function () {
    return view( 'budgets');
})->name( 'budgets');

Route::get( '/categories', function () {
    return view( 'categories');
})->name( 'categories');

Route::get( '/taxes', function () {
    return view( 'taxes');
})->name( 'taxes');

Route::get( '/provident-fund', function () {
    return view( 'provident-fund');
})->name( 'provident-fund');

Route::get( '/expenses', function () {
    return view( 'expenses');
})->name( 'expenses');

Route::get( '/shortlist-candidates', function () {
    return view( 'shortlist-candidates');
})->name( 'shortlist-candidates');

Route::get( '/offer-approvals', function () {
    return view( 'offer-approvals');
})->name( 'offer-approvals');

Route::get('/terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/api-keys', function () {
    return view('api-keys');
})->name('api-keys');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('/search-result', function () {
    return view('search-result');
})->name('search-result');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/starter', function () {
    return view('starter');
})->name('starter');

Route::get('/custom-css', function () {
    return view('custom-css');
})->name('custom-css');

Route::get('/custom-js', function () {
    return view('custom-js');
})->name('custom-js');

Route::get('/cronjob', function () {
    return view('cronjob');
})->name('cronjob');

Route::get('/cronjob-schedule', function () {
    return view('cronjob-schedule');
})->name('cronjob-schedule');

Route::get('/storage-settings', function () {
    return view('storage-settings');
})->name('storage-settings');

Route::get('/ban-ip-address', function () {
    return view('ban-ip-address');
})->name('ban-ip-address');

Route::get('/backup', function () {
    return view('backup');
})->name('backup');

Route::get('/clear-cache', function () {
    return view('clear-cache');
})->name('clear-cache');

Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('/success-2', function () {
    return view('success-2');
})->name('success-2');
Route::get('/success-3', function () {
    return view('success-3');
})->name('success-3');



