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
                                        <span>Setting>>Customer Category</span>
                                    </div>
                                </h5>
                            </div>
                        </div>
                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m6 16">                                
                                <ul class="tabs">
                                    <li class="tab col s3"><a href="#draft">Draft<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                    <li class="tab col s3"><a href="#inbox">Inbox<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                    <li class="tab col s3"><a href="#approved">Approved<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                </ul>
                            </div>
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
                <div id="draft">
                    <!--First row-->
                    <div class="row s12">
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span  style="font-size: 16px;">Bank</span> 
                                    <span class="right new badge grey" data-badge-caption="" style="font-size: 16px;">Legal Person</span><br>
                                    <div>
                                        <input type="radio" name="wt" id="onm">
                                        <label for="onm">Natural Person</label><br>
                                        <input type="radio" name="wt" id="twm" checked="checked">
                                        <label for="twm">Legal Person</label><br>
                                        <input type="radio" name="wt" id="threm" >
                                        <label for="threm">Others</label>
                                    </div>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span  style="font-size: 16px;">Minor</span><span class="secondary-search-text right" style="font-size: 16px;"><i class="material-icons material-tooltip">edit</i></span><br><br>
                                    <div>
                                        <input type="radio" name="wt" id="onm" />
                                        <label for="onm">Natural</label>
                                        <input type="radio" name="wt" id="twm" />
                                        <label for="twm">Legal</label>
                                        <input type="radio" name="wt" id="threm" />
                                        <label for="threm">Others</label>
                                    </div>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span style="font-size: 16px;">Cooporate</span><a href="#editcategory" class="right modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Click to Edit"><i class="material-icons tiny">edit</i></a><a href="#addcategory"class="right modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Click to Choose category"><i class="material-icons tiny">add</i></a><br/>
                                    <span class="" style="font-size: 14px;">Legal Category</span><br>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span  style="font-size: 16px;">Company</span><br><br>
                                    <label>Category Select</label>
                                    <select class="browser-default">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Natural Person</option>
                                        <option value="2">Legal Person</option>
                                        <option value="3">Others</option>
                                    </select><br>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second row-->
                    <div class="row s12">
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span  style="font-size: 16px;">Group</span><a href="#addcategory" class="modal-trigger tooltipped right" data-position="top" data-delay="50" data-tooltip="Click to Choose category">
                                        <span><i class="material-icons tiny">add</i></span></a><br/>  
                                    <span class="" style="font-size: 14px;">Legal Category</span><br>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span  style="font-size: 16px;">Individual</span><span class="secondary-search-text right" style="font-size: 16px;"><i class="material-icons material-tooltip">edit</i></span><br/>
                                    <div>
                                        <input type="radio" name="wt" id="oni" />
                                        <label for="oni">Natural</label><br>
                                        <input type="radio" name="wt" id="twi" />
                                        <label for="twi">Legal</label><br>
                                        <input type="radio" name="wt" id="threi" />
                                        <label for="threi">Others</label>
                                    </div>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span style="font-size: 16px;">Government</span><a href="#editcategory" class="right modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Click to Edit"><i class="material-icons tiny">edit</i></a><a href="#addcategory"class="right modal-trigger tooltipped" data-position="top" data-delay="50" data-tooltip="Click to Choose category"><i class="material-icons tiny">add</i></a><br/>
                                    <span class="" style="font-size: 14px;">Legal Category</span><br>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m3">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span  style="font-size: 16px;">Student</span><br/>
                                    <a href="#" class="waves-effect waves-blue btn-flat right">Submit</a>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Second row-->
                    <div id="addcategory" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px; width: 300px;" >
                        <form action="" method="POST">
                            <div class="modal-content">
                                <span>Select Customer Category</span>
                                <div class="card">
                                    <div class="card-content">
                                        <div>
                                            <input type="radio" name="wt" id="one" />
                                            <label for="one">Natural</label><br>
                                            <input type="radio" name="wt" id="two" />
                                            <label for="two">Legal</label><br>
                                            <input type="radio" name="wt" id="three" />
                                            <label for="three">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="modal-footer">
                                    <button type="submit" class="waves-effect waves-light btn cyan darken-1">Save</button>
                                    <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                                </div>  
                            </div>
                        </form>
                    </div>
                    <div id="editcategory" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px; width: 300px;" >
                        <!--<div class="modal-content">-->
                        <form action="" method="POST">
                            <div class="modal-content">
                                <span>Edit Customer Category</span>
                                <div class="card">
                                    <div class="card-content">
                                        <div>
                                            <input type="radio" name="wtt" id="onee" />
                                            <label for="onee">Natural</label><br>
                                            <input type="radio" name="wtt" id="twoe" checked="true"/>
                                            <label for="twoe">Legal</label><br>
                                            <input type="radio" name="wtte" id="threee" />
                                            <label for="three">Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="modal-footer">
                                    <button type="submit" class="waves-effect waves-light btn cyan darken-1">Update</button>
                                    <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                                </div>  
                            </div>
                        </form>
                    </div>

                </div>
                <div id="inbox">
                    <div class="card">
                        <div class="card-content">
                            Inbox here
                        </div>
                    </div>
                </div>
                <div id="approved">
                    <div class="card">
                        <div class="card-content">
                            Approved
                        </div>
                    </div>
                </div>
            </div>