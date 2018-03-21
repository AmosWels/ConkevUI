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
                                        <span>Setting>>Percentage Match</span>
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
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">OFAC List</span><span class="right">Active</span><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Category</label><a href="#list_status" style="color: grey;" class="right" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">Sanctions List</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Results Percentage return match</label><select class="js-states browser-default" tabindex="-1" style="width: 100%" id="basic">
                                            <!--<optgroup label="Alaskan/Hawaiian Time Zone">-->
                                                <option value="AK">% Match</option>
                                                <option value="AK">30%</option>
                                                <option value="HI">50%</option>
                                                <option value="HI">75%</option>
                                                <option value="HI">100%</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">EU List</span><span class="right">Active</span><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Category</label><a href="#list_status" style="color: grey;" class="right" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">Sanctions List</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Results Percentage return match</label><select class="js-states browser-default" tabindex="-1" style="width: 100%" id="basic">
                                            <!--<optgroup label="Alaskan/Hawaiian Time Zone">-->
                                                <option value="AK">% Match</option>
                                                <option value="AK">30%</option>
                                                <option value="HI">50%</option>
                                                <option value="HI">75%</option>
                                                <option value="HI">100%</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row s12">
                        <!--sanctions column-->
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Sanctions Lists</span><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">EU</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">OFAC</label><a href="#list_status" style="color: blue;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BOU</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>

                                </div>
                            </div>
                        </div>
                        <!--conkev lists column-->
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Conkevlists</span><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">PEP</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">Sanctions</label><a href="#list_status" style="color: blue;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Adverse Media</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Financial Crime</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                </div>
                            </div>
                        </div>
                        <!--banklists column-->
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Bank Lists</span><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Auditor's List</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">Internal Loan List</label><a href="#list_status" style="color: blue;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="inbox">
                    <div class="row s12">
                        <!--sanctions column-->
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Sanctions</span>
                                    <ul class="collection with-header">
                                        <li class="collection-item"><div>EU<label>Active</label><a href="#edit_status" class="secondary-content modal-trigger">Edit</a></div></li>
                                        <li class="collection-item"><div>OFAC<label>Active</label><a href="#!" class="secondary-content">Edit</a></div></li>
                                        <li class="collection-item"><div>UN<label>InActive</label><a href="#!" class="secondary-content">Edit</a></div></li>
                                        <li class="collection-item"><div>UK<label>InActive</label><a href="#!" class="secondary-content">Edit</a></div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--conkev lists column-->
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Conkevlists</span><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">PEP</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">Sanctions</label><a href="#list_status" style="color: blue;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Adverse Media</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Financial Crime</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                </div>
                            </div>
                        </div>
                        <!--banklists column-->
                        <div class="col m4">
                            <div class="card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Bank Lists</span><br><br>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">Auditor's List</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: grey;">Internal Loan List</label><a href="#list_status" style="color: blue;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'blue'">Activate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                    <div class="row s12"><label style="font-size: 14px; font-weight: 400; color: black;">BlackList</label><a href="#list_status" style="color: grey;" class="right modal-trigger" onmouseover="this.style.color = 'orange'" onmouseout="this.style.color = 'grey'">DeActivate</a></div>
                                </div>
                            </div>
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
//include_once 'Modal/modallists/SanctionListupload.php';
//Conkev List Upload
//include_once 'Modal/modallists/ConkevListupload.php';
//Bank List Upload
//include_once 'Modal/modallists/BankListupload.php';
// List Status(activated or deactivated/inactive)
include_once 'Modal/modallists/ListStatus.php';
?>