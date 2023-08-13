@extends('layouts.sub_admin')
@section('title', 'হিসাবের জন্য প্রত্যেক নাম')
@section('content')

<!-- /# row -->
<section id="main-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							@if($moneies->count()>0)
							<thead>
								<tr>
									<th>#</th>
									<th>নাম</th>
									<th>টাকা</th>
									<th>জমা</th>
									<th>ম্যানেজ</th>
								</tr>
							</thead>
							@php
							$moneys = 0;
							@endphp
							<tbody>
								@foreach($moneies as $money)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $money->name }}</td>
									<td>
										{{ $money->money }} টাকা --- 
										{{ date('d-m-Y', strtotime($money->created_at)) }}
										<br>
										@if($money->money1)
										{{ $money->money1 }} টাকা --- {{ date('d-m-Y', strtotime($money->date1)) }}
										<br>
										@endif
										@if($money->money2)
										{{ $money->money2 }} টাকা --- {{ date('d-m-Y', strtotime($money->date2)) }}
										<br>
										@endif
										@if($money->money3)
										{{ $money->money3 }} টাকা --- {{ date('d-m-Y', strtotime($money->date3)) }}
										<br>
										@endif
										@if($money->money4)
										{{ $money->money4 }} টাকা --- {{ date('d-m-Y', strtotime($money->date4)) }}
										<br>
										@endif
										@if($money->money5)
										{{ $money->money5 }} টাকা --- {{ date('d-m-Y', strtotime($money->date5)) }}
										<br>
										@endif
										@if($money->money6)
										{{ $money->money6 }} টাকা --- {{ date('d-m-Y', strtotime($money->date6)) }}
										<br>
										@endif
										@if($money->money7)
										{{ $money->money7 }} টাকা --- {{ date('d-m-Y', strtotime($money->date7)) }}
										<br>
										@endif
										@if($money->money8)
										{{ $money->money8 }} টাকা --- {{ date('d-m-Y', strtotime($money->date8)) }}
										<br>
										@endif
										@if($money->money9)
										{{ $money->money9 }} টাকা --- {{ date('d-m-Y', strtotime($money->date9)) }}
										<br>
										@endif
										@if($money->money10)
										{{ $money->money10 }} টাকা --- {{ date('d-m-Y', strtotime($money->date10)) }}
										<br>
										@endif
										@if($money->money11)
										{{ $money->money11 }} টাকা --- {{ date('d-m-Y', strtotime($money->date11)) }}
										<br>
										@endif
										@if($money->money12)
										{{ $money->money12 }} টাকা --- {{ date('d-m-Y', strtotime($money->date12)) }}
										<br>
										@endif
										@if($money->money13)
										{{ $money->money13 }} টাকা --- {{ date('d-m-Y', strtotime($money->date13)) }}
										<br>
										@endif
										@if($money->money14)
										{{ $money->money14 }} টাকা --- {{ date('d-m-Y', strtotime($money->date14)) }}
										<br>
										@endif
									</td>
									<td>
										@php
										$mon = $money->money;
										$one = $money->money1;
										$two = $money->money2;
										$three = $money->money3;
										$four = $money->money4;
										$five = $money->money5;
										$six = $money->money6;
										$seven = $money->money7;
										$eight = $money->money8;
										$nine = $money->money9;
										$ten = $money->money10;
										$eliven = $money->money11;
										$twoalve = $money->money12;
										$thertin = $money->money13;
										$fourtin = $money->money14;
										$total =  $mon + $one + $two + $three + $four + $five + $six + $seven + $eight + $nine + $ten + $eliven + $twoalve + $thertin + $fourtin; 
										echo $total;
										@endphp
										টাকা
									</td>
									<td>
										<a href="{{ route('money.edit', $money->id) }}" class="btn-info btn">Edit</a>
									</td>
								</tr>
								@php
								$moneys += $total;
								@endphp
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th>মোট জমা: {{ $moneys }}</th>
									<th></th>
								</tr>
							</tfoot>
							@else
							<h3>No Data</h3>
							@endif
						</table>
						<div class="justify-content-center d-flex">
							{{ $moneies->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /# row -->



<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="delete_form" method="post" action="">
				@csrf
				@method('DELETE')
				<div class="modal-body">
					<h2 class="text-center">Do you want to delete this data?</h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Confirm</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')

<script>

   // money add model
   $(document).ready(function(){
   	$('#open').click(function(){
   		$('.model-container').css('transform', 'scale(1)');
   	});
   	$('.model-container').click(function(){
   		$('.model-container').css('transform', 'scale(0)');
   	});
   });


   // money add model




   $(".delete").on('click', function(event){
   	var url = $(this).attr('data-url');
   	$('#delete_form').attr('action', url);
   	$('#delete_modal').modal('show');
   });
</script>

@endsection