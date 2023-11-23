
<form method="post" id="get_price_data">
	<div style="display: flex; gap: 5px;">

	@foreach($arr as $pack)
		@php
			$from_place = explode(' | ',$pack->from);
			$from_price = explode(' | ',$pack->price);
			$total_place = count($from_place);
		@endphp
		
		<select class="form-control edit_form_control" name="city">
			@for($i=0; $i<$total_place; $i++)
			<option value="{{$from_place[$i]}},{{$from_price[$i]}}">{{$from_place[$i]}}</option>
			@endfor
		</select>
		<input type="submit" name="singlebutton" class=" btn-primary edit_form_control_button" value="Get Price">
	@endforeach
	</div>
</form>