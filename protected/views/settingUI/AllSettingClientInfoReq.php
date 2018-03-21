
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
<!--                        <div class="row search-tabs-row search-tabs-container grey lighten-4">
                            <div class="col s12 m6 20">
                                <div class="indicator" style="right: 420px; left: 0px;">
                                    <ul class="tabs tabs-demo z-depth-0" style="width: 100%;">
                                        <li class="tab col s3"><a href="#info" class="active">Drafts<span>&nbsp;&nbsp;&nbsp;(3)</span></a></li>
                                        <li class="tab col s3"><a href="#approved">inbox<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                        <li class="tab col s3"><a href="#review">APPROVED<span>&nbsp;&nbsp;&nbsp;(3)</span></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
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
                                <span>Select Customer types</span>
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
                                            <p class="m-t-lg tooltipped" data-position="top" data-delay="50" data-tooltip="View/Edit/Delete" style="font-size: 16px;">Information Requirements</p>
                                        </div>
                                         <br/><br/>
                                           <a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingClient"><span style="color: gray; text-decoration: underline;" 
                                                                             >Information Requirements by Customer Types</span>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m9">
                            <div id="all_info">
                                <div class="card">
                                    <div class="card-content">
                                        <table id="all_info_req" class="display responsive-table datatable-example">
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
                </div>
                    </div>
                    <div class="divider"></div>

                </div>
                <!--End of Resources Tab-->
                 <!--adding page ination-->
            </div> 
            <!--End of search page results-->
        </div>
    </div>
</div>
