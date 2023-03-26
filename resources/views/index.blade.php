    @extends('master')
    @section('content')
    <div class="container">

      <section class="col-lg-12">
            <div class="sec1 containerByMe">
        <div class="person_photo col-lg-5">
            <div class="person_photo1 wow bounceInDown" data-wow-duration=".5s">
            <img class="wow bounceInDown" data-wow-duration="1s" src="{{asset('assets/images/0232.svg')}}" alt="">
        </div>
        </div>
        <div class="wow bounceInDown info col-lg-7" data-wow-duration="1.5s">
            <p class="intmark">انتمارك</p>
            <h1>{{$rows[0]->name}}</h1>
            <p class="info_par">{{$rows[0]->description}} </p>
            <div class="How_Work">
                  <div class="how">
                    <span>كيف نعمل ؟ </span>
                    <a href="" class="icon"><img src="{{ asset('assets/images/Polygon 1.svg')}}" alt=""></a>
                  </div>
                  <div class="button_contact">
                    <a href="" class="talk btn btn-warning btn-px px-4">تحدث مع الفريق <img src="{{ asset('assets/images/Group 10.svg')}}" alt=""></a>
                  </div>
            </div>
        </div>
        <div class="par">
            <img src="{{ asset('assets/images/image 1.svg')}}" alt="">
            <img src="{{ asset('assets/images/image 6.svg')}}" alt="">
            <img src="{{ asset('assets/images/image 2.svg')}}" alt="">
            <img src="{{ asset('assets/images/image 3.svg')}}" alt="">
            <img src="{{ asset('assets/images/image 4.svg')}}" alt="">
            <img src="{{ asset('assets/images/image 5.svg')}}" alt="">
        </div>
    </div>

      </section>
      <section class="col-lg-12">
        <div class="sec2 containerByMe">
            <div class="video col-lg-6 wow fadeInLeft">
                <img src="{{ asset('assets/images/Comp 1_2.gif')}}" alt="">
            </div>
            <div class="who_are_we wow bounceInRight"col-lg-6">
               <div class="merge ">
                <img src="{{ asset('assets/images/من نحن.svg')}}" alt=""> <span class="aps">من نحن</span>
               </div>
               <div>
                   <h1>{{$rows[1]->name}}</h1>
                   <p class="info_par">{{$rows[1]->description}} </p>
               <a href="" class="btn btn-outline-warning btn-px "> <i class="fas fa-chevron-left"></i> اعرف اكثر</a>
               </div>
            </div>
        </div>
      </section>
    </div>
      <section class="col-lg-12">
        <div class="sec3">
        <div class="top_section d-flex justify-content-between">
            <div class="left">
                <img src="{{ asset('assets/images/Vector (1).svg')}}" alt="">
            </div>
            <div class="basic_service">
                <div class="marge">
                    <img src="{{ asset('assets/images/ثاني وحدة.svg')}}" alt="">
                    <p>لنتحدث عن <span>خدماتنا الأساسية</span></p>
                </div>
                <div class="description">
                    <span>خدماتنا هي جزء من الخطة الإبداعية في إنشاء إستراتيجية تسويق رقمية</span>
                </div>
            </div>
            <div class="right">
                <img src="{{ asset('assets/images/Vectorss.svg')}}" alt="">

            </div>
        </div>
        <div class="container">
        <div class="cardsByMe containerByMe m-auto col-lg-10">

            @foreach($category as $item)
                <div class="cardByMe wow fadeInDown">
                    <div class="icons">
                        <div class="ic_bl"><img src="{{asset('upload/images/category/'.$item->image)}}" alt=""></div>
                        <p>{{$item->name}}</p>
                    </div>
                    <div class="para">

                        <p>{{$item->description}}</p>
                    </div>
                    <a href="" class="btn btn-warning btn-px px-4 "> <i class="fas fa-chevron-left"></i> اطلب الخدمة الآن</a>
                </div>
            @endforeach

        </div>
        </div>
      </section>
      <div class="container">
      <section class="col-lg-12">
        <div class="sec4 containerByMe">

            <div class="who_are_we wow fadeInLeft col-lg-6">
               <div class="merge marge2">
                <img src="{{ asset('assets/images/من نحن.svg')}}" alt=""/> <span class="aps">ماذا نقدم ؟</span>
               </div>
               <div>
                <h1>{{$rows[2]->name}}</h1>
               <p class="info_par2">{{$rows[2]->description}}
                .</p>
               <a href="" class="btn btn-outline-warning btn-px "> <i class="fas fa-chevron-left"></i> اعرف اكثر</a>
               </div>
            </div>
            <div class="img col-lg-6 wow bounceInRight">
                <img src="{{ asset('assets/images/Rectangle 84.svg')}}" alt="">
            </div>
        </div>
      </section>
      <section class="col-lg-12">
        <div class="sec5 containerByMe">
            <div class="marge">
              <img src="{{ asset('assets/images/Vector (Stroke).svg')}}" alt="">
              <span>لماذا تختارنا ؟</span>
            </div>
            <h1>أفضل فريق لدينا في خدمتك</h1>
            <p>نحن نؤمن بنهج قوي لتجميع أفضل فريق لدينا لتلبية احتياجات عملك الأكثر تطلبًا، تعمل فرق المحللين في الواجهة الأمامية والخلفية وفرق الأعمال على التفكير في ابتكار الحلول الأكثر فاعلية من الناحية الفنية حتى الآن من الناحية التجارية لعملك.</p>
            <div class="mazaya">
              <div class="m1">
                <span>إرضـــــــاء العمـــــــلاء</span>
                <img src="{{ asset('assets/images/Vector (9).svg')}}" alt="">
              </div>
              <div class="m1">
                <span>إرضـــــــاء العمـــــــلاء</span>
                <img src="{{ asset('assets/images/Vector (9).svg')}}" alt="">
              </div>
              <div class="m1">
                <span>إرضـــــــاء العمـــــــلاء</span>
                <img src="{{ asset('assets/images/Vector (9).svg')}}" alt="">
              </div>
              <div class="m1">
                <span>إرضـــــــاء العمـــــــلاء</span>
                <img src="{{ asset('assets/images/Vector (9).svg')}}" alt="">
              </div>
            </div>
        </div>
      </section>
      <section class="col-lg-12">
        <div class="sec6 containerByMe">
          <div class="person_photos col-lg-6 wow fadeInLeft">
            <div class="person_photo2">
            <img src="{{asset('assets/images/zalama.svg')}}" alt="">
        </div>
        <div class="crd">
          <div class="client">
            <p>إجمالي العملاء :</p>
            <span>122</span>
          </div>
          <span class="stars">
            <img class="big-stars" src="{{asset('assets/images/Star 2.svg')}}" alt="">
            <img class="big-star" src="{{asset('assets/images/Star 2.svg')}}" alt="">
            <img class="big-stars" src="{{asset('assets/images/Star 2.svg')}}" alt="">
          </span>
        </div>
        <div class="crd1">
          <div class="client">
            <p>المشاريع المكتملة :</p>
            <span>150</span>
          </div>
          <span class="img">
            <img  src="{{asset('assets/images/Group 110.svg')}}" alt="">

          </span>
        </div>
        <div class="crd2">
          <div class="client">
            <p>إجمالي العملاء :</p>
            <span>122</span>
          </div>
          <span class="img">
            <img  src="{{asset('assets/images/Group 109.svg')}}" alt="">
          </span>
        </div>
        </div>
        <div class="col-lg-5 wow flipInX" data-wow-duration="3s">
          <img src="{{ asset('assets/images/Vector (10).svg')}}" alt="">
          <div class="say_client">
            <h1>{{$rows[3]->name}}</h1>
            <p>{{$rows[3]->description}}
            </p>
          </div>
          <p class="lefts">_ مارين أحمد</p>
          <img src="{{ asset('assets/images/Vector (11).svg')}}" alt="">

        </div>
        </div>
      </section>
    </div>
    @endsection
