@extends ('layouts.layout')
@section ('content')

      
          <div class="container-center">
            <img src="/images/homepic.jpg"> <br>
         <h1><a href="orderpizza">Order a pizza</a></h1>
         <p>{{session('mssg')}}</p>
          </div>
          
@endsection