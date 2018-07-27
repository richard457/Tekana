<?php namespace Tekana\Auth;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class TekanaAuth{
   private $app_id;
   private $app_secret;

   public function __construct(string $app_id,string $app_secret)
   {
       $this->app_id = $app_id;
       $this->app_secret = $app_secret;
   }

   public function getRedirectLoginHelper($param1){

       $query = http_build_query([
           'client_id' => '3',
           'redirect_uri' => 'http://localhost:9000/callback',
           'response_type' => 'code',
           'scope' => '',
       ]);

       header("Location: ".'http://localhost:8000/oauth/authorize?'.$query); //core user

   }
}