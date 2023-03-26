@extends('master')
@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/Mostyle.css')}}">


<div class="container">
  <div class="row">
    <section class="marketing col-md-12"  id="#">
      <div class="grid col-md-6 text-center continer-imgs">
            <img src="{{asset('assets/images/Vector first.png')}}" class="vector-img">
            <img src="{{asset('assets/images/Comp 1_2.gif')}}" class="gif-img">
      </div>
    <div class="col-md-6" id="continer-text">
        <h3>{{$row[1]->name}}</h3>
        <p class="info_par2">{{$row[1]->description}}

 </div>

    </section>
<!-- *************************************************************************************************************** -->
    <section class="success col-lg-12" id="#">
    <div class="text">
        <img src="{{asset('assets/images/Rectangle 126.png')}}">
        <h2><span>أعوام</span> <span id="number">10 </span>  </h2>
        <h3>من النجاح والثقة</h3>

    </div>

    <div class="box">
        <div class="card-main" >
            <img src="{{asset('assets/images/Vector (2).png')}}">
            <h2> دعم موثوق</h2>
            <p class="note">نعمل على إيجاد أفضل الحلول المصممة لاحتياجات عملاؤنا ، ونقدم دعم موثوق به لمساعدتك على الوفاء بالمواعيد النهائيةالخاصة بك</p>

                    </div>
        <div class="card-main" id="card-border">
            <img src="{{asset('assets/images/Asset 3 1.png')}}" class="img-width">
            <h2>ثقة عملاؤنا</h2>
            <p>نحن نتمسك بقيمنا ونضعك عملاؤنا دائمًا في المرتبة الأولى و نعمل بشكل رائع على إبقاء علامتك التجارية ذات أهمية في السوق التجاري</p>
        </div>
        <div class="card-main" id="card-border">
        <img src="{{asset('assets/images/Vector (1).png')}}" >
        <h2>خدمات احترافية</h2>
            <p>نحن نؤمن بخبراء التسويق الرقمي معنا وفرق المحللين منذ أكثر من 10 أعوام على التفكير في الحلول الأكثر فاعلية من الناحية التجارية لعملك</p>

                   </div>
    </div>
    <p class="text-p col-lg-8">  نقدم الحلول الرقمية  لمساعدة عملك على الازدهار ، نحن أكثر من مجرد مصممين وكتّاب ومهندسين ومبرمجين نحن أيضًا أشخاص متحمسون ومهتمون بالمجتمع ، ومكرسون لإيجاد هدف في عملنا</p>
    </section>
<!-- *************************************************************************************************************** -->
    <section class="services col-lg-12">
        <div class="col-lg-5" id="content-text">

    <h1><span>نحن ماهرون</span> في</h1>

    <h2>تقديم الخدمه بشكل <span class="radius">أفضل</span></h2>

    <p>نحن ماهرون في أعمال إدارة حسابات التواصل الاجتماعي وتصميم الجرافيك ، نؤمن بكفاءتنا في وضع استراتيجيات لإدارة الوسائط الاجتماعية ، وإنتاج الحملات الإعلانية ، وتصاميم واجهات المستخدم للمواقع والتطبيقات ولوحات التحكم ، بالنسبة لنا ، يمثل كل مشروع مشروعاً ذا مغزى وهدف . ومغامرة  نشاركها مع عملائنا عن طريق التميز وإخراجه بأفضل نتيجة على الإطلاق
    </p>

    <div class="services-box">

        <div class="services-card">
            <h3>موظفين</h3>
            <span class="num" data-goal="{{$countEmp}}">0</span>
        </div>
        <div class="services-card"  id="border">
            <h3> عملاء ثقة</h3>
            <span class="num" data-goal="122">0</span>
        </div>
        <div class="services-card" id="border">
            <h3>مشاريع مكتملة</h3>
            <span class="num" data-goal="{{$count}}">0</span>
        </div>
    </div>
</div>
<div class="col-lg-6" id="content-imge">
<img src="{{asset('assets/images/Vector (6).png')}}"   class ="first-img" alt="">
<img src="{{asset('assets/images/Rectangle 122.png')}}" style="position: absolute; top:50px;left: 100px" class="sec-img"  alt="">
</div>
</section>



  <a href="" class="btn_sbmit"><i class="fa-solid fa-chevron-left"></i> اطلب خدمتك الآن</a>
</div>
</div>



        <script src="{{asset('assets/js/Script.js')}}"></script>
        <script src="{{asset('assets/js/myScript.js')}}"></script>
        @endsection
