<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <table>
        <thead>
            <tr>
               <th colspan="24" style="text-align: center">
                 <h3> {{$settings->site_name_bn}} </h3>
                </th>
            </tr>
            <tr>
                <th colspan="24" style="text-align: center">
                  <p> উপজেলা : {{$settings->thana_name_bn}} জেলা : {{$settings->district_name_bn}} । </p>
                 </th>
             </tr>
             <tr>
                <th colspan="24" style="text-align: center">
                  <h4> আর্থ সামাজিক উন্নয়ন জরিপ ও কর মূল্যায়ন ফরম- {{ en2bn(Date('Y')) }} </h4>
                 </th>
             </tr>
             <tr></tr>
             <tr></tr>
            <tr>
                <th> ক্র: নং-</th>
                <th> হোল্ডিং নং </th>
                <th> নাম </th>
                <th> পিতা/স্বামীর নাম </th>
                <th> মোবাইল নং </th>
                <th> জাতীয় পরিচয়পত্র </th>
                <th> পুরুষ </th>
                <th> মহিলা </th>
                <th> মোট </th>
                <th> ওয়ার্ড </th>
                <th> গ্রাম </th>
                <th> বাসার ধরন </th>
                <th> পেশা </th>
                <th> ভাতা </th>
                <th> আনুমানিক বৎসরিক মূল্য </th>
                <th> ট্যাক্স </th>
                <th> মন্তব্য </th>
            </tr>
            <tr></tr>
        </thead>
        <tbody>
            @foreach ($taxassessments as $item)
            <tr>
                <td>{{en2bn($loop->iteration)}}</td>
                <td>{{$item->holdingno}}</td>
                <td>{{$item->name_ban}}</td>
                <td>{{$item->father_ban}}</td>
                <td>{{$item->mobile }}</td>
                <td>'{{$item->nidno }}'</td>
                <td>{{$item->number_of_male}}</td>
                <td>{{$item->number_of_female}}</td>
                <td>{{ en2bn(intval(bn2en($item->number_of_male)) +  intval(bn2en($item->number_of_female))) }} </td>
                <td>{{ $item->word?$item->word->name:'' }}</td>
                <td>{{ $item->village?$item->village->name:'' }}</td>
                <td>{{ $item->homestead?$item->homestead->name:'' }}</td>
                <td>{{ $item->occupation?$item->occupation->name:'' }}</td>
                <td>
                    @if($item->oldageallowance== "Yes")
                     বয়স্ক ভাতা,
                    @endif
                    @if($item->freedomfighter_allowance== "Yes")
                     মুক্তিযোদ্ধা ভাতা,
                    @endif
                    @if($item->physical_disabled_allowance== "Yes")
                     প্রতিবন্ধী ভাতা,
                    @endif
                    @if($item->widowallowance== "Yes")
                     বিধবা ভাতা
                    @endif

                </td>
                <td>{{$item->annual_house_value}}</td>
                <td>{{$item->tax_amount}}</td>
                <td>{{$item->notes}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
