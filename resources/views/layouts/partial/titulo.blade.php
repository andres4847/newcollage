<div class="page-title title-left solid-bg page-title-responsive-enabled">
    <div class="wf-wrap">
        <div class="wf-container-title">
            <div class="wf-table">

                <div class="wf-td hgroup">
                    <h1>{{$titulo}}</h1>
                </div>
                <div class="wf-td">
                    <div class="assistive-text">Tu estas aquí:</div>
                    <ol class="breadcrumbs text-small" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <li typeof="v:Breadcrumb">
                            <a rel="v:url" property="v:title" href="{{ action('HomeController@index') }}" title="">Home</a></li>
                        <li class="current">{{$titulo}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>