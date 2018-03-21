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
                                        <span>Settings</span>
                                    </div>
                                </h5>
                            </div>
                        </div>
                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m6 16">                                
                                <ul class="tabs">
                                    <h5 style="font-size: 20px"><span> Settings Menu</span></h5>   
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
                <div class="row s12" style="margin-left: 30px; margin-top: 10px;">
                    <div class="col s12 m3">
                        <span class="card-title" style="font-size: 18px;">Standard Due Diligence</span>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingClientchange" style="color: #07a; font-size: 14px; ">New Customer</a></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingAccount" style="color: #07a; font-size: 14px;">New Account</a></li>

                        <span class="card-title" style="font-size: 18px;">User </span>
                        <li><a href="#" style="color: #07a; font-size: 14px;">Document Types</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingajak" style="color: #07a; font-size: 14px; ">Ajax</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">New Customer</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">New Account</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">New Account</a></li>
                    </div>
                    <div class="col s12 m3">
                        <span class="card-title" style="font-size: 18px;">Enhanced Due Diligence</span>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingCustomerEdd" style="color: #07a; font-size: 14px; ">New Customer</a></li>
                        <!--<li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=" style="color: #07a; font-size: 14px;">New Account</a></li>-->

                        <span class="card-title" style="font-size: 18px;">User Management</span>
                        <li><a href="#" style="color: #07a; font-size: 14px;">CSO</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Supervisor</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px;">Manager</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Branch Manager</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Driver</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Driver</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px;">Driver</a><br/></li>
                    </div>
                    <div class="col s12 m3">
                        <span class="card-title" style="font-size: 18px">Risk Assesment</span>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingRisk" style="color: #07a; font-size: 14px; ">New Customer</a></li>
                        <!--<li><a href="#" style="color: #07a; font-size: 14px; ">Risk Assesment</a></li>-->

                        <span class="card-title" style="font-size: 18px;">General setting</span><br>
                        <a href="#" style="color: #07a; font-size: 16px; font-family:initial;">New customer</a><br/>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingDocument" style="color: #07a; font-size: 14px; ">Document Types</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingQuestion" style="color: #07a; font-size: 14px; ">Question</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingCustomerCategory" style="color: #07a; font-size: 14px; ">Customer Types by Nature</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingCustomerRegistration" style="color: #07a; font-size: 14px; ">Customer Types by Registration</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingRiskScale" style="color: #07a; font-size: 14px;">Risk Scale</a></li>

<!--                        <span  style="color: #07a; font-size: 16px; font-family:initial; ">New Account</span><br/>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Question</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Question</a><br/></li>
                        <a href="#" style="color: #07a; font-size: 16px; font-family:initial;">Risk Asessment</a><br/>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingRiskScale" style="color: #07a; font-size: 14px; ">Scale</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingRiskQuestion" style="color: #07a; font-size: 14px; ">Question</a><br/></li>-->
                    </div>
                    <div class="col s12 m3">
                        <span class="card-title" style="font-size: 18px;">Conkev Lists</span>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Blacklist Programs</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingList" style="color: #07a; font-size: 14px;">Activate / Deactivate List</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingListUpload" style="color: #07a; font-size: 14px; ">Update List</a><br/></li>
                        <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingListPercentage" style="color: #07a; font-size: 14px; ">Percentage Match Results</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">Search Criteria</a><br/></li>


                        <span class="card-title" style="font-size: 18px; " >Another setting2</span>
                        <li><a href="" style="color: #07a; font-size: 14px; ">herehere</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">thereherehere</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">whereherehere</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">whoseherehere</a><br/></li>
                        <li><a href="#" style="color: #07a; font-size: 14px; ">whyherehere</a><br/></li>
                    </div>
                </div>

            </div>
        </div> 
    </div>
</div>