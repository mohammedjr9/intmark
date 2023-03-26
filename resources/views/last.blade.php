@extends('master')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/l.css') }} " />

    <div class="top-up">
      <div class="container">
        <div class="row" id="fir">
          <div class="parent parents mb-5 pb-5 col-lg-12 d-flex justify-content-center">
            <div class="col-md-6 intmark wow fadeInLeft">
              <img src="{{asset('assets/img/Comp 1_1.gif')}}" alt="error" />
            </div>
            <div class="col-md-6 int wow fadeInRight " id="sec">
              <h4>{{$row->name}}</h4>
              <p>
             {{$row->description}}
              </p>
            </div>
          </div>
          <div class="parent col-md-12">
            <h2>نؤمن بتكوين شراكات قائمة على الثقة مع عملاؤنا</h2>

            <div class="com col-lg-12">
              <div class="col-lg-12 d-flex icons wow fadeInRight">
                <div class="col-md-2 images ">
                  <img src="{{asset('assets/img/image 1.png')}}" alt="" />
                </div>
                <div class="col-md-2 images">
                  <img src="{{asset('assets/img/img2.png')}}" alt="" />
                </div>
                <div class="col-md-2 images">
                  <img src="{{asset('assets/img/image 2.png')}}" alt="" />
                </div>
                <div class="col-md-2 images">
                  <img src="{{asset('assets/img/image 3.png')}}" alt="" />
                </div>
                <div class="col-md-2 images">
                  <img src="{{asset('assets/img/image 4.png')}}" alt="" />
                </div>

            </div>
            <img class="vector" src="{{asset('assets/img/Vector')}}" alt="error" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="down">
      <div class="container">
          <div class="row">
        <div class="col-md-12 ">
          <h3 class="wow pulse">الخدمات التي نقدمها</h3>
          <div class="d-flex justify-content-center column">
          <div class="col-md-6 acc">
            <div class="accordions wow fadeInLeft">


         @foreach($category as $item)
                    <div class="accordion">
                        <input type="checkbox" id="{{$item->name}}" />
                        <label for="{{$item->name}}" id="acc-label" class="acc-label" onclick="show();"
                        >{{$item->name}}</label
                        >
                        <div class="acc-content">
                            <ol>
                               @foreach($item->service as $i)
                                    <li><p>{{ $i->title }}</p></li>
                                @endforeach

                            </ol>
                            <a href="">اطلب الخدمة الان</a>
                        </div>
                    </div>

                @endforeach

            </div>
          </div>
          <div class="col-md-4">
            <div class="img d-flex align-items-center wow fadeInRight">
              <img src="{{asset('assets/img/Rectangle 128.png')}}" alt="" />
            </div>
          </div>
        </div>
    </div>
</div>
      </div>
    </div>
    @endsection
