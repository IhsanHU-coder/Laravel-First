<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ProfilController;
    use App\Http\Controllers\KontakController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\StudentController;
    use App\Http\Controllers\GuardianController;
    use App\Http\Controllers\ClassroomController;
    use App\Http\Controllers\TeacherController;
    use App\Http\Controllers\SubjectController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\admin\DashboardController;
    use App\Http\Controllers\admin\AdminStudentController;
    use App\Http\Controllers\admin\AdminClassroomController;
    use App\Http\Controllers\admin\AdminTeacherController;
    use App\Http\Controllers\admin\AdminSubjectController;
    use App\Http\Controllers\admin\AdminProfilController;
    use App\Http\Controllers\admin\AdminKontakController;
    use App\Http\Controllers\admin\AdminDashboardController;
    use App\Http\Controllers\admin\AdminGuardianController;
    // use ..\views\home.blade.php;

    Route::get('/', [HomeController::class, 'dashboard']);
    Route::get('/profil', [ProfilController::class, 'profil']);
    Route::get('/kontak', [KontakController::class, 'kontak']);
    Route::get('/home', [HomeController::class, 'home']);
    Route::get('/student', [StudentController::class, 'index']);
    Route::get('/guardian', [GuardianController::class, 'index']);
    Route::get('/classroom', [ClassroomController::class, 'index']);
    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::get('/subject', [SubjectController::class, 'index']);
    // view login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// proses login
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    

    Route::get('/dashboard', function () {
        return view('components.admin.dashboard');
    });

    Route::get('/admin/dashboard', function () {
    return view('components.admin.dashboard');
})->middleware('auth');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post');

    // Route::get('/login', function () {
    //     return view('auth.login');
    // });
    // Route::get('/profile', function () {
    //     return view('components.admin.profile');
    // });
    Route::get('/student2', function () {
        return view('components.admin.student');
    });

    Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('admin.dashboard');

        Route::get('/profil', [AdminProfilController::class, 'profil']);
        Route::get('/kontak', [AdminKontakController::class, 'kontak']);

        Route::resource('student', AdminStudentController::class);
        Route::resource('teacher', AdminTeacherController::class);
        Route::resource('classroom', AdminClassroomController::class);
        Route::resource('guardian', AdminGuardianController::class);
        Route::resource('subject', AdminSubjectController::class);
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/admin/profile', [AdminProfilController::class, 'profil']);
    Route::get('/admin/kontak', [AdminKontakController::class, 'kontak']);
    // Route::get('/admin/guardian', [AdminGuardianController::class, 'index']);

    Route::get('/guardian', [AdminGuardianController::class, 'index'])->name('guardians.index');
    Route::post('/guardian', [AdminGuardianController::class, 'store'])->name('guardians.store');
    Route::get('/guardians/{guardian}/edit', [AdminGuardianController::class, 'edit'])->name('guardians.edit');
    Route::put('/guardians/{guardian}', [AdminGuardianController::class, 'update'])->name('guardians.update');
    Route::delete('/guardians/{guardian}', [AdminGuardianController::class, 'destroy'])->name('guardians.destroy');


    Route::get('/student', [AdminStudentController::class, 'index'])->name('students.index');
    Route::post('/student', [AdminStudentController::class, 'store'])->name('students.store');
    Route::get('/students/{student}/edit', [AdminStudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{student}', [AdminStudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}', [AdminStudentController::class, 'destroy'])->name('students.destroy');


    Route::get('/classrooms', [AdminClassroomController::class, 'index'])->name('class_rooms.index');
    Route::post('/classrooms', [AdminClassroomController::class, 'store'])->name('class_rooms.store');
    Route::get('/classrooms/{classroom}/edit', [AdminClassroomController::class, 'edit'])->name('class_rooms.edit');
    Route::put('/classrooms/{classroom}', [AdminClassroomController::class, 'update'])->name('class_rooms.update');
    Route::delete('/classrooms/{classroom}', [AdminClassroomController::class, 'destroy'])->name('class_rooms.destroy');
    Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teachers.index');
    Route::post('/teacher', [AdminTeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/{teacher}/edit', [AdminTeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/teachers/{teacher}', [AdminTeacherController::class, 'update'])->name('teachers.update');
    Route::delete('/teachers/{teacher}', [AdminTeacherController::class, 'destroy'])->name('teachers.destroy');

    Route::get('/subject', [AdminSubjectController::class, 'index'])->name('subjects.index');
    Route::post('/subject', [AdminSubjectController::class, 'store'])->name('subjects.store');
    Route::get('/subjects/{subject}/edit', [AdminSubjectController::class, 'edit'])->name('subjects.edit');
    Route::put('/subjects/{subject}', [AdminSubjectController::class, 'update'])->name('subjects.update');
    Route::delete('/subjects/{subject}', [AdminSubjectController::class, 'destroy'])->name('subjects.destroy');

    });



    // Route::resource('student', StudentController::class);

    // Route::get('/classroom', [ClassroomController::class, 'index']);

    // Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    // Route::get('/admin/student', [AdminStudentController::class, 'index'])->name('students.index');
    // Route::post('admin/student', [AdminStudentController::class, 'store'])->name('students.store');
    // Route::delete('admin/students/{student}', [AdminStudentController::class, 'destroy'])->name('students.destroy');


    // Route::get('/admin/classroom', [AdminClassroomController::class, 'index']);
    // Route::post('admin/classroom', [AdminClassroomController::class, 'store'])->name('class_rooms.store');

    // Route::prefix('admin')->name('admin.')->group(function () {
    //     // Dashboard
    //     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //     // Student
    //     Route::get('/student', [AdminStudentController::class, 'index'])->name('student.index');
    //     Route::post('/student', [AdminStudentController::class, 'store'])->name('student.store');
    //     Route::delete('/student/{student}', [AdminStudentController::class, 'destroy'])->name('student.destroy');

    //     // Classroom
    //     Route::get('/classroom', [AdminClassroomController::class, 'index'])->name('classroom.index');
    //     Route::post('/classroom', [AdminClassroomController::class, 'store'])->name('classroom.store');
    // });

    Route::resource('student', StudentController::class);

    Route::get('/classroom', [ClassroomController::class, 'index']);

    
    
    // Route::prefix('/components')->name('/components.')->group(function () {
    //     // Dashboard admin
    //     Route::get('/adminDashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');

    // });



    // Route::prefix('/admin')->name('/admin.')->group(function () {

        

    //     // Profil admin
    //     Route::get('/profil', [ProfilController::class, 'adminIndex'])->name('profil');

    //     // Student admin
    //     Route::get('/student', [AdminStudentController::class, 'index'])->name('student.index');
    //     Route::post('/student', [AdminStudentController::class, 'store'])->name('student.store');

    //     // Teacher admin
    //     Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
    //     Route::post('/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');
    //     Route::get('/teacher/component', [AdminTeacherController::class, 'adminIndex'])->name('teacher.component');

    //     // Guardian admin
    //     Route::get('/guardians', [AdminGuardianController::class, 'index'])->name('guardians.index');
    //     Route::post('/guardians', [AdminGuardianController::class, 'store'])->name('guardians.store');

    //     // Subject admin
    //     Route::get('/subject', [SubjectController::class, 'adminIndex'])->name('subject.index');

    //     // Classroom admin
    //     Route::get('/classroom', [ClassroomController::class, 'adminIndex'])->name('classroom.index');

    //     // Contact admin
    //     Route::get('/kontak', [ContactController::class, 'adminIndex'])->name('kontak');
    // });



    // Route::get('/home', function () {
    //     return view('home', [
    //         "judul" => "Home"
    //     ]);
    // });


    // Route::get('/', function () {
    //     return view('beranda', [
    //         "judul" => "Beranda"
    //     ]);
    // });

    // Route::get('/kontak', function () {
    //     return view('kontak', [
    //         "judul" => "Kontak"
    //     ]);
    // });


    // Route::get('/profil', function () {
    //     return view('profil', [
    //         "judul" => "Profil"
    //     ]);
    // });