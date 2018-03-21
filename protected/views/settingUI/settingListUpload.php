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
                                        <span>Setting>>Lists Update</span>
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
                    <div class="row s12">
                          <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Sanctions Lists</span><a href="#add_sanction" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Bank List"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">EU</label><a style="color: grey;" class="right" >DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">OFAC</label><a style="color: blue;" class="right">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BOU</label><a style="color: grey;" class="right">DeActivate</a></div>
                                </div>
                            </div>
                        </div>
                           <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Conkevlists</span><a href="#add_Conkevlist" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Bank List"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">PEP</label><a style="color: grey;" class="right" >DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">Sanctions</label><a  style="color: blue;" class="right">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Adverse Media</label><a style="color: grey;" class="right">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Financial Crime</label><a  style="color: grey;" class="right">DeActivate</a></div>
                                </div>
                            </div>
                        </div>
                           <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Bank Lists</span><a href="#add_BankList" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Bank List"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Auditor's List</label><a style="color: grey;" class="right">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">Internal Loan List</label><a style="color: blue;" class="right">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a style="color: grey;" class="right">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a style="color: grey;" class="right">DeActivate</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--initial design-->
<!--                    <div class="row s12">
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Sanctions Lists</span><a href="#add_sanction" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Sanctions List"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: green;">EU</label><a href="#list_status" class="right waves-effect waves-grey btn-flat red-text modal-trigger">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: green;">OFAC</label><a href="#list_status" class="right waves-effect waves-grey btn-flat red-text modal-trigger">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: red;">BOU</label><a href="#list_status" class="right waves-effect waves-grey btn-flat green-text modal-trigger">Activate</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Conkevlists</span><a href="#add_Conkevlist" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Conkevlist"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><span style="font-size: 14px; color: grey; font-weight: 400">PEP</span><label class="red white-text" style="align-content: center;">Inactive</label><a href="#list_status" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><span style="font-size: 14px; color: grey; font-weight: 400">Sanctions</span><label class="green white-text" style="align-content: center;">Active</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'red'">DeActivate</a></div>
                                    <div class="row s12"><span style="font-size: 14px; color: grey; font-weight: 400">Adverse Media</span><label class="green white-text" style="align-content: center;">Active</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'red'">DeActivate</a></div>
                                    <div class="row s12"><span style="font-size: 14px; color: grey; font-weight: 400">Financial Crime</span><label class="green white-text" style="align-content: center;">Active</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'red'">DeActivate</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Bank Lists</span><a href="#add_BankList" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Bank List"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Auditor's List</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: red;">Internal Loan List</label><a href="#list_status" style="color: blue;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>

                                </div>
                            </div>
                        </div>
                    </div>-->
<!--second row-->
<!--                    <div class="row s12">
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Sanctions Lists</span><a href="#add_sanction" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Sanctions List"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">EU</label><a href="#list_status" class="modal-trigger right"><i class="material-icons">clear</i></a><a href="#list_status" class="modal-trigger right" style="color: grey;"><i class="material-icons">done</i></a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">OFAC</label><a href="#list_status" class="modal-trigger right"><i class="material-icons">clear</i></a><a href="#list_status" class="modal-trigger right" style="color: grey;"><i class="material-icons">done</i></a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">BOU</label><a href="#list_status" class="modal-trigger right" style="color: grey;" ><i class="material-icons">clear</i></a><a href="#list_status" class="modal-trigger right"><i class="material-icons">done</i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Conkevlists</span><a href="#add_Conkevlist" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Conkevlist"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><span style="font-size: 14px; color: black; font-weight: 400">PEP</span><label class="grey-lighten-4 grey-text" style="align-content: center;">Inactive</label><a href="#list_status" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><span style="font-size: 14px; color: black; font-weight: 400">Sanctions</span><label class="grey-lighten-4 orange-text" style="align-content: center;">Active</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><span style="font-size: 14px; color: black; font-weight: 400">Adverse Media</span><label class="grey-lighten-4 orange-text" style="align-content: center;">Active</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><span style="font-size: 14px; color: black; font-weight: 400">Financial Crime</span><label class="grey-lighten-4 orange-text" style="align-content: center;">Active</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Bank Lists</span><a href="#add_BankList" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Upload New Bank List"><i class="material-icons">file_upload</i></a><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Auditor's List</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">Internal Loan List</label><a href="#list_status" style="color: blue;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>

                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div id="inbox">
                    <div class="card">
                        <div class="card-content">
                            inbox
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
</div>
<?php
//Sanction List Upload
include_once 'Modal/modallists/SanctionListupload.php';

//Conkev List Upload
include_once 'Modal/modallists/ConkevListupload.php';

//Bank List Upload
include_once 'Modal/modallists/BankListupload.php';

// List Status(activated or deactivated/inactive)
//include_once 'Modal/modallists/ListStatus.php';

?>