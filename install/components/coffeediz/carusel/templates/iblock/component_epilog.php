<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->AddViewContent('myCarousel', '
<script type="text/javascript">
   $(document).ready(function() {
     $("#myIBlockCarousel").carousel({
       interval: 5000
     })
   });
</script>
');
?>