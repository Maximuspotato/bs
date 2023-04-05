@extends('layout')

@section('content')
    <section class="about-low-area section-padding2">
        <div class="container">
            <!-- about-img -->
            <div class=" ">
                @if (count($attendees)>0)
                <button style="background:aqua;"><a style="color:black" href="{{url('/')}}/attendees/export">Export xls</a></button>
                <div class="section-top-border">
					<h3 class="mb-30">All Attendees</h3>
					<div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="country">First Name</div>
                                <div class="country">Last Name</div>
                                <div class="country">Phone number</div>
                                <div class="country">Organization</div>
                                <div class="country">MPESA Code</div>
							</div>
                            @foreach ($attendees as $attendee)
                            <div class="table-row">
								<div class="country">{{$attendee->fname}}</div>
                                <div class="country">{{$attendee->lname}}</div>
                                <div class="country">{{$attendee->number}}</div>
                                <div class="country">{{$attendee->org}}</div>
                                <div class="country">{{$attendee->mpesa}}</div>
							</div>
                            @endforeach
						</div>
					</div>
                    {{$attendees->links()}}
				</div>
                @else
                    No attendees
                @endif
            </div>
        </div>
    </section>
@endsection