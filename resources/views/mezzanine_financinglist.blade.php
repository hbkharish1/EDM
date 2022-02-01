@extends('layout.default')

@section('title', 'Create new Mezzanine financing')

@push('css')
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/select-picker/dist/picker.min.css" rel="stylesheet" />
@endpush

@push('scripts')

<script src="{{env('APP_URL')}}/assets/plugins/highlight.js/highlight.min.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/highlightjs.demo.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/table-plugins.demo.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/sidebar-scrollspy.demo.js"></script>




<script src="{{env('APP_URL')}}/assets/plugins/moment/min/moment.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/bootstrap-3-typeahead/bootstrap3-typeahead.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/tag-it/js/tag-it.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-tmpl/js/tmpl.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-load-image/js/load-image.all.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.fileupload.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/summernote/dist/summernote-lite.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/spectrum-colorpicker2/dist/spectrum.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/select-picker/dist/picker.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/highlight.js/highlight.min.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/highlightjs.demo.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/form-plugins.demo.js"></script>


@endpush

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-10">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-12">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">
                                <h1 class="page-header">
                                     Mezzanine financing
                                </h1>
                            </div>

                            <div class="p-2 bd-highlight">
                                <a class="btn btn-primary" href="{{url('/banks/mezzanine_financing')}}" role="button"><i
                                        class="fas fa-lg fa-fw me-2 fa-arrow-left"></i> Go
                                    Back</a>

                            </div>
                        </div>

                        <hr class="mb-4" />

                        

                        <!-- BEGIN #datatable -->

                        <div class="card">
                            <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                                <form class="cmxform" id="signupFormnew"  method="POST" action="{{ route('Mezz_edit') }}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name des Kreditinstituts</label>
                                        <input type="hidden"  name="id" value="{{$mezzanine['id']}}" required>
                                        
                                        <input type="text" class="form-control" name="name" value="{{$mezzanine['name']}}" required>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                     @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="website" class="form-label">Website des
                                            Kreditinstituts</label>
                                        <input type="url" class="form-control" name="website" value="{{$mezzanine['website']}}" required>
                                                  @if ($errors->has('website'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Wohnort des
                                            Darlehensnehmers</label>
                                            {{$mezzanine['borrower_domiciled']}}
                                        <select class="selectpicker form-control" name="borroborrower_domiciledwers[]" id="ex-search" multiple>
                                        @foreach ($countries as $country)
                                            <option value="{{$country}}" {{ in_array($country, $borrower_domiciled) ? 'selected' : '' }}>{{$country}}</option>
                                        @endforeach
                                            <!-- <option value="Deutschland">Deutschland</option>
                                            <option value="Europäische Union">Europäische Union</option>
                                            <option value="außer">außer</option> -->

                                        </select>
                                        @if ($errors->has('Wohnorte'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Wohnort') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="where_in_germany" class="form-label">Regionaler Fokus Ihres
                                            Kreditinstituts</label>

                                        <select class="selectpicker form-control" id="where-germany" multiple  name="Germany_finance[]" value="{{$mezzanine['Germany_finance']}}" selected>
                                            <option value="Berlin"{{ in_array("Berlin", $Germany_finance) ? 'selected' : '' }}>Berlin</option>
                                            <option value="Bundesweit"{{ in_array("Bundesweit", $Germany_finance) ? 'selected' : '' }}>Bundesweit</option>
                                            <option value="Hamburg"{{ in_array("Hamburg", $Germany_finance) ? 'selected' : '' }}>Hamburg</option>
                                            <option value="Munich (München)" {{ in_array("Munich (München)", $Germany_finance) ? 'selected' : '' }}>Munich (München)</option>
                                            <option value="Cologne (Köln)"{{ in_array("Cologne (Köln)", $Germany_finance) ? 'selected' : '' }}>Cologne (Köln)</option>
                                            <option value="Frankfurt am Main"{{ in_array("Frankfurt am Main", $Germany_finance) ? 'selected' : '' }}>Frankfurt am Main</option>
                                            <option value="Stuttgart"{{ in_array("Stuttgart", $Germany_finance) ? 'selected' : '' }}>Stuttgart</option>
                                            <option value="Düsseldorf"{{ in_array("Düsseldorf", $Germany_finance) ? 'selected' : '' }}>Düsseldorf</option>
                                            <option value="Dortmundf"{{ in_array("Dortmundf", $Germany_finance) ? 'selected' : '' }}>Dortmund</option>
                                            <option value="Essen"{{ in_array("Essen", $Germany_finance) ? 'selected' : '' }}>Essen</option>
                                            <option value="Leipzig"{{ in_array("Leipzig", $Germany_finance) ? 'selected' : '' }}>Leipzig</option>
                                            <option value="Bremen"{{ in_array("Bremen", $Germany_finance) ? 'selected' : '' }}>Bremen</option>
                                            <option value="Dresden"{{ in_array("Dresden", $Germany_finance) ? 'selected' : '' }}>Dresden</option>
                                            <option value="Hanover (Hannover)"{{ in_array("Hanover (Hannover)", $Germany_finance) ? 'selected' : '' }}>Hanover (Hannover)</option>
                                            <option value="Nuremberg (Nürnberg)"{{ in_array("Nuremberg (Nürnberg)", $Germany_finance) ? 'selected' : '' }}> Nuremberg (Nürnberg)</option>
                                            <option value="Duisburg"{{ in_array("Duisburg", $Germany_finance) ? 'selected' : '' }}>Duisburg</option>
                                            <option value="Bochum"{{ in_array("Bochum", $Germany_finance) ? 'selected' : '' }}>Bochum</option>
                                            <option value="Wuppertal"{{ in_array("Wuppertal", $Germany_finance) ? 'selected' : '' }}>Wuppertal</option>
                                            <option value="Bielefeld"{{ in_array("Bielefeld", $Germany_finance) ? 'selected' : '' }}>Bielefeld</option>
                                            <option value="Münster"{{ in_array("Münster", $Germany_finance) ? 'selected' : '' }}>Münster</option>
                                            <option value="Karlsruhe"{{ in_array("Karlsruhe", $Germany_finance) ? 'selected' : '' }}>Karlsruhe</option>
                                            <option value="Mannheim"{{ in_array("Mannheim", $Germany_finance) ? 'selected' : '' }}>Mannheim</option>
                                            <option value="Augsburg"{{ in_array("Augsburg", $Germany_finance) ? 'selected' : '' }}>Augsburg</option>
                                            <option value="Wiesbaden"{{ in_array("Wiesbaden", $Germany_finance) ? 'selected' : '' }}>Wiesbaden</option>
                                            <option value="Gelsenkirchen"{{ in_array("Gelsenkirchen", $Germany_finance) ? 'selected' : '' }}>Gelsenkirchen</option>
                                            <option value="Mönchengladbach"{{ in_array("Mönchengladbach", $Germany_finance) ? 'selected' : '' }}>Mönchengladbach</option>
                                            <option value="Braunschweig"{{ in_array("Braunschweig", $Germany_finance) ? 'selected' : '' }}>Braunschweig</option>
                                            <option value="Chemnitz"{{ in_array("Chemnitz", $Germany_finance) ? 'selected' : '' }}>Chemnitz</option>
                                            <option value="Kiel"{{ in_array("Kiel", $Germany_finance) ? 'selected' : '' }}>Kiel</option>
                                            <option value="Aachen"{{ in_array("Aachen", $Germany_finance) ? 'selected' : '' }}>Aachen</option>
                                            <option value="AHalle (Saale)"{{ in_array("AHalle (Saale)", $Germany_finance) ? 'selected' : '' }}>Halle (Saale)</option>
                                            <option value="Magdeburg"{{ in_array("Magdeburg", $Germany_finance) ? 'selected' : '' }}>Magdeburg</option>
                                            <option value="Freiburg im Breisgau"{{ in_array("Freiburg im Breisgau", $Germany_finance) ? 'selected' : '' }}> Freiburg im Breisgau</option>
                                            <option value="Krefeld"{{ in_array("Krefeld", $Germany_finance) ? 'selected' : '' }}> Krefeld</option>
                                            <option value="Lübeck"{{ in_array("Lübeck", $Germany_finance) ? 'selected' : '' }}> Lübeck</option>
                                            <option value="Oberhausen"{{ in_array("Oberhausen", $Germany_finance) ? 'selected' : '' }}> Oberhausen</option>
                                            <option value="Erfurt"{{ in_array("Erfurt", $Germany_finance) ? 'selected' : '' }}> Erfurt</option>
                                            <option value="Mainz"{{ in_array("Mainz", $Germany_finance) ? 'selected' : '' }}> Mainz</option>
                                            <option value="Rostock"{{ in_array("Rostock", $Germany_finance) ? 'selected' : '' }}> Rostock</option>
                                            <option value="Kassel"{{ in_array("Kassel", $Germany_finance) ? 'selected' : '' }}> Kassel</option>
                                            <option value="Hagen"{{ in_array("Hagen", $Germany_finance) ? 'selected' : '' }}> Hagen</option>
                                            <option value="Hamm"{{ in_array("Hamm", $Germany_finance) ? 'selected' : '' }}> Hamm</option>
                                            <option value="Saarbrücken"{{ in_array("Saarbrücken", $Germany_finance) ? 'selected' : '' }}> Saarbrücken</option>
                                            <option value="Mülheim an der Ruhr"{{ in_array("Mülheim an der Ruhr", $Germany_finance) ? 'selected' : '' }}> Mülheim an der Ruhr</option>
                                            <option value="Potsdam"{{ in_array("Potsdam", $Germany_finance) ? 'selected' : '' }}> Potsdam</option>
                                            <option value="Ludwigshafen am Rhein"{{ in_array("Ludwigshafen am Rhein", $Germany_finance) ? 'selected' : '' }}> Ludwigshafen am Rhein</option>
                                            <option value="Oldenburg"{{ in_array("Oldenburg", $Germany_finance) ? 'selected' : '' }}> Oldenburg</option>
                                            <option value="Leverkusen"{{ in_array("Leverkusen", $Germany_finance) ? 'selected' : '' }}> Leverkusen</option>
                                            <option value="Osnabrück"{{ in_array("Osnabrück", $Germany_finance) ? 'selected' : '' }}> Osnabrück</option>
                                            <option value="Solingen"{{ in_array("Solingen", $Germany_finance) ? 'selected' : '' }}> Solingen</option>
                                            <option value="Heidelberg"{{ in_array("Heidelberg", $Germany_finance) ? 'selected' : '' }}> Heidelberg</option>
                                            <option value="Herne"{{ in_array("Herne", $Germany_finance) ? 'selected' : '' }}> Herne</option>
                                            <option value="Neuss"{{ in_array("Neuss", $Germany_finance) ? 'selected' : '' }}> Neuss</option>
                                            <option value="Darmstadt"{{ in_array("Darmstadt", $Germany_finance) ? 'selected' : '' }}> Darmstadt</option>
                                            <option value="Paderborn"{{ in_array("Paderborn", $Germany_finance) ? 'selected' : '' }}> Paderborn</option>
                                            <option value="Regensburg"{{ in_array("Regensburg", $Germany_finance) ? 'selected' : '' }}> Regensburg</option>
                                            <option value="Ingolstadt"{{ in_array("Ingolstadt", $Germany_finance) ? 'selected' : '' }}> Ingolstadt</option>
                                            <option value="Würzburg"{{ in_array("Würzburg", $Germany_finance) ? 'selected' : '' }}> Würzburg</option>
                                            <option value="Fürth"{{ in_array("Fürth", $Germany_finance) ? 'selected' : '' }}> Fürth</option>
                                            <option value="Wolfsburg"{{ in_array("Wolfsburg", $Germany_finance) ? 'selected' : '' }}> Wolfsburg</option>
                                            <option value="Offenbach am Main"{{ in_array("Offenbach am Main", $Germany_finance) ? 'selected' : '' }}> Offenbach am Main</option>
                                            <option value="Ulm"{{ in_array("Ulm", $Germany_finance) ? 'selected' : '' }}> Ulm</option>
                                            <option value="Heilbronn"{{ in_array("Heilbronn", $Germany_finance) ? 'selected' : '' }}> Heilbronn</option>
                                            <option value="Pforzheim"{{ in_array("Pforzheim", $Germany_finance) ? 'selected' : '' }}> Pforzheim</option>
                                            <option value="Göttingen"{{ in_array("Göttingen", $Germany_finance) ? 'selected' : '' }}> Göttingen</option>
                                            <option value="Bottrop"{{ in_array("Bottrop", $Germany_finance) ? 'selected' : '' }}> Bottrop</option>
                                            <option value="Trier"{{ in_array("Trier", $Germany_finance) ? 'selected' : '' }}> Trier</option>
                                            <option value="Recklinghausen"{{ in_array("Recklinghausen", $Germany_finance) ? 'selected' : '' }}> Recklinghausen</option>
                                            <option value="Reutlingen"{{ in_array("Reutlingen", $Germany_finance) ? 'selected' : '' }}> Reutlingen</option>
                                            <option value="Bremerhaven"{{ in_array("Bremerhaven", $Germany_finance) ? 'selected' : '' }}> Bremerhaven</option>
                                            <option value="Koblenz"{{ in_array("Koblenz", $Germany_finance) ? 'selected' : '' }}> Koblenz</option>
                                            <option value="Bergisch Gladbach"{{ in_array("Bergisch Gladbach", $Germany_finance) ? 'selected' : '' }}> Bergisch Gladbach</option>
                                            <option value="Jena"{{ in_array("Jena", $Germany_finance) ? 'selected' : '' }}> Jena</option>
                                            <option value="Remscheid"{{ in_array("Remscheid", $Germany_finance) ? 'selected' : '' }}> Remscheid</option>
                                            <option value="Erlangen"{{ in_array("Erlangen", $Germany_finance) ? 'selected' : '' }}> Erlangen</option>
                                            <option value="Moers"{{ in_array("Moers ", $Germany_finance) ? 'selected' : '' }}> Moers</option>
                                            <option value="Siegen"{{ in_array("Siegen ", $Germany_finance) ? 'selected' : '' }}>Siegen</option>
                                            <option value="Hildesheim"{{ in_array("Hildesheim", $Germany_finance) ? 'selected' : '' }}> Hildesheim</option>
                                            <option value="Salzgitter"{{ in_array("Salzgitter", $Germany_finance) ? 'selected' : '' }}> Salzgitter</option>



                                        </select>
                                        @if ($errors->has('regionaler'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('regionaler') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="exactly" class="form-label">Finanzierte Standorte innerhalb des regionalen Fokus</label>
                                        <input type="text" class="form-control" name="exactly" value="{{$mezzanine['exactly']}}" required>
                                        @if ($errors->has('exactly'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('exactly') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                   
                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Baurechtstatus</label>

                                        <select class="selectpicker form-control" id="what-permits" multiple name="project_developer_permit[]" value="{{$mezzanine['project_developer_permit']}}">
                                            <option value="Vor Bebauungsplan"{{ in_array("Vor Bebauungsplan", $project_developer_permit) ? 'selected' : '' }}>No Development Plan</option>
                                            <option value="Ab Bebauungsplan / § 34 BauGB" {{ in_array("Ab Bebauungsplan / § 34 BauGB", $project_developer_permit) ? 'selected' : '' }}>Development Plan or §34 BauGB</option>
                                            <option value="Ab Bauvorbescheid" {{ in_array("Ab Bauvorbescheid ", $project_developer_permit) ? 'selected' : '' }}>Outline Building Permit</option>
                                            <option value="Ab Baugenehmigung " {{ in_array("Ab Baugenehmigung ", $project_developer_permit) ? 'selected' : '' }}>Building Permit</option>


                                        </select>
                                        @if ($errors->has('baurechtstatus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('baurechtstatus') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Nutzungsarten bei
                                            Projektfinanzierung</label>

                                        <select class="selectpicker form-control" id="what-type" multiple name="usage_financed[]">
                                            <option value="Wohnen"{{ in_array("Wohnen",$usage_financed) ? 'selected' : '' }}>Wohnen</option>
                                            <option value="Büro" {{ in_array("Büro",$usage_financed) ? 'selected' : '' }}>Büro</option>
                                            <option value="Einzelhandel" {{ in_array("Einzelhandel ",$usage_financed) ? 'selected' : '' }}>Einzelhandel</option>
                                            <option value="Logistik" {{ in_array("Logistik",$usage_financed) ? 'selected' : '' }}>Logistik</option>
                                            <option value="Produktion" {{ in_array("Produktion ",$usage_financed) ? 'selected' : '' }}>Produktion</option>
                                            <option value="Betreiberimmobilien" {{ in_array("Betreiberimmobilien",$usage_financed) ? 'selected' : '' }}>Betreiberimmobilien</option>
                                            <option value="Weitere" {{ in_array("Weitere ",$usage_financed) ? 'selected' : '' }}>Weitere</option>
                                        </select>
                                        @if ($errors->has('nutzungsarten'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nutzungsarten') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                    <label for="bank_name" class="form-label">Eigenkapital</label>
                                    <div class="input-group mb-3">

                                    <input type="number" class="form-control" 
                                    name="borrower_have_to_have_himself"
                                    placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$mezzanine['borrower_have_to_have_himself']}}" require>
                                        
                                    @if ($errors->has('Maximales5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Maximales6') }}</strong>
                                    </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="borrower_provide" class="form-label">Sicherheiten</label>
                                        <input type="text" class="form-control" name="borrower_provide" value="{{$mezzanine['borrower_provide']}}" required>
                                        @if ($errors->has('borrower_provide'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('borrower_provide') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <label for="minimum_credit_volume" class="form-label">Minimales Finanzierungsvolumen
                                        Bestandsfinanzierung </label>
                                    <div class="input-group mb-3">

                                        <input type="number" class="form-control" 
                                        name="minimum_credit_volume"
                                        placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$mezzanine['minimum_credit_volume']}}" required>
                                        <span class="input-group-text" id="basic-addon2">(€)</span>
                                        @if ($errors->has('minimum_credit_volume'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('minimum_credit_volume') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <label for="maximum_credit_volume" class="form-label">Maximales Finanzierungsvolumen
                                        Bestandsfinanzierung </label>
                                    <div class="input-group mb-3">

                                        <input type="number" class="form-control" 
                                        name="maximum_credit_volume"
                                        placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$mezzanine['maximum_credit_volume']}}" require>
                                            
                                        <span class="input-group-text" id="basic-addon2">(€)</span>
                                        @if ($errors->has('maximum_credit_volume'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('maximum_credit_volume') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <label for="maximum_credit_duration" class="form-label">Maximales Maximale Darlehenslaufzeit in Monaten </label>
                                    <div class="input-group mb-3">

                                    <input type="number" class="form-control" 
                                    name="maximum_credit_duration"
                                    placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$mezzanine['maximum_credit_duration']}}" require>
                                        
                                    @if ($errors->has('maximum_credit_duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('maximum_credit_duration') }}</strong>
                                    </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="contact_person" class="form-label">Contact Person</label>
                                        <input type="text" class="form-control" name="contact_person" value="{{$mezzanine['contact_person']}}" required>
                                        @if ($errors->has('contact_person'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_person') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="email_address" class="form-label">Email-Adresse für passende
                                            Erstanfragen</label>
                                        <input type="email" class="form-control" name="email" value="{{$mezzanine['email']}}" required>
                                        @if ($errors->has('email_address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email_address') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Telefonnummer für passende
                                            Erstanfragen</label>
                                        <input type="text" class="form-control" name="phone" value="{{$mezzanine['phone']}}" required>
                                        @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                    <label for="track_record" class="form-label">Track-Record</label>
                                    <div class="input-group mb-3">

                                    <input type="number" class="form-control" 
                                    name="track_record"
                                    placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$mezzanine['track_record']}}" require>
                                        
                                    @if ($errors->has('track_record'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('track_record') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary" >Submit</button>
                                </form>
                            </div>

                        </div>




                    </div>
                    <!-- END col-9-->

                </div>
                <!-- END row -->
            </div>
            <!-- END col-10 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END container -->
</div>
<!-- END #content -->
@endsection

<script>
$('#ex-multiselect-limit').picker({
    limit: 2
});
$('#ewhere-in-limit').picker({
    limit: 25
});
</script>
