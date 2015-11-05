<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table rows with JavaScript"/>
		<meta name="viewport" content="width=device-width, user-scalable=no"/><!-- "position: fixed" fix for Android 2.2+ -->
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<script type="text/javascript">
			var redipsURL = '/javascript/drag-and-drop-table-row/';
		</script>
		<script type="text/javascript" src="<?php echo base_url('js/header.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('js/redips-drag-min.js'); ?>"></script>
		
		<title>Example 15: Drag and drop table rows</title>
                <script>
                    /*jslint white: true, browser: true, undef: true, nomen: true, eqeqeq: true, plusplus: false, bitwise: true, regexp: true, strict: true, newcap: true, immed: true, maxerr: 14 */
/*global window: false, REDIPS: true */

/* enable strict mode */
"use strict";

// define redipsInit variable
var redipsInit;

// redips initialization
redipsInit = function () {
	// reference to the REDIPS.drag library and message line
	var	rd = REDIPS.drag,
		msg;
	// initialization
	rd.init();
	// set hover color for TD and TR
	rd.hover.colorTd = '#FFCFAE';
	rd.hover.colorTr = '#9BB3DA';
	// set hover border for current TD and TR
	rd.hover.borderTd = '2px solid #32568E';
	rd.hover.borderTr = '2px solid #32568E';
	// drop row after highlighted row (if row is dropped to other tables)
	rd.rowDropMode = 'after';
	// row was clicked - event handler
	rd.event.rowClicked = function () {
		// set current element (this is clicked TR)
		var el = rd.obj;
		// find parent table
		el = rd.findParent('TABLE', el);
		// every table has only one SPAN element to display messages
		msg = el.getElementsByTagName('span')[0];
		// display message
		msg.innerHTML = 'Clicked';
	};
	// row was moved - event handler
	rd.event.rowMoved = function () {
		// set opacity for moved row
		// rd.obj is reference of cloned row (mini table)
		rd.rowOpacity(rd.obj, 85);
		// set opacity for source row and change source row background color
		// rd.objOld is reference of source row
		rd.rowOpacity(rd.objOld, 20, 'White');
		// display message
		msg.innerHTML = 'Moved';
	};
	// row was not moved - event handler
	rd.event.rowNotMoved = function () {
		msg.innerHTML = 'Not moved';
	};
	// row was dropped - event handler
	rd.event.rowDropped = function () {
		// display message
		msg.innerHTML = 'Dropped';
	};
	// row was dropped to the source - event handler
	// mini table (cloned row) will be removed and source row should return to original state
	rd.event.rowDroppedSource = function () {
		// make source row completely visible (no opacity)
		rd.rowOpacity(rd.objOld, 100);
		// display message
		msg.innerHTML = 'Dropped to the source';
	};
	/*
	// how to cancel row drop to the table
	rd.event.rowDroppedBefore = function () {
		//
		// JS logic
		//
		// return source row to its original state
		rd.rowOpacity(rd.objOld, 100);
		// cancel row drop
		return false;
	}
	*/
	// row position was changed - event handler
	rd.event.rowChanged = function () {
		// get target and source position (method returns positions as array)
		var pos = rd.getPosition();
		// display current table and current row
		msg.innerHTML = 'Changed: ' + pos[0] + ' ' + pos[1];
	};
};


// add onload event listener
if (window.addEventListener) {
	window.addEventListener('load', redipsInit, false);
}
else if (window.attachEvent) {
	window.attachEvent('onload', redipsInit);
}
                </script>
                <style>
                    /*

Darko Bunic
http://www.redips.net/
Apr, 2011.

*/

body {
	font-family: arial;
	margin: 0px;
}

/* make drag container visible */
#drag {
	border: 2px dashed LightBlue;
	width: 580px;
	padding: 10px;
	margin: 0px auto;
}

/* set border-collapse */
div#drag table {
/* 	border-collapse: collapse; */
	border-collapse: separate;
	border-spacing: 0px;
	width: 580px;
}
	/* define margin below first table */
	.tbl1 {
		margin-bottom: 17px;
	}

/* set table row height */
div#drag table tr {
	height: 40px;
}

/*
	http://stackoverflow.com/questions/4096390/table-border-color-in-css-with-border-collapse
	
	if collapsing borders have the same style and width, but differ in color,
	then from most to least preferred: cell, row, row group, column, column group, table.
	
	if ... come from same type of element, such as two rows... then color is taken from
	borders that are the topmost and the leftmost.
	
	wider border wins over narrower ones / double wins over solid, then dashed, dotted, ridge, outset, groove, inset
*/
div#drag td {
	border: 2px groove white;
}

