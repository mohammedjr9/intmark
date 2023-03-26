@extends('master')
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/works.css')}}" />
    <div class="content-1">
        <div class="paragraph_content">
            <h1>مشاريعنا</h1>
        <p>عرض بعض من أعمالنا ومشاريعنا في السوق الخليجي</p>
        </div>
    </div>

</div>
<div class="container">
    <div class="containerbyme">
    <div class="tab-wrap">

        <!-- active tab on page load gets checked attribute -->


        @foreach($category as $item)
            <input type="radio" id="tab{{$loop->index+1}}" name="tabGroup1" class="tab">
            <label for="tab{{$loop->index+1}}">{{$item->name}}</label>
        @endforeach

@php
  $count=$category->count();
@endphp

       @for($i=0;$i<$count;$i++)
            <div class="tab__content">
                <div class="parent_cards">

@foreach($category[$i]->project as $ii)
                        <a href="{{$ii->link}}" class="card" style="background-image: url('{{asset('upload/images/Project/'.$ii->image)}}')">
                            <div class="content_card rel">
                                <div class="content__">
                                    <img src="{{asset('assets/images/Rectangle 144.png')}}" alt="">
                                    <div class="child_cc">
                                        <h2>{{$ii->name}} </h2>
                                        <div class="spans">
@foreach($ii->tag as $tag)
                                                <span>{{$tag}}</span>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>


                    @endforeach

                </div>


            </div>

        @endfor
















      </div>

    </div>

    </div>
</div>

  @stop
