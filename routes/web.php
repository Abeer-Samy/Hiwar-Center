<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\website\FrontHomController ;

use App\Http\Controllers\Admin\BooksAndStadies;
use App\Http\Controllers\Admin\VersionsController;
use App\Http\Controllers\Admin\majalaController;
use App\Http\Controllers\Admin\IssueController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CenterController;
use App\Http\Controllers\magalaController;
use App\Http\Controllers\DeplomaController;
use App\Http\Controllers\Admin\DeplomController;

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\website\studiesTypeController;
use App\Http\Controllers\website\VersionController;
use App\Http\Controllers\Admin\LectureController;
use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\website\EventShowController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\SliderController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {return view('welcome');});
    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix("admin")->middleware(['auth'])->group(function(){    
    Route::get("/",[HomeController::class,'index']); 

    // Route::get("study/paging",[BooksAndStadies::class,'paging'])->name("study.paging");
    Route::resource("study",BooksAndStadies::class);
    Route::get("study/{id}/delete",[BooksAndStadies::class,'destroy'])->name("study.delete");

    Route::resource("version",VersionsController::class);
    Route::get("version/{id}/delete",[VersionsController::class,'destroy'])->name("version.delete");

     //مجلة
     Route::resource('/majala',majalaController::class);
     Route::get("majala/{id}/softDelete",[majalaController::class,'softDelete'])->name("majala.softDelete");
     Route::get("majala/{id}/Delete",[majalaController::class,'destroy'])->name("majala.Delete");
     Route::get("majalatrash",[majalaController::class,'trashed'])->name("majalatrash");
     Route::get("majalaBack/{id}",[majalaController::class,'backFromSoftDelete'])->name("majalaBack");
 
     //اعداد المجلة
     Route::resource('/issue',IssueController::class);
     Route::get("issue/{id}/softDelete",[IssueController::class,'softDelete'])->name("issue.softDelete");
     Route::get("issue/{id}/delete",[IssueController::class,'destroy'])->name("issue.delete");
     Route::get("issuetrash",[IssueController::class,'trashed'])->name("issuetrash");
     Route::get("issueBack/{id}",[IssueController::class,'backFromSoftDelete'])->name("issueBack");
 
     //المحتويات
     Route::resource('/issuecontent',ContentController::class);
     Route::get("issuecontent/{id}/softDelete",[ContentController::class,'softDelete'])->name("issuecontent.softDelete");
     Route::get("issuecontent/{id}/delete",[ContentController::class,'destroy'])->name("issuecontent.delete");
     Route::get("contenttrash",[ContentController::class,'trashed'])->name("contenttrash");
     Route::get("contentBack/{id}",[ContentController::class,'backFromSoftDelete'])->name("contentBack");
     
     //البحث في المجلة
     Route::get("search",[majalaController::class,'search'])->name("search");
 
        //عن المركز
        Route::resource('/Center',CenterController::class);
        Route::get("communication/{id}",[CenterController::class,'comm'])->name("communication");
        Route::get("editComm/{id}",[CenterController::class,'editComm'])->name("editComm");
        

     
    //الشخصيات 
    Route::resource('/character',CharacterController::class);
    Route::get("character/{id}/softDelete",[CharacterController::class,'softDelete'])->name("character.softDelete");
    Route::get("character/{id}/delete",[CharacterController::class,'destroy'])->name("character.delete");
    Route::get("charactertrash",[CharacterController::class,'trashed'])->name("charactertrash");
    Route::get("characterBack/{id}",[CharacterController::class,'backFromSoftDelete'])->name("characterBack");
    

    // events 
    Route::resource("event",EventController::class);
    Route::get("event/{id}/delete",[EventController::class,'destroy'])->name("event.delete");
    
    //الاعدادت
    Route::resource('/setting',SettingController::class);
    Route::get("personalityType",[SettingController::class,'creatPersonal'])->name("personalityType");
    Route::post("personalcreate",[SettingController::class,'storPersonal'])->name("personalcreate");
    Route::get("Specialty",[SettingController::class,'SpecialtyCreate'])->name("Specialty");
    Route::post("SpecialtyCreate",[SettingController::class,'storSpecialty'])->name("SpecialtyCreate");
    Route::post("VertionTypeCreate",[SettingController::class,'storVertionType'])->name("VertionTypeCreate");
    Route::get("TypeStudies",[SettingController::class,'StudyTypeCreate'])->name("TypeStudies");
    Route::post("StudyTypeCreate",[SettingController::class,'storStudyType'])->name("StudyTypeCreate");
    Route::get("TypeActivity",[SettingController::class,'ActivTypeCreate'])->name("TypeActivity");
    Route::post("ActiveTypeCreate",[SettingController::class,'storActiveType'])->name("ActiveTypeCreate");
    Route::get("TypeCourse",[SettingController::class,'CourseTypeCreate'])->name("TypeCourse");
    Route::post("CourseTypeCreate",[SettingController::class,'storCourseType'])->name("CourseTypeCreate");
    Route::get("personal/{id}/delete",[SettingController::class,'personaldestroy'])->name("personal.delete");
    Route::get("country/{id}/delete",[SettingController::class,'destroy'])->name("country.delete");
    Route::get("specialties/{id}/delete",[SettingController::class,'specialtydestroy'])->name("specialties.delete");
    Route::get("VertionType/{id}/delete",[SettingController::class,'VertionTypedestroy'])->name("VertionType.delete");
    Route::get("StudyType/{id}/delete",[SettingController::class,'StudyTypedestroy'])->name("StudyType.delete");
    Route::get("TypeActivity/{id}/delete",[SettingController::class,'ActiveTypedestroy'])->name("TypeActivity.delete");
    Route::get("CourseType/{id}/delete",[SettingController::class,'CourseTypedestroy'])->name("CourseType.delete");
     //دورات
    Route::resource('/course',CourseController::class);
    Route::get("course/{id}/softDelete",[CourseController::class,'softDelete'])->name("course.softDelete");
    Route::get("course/{id}/Delete",[CourseController::class,'destroy'])->name("course.Delete");
    Route::get("courseTrash",[CourseController::class,'trashed'])->name("courseTrash");
    Route::get("courseBack/{id}",[CourseController::class,'backFromSoftDelete'])->name("courseBack");
    //البحث في الدورة
   Route::get("search",[CourseController::class,'search'])->name("search");
   
    //الدروس
   Route::resource('/lecture',LectureController::class);
   Route::get("lecture/{id}/softDelete",[LectureController::class,'softDelete'])->name("lecture.softDelete");
   Route::get("lecture/{id}/Delete",[LectureController::class,'destroy'])->name("lecture.Delete");
   Route::get("lectureTrash",[LectureController::class,'trashed'])->name("lectureTrash");
   Route::get("lectureBack/{id}",[LectureController::class,'backFromSoftDelete'])->name("lectureBack");
    
   //دبولمات
   Route::resource('/deploma',DeplomController::class);
   //Route::get("course/{id}/softDelete",[DeplomController::class,'softDelete'])->name("course.softDelete");
   //Route::get("course/{id}/Delete",[DeplomController::class,'destroy'])->name("course.Delete");
   //Route::get("courseTrash",[DeplomController::class,'trashed'])->name("courseTrash");
   //Route::get("courseBack/{id}",[DeplomController::class,'backFromSoftDelete'])->name("courseBack");
   Route::resource("slider",SliderController::class);
    Route::get("slider/{id}/delete",[SliderController::class,'destroy'])->name("slider.delete");

   
});



    Route::get('/', [FrontHomController::class,'index']);




    
