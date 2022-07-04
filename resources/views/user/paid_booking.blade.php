@extends('layouts.user')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">ALL PAID BOOKING</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <td>
                      {{-- <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Delete all</button> --}}
                    </td>
                  </div>
                </div>
                <div class="card-content">
                  <div class="table-responsive">
                    <table class="table table-de mb-0">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>TOUR</th>
                          <th>Hotel Category</th>
                          <th>Charges</th>
                          <th>Is Paid</th>

                          {{-- <th>Fee (%)</th>
                          <th>Ations</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($paid_bookings as $paid_booking)
                        <tr>
                          <td>{{$paid_booking->created_at}}</td>
                          <td class="success">{{$paid_booking->tour->name}}</td>
                          <td>{{$paid_booking->category}}</td>
                          <td>$ {{$paid_booking->tour->charges}}</td>
                          <td>{{$paid_booking->is_paid?'Paid':'Unpaid'}}</td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--/ Sell Orders & Buy Order -->
      </div>
    </div>
  </div>
@endsection

