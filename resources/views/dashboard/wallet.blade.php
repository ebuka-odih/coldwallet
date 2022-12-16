@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">
        <!-- Page Content -->
        <div class="row g-0 flex-md-grow-1">

            <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
                <div class="content">

                    <div class="block block-rounded" data-select2-id="14">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Select2</h3>
                        </div>
                        <div class="block-content block-content-full" data-select2-id="13">
                            <form action="be_forms_plugins.html" method="POST" onsubmit="return false;" data-select2-id="12">
                                <h2 class="content-heading pt-0">Normal Select Box</h2>
                                <div class="row" data-select2-id="11">
                                    <div class="col-lg-4">
                                        <p class="text-muted">
                                            Default select input turns into a searchable and dynamic list
                                        </p>
                                    </div>
                                    <div class="col-lg-8 col-xl-5" data-select2-id="10">
                                        <div class="mb-4" data-select2-id="9">
                                            <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="example-select2" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="2"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                <option value="1" data-select2-id="18">HTML</option>
                                                <option value="2" data-select2-id="19">CSS</option>
                                                <option value="3" data-select2-id="20">JavaScript</option>
                                                <option value="4" data-select2-id="21">PHP</option>
                                                <option value="5" data-select2-id="22">MySQL</option>
                                                <option value="6" data-select2-id="23">Ruby</option>
                                                <option value="7" data-select2-id="24">Angular</option>
                                                <option value="8" data-select2-id="25">React</option>
                                                <option value="9" data-select2-id="26">Vue.js</option>
                                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-example-select2-container"><span class="select2-selection__rendered" id="select2-example-select2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one..</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="content-heading">Multiple Select Box</h2>
                                <div class="row" data-select2-id="32">
                                    <div class="col-lg-4">
                                        <p class="text-muted">
                                            Default multiple select input turns into a tags input
                                        </p>
                                    </div>
                                    <div class="col-lg-8 col-xl-5" data-select2-id="31">
                                        <div class="mb-4" data-select2-id="30">
                                            <select class="js-select2 form-select js-select2-enabled select2-hidden-accessible" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple="" data-select2-id="example-select2-multiple" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="33"></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                <option value="1" selected="" data-select2-id="4">HTML</option>
                                                <option value="2" selected="" data-select2-id="5">CSS</option>
                                                <option value="3" data-select2-id="34">JavaScript</option>
                                                <option value="4" data-select2-id="35">PHP</option>
                                                <option value="5" data-select2-id="36">MySQL</option>
                                                <option value="6" data-select2-id="37">Ruby</option>
                                                <option value="7" data-select2-id="38">Angular</option>
                                                <option value="8" data-select2-id="39">React</option>
                                                <option value="9" data-select2-id="40">Vue.js</option>
                                            </select><span class="select2 select2-container select2-container--default select2-container--above" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="HTML" data-select2-id="56"><span class="select2-selection__choice__remove" role="presentation">×</span>HTML</li><li class="select2-selection__choice" title="CSS" data-select2-id="57"><span class="select2-selection__choice__remove" role="presentation">×</span>CSS</li><li class="select2-selection__choice" title="JavaScript" data-select2-id="58"><span class="select2-selection__choice__remove" role="presentation">×</span>JavaScript</li><li class="select2-selection__choice" title="PHP" data-select2-id="59"><span class="select2-selection__choice__remove" role="presentation">×</span>PHP</li><li class="select2-selection__choice" title="MySQL" data-select2-id="60"><span class="select2-selection__choice__remove" role="presentation">×</span>MySQL</li><li class="select2-selection__choice" title="Ruby" data-select2-id="61"><span class="select2-selection__choice__remove" role="presentation">×</span>Ruby</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>

@endsection
