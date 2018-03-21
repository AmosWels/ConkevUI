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
                                        <span>Setting>>Risk</span>
                                    </div>
                                </h5>
                            </div>
                        </div>
                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m6 16">                                
                                <ul class="tabs " style="width: 100%;">
                                    <li class="tab col s2"><a href="#draft" class="active">DRAFTS</a></li>
                                    <li class="tab col s2"><a href="#inbox" class="">INBOX</a></li>   
                                    <li class="tab col s2"><a href="#approved" class="">APPROVED</a></li>
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
<!--                                    <table id="example4" class="display responsive-table datatable-example"> 
                                        <thead>
                                            <tr>
                                                <th>Risk Name</th>
                                                <th>Business Process</th>
                                                <th>Source</th>
                                                <th>Status</th>
                                                <th>Created on</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Risk Name</th>
                                                <th>Business Process</th>
                                                <th>Source</th>
                                                <th>Status</th>
                                                <th>Created on</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr class="todo-item" onclick="document.location = '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingRiskEdit';">
                                                <td>aTheft</td>
                                                <td><a class="waves-effect waves-light sweetalert-html">Case Management</a></td>
                                                <td>Client Opening</td>
                                                <td>Case Management</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>aTheft</td>
                                                <td>Account Opening</td>
                                                <td>Conkev lists</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>  
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>aTheft</td>
                                                <td>Credit Transaction</td>
                                                <td>Unbound</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Tax Avoidance</td>
                                                <td>Review of client Information</td>
                                                <td>Case Management</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Embezzlement</td>
                                                <td>Review of client Information</td>
                                                <td>Conkev lists</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Embezzlement</td>
                                                <td>Account Opening</td>
                                                <td>Case Management</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Embezzlement</td>
                                                <td>Client Opening</td>
                                                <td>Conkev lists</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Global Fund</td>
                                                <td>Client Opening</td>
                                                <td>Unbound</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Golden Handshake</td>
                                                <td>Client Opening</td>
                                                <td>Unbound</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Golden Hug</td>
                                                <td>Client Opening</td>
                                                <td>Case Management</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Golden Kick</td>
                                                <td>Client Opening</td>
                                                <td>Case Management</td>
                                                <td>New</td>
                                                <td>21-feb-2016
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>-->

                    <!--***-->
                    <div class="row">
                        <div class="col s12 m3">
                            <div class="card z-depth-0 transparent">
                                <div class="card-content">
                                    <div class="tabs-vertical">
                                        <ul class="tabs z-depth-0 transparent">
                                            <span style="font-size: 18px; font: small-caption; font-size: large; font-weight: 100">Risks</span><br>
                                            <li class="tab">
                                                <a class="active" href="#na">PEP<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                            </li>
                                            <li class="tab">
                                                <a href="#ide">Resident Outside Uganda<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                            </li>
                                            <li class="tab">
                                                <a href="#dob">Resident Inside Uganda<span>&nbsp;&nbsp;&nbsp;(2)</span></a> 
                                            </li>
                                            <li class="tab">
                                                <a href="#ge">Foreign PEP<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                            </li>
                                            <li class="tab">
                                                <a href="#cog">International PEP<span>&nbsp;&nbsp;&nbsp;(5)</span></a> 
                                            </li>
                                            <li class="tab">
                                                <a href="#poo">Natural Persons<span>&nbsp;&nbsp;&nbsp;(0)</span></a> 
                                            </li>
                                            <li class="tab">
                                                <a href="#">Natural Persons and Resident outside Uganda<span>&nbsp;&nbsp;&nbsp;(0)</span></a> 
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
                                        <span class="m-r-sm left-align">PEP</span><span class="m-r-sm right-align">Policatically Exposed Persons</span><a href="#edit_risk" class="modal-trigger"><i class="material-icons tiny tooltipped" data-position="top" data-delay="50" data-tooltip="Edit Risk">edit</i></a>
                                    </div>
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Minor</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>Related to PEP</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: grey;">Medium</a><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>Stays in PEP Residence</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: grey;">High</a><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>Income from Parliament</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: grey;">High</a><br/>
<!--                                                    <a href="#question" class="tooltipped" data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Question</span></a><span class="right">(2)</span><br/>
                                                    <a href="#externaldata" class="tooltipped" data-position="left" data-delay="50" data-tooltip="View"><span>Parameters</span></a><span class="right">(2)</span></span><br/>
                                                    <a href="#eddinfo" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="View"><span>EDD</span></a><span class="right">(2)</span></span><br/>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Individual</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span></span></a><span class="right">Low</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Risk Level</span></a><span class="right">Low</span><br/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Cooporate</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Risk Level</span></a><span class="right">High</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank1</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Risk Level</span></a><span class="right">Low</span><br/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Cooporate</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Risk Level</span></a><span class="right">High</span><br/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Employee</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Risk Level</span></a><span class="right">Low</span><br/>
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
                            <div id="ide" class="card grey lighten-4">
                                <div class="card-content">
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank</span><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>Uganda</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: #FFB86C">Low</a><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>East Africa</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: grey;">Medium</a><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>Asia</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: grey;">High</a><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>America</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: grey;">High</a><br/>
                                                    <a href="#level" class="modal-trigger tooltipped " data-position="left" data-delay="50" data-tooltip="Click to select Level"><span>Antlantica</span></a><a href="#edit_level" class="right modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Change Level" style="color: grey;">High</a><br/>
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
                            <div id="dob" class="card grey lighten-4">
                                <div class="card-content">
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
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
                                    </div> 
                                    <div class="right-align">
                                        <a type="#" class="waves-effect waves-grey btn-flat sweetalert-basic"><i class="close material-icons large">delete</i></a>
                                        <a href="#" class="waves-effect waves-blue btn blue">Submit</a> 
                                    </div>
                                </div> 
                            </div>
                            <div id="ge" class="card grey lighten-4">
                                <div class="card-content">
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
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
                            <div id="cog" class="card grey lighten-4">
                                <div class="card-content">
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Bank</span><br/>
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
                            <div id="poo" class="card grey lighten-4">
                                <div class="card-content">
                                    <div class="row s12">
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
                    <div class="fixed-action-btn" style="bottom: 15px; right: 24px;">
                        <a href="#create_risk" class="btn-floating btn-large darken-1waves-effectwaves-effect modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Create Risk">
                            <i class="large material-icons">mode_edit</i>
                        </a>
                    </div>

                    <div id="create_risk" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <!--<form action="info_req.action" method="POST">-->
                            <div class="modal-content">
                                <h5>Create Risk</h5>
                                <div class="row s12">
                                    <div class="col s12 m6">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="input-field">
                                                    <text>Name</text>
                                                    <input  type="text" class="validate" required name="name">
                                                </div>
                                                <div class="input-field">
