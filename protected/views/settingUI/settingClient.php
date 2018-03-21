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
                            <div class="col s12 m6 20">
                                <div class="indicator" style="right: 420px; left: 0px;">
                                    <ul class="tabs tabs-demo z-depth-0" style="width: 100%;">
                                        <li class="tab col s3"><a href="#info" class="active">Drafts<span>&nbsp;&nbsp;&nbsp;(3)</span></a></li>
                                        <li class="tab col s3"><a href="#approved">inbox<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                        <li class="tab col s3"><a href="#review">APPROVED<span>&nbsp;&nbsp;&nbsp;(3)</span></a> </li>
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

                <div id="info">
                    
                    <!--To create a new information requirement-->
                    <div id="create_info" class="modal modal-action modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <!--<form action="info_req.action" method="POST">-->
                            <h5>Create Information Requirement</h5>
                            <div class="card">
                                <div class="card-content">
                            <div class="modal-content">
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
                                <span>Select client types</span>
                                <div class="row s12">
                                    <div class="col s3">
                                        <input type="checkbox" id="minor">
                                        <label for="minor">Minor</label><br/>
                                        <input type="checkbox" id="minor">
                                        <label for="minor">Minor</label><br/>
                                        <input type="checkbox" id="minor">
                                        <label for="minor">Minor</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="ind">
                                        <label for="ind">Individual</label><br/>
                                        <input type="checkbox" id="ind">
                                        <label for="ind">Individual</label><br/>
                                        <input type="checkbox" id="ind">
                                        <label for="ind">Individual</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="bank">
                                        <label for="bank">Bank</label><br/>
                                        <input type="checkbox" id="bank">
                                        <label for="bank">Bank</label><br/>
                                        <input type="checkbox" id="bank">
                                        <label for="bank">Bank</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="co">
                                        <label for="co">Cooporate</label><br/>
                                        <input type="checkbox" id="co">
                                        <label for="co">Cooporate</label><br/>
                                        <input type="checkbox" id="co">
                                        <label for="co">Cooporate</label><br/>
                                    </div>
                                </div>
                             </div>
                             </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="modal-close btn-flat waves-effect waves-blue">Submit</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
                            </div>
                        </form>
                    </div>
                    <!--edit information requirement-->
                    <div id="edit_info" class="modal modal-action modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 440.87px;">
                        <form action="" method="">
                            <!--<form action="info_req.action" method="POST">-->
                            <div class="modal-content">
                            <h5>Edit Information Requirement</h5>
                                <div class="card">
                                    <div class="card-content">
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
                                <span>Select client types</span>
                                <div class="row s12">
                                    <div class="col s3">
                                        <input type="checkbox" id="minor">
                                        <label for="minor">Minor</label><br/>
                                        <input type="checkbox" id="minor1" checked="checked">
                                        <label for="minor1">Minor1</label><br/>
                                        <input type="checkbox" id="minor2">
                                        <label for="minor2">Minor2</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="ind">
                                        <label for="ind">Individual</label><br/>
                                        <input type="checkbox" id="ind1" checked="checked">
                                        <label for="ind1">Individual1</label><br/>
                                        <input type="checkbox" id="ind2" checked="checked">
                                        <label for="ind2">Individual2</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="bank">
                                        <label for="bank">Bank</label><br/>
                                        <input type="checkbox" id="bank1" checked="checked">
                                        <label for="bank1">Bank1</label><br/>
                                        <input type="checkbox" id="bank2" checked="checked">
                                        <label for="bank2">Bank2</label><br/>
                                    </div>
                                    <div class="col s3">
                                        <input type="checkbox" id="co">
                                        <label for="co">Cooporate</label><br/>
                                        <input type="checkbox" id="co1" checked="checked">
                                        <label for="co1">Cooporate1</label><br/>
                                        <input type="checkbox" id="co2" checked="checked">
                                        <label for="co2">Cooporate2</label><br/>
                                    </div>
                                </div>
                            </div>
                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="modal-close btn-flat waves-effect waves-blue">Update</button>
                                <button type="" class="modal-close btn-flat waves-effect waves-blue">Delete</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>   
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col s12 m3">
                            <div class="row">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="tabs-vertical">
                                            <ul class="tabs z-depth-0">
                                                <li class="tab">
                                                    <a class="active" href="#forclienttype">Customer Types<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                                </li>
                                                <li class="tab">
                                                    <a href="#forinformation">Information Requirements<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                                </li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m9">
                            <div id="forclienttype">
                                <div class="card" style="height: 585px;">
                                    <div class="card-content ">
                                       
                                       <!--#####################################################-->
                                       <div class="row">
                                        <div class="col s12 m3">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="tabs-vertical">
                                                            <ul class="tabs z-depth-0">
                                                                <li class="tab">
                                                                    <a class="active" href="#cminor">Minor<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                                                </li>
                                                                <li class="tab">
                                                                    <a href="#cbank">Bank<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                                                </li>
                                                                <li class="tab">
                                                                    <a href="#ccooporate">Cooporate<span>&nbsp;&nbsp;&nbsp;(2)</span></a> 
                                                                </li>
                                                                <li class="tab">
                                                                    <a href="#cindividual">Individual<span>&nbsp;&nbsp;&nbsp;(3)</span></a> 
                                                                </li>
                                                                <li class="tab">
                                                                    <a href="#cemployee">Employee<span>&nbsp;&nbsp;&nbsp;(5)</span></a> 
                                                                </li>
                                                                <li class="tab">
                                                                    <a href="#cstudent">Student<span>&nbsp;&nbsp;&nbsp;(0)</span></a> 
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m9">
                                            <div id="cminor">
                                                <div class="card" style="height: 450px;">
                                                    <div class="card-content ">
                                                        <table id="info_req" class="display responsive-table datatable-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Created On</th>
                                                                    <th>Created By</th>
                                                                </tr>
                                                            </thead>
                <!--                                                            <tfoot>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Last Date MOdified</th>
                                                                </tr>
                                                            </tfoot>-->
                                                            <tbody>
                                                                <tr onclick="document.location= '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingClientInfo';">
                                                                    <td>Identification</td>
                                                                    <td>23-Mar-2017</td>
                                                                    <td>Patrick Muhabura</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nationality</td>
                                                                   <td>08-Jan-2017</td>
                                                                   <td>Patrick Muhabura</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date Of Birth</td>
                                                                   <td>08-Jan-2017</td>
                                                                   <td>Patrick Muhabura</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Country of Origin</td>
                                                                   <td>08-Jan-2017</td>
                                                                   <td>Patrick Muhabura</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Place of Origin</td>
                                                                   <td>08-Jan-2017</td>
                                                                   <td>Patrick Muhabura</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Place of Birth</td>
                                                                   <td>08-Jan-2017</td>
                                                                   <td>Patrick Muhabura</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="cbank">
                                                <div class="card">
                                                    <div class="card-content" style="height: 450px;">
                                                        bankee
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="ccooporate">
                                                <div class="card">
                                                    <div class="card-content" style="height: 450px;">
                                                        <!--accordion-->eee
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="cindividual">
                                                <div class="card">
                                                    <div class="card-content" style="height: 450px;">
                                                        <!--accordion-->gg
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="cemployee">
                                                <div class="card">
                                                    <div class="card-content" style="height: 450px;">
                                                        <!--accordion-->hhh
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="cstudent">
                                                <div class="card">
                                                    <div class="card-content" style="height: 450px;">
                                                        <!--accordion-->sssss
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <!--#####################################################-->
                                       
                                       
                                    </div>
                                </div>
                                <div class="fixed-action-btn" style="bottom: 15px; right: 24px;">
                        <a class="btn-floating btn-large darken-1waves-effectwaves-effect">
                            <i class="large material-icons">mode_edit</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating blue bluewaves-effectwaves-effect waves-light red modal-trigger" href="#create_info" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">add</i></a></li>
                        </ul>
                    </div>
                            </div>

                            <div id="forinformation">
                                <div class="card">
                                    <div class="card-content" style="height: 585px;">
                                        <table id="info_req" class="display responsive-table datatable-example">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date Created</th>
                                                    <th>Created By</th>
                                                </tr>
                                            </thead>
