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
                            <div class="col s12">
                                <ul class="">
                                    <li class="s3"><a href="#" class="tooltipped waves-effect waves-teal btn-flat right" data-position="top" data-delay="50" data-tooltip="Delete">Delete</a></li>
                                    <li class="s3"><a href="#" class="tooltipped waves-effect waves-teal btn-flat right" data-position="top" data-delay="50" data-tooltip="Submit">Submit</a></li>
                                    <li class="s3"><span style="font-size: 20px;">Theft</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>    
    <div class="row">
        <!--                    <div class="col s12">
                                <div class="page-title">Contact</div>
                            </div>-->
        <div class="col s12 m4">
            <div class="row">
                <div class="card">
                    <!--<div class="card" style="height: 275px;">-->
                    <div class="card-content center-align row">
                        <div style="height: 80%">
                            <div class="m-t-sm left-align col s6">Risk Name</div>
                            <div class="m-t-md left-align col s6">Theft</div>
                        </div>
                        <div style="height: 80%;">
                            <div class=" m-t-sm left-align col s6">Risk Type</div>
                            <div class=" m-t-md left-align col s6">Financial Behavior</div>
                        </div>
                        <div style="height: 80%;">
                            <div class=" m-t-sm left-align col s6">Business Process</div>
                            <div class=" m-t-md left-align col s6">Client Opening</div>
                        </div>
                        <div style="height: 80%;">
                            <div class=" m-t-sm left-align col s6">Risk Description</div>
                            <div class=" m-t-md left-align col s6" style="font-style: italic;">The act of taking Money <a class="modal-trigger" href="#rdes">. . .</a> </div> 
                        </div>
                    </div>
                    <a href="#editrisk" class="pull-left modal-trigger small"><i class="material-icons color:black;" >edit</i></a>
                    <div id="editrisk" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 250.516304347826px;">
                        <div class="modal-content">
                            <!--<h5>Risk</h5>-->
                            <div class="row">
                                <form action="" method="POST">
                                    <div class="row s12">
                                        <div class="input-field col s6">
                                            <div class="card">
                                                <div class="card-content">
                                                    <textarea id="riskname"  class="validate materialize-textarea" required name="name"></textarea>
                                                    <label for="riskname">Risk Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s6">
                                            <div class="card">
                                                <div class="card-content">
                                                    <textarea id="riskdesc" class="materialize-textarea"></textarea>
                                                    <label for="textarriskdescea1">Risk Description</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row s12">
                                        <div class="col s6">
                                            <div class="card">
                                                <div class="card-content">
                                                    <span style="text-decoration: underline;">Associated Business Processes</span><br/><br/>
                                                    <input type="checkbox" checked="checked" id="cll" disabled=""/>
                                                    <label for="cll">Client Opening</label>
                                                    <br/>
                                                    <input type="checkbox" id="ac" disabled=""/>
                                                    <label for="ac">Account Opening</label>
                                                    <br/>
                                                    <input type="checkbox" id="rv" disabled="" />
                                                    <label for="rv">Review of Client Information</label>
                                                    <br/>
                                                    <input type="checkbox" id="dl" disabled=""/>
                                                    <label for="dl">Debit Transactions</label>
                                                    <br/>
                                                    <input type="checkbox" id="ct" disabled=""/>
                                                    <label for="ct">Credit Transactions</label>
                                                    <br/>
                                                    <input type="checkbox" id="sr" disabled="" />
                                                    <label for="sr">Staff Recruitment</label>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s6">
                                            <div class="card">
                                                <div class="card-content">
                                                    <span style="text-decoration:underline;">Risk Type</span><br/><br/>
                                                    <input type="checkbox" id="t1" />
                                                    <label for="t1">Profile Generated</label>
                                                    <br/>
                                                    <input type="checkbox" checked="checked" id="t2" />
                                                    <label for="t2">Financial Behaviour</label>
                                                    <br/>
                                                    <input type="checkbox" id="t3" />
                                                    <label for="t3">Social Behaviour</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<span>Risk Description</span>-->

                                </form>
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!--<button type="submit" class="btn btn-default modal-action modal-close">Submit</button>-->
                            <button type="submit" class="modal-action modal-close waves-effect waves-blue btn-flat">Update</button>
                            <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Reset</a>   
                        </div>
                    </div>
                </div>
            </div>
            <div id="rdes" class="modal modal-content" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                <div class="row">
                    <form class="col s12" action="" method="POST">
                        <span>The act of taking Money from someone, a bank, institution unlawfully</span>
                    </form>
                </div>
            </div>
            <div class="row">
                <!--                             <div class="z-depth-1 search-tabs">
                                                <div class="search-tabs-container">
                -->                                <div class="card">
                    <div class="card-content">
                        <!--                      <ul class="tabs " style="width: 100%;">
                                                                        <li class="tab col s2"><a href="#wght" class="active">Weight</a></li>
                                                                        <li class="tab col s2 "><a href="#indct" class="">Indicator</a></li>
                                                                        <li class="tab col s2 "><a href="#eddd" class="">Edd</a></li>
                                                                    </ul>-->

                        <!--<div class="row">-->
                        <div class="tabs-vertical">
                            <!--<div class="col s4 m3 l2">-->
                            <ul class="tabs z-depth-0">
                                <li class="tab">
                                    <a class="active" href="#wght">Weight
                                        <span class="right">23</span></a>
                                </li>
                                <li class="tab">
                                    <a href="#apet">Appetite</a>
                                </li>
                                <li class="tab">
                                    <a href="#indct">Indicator</a>
                                </li>
                                <li class="tab">
                                    <a href="#data">Risk Data</a>
                                </li>
                                <li class="tab">
                                    <a href="#mitigate">Mitigation</a>
                                </li>
                                <li class="tab">
                                    <a href="#incident">Incidents</a>
                                </li>
                            </ul>
                            <!--</div>-->
                            <!--                                                    <div class="col s8 m9 l6">
                                                                                    <div id="ActiveDirectory" class="tab-content"></div>
                                                                                    <div id="Smtp" class="tab-content"></div>
                                                                                    <div id="General" class="tab-content"></div>
                                                                                </div>-->
                        </div>
                    </div>
                </div>
                <!--                                        </div>
                                                     </div>
                                                </div>
                                             </div>-->
            </div>
        </div>

        <div class="col s12 m8">
            <div id="wght">
                <div class="card" style="height: 500px;">
                    <div class="card-content ">
                        <!--<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>-->
                        <table id="example61" class="display responsive-table datatable-example">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Weight</th>
                                    <th>Narrative</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Weight</th>
                                    <th>Narrative</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>29-Feb-2016</td>
                                    <td>Low</td>
                                    <td>Its been observed<a class="modal-trigger" href="#nar1">. . .</a></td>
                                    <td>Approved</td>
                                </tr>
                                <tr>
                                    <td>30-Feb-2016</td>
                                    <td>Medium</td>
                                    <td>Its been observed<a class="modal-trigger" href="#nar2">. . .</a></td>
                                    <td>Rejected</td>
                                </tr>
                                <tr>
                                    <td>31-Feb-2016</td>
                                    <td>High</td>
                                    <td>Its been observed<a class="modal-trigger" href="#nar3">. . .</a></td>
                                    <td>Pending</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="nar1" class="modal modal-content" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <div class="row">
                        <form class="col s12" action="" method="POST">
                            <div class="card">
                                <div class="card-content">
                                    <span>Its been observed that theft cases have greatly reduced on there frequency.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="nar2" class="modal modal-content" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <div class="row">
                        <form class="col s12" action="" method="POST">
                            <div class="card">
                                <div class="card-content">
                                    <span>Its been observed that theft cases have increased on there frequency.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="nar3" class="modal modal-content" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <div class="row">
                        <form class="col s12" action="" method="POST">
                            <div class="card">
                                <div class="card-content">
                                    <span>Its been observed that theft cases have greatly increased on there frequency.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="fixed-action-btn" style="bottom: 15px; right: 24px;">
                    <a class="btn-floating btn-large darken-1waves-effectwaves-effect tooltipped" data-position="left" data-delay="0" data-tooltip="Add Weight">
                        <i class="large material-icons">mode_edit</i>
                    </a>
                    <ul>
                        <!--<li><a class="btn-floating yellow darken-1waves-effectwaves-effect waves-light red modal-trigger" href="#create_resource1" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">folder</i></a></li>-->
                        <li><a class="btn-floating blue bluewaves-effectwaves-effect waves-light red modal-trigger" href="#addweight" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">add</i></a></li>
                    </ul>
                </div>
                <div id="addweight" class="modal modal-content" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <!--<div class="modal-content">-->
                    <span class="card-title"></span>
                    <div class="row">
                        <form class="col s12" action="" method="POST">
                            <div class="row">
                                <div class="card">
                                    <div class="card-content">
                                        <span>Select Risk Weight</span>
                                        <div>
                                            <table>
                                                <tr>
                                                    <td><input type="radio" name="wt" id="one" />
                                                        <label for="one">1</label></td>
                                                    <td><input type="radio" name="wt" id="two" />
                                                        <label for="two">2</label></td>
                                                    <td><input type="radio" name="wt" id="three" />
                                                        <label for="three">3</label></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="input-field">
                                            <textarea id="textarea2" class="materialize-textarea"></textarea>
                                            <label for="textarea2">Reason</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="modal-footer">
                                    <button type="submit" class="waves-effect waves-light btn cyan darken-1">Submit</button>
                                    <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="indct">
                <div class="card">
                    <div class="card-content" style="height: 500px;">
                        <table id="example6" class="display responsive-table datatable-example">
                            <select>
                                <option value="" disabled selected>Sort by</option>
                                <option value="1">Draft</option>
                                <option value="2">Rejected</option>
                                <option value="3">Review</option>
                            </select>
                            <thead>
                                <tr>
                                    <th>Indicator Type</th>
                                    <th>Indicator Status</th>
                                    <th>Created On</th>
                                    <th>Created By</th>
                                    <th>Supervised By</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Indicator Type</th>
                                    <th>Indicator Status</th>
                                    <th>Created On</th>
                                    <th>Created By</th>
                                    <th>Supervised By</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Smurfing</td>
                                    <td>New</td>
                                    <td>29/feb/2014</td>
                                    <td>Mwesigye JB</td>
                                    <td>Peninah Katula</td>
                                </tr>
                                <tr>
                                    <td>Shell Organisations</td>
                                    <td>Approved</td>
                                    <td>02/Jan/2014</td>
                                    <td>Muhabura Patrick</td>
                                    <td>Tommy Katula</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--                        <div id="abp">
                                        <div class="card" style="height: 500px;">
                                            <div class="card-content ">
                                                <form action="javascript:void(0);">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="new_task" type="text" class="add-task">
                                                            <label for="new_task">New Level</label>
                                                        </div>
                                                    </div>
                                                </form>
            
                                                <ul class="todo-nav">
                                                    <li class="active all-task"><a href="#" class="waves-effect waves-light btn blue-grey">All</a></li>
                                                    <li class="active-task"><a href="#" class="waves-effect waves-light btn blue-grey">Active</a></li>
                                                    <li class="completed-task"><a href="#" class="waves-effect waves-light btn blue-grey">Completed</a></li>
                                                </ul>
                                                <div class="todo-list">
                                                    <div class="todo-item">
                                                        <input type="checkbox" id="todo1" />
                                                        <label for="todo1">Information</label>
                                                        <a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a>
                                                    </div>
                                                    <div class="todo-item">
                                                        <input type="checkbox" id="todo2" />
                                                        <label for="todo2">Transaction monitoring</label>
                                                        <a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a>
                                                    </div>
                                                    <div class="todo-item complete">
                                                        <input type="checkbox" id="todo3" checked/>
                                                        <label for="todo3">Eagle's Eye</label>
                                                        <a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a>
                                                    </div>
                                                    <div class="todo-item complete">
                                                        <input type="checkbox" id="todo4" checked/>
                                                        <label for="todo4">Fronted Theme</label>
                                                        <a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a>
                                                    </div>
                                                    <div class="todo-item">
                                                        <input type="checkbox" id="todo5" />
                                                        <label for="todo5">Learn C# programming language</label>
                                                        <a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="material-icons">delete</i></a>
                                                    </div>
                                                </div>
                                                <div class="all-check">
                                                    <input type="checkbox" id="all-complete">
                                                    <label for="all-complete">Mark all as complete</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
            <!--source tab-->
            <div id="apet">
                <div class="card" style="height: 500px;">
                    <div class="card-content ">
                        <span>appetite coming soon!!</span>
                    </div>
                </div>
            </div>
            <!--end of source tab-->
            <!--source tab-->
            <div id="data">
                <div class="card" style="height: 500px;">
                    <div class="card-content ">
                        <span>data coming soon!!</span>
                    </div>
                </div>
            </div>
            <!--end of source tab-->
            <!--enhanced due deligence transaction tab-->

            <div id="mitigate">
                <div class="card" style="height: 500px;">
                    <div class="card-content ">
                        <!--<span>Mitigation  coming soon!!</span>-->
                        <div class="fixed-action-btn" style="bottom: 150px; right: 24px;">
                            <a class="btn-floating btn-large darken-1waves-effectwaves-effect">
                                <i class="large material-icons tooltipped" data-position="left" data-delay="0" data-tooltip="Create Measures">mode_edit</i>
                            </a>
                            <ul>
                                <li><a class="btn-floating grey darken-1waves-effect waves-light modal-trigger tooltipped" data-position="left" data-delay="0" data-tooltip="Others" href="#eev" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
                                        <i class="material-icons">album</i></a></li>
                                <li><a class="btn-floating blue-grey darken-1waves-effect waves-light modal-trigger tooltipped" data-position="left" data-delay="0" data-tooltip="Eagle's View Approval" href="#eev" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
                                        <i class="material-icons">done_all</i></a></li>
                                <li><a class="btn-floating red darken-1waves-effect waves-light modal-trigger tooltipped" data-position="left" data-delay="0" data-tooltip="Transaction Monitoring" href="#tm" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
                                        <i class="material-icons">trending_up</i></a></li>
                                <li><a class="btn-floating blue darken-1waves-effect waves-light modal-trigger btn tooltipped" data-position="left" data-delay="0" data-tooltip="Information Requirement" href="#ir" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;">
                                        <i class="material-icons">view_list</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="ir" class="modal modal-action" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                    <div class="modal-content">
                        <h5>Information Requirement</h5>
                        <div class="row">
                            <!--<div class="modal-content">-->
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input  type="text" class="validate" required name="name">
                                        <label for="to">Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  type="text" class="validate" required name="description">
                                        <label for="subject">Description</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="submit" class="btn btn-default modal-action modal-close">Submit</button>-->
                        <button type="submit" class="btn-flat waves-effect waves-blue">Submit</button>
                        <a href="#" class="modal-action waves-effect waves-blue btn-flat ">Cancel</a>   
                    </div>
                </div>
                <div id="tm" class="modal modal-content" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <div class="modal-content">
                        <h5>Transaction Monitoring Rule</h5>
                        <div class="row">
                            <form class="col s12" action="" method="POST">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="to" type="text" class="validate" name="doc_name"/>
                                        <label for="to">Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="subject" type="text" class="validate">
                                        <label for="subject">Description</label>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="modal-footer">
                                        <button type="submit" class="waves-effect waves-light btn cyan darken-1">Submit</button>
                                        <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                                    </div>  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="eev" class="modal modal-content">
                    <h5>Risk Approval Levels</h5>
                    <div class="row">
                        <form class="col s12" action="#">
                            <table id="examplee5" class="display responsive-table datatable-example"> 
                                <thead>
                                    <tr>
                                        <th>Client Types</th>
                                        <th>Status</th>
                                        <th>Created On</th>
                                        <th>Approved On</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Client Types</th>
                                        <th>Status</th>
                                        <th>Created On</th>
                                        <th>Approved on</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>                                  
                                        <td><input type="checkbox" id="off" />
                                            <label for="off">Officer</label></td>
                                        <td>N</td>
                                        <td>02/sept/2014</td>
                                        <td>01/feb/2015</td>
                                    </tr>
                                    <tr>                                  
                                        <td> <input type="checkbox" id="sup" />
                                            <label for="sup">Supervisor</label>
                                        </td>
                                        <td>N</td>
                                        <td>02/sept/2014</td>
                                        <td>01/feb/2015</td>
                                    </tr>
                                    <tr>                                  
                                        <td><input type="checkbox" id="man" />
                                            <label for="man">Manager</label></td>
                                        <td>N</td>
                                        <td>02/sept/2014</td>
                                        <td>01/feb/2015</td>
                                    </tr>
                                    <tr>                                  
                                        <td> <input type="checkbox" id="exoff" />
                                            <label for="exoff">Executive Officer</label></td>
                                        <td>N</td>
                                        <td>02/sept/2014</td>
                                        <td>01/feb/2015</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group"> 
                                <div class="modal-footer">
                                    <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Submit</a>
                                    <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end enhanced due deligence transaction tab-->
            <!--enhanced due deligence transaction tab-->
            <div id="incident">
                <div class="card" style="height: 500px;">
                    <div class="card-content ">
                        <span>incidents  coming soon!!</span>
                    </div>
                </div>
            </div>
            <!--end enhanced due deligence transaction tab-->
        </div>
    </div>