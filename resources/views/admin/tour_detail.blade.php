@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section id="validation">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">ADD NEW TOUR</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show">
                    <div class="card-body">
                      <form action="{{route('admin.tours.detail.store')}}" enctype="multipart/form-data" class="steps-validation wizard-notification" method="POST">
                        <!-- Step 1 -->
                        <h6 class="danger">
                            @if($errors->any())
                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                        @endif</h6>
                        @csrf
                        <fieldset>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="firstName3">
                                    Title :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="title" name="title">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="lastName3">
                                    Charges :
                                  <span class="danger">*</span>
                                </label>
                                <input type="float" class="form-control required" id="charges" name="charges">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="emailAddress5">
                                    Category :
                                  <span class="danger">*</span>
                                </label>
                                {{-- <input type="number" class="form-control required" id="emailAddress5" name="category_id"> --}}
                                <select class="form-control required" name="category_id">
                                    <option>Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}} ">{{$category->days}}  --{{$category->nights}} --{{$category->people}}  </option>
                                    @endforeach
                                </select>
                            </div>



                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailAddress5">
                                        image :
                                      <span class="danger">*</span>
                                    </label>
                                    <input type="file" class="form-control required" id="emailAddress5" name="image">
                                  </div>
                            </div>

                          </div>

                        </fieldset>
                       <button type="submit" class="btn btn-sm round btn-success btn-glow">Save</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!--/ Sell Orders & Buy Order -->
        <!-- Active Orders -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">ALL TOURS</h4>
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
                        <th>Title</th>
                        <th>Charges</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Ations</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $url=url();
                        @endphp
                        @foreach ($tours as $tour )


                      <tr>
                        <td>{{$tour->title}}</td>
                        <td class="success">{{$tour->charges}}</td>
                        <td><img scr="{{asset($tour->image)}}" height="100" width="100"/></td>
                        <td>{{$tour->category_id}}</td>
                        <td>
                          <a
                          href="{{route('admin.tours.detail.destroy',$category->id)}}"
                          class="btn btn-sm round btn-outline-danger" > Delete</a>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Active Orders -->
      </div>
    </div>
  </div>
@endsection