<!--                                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Last Date MOdified</th>
                                                </tr>
                                            </tfoot>-->
                                            <tbody>
                                                <tr>
                                                    <td><a href="#edit_info" class="modal-trigger"><span style="color: gray;">Identification</span></a></td>
                                                    <td>23-Mar-2017</td>
                                                    <td>Patrick Muhabura</td>
                                                </tr>
                                                <tr class="todo-item">
                                                    <td><a href="#edit_info" class="modal-trigger"><span style="color: gray;">Nationality</span></a></td>
                                                    <td>08-Jan-2017</td>
                                                    <td>Patrick Muhabura</td>
                                                </tr>
                                                <tr class="todo-item">
                                                    <td><a href="#edit_info" class="modal-trigger"><span style="color: gray;">Place Of Birth</span></a></td>
                                                   <td>05-June-2013</td>
                                                    <td>Patrick Muhabura</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#edit_info" class="modal-trigger"><span style="color: gray;">Country Of Birth</span></a></td>
                                                    <td>21-Feb-2017</td>
                                                    <td>Patrick Muhabura</td>
                                                </tr>
                                                <tr class="todo-item">
                                                    <td><a href="#edit_info" class="modal-trigger"><span style="color: gray;">Residence Of Origin</span></a></td>
                                                   <td>05-Oct-2014</td>
                                                    <td>Patrick Muhabura</td>
                                                </tr>
                                                <tr class="todo-item">
                                                    <td><a href="#edit_info" class="modal-trigger"><span style="color: gray;">Place of Birth</span></a></td>
                                                   <td>04-April-2012</td>
                                                    <td>Patrick Muhabura</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Start of data tab-->
                <div id="rejected" class="col s12 m12 l12" style="display: none;">
                    <div class="card">
                        <div class="card-content">
                            <span><h4>Rejected Coming Soon!!</h4></span>
                        </div>
                    </div>
                </div>

                <!--End of peer tab-->
                <!--Start of data tab-->
                <div id="review" class="col s12 m12 l12" style="display: none;">
                    <div class="card">
                        <div class="card-content">
                            <span><h4>Review Coming Soon!!</h4></span>
                        </div>
                    </div>
                </div>
                <!--End of data tab-->
                <!--Start of data tab-->
                <div id="approved" class="col s12 m12 l12" style="display: none;">
                    <div class="card">
                        <div class="card-content">
                            <span><h4>approved Coming Soon!!</h4></span>
                        </div>
                    </div>
                </div>
                <!--End of data tab-->

                <!--Start of accounts sdd-->
                <div id="acc" class="col s12 m12 l12" style="display: none;">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card">
                                <div class="card-content">

                                    <ol class="collapsible popout collapsible-accordion" data-collapsible="accordion">
                                        <select>
                                            <option value="" disabled selected>Sort by</option>
                                            <option value="1">Draft</option>
                                            <option value="2">Rejected</option>
                                            <option value="3">Review</option>
                                        </select>
                                        <li>
                                            <div class="collapsible-header">Expected Turn over</div>
                                            <div class="collapsible-body grey lighten-5" style="display: block;">
                                                <div class="row">
                                                    <div class="row"></div>
                                                    <div class="col s12 m6">
                                                        <div class="card" style="height: 250px;">
                                                            <div class="card-content">
                                                                <div class="row s12 m6">
                                                                    <div class="col m2">
                                                                        <span style="font-size: 16px;">Question</span>
                                                                    </div>
