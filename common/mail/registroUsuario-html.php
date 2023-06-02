<?php
/**
 * Que es este módulo o Archivo
 *
 * Descripcion Larga
 *
 * @category     Gestion Documental
 * @package      Orfeo NG 
 * @subpackage   XXXX 
 * @author       Skina Technologies SAS (http://www.skinatech.com)
 * @license      Mixta <https://orfeolibre.org/inicio/licencia-de-orfeo-ng/>
 * @license      ./LICENSE.txt
 * @link         http://www.orfeolibre.org
 * @since        Archivo disponible desde la version 1.0.0
 *
 * @copyright    2023 Skina Technologies SAS
 */
use yii\helpers\Html;
?>
<tr>
	<td class="free-text"><?=$textBody;?></td>
</tr>
<tr>
    <td class="button">
      	<div style="display: inline-block; padding-right: 5px;">
        	<a class="button-mobile" href="<?= Html::encode($link) ?>" style="background-color:#0d908b;border-radius:5px;color:#ffffff;display:inline-block;font-family:'Cabin', Helvetica, Arial, sans-serif;font-size:14px;font-weight:regular;line-height:45px;text-align:center;text-decoration:none;width:155px;-webkit-text-size-adjust:none;mso-hide:all;">
        		<img style="margin-bottom: -5px; width: 20px;" src="<?= $message->embed($iconButtonLink); ?>" alt="">
	          	<?=$nameButtonLink;?>
	      	</a>
      	</div>
    </td>
</tr>
