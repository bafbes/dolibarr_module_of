<?php

function assetPrepareHead(&$asset,$type='type-asset') {
	global $user;
	
	switch ($type) {
		case 'type-asset':
			return array(
				array(DOL_URL_ROOT.'/custom/asset/admin/typeAsset.php?id='.$asset->getId(), 'Fiche','fiche')
				,array(DOL_URL_ROOT.'/custom/asset/admin/typeAssetField.php?id='.$asset->getId(), 'Champs','field')
			);
			break;
		case 'asset':
			return array(
					array(DOL_URL_ROOT.'/custom/asset/fiche.php?id='.$asset->getId(), 'Fiche','fiche')
				);
			break;
		case 'assetOF':
			return array(
					array(DOL_URL_ROOT.'/custom/asset/fiche_of.php?id='.$asset->getId(), 'Fiche','fiche')
				);
			break;
	}
}