Route::resource('/magazine',magalaController::class); //frontsite for majala
Route::get("issue",[magalaController::class,'issue'])->name("issue");  //محتويات أعداد المجلة
Route::get("searchMajala",[magalaController::class,'search'])->name("searchMajala"); //بحث المجلة
Route::get("result",[magalaController::class,'result'])->name("result"); //نتيجة ال


// //بحث المجلة
// Route::get('/searchMajala',function(){

//     return view('frontsite.majala.searchMajala');
    
//     });

//تقديم ورقة في المحلة
Route::get('/PublishMajala',function(){

    return view('frontsite.majala.PublishMajala');
    
    });
    //معايير النشر في مجلة الحوار
Route::get('/PublicationStandards',function(){

    return view('frontsite.majala.PublicationStandards');
    
    });


// عن المركز //

//من نحن
Route::get('/aboutAs',function(){

    return view('frontsite.center.aboutAs');
    
    });

 

    //المجلس الاداري

Route::get('/CenterManagement',function(){

    return view('frontsite.center.CenterManagement');
    
    });

// الـمـجـلـس الإسـتـشـاري

Route::get('/AdvisoryBoard',function(){

    return view('frontsite.center.AdvisoryBoard');
    
    });
// تواصل معنا

Route::get('/connectWithUs',function(){

    return view('frontsite.center.connectWithUs');
    
    });
    
    //أقسام ووحدات المركز
    

    Route::get('/CenterSections',function(){

        return view('frontsite.center.CenterSections');
        
        });




