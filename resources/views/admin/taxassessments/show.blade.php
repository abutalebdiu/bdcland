@extends('layouts.app',['title' => 'Show Taxassessment'])

@push('css')
<style>
    .card-body table tr th{
        text-transform: capitalize;
    }
</style>
@endpush

@section('content')
<div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show Taxassessment</h6>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.taxassessment.index')}}" type="button" class="btn btn-primary btn-sm">   <i class="bi bi-arrow-counterclockwise"></i> Back To Taxassessment List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-hover">
                    <tbody>
                        <tr>
                            <th>tax uid</th>
                            <td>{{$taxassessment->tax_uid}}</td>
                        </tr>
                        <tr>
                            <th>tax sid</th>
                            <td>{{$taxassessment->tax_sid}}</td>
                        </tr>
                        <tr>
                            <th>name</th>
                            <td>{{$taxassessment->name}}</td>
                        </tr>
                        <tr>
                            <th>	name(bangla)</th>
                            <td>{{$taxassessment->name_ban}}</td>
                        </tr>
                        <tr>
                            <th>father</th>
                            <td>{{$taxassessment->father}}</td>
                        </tr>
                        <tr>
                            <th>father (bangla)</th>
                            <td>{{$taxassessment->father_ban}}</td>
                        </tr>

                        <tr>
                            <th>email</th>
                            <td>{{$taxassessment->email}}</td>
                        </tr>
                        <tr>
                            <th>mobile</th>
                            <td>{{$taxassessment->mobile}}</td>
                        </tr>

                        <tr>
                            <th>gender</th>
                            <td>{{$taxassessment->gender}}</td>
                        </tr>
                        <tr>
                            <th>birthday</th>
                            <td>{{$taxassessment->birthday}}</td>
                        </tr>
                        <tr>
                            <th>photo</th>
                            <td> <img src="{{asset($taxassessment->photo)}}" alt="" width="100"> </td>
                        </tr>
                        <tr>
                            <th>blood group</th>
                            <td>{{$taxassessment->bloodgroup}}</td>
                        </tr>
                        <tr>
                            <th>educations</th>
                            <td>{{$taxassessment->educations}}</td>
                        </tr>
                        <tr>
                            <th>nid number</th>
                            <td>{{$taxassessment->nidno}}</td>
                        </tr>
                        <tr>
                            <th>nidno front Side</th>
                            <td> <img src="{{asset($taxassessment->nidno_front)}}" alt="" width="100"> </td>
                        </tr>
                        <tr>
                            <th>nidno back</th>
                            <td> <img src="{{asset($taxassessment->nidno_back)}}" alt="" width="100"> </td>

                        </tr>
                        <tr>
                            <th>holding number</th>
                            <td>{{$taxassessment->holdingno}}</td>
                        </tr>
                        <tr>
                            <th>room number</th>
                            <td>{{$taxassessment->room_number}}</td>
                        </tr>
                        <tr>
                            <th>word</th>
                            <td>{{$taxassessment->word ? $taxassessment->word->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>village</th>
                            <td>{{$taxassessment->village ? $taxassessment->village->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>homestead</th>
                            <td>{{$taxassessment->homestead ? $taxassessment->homestead->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>occupation_id</th>
                            <td>{{$taxassessment->occupation ? $taxassessment->occupation->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>start_taxyear</th>
                            <td>{{$taxassessment->homestead ? $taxassessment->homestead->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>total land</th>
                            <td>{{$taxassessment->total_land}}</td>
                        </tr>
                        <tr>
                            <th>tax amount</th>
                            <td>{{$taxassessment->tax_amount}}</td>
                        </tr>
                        <tr>
                            <th>annual house value</th>
                            <td>{{$taxassessment->annual_house_value}}</td>
                        </tr>
                        <tr>
                            <th>old age allowance</th>
                            <td>{{$taxassessment->oldageallowance}}</td>
                        </tr>
                        <tr>
                            <th>old age allowance qualified</th>
                            <td>{{$taxassessment->oldageallowance_qualified}}</td>
                        </tr>
                        <tr>
                            <th>widow</th>
                            <td>{{$taxassessment->widow}}</td>
                        </tr>
                        <tr>
                            <th>widow allowance</th>
                            <td>{{$taxassessment->widowallowance}}</td>
                        </tr>
                        <tr>
                            <th>fifteen fifty signature valid</th>
                            <td>{{$taxassessment->fifteen_fifty_signature_valid}}</td>
                        </tr>
                        <tr>
                            <th>fifteen tweenty nine educated unemployed</th>
                            <td>{{$taxassessment->fifteen_tweenty_nine_educated_unemployed}}</td>
                        </tr>
                        <tr>
                            <th>fifteen tweenty nine uneducated unemployed	</th>
                            <td>{{$taxassessment->fifteen_tweenty_nine_uneducated_unemployed	}}</td>
                        </tr>
                        <tr>
                            <th>expatriate</th>
                            <td>{{$taxassessment->expatriate}}</td>
                        </tr>
                        <tr>
                            <th>pregnant mother</th>
                            <td>{{$taxassessment->pregnant_mother}}</td>
                        </tr>
                        <tr>
                            <th>pregnant period</th>
                            <td>{{$taxassessment->pregnant_period}}</td>
                        </tr>
                        <tr>
                            <th>under five child	</th>
                            <td>{{$taxassessment->underfivechild	}}</td>
                        </tr>
                        <tr>
                            <th>women vaccine</th>
                            <td>{{$taxassessment->women_vaccine}}</td>
                        </tr>
                        <tr>
                            <th>physical disabled</th>
                            <td>{{$taxassessment->physical_disabled}}</td>
                        </tr>
                        <tr>
                            <th>childgoschool</th>
                            <td>{{$taxassessment->childgoschool}}</td>
                        </tr>
                        <tr>
                            <th>childgoschoolreason</th>
                            <td>{{$taxassessment->childgoschoolreason}}</td>
                        </tr>
                        <tr>
                            <th>freedomfighter allowance</th>
                            <td>{{$taxassessment->freedomfighter_allowance}}</td>
                        </tr>
                        <tr>
                            <th>number of male</th>
                            <td>{{$taxassessment->number_of_male}}</td>
                        </tr>
                        <tr>
                            <th>number of female</th>
                            <td>{{$taxassessment->number_of_female}}</td>
                        </tr>
                        <tr>
                            <th>landless</th>
                            <td>{{$taxassessment->landless}}</td>
                        </tr>
                        <tr>
                            <th>electricity facility</th>
                            <td>{{$taxassessment->electricity_facility}}</td>
                        </tr>
                        <tr>
                            <th>safe water</th>
                            <td>{{$taxassessment->safewater}}</td>
                        </tr>
                        <tr>
                            <th>safe water source</th>
                            <td>{{$taxassessment->safewatersource}}</td>
                        </tr>
                        <tr>
                            <th>sanitation</th>
                            <td>{{$taxassessment->sanitation}}</td>
                        </tr>
                         <tr>
                            <th>notes</th>
                            <td>{{$taxassessment->notes}}</td>
                        </tr>
                         <tr>
                            <th>Creator </th>
                            <td>{{$taxassessment->user ? $taxassessment->user->name : ''}}</td>
                        </tr>
                      <tr>
                            <th>status</th>
                            <td><span class="badge bg-primary">{{$taxassessment->status}}</span></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection

