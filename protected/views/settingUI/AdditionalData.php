<?php
//$code = new Encryption;
$clienttype_link = "settings/clientType";
//$settings_encrypt = $code->encode($settings_link);
?>
<?php
//$code = new Encryption;
$settings_link = "settings/panel";
//$settings_encrypt = $code->encode($settings_link);
?>
<div class="search-header">
    <div class="card card-transparent no-m">
        <div class="card-content no-s">
            <div class="z-depth-1 search-tabs">
                <div class="search-tabs-container">
                    <div class="col s12 m12 l12">
                        <div class="row search-tabs-row search-tabs-header">
                            <div class="col s12 m12 l10 left">
                                <h5 class="" style="font-size: 16px">
                                    <div class="breadcrumbs">
                                        <span>New Customers >> Mwesigye John Bosco</span>
                                    </div>
                                </h5>
                            </div>
                        </div>
                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m3">                                
                                <h5>758654586544758</h5>
                            </div>
                            <div class="col s12 m8">                                
                                <h5><span style="font-family: monospace">Mwesigye John Bosco John Bosco John Bosco</span></h5>
                            </div>
                            <!--                            <div class="col s12 m1 right-align search-stats">                                
                                                            <a href="#prospectlist" class="modal-trigger"><span class="m-r-sm">MergeToProspect</span></a>
                                                        </div>-->
                        </div>

                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-transparent no-m">
    <div class="card-content invoice-relative-content search-results-container">
        <div class="col s12 m12 l12">
            <div class="search-page-results">
                <!--vertical tabs starts-->
                <div class="row">  
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-content">
                                <div class="center-align search-image-results">
                                    <img src="assets/images/profile-image-1.png" class="responsive-img circle center"  alt="" style="width: 60%">
                                    <br>
                                    <div>
                                        <a href="#profileimg" class="modal-trigger btn-flat">Add Image</a>
                                        <a href="#" class="btn-flat">Mobile</a>
                                    </div>
                                </div>
                                <br/>
                                <div>
                                    <span  style="font-size: 13px">Customer Type</span>:<span class="right">Minor</span><br/>
                                    <span  style="font-size: 13px">Date Opened</span>:<span class="right">Jan-04-2016</span><br/>
                                    <span  style="font-size: 13px">Branch</span>:<span class="right">Kamuli</span><br/>
                                    <span  style="font-size: 13px">Status</span>:<span class="right">Supervised</span><br/>
                                </div>
                                <br/>
                            </div>
                        </div>
                        <!--client static data ends-->
                        <div class="card z-depth-0">
                            <div class="card-content">
                                <div class="tabs-vertical">
                                    <ul class="tabs transparent z-depth-0">                                      
                                        <li class="tab">
                                            <a href="#additional">Additional Data</a> 
                                        </li>
                                        <li class="tab">
                                            <a href="#doc">Documents</a> 
                                        </li>
                                        <li class="tab">
                                            <a href="#sanction">Risk Assessment</a> 
                                        </li>
                                    </ul>
                                </div>  
                            </div>  
                        </div>  
                    </div>   
                    <!--vertical tabs ends-->
                    <div class="col s12 m9">
                        <!--Start of external data tab-->
                        <div class="row s12">
                            <div id="additional" class="tab-content">
                                <div class="row">
                                        <div class="card grey lighten-4">
                                            <div class="card-content">
                                                <h5 class="grey-text">Additional Data</h5>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input placeholder="" id="mask1" class="masked" type="text" data-inputmask="'alias': 'date'">
                                                        <label for="mask1" class="active">Unstructured</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <div class="row">
                                                            <div class="col s6">
                                                                <p class="p-v-xs">
                                                                    <input name="group1" type="radio" id="test1" />
                                                                    <label for="test1">Single</label>
                                                                </p>
                                                                <p class="p-v-xs">
                                                                    <input name="group1" type="radio" id="test2" />
                                                                    <label for="test2">Married</label>
                                                                </p>
                                                                <p class="p-v-xs">
                                                                    <input class="with-gap" name="group1" type="radio" id="test3"  />
                                                                    <label for="test3">Divorced</label>
                                                                </p>                                                        
                                                            </div>
                                                            <div class="col s6">
                                                                <div class="input-field col s12">
                                                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                                                    <label for="textarea1">Description</label>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <label for="mask2" class="active">Structured Singular</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <div class="input-field col s6">                                                    
                                                            <input type="checkbox" id="salary" />
                                                            <label for="salary">Salary</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input id="salary1" type="text">
                                                            <label for="salary1">Description</label>
                                                        </div>
                                                        <div class="input-field col s6">                                                    
                                                            <input type="checkbox" id="sales" />
                                                            <label for="sales">Sales</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input id="sales1" type="text">
                                                            <label for="sales1">Description</label>
                                                        </div>
                                                        <label for="mask3" class="active">Structured multiple</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="right-align">
                                    <a type="#" class="waves-effect waves-grey btn-flat sweetalert-basic"><i class="close material-icons large">delete</i></a>
                                    <a href="#" class="waves-effect waves-blue btn blue">Submit</a> 
                                </div>
                                <!--added-->
                        </div>
                    </div>
                </div>