Route::get('/details',function(){

    return view('frontsite.details');
    
    });
    
Route::get("/magazine",[magalaController::class,'index'])->name("magazine");


      //معايير النشر في مجلة الحوار "أدمن "
Route::get('/PublicationStandardsAdmin',function(){

    return view('Admin.PublicationStandards.index');
    
    });


//****************************************************************** */
    //بحث متقدم 
    Route::get('/advancedSearch',function(){

        return view('frontsite.advancedSearch');
        
        });

        //المشاركات البحثية
        //مـعـايـيـر النـشـر
        Route::get('/PublicationStandards',function(){

            return view('frontsite.ShareSearch.PublicationStandards');
            
            }); 

             //أخـلاقـيـات النـشـر
        Route::get('/PublicationEthics',function(){

            return view('frontsite.ShareSearch.PublicationEthics');
            
            }); 

            //نشر 
            Route::get('/publishing',function(){

                return view('frontsite.ShareSearch.publishing');
                
                }); 


                 //abeer
                 Route::get("/books",[studiesTypeController::class,'books']);
                 Route::get("/studies",[studiesTypeController::class,'studies']);
                 Route::get("/translations",[studiesTypeController::class,'translations']);
                 Route::get("/reviews",[studiesTypeController::class,'reviews']);
                 
                Route::get("/positionEstimate",[VersionController::class,'positionEstimate']);
                Route::get("/politicalAnalysis",[VersionController::class,'politicalAnalysis']);
                Route::get("/articles",[VersionController::class,'articles']);
                Route::get("/caseEvaluation",[VersionController::class,'caseEvaluation']);
                Route::get("/searchFiles",[VersionController::class,'searchFiles']);
                Route::get("/reports",[VersionController::class,'reports']);



                Route::get("/show_conferences",[EventShowController::class,'show_conferences']);
                Route::get("/show_seminars_and_lectures",[EventShowController::class,'show_seminars_and_lectures']);
                Route::get("/show_workshops",[EventShowController::class,'show_workshops']);
                // Route::get("/more",[MorePageController::class,'more']);



             

 //تدريب 

           //منهجية التدريب 
           Route::get('/TrainingMethodology',function(){

            return view('frontsite.Courses.TrainingMethodology');
            
            });

            
        
           // دورات
            Route::get("/Trainingcourses",[DeplomaController::class,'create']);
        
          //دبلومات تدريبية
          Route::get("/TrainingDiplomas",[DeplomaController::class,'index']);
        
          //دروس الدورات
          Route::get("/lectureCoure",[DeplomaController::class,'show']);
           
        //بحث الدورة
        Route::get("result",[DeplomaController::class,'search'])->name("result"); //نتيجة ال
        