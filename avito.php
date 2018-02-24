<?php
/**
 * Created by PhpStorm.
 * User: kolsha
 * Date: 10.09.17
 * Time: 18:20
 */

class Avito
{
    public $proxy      = null;
    public $last_error = null;

    private static $API_ROOT       = '';
    private static $API_KEY        = '';
    private static $API_SECRET_KEY = '';

	#---------------------------------------------#
    public function __construct();
    #---------------------------------------------#
    public function IsAuthorized();
    #---------------------------------------------#
    public function Auth($login, $pass);
    #---------------------------------------------#
    public function GetProfileAds();
    #---------------------------------------------#
    public function GetAd($id);
    #---------------------------------------------#
    public function GetAds($_params);
    #---------------------------------------------#
    public function GetParamsFromLink($lnk);
    #---------------------------------------------#
    public function UpLoadImg($img);
    #---------------------------------------------#
    public function ActivateAd($id);
    #---------------------------------------------#
    public function GetMessChannels($offset = 0, $limit = 20, $itemId = null);
    #---------------------------------------------#
    public function CreateChannelByItemId($itemId);
    #---------------------------------------------#
    public function SendMsgByChanId($chanId, $text);
    #---------------------------------------------#
    public function PayUpByDefCard($id);
    #---------------------------------------------#
    public function PayUpByDefWallet($id);
    #---------------------------------------------#
    public function GetLocations($loc = 'top');
    #---------------------------------------------#
    public function GetCats();
    #---------------------------------------------#

}
