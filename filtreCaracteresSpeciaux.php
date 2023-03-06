
<?php
// Fonction permettant de renommer un ficher sans accent et sans caractères non autorisés, à ajouter à votre fichier de fonctions personnelles
function str_to_noaccent($str)
{​
$url = $str;
    /* espaces ---------------------------  */
    // exemple avec str_replace : $url = str_replace('  ', '_', $url);
    $url = preg_replace('#   #', '_', $url);
    $url = preg_replace('#  #', '_', $url);
    $url = preg_replace('# #', '_', $url);
    $url = preg_replace('#_-_#', '_', $url);
    $url = preg_replace('#___#', '_', $url);
    $url = preg_replace('#__#', '_', $url);
    $url = preg_replace("#'#", '-', $url);
    /* caractères accentués -------------------------- */
    $url = preg_replace("#¨#", '', $url);
    $url = preg_replace('#Ç#', 'C', $url);
    $url = preg_replace('#ç#', 'c', $url);
    $url = preg_replace('#è|é|ê|ë#', 'e', $url);
    $url = preg_replace('#È|É|Ê|Ë#', 'E', $url);
    $url = preg_replace('#à|á|â|ã|ä|å#', 'a', $url);
    $url = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $url);
    $url = preg_replace('#ì|í|î|ï#', 'i', $url);
    $url = preg_replace('#Ì|Í|Î|Ï#', 'I', $url);
    $url = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $url);
    $url = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $url);
    $url = preg_replace('#ù|ú|û|ü#', 'u', $url);
    $url = preg_replace('#Ù|Ú|Û|Ü#', 'U', $url);
    $url = preg_replace('#ý|ÿ#', 'y', $url);
    $url = preg_replace('#Ý#', 'Y', $url);
/* autres ----------------------------  */
return ($url);
}​
?>
    
    
  
  

<https://teams.microsoft.com/l/message/19:033128050c6a416d8dd2b0d695127d66@thread.tacv2/1678099951932?tenantId=b85e5bdc-7493-438f-abb0-32b00a8e3259&amp;groupId=a35e7223-a680-4534-9da0-d4b6456f7400&amp;parentMessageId=1678099951932&amp;teamName=DWWM La Ciotat 2022-23&amp;channelName=Les Cours&amp;createdTime=1678099951932&amp;allowXTenantAccess=false>