<!--                                                                                    <div class="col m2">
                                                                        <a href="#question" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Add Question"> 
                                                                            <i class="material-icons">add circle outline</i>
                                                                        </a>
                                                                    </div>-->
                                                                    <div class="col m5">
                                                                        <span>Fathers Job?</span>
                                                                    </div>
                                                                    <div class="col m2">
                                                                        <a href="#editqn" class="modal-trigger tooltipped" data-position="left" data-delay="50" data-tooltip="Edit Question"><i class="material-icons">edit</i></a>
                                                                    </div>
                                                                    <div class="col m1">
                                                                        <a href="#options" class="modal-trigger darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Attach Options"><i class="material-icons">attachment</i></a>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="row"></div>-->
                                                                <div class="divider"></div>
                                                                <div class="row s12 m12">
                                                                    <div class="chip">
                                                                        Teacher
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        AIGP
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Bussiness
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Slasher
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Accountant
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Doctor
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Conductor
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Cleaner
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Lecturer
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Salesman
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <div class="card" style="height: 250px;">
                                                            <div class="card-content">
                                                                <div class="row">
                                                                    <div class="col m11">
                                                                        <span style="font-size: 14px;">Document Types</span>
                                                                    </div>

                                                                    <div class="col m1">
                                                                        <a href="#accopendocs" class="modal-trigger">
                                                                            <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Attach Document">add circle outline</i>
                                                                        </a>
                                                                    </div> 
                                                                    <!--<div class="row"></div>-->
                                                                </div>
                                                                <div class="divider"></div>
                                                                <div class="row s12 m12">
                                                                    <div class="chip">
                                                                        Passport
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Permit
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Lc letter
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        National id
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        NIC
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Incoporation
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Marriage certificate
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Police Letter
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        Rdc 
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                    <div class="chip">
                                                                        President approval
                                                                        <i class="close material-icons">close</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="right-align">
                                                    <a type="#" class="waves-effect waves-blue btn-flat sweetalert-basic">Delete</a>
                                                    <button type="#" class="waves-effect waves-blue btn-flat ">Reset</button>
                                                    <a href="#" class="waves-effect waves-blue btn-flat">Submit</a> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Purpose</div>
                                            <div class="collapsible-body" style="display: block;">
                                                <p>fkdjnsznlav</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Purpose1</div>
                                            <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Purpose2</div>
                                            <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Purpose3</div>
                                            <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Purpose4</div>
                                            <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Purpose5</div>
                                            <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header">Purpose6</div>
                                            <div class="collapsible-body" style=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fixed-action-btn" style="bottom: 15px; right: 24px;">
                        <a class="btn-floating btn-large darken-1waves-effectwaves-effect">
                            <i class="large material-icons">mode_edit</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating greenwaves-effectwaves-effect waves-light red modal-trigger" href="#create_iracc" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">add</i></a></li>
                        </ul>
                    </div>

                    <!--To create accounts Info requirement-->
                    <div id="create_iracc" class="modal modal-content" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                        <div class="modal-content">
                            <h5>Information Requirement</h5>
                            <form class="col s12" action="" method="">
                                <div class="row">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="input-field col s12">
                                                <input id="to" type="text" class="validate" name="doc_name"/>
                                                <label for="to">Name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="to" type="text" class="validate" name="doc_name"/>
                                                <label for="to">Description</label>
                                            </div>
                                            <table>
                                                <tr>
                                                <span>Select required attachment level</span>
                                                <td> <input type="checkbox" id="accd" class="validate"/>
                                                    <label for="accd">Document Type</label></td>
                                                <td><input type="checkbox" id="accqn" class="validate" />
                                                    <label for="accqn">Question</label></td>

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-group"> 
                            <div class="modal-footer">
                                <button type="#" class="waves-effect waves-light btn cyan darken-1">Submit</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                            </div>  
                        </div>
                    </div>
                </div>

                <!--End of accounts Tab-->
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

                <!--question edit-->
                <div id="editqn" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <div class="modal-content">
                        <h5>Edit Question</h5>
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="input-field col s12">
                                        <input id="new_question" type="text" class="add-task">
                                        <label for="new_question">Edit Question</label>
                                    </div>
                                    <div>
                                        <p>
                                            Choose category
                                        </p>
                                        <input type="radio" name="qntype" id="checkboxx" checked />
                                        <label for="checkboxx">Allow Multiple option selection</label>
                                        <input type="radio" name="qntype" id="radioo" />
                                        <label for="radioo">Only one out of option selection</label>
                                        <input type="radio" name="qntype" id="textfld" />
                                        <label for="textfld">Empty text field to fill out</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="modal-footer">
                            <button type="#" class="waves-effect waves-light btn cyan darken-1">Update</button>
                            <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                        </div>  
                    </div>
                </div>  

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
                    <div class="card">
                        <div class="card-content">
                            <div class="modal-content">
                                <h5>Add Document Type</h5>
                                <select class="tokenizationSelect2" multiple="true" style="width: 100%;">
                                    <option value="passport">passport</option>
                                    <option value="national">National </option>
                                    <option value="permit">Permit</option>
                                    <option value="Certificate of incorporation">Certificate of incorporation</option>
                                    <option value="Birth">Birth Certificate</option>
                                </select>
                                <script>
                                    $(document).ready(function () {
                                        $(".tokenizationSelect2").select2({
                                            placeholder: "Select document", //placeholder
                                            tags: true,
                                            tokenSeparators: ['/', ',', ';', " "]
                                        });
                                    })
                                </script> 
                            </div>                                 
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="modal-footer">
                            <button type="" class="modal-action modal-close waves-effect waves-blue btn-flat ">Submit</button>
                            <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                        </div>
                    </div>       
                </div>

                 <!--adding page ination-->
                            <ul class="pagination right">
                                <li class="waves-effect" style="right: 24px;"><a  onclick="prev();" ><i class="material-icons">chevron_left</i></a></li>
                                <li class="waves-effect" style="right: 24px;"><a id='foo'>1/<%=pages%></a></li>
                                <li class="waves-effect" style="right: 24px;" onclick="next();" ><a ><i class="material-icons">chevron_right</i></a></li>
                            </ul> 
                            <script>
                                currentPage = 1;
                                function prev() {
                                    currentPage = currentPage - 1;
                                    showPage(currentPage);
                                }
                                function showPage(pageNumber) {
                                    pageNumber = parseInt(pageNumber);
                                    if (pageNumber <= 0) {
                                        pageNumber = 1;
                                    }
                                    if (pageNumber >= <%=pages%>) {
                                        pageNumber = <%=pages%>;
                                    }
                                    $(".pagelist").addClass('hide');
                                    $("#cl" + pageNumber).removeClass('hide');
                                    $("#foo").html(pageNumber + "/" + <%=pages%>);
                                    //                                                $(".jb").addClass('hide');
                                    var firstItemX = (pageNumber * 4) - 3;
                                    //                                                $('.c'+firstItemX).removeClass('hide');
                                    currentPage = parseInt(pageNumber);
                                }
                                function next() {
                                    currentPage = currentPage + 1;
                                    showPage(currentPage);
                                }
                            </script>
            </div> 
            <!--End of search page results-->
        </div>
    </div>
</div>
