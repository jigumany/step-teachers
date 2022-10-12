<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SchoolsController;
use App\Http\Controllers\Admin\CandidatesController;
use App\Http\Controllers\Admin\MailBoxController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\Admin\PlacementsController;
use App\Http\Controllers\Admin\CalenderController;
use App\Http\Controllers\Admin\MapController;


Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');

    // dashboard
    Route::get('/', [DashboardController::class, 'index']);

    // school management
    Route::get('/schools', [SchoolsController::class, 'index'])->name('schools');
    Route::get('/schools/audit-logs', [SchoolsController::class, 'auditLogs'])->name('schools.audit.logs');

    // candidates
    Route::get('/candidates', [CandidatesController::class, 'index'])->name('candidates');
    Route::get('/candidates/compliances', [CandidatesController::class, 'compliances'])->name('candidates.compliances');
    Route::get('/candidates/reports', [CandidatesController::class, 'reports'])->name('candidates.reports');
    Route::get('/candidates/bookings', [CandidatesController::class, 'bookings'])->name('candidates.bookings');
    Route::get('/candidates/scheduled-interviews', [CandidatesController::class, 'scheduledInterviews'])->name('candidates.scheduled.interviews');

    // vacancies
    Route::get('/vacancies', [VacanciesController::class, 'index'])->name('vacancies');

    // placements
    Route::get('/placements',[PlacementsController::class, 'index'])->name('placements');

    // mailbox
    Route::get('/mailbox', [MailBoxController::class, 'index'])->name('mailbox');
    Route::get('/compose-mail', [MailBoxController::class, 'composeMail'])->name('mailbox.compose.mail');
    Route::get('/mail-details', [MailBoxController::class, 'mailDetails'])->name('mailbox.mail.details');
    Route::get('/mail-contact', [MailBoxController::class, 'mailContact'])->name('mailbox.mail.contact');
    Route::get('/mail-contact-details', [MailBoxController::class, 'mailContactDetails'])->name('mailbox.mail.contact.details');

    Route::get('/map', [MapController::class, 'index'])->name('map');

    Route::get('/calender', [CalenderController::class, 'index'])->name('calender');


});


