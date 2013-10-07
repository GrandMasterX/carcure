<?php

    final class PreDefineUrl {

        public static function SiteUrl() {
            $array = array();
            return Yii::app()->createUrl('site/', $array);
        }
        
        public static function AboutUrl() {
            $array = array();
            return Yii::app()->createUrl('about/', $array);
        }

        public static function FindServiceUrl() {
            $array = array();
            return Yii::app()->createUrl('findservice/', $array);
        }
        
        
        public static function RegistrationUrl() {
            $array = array();
            return Yii::app()->createUrl('registration/', $array);
        }

        public static function VoteUrl() {
            $array = array();
            return Yii::app()->createUrl('vote/', $array);
        }        
        
        public static function ContactsUrl() {
            $array = array();
            return Yii::app()->createUrl('contacts/', $array);
        }
        
        public static function ActionsUrl() {
            $array = array();
            return Yii::app()->createUrl('actions/', $array);
        }
        
        public static function AutopediaUrl() {
            $array = array();
            return Yii::app()->createUrl('autopedia/', $array);
        }        
 
        public static function TipsUrl() { 
            $array = array();
            return Yii::app()->createUrl('tips/', $array);
        }        

        public static function ReportUrl() { 
            $array = array();
            return Yii::app()->createUrl('report/', $array);
        }        

        public static function ComplaneUrl() {
            $array = array();
            return Yii::app()->createUrl('complane/', $array);            
        }

        public static function AccountUrl() {
            $array = array();
            return Yii::app()->createUrl('account/', $array);            
        }
        
        
        public static function CssCurrentUrl($pagename, $type='main') {
             
            if(strtolower($pagename) == strtolower(Yii::app()->controller->id)) {
                if($type == 'main') {
                    return 'class="current"';
                } else if ($type == 'submain') {
                    return 'current';
                }
            }
            return '';
        }
        
    }

    
?>
