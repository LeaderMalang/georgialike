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
                      <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Delete all</button>
                    </td>
                  </div>
                </div>
                <div class="card-content">
                  <div class="table-responsive">
                    <table class="table table-de mb-0">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Type</th>
                          <th>Price</th>
                          <th>USD</th>
                          <th>Fee (%)</th>
                          <th>Ations</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2018-01-31 06:51:51</td>
                          <td class="success">Buy</td>
                          <td>11900.12</td>
                          <td>$ 6979.78</td>
                          <td>0.2</td>
                          <td>
                            <button class="btn btn-sm round btn-outline-danger"> Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2018-01-31 06:50:50</td>
                          <td class="danger">Sell</td>
                          <td>11905.09</td>
                          <td>$ 4600.97</td>
                          <td>0.2</td>
                          <td>
                            <button class="btn btn-sm round btn-outline-danger"> Delete</button>
                          </td>
                        </tr>
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

