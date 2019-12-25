
<!doctype html>

<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    <!-- Bootstrap CSS -->
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- {{-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js"> --}} -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <!-- {{-- <script src="js/jquery2.2.4.js"></script> -->
    <!-- <script src="js/jq.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> --}} -->
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <a class="is-logo col-1 pl-0 ml-0 pr-0 mr-0" href="https://www.wasla.com">
            <img alt="" src="http://127.0.0.1:8000/img/wasla23.jpg" class="avatar avatar-70 photo avatar-default" height="70" width="70"> </a><ul class="navbar-nav col-md-7 pr-0 d-flex justify-content-start mrr-5">
                <li class="cstyle  col-md-1 pr-0"><a href="{{ url('/') }}">Home</a></li>
                   <li class=" cstyle col-md-1 pr-0 " data-popover="{{ url('/') }}"><a href="#">Projects</a>
                        </li>      
                                    <li class=" is-group  col-md-1 pr-0">
                                            </li></ul>
                        
                                    <li class=" is-group col-md-4 pr-0 d-flex justify-content-end">
                                        <ul class="list is-inline is-basic is-spaced t-nowrap col-12">
                                            <li>
                                                <ul class=" nav is-aux is-small ">
                                                    <li class="cstyle"><a href="{{ url('/') }}">Programmer</a></li>
                        
                                            
                                            <li>
                                                <ul class="nav is-aux is-small ">
                                                    <li><a id="ar-language" href="/register">Sign Up</a></li>
                                                </ul>
                                            </li>
                                    
                                    <ul class="nav ">
                                    <li><a class="btn is-small is-inverse u-expanded-m " href="{{url('/login_user')}}">Login</a></li>
                        
                        
                                    </ul>
                            </ul>
                        </li>
                    </ul>
                </li>
            </div>
            </nav>
     <div class="text-center">
        <img src="img/stage.jpg" class="d-block w-100" alt="...">
                 <div class="carousel-caption d-none d-md-block">
                    <h1>Wasla.com</h1>
                    <h1>Sudanes broker </h1>
                        <p><h1>Programmer and enterpreneurs</h1></p>
                        <p> Development,Building sites and Application</p>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="#">Create account</a>
                        </li>
                 </div>
        </div>
    <section class="jumbotron text-xs-center">
        <div class="text-center">
            <h1 class="jumbotron-heading">About Wasla.com</h1>
            <p class="jumbotron-heading"> Wasla.com is a sudaness platform that connects programmers with ideas and projects seeking professional</p> 
            <p> Development,Building sites and Application</p>
            <h3> <a href="#demo" class="btn btn-info" data-toggle="collapse">Read more</a> </h3>
                <div id="demo" class=" collapse">
                 wasla.com is a self-employment platform in Sudan

                    Wasla.com works to connect companies and entrepreneurs with the best professional programmers to help them implement their ideas and projects, while giving programmers a place to find projects they work on and increase their income sources. Through wasla.com you can add your project that you want to implement for free to get dozens of offers from the best programmers, then you can choose the appropriate offer for your project so that the programmer begins work on its implementation. The wasla.com platform guarantees your rights as a project owner or programmer, as wasla.com acts as an intermediary between the two parties until the work is completely delivered.
                    Wasla.com was created in 2019 by the wasla.com team
                </div>
        </div>
    </section>
    <!-- Block How Work -->
        <div class="text-center">
             <h2 >How  Wasla.com works</h2>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="fre-work-block">
                             <span>
                                <img alt='' src='img\wasla23.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' /> </a>
                             </span>
                                <p id="desc_work_3"> اذا كنت تبحث عن مبرمج محترف سجل بياناتك و اعرض مشروعك في منصة وصلة.كوم</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="fre-work-block">
                            <span>
                                <img alt='' src='img\wasla23.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' /> </a>
                            </span>
                            <p id="desc_work_1">أضف مشروعك بالتفاصيل والمهارات المطلوبة ، وتلقى عروض المبرمجين المحترفين لإنجازه</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="fre-work-block">
                            <span>
                                <img alt='' src='img\wasla23.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' /> </a>
                            </span>
                            <p id="desc_work_2"> اذا كنت مبرمج سجل و تصفح العروض ، وأعمال العارضين وتقييماتهم ثم اختر العرض المناسب وابدأ بتنفيذ المشروع</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="fre-work-block">
                            <span>
                                <img alt='' src='img\wasla23.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' /> </a>
                            </span>
                            <p id="desc_work_4"> نقودك في أمان مع وصلة.كوم ، يتم الدفع لوصلة.كوم وسيتم دفعها للمنفذ فقط بعد تأكيدك استلام واكتمال المشروع</p>
                        </div>
                    </div>
        </div>
       
    


    <!-- see pro -->
    <section class="jumbotron text-xs-center">
        <div class="text-center">
            <div class="fre-perfect-freelancer">
                <h2 id="title_freelance">رؤية المبرمجين</h2>
                <h2 id="title_freelance">ستجد انسب االمبرمجين لانجاز مشاريعك</h2>
                 <div class="fre-perfect-freelancer-more"><br>
                    <div>
                    <!-- <a class="btn btn-primary" href="#">رؤية جميع المبرمجين</a> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="fre-freelancer-wrap">
                            <a class="free-avatar" href="http://7reef.com/author/hazimdon/">
                                <img alt='' src='img\wasla23.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' /> </a>
                            <h2><a href="http://7reef.com/author/hazimdon/">Hazim Mohammed</a></h2>
                            <p class="secondary-color"></p>
                            <div class="free-rating rate-it" data-score="5"></div>
                                <div class="free-experience">
                                    <span>0 سنة خبرة</span>
                                    <span>1 مشروع منفذ</span>
                                </div>
                                <div class="free-skill">
                                </div>
                        </div>
                    </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="fre-freelancer-wrap">
                                <a class="free-avatar" href="http://7reef.com/author/eyadroid/">
                                    <img alt='' src='img\wasla23.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' /> </a>
                                <h2><a href="http://7reef.com/author/eyadroid/">إياد إسماعيل</a></h2>
                                <p class="secondary-color">مبرمج مواقع وتطبيقات موبايل</p>
                                <div class="free-rating rate-it" data-score="5"></div>
                                <div class="free-experience">
                                    <span>3 سنة خبرة</span>
                                    <span>1 مشروع منفذ</span>
                                </div>
                                <div class="free-skill">
                                    <span class="fre-label"><a href="http://7reef.com/profiles/?skill_profile=css">CSS</a></span><span class="fre-label"><a href="http://7reef.com/profiles/?skill_profile=html">HTML</a></span><span class="fre-label"><a href="http://7reef.com/profiles/?skill_profile=javascript">Javascript</a></span>                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="fre-freelancer-wrap">
                                <a class="free-avatar" href="http://7reef.com/author/alfadni/">
                                    <img alt='' src='img\wasla23.jpg' class='avatar avatar-70 photo avatar-default' height='70' width='70' /> </a>
                                <h2><a href="http://7reef.com/author/alfadni/">عبدالرحمن الفادني</a></h2>
                                <p class="secondary-color">مصمم جرافيك</p>
                                <div class="free-rating rate-it" data-score=""></div>
                                 <div class="free-experience">
                                    <span>12 سنة خبرة</span>
                                    <span>0 مشاريع منفذة</span>
                                </div>
                                <div class="free-skill">
                                    <span class="fre-label"><a href="http://7reef.com/profiles/?skill_profile=graphic-design">التصميم الجرافيكي</a></span> </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="fre-freelancer-wrap">
                                <a class="free-avatar" href="http://7reef.com/author/waelalkhalifa/">
                                    <img alt='' src='img\wasla23.jpg' height='70' width='70' /> </a>
                                <h2><a href="http://7reef.com/author/waelalkhalifa/">وائل الخليفة</a></h2>
                                <p class="secondary-color"> odoo developer</p>
                                <div class="free-rating rate-it" data-score=""></div>
                                <div class="free-experience">
                                    <span>2 سنة خبرة</span>
                                    <span>0 مشاريع منفذة</span>
                                </div>
                                <div class="free-skill">
                                    <span class="fre-label"><a href="http://7reef.com/profiles/?skill_profile=translating-and-copywriting">الكتابة والترجمة</a></span><span class="fre-label"><a href="http://7reef.com/profiles/?skill_profile=websites-development">برمجة وتطوير المواقع</a></span>
                                    <span class="fre-label"><a href="http://7reef.com/profiles/?skill_profile=websites-design">تصميم المواقع</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                    <h2 id="title_start">هل ترغب في إنجاز مشاريعك ؟ هل ترغب في تنفيذ المشاريع</h2>
                        <a class="btn btn-primary" href="#">Start Now </a>
                    </div>
                </div>
</section>

<script src="{{asset('js/app.js')}}"></script>
        </div>
</body>
</html>     					
