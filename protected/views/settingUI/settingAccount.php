<div class="search-header">
    <div class="card card-transparent no-m">
        <div class="card-content no-s">
            <div class="z-depth-1 search-tabs">
                <div class="search-tabs-container">
                    <div class="col s12 m12 l12">
                        <div class="row search-tabs-row search-tabs-header">
                            <div class="col s12 m12 l10 left">
                                <span>Bread crumbs</span>
                            </div>
                        </div>
                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m6">
                                <div class="indicator" style="right: 420px; left: 0px;">
                                    <ul class="tabs tabs-demo z-depth-0" style="width: 100%;">
                                        <li class="tab col s3"><a href="#draft" class="active">Drafts<span>&nbsp;&nbsp;&nbsp;(3)</span></a></li>
                                        <li class="tab col s3"><a href="#inbox">Inbox<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                        <li class="tab col s3"><a href="#approved">APPROVED<span>&nbsp;&nbsp;&nbsp;(3)</span></a> </li>
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
                <div id="draft">
                    <div class="fixed-action-btn" style="bottom: 15px; right: 24px;">
                        <a href="#create_info" class="btn-floating btn-large darken-1waves-effectwaves-effect modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Create Information Requirement">
                            <i class="large material-icons">mode_edit</i>
                        </a>
                    </div>
                    <!--To create a new information requirement-->
                    <div id="create_info" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <!--<form action="info_req.action" method="POST">-->
                            <div class="modal-content">
                                <h5>Create Information Requirement</h5>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row s12">
                                            <div class="col s12 m6">
                                                <div class="input-field col s12">
                                                    <input  type="text" class="validate" required name="name">
                                                    <label for="to">Name</label>
                                                </div>
                                                <div class="input-field col s12">
                                                   <!--<i class="material-icons prefix">mode_edit</i>-->
                                                    <textarea id="desc" class="materialize-textarea"></textarea>
                                                    <label for="desc">Description</label>
                                                </div>
                                            </div>
                                            <div class="col s12 m6">
                                                <span>Select Customer Types</span><br/>
                                                <input type="checkbox" id="minor"/>
                                                <label for="minor">Minor</label><br/>
                                                <input type="checkbox" id="minor1">
                                                <label for="minor1">Minor1</label><br/>
                                                <input type="checkbox" id="ind">
                                                <label for="ind">Individual</label><br/>
                                                <input type="checkbox" id="ind1">
                                                <label for="ind1">Individual1</label><br/>
                                                <input type="checkbox" id="bank">
                                                <label for="bank">Bank</label><br/>
                                                <input type="checkbox" id="bank1">
                                                <label for="bank1">Bank1</label><br/>
                                                <input type="checkbox" id="co">
                                                <label for="co">Cooporate</label><br/>
                                                <input type="checkbox" id="co1">
                                                <label for="co1">Cooporate1</label>
                                            </div>
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
                    <!--edit information requirement-->
                    <div id="edit_info" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <!--<form action="info_req.action" method="POST">-->
                            <div class="modal-content">
                                <h5>Edit Information Requirement</h5>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row s12">
                                            <div class="col s12 m6">
                                                <div class="input-field col s12">
                                                    <input  type="text" class="validate" required name="name">
                                                    <label for="to">Name</label>
                                                </div>
                                                <div class="input-field col s12">
                                                   <!--<i class="material-icons prefix">mode_edit</i>-->
                                                    <textarea id="desc" class="materialize-textarea"></textarea>
                                                    <label for="desc">Description</label>
                                                </div>
                                            </div>
                                            <div class="col s12 m6">
                                                <span>Select Customer types</span><br/>
                                                <input type="checkbox" id="minor"/>
                                                <label for="minor">Minor</label><br/>
                                                <input type="checkbox" id="minor1" checked="checked">
                                                <label for="minor1">Minor1</label><br/>
                                                <input type="checkbox" id="ind">
                                                <label for="ind">Individual</label><br/>
                                                <input type="checkbox" id="ind1" checked="checked">
                                                <label for="ind1">Individual1</label><br/>
                                                <input type="checkbox" id="bank">
                                                <label for="bank">Bank</label><br/>
                                                <input type="checkbox" id="bank1" checked="checked">
                                                <label for="bank1">Bank1</label><br/>
                                                <input type="checkbox" id="co">
                                                <label for="co">Cooporate</label><br/>
                                                <input type="checkbox" id="co1" checked="checked">
                                                <label for="co1">Cooporate1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="modal-close btn waves-effect waves-blue blue">Update</button>
                                <button type="" class="modal-close btn-flat waves-effect waves-blue"><i class="material-icons">delete</i></button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col s12 m3">
                            <div class="row">
                                <div class="card card z-depth-0 transparent">
                                    <div class="card-content">
                                        <div class="tabs-vertical">
                                            <ul class="tabs z-depth-0 transparent">
                                                <li class="tab">
                                                    <a href="#ainsurance">Place of Origin<span>&nbsp;&nbsp;&nbsp;(3)</span></a>
                                                </li>
                                                <li class="tab">
                                                    <a href="#afixeddeposit">Country of Origin<span>&nbsp;&nbsp;&nbsp;(0)</span></a>
                                                </li>
                                                <li class="tab">
                                                    <a href="#asavingspersonal">Nature of Business<span>&nbsp;&nbsp;&nbsp;(2)</span></a>
                                                </li>
                                                <li class="tab">
                                                    <a href="#asavingscompany">Opening details<span>&nbsp;&nbsp;&nbsp;(2)</span></a>
                                                </li>
                                                <li class="tab">
                                                    <a href="#amobilemoney">Closing details<span>&nbsp;&nbsp;&nbsp;(5)</span></a>
                                                </li>
                                                <li class="tab">
                                                    <a href="#aworkerpayment">Duo Ownership<span>&nbsp;&nbsp;&nbsp;(1)</span></a>
                                                </li><br/><br/>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m9"> 
                            <div id="ainsurance" class="card grey lighten-4">                            
                                <div class="card-content">
                                    <!--<span class="card-title">Nationality</span>-->
                                    <div class="row s12 search-stats">
                                        <span class="m-r-sm left-align">Insurance</span><span class="m-r-sm right-align">An account with a promise of reimbursement in the case of loss; paid to people or companies so concerned about hazards that they have </span><a href="#edit_info" class="modal-trigger"><i class="material-icons tiny tooltipped" data-position="top" data-delay="50" data-tooltip="Edit Information Requirement">edit</i></a>
                                    </div>
                                    <div class="row s12">
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Insurance</span><br/>
                                                    <a href="#accopendocs" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Document Types</span></a><span class="right">(2)</span><br/>
                                                    <a href="#question" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Add / View / Edit"><span>Questionnaire</span></a><span class="right">(2)</span><br/>
                                                    <a href="#externaldata" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="View"><span>External System Data</a><span class="right">(2)</span></span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Fixed Deposit</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Savings Personal</span><br/>
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
                                                    <span  style="font-size: 16px;">Savings Company</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Mobile Money</span><br/>
                                                    <span>Document Types</span><span class="right">(2)</span><br/>
                                                    <span>Questionnaire</span><br/>
                                                    <span>External System Data</span><br/>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <div class="card stats-card">
                                                <div class="card-content">
                                                    <span  style="font-size: 16px;">Worker Payment</span><br/>
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
                            <div id="afixeddeposit" class="card grey lighten-4">
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

                                    <div class="right-align">
                                        <a type="#" class="waves-effect waves-grey btn-flat sweetalert-basic"><i class="close material-icons large">delete</i></a>
                                        <a href="#" class="waves-effect waves-blue btn blue">Submit</a> 
                                    </div>
                                </div> 
                            </div>
                            <div id="asavingspersonal" class="card grey lighten-4">
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
                            <div id="asavingscompany" class="card grey lighten-4">
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
                            <div id="amobilemoney" class="card grey lighten-4">
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
                            <div id="aworkerpayment" class="card grey lighten-4">
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
                </div>

                <!--set option setting-->
                <div id="options" class="modal modal-footerfooter" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <div class="modal-content">
                        <h5>Enter Question Options</h5>
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <!--<p>Use placeholders and override hint texts.</p><br>-->
                                    <div class="chips chips-placeholder">
                                        <script>
                                            $(document).ready(function () {
                                                $('.chips-placeholder').material_chip({
                                                    placeholder: 'Enter an Option',
                                                    secondaryPlaceholder: '+Option',
                                                });

                                                $('.chips').material_chip();


                                                // PrettyPrint
                                                $('pre').addClass('prettyprint');
                                                prettyPrint();
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="modal-footer">
                            <button type="#" class="waves-effect waves-light btn cyan darken-1">Submit</button>
                            <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                        </div>  
                    </div>
                </div>
                <!--set question setting-->
                <div id="question" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <form>
                        <div class="card">
                            <div class="card-content">
                                <!--<div class="modal-content">-->
                                <div class="row s12">
                                    <h5>Select Question Type</h5>
                                    <input type="checkbox" id="q1">
                                    <label for="q1">What is your Father's Job?</label><br/>
                                    <input type="checkbox" id="q2">
                                    <label for="q2">What is your country of origin and state your the real recognized name of your country?</label><br/>
                                    <input type="checkbox" id="q3">
                                    <label for="q3">What is your Actual address?</label><br/>
                                    <input type="checkbox" id="q4">
                                    <label for="q4">What is your Actual address?</label><br/>
                                    <input type="checkbox" id="q5">
                                    <label for="q5">What is your Actual address?</label><br/>
                                    <input type="checkbox" id="q6">
                                    <label for="q6">What is your Actual address?</label><br/>
                                    <input type="checkbox" id="q7">
                                    <label for="q7">What is your Actual address?</label><br/>
                                </div>
                                <!--</div>-->                                 
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-blue btn blue">Save</a> 
                                <a href="#" class="modal-action waves-effect waves-blue btn-flat ">Reset</a>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!--question edit-->

                <div id="editoption" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <div class="modal-content">
                        <h5>Edit option</h5>
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="input-field col s12">
                                        <input id="new_question" type="text" class="add-task">
                                        <label for="new_question">Change Option</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="modal-footer">
                            <button type="#" class="modal-action modal-close waves-effect waves-blue btn-flat">Update</button>
                            <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                        </div>  
                    </div>
                </div>  
                <!--Selecting account opening documents-->
                <div id="accopendocs" class="modal modal-footer">
                    <form>
                        <div class="card">
                            <div class="card-content">
                                <!--<div class="modal-content">-->
                                <div class="row s12">
                                    <h5>Document Type</h5>
                                    <div class="col s3">
                                        <input type="checkbox" id="pp">
                                        <label for="pp">passport</label><br/>
                                        <input type="checkbox" id="nat">
                                        <label for="nat">National</label><br/>
                                        <input type="checkbox" id="ver">
                                        <label for="ver">Verification</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="Per">
                                        <label for="Per">Permit</label><br/>
                                        <input type="checkbox" id="bc">
                                        <label for="bc">Birth Certificate</label><br/>
                                        <input type="checkbox" id="dl">
                                        <label for="dl">Drivers Lincense</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="ma">
                                        <label for="ma">Marriage</label><br/>
                                        <input type="checkbox" id="cc">
                                        <label for="cc">Certificate</label><br/>
                                        <input type="checkbox" id="lr">
                                        <label for="lr">Letter</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="bcc">
                                        <label for="bcc">Badge Card</label><br/>
                                        <input type="checkbox" id="ap">
                                        <label for="ap">Approval</label><br/>
                                        <input type="checkbox" id="rt">
                                        <label for="rt">Report</label><br/>
                                    </div>
                                </div>
                                <!--</div>-->                                 
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="modal-footer">
                                <a href="#" class="waves-effect waves-blue btn blue">Save</a> 
                                <a href="#" class="modal-action waves-effect waves-blue btn-flat ">Reset</a>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="externaldata" class="modal modal-footer">
                    <form>
                        <div class="card">
                            <div class="card-content">
                                <!--<div class="modal-content">-->
                                <div class="row s12">
                                    <h5>Informaton from External Ssytem</h5>
                                    <div class="col s3">
                                        <span for="pp">Gender</span><br/>
                                        <span for="nat">National</span><br/>
                                        <span for="ver">Verification</span><br/>
                                    </div>
                                    <div class="col s3">
                                        <span for="Per">Permit</span><br/>
                                        <span for="bc">Birth Certificate</span><br/>
                                        <span for="dl">Drivers Lincense</span><br/>
                                    </div>
                                    <div class="col s3">
                                        <span for="ma">Marriage</span><br/>
                                        <span for="cc">Certificate</span><br/>
                                        <span for="lr">Letter</span><br/>
                                    </div>
                                    <div class="col s3">
                                        <span for="bcc">Badge Card</span><br/>
                                        <span for="ap">Approval</span><br/>
                                        <span for="rt">Report</span><br/>
                                    </div>
                                </div>
                                <!--</div>-->                                 
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="modal-footer">
                                <!--                            <a href="#" class="waves-effect waves-blue btn blue">Save</a> 
                                                            <a href="#" class="modal-action waves-effect waves-blue btn-flat ">Reset</a>-->
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn blue ">Close</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>