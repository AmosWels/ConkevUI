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
                                        <span>Setting>>Customer Registration</span>
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
                        <div class="col s12 m4">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Natural Person</span><br><br>
                                    <input type="radio" id="bn1" name="bank" class="with-gap">
                                    <label for="bn1">Bank</label><br>
                                    <input type="radio" id="in1" name="individual" class="with-gap">
                                    <label for="in1">Individual</label><br>
                                    <input type="radio" id="gn1" name="group" class="with-gap">
                                    <label for="gn1">Group</label><br>
                                    <input type="radio" id="cn1" name="company" class="with-gap">
                                    <label for="cn1">Company</label><br>
                                    <input type="radio" id="mn1" name="minor" class="with-gap">
                                    <label for="mn1">Minor</label><br>
                                    <input type="radio" id="sn1" name="student" class="with-gap">
                                    <label for="sn1">Student</label><br>
                                    <input type="radio" id="con1" name="cooporate" class="with-gap">
                                    <label for="con1">Cooporate</label><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Legal Person</span><br><br>
                                    <input type="radio" id="bl1" name="bank">
                                    <label for="bl1">Bank</label><br>
                                    <input type="radio" id="il1" name="individual">
                                    <label for="il1">Individual</label><br>
                                    <input type="radio" id="gl1" name="group">
                                    <label for="gl1">Group</label><br>
                                    <input type="radio" id="cl1" name="company">
                                    <label for="cl1">Company</label><br>
                                    <input type="radio" id="ml1" name="minor">
                                    <label for="ml1">Minor</label><br>
                                    <input type="radio" id="sl1" name="student">
                                    <label for="sl1">Student</label><br>
                                    <input type="radio" id="col1" name="cooporate">
                                    <label for="col1">Cooporate</label><br/>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="card stats-card">
                                <div class="card-content">
                                    <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Others</span><br><br>
                                    <input type="radio" id="bot1" name="bank">
                                    <label for="bot1">Bank</label><br>
                                    <input type="radio" id="iot1" name="individual">
                                    <label for="iot1">Individual</label><br>
                                    <input type="radio" id="got1" name="group">
                                    <label for="got1">Group</label><br>
                                    <input type="radio" id="cot1" name="company">
                                    <label for="cot1">Company</label><br>
                                    <input type="radio" id="mot1" name="minor">
                                    <label for="mot1">Minor</label><br>
                                    <input type="radio" id="sot1" name="student">
                                    <label for="sot1">Student</label><br>
                                    <input type="radio" id="coot1" name="cooporate">
                                    <label for="coot1">Cooporate</label><br/>
                                </div>
                            </div>
                        </div>
                                <input type="Submit" value="Submit" class="btn waves-effect waves-blue blue right">
                                <a href="#" class="modal-close waves-effect waves-blue btn-flat right">Cancel</a>    
                                <a href="#" class="modal-close waves-effect waves-blue btn-flat right">Reset</a>    
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