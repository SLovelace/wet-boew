<?php
/*!
 * Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
 * wet-boew.github.io/wet-boew/License-eng.txt / wet-boew.github.io/wet-boew/Licence-fra.txt
 */
$_PAGE['altlangurl'] = $_SERVER["REQUEST_URI"];
$_PAGE['altlangurl'] = preg_replace('/#(.*)$/', '', $_PAGE['altlangurl']);
if (preg_match('/_e\./', $_PAGE['altlangurl']) > 0) {
	$_PAGE['altlangurl'] = preg_replace('/_e\./', '_f.', $_PAGE['altlangurl']);
} else if (preg_match('/-eng\./', $_PAGE['altlangurl']) > 0) {
	$_PAGE['altlangurl'] = preg_replace('/-eng\./', '-fra.', $_PAGE['altlangurl']);
} else if (preg_match('/_f\./', $_PAGE['altlangurl']) > 0) {
	$_PAGE['altlangurl'] = preg_replace('/_f\./', '_e.', $_PAGE['altlangurl']);
} else if (preg_match('/-fra\./', $_PAGE['altlangurl']) > 0) {
	$_PAGE['altlangurl'] = preg_replace('/-fra\./', '-eng.', $_PAGE['altlangurl']);
} else {
	$_PAGE['altlangurl'] = "#";
}
?>