@extends('layout.default')

@section('title', 'Create new senior financing')

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
                                    Create new Mezzanine Financing
                                </h1>
                            </div>

                            <div class="p-2 bd-highlight">
                                <a class="btn btn-primary" href="{{url('/banks/senior_financing')}}" role="button"><i
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
                            <form class="cmxform" id="signupFormnew"  method="POST" action="{{ route('MezzCreate') }}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name des Kreditinstituts</label>
                        
                                        
                                        <input type="text" class="form-control" name="name"  required>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                     @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="website" class="form-label">Website des
                                            Kreditinstituts</label>
                                        <input type="url" class="form-control" name="website"  required>
                                                  @if ($errors->has('website'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Wohnort des
                                            Darlehensnehmers</label>
                                            
                                        <select class="selectpicker form-control" name="borrower_domiciled[]" id="ex-search" multiple required>
                                        @foreach ($countries as $country)
                                        @if($country == "Germany")
                                            <option value="{{$country}}" selected>{{$country}}</option>
                                        @elseif($country == "Deutschland")
                                            <option value="{{$country}}" selected>{{$country}}</option>
                                        @else
                                            <option value="{{$country}}">{{$country}}</option>
                                        @endif
                                        @endforeach
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

                                        <select class="selectpicker form-control" id="where-germany" multiple  name="Germany_finance[]" required>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Bundesweit">Bundesweit</option>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich (München)">Munich (München)</option>
                                            <option value="Cologne (Köln)">Cologne (Köln)</option>
                                            <option value="Frankfurt am Main">Frankfurt am Main</option>
                                            <option value="Stuttgart">Stuttgart</option>
                                            <option value="Düsseldorf">Düsseldorf</option>
                                            <option value="Dortmundf">Dortmund</option>
                                            <option value="Essen">Essen</option>
                                            <option value="Leipzig">Leipzig</option>
                                            <option value="Bremen">Bremen</option>
                                            <option value="Dresden">Dresden</option>
                                            <option value="Hanover (Hannover)">Hanover (Hannover)</option>
                                            <option value="Nuremberg (Nürnberg)"> Nuremberg (Nürnberg)</option>
                                            <option value="Duisburg">Duisburg</option>
                                            <option value="Bochum">Bochum</option>
                                            <option value="Wuppertal">Wuppertal</option>
                                            <option value="Bielefeld">Bielefeld</option>
                                            <option value="Münster">Münster</option>
                                            <option value="Karlsruhe">Karlsruhe</option>
                                            <option value="Mannheim">Mannheim</option>
                                            <option value="Augsburg">Augsburg</option>
                                            <option value="Wiesbaden">Wiesbaden</option>
                                            <option value="Gelsenkirchen">Gelsenkirchen</option>
                                            <option value="Mönchengladbach">Mönchengladbach</option>
                                            <option value="Braunschweig">Braunschweig</option>
                                            <option value="Chemnitz">Chemnitz</option>
                                            <option value="Kiel">Kiel</option>
                                            <option value="Aachen">Aachen</option>
                                            <option value="AHalle (Saale)">Halle (Saale)</option>
                                            <option value="Magdeburg">Magdeburg</option>
                                            <option value="Freiburg im Breisgau"> Freiburg im Breisgau</option>
                                            <option value="Krefeld"> Krefeld</option>
                                            <option value="Lübeck"> Lübeck</option>
                                            <option value="Oberhausen"> Oberhausen</option>
                                            <option value="Erfurt"> Erfurt</option>
                                            <option value="Mainz"> Mainz</option>
                                            <option value="Rostock"> Rostock</option>
                                            <option value="Kassel"> Kassel</option>
                                            <option value="Hagen"> Hagen</option>
                                            <option value="Hamm"> Hamm</option>
                                            <option value="Saarbrücken"> Saarbrücken</option>
                                            <option value="Mülheim an der Ruhr"> Mülheim an der Ruhr</option>
                                            <option value="Potsdam"> Potsdam</option>
                                            <option value="Ludwigshafen am Rhein"> Ludwigshafen am Rhein</option>
                                            <option value="Oldenburg"> Oldenburg</option>
                                            <option value="Leverkusen"> Leverkusen</option>
                                            <option value="Osnabrück"> Osnabrück</option>
                                            <option value="Solingen"> Solingen</option>
                                            <option value="Heidelberg"> Heidelberg</option>
                                            <option value="Herne"> Herne</option>
                                            <option value="Neuss"> Neuss</option>
                                            <option value="Darmstadt"> Darmstadt</option>
                                            <option value="Paderborn"> Paderborn</option>
                                            <option value="Regensburg"> Regensburg</option>
                                            <option value="Ingolstadt"> Ingolstadt</option>
                                            <option value="Würzburg"> Würzburg</option>
                                            <option value="Fürth"> Fürth</option>
                                            <option value="Wolfsburg"> Wolfsburg</option>
                                            <option value="Offenbach am Main"> Offenbach am Main</option>
                                            <option value="Ulm"> Ulm</option>
                                            <option value="Heilbronn"> Heilbronn</option>
                                            <option value="Pforzheim"> Pforzheim</option>
                                            <option value="Göttingen"> Göttingen</option>
                                            <option value="Bottrop"> Bottrop</option>
                                            <option value="Trier"> Trier</option>
                                            <option value="Recklinghausen"> Recklinghausen</option>
                                            <option value="Reutlingen"> Reutlingen</option>
                                            <option value="Bremerhaven"> Bremerhaven</option>
                                            <option value="Koblenz"> Koblenz</option>
                                            <option value="Bergisch Gladbach"> Bergisch Gladbach</option>
                                            <option value="Jena"> Jena</option>
                                            <option value="Remscheid"> Remscheid</option>
                                            <option value="Erlangen"> Erlangen</option>
                                            <option value="Moers"> Moers</option>
                                            <option value="Siegen">Siegen</option>
                                            <option value="Hildesheim"> Hildesheim</option>
                                            <option value="Salzgitter"> Salzgitter</option>
                                        </select>
                                        @if ($errors->has('regionaler'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('regionaler') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="exactly" class="form-label">Finanzierte Standorte innerhalb des regionalen Fokus</label>
                                        <input type="text" class="form-control" name="exactly"  required>
                                        @if ($errors->has('exactly'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('exactly') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Baurechtstatus</label>

                                        <select class="selectpicker form-control" id="what-permits" multiple name="project_developer_permit[]"  required>

                                        <option value="Vor Bebauungsplan">No Development Plan</option>
                                        <option value="Ab Bebauungsplan / § 34 BauGB">Development Plan or §34 BauGB</option>
                                        <option value="Ab Bauvorbescheid">Outline Building Permit</option>
                                        <option value="Ab Baugenehmigung ">Building Permit</option>


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

                                        <select class="selectpicker form-control" id="what-type" multiple name="usage_financed[]"  required>
                                        <option value="Wohnen">Wohnen</option>
                                            <option value="Büro">Büro</option>
                                            <option value="Einzelhandel">Einzelhandel</option>
                                            <option value="Logistik">Logistik</option>
                                            <option value="Produktion">Produktion</option>
                                            <option value="Betreiberimmobilien">Betreiberimmobilien</option>
                                            <option value="Weitere">Weitere</option>
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
                                        aria-label="Recipient's username" aria-describedby="basic-addon2"  required>
                                        
                                    @if ($errors->has('Maximales5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Maximales6') }}</strong>
                                    </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="borrower_provide" class="form-label">Sicherheiten</label>
                                        <input type="text" class="form-control" name="borrower_provide" required>
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
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"  required>
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
                                            aria-label="Recipient's username" aria-describedby="basic-addon2"  required>
                                            
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
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                        
                                    @if ($errors->has('maximum_credit_duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('maximum_credit_duration') }}</strong>
                                    </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="contact_person" class="form-label">Contact Person</label>
                                        <input type="text" class="form-control" name="contact_person"  required>
                                        @if ($errors->has('contact_person'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_person') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="email_address" class="form-label">Email-Adresse für passende
                                            Erstanfragen</label>
                                        <input type="email" class="form-control" name="email" required>
                                        @if ($errors->has('email_address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email_address') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Telefonnummer für passende
                                            Erstanfragen</label>
                                        <input type="text" class="form-control" name="phone"  required>
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
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                        
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