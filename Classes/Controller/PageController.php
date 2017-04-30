<?php
namespace Pottkinder\PkIncludePages\Controller;

/**
 * PageController
 */
class PageController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action include
     *
     * @return void
     */
    public function includeAction()
    {
    	$content = '';
    	$db = $GLOBALS['TYPO3_DB'];

		$this->contentObj = $this->configurationManager->getContentObject();
		$uid = $this->contentObj->data['uid'];

		$query = 'SELECT tx_pkincludepages_pages,tx_pkincludepages_column FROM tt_content WHERE uid=' . $uid . ';';

		$res=$db->sql_query($query);
		$tt_content = $db->sql_fetch_assoc($res);

		$query = 'SELECT uid FROM tt_content WHERE deleted=0 AND hidden=0 AND pid IN (' . $tt_content['tx_pkincludepages_pages'] . ') AND colPos=' . $tt_content['tx_pkincludepages_column'] . ' AND CType!="fluidcontent_content" AND sys_language_uid=' . (int) $GLOBALS['TSFE']->sys_language_uid . ';';

		$res=$db->sql_query($query);
		while($contentElement = $db->sql_fetch_assoc($res)) {
			$cObj = $this->configurationManager->getContentObject();
			$ttContentConfig = array(
			    'tables'       => 'tt_content',
			    'source'       => $contentElement['uid'],
			    'dontCheckPid' => 1
			);
            $content = $cObj->cObjGetSingle('RECORDS', $ttContentConfig);
		}


		return $content;
    }
}