<!--                                                    <text>Description</text>
                                                    <input  type="text" class="validate" required name="name">-->
                                                    <span>Description</span>
                                                    <textarea id="desc" class="materialize-textarea"></textarea>
                                                </div>
                                                <div class="input-field">
                                                    <text>Code</text>
                                                    <input  type="text" class="validate" required name="name" pattern="[A-Za-z]{5}" title="Five Risk code of Characters">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="card">
                                            <div class="card-content">
                                                <span>Select Customer Types</span><br/>
                                                <input type="checkbox" id="minor1">
                                                <label for="minor1">Bank</label><br/>
                                                <input type="checkbox" id="ind">
                                                <label for="ind">Individual</label><br/>
                                                <input type="checkbox" id="ind1">
                                                <label for="ind1">Group</label><br/>
                                                <input type="checkbox" id="bank">
                                                <label for="bank">Company</label><br/>
                                                <input type="checkbox" id="bank1">
                                                <label for="bank1">Minor</label><br/>
                                                <input type="checkbox" id="co">
                                                <label for="co">Student</label><br/>
                                                <input type="checkbox" id="co1">
                                                <label for="co1">Cooporate</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="Submit" value="Save" class="btn waves-effect waves-blue blue">
                                <!--<button type="submit" class="modal-close btn waves-effect waves-blue blue">Save</button>-->
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
                            </div>
                        </form>
                    </div>

                    <div id="edit_risk" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <!--<form action="info_req.action" method="POST">-->
                            <div class="modal-content">
                                <h5>Edit Risk</h5>
                                <div class="row s12">
                                    <div class="col s12 m6">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="input-field row s12">
                                                    <text>Name</text>
                                                    <input  type="text" class="validate" required name="name" placeholder="PEP">
                                                </div>
                                                <div class="input-field row s12">
                                                    <text>Description</text>
                                                    <input  type="text" class="validate" required name="name" placeholder="Politically Exposed Persons">
                                                </div>
                                                <div class="input-field">
                                                    <text>Code</text>
                                                    <input  type="text" class="validate" required name="name" pattern="[A-Za-z]{5}" title="Five Risk code of Characters" placeholder="PEP">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="card">
                                            <div class="card-content">
                                                <span>Select Customer Types</span><br/>
                                                <input type="checkbox" id="minor1e">
                                                <label for="minor1e">Bank</label><br/>
                                                <input type="checkbox" id="inde">
                                                <label for="inde">Individual</label><br/>
                                                <input type="checkbox" id="ind1e">
                                                <label for="ind1e">Group</label><br/>
                                                <input type="checkbox" id="banke">
                                                <label for="banke">Company</label><br/>
                                                <input type="checkbox" checked="checked" id="bank1e"/>
                                                <label for="bank1e">Minor</label><br/>
                                                <input type="checkbox" checked="checked" id="coe"/>
                                                <label for="coe">Student</label><br/>
                                                <input type="checkbox" id="co1e">
                                                <label for="co1e">Cooporate</label>
                                            </div>
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

                    <div id="level" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                        <!--<div class="modal-content">-->
                        <form action="" method="POST">
                            <div class="modal-content">
                                <span>Select Risk level</span>
                                <div class="card">
                                    <div class="card-content">
                                        <div>
                                            <div class="row s12">
                                                <div class="col s4"><input type="radio" name="wt" id="one" />
                                                    <label for="one">Low</label></div>
                                                <div class="col s4"><input type="radio" name="wt" id="two" />
                                                    <label for="two">Medium</label></div>
                                                <div class="col s4"><input type="radio" name="wt" id="three" />
                                                    <label for="three">High</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="modal-footer">
                                    <button type="submit" class="waves-effect waves-light btn blue">Submit</button>
                                    <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                                </div>  
                            </div>
                        </form>
                    </div>

                    <div id="edit_level" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                        <!--<div class="modal-content">-->
                        <form action="" method="POST">
                            <div class="modal-content">
                                <div class="card">
                                    <div class="card-content">
                                        <span>Select Risk level</span>
                                        <div>
                                            <div class="row s12">
                                                <div class="col s4"><input type="radio" name="wt1" id="one1"/>
                                                    <label for="one1">Low</label></div>
                                                <div class="col s4"><input type="radio" name="wt1" id="two2" checked="true"/>
                                                    <label for="two2">Medium</label></div>
                                                <div class="col s4"><input type="radio" name="wt1" id="three3" />
                                                    <label for="three3">High</label></div>
                                            </div>
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
                    <div class="row">
                        <div class="col s12 m12 ">
                            <div class="card">
                                <div class="card-content">
                                    <table id="examplee2" class="display responsive-table datatable-example"> 
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Source</th>
                                                <th>Supervised on</th>
                                                <th>Status</th>
                                                <th>Created On</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Source</th>
                                                <th>Supervised on</th>
                                                <th>Status</th>
                                                <th>Created On</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <tr class="todo-item">                                
                                                <td>Legal Entry</td>
                                                <td>Information</td>
                                                <td></td>
                                                <td>Review</td>
                                                <td>02/april/2011
                                                    <a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a>
                                                    <a href="" class="pull-right remove-todo-item"><i class="material-icons">visibility</i></a>
                                                    <a href="" class="pull-right remove-todo-item "><i class="material-icons">edit</i></a>
                                                </td>
                                            </tr>

                                            <tr class="todo-item">    
                                                <td><a class="dropdown-button blue-grey-text" href="#" data-activates="dropdown22">Legal Entry1</a>
                                                    <ul id="dropdown22" class="dropdown-content">
                                                        <li><a href="#!">view</a></li>
                                                        <li><a href="#!">edit</a></li>
                                                    </ul>
                                                </td>
                                                <td>Transaction Monitoring</td>
                                                <td></td>
                                                <td>Rejected</td>
                                                <td>02/jAN/2013<a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a></td>
                                                </a>
                                            </tr>
                                            <tr class="todo-item">                                
                                                <td>Legal Entry2</td>
                                                <td>Eagles Eye Approval</td>
                                                <td></td>
                                                <td>Alert</td>
                                                <td>02/mARCH/2010<a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a></td>
                                            </tr>

                                        </tbody>
                                    </table>
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