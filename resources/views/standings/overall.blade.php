@extends('standings.base')
@section('standings')
<table width="80%" id="tableOverall" class="table table-condensed table-striped">
<thead>
<tr>
	<th colspan="13">&nbsp;</th>
	<th colspan="3" style="border:1px solid black;border-bottom:none;">Powerplay</th>
	<th colspan="3" style="border:1px solid black;border-bottom:none;">Penalty kill</th>
	<th colspan="4">&nbsp;</th>
</tr>
<tr>
	<th>Position</th>
	<th>Team</th>
	<th>Division</th>
	<th>Conference</th>
	<th>GP</th>
	<th>W</th>
	<th>L</th>
	<th>OTL</th>
	<th>PTS</th>
	<th title="Regular or Overtime Wins">ROW</th>
	<th>GF</th>
	<th>GA</th>
	<th>Diff</th>
	<th style="border-left:1px solid black;border-top:none;" title="Goals">G</th>
	<th style="border-top:none;" title="Opportunities">O</th>
	<th style="border-right:1px solid black;border-top:none;" title="Percent">P</th>
	<th style="border-left:1px solid black;border-top:none;" title="Goals Against">G</th>
	<th style="border-top:none;" title="Opportunities against">O</th>
	<th style="border-right:1px solid black;border-top:none;" title="Penalty Kill Percent">P</th>
	<th>Home</th>
	<th>Away</th>
	<th>L10</th>
	<th>Streak</th>
</tr>
</thead>
<tbody>
@include('standings/standingBlock', ['standings' => $standings])
</tbody>
</table>
@stop
