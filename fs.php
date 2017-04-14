<?php
$request  = $_POST;
$not_found = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<document type="freeswitch/xml">
  <section name="result">
    <result status="not found" />
  </section>
</document>';




echo $not_found;
?>