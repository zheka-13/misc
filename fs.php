<?php
$request  = $_POST;

//error_log(print_r($request, true));

$not_found = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<document type="freeswitch/xml">
  <section name="result">
    <result status="not found" />
  </section>
</document>';

if ($request["action"]=="sip_auth" or $request["action"]=="jsonrpc-authenticate" ){
    $login = $request["user"];
    if ($login=="test"){
        $reply = '<document type="freeswitch/xml">
          <section name="directory">
            <domain name="'.$request['domain'].'">
              <params>
                <param name="dial-string" value="{presence_id=${dialed_user}@${dialed_domain}}${sofia_contact(${dialed_user}@${dialed_domain})}"/>
              </params>
              <groups>
                <group name="default">
                 <users>
                  <user id="'.$login.'">
                    <params>
                      <param name="password" value="test"/>
                    </params>
                  </user>
                 </users>
                </group>
              </groups>
            </domain>
          </section>
        </document>';
        echo $reply;
        die();
    }
}


echo $not_found;
?>