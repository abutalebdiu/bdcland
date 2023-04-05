@extends('layouts.app', ['title' => ' টেক্স এসেসমেন্ট পরিবর্তন করুন'])
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0"> টেক্স এসেসমেন্ট পরিবর্তন করুন </h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.taxassessment.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> এসেসমেন্ট লিষ্ট</a>
        </div>
    </div>
    <form action="{{ route('admin.taxassessment.update', $taxassessment->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">সদস্যের ক্রমিক নং</label>
                            <input type="text" name="tax_sid" value="{{ $taxassessment->tax_sid }}" class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">খানা প্রধানের নাম (ইংরেজিতে)</label>
                            <input type="text" name="name" value="{{ $taxassessment->name }}" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">খানা প্রধানের নাম (বাংলায়) </label>
                            <input type="text" name="name_ban" value="{{ $taxassessment->name_ban }}"
                                class="form-control">
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">পিতার নাম (ইংরেজিতে)</label>
                            <input type="text" name="father" value="{{ $taxassessment->father }}" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">পিতার নাম (বাংলায়)</label>
                            <input type="text" name="father_ban" value="{{ $taxassessment->father_ban }}"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">মোবাইল নং (ইংরেজিতে)</label>
                            <input type="text" name="mobile" value="{{ $taxassessment->mobile }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> ইমেইল (ইংরেজিতে)</label>
                            <input type="email" name="email" value="{{ $taxassessment->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> লিঙ্গ </label>
                            <select name="gender" id="gender" class="form-control gender">
                                <option {{ $taxassessment->gender == 'পুরুষ' ? 'selected' : null }} value="পুরুষ">পুরুষ
                                </option>
                                <option {{ $taxassessment->gender == 'মহিলা' ? 'selected' : null }} value="মহিলা">মহিলা
                                </option>
                                <option {{ $taxassessment->gender == 'অন্যান্য' ? 'selected' : null }} value="অন্যান্য">
                                    অন্যান্য</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> লিঙ্গ </label>
                            <select class="form-control" name="bloodgroup">
                                <option value="">
                                    রক্তের গ্রুপ নির্বাচন করুন</option>
                                <option {{ $taxassessment->bloodgroup == 'A-' ? 'selected' : null }} value="A-">A
                                    (-)</option>
                                <option {{ $taxassessment->bloodgroup == 'A+' ? 'selected' : null }} value="A+">A (+)
                                </option>
                                <option {{ $taxassessment->bloodgroup == 'AB-' ? 'selected' : null }} value="AB-">AB (-)
                                </option>
                                <option {{ $taxassessment->bloodgroup == 'AB+' ? 'selected' : null }} value="AB+">AB (+)
                                </option>
                                <option {{ $taxassessment->bloodgroup == 'B-' ? 'selected' : null }} value="B-">B (-)
                                </option>
                                <option {{ $taxassessment->bloodgroup == 'B+' ? 'selected' : null }} value="B+">B (+)
                                </option>
                                <option {{ $taxassessment->bloodgroup == 'O-' ? 'selected' : null }} value="O-">O (-)
                                </option>
                                <option {{ $taxassessment->bloodgroup == 'O+' ? 'selected' : null }} value="O+">O (+)
                                </option>
                                <option {{ $taxassessment->bloodgroup == 'জানা নাই' ? 'selected' : null }}
                                    value="জানা নাই">জানা নাই </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> জন্মতারিখ</label>
                            <input type="date" name="birthday" value="{{ $taxassessment->birthday }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> জন্ম নিবন্ধন আছে কি না? </label>
                            <select name="birthregistration" id="birthregistration"
                                class="form-control birthregistration">
                                <option {{ $taxassessment->birthregistration == 'Yes' ? 'selected' : null }}
                                    value="Yes">আছে </option>
                                <option {{ $taxassessment->birthregistration == 'No' ? 'selected' : null }}
                                    value="No"> নাই</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">জন্মনিবন্ধন নং </label>
                            <input type="text" name="birthdayno" id="birthdayno"
                                value="{{ $taxassessment->birthdayno }}" class="form-control birthdayno">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">জন্মনিবন্ধন সনদপত্র </label>
                            <input type="file" name="birthcertificate" class="form-control birthcertificate">
                        </div>
                    </div>

                    <div class="col-12 py-2">
                        <div class="form-group">
                            <label for="">শিক্ষাগত যোগ্যতা</label>
                            <textarea name="educations" class="form-control">{{ $taxassessment->educations }}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">জাতীয় পরিচয়পত্র নাম্বার </label>
                            <input type="text" name="nidno" id="nidno" value="{{ $taxassessment->nidno }}"
                                class="form-control nidno">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">খানা প্রধানের জাতীয় পরিচয় সামনের ছবি </label>
                            <input type="file" name="nidno_front" class="form-control nidno_front">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> খানা প্রধানের জাতীয় পরিচয় পিছনের ছবি </label>
                            <input type="file" name="nidno_back" class="form-control nidno_back">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">খানা প্রধানের ছবি</label>
                            <input type="file" name="photo" class="form-control photo">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">হোল্ডিং নংঃ </label>
                            <input type="text" name="holdingno" id="holdingno"
                                value="{{ $taxassessment->holdingno }}" class="form-control holdingno">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">ঘরের সংখ্যা </label>
                            <input type="text" name="room_number" value="{{ $taxassessment->room_number }}"
                                id="room_number" class="form-control room_number">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> ওয়ার্ড নংঃ </label>
                            <select name="word_id" id="word_id" class="form-control word_id" required>
                                @foreach ($words as $word)
                                    <option {{ $word->id == $taxassessment->word_id ? 'selected' : null }}
                                        value="{{ $word->id }}">{{ $word->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> গ্রাম  ({{ $taxassessment->village?$taxassessment->village->name:'' }})</label>
                            <select name="village_id" id="village_id" class="form-control village_id" required>
                                <option value="">নির্বাচন করুন </option>
                                @foreach (App\Models\Village::get() as  $village)
                                    <option {{  $village->id == $taxassessment->village_id ? 'selected' : '' }}  value="{{ $village->id  }}">{{ $village->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> বসত ভিটার ধরণ </label>
                            <select name="homestead_id" id="homestead_id" class="form-control homestead_id">
                                @foreach ($homesteads as $item)
                                    <option {{ $item->id == $taxassessment->homestead_id ? 'selected' : null }}
                                        value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">পেশা </label>
                            <select name="occupation_id" id="occupation_id" class="form-control occupation_id">
                                @foreach ($occupations as $item)
                                    <option {{ $item->id == $taxassessment->occupation_id ? 'selected' : null }}
                                        value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">গৃহের ভূমির পরিমাণ (শতাংশ) </label>
                            <input type="text" name="total_land" id="total_land"
                                value="{{ $taxassessment->total_land }}" class="form-control total_land">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">গৃহের বাৎসরিক মূল্য (টাকায়) </label>
                            <input type="text" name="annual_house_value" id="annual_house_value"
                                value="{{ $taxassessment->annual_house_value }}" class="form-control annual_house_value">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">করের পরিমান (টাকায়) </label>
                            <input type="text" name="tax_amount" id="tax_amount"
                                value="{{ $taxassessment->tax_amount }}" class="form-control tax_amount">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">কর নির্ধারণের শুরুর অর্থ বছর </label>
                            <select name="start_taxyear" id="start_taxyear" class="form-control start_taxyear">
                                <option value="">নির্বাচন করুন</option>
                                @foreach ($taxyears as $item)
                                    <option {{ $item->id == $taxassessment->start_taxyear ? 'selected' : null }}
                                        value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> বয়স্ক ভাতা ভোগী কি না? </label>
                            <select name="oldageallowance" id="oldageallowance" class="form-control oldageallowance">
                                <option {{ $taxassessment->oldageallowance == 'Yes' ? 'selected' : null }} value="Yes">
                                    হা </option>
                                <option {{ $taxassessment->oldageallowance == 'No' ? 'selected' : null }} value="No">
                                    না</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> প্রতিবন্ধী ভাতা ভোগী কি না?</label>
                            <select name="physical_disabled_allowance" class="form-control">
                                <option {{ $taxassessment->physical_disabled_allowance == 'Yes' ? 'selected' : null }} value="Yes">
                                    হা </option>
                                <option {{ $taxassessment->physical_disabled_allowance == 'No' ? 'selected' : null }} value="No">
                                    না</option>
                            </select>
                        </div>
                    </div>
                     
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">প্রবাসী কি না? </label>
                            <select name="expatriate" id="expatriate" class="form-control expatriate">
                                <option {{ $taxassessment->expatriate == 'Yes' ? 'selected' : null }} value="Yes">হা
                                </option>
                                <option {{ $taxassessment->expatriate == 'No' ? 'selected' : null }} value="No"> না
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">মুক্তিযোদ্ধা ভাতা প্রাপ্ত কি না? </label>
                            <select name="freedomfighter_allowance" id="freedomfighter_allowance" class="form-control">
                                <option {{ $taxassessment->freedomfighter_allowance == 'Yes' ? 'selected' : null }}
                                    value="Yes">হা </option>
                                <option {{ $taxassessment->freedomfighter_allowance == 'No' ? 'selected' : null }}
                                    value="No"> না</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> পুরুষ সদ্যসের সংখ্যা? </label>
                            <input type="text" name="number_of_male" class="form-control"
                                value="{{ $taxassessment->number_of_male }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> মহিলা সদ্যসের সংখ্যা? </label>
                            <input type="text" name="number_of_female" class="form-control"
                                value="{{ $taxassessment->number_of_female }}">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> বিদ্যুৎ সুবিধা পায় কি না? </label>
                            <select name="electricity_facility" id="" class="form-control">
                                <option {{ $taxassessment->electricity_facility == 'Yes' ? 'selected' : null }}
                                    value="Yes">হা </option>
                                <option {{ $taxassessment->electricity_facility == 'No' ? 'selected' : null }}
                                    value="No"> না</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for="">নিরাপদ পানি </label>
                            <select name="safewater" id="" class="form-control safewater">
                                <option {{ $taxassessment->safewater == 'Yes' ? 'selected' : null }} value="Yes">হা
                                </option>
                                <option {{ $taxassessment->safewater == 'No' ? 'selected' : null }} value="No"> না
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> নিরাপদ পানির উৎস কি? </label>
                            <input type="text" name="safewatersource" value="{{ $taxassessment->safewatersource }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                        <div class="form-group">
                            <label for=""> স্যানিটেশন পৃথক আছে কি না? </label>
                            <select name="sanitation" id="" class="form-control sanitation">
                                <option {{ $taxassessment->sanitation == 'Yes' ? 'selected' : null }} value="Yes">হা
                                    আছে</option>
                                <option {{ $taxassessment->sanitation == 'No' ? 'selected' : null }} value="No"> না
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 py-2">
                        <div class="form-group">
                            <label for=""> মন্তব্য </label>
                            <input type="text" name="notes" class="form-control"
                                value="{{ $taxassessment->notes }}">
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="user_id">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </div>
        </div>
    </form>

    @push('js')
        <script>
            $('#word_id').on('change', function() {
                var word_id = $(this).val();
                $.ajax({
                    url: "{{ route('admin.village.ajax.show') }}",
                    type: "post",
                    data: {
                        word_id: word_id
                    },
                    success: function(data) {
                        $('#village_id').html(data);
                    }
                });

            });
        </script>
    @endpush
@endsection
