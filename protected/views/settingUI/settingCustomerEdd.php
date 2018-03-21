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
                                        <span>Settings>>Enhanced Due Diligence</span>
                                    </div>
                                </h5>
                            </div>
                        </div>
                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m6 20">
                                <div class="indicator" style="right: 420px; left: 0px;">
                                    <ul class="tabs tabs-demo z-depth-0" style="width: 100%;">
                                        <li class="tab col s3"><a href="#drafts" class="active">Drafts<span>&nbsp;&nbsp;&nbsp;(3)</span></a></li>
                                        <li class="tab col s3"><a href="#inbox">Inbox<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                        <li class="tab col s3"><a href="#approved">Approved<span>&nbsp;&nbsp;&nbsp;(3)</span></a> </li>
                                    </ul>
                                </div>
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
                <div id="drafts">
                    <div class="fixed-action-btn" style="bottom: 15px; right: 24px;">
                        <a href="#create_info" class="btn-floating btn-large darken-1waves-effectwaves-effect modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Create Information Requirement">
                            <i class="large material-icons">mode_edit</i>
                        </a>
                    </div>
                    <!--edit information requirement-->
                    <div id="create_info" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <div class="modal-content">
                                <h5>Create Information Requirement</h5>
                                <div class="row s12">
                                    <div class="col s12 m6">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="input-field">
                                                    <span>Name</span>
                                                    <textarea id="desc" class="materialize-textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="input-field">
                                                    <span>Description</span>
                                                    <textarea id="desc" class="materialize-textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="margin-left: 10px; margin-right: 10px">
                                    <div class="card-content">
                                        <div class="row s12" >
                                            <span>Select Risk</span><br/>
                                            <input type="checkbox" id="np">
                                            <label for="np">Natural Persons and Resident outside Uganda</label><br>
                                            <input type="checkbox" id="ri">
                                            <label for="ri">Resident Inside Uganda</label><br>
                                            <input type="checkbox" id="ip">
                                            <label for="ip">International PEP</label><br>
                                            <input type="checkbox" id="npt">
                                            <label for="npt">Natural Persons that are Resident outside Uganda</label><br>
                                            <input type="checkbox" id="npa">
                                            <label for="npa">Natural Persons that are Resident outside East Africa</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="modal-close btn waves-effect waves-blue blue">Save</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
                            </div>
                        </form>
                    </div>
                    <div id="edit_riskinf" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <div class="modal-content">
                                <h5>Create Information Requirement</h5>
                                <div class="row s12">
                                    <div class="col s12 m12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="input-field">
                                                    <span>Name</span>
                                                    <input  type="text" class="validate" required name="name" placeholder="Nationality">
                                                </div>
                                                <div class="input-field">
                                                    <span>Description</span>
                                                    <input  type="text" class="validate" required name="name" placeholder="Actual country where someone is born">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="margin-left: 10px; margin-right: 10px">
                                    <div class="card-content">
                                        <div class="row s12" >
                                            <span>Select Risk</span><br/>
                                            <input type="checkbox" id="np" checked="checked">
                                            <label for="np">Natural Persons and Resident outside Uganda</label><br>
                                            <input type="checkbox" id="ri" checked="checked">
                                            <label for="ri">Resident Inside Uganda</label><br>
                                            <input type="checkbox" id="ip">
                                            <label for="ip">International PEP</label><br>
                                            <input type="checkbox" id="npt" checked="checked">
                                            <label for="npt">Natural Persons that are Resident outside Uganda</label><br>
                                            <input type="checkbox" id="npa">
                                            <label for="npa">Natural Persons that are Resident outside East Africa</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="modal-close btn waves-effect waves-blue blue">Update</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
                            </div>
                        </form>
                    </div>
                    <!--edit information requirement-->
                    <div id="add_risk" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <div class="modal-content">
                                <h5>Select Risk</h5><br/>
                                <div class="card" style="margin-left: 10px; margin-right: 10px">
                                    <div class="card-content">
                                        <div class="row s12" >
                                            <input type="checkbox" id="np1">
                                            <label for="np1">Natural Persons and Resident outside Uganda</label><br>
                                            <input type="checkbox" id="ri1">
                                            <label for="ri1">Resident Inside Uganda</label><br>
                                            <input type="checkbox" id="ip1">
                                            <label for="ip1">International PEP</label><br>
                                            <input type="checkbox" id="npt1">
                                            <label for="npt1">Natural Persons that are Resident outside Uganda</label><br>
                                            <input type="checkbox" id="npa1">
                                            <label for="npa1">Natural Persons that are Resident outside East Africa</label><br>
                                            <input type="checkbox" id="npa11">
                                            <label for="npa11">Legal Persons that are Resident outside Uganda</label><br>
                                            <input type="checkbox" id="npa2">
                                            <label for="npa2">Legal Persons that are Resident outside East Africa</label><br>
                                            <input type="checkbox" id="npa3">
                                            <label for="npa3">Legal Persons that are Resident outside Africa</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="modal-close btn waves-effect waves-blue blue">Save</button>
                                <!--<button type="" class="modal-close btn-flat waves-effect waves-blue"><i class="material-icons">delete</i></button>-->
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col s12 m3">
                            <div class="card z-depth-0 transparent">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Information Requirements</span><br><br>
                                    <div class="tabs-vertical">
                                        <ul class="tabs z-depth-0 transparent">
                                            <li class="tab">
                                                <a class="active" href="#na" style="font-weight: normal;">Nationality(All)<span class="right">&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                            </li>
                                            <li class="tab">
                                                <a href="#ena" style="font-weight: normal;">Identification(Edd)<span class="right">&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m9"> 
                            <div id="na" class="card grey lighten-4">                            
                                <div class="card-content">
                                    <div class="row s12 search-stats">
                                        <span class="m-r-sm left-align">Nationality</span><span class="m-r-sm right-align">The actual country of birth of the client considering the place of birth</span><a href="#add_risk" class="modal-trigger"><i class="material-icons tiny tooltipped" data-position="top" data-delay="50" data-tooltip="Add Possible Risks">add</i></a>
                                        <a href="#edit_riskinf" class="modal-trigger"><i class="material-icons tiny tooltipped" data-position="top" data-delay="50" data-tooltip="Edit Risk">edit</i></a>
                                    </div>
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank</span><span class="right tooltipped" data-position="top" data-delay="50" data-tooltip="International Politically Exposed Person" style="font-size: 14px;">PEPIN</span><br/>
                                                    <a href="#accopendocs" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Document Types</span></a><span class="right">(2)</span><br/>
                                                    <a href="#question" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Questionnaire</span></a><span class="right">(2)</span><br/>
                                                    <a href="#externaldata" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="View"><span>External System Data</a><span class="right">(2)</span></span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Minor</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Individual</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank1</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Cooporate</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Employee</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                    <div class="right-align">
                                        <a type="#" class="waves-effect waves-grey btn-flat sweetalert-basic"><i class="close material-icons large">delete</i></a>
                                        <a href="#" class="waves-effect waves-blue btn blue">Submit</a> 
                                    </div>
                                </div> 
                            </div>
                            <div id="ena" class="card grey lighten-4">                            
                                <div class="card-content">
                                    <!--<span class="card-title">Nationality</span>-->
                                    <div class="row s12 search-stats">
                                        <span class="m-r-sm left-align">Identification</span><span class="m-r-sm right-align">List any previously revoked or abandoned forms of identification</span><a href="#edit_riskinf" class="modal-trigger"><i class="material-icons tiny tooltipped" data-position="top" data-delay="50" data-tooltip="Edit Information">edit</i></a>
                                        <a href="#add_risk" class="modal-trigger"><i class="material-icons tiny tooltipped" data-position="top" data-delay="50" data-tooltip="Add Possible Risks">add</i></a>
                                    </div>
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank</span><span class="right tooltipped" data-position="top" data-delay="50" data-tooltip="International Politically Exposed Person" style="font-size: 14px;">PEPIN</span><br/>
                                                    <a href="#accopendocs" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Document Types</span></a><span class="right">(2)</span><br/>
                                                    <a href="#question" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Questionnaire</span></a><span class="right">(2)</span><br/>
                                                    <a href="#externaldata" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="View"><span>External System Data</a><span class="right">(2)</span></span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Minor</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Individual</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                    <div class="right-align">
                                        <a type="#" class="waves-effect waves-grey btn-flat sweetalert-basic"><i class="close material-icons large">delete</i></a>
                                        <a href="#" class="waves-effect waves-blue btn blue">Submit</a> 
                                    </div>
                                </div> 
                            </div>
                        </div>
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
        </div>
    </div>
