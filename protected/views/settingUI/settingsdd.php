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
                                <li class="s3"><span style="font-size: 20px;">Standard Due Deligence</span></li>
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
    
    <div class="col s12 m12 l12">
        <div class="card">
            <div class="card-content">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">Name</th>
                            <th data-field="name">Drafts</th>
                            <th data-field="price">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr onclick="document.location= '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingDocument';">
                            <td>Document Types</td>
                            <td>34</td>
                            <td>23</td>
                        </tr>
                        <tr onclick="document.location= '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingQuestion';">
                            <td>Question</td>
                            <td>34</td>
                            <td>23</td>
                        </tr>
                        <tr onclick="document.location= '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingClientchange';">
                            <td>New Customer</td>
                            <td>45</td>
                            <td>50</td>
                        </tr>
                        <tr onclick="document.location= '<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingAccount';">
                            <td>New Accounts</td>
                            <td>34</td>
                            <td>23</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>