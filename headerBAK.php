<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php esc_attr_e( get_bloginfo( 'name' ), 'Service Team' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
    <script src="/images/slider/themes/1/js-image-slider.js" type="text/javascript"></script>
 

<script src="/wp-content/themes/serviceteam/js/migrated/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
//-->
<!-- 
function fieldcheck( oEl, ln, nxt ) { 
if( oEl.value.length >= ln ) { 
eval( 'oEl.form.'+nxt+'.focus()' ); 
} 
} 
// -->


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->

</script>
<script src="http://connect.facebook.net/en_US/all.js#appId=229456673752016&amp;xfbml=1"></script>
<script src="https://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

 <script type="text/javascript">
      google.load('search', '1');

      function inputFocus() {
        document.getElementById('query-input').style['background'] = '';
      }

      function inputBlur() {
        var queryInput = document.getElementById('query-input');
        if (!queryInput.value) {
         this.value=' Search the site'
        }
      }

      function init() {
        google.search.CustomSearchControl.attachAutoCompletion(
            '007606843745003116644:wcx-cvgdtfe',
            document.getElementById('query-input'),
            'two-page-form');
        inputBlur();
      }

      function submitQuery() {
        window.location = 'http://www.multi-trade.co.uk/search.asp?q='
            + encodeURIComponent(
                document.getElementById('query-input').value);
        return false;
      }

      google.setOnLoadCallback(init);
    </script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

