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
                            <div class="col s12 m6 20">
                                <div class="indicator" style="right: 420px; left: 0px;">
                                    <ul class="tabs tabs-demo z-depth-0" style="width: 100%;">
                                        <li class="tab col s3"><a href="#drafts" class="active">Drafts<span>&nbsp;&nbsp;&nbsp;(3)</span></a></li>
                                        <li class="tab col s3"><a href="#inbox">Inbox<span>&nbsp;&nbsp;&nbsp;(2)</span></a></li>
                                        <li class="tab col s3"><a href="#approved">Approved<span>&nbsp;&nbsp;&nbsp;(3)</span></a> </li>
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

<!--<div class="row"></div>-->
<div class="card card-transparent no-m">
    <div class="card-content invoice-relative-content search-results-container">
        <div class="col s12 m12 l12">
            <div class="search-page-results">

                <div id="drafts" class="row s12 m12">
                    <div class="col s12 m3">
                        <!--Prospect data-->
                        <div class="card z-depth-0">
                            <div class="card-content">
                                <div class="tabs-vertical">
                                    <ul class="tabs transparent z-depth-0">                                      
                                        <li class="tab">
                                            <a href="#br">Customers</a> 
                                        </li> <br>
                                        <li class="tab">
                                            <a href="#prospect">Prospect</a> 
                                        </li>
                                    </ul>
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                    <div class="col s12 m9">
                        <div id="br">
                        <div class="card">
                            <div class="card-content">
                                <table id="new_client_data" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Client Names</th>
                                            <th>Rim Number</th>                                            
                                            <th>Client Type</th>
                                            <th>Created On</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                        <tr onclick="location.href = '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/NewCustomerInfo'">
                                            <td>Mwesigye John Bosco </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr onclick="location.href = #">
                                            <td>Mwesigye John Bosco </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr onclick="location.href = #">
                                            <td>Mwesigye John Bosco </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr onclick="location.href = #">
                                            <td>Mwesigye John Bosco </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr onclick="location.href = #">
                                            <td>Mwesigye John Bosco </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr onclick="location.href = #">
                                            <td>Mwesigye John Bosco </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        <div id="prospect">
                        <div class="card">
                            <div class="card-content">
                                <table id="new_client_data" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Prospect Names</th>
                                            <th>Prospect Number</th>                                            
                                            <th>Type</th>
                                            <th>Nature</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>  

                                        <tr onclick="location.href = '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/NewProspectInfo'">
                                            <td>Muhabura Patrick</td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr>
                                            <td>Muhabura Patrick </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr>
                                            <td>Muhabura Patrick </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr>
                                            <td>Muhabura Patrick </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  
                                        <tr>
                                            <td>Muhabura Patrick </td>
                                            <td>291082</td>
                                            <td>Minor</td>
                                            <td>28-october-2013</td>
                                            <td>New</td>
                                        </tr>  

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="fixed-action-btn vertical" style="bottom: 45px; right: 24px;">
                            <a href="#addprospect" class="btn-floating btn-large cyan tooltipped modal-trigger"  data-position="left" data-delay="50" data-tooltip="Add Prospect">
                                <i class="large material-icons">add</i>
                            </a>
                            <!--                        <ul>
                                                        <li><a class="btn-floating cyan modal-trigger tooltipped" href="#modal4" data-position="left" data-delay="50" data-tooltip="Add External Data"><i class="material-icons">present_to_all</i></a></li>
                                                    </ul>-->
                        </div>
                        </div>
                    </div>
                </div>
                <div id="inbox">
                    <div class="card">
                        <div class="card-content">
                            <table id="" class="display responsive-table datatable-example">
                                <thead>
                                    <tr>
                                        <th>Client Names</th>
                                        <th>Rim Number</th>                                            
                                        <th>Client Type</th>
                                        <th>Created On</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                    <tr>
                                        <td>Mwesigye John Bosco </td>
                                        <td>291082</td>
                                        <td>Minor</td>
                                        <td>28-october-2013</td>
                                        <td>New</td>
                                    </tr>  
                                    <tr onclick="location.href = #">
                                        <td>Mwesigye John Bosco </td>
                                        <td>291082</td>
                                        <td>Minor</td>
                                        <td>28-october-2013</td>
                                        <td>New</td>
                                    </tr>  
                                    <tr onclick="location.href = #">
                                        <td>Mwesigye John Bosco </td>
                                        <td>291082</td>
                                        <td>Minor</td>
                                        <td>28-october-2013</td>
                                        <td>New</td>
                                    </tr>  
                                    <tr onclick="location.href = #">
                                        <td>Mwesigye John Bosco </td>
                                        <td>291082</td>
                                        <td>Minor</td>
                                        <td>28-october-2013</td>
                                        <td>New</td>
                                    </tr>  
                                    <tr onclick="location.href = #">
                                        <td>Mwesigye John Bosco </td>
                                        <td>291082</td>
                                        <td>Minor</td>
                                        <td>28-october-2013</td>
                                        <td>New</td>
                                    </tr>  
                                    <tr onclick="location.href = #">
                                        <td>Mwesigye John Bosco </td>
                                        <td>291082</td>
                                        <td>Minor</td>
                                        <td>28-october-2013</td>
                                        <td>New</td>
                                    </tr>  
                                    <tr onclick="location.href = #">
                                        <td>Mwesigye John Bosco </td>
                                        <td>291082</td>
                                        <td>Minor</td>
                                        <td>28-october-2013</td>
                                        <td>New</td>
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="approved">
                    <div class="card">
                        <div class="card-content">
                            <!--<h2>approved here</h2>-->..
                        </div>
                    </div>
                </div>
                <div id="addprospect" class="modal modal-fixed-footer grey lighten-4" >
                                    <form class="col s12">
                    <div class="modal-content">
                                <span class="card-title">Add New Prospect</span><br>
                                <div class="row s12">
                                        <div class="col s6">
                                            <div class="row card">
                                            <div class="card-content">
                                            <div class="input-field col s12">
                                                <text>Name</text>
                                                <input id="first_name" type="text" class="validate">
                                            </div>
                                            </div>
                                            </div>
                                        <div class="row card">
                                        <div class="card-content">
                                            <text>Customer Nature</text><br><br>
                                                <input type="radio" name="nature" id="np" />
                                                <label for="np">Natural Person</label><br>
                                            <input type="radio" name="nature" id="lp" />
                                            <label for="lp">Legal Person</label><br/>
                                            <input type="radio" name="nature" id="ot" />
                                            <label for="ot">Others</label><br/>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col s6 card">
                                        <div class="card-content">
                                            <text>Customer Type</text><br><br>
                                                <input type="radio" id="ct1" name="type"/>
                                                <label for="ct1">Minor</label><br>
                                                <input type="radio" id="ct2" name="type">
                                                <label for="ct2">Individual</label><br>
                                                <input type="radio" id="ct3" name="type">
                                                <label for="ct3">Group</label><br>
                                                <input type="radio" id="ct4" name="type">
                                                <label for="ct4">Bank</label><br>
                                                <input type="radio" id="ct5" name="type">
                                                <label for="ct5">Cooporate</label><br>
                                                <input type="radio" id="ct6" name="type">
                                                <label for="ct6">Bank 1</label><br>
                                                <input type="radio" id="ct7" name="type">
                                                <label for="ct7">Bank 2</label><br>
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
            </div>
        </div>
    </div> 
</div>
</div>