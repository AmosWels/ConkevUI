<?php

class SettingUIController extends Controller {

    public function actionPanel() {
        $this->render('panel');
    }

    public function actionSettingsdd() {
        $this->render('settingsdd');
    }

    public function actionSettingclient() {
        $this->render('settingClient');
    }

    public function actionSettingclientInfo() {
        $this->render('settingClientInfo');
    }

    public function actionSettingAccount() {
        $this->render('settingAccount');
    }

    public function actionSettingAccountInfo() {
        $this->render('settingAccountInfo');
    }

    public function actionAllSettingClientInfoReq() {
        $this->render('AllSettingClientInfoReq');
    }

    public function actionSettingDocument() {
        $this->render('settingDocument');
    }

    public function actionSettingClientchange() {
        $this->render('settingClientchange');
    }

    public function actionSettingQuestion() {
        $this->render('settingQuestion');
    }

    public function actionSettingRisk() {
        $this->render('settingRisk');
    }

    public function actionSettingRiskEdit() {
        $this->render('settingRiskEdit');
    }

    public function actionSettingRiskScale() {
        $this->render('settingRiskScale');
    }

    public function actionSettingRiskScaleEdit() {
        $this->render('settingRiskScaleEdit');
    }

    public function actionSettingAjak() {
        $this->render('settingajak');
    }

    public function actionNewCustomerApply() {
        $this->render('NewCustomerApply');
    }

    public function actionNewCustomerInfo() {
        $this->render('NewCustomerInfo');
    }
    
    public function actionNewCustomerInfo18sept() {
        $this->render('NewCustomerInfo18sept');
    }

    public function actionNewProspectInfo() {
        $this->render('NewProspectInfo');
    }

    public function actionsettingRiskQuestion() {
        $this->render('settingRiskQuestion');
    }

    public function actionsettingCustomerEdd() {
        $this->render('settingCustomerEdd');
    }

    public function actionsettingCustomerCategory() {
        $this->render('settingCustomerCategory');
    }

    public function actionsettingCustomerRegistration() {
        $this->render('settingCustomerRegistration');
    }

    public function actionsettingList() {
        $this->render('settingList');
    }

    public function actionsettingListUpload() {
        $this->render('settingListUpload');
    }

    public function actionsettingListPercentage() {
        $this->render('settingListPercentage');
    }

    public function actionSearchCertificate() {
        $this->layouts = 'SearchCertificate';
        $this->render('SearchCertificate');
    }

    public function actionSanctionmodals() {
        $this->render('Sanctionmodals');
    }
    
    public function actionExternalData() {
        $this->render('ExternalData');
    }
    
    public function actionAdditionalData() {
        $this->render('AdditionalData');
    }
    
    public function actionCustomerDocs() {
        $this->render('CustomerDocs');
    }
    
    public function actionSanctionCustomer() {
        $this->render('SanctionCustomer');
    }
    
    public function actionRiskAssesment() {
        $this->render('RiskAssesment');
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
