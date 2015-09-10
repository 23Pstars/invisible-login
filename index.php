<?php
/*
 *      index.php
 *      
 *      Copyright 2011 Ahmad Zafrullah Mardiansyah <zaf@zaf-laptop>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

$mantra = 'anu';  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>404 Not Found</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
</head>

<body>

<?php if( isset( $_REQUEST[ 'mantra' ] ) && $_REQUEST[ 'mantra' ] == $mantra ) : ?>

    <h1>Selamat datang mas admin :)</h1>
    <br/>
    then u can put any code or redirect to another admin/login pages

<?php else : ?>

    <h1>Not Found</h1>
    <p>The requested URL /<?php echo basename( __FILE__ ); ?> was not found on this server.</p>
    <hr>
    <address><?php echo $_SERVER[ 'SERVER_SOFTWARE' ]; ?> Server at <?php echo $_SERVER[ 'SERVER_NAME' ]; ?> Port <?php echo $_SERVER[ 'SERVER_PORT' ]; ?></address>

    <form><input type="text" name="mantra" style="border-style: none;" /></form>

<?php endif; ?>

</body>

</html>
