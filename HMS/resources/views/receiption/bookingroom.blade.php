@extends('layout')
@section('title')
{{ $title }}
@stop
@section('content')


<h3 class="text-light"> Guest Detail<span class="mif-drive-eta place-right"></span></h3>
		<form action="" method="post" accept-charset="utf-8" class="form-input">
		<div class="cell">
			<label class="label-input"> Name </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
			<label class="label-input"> Room </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
		</div>
		<div class="cell">
		<div class="cell">
			<label class="label-input"> Address </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
			<label class="label-input"> RoomType </label>
				<div class="input-control select">
				    <select>
				        <option>1</option>
				        <option>2</option>
				        <option>3</option>
				    </select>
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> ID Card </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
			<label class="label-input"> Nationality </label>
				<div class="input-control select">
				    <select>
				        <option>VietNam</option>
				        <option>Campuchia</option>
				        <option>ThaiLan</option>
				    </select>
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Checkin </label>
				<div class="input-control text" data-role="datepicker" >
				    <input type="text" id='date-p'>
				    <button class="button"><span class="mif-calendar"></span></button>
				</div>
			<label class="label-input"> Checkout </label>
				<div class="input-control text" data-role="datepicker" >
				    <input type="text" id='date-p2'>
				    <button class="button"><span class="mif-calendar"></span></button>
				</div>
				<script>
				    $(function(){
				        $("#datepicker").datepicker();

				    });
				      document.getElementById('date-p').value = (new Date()).format("yyyy.mm.dd");
				      document.getElementById('date-p2').value = (new Date()).format("yyyy.mm.dd");

				</script>
		</div>
		<div class="cell">
			<label class="label-input"> Total </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
			<label class="label-input"> Deposit </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
		</div>
		<div class="cell">
			<label class="label-input"> Sex </label>
			<label class="input-control radio small-check">
                    <input type="radio" name="n3" checked="">
                      <span class="check"></span>
                    <span class="caption">Male</span>
            </label>
            <label class="input-control radio small-check">
                    <input type="radio" name="n3" checked="">
                      <span class="check"></span>
                    <span class="caption">Female</span>
            </label>
           
           
		</div>
		<div class="cell">
			<label class="label-input"> Reception Name </label>
				<div class="input-control text">
		   			 <input type="text">
				</div>
		</div>
		<input type="submit" class="button primary" name="" value="Booking">
		<input type="button" class="button warning" name="" value="Checkin">
		<input type="button" class="button success" name="" value="Checkout">
	</form>
	

@stop