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
    use App\Http\Controllers\admin\DashboardController;
    use App\Http\Controllers\admin\AdminStudentController;
    use App\Http\Controllers\admin\AdminClassroomController;
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
    Route::get('/subject', [SubjectController::class, 'index']);

    Route::get('/dashboard', function () {
        return view('components.admin.dashboard');
    });
    Route::get('/student2', function () {
        return view('components.admin.student');
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

    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    Route::get('/admin/student', [AdminStudentController::class, 'index'])->name('students.index');
    Route::post('admin/student', [AdminStudentController::class, 'store'])->name('students.store');
    Route::get('/admin/students/{student}/edit', [AdminStudentController::class, 'edit'])->name('students.edit');

    Route::put('/admin/students/{student}', [AdminStudentController::class, 'update'])->name('students.update');


    Route::delete('admin/students/{student}', [AdminStudentController::class, 'destroy'])->name('students.destroy');



    Route::get('/admin/classrooms', [AdminClassroomController::class, 'index'])->name('class_rooms.index');
    Route::post('admin/classrooms', [AdminClassroomController::class, 'store'])->name('class_rooms.store');
    Route::get('/admin/classrooms/{classroom}/edit', [AdminClassroomController::class, 'edit'])->name('class_rooms.edit');
    Route::put('/admin/classrooms/{classroom}', [AdminClassroomController::class, 'update'])->name('class_rooms.update');
    Route::delete('admin/classrooms/{classroom}', [AdminClassroomController::class, 'destroy'])->name('class_rooms.destroy');

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