/* table titles */
div#drag th {
	font-size: 14pt;
}

/* drag object (DIV inside table cell) */
.drag {
	margin: auto;
	margin-bottom: 1px;
	margin-top: 1px;
	text-align: center;
	font-size: 10pt;
	width: 70px;
	height: 20px;
	line-height: 20px;
	border-width: 2px;
	border-style: solid;
	background-color: white;
	/* round corners */
	border-radius: 4px; /* Opera, Chrome */
	-moz-border-radius: 4px; /* FF */
}

/* blue DIV elements */
.blue {
	border-color: SteelBlue;
}

/* orange DIV elements */
.orange {
	border-color: #FF8A58;
}

/* DIV row handlers (blue left column) */
.row {
	width: 20px;
	margin: 2px;
	border-color: SteelBlue;
	background-color: SteelBlue;
	/* round corners */
	border-radius: 14px; /* Opera, Chrome */
	-moz-border-radius: 14px; /* FF */
}

/* row handler TD background color */
.rowhandler {
	background-color: #76ACDA;
}

/* marked cells (forbidden access for header and message line) */
.mark {
	color: white;
	background-color: #aaa;
	text-align: center;
}

/* row dark */
.rd {
	background-color: #ddd;
}

/* row light */
.rl {
	background-color: #eee;
}

/* cell dark */
.cdark {
	background-color: #C6C8CB;
}
                    </style>
	</head>
    <body >
        <img src="..\image\matter.jpg" alt="iso" id="aja" width="412" height="293" style="position: absolute;width:500px; left: 680px; top: 85px"/>
		<center>
			<!-- tables inside this DIV could contain drag-able content  -->
			<div id="drag">
				<table class="tbl1">
					<colgroup>
						<col width="30"/>
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
					</colgroup>
					<tbody>
						<tr>
							<th colspan="6" class="mark">Table 1</th>
						</tr>
						<tr class="rl">
							<td class="rowhandler"><div class="drag row"></div></td>
							<td class="cdark"></td>
							<td></td>
							<td><div class="drag blue">Drag</div></td>
							<td></td>
							<td class="cdark"></td>
						</tr>
						<tr class="rd">
							<td class="rowhandler"><div class="drag row"></div></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="rl">
							<td class="rowhandler"><div class="drag row"></div></td>
							<td><div class="drag blue">and</div></td>
							<td class="cdark"></td>
							<td><div class="drag blue">drop</div></td>
							<td class="cdark"></td>
							<td><div class="drag blue">table</div></td>
						</tr>
						<tr class="rd">
							<td class="rowhandler"><div class="drag row"></div></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="rl">
							<td class="rowhandler"><div class="drag row"></div></td>
							<td><div class="drag blue">rows</div></td>
							<td class="cdark"></td>
							<td><div class="drag blue">with</div></td>
							<td class="cdark"></td>
							<td><div class="drag blue">REDIPS</div></td>
						</tr>
						<tr class="rd">
							<td class="rowhandler"><div class="drag row"></div></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="rl">
							<td class="rowhandler"><div class="drag row"></div></td>
							<td class="cdark"></td>
							<td></td>
							<td><div class="drag blue">lib</div></td>
							<td></td>
							<td class="cdark"></td>
						</tr>
						<tr>
							<td colspan="4" class="mark"><span>Message line</span></td>
						</tr>
					</tbody>
				</table>

				<table>
					<colgroup>
						
						
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
						<col width="100"/>
					</colgroup>
					<tbody>
						<tr>
							<th colspan="6" class="mark">Table 2</th>
						</tr>
						<tr class="rd">
							
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="rl">
							
							<td></td>
							<td class="cdark"></td>
							<td></td>
							<td><div class="drag orange">rows</div></td>
						</tr>
						<tr class="rl">
							
							<td class="cdark"></td>
							<td></td>
							<td class="cdark"></td>
							<td></td>
						</tr>
						<tr class="rl">
							
							<td><div class="drag orange">and</div></td>
							<td></td>
							<td><div class="drag orange">table</div></td>
							<td class="cdark"></td>
						</tr>
						<tr class="rd">
							
							<td></td>
							<td><div class="drag orange">drop</div></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="6" class="mark"><span>Message line</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</center>
	</body>
</html>