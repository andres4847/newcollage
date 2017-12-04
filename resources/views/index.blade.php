@extends('layouts.principal')


@section('page-styles')
    {!! Html::style("plugins/wowslider/engine/wowslider.css") !!}  

@endsection



@section('content')

	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                <li>
                    <img src="plugins/wowslider/data/images/1.jpg" alt="jquery image slider" title="1" id="wows1_0"/>
                </li>
                <li>
                    <img src="plugins/wowslider/data/images/4.jpg" alt="4" title="4" id="wows1_1"/>
                </li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="1"><span><img src="plugins/wowslider/data/tooltips/1.jpg" alt="1"/>1</span></a>
                <a href="#" title="4"><span><img src="plugins/wowslider/data/tooltips/4.jpg" alt="4"/>2</span></a>
            </div>
        </div>
	</div>	

@endsection



@section('page-script')
       {!! Html::script("plugins/wowslider/engine/wowslider.js") !!}  
       {!! Html::script("plugins/wowslider/engine/init_wowslider.js") !!}  
@endsection