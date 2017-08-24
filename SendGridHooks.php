<?php
/**
 * Hooks for SendGrid extension for Mediawiki
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author Alangi Derick <alangiderick@gmail.com>
 * @license GPL-2.0+
 * @ingroup Extensions
*/

class SendGridHooks {
	/**
	 * Send a mail using SendGrid API
	 *
	 * @param array $headers
	 * @param array $to
	 * @param MailAddress $from
	 * @param string $subject
	 * @param string $body
	 * @return bool
	 * @throws Exception
	 */
	public static function onAlternateUserMailer( array $headers, array $to, MailAddress $from, $subject, $body ) {
		
	}
}