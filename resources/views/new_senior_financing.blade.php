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
                                    Create new senior financing
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
                                <form class="cmxform" id="signupFormnew"  method="POST" action="{{ route('senior') }}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name des Kreditinstituts</label>
                                        <input type="text" class="form-control" name="name_of_bank" >
                                        @if ($errors->has('name_of_bank'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name_of_bank') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="website" class="form-label">Website des
                                            Kreditinstituts</label>
                                        <input type="url" class="form-control" name="website">
                                        @if ($errors->has('website'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('website') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="type_of_finance" class="form-label">Darlehensnehmer</label>
                                        <select class="selectpicker form-control" id="ex-multiselect" multiple value="{{ old('borrowersfinance') }}" name="borrowers_finance[]">
                                            <optgroup>
                                                <option value="Natürliche Personen" >Natürliche Personen</option>
                                                <option value="Juristische Personen">Juristische Personen</option>

                                            </optgroup>

                                        </select>
                                        @if ($errors->has('borrowersfinance'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('borrowersfinance') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Wohnort des
                                            Darlehensnehmers</label>

                                        <select class="selectpicker form-control" name="borrower_domiciled[]" id="ex-search" multiple>
                                                            <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                        @if($country == "Germany")
                                            <option value="{{$country}}" selected>{{$country}}</option>
                                        @elseif($country == "Deutschland")
                                            <option value="{{$country}}" selected>{{$country}}</option>
                                        @else
                                            <option value="{{$country}}">{{$country}}</option>
                                        @endif
                                        @endforeach
                                            <!-- <option value="Deutschland">Deutschland</option>
                                            <option value="Europäische Union">Europäische Union</option>
                                            <option value="außer">außer</option> -->

                                        </select>
                                        @if ($errors->has('borrower_domiciled'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('borrower_domiciled') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="where_in_germany" class="form-label">Regionaler Fokus Ihres
                                            Kreditinstituts</label>

                                        <select class="selectpicker form-control" id="where-germany" multiple  name="Germany_finance[]">
                                            <option value="Berlin">Berlin</option>
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
                                        @if ($errors->has('Germany_finance'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Germany_finance') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="where_exactly" class="form-label">Finanzierte Standorte innerhalb
                                            des regionalen Fokus</label>

                                        <input type="text" class="form-control" name="exactly" >
                                        @if ($errors->has('exactly'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('exactly') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Baurechtstatus</label>

                                        <select class="selectpicker form-control" id="what-permits" multiple name="project_developer_permit[]">

                                            <option value="Vor Bebauungsplan">No Development Plan</option>
                                            <option value="Ab Bebauungsplan / § 34 BauGB">Development Plan or §34 BauGB</option>
                                            <option value="Ab Bauvorbescheid">Outline Building Permit</option>
                                            <option value="Ab Baugenehmigung ">Building Permit</option>

                                        </select>
                                        @if ($errors->has('project_developer_permit'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('project_developer_permit') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Nutzungsarten bei
                                            Projektfinanzierung</label>

                                        <select class="selectpicker form-control" id="what-type" multiple name="usage_financed[]">
                                            <option value="Wohnen">Wohnen</option>
                                            <option value="Büro">Büro</option>
                                            <option value="Einzelhandel">Einzelhandel</option>
                                            <option value="Logistik">Logistik</option>
                                            <option value="Produktion">Produktion</option>
                                            <option value="Betreiberimmobilien">Betreiberimmobilien</option>
                                            <option value="Weitere">Weitere</option>
                                        </select>
                                        @if ($errors->has('usage_financed'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('usage_financed') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Projektfinanzierung <small> [Wohnen (recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="recourse" >
                                        @if ($errors->has('Maximaler'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Projektfinanzierung <small>[Wohnen (non-recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="non_recourse"  >
                                        @if ($errors->has('Maximaler1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler1') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Projektfinanzierung <small>[Gewerbe (recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="commercial_recourse" >
                                        @if ($errors->has('Maximaler2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler2') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Projektfinanzierung <small>[Gewerbe (non-recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="commercial_non_recourse" >
                                        @if ($errors->has('Maximaler2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler2') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Projektfinanzierung <small>[Gewerbe (non-recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="project_finance" >
                                        @if ($errors->has('Maximaler3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler3') }}</strong>
                                        </span>
                                    @endif

                                    </div> --}}
                                    <label for="bank_name" class="form-label">Minimales Finanzierungsvolumen
                                        Projektfinanzierung </label>
                                    <div class="input-group mb-3">

                                        <input type="number" class="form-control"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2" 
                                            name="small_credit" >
                                        <span class="input-group-text" id="basic-addon2">(€)</span>
                                        @if ($errors->has('Minimales1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Minimales1') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <label for="bank_name" class="form-label">Maximales Finanzierungsvolumen
                                        Projektfinanzierung</label>
                                    <div class="input-group mb-3">

                                        <input type="number" class="form-control"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2" name="largest_credit" >
                                        <span class="input-group-text" id="basic-addon2">(€)</span>
                                        @if ($errors->has('Maximales'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximales') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="whwre_borrower_have" class="form-label">Nutzungsarten bei
                                            Bestandsfinanzierung</label>

                                        <select class="selectpicker form-control" id="usage-types" multiple name="usage_types_for_existing_properties[]">
                                            <option value="Gleich wie Projektfinanzierung">Gleich wie
                                                "Projektfinanzierung"</option>
                                            <option value="Büro">Büro</option>
                                            <option value="Einzelhandel">Einzelhandel</option>
                                            <option value="Logistik">Logistik</option>
                                            <option value="Produktion">Produktion</option>
                                            <option value="Wohnen">Wohnen</option>



                                        </select>
                                        @if ($errors->has('nutzungsarten'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nutzungsarten') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Bestandsfinanzierung <small> [Wohnen (recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="maximum_share_recourse" >
                                        @if ($errors->has('beleihungsgrad'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('beleihungsgrad') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Bestandsfinanzierung <small> [Wohnen (non-recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="maximum_share_non_recourse" >
                                        @if ($errors->has('beleihungsgrad'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('beleihungsgrad') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    {{-- <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Bestandsfinanzierung <small> [Gewerbe (recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="existing_credit" >
                                        @if ($errors->has('Maximaler3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler3') }}</strong>
                                        </span>
                                    @endif

                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Bestandsfinanzierung <small> [Gewerbe (non-recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="maximum_share_commercial_non_recourse" >
                                        @if ($errors->has('Maximaler3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler3') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Maximaler Beleihungsgrad
                                            Bestandsfinanzierung <small> [Gewerbe (recourse)] (In %)</small></label>
                                        <input type="number" class="form-control" name="maximum_share_commercial_recourse" >
                                        @if ($errors->has('Maximaler4'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximaler4') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <label for="bank_name" class="form-label">Minimales Finanzierungsvolumen Bestandsfinanzierung (€)</label>
                                    <div class="input-group mb-3">

                                        <input type="number" class="form-control" 
                                        name="minimum_credit" aria-describedby="basic-addon2" >
                                        <span class="input-group-text" id="basic-addon2">(€)</span>
                                        @if ($errors->has('Maximales5'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximales6') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <label for="bank_name" class="form-label">Maximales Finanzierungsvolumen Bestandsfinanzierung (€)</label>
                                    <div class="input-group mb-3">

                                        <input type="number" class="form-control" 
                                        name="maximum_credit" aria-describedby="basic-addon2" >
                                        <span class="input-group-text" id="basic-addon2">(€)</span>
                                        @if ($errors->has('Maximales5'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Maximales6') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Neubau für den Bestand <small>(Wohnen) (In %)</small></label>
                                        <input type="number" class="form-control" name="recourse_hold" >
                                        @if ($errors->has('beleihungsgrad'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('beleihungsgrad') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="bank_name" class="form-label">Neubau für den Bestand <small>(Gewerbe) (In %)</small></label>
                                        <input type="number" class="form-control" name="commercial_recourse_hold" >
                                        @if ($errors->has('beleihungsgrad'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('beleihungsgrad') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    <div class="mb-3">
                                        <label for="contact_person" class="form-label">Contact Person</label>
                                        <input type="text" class="form-control" name="contact_person" >
                                        @if ($errors->has('contact_person'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_person') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="email_address" class="form-label">Email-Adresse für passende
                                            Erstanfragen</label>
                                        <input type="email" class="form-control" name="email" >
                                        @if ($errors->has('email_address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('"email_address') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Telefonnummer für passende
                                            Erstanfragen</label>
                                        <input type="number" class="form-control" name="phone" >
                                        @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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