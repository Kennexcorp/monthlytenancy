@extends('frontend.layout')
@section('content')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
        style="background-image: url({{ isset($image_path) ? Storage::url($image_path) : $image_url  }})">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-7">
                    <h1 class="mb-2">My Rents</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section bg-light">
    <div class="container">

        <div class="h-100" id="demopurpose">
            <div class="container h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-sm col-md col-lg">


                        <div class="profile-card py-3 card text-center">
                            <a class="btn-edit" href="">
                                <i class="fa fa-edit"></i>
                            </a>
                            <div class="card-body py-4">
                                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal"
                                            role="tab" aria-controls="personal" aria-selected="true">Current
                                            Rent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab"
                                            aria-controls="work" aria-selected="false">Past
                                            Rents</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                        aria-labelledby="personal-tab">
                                        <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                                            <div class="w-100">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Month</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Due Date</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (!blank($current))
                                                        @foreach ($current->rents as $rent)
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>{{ Carbon\Carbon::parse($rent->due_date)->englishMonth  }}
                                                            </td>
                                                            <td>&#8358;{{number_format(floatval($rent->amount)) }}</td>
                                                            <td>{{ Carbon\Carbon::parse($rent->due_date)->toFormattedDateString() }}
                                                            </td>
                                                            <td>{{ $rent->status }}</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        @endforeach
                                                        @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">
                                        <div class="d-flex px-1 w-100 align-items-center text-left pt-3">
                                            <div class="w-100">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Month</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Duration</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($past as $rent)
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>{{ Carbon\Carbon::parse($rent->created_at)->toFormattedDateString() .' - '.  Carbon\Carbon::parse($rent->created_at)->addMonth($rent->duration)->toFormattedDateString() }}
                                                            </td>
                                                            <td>&#8358;{{number_format(floatval($rent->rents->sum('amount'))) }}</td>
                                                            <td>{{ $rent->duration }} Months</td>
                                                            <td>{{ $rent->status }}</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
