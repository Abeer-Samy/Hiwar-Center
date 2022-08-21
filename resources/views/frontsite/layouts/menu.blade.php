 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top bg-light" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">
        

            <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">

            <img src="assets/img/2.png" alt="..." style="width:280px; height:100px" > 
            </a>


            <nav id="navbar" class="navbar">
                <ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">عن المركز</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="aboutAs">من نحن </a></li>
                            <li><a class="dropdown-item" href="CenterManagement">مجلس الإدارة</a></li>
                            <li><a class="dropdown-item" href="AdvisoryBoard">المجلس الإستشاري</a></li>
                            <li><a class="dropdown-item" href="CenterSections">أقسام ووحدات المركز</a></li>
                            <li><a class="dropdown-item" href="connectWithUs">تواصل معنا </a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">الاصدارات</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="{{asset('/positionEstimate')}}">تقدير الموقف</a></li>
                            <li><a class="dropdown-item" href="{{asset('/politicalAnalysis')}}">أوراق وتحليلات سياسية</a></li>
                            <li><a class="dropdown-item" href="{{asset('/articles')}}">مقالات</a></li>
                            <li><a class="dropdown-item" href="{{asset('/caseEvaluation')}}">تقييم حالة</a></li>
                            <li><a class="dropdown-item" href="{{asset('/searchFiles')}}"> ملفات بحثية</a></li>
                            <li><a class="dropdown-item" href="{{asset('/reports')}}">تقارير</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">دراسات وكتب</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="{{asset('/books')}}">كتب</a></li>
                            <li><a class="dropdown-item" href="{{asset('/reviews')}}">مراجعات</a></li>
                            <li><a class="dropdown-item" href="{{asset('/translations')}}">ترجمات</a></li>
                            <li><a class="dropdown-item" href="{{asset('/studies')}}">دراسات</a></li>

                        </ul>
                    </li>

                    @php 
                    $var= \App\Models\TypeActivity::all();
                    @endphp
                    <li><a class="nav-link scrollto" href="magazine">المجلة</a></li>
                    
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">فعاليات</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                            @foreach($var as $item)
                            <li><a class="dropdown-item" href="sam/.$item->id">{{$item->event_type}}</a></li>
                            @endforeach
                        </ul>
                    </li>   -->


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">فعاليات</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="show_conferences">مؤتمرات</a></li>
                            <li><a class="dropdown-item" href="show_seminars_and_lectures"> ندوات ومحاضرات</a></li>
                            <li><a class="dropdown-item" href="show_workshops">ورشات عمل </a></li>

                        </ul>
                    </li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">التدريب</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown04">
                            <li><a class="dropdown-item" href="Trainingcourses">دورات</a></li>
                            <li><a class="dropdown-item" href="TrainingDiplomas">ديبلومات تدريبة</a></li>
                            <li><a class="dropdown-item" href="TrainingMethodology">منهجية التدريب </a></li>

                        </ul>
                    </li>


                    <li><a class="nav-link scrollto" href="publishing">مشاركات بحثية</a></li>


 
                   
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->


             <form class="d-flex">
             </form>
          
             <form class="d-flex">
             </form>
        </div>
    </header><!-- End Header -->



    