<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) 2015  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */
$sMetadataVersion = '1.1';
$aModule = array(
    'id'            => 'ecs_cantchangetags',
    'title'         => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>Can&acute;t Change Tags</i>',
    'description'   => array(
                    'de' => '<i>Tags k&ouml;nnen im Frontend nicht mehr editiert werden.</i>
                    <br><iframe frameborder="no" width="600px" height="300px" src="https://ssl-account.com/incl.oxidtheme.de/gratis.html"></iframe>',
    ),
    'version'       => '1.0',
    'thumbnail'     => 'ecs.png',
    'author'        => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'         => 'info@ecomstyle.de',
    'url'           => 'http://ecomstyle.de',
    'extend'        => array(
        'oxwarticledetails' => 'ecomstyle.de/ecs_cantchangetags/cantchangetags_oxwarticledetails',
        'details'           => 'ecomstyle.de/ecs_cantchangetags/cantchangetags_details'
    ),
);
?>