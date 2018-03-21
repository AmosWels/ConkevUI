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
<!--                                    <li class="s3"><a href="#" class="tooltipped waves-effect waves-teal btn-flat right" data-position="top" data-delay="50" data-tooltip="Delete">Delete</a></li>
                                    <li class="s3"><a href="#" class="tooltipped waves-effect waves-teal btn-flat right" data-position="top" data-delay="50" data-tooltip="Submit">Submit</a></li>-->
                                    <li class="s3"><span style="font-size: 20px;">Bank of Uganda AML</span></li>
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
        <div class="col s12 m4">
            <div class="row s12">
                <div class="card">
                    <div class="card-content">
                        <a href="#editscale" class="modal-trigger tooltipped" data-position="top" data-delay="20" data-tooltip="Edit Scale" style="margin-left: 300px;"><i class="material-icons tiny ">edit</i></a>
                        <div class="row s12">
                            <li><span class=" m-t-sm left-align" style="font-size: 16px;">Scale Name</span><br/></li>
                            <span style="font-style: italic; margin: 25px;">Bank Of Uganda AML</span>
                        </div>
                        <div  class="row s12">
                            <li><span class=" m-t-sm left-align" style="font-size: 16px;">Scale Type</span><br/></li>
                            <span style="font-style: italic; margin: 25px;">Quantitative</span>
                        </div>
                        <div class="row s12" >
                            <li><span class=" m-t-sm left-align"style="font-size: 16px;">Purpose</span><br/></li>
                            <span style="font-style: italic; margin: 25px;">Consolidated Risk</span>
                        </div>
                        <div class="row s12">
                            <li><span class=" m-t-sm left-align" style="font-size: 16px;">Description</span><br/></li>
                            <span style="font-style: italic; margin: 25px;">The kind of scale is used fro banks in.</span> 
                        </div>
                    </div>
                </div>
            </div>
            <!--edit setting risk-->
                  <div id="editscale" class="modal modal-fixed-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 250.516304347826px;">
                    <form class="col s12" action="" method="POST">
                        <div class="modal-content">
                            <h5>Edit Scale</h5>
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
                                                <input type="checkbox" id="qt" checked="checked" />
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
                                        <!--<button type="submit" class="btn btn-default modal-action modal-close">Submit</button>-->
                                        <button type="submit" class="modal-action modal-close waves-effect waves-blue blue btn">Update</button>
                                        <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Reset</a>   
                                    </div>
                                </div>
                            </form>
                    </div>
        </div>

        <div class="col s12 m8">
            <div class="card" style="height: 400px;">
                <div class="card-content ">
                    <!--<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>-->
                    <table id="examplesunit1" class="display responsive-table datatable-example">
                        <thead>
                            <tr>
                                <th>Value</th>
                                <th>Unit Descriptor</th>
                                <th>Unit Description</th>
                            </tr>
                        </thead>
<!--                                        <tfoot>
                            <tr>
                                <th>Unit Name</th>
                                <th>Unit Description</th>
                                <th>Value</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>-->
                        <tbody>
                            <tr >
                                <td><a href="#addD"class="modal-trigger" >1000</a></td>
                                <td>Low</td>
                                <td>Low risk</td>
                            </tr>
                            <tr>
                                <td><a href="#addD" class="modal-trigger">2000</a></td>
                                <td>Medium</td>
                                <td>Medium risk</td>
                            </tr>
                            <tr>
                                <td><a href="#addD" class="modal-trigger">3000</a></td>
                                <td>High</td>
                                <td>High Risk</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
             <div class='row right-align'>
                <button type="" class="modal-close btn-flat waves-effect waves"><i class="material-icons">delete</i></button>
                <button type="submit" class="modal-close btn waves-effect waves-blue blue">Submit</button>
            </div>
            
            <div class="fixed-action-btn" style="bottom: 250px; right: 24px;">
                <a href="#Create_units" class="btn-floating btn-large darken-1waves-effectwaves-effect modal-trigger tooltipped" data-position="left" data-delay="20" data-tooltip="Calibrate Scale">
                    <i class="large material-icons">mode_edit</i>
                </a>
            </div>
        </div>
            <div id="Create_units" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <form class="col s12" action="" method="POST">
                        <div class="modal-content">
                        <h5>Create Units</h5>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="to" type="number" class="validate" name="doc_name"/>
                                <label for="to">Maximum unit</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="to" type="number" class="validate" name="doc_name"/>
                                <label for="to">Minimum unit</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="to" type="number" class="validate" name="doc_name"/>
                                <label for="to">Number of Units</label>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="modal-footer">
                                <button type="submit" class="modal-action modal-close waves-effect waves-light btn cyan darken-1">Submit</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                            </div>  
                        </div>
                        </div>
                    </form>
            </div>
            <div id="addD" class="modal modal-footer" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 395.652px;">
                    <form class="col s12" action="" method="POST">
                        <div class="modal-content">
                        <h5>Complete Unit</h5>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="to" type="text" class="validate" name="doc_name"/>
                                <label for="to">Descriptor</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="to" type="text" class="validate" name="doc_name"/>
                                <label for="to">Description</label>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="modal-footer">
                                <button type="submit" class="modal-action modal-close waves-effect waves-light btn cyan darken-1">Save</button>
                                <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
                            </div>  
                        </div>
                        </div>
                    </form>
            </div>
    </div>