<div class="search-header">
    <div class="card card-transparent no-m">
        <div class="card-content no-s">
            <div class="z-depth-1 search-tabs">
                <div class="search-tabs-container">
                    <div class="col s12 m12 l12">
                        <div class="row search-tabs-row search-tabs-header">
                            <!--                                          <div class="input-field col s12 m12 l2 right">
                                                                          
                                                                            <select>
                                                                                <option value="" disabled selected>Sort by</option>
                                                                                <option value="1">Draft</option>
                                                                                <option value="2">Rejected</option>
                                                                                <option value="3">Review</option>
                                                                            </select>
                                                                        </div>-->
                            <div class="col s12 m12 l10 left">
                                <span>Bread crumbs</span>

                                                <!--                                                <a class="waves-effect waves-grey btn-flat search-tabs-button right"><i class="material-icons">settings_input_svideo</i>Drafts</a>
                                                                                                <a class="waves-effect waves-grey btn-flat search-tabs-button right"><i class="material-icons">list</i>Advanced Search</a>-->
                            </div>
                        </div>

                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m6 20">
                                <ul class="tabs">
                                    <!--<li class="tab col s3"><a href="#info" class="active">STANDARD DUE DILIGENCE </a></li>-->
                                    <li class="tab col s3"><a href="#scale" class="active">Draft</a></li>
                                    <li class="tab col s3"><a href="#data" class="">INBOX</a></li>
                                    <li class="tab col s3"><a href="#data" class="">APPROVED</a></li>
                                    <!--<li class="tab col s3 disabled"><a href="#rres" class="">Resources</a></li>-->                                                    
                                </ul>
                            </div>
                            <!--                                            <div class="col s12 m10 right-align search-stats">
                                                                            <span class="m-r-sm">Draft = <font color="red" size="2">3</font></span>
                                                                            <span class="m-r-sm">Newest = <font color="red" size="2">9</font></span>
                                                                            <span class="m-r-sm">Rejected = <font color="red" size="2">7</font></span>
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
                <!--<span>Documents</span>-->
                <!--Start of documents tab-->
                <div id="scale" class="col s12 m12 l12">
                    <div class="row">
                        <!--<div class="col s12 m12 l12">-->
                        <div class="card">
                            <div class="card-content">
                                <table id="examplescale" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Scale Name</th>
                                            <th>Type</th>
                                            <th>Purpose</th>
                                            <th>Units</th>
                                            <th>Date</th>
                                            <!--<th>Start date</th>-->
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <!--                                    <tfoot>
                                                                            <tr>
                                                                               <th>Scale Name</th>
                                                                                <th>Type</th>
                                                                                <th>Purpose</th>
                                                                                <th>Date </th>
                                                                                <th>Start date</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                        </tfoot>-->
                                    <tbody>
                                        <tr onclick="document.location = '<?php echo @Yii::app()->baseUrl;?>/index.php?r=settingUI/settingRiskScaleEdit';">
                                            <td>Bank of Uganda AML</td>
                                            <td>Quantitative</td>
                                            <td>Consolidated Risk</td>
                                            <td>jsgdfsa</td>
                                            <td>23-03-2017</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--</div>-->
                    </div>
                </div>

                <div class="fixed-action-btn" style="bottom: 15px; right: 24px;">
                    <a class="btn-floating btn-large darken-1waves-effectwaves-effect modal-trigger tooltipped" data-position="left" data-delay="0" data-tooltip="Create scales" href="#Create_scales">
                        <i class="large material-icons">mode_edit</i>
                    </a>
<!--                    <ul>
                        <li><a class="btn-floating yellow darken-1waves-effectwaves-effect waves-light red modal-trigger" href="#create_resource1" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">folder</i></a></li>
                        <li><a class="btn-floating blue bluewaves-effectwaves-effect waves-light red modal-trigger tooltipped"  data-position="left" data-delay="0" data-tooltip="Create scales" href="#Create_scales" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">add</i></a></li>
                    </ul>-->

                </div>
                <div id="Create_scales" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                        <form class="col s12" action="" method="POST">
                    <div class="modal-content">
                            <h5>Create a Risk Scale</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="to" type="text" class="validate" name="doc_name"/>
                                    <label for="to">Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="to" type="text" class="validate" name="doc_name"/>
                                    <label for="to">Description</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-content">
                                            <span>Purpose</span><br/><br/>
                                            <input type="checkbox" id="it" disabled/>
                                            <label for="it">Impact</label>
                                            <br/>
                                            <input type="checkbox" id="ld" disabled/>
                                            <label for="ld">Likelihood</label>
                                            <br/>
                                            <input type="checkbox" id="vl" disabled/>
                                            <label for="vl">Vulnerability</label>
                                            <br/>
                                            <input type="checkbox" id="vb" disabled/>
                                            <label for="vb">Visibility</label>
                                            <br/>
                                            <input type="checkbox" id="crw"  checked/>
                                            <label for="crw">Consolidated Risk Weight</label>
                                            <br/>
                                            <input type="checkbox" id="co" disabled/>
                                            <label for="co">Consequence</label>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="card">
                                        <div class="card-content">
                                            <span>Scale Types</span><br/><br/>
                                            <input type="checkbox" id="qt" />
                                            <label for="qt">Quantitative</label>
                                            <br/>
                                            <input type="checkbox" id="ql" />
                                            <label for="ql">Qualitative</label>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                            <div class="form-group"> 
                                <div class="modal-footer">
                                    <button type="" class="modal-action modal-close waves-effect waves-light btn cyan darken-1">Save</button>
                                    <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                                </div>  
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>