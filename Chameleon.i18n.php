<?php
/**
 * This file is part of the MediaWiki skin Chameleon.
 *
 * @copyright 2013 - 2014, Stephan Gambke
 * @license   GNU General Public License, version 3 (or any later version)
 *
 * The Chameleon skin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by the Free
 * Software Foundation, either version 3 of the License, or (at your option) any
 * later version.
 *
 * The Chameleon skin is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Stephan Gambke
 * @since 1.0
 * @ingroup Skins
 */


/**
 * This is a backwards-compatibility shim, generated by:
 * https://git.wikimedia.org/blob/mediawiki%2Fcore.git/HEAD/maintenance%2FgenerateJsonI18n.php
 *
 * Beginning with MediaWiki 1.23, translation strings are stored in json files,
 * and the EXTENSION.i18n.php file only exists to provide compatibility with
 * older releases of MediaWiki. For more information about this migration, see:
 * https://www.mediawiki.org/wiki/Requests_for_comment/Localisation_format
 *
 * This shim maintains compatibility back to MediaWiki 1.17.
 */
<<<<<<< HEAD
$messages = array();
if ( !function_exists( 'wfJsonI18nShimf931c1431e4504b8' ) ) {
	function wfJsonI18nShimf931c1431e4504b8( $cache, $code, &$cachedData ) {
		$codeSequence = array_merge( array( $code ), $cachedData['fallbackSequence'] );
		foreach ( $codeSequence as $csCode ) {
			$fileName = dirname( __FILE__ ) . "/resources/i18n//$csCode.json";
			if ( is_readable( $fileName ) ) {
				$data = FormatJson::decode( file_get_contents( $fileName ), true );
				foreach ( array_keys( $data ) as $key ) {
					if ( $key === '' || $key[0] === '@' ) {
						unset( $data[$key] );
					}
				}
				$cachedData['messages'] = array_merge( $data, $cachedData['messages'] );
			}

			$cachedData['deps'][] = new FileDependency( $fileName );
		}
		return true;
	}

	$GLOBALS['wgHooks']['LocalisationCacheRecache'][] = 'wfJsonI18nShimf931c1431e4504b8';
}
=======
$messages['en'] = array(
        'skinname-chameleon' => 'Chameleon',
        'chameleon-desc' => 'The Chameleon skin.',

		'chameleon-loggedin' => 'You are logged in as $1.',
		'chameleon-notloggedin' => 'You are not logged in',

		'chameleon-newmessages' => 'You have new messages.',
		'chameleon-nonewmessages' => 'You have no new messages.',
);

$messages['qqq'] = array(
        'skinname-chameleon' => 'The name of this skin',
        'chameleon-desc' => '{{desc|name=Chameleon|url=http://www.mediawiki.org/wiki/Skin:Chameleon}}',

		'chameleon-loggedin' => 'Text shown, when the user is logged in.',
		'chameleon-notloggedin' => 'Text shown, when the user is not logged in.',

		'chameleon-newmessages' => 'Text shown, when the user has new messages.',
		'chameleon-nonewmessages' => 'Text shown, when the user has no new messages.',
);
>>>>>>> ShakePeers/shakepeers
