<li class="no-padding active"><a class="waves-effect waves-grey active" href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=site/index"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
<li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/panel"><i class="material-icons">settings_input_svideo</i>Settings</a></li>
<li class="no-padding">
    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Business Process<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
    <div class="collapsible-body">
        <ul>
            <li><a href="mailbox.html">New Account</a></li>
            <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/NewCustomerApply">New Customer</a></li>
            <li><a href="mailbox.html">Debt Transaction</a></li>
            <li><a href="search.html">Credit Transaction</a></li>
        </ul>
    </div>
</li>
<li class="no-padding">
    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">reorder</i>Conkevlists<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
    <div class="collapsible-body">
        <ul>
            <li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/settingListUpload">Upload</a></li>
            <li><a href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/NewCustomerApply">Possible Matches</a></li>
            <li><a href="mailbox.html"><code>List_action</code></a></li>
        </ul>
    </div>
</li>
<li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/panel"><i class="material-icons">settings_input_svideo</i>Unusual Activity</a></li>
<li class="no-padding"><a class="waves-effect waves-grey" href="<?php echo @Yii::app()->baseUrl; ?>/index.php?r=settingUI/panel"><i class="material-icons">settings_input_svideo</i>Suspicious Activity</a